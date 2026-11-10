<?php
/**
 * Cross-Verification Tool for Bootstrap 5.3 Utility Classes
 * Verifies that all mapped classes in bootstrap_class_mapping.txt have their
 * mapped utility classes present in every template file where they appear.
 */

$rootDir = realpath(__DIR__ . '/..');
$mappingFile = $rootDir . DIRECTORY_SEPARATOR . 'bootstrap_class_mapping.txt';

if (!file_exists($mappingFile)) {
    die("Error: bootstrap_class_mapping.txt not found!\n");
}

// 1. Load Mappings
$mappings = [];
$lines = file($mappingFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

foreach ($lines as $line) {
    $line = trim($line);
    if (empty($line) || str_starts_with($line, '#') || str_starts_with($line, '=') || str_starts_with($line, '-')) {
        continue;
    }

    if (preg_match('/^([a-zA-Z0-9_.-]+)\s*-\s*(.+)$/', $line, $matches)) {
        $customClass = trim($matches[1]);
        $rawBootstrap = trim($matches[2]);
        $bsClasses = array_values(array_filter(array_map('trim', explode(',', $rawBootstrap))));
        if (!empty($bsClasses)) {
            $mappings[$customClass] = $bsClasses;
        }
    }
}

echo "=================================================================\n";
echo "   Cross-Verification: bootstrap_class_mapping.txt Audit\n";
echo "=================================================================\n";
echo "Loaded " . count($mappings) . " class mappings.\n\n";

// 2. Scan Workspace Files
function getWorkspaceTemplates($dir) {
    $files = [];
    $iterator = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($dir, RecursiveDirectoryIterator::SKIP_DOTS)
    );

    foreach ($iterator as $file) {
        $path = $file->getPathname();
        
        // Exclude vendors, git, tools, and backups
        if (str_contains($path, DIRECTORY_SEPARATOR . '.git' . DIRECTORY_SEPARATOR) ||
            str_contains($path, DIRECTORY_SEPARATOR . 'node_modules' . DIRECTORY_SEPARATOR) ||
            str_contains($path, DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR) ||
            str_contains($path, DIRECTORY_SEPARATOR . 'tools' . DIRECTORY_SEPARATOR) ||
            str_contains($path, '.bak') ||
            str_contains($path, 'style.css')
        ) {
            continue;
        }

        $ext = strtolower(pathinfo($path, PATHINFO_EXTENSION));
        if (in_array($ext, ['php', 'html', 'inc'])) {
            $files[] = $path;
        }
    }
    return $files;
}

$templateFiles = getWorkspaceTemplates($rootDir);
echo "Scanning " . count($templateFiles) . " template files...\n\n";

// 3. Perform Deep Verification
$results = [
    'fully_verified_classes' => [],
    'missing_instances' => [],
    'not_in_templates' => [],
    'total_checked_instances' => 0
];

foreach ($mappings as $customClass => $expectedBsClasses) {
    // Escape for regex
    $escapedClass = preg_quote($customClass, '/');
    $instancesFound = 0;
    $classHasDefects = false;

    foreach ($templateFiles as $filePath) {
        $content = file_get_contents($filePath);
        $relPath = str_replace($rootDir . DIRECTORY_SEPARATOR, '', $filePath);

        // Protect PHP blocks
        $phpPlaceholders = [];
        $placeholderCounter = 0;
        $protectedContent = preg_replace_callback('/<\?(?:php|=).*?\?>/s', function($phpMatch) use (&$phpPlaceholders, &$placeholderCounter) {
            $key = '___PHPTAG_' . ($placeholderCounter++) . '___';
            $phpPlaceholders[$key] = $phpMatch[0];
            return $key;
        }, $content);

        // Match class="..." or class='...'
        if (preg_match_all('/class\s*=\s*(["\'])(.*?)\1/is', $protectedContent, $matches, PREG_OFFSET_CAPTURE)) {
            foreach ($matches[2] as $idx => $match) {
                $classAttrValue = $match[0];
                $offset = $match[1];

                // Calculate line number
                $lineNumber = substr_count(substr($protectedContent, 0, $offset), "\n") + 1;

                // Split tokens
                $tokens = preg_split('/\s+/', trim($classAttrValue));
                if (in_array($customClass, $tokens)) {
                    $instancesFound++;
                    $results['total_checked_instances']++;

                    // Check which expected bootstrap classes are missing
                    $missingClasses = [];
                    foreach ($expectedBsClasses as $expected) {
                        if (!in_array($expected, $tokens)) {
                            $missingClasses[] = $expected;
                        }
                    }

                    if (!empty($missingClasses)) {
                        $classHasDefects = true;
                        // Restore PHP in display
                        $displayAttr = str_replace(array_keys($phpPlaceholders), array_values($phpPlaceholders), $classAttrValue);
                        $results['missing_instances'][] = [
                            'class' => $customClass,
                            'file' => $relPath,
                            'line' => $lineNumber,
                            'missing' => $missingClasses,
                            'actual_attr' => $displayAttr
                        ];
                    }
                }
            }
        }
    }

    if ($instancesFound === 0) {
        $results['not_in_templates'][$customClass] = $expectedBsClasses;
    } elseif (!$classHasDefects) {
        $results['fully_verified_classes'][$customClass] = [
            'count' => $instancesFound,
            'expected' => $expectedBsClasses
        ];
    }
}

// 4. Output Detailed Report
echo "-----------------------------------------------------------------\n";
echo "   Verification Results\n";
echo "-----------------------------------------------------------------\n";
echo "Total Class Mappings in File:         " . count($mappings) . "\n";
echo "Classes Active in HTML/PHP Templates: " . (count($results['fully_verified_classes']) + (empty($results['missing_instances']) ? 0 : 1)) . "\n";
echo "Total HTML Class Instances Checked:   " . $results['total_checked_instances'] . "\n";
echo "Defects / Missing Utility Classes:    " . count($results['missing_instances']) . "\n";
echo "Classes not in static templates:      " . count($results['not_in_templates']) . " (dynamic / CSS-only)\n\n";

if (!empty($results['missing_instances'])) {
    echo "=================================================================\n";
    echo "   [!] DEFECTS DETECTED - MISSING UTILITY CLASSES:\n";
    echo "=================================================================\n";
    foreach ($results['missing_instances'] as $item) {
        echo "File: {$item['file']}:{$item['line']}\n";
        echo "  Class:   .{$item['class']}\n";
        echo "  Missing: " . implode(', ', $item['missing']) . "\n";
        echo "  Current: {$item['actual_attr']}\n\n";
    }
} else {
    echo "=================================================================\n";
    echo "   [SUCCESS] ALL ACTIVE CLASSES HAVE 100% OF THEIR UTILITY CLASSES!\n";
    echo "=================================================================\n";
    echo "Every single occurrence of each mapped class in every template file\n";
    echo "contains all of its mapped Bootstrap utility classes.\n\n";
}

echo "-----------------------------------------------------------------\n";
echo "   Detailed Breakdown of Active Classes (Instances Verified):\n";
echo "-----------------------------------------------------------------\n";
ksort($results['fully_verified_classes']);
foreach ($results['fully_verified_classes'] as $cls => $data) {
    printf("  ✓ .%-30s [%2d occurrences] -> %s\n", $cls, $data['count'], implode(', ', $data['expected']));
}

if (!empty($results['not_in_templates'])) {
    echo "\n-----------------------------------------------------------------\n";
    echo "   Classes Not Found in Static Templates (CSS/JS or State only):\n";
    echo "-----------------------------------------------------------------\n";
    ksort($results['not_in_templates']);
    foreach ($results['not_in_templates'] as $cls => $expected) {
        printf("  - .%-30s (Reason: Pure CSS/hover/JS or dynamic render)\n", $cls);
    }
}

echo "\nVerification script completed successfully.\n";

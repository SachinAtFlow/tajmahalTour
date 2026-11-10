<?php
/**
 * Style.css Redundant Property Cleaner
 * Cleans properties from assets/css/style.css that are now handled by Bootstrap 5.3 utilities.
 */

$rootDir = realpath(__DIR__ . '/..');
$cssFile = $rootDir . DIRECTORY_SEPARATOR . 'assets' . DIRECTORY_SEPARATOR . 'css' . DIRECTORY_SEPARATOR . 'style.css';
$mappingFile = $rootDir . DIRECTORY_SEPARATOR . 'bootstrap_class_mapping.txt';

if (!file_exists($cssFile) || !file_exists($mappingFile)) {
    die("Error: Required files not found.\n");
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
        $className = trim($matches[1]);
        $bsList = array_values(array_filter(array_map('trim', explode(',', trim($matches[2])))));
        $mappings[$className] = $bsList;
    }
}

// Map each Bootstrap utility to property patterns to remove from CSS
$utilityToCssPatterns = [
    'position-relative'      => ['/^\s*position\s*:\s*relative\s*;?/i'],
    'position-absolute'      => ['/^\s*position\s*:\s*absolute\s*;?/i'],
    'position-fixed'         => ['/^\s*position\s*:\s*fixed\s*;?/i'],
    'sticky-top'             => ['/^\s*position\s*:\s*sticky\s*;?/i', '/^\s*top\s*:\s*0\s*;?/i'],
    'overflow-hidden'        => ['/^\s*overflow\s*:\s*hidden\s*;?/i'],
    'd-flex'                 => ['/^\s*display\s*:\s*flex\s*;?/i'],
    'd-block'                => ['/^\s*display\s*:\s*block\s*;?/i'],
    'd-none'                 => ['/^\s*display\s*:\s*none\s*;?/i'],
    'd-inline-flex'          => ['/^\s*display\s*:\s*inline-flex\s*;?/i'],
    'w-100'                  => ['/^\s*width\s*:\s*100%\s*;?/i'],
    'h-100'                  => ['/^\s*height\s*:\s*100%\s*;?/i'],
    'w-auto'                 => ['/^\s*width\s*:\s*auto\s*;?/i'],
    'h-auto'                 => ['/^\s*height\s*:\s*auto\s*;?/i'],
    'rounded-circle'         => ['/^\s*border-radius\s*:\s*(50%|50rem|9999px|999px)\s*;?/i'],
    'rounded-pill'           => ['/^\s*border-radius\s*:\s*(50rem|9999px|99px|50px|30px)\s*;?/i'],
    'flex-column'            => ['/^\s*flex-direction\s*:\s*column\s*;?/i'],
    'align-items-center'     => ['/^\s*align-items\s*:\s*center\s*;?/i'],
    'align-items-end'        => ['/^\s*align-items\s*:\s*(flex-end|end)\s*;?/i'],
    'justify-content-center' => ['/^\s*justify-content\s*:\s*center\s*;?/i'],
    'justify-content-between'=> ['/^\s*justify-content\s*:\s*space-between\s*;?/i'],
    'flex-grow-1'            => ['/^\s*flex-grow\s*:\s*1\s*;?/i'],
    'flex-shrink-0'          => ['/^\s*flex-shrink\s*:\s*0\s*;?/i'],
    'flex-wrap'              => ['/^\s*flex-wrap\s*:\s*wrap\s*;?/i'],
    'text-center'            => ['/^\s*text-align\s*:\s*center\s*;?/i'],
    'text-decoration-none'   => ['/^\s*text-decoration\s*:\s*none\s*;?/i'],
    'fw-bold'                => ['/^\s*font-weight\s*:\s*(700|bold|var\(--font-weight-bold\))\s*;?/i'],
    'fw-semibold'            => ['/^\s*font-weight\s*:\s*(600|var\(--font-weight-semibold\))\s*;?/i'],
    'fw-medium'              => ['/^\s*font-weight\s*:\s*(500|var\(--font-weight-medium\))\s*;?/i'],
    'text-uppercase'         => ['/^\s*text-transform\s*:\s*uppercase\s*;?/i'],
    'm-0'                    => ['/^\s*margin\s*:\s*0\s*;?/i'],
    'border-0'               => ['/^\s*border\s*:\s*(none|0)\s*;?/i'],
    'top-0'                  => ['/^\s*top\s*:\s*0\s*;?/i'],
    'bottom-0'               => ['/^\s*bottom\s*:\s*0\s*;?/i'],
    'start-0'                => ['/^\s*left\s*:\s*0\s*;?/i'],
    'end-0'                  => ['/^\s*right\s*:\s*0\s*;?/i'],
    'z-0'                    => ['/^\s*z-index\s*:\s*0\s*;?/i'],
    'z-1'                    => ['/^\s*z-index\s*:\s*1\s*;?/i'],
    'z-2'                    => ['/^\s*z-index\s*:\s*2\s*;?/i'],
    'z-3'                    => ['/^\s*z-index\s*:\s*3\s*;?/i'],
    'mx-auto'                => ['/^\s*margin\s*:\s*0\s+auto\s*;?/i', '/^\s*margin\s*:\s*auto\s*;?/i'],
];

// Read style.css lines
$cssLines = file($cssFile);
$totalOriginalLines = count($cssLines);

$isDryRun = !in_array('--apply', $argv);

echo "=================================================================\n";
echo "   Style.css Redundant Layout Properties Cleaner\n";
echo "   Mode: " . ($isDryRun ? "DRY-RUN (Preview Only)" : "LIVE APPLY") . "\n";
echo "=================================================================\n";
echo "Original style.css: $totalOriginalLines lines (" . filesize($cssFile) . " bytes)\n\n";

// Parse CSS line by line, tracking current selector block
$newLines = [];
$currentSelectors = [];
$inBlock = false;
$braceDepth = 0;
$removedProperties = [];
$cleanableClassInBlock = null;
$cleanableUtilities = [];

for ($i = 0; $i < count($cssLines); $i++) {
    $line = $cssLines[$i];
    $trimmed = trim($line);

    // Track comments: NEVER touch lines that are pure comments or contain commented-out code
    if (str_starts_with($trimmed, '/*') && str_ends_with($trimmed, '*/')) {
        $newLines[] = $line;
        continue;
    }

    // Check for open brace
    if (strpos($line, '{') !== false && !$inBlock) {
        $inBlock = true;
        // Extract selector text before {
        $selectorPart = trim(substr($line, 0, strpos($line, '{')));
        $cleanableClassInBlock = null;
        $cleanableUtilities = [];

        // Check if any mapped class matches this selector exactly
        foreach ($mappings as $mappedClass => $utilities) {
            // Check for .className without pseudo-elements (unless .className.active is mapped)
            if (preg_match('/(^|[,\s])\.' . preg_quote($mappedClass, '/') . '(\s*($|[,{]))/', $selectorPart)) {
                $cleanableClassInBlock = $mappedClass;
                $cleanableUtilities = $utilities;
                break;
            }
        }
        $newLines[] = $line;
        continue;
    }

    // Check for close brace
    if (strpos($line, '}') !== false && $inBlock) {
        $inBlock = false;
        $cleanableClassInBlock = null;
        $cleanableUtilities = [];
        $newLines[] = $line;
        continue;
    }

    // Inside a cleanable rule block
    if ($inBlock && $cleanableClassInBlock !== null) {
        // Check if this declaration matches any cleanable utility property
        $matchedPattern = false;
        foreach ($cleanableUtilities as $util) {
            if (isset($utilityToCssPatterns[$util])) {
                foreach ($utilityToCssPatterns[$util] as $pattern) {
                    if (preg_match($pattern, $trimmed)) {
                        $matchedPattern = true;
                        $removedProperties[] = [
                            'line_num' => $i + 1,
                            'class'    => $cleanableClassInBlock,
                            'utility'  => $util,
                            'code'     => $trimmed
                        ];
                        break 2;
                    }
                }
            }
        }

        if ($matchedPattern) {
            // Skip this redundant declaration
            continue;
        }
    }

    $newLines[] = $line;
}

// Clean up any empty blocks: e.g. .class-name {\n}
$cleanedContent = implode('', $newLines);

// Output report
echo "Total Redundant Declarations Identified: " . count($removedProperties) . "\n\n";

echo "-----------------------------------------------------------------\n";
echo "   Sample of Redundant Properties to be Removed:\n";
echo "-----------------------------------------------------------------\n";
$sample = array_slice($removedProperties, 0, 25);
foreach ($sample as $p) {
    printf("Line %4d: .%-25s => %-28s (Replaced by: %s)\n", $p['line_num'], $p['class'], $p['code'], $p['utility']);
}
if (count($removedProperties) > 25) {
    echo "  ... and " . (count($removedProperties) - 25) . " more redundant declarations.\n";
}

$newSize = strlen($cleanedContent);
$oldSize = filesize($cssFile);
$savedBytes = $oldSize - $newSize;
$savedLines = $totalOriginalLines - substr_count($cleanedContent, "\n");

echo "\n-----------------------------------------------------------------\n";
echo "   Size & Reduction Summary:\n";
echo "-----------------------------------------------------------------\n";
echo "Original Size: " . number_format($oldSize) . " bytes (" . $totalOriginalLines . " lines)\n";
echo "New Size:      " . number_format($newSize) . " bytes (" . substr_count($cleanedContent, "\n") . " lines)\n";
echo "Reduction:     " . number_format($savedBytes) . " bytes (~" . round(($savedBytes / $oldSize) * 100, 1) . "% size reduction)\n";
echo "Lines Saved:   " . $savedLines . " lines removed from style.css\n";

if (!$isDryRun) {
    // 1. Create Timestamped Backup
    $backupFile = $cssFile . '.bak.redundancy_cleanup';
    copy($cssFile, $backupFile);
    echo "\nBackup created: $backupFile\n";

    // 2. Write cleaned CSS
    file_put_contents($cssFile, $cleanedContent);
    echo "Successfully updated: $cssFile\n";
} else {
    echo "\n[DRY-RUN ONLY] No changes were written to style.css. Run with --apply to execute.\n";
}


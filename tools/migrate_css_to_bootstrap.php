<?php
/**
 * CSS to Bootstrap 5.3 Migration Automation Tool
 * 
 * Safely analyzes custom CSS rules in style.css, identifies 100% convertible utility rules,
 * replaces them with standard Bootstrap 5.3 utility classes across PHP/HTML templates,
 * and removes the redundant rules from style.css.
 * 
 * Usage:
 *   Dry Run (Preview Only, No Changes):
 *     php tools/migrate_css_to_bootstrap.php --dry-run
 * 
 *   Apply Changes (Creates Automatic Backup First):
 *     php tools/migrate_css_to_bootstrap.php --apply
 */

class BootstrapCSSMigrator {

    private string $cssFile;
    private string $rootDir;
    private bool $dryRun = true;

    // 1-to-1 Mapping Table: CSS Property + Value => Bootstrap 5 Utility Class
    private array $utilityMap = [
        // Display
        'display:flex'             => 'd-flex',
        'display:inline-flex'      => 'd-inline-flex',
        'display:block'            => 'd-block',
        'display:inline-block'     => 'd-inline-block',
        'display:none'             => 'd-none',
        'display:grid'             => 'd-grid',

        // Flexbox Alignment
        'align-items:center'       => 'align-items-center',
        'align-items:flex-start'   => 'align-items-start',
        'align-items:flex-end'     => 'align-items-end',
        'align-items:baseline'     => 'align-items-baseline',
        'align-items:stretch'      => 'align-items-stretch',

        // Flexbox Justification
        'justify-content:center'        => 'justify-content-center',
        'justify-content:space-between' => 'justify-content-between',
        'justify-content:space-around'  => 'justify-content-around',
        'justify-content:flex-start'    => 'justify-content-start',
        'justify-content:flex-end'      => 'justify-content-end',

        // Flexbox Direction & Wrap
        'flex-direction:column'    => 'flex-column',
        'flex-direction:row'       => 'flex-row',
        'flex-wrap:wrap'           => 'flex-wrap',
        'flex-wrap:nowrap'         => 'flex-nowrap',
        'flex-grow:1'              => 'flex-grow-1',
        'flex-shrink:0'            => 'flex-shrink-0',

        // Positioning
        'position:relative'        => 'position-relative',
        'position:absolute'        => 'position-absolute',
        'position:fixed'           => 'position-fixed',
        'position:sticky'          => 'sticky-top',
        'top:0'                    => 'top-0',
        'bottom:0'                 => 'bottom-0',
        'left:0'                   => 'start-0',
        'right:0'                  => 'end-0',
        'z-index:0'                => 'z-0',
        'z-index:1'                => 'z-1',
        'z-index:2'                => 'z-2',
        'z-index:3'                => 'z-3',

        // Typography
        'text-align:center'        => 'text-center',
        'text-align:left'          => 'text-start',
        'text-align:right'         => 'text-end',
        'text-decoration:none'     => 'text-decoration-none',
        'text-transform:uppercase' => 'text-uppercase',
        'text-transform:lowercase' => 'text-lowercase',
        'font-weight:700'          => 'fw-bold',
        'font-weight:bold'         => 'fw-bold',
        'font-weight:600'          => 'fw-semibold',
        'font-weight:500'          => 'fw-medium',
        'font-weight:400'          => 'fw-normal',
        'font-weight:normal'       => 'fw-normal',

        // Dimensions & Overflow
        'width:100%'               => 'w-100',
        'height:100%'              => 'h-100',
        'overflow:hidden'          => 'overflow-hidden',
        'overflow:visible'         => 'overflow-visible',
        'overflow:auto'            => 'overflow-auto',

        // Borders & Radius
        'border:none'              => 'border-0',
        'border:0'                 => 'border-0',
        'border-radius:50%'        => 'rounded-circle',
        'border-radius:50rem'      => 'rounded-pill',
        'border-radius:9999px'     => 'rounded-pill',
    ];

    public function __construct(string $rootDir, bool $dryRun = true) {
        $this->rootDir = realpath($rootDir) ?: rtrim($rootDir, '/\\');
        $this->cssFile = $this->rootDir . DIRECTORY_SEPARATOR . 'assets' . DIRECTORY_SEPARATOR . 'css' . DIRECTORY_SEPARATOR . 'style.css';
        $this->dryRun = $dryRun;
    }

    public function run(): void {
        echo "=================================================================\n";
        echo "   Bootstrap 5.3 Automated CSS Migration Tool\n";
        echo "   Mode: " . ($this->dryRun ? "DRY-RUN (Preview Only)" : "LIVE APPLY (Modifying Files)") . "\n";
        echo "=================================================================\n\n";

        if (!file_exists($this->cssFile)) {
            die("Error: Could not find CSS file at: {$this->cssFile}\n");
        }

        $cssContent = file_get_contents($this->cssFile);
        
        // 1. Parse Convertible CSS Rules
        $convertibleRules = $this->analyzeCSSRules($cssContent);
        echo "Total CSS Rules Analyzed in style.css: " . $convertibleRules['total_count'] . "\n";
        echo "100% Fully Convertible Utility Rules: " . count($convertibleRules['convertible']) . "\n";
        echo "Retained Rules (Animations, 3D, Gradients, Tokens): " . $convertibleRules['retained_count'] . "\n\n";

        if (empty($convertibleRules['convertible'])) {
            echo "No pure convertible rules found. style.css is already optimized!\n";
            return;
        }

        // 2. Scan PHP & HTML files in the workspace
        $targetFiles = $this->scanWorkspaceFiles();
        echo "Found " . count($targetFiles) . " PHP/HTML template files to inspect.\n\n";

        // 3. Perform Replacement Mapping
        $modifiedFiles = [];
        $rulesSuccessfullyReplaced = [];

        foreach ($convertibleRules['convertible'] as $className => $bootstrapClasses) {
            $classUsageFound = false;
            $bootstrapStr = implode(' ', $bootstrapClasses);

            foreach ($targetFiles as $file) {
                $content = file_get_contents($file);
                $relPath = str_replace($this->rootDir . DIRECTORY_SEPARATOR, '', $file);

                // Match class="..." containing this exact class name
                $pattern = '/class=(["\'])([^"\']*?\b)' . preg_quote($className, '/') . '(\b[^"\']*?)\1/i';

                if (preg_match($pattern, $content)) {
                    $classUsageFound = true;
                    $newContent = preg_replace_callback($pattern, function($matches) use ($className, $bootstrapStr) {
                        $quote = $matches[1];
                        $before = $matches[2];
                        $after = $matches[3];

                        // Combine existing classes with new Bootstrap classes
                        $allExisting = trim($before . ' ' . $after);
                        $parts = preg_split('/\s+/', $allExisting, -1, PREG_SPLIT_NO_EMPTY);
                        
                        // Remove the old custom class
                        $parts = array_diff($parts, [$className]);
                        
                        // Append the new Bootstrap classes (prevent duplicates)
                        $newParts = array_unique(array_merge($parts, explode(' ', $bootstrapStr)));
                        
                        return 'class=' . $quote . implode(' ', $newParts) . $quote;
                    }, $content);

                    if (!$this->dryRun) {
                        file_put_contents($file, $newContent);
                    }

                    $modifiedFiles[$relPath][] = [
                        'removed_class' => $className,
                        'added_bootstrap' => $bootstrapStr
                    ];
                }
            }

            if ($classUsageFound) {
                $rulesSuccessfullyReplaced[$className] = $bootstrapStr;
            }
        }

        // 4. Output Migration Results
        echo "-----------------------------------------------------------------\n";
        echo "   Migration Summary Across Workspace Files\n";
        echo "-----------------------------------------------------------------\n";
        if (empty($modifiedFiles)) {
            echo "None of the candidate classes were found in template markup.\n";
        } else {
            foreach ($modifiedFiles as $file => $changes) {
                echo "File: [{$file}]\n";
                foreach ($changes as $c) {
                    echo "   - Removed: .{$c['removed_class']}  ==> Injected: '{$c['added_bootstrap']}'\n";
                }
                echo "\n";
            }
        }

        // 5. Clean style.css (Remove converted rules)
        if (!$this->dryRun && !empty($rulesSuccessfullyReplaced)) {
            $this->backupAndCleanCSS($cssContent, array_keys($rulesSuccessfullyReplaced));
        } elseif ($this->dryRun) {
            echo "\n[INFO] Dry-run complete. No files were altered.\n";
            echo "To apply these changes automatically, run:\n";
            echo "   php tools/migrate_css_to_bootstrap.php --apply\n\n";
        }
    }

    /**
     * Parses CSS rules and determines if 100% of its declarations have a Bootstrap equivalent.
     */
    private function analyzeCSSRules(string $css): array {
        $cleanCss = preg_replace('!/\*.*?\*/!s', '', $css);
        preg_match_all('/([^{}]+)\{([^{}]+)\}/s', $cleanCss, $matches, PREG_SET_ORDER);

        $totalCount = count($matches);
        $convertible = [];
        $retainedCount = 0;

        foreach ($matches as $match) {
            $selector = trim($match[1]);
            $body = trim($match[2]);

            // Only inspect single class selectors (e.g. '.my-card', not '.my-card:hover' or '.a .b')
            if (!preg_match('/^\.([a-zA-Z0-9_-]+)$/', $selector, $classMatch)) {
                $retainedCount++;
                continue;
            }

            $className = $classMatch[1];
            $declarations = explode(';', $body);
            $matchedBootstrapClasses = [];
            $allDeclarationsConvertible = true;
            $hasAtLeastOne = false;

            foreach ($declarations as $decl) {
                $decl = trim($decl);
                if (empty($decl)) continue;

                // Normalize: remove extra spaces
                $normalized = str_replace(' ', '', strtolower($decl));

                if (isset($this->utilityMap[$normalized])) {
                    $matchedBootstrapClasses[] = $this->utilityMap[$normalized];
                    $hasAtLeastOne = true;
                } else {
                    // Even 1 non-convertible property means the whole rule MUST stay!
                    $allDeclarationsConvertible = false;
                    break;
                }
            }

            if ($allDeclarationsConvertible && $hasAtLeastOne) {
                $convertible[$className] = array_unique($matchedBootstrapClasses);
            } else {
                $retainedCount++;
            }
        }

        return [
            'total_count' => $totalCount,
            'convertible' => $convertible,
            'retained_count' => $retainedCount
        ];
    }

    /**
     * Scans for all relevant template files in the workspace.
     */
    private function scanWorkspaceFiles(): array {
        $files = [];
        $iterator = new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator($this->rootDir, RecursiveDirectoryIterator::SKIP_DOTS)
        );

        foreach ($iterator as $item) {
            if ($item->isFile()) {
                $ext = strtolower($item->getExtension());
                $path = $item->getPathname();

                // Skip vendor, git, cache, and backup files
                if (strpos($path, '.git') !== false || 
                    strpos($path, 'node_modules') !== false || 
                    strpos($path, '.bak') !== false ||
                    strpos($path, DIRECTORY_SEPARATOR . 'tools' . DIRECTORY_SEPARATOR) !== false) {
                    continue;
                }

                if (in_array($ext, ['php', 'html', 'inc'])) {
                    $files[] = $path;
                }
            }
        }

        return $files;
    }

    /**
     * Backs up original style.css and strips out the converted class rules.
     */
    private function backupAndCleanCSS(string $originalCss, array $classesToRemove): void {
        $backupPath = $this->cssFile . '.bak_' . date('Ymd_His');
        file_put_contents($backupPath, $originalCss);
        echo "Created safety backup at: " . basename($backupPath) . "\n";

        $cleanedCss = $originalCss;
        foreach ($classesToRemove as $class) {
            // Regex to remove the entire `.classname { ... }` block safely
            $pattern = '/\.' . preg_quote($class, '/') . '\s*\{[^{}]*\}\s*/m';
            $cleanedCss = preg_replace($pattern, '', $cleanedCss);
        }

        file_put_contents($this->cssFile, $cleanedCss);
        echo "Updated style.css! Successfully removed " . count($classesToRemove) . " redundant rules.\n";
    }
}

// CLI Execution Entry Point
$dryRun = true;
if (isset($argv[1]) && $argv[1] === '--apply') {
    $dryRun = false;
}

$migrator = new BootstrapCSSMigrator(__DIR__ . '/..', $dryRun);
$migrator->run();

<?php
$files = array_merge(glob('*.php'), glob('*/*.php'), glob('*/*/*.php'));
foreach ($files as $file) {
    if (is_file($file)) {
        $content = file_get_contents($file);
        if (strpos($content, 'featuredTour.php') !== false) {
            echo $file . PHP_EOL;
        }
    }
}


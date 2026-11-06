<?php
ob_start();
require __DIR__ . '/../components/top-places.php';
$html = ob_get_clean();

// Check links
$links = [
    'samedaytour/index.php',
    'uttarpradeshtour/index.php',
    'himachaltour/index.php',
    'rajasthantour/index.php',
    'punjabtour/index.php',
    'uttarakhandtour/index.php',
    'gujarattour/index.php',
    'nepaltour/index.php'
];

foreach ($links as $l) {
    if (strpos($html, $l) !== false) {
        echo "Link $l is PRESENT in top-places." . PHP_EOL;
    } else {
        echo "Link $l is MISSING in top-places!" . PHP_EOL;
    }
}

// Check counts
preg_match_all('/<p class="text-secondary small mb-0">\s*([0-9]+ Tours)\s*<\/p>/', $html, $matches);
print_r(array_unique($matches[1]));


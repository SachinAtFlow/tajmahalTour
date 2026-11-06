<?php
$_SERVER['PHP_SELF'] = '/tajmahalTour/tourPackage.php';
$_SERVER['SCRIPT_NAME'] = '/tajmahalTour/tourPackage.php';
ob_start();
require __DIR__ . '/../tourPackage.php';
$html = ob_get_clean();

// 1. Check that "All Tours" extra filter is REMOVED
if (strpos($html, 'All Tours') === false) {
    echo "PASS: 'All Tours' extra filter is REMOVED from tourPackage.php." . PHP_EOL;
} else {
    echo "FAIL: 'All Tours' filter is still present on tourPackage.php!" . PHP_EOL;
}

// 2. Check that the 12 filters are present on tourPackage.php
$filters = ['top', 'delhi', 'uttar-pradesh', 'rajasthan', 'himachal', 'uttarakhand', 'punjab', 'gujarat', 'nepal', 'spiritual', 'wildlife', 'weekend'];
foreach ($filters as $f) {
    if (strpos($html, "data-category=\"$f\"") !== false) {
        echo "PASS: Filter '$f' is present on tourPackage.php." . PHP_EOL;
    } else {
        echo "FAIL: Filter '$f' missing on tourPackage.php!" . PHP_EOL;
    }
}

// 3. Check attraction cards links
$attractionLinks = [
    'samedaytour/index.php',
    'goldentriangletour/index.php',
    'rajasthantour/index.php',
    'himachaltour/index.php',
    'uttarakhandtour/index.php',
    'punjabtour/index.php',
    'uttarpradeshtour/index.php',
    'gujarattour/index.php',
    'nepaltour/index.php',
    'spiritualtour/index.php',
    'wildlifetour/index.php',
    'weekendtour/index.php'
];

foreach ($attractionLinks as $al) {
    if (strpos($html, $al) !== false) {
        echo "PASS: Attraction card link '$al' found." . PHP_EOL;
    } else {
        echo "FAIL: Attraction card link '$al' missing!" . PHP_EOL;
    }
}

// 4. Check attraction click handler script
$attractionCode = file_get_contents(__DIR__ . '/../components/attraction.php');
if (strpos($attractionCode, 'window.location.href = link.href') !== false && strpos($attractionCode, 'scrollIntoView') === false) {
    echo "PASS: Attraction click handler opens respective page link directly." . PHP_EOL;
} else {
    echo "FAIL: Attraction click handler still has scroll or missing window.location.href!" . PHP_EOL;
}


<?php
$_SERVER['PHP_SELF'] = '/tajmahalTour/index.php';
$_SERVER['SCRIPT_NAME'] = '/tajmahalTour/index.php';
ob_start();
require __DIR__ . '/../index.php';
$indexHtml = ob_get_clean();

// Count tour cards rendered
preg_match_all('/class="col-12 col-sm-6 col-lg-3 tour-card-col"/', $indexHtml, $indexMatches);
echo "Cards rendered on index.php: " . count($indexMatches[0]) . PHP_EOL;

// Check if Explore More Tours button is present
if (strpos($indexHtml, 'Explore More Tours') !== false && strpos($indexHtml, 'tourPackage.php') !== false) {
    echo "Explore More Tours button is PRESENT on index.php and links to tourPackage.php." . PHP_EOL;
} else {
    echo "Explore More Tours button MISSING on index.php!" . PHP_EOL;
}

// Now test tourPackage.php
$_SERVER['PHP_SELF'] = '/tajmahalTour/tourPackage.php';
$_SERVER['SCRIPT_NAME'] = '/tajmahalTour/tourPackage.php';
ob_start();
require __DIR__ . '/../tourPackage.php';
$packageHtml = ob_get_clean();

preg_match_all('/class="col-12 col-sm-6 col-lg-3 tour-card-col"/', $packageHtml, $packageMatches);
echo "Cards rendered on tourPackage.php: " . count($packageMatches[0]) . PHP_EOL;

if (strpos($packageHtml, 'tour-filter-tabs') !== false) {
    echo "Filter tabs are PRESENT on tourPackage.php." . PHP_EOL;
} else {
    echo "Filter tabs MISSING on tourPackage.php!" . PHP_EOL;
}


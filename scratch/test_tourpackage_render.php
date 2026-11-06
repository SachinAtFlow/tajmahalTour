<?php
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

if (strpos($packageHtml, 'Explore More Tours') === false) {
    echo "Explore More Tours button is properly omitted on tourPackage.php." . PHP_EOL;
} else {
    echo "Explore More Tours button should NOT be on tourPackage.php!" . PHP_EOL;
}


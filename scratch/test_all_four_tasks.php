<?php
echo "=== VERIFYING TASK 1: TOP DESTINATIONS ===" . PHP_EOL;
ob_start();
require __DIR__ . '/../components/top-places.php';
$destHtml = ob_get_clean();

$expectedDestLinks = [
    'samedaytour/index.php',
    'uttarpradeshtour/index.php',
    'himachaltour/index.php',
    'rajasthantour/index.php',
    'punjabtour/index.php',
    'uttarakhandtour/index.php',
    'gujarattour/index.php',
    'nepaltour/index.php'
];

foreach ($expectedDestLinks as $el) {
    if (strpos($destHtml, $el) !== false) {
        echo "PASS: Link '$el' found in top destinations." . PHP_EOL;
    } else {
        echo "FAIL: Link '$el' missing in top destinations!" . PHP_EOL;
    }
}

if (strpos($destHtml, '.html') === false && strpos($destHtml, 'tourPackageDetail.php') === false) {
    echo "PASS: No dummy or broken html links in top destinations." . PHP_EOL;
} else {
    echo "FAIL: Found broken dummy links in top destinations!" . PHP_EOL;
}

echo PHP_EOL . "=== VERIFYING TASK 2: FEATURED TOURS / TOUR DATA LINKS ===" . PHP_EOL;
require __DIR__ . '/../data/tourData.php';
$brokenCount = 0;
foreach ($toursData as $t) {
    $link = $t['link'] ?? '';
    if (strpos($link, '.html') !== false || strpos($link, 'tourPackageDetail.php') !== false) {
        echo "FAIL: Tour ID " . $t['id'] . " has broken link: " . $link . PHP_EOL;
        $brokenCount++;
    }
}
if ($brokenCount === 0) {
    echo "PASS: All " . count($toursData) . " tours have clean, working links to live templates/pages." . PHP_EOL;
}

echo PHP_EOL . "=== VERIFYING TASK 3: ABOUT US MORE ABOUT BUTTON ===" . PHP_EOL;
ob_start();
require __DIR__ . '/../components/about.php';
$aboutHtml = ob_get_clean();

if (strpos($aboutHtml, 'aboutUs.php') !== false) {
    echo "PASS: 'More about' button correctly links to aboutUs.php." . PHP_EOL;
} else {
    echo "FAIL: 'More about' button does not link to aboutUs.php!" . PHP_EOL;
}

echo PHP_EOL . "=== VERIFYING TASK 4: FINAL CTA BOOKING LINK & HERO ID ===" . PHP_EOL;
ob_start();
require __DIR__ . '/../components/cta.php';
$ctaHtml = ob_get_clean();

if (strpos($ctaHtml, 'index.php#booking') !== false) {
    echo "PASS: Final CTA 'Book Your Tour Now' button links to index.php#booking." . PHP_EOL;
} else {
    echo "FAIL: Final CTA button missing index.php#booking link!" . PHP_EOL;
}

$heroContent = file_get_contents(__DIR__ . '/../components/hero.php');
if (strpos($heroContent, 'id="booking"') !== false) {
    echo "PASS: Hero search form contains id=\"booking\"." . PHP_EOL;
} else {
    echo "FAIL: Hero search form missing id=\"booking\"!" . PHP_EOL;
}


<?php
ob_start();
require __DIR__ . '/../components/testimonials.php';
$html = ob_get_clean();

// Check number of swiper-slide elements
preg_match_all('/class="swiper-slide/', $html, $slides);
echo "Total slides rendered: " . count($slides[0]) . PHP_EOL;

// Check avatar occurrences
for ($i = 1; $i <= 7; $i++) {
    if (strpos($html, "avatar$i.jpg") !== false) {
        echo "avatar$i.jpg is PRESENT in rendered HTML." . PHP_EOL;
    } else {
        echo "avatar$i.jpg is MISSING in rendered HTML!" . PHP_EOL;
    }
}

// Check review names
$names = ["Mykhailo Z", "emperosofroam", "Abigail A", "GrandTour28588555542", "Dawood N", "OnAir22262841336", "Navigate14735990789"];
foreach ($names as $name) {
    if (strpos($html, $name) !== false) {
        echo "Reviewer '$name' is PRESENT." . PHP_EOL;
    } else {
        echo "Reviewer '$name' is MISSING!" . PHP_EOL;
    }
}


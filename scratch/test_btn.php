<?php
ob_start();
require __DIR__ . '/../components/testimonials.php';
$h = ob_get_clean();

if (strpos($h, 'https://share.google/YvijXnULif0EI5xRG') !== false && strpos($h, 'Write a Review on Google') !== false) {
    echo "SUCCESS: Google Review button successfully rendered with target link https://share.google/YvijXnULif0EI5xRG" . PHP_EOL;
} else {
    echo "FAIL: Button or link not found" . PHP_EOL;
}


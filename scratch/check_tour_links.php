<?php
require_once __DIR__ . '/../data/tourData.php';
echo "Total cards in tourData.php: " . count($toursData) . PHP_EOL;
$missingOrBroken = 0;
foreach ($toursData as $idx => $t) {
    $link = $t['link'] ?? '';
    $id = $t['id'] ?? $idx;
    $title = $t['title'] ?? '';
    echo "ID $id: '$title' -> '$link'" . PHP_EOL;
}


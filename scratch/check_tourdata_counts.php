<?php
require_once __DIR__ . '/../data/tourData.php';
$categoryCounts = [];
foreach ($toursData as $t) {
    $cats = explode(' ', $t['category'] ?? '');
    foreach ($cats as $c) {
        $c = trim($c);
        if ($c) {
            $categoryCounts[$c] = ($categoryCounts[$c] ?? 0) + 1;
        }
    }
}
print_r($categoryCounts);


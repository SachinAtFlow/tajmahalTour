<?php
require_once __DIR__ . '/../data/tourData.php';
$featured = array_filter($toursData, function($t) {
    return !empty($t['is_featured']) && $t['is_featured'] === true;
});
echo "Total featured: " . count($featured) . PHP_EOL;
foreach ($featured as $t) {
    echo $t['id'] . ' | ' . $t['title'] . PHP_EOL;
}


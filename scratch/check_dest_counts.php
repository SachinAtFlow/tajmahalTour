<?php
require_once __DIR__ . '/../data/tourData.php';
$destMap = [
    'Delhi' => ['delhi'],
    'Uttar Pradesh' => ['uttar-pradesh', 'agra'],
    'Himachal' => ['himachal'],
    'Rajasthan' => ['rajasthan'],
    'Punjab' => ['punjab'],
    'Uttarakhand' => ['uttarakhand', 'uttrakhand'],
    'Gujarat' => ['gujarat', 'gujrat'],
    'Nepal' => ['nepal'],
];

foreach ($destMap as $name => $keys) {
    $count = 0;
    foreach ($toursData as $t) {
        $c = strtolower($t['category'] ?? '');
        $matched = false;
        foreach ($keys as $k) {
            if (strpos($c, $k) !== false) {
                $matched = true;
                break;
            }
        }
        if ($matched) $count++;
    }
    echo "$name in tourData.php: $count tours" . PHP_EOL;
}


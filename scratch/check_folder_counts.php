<?php
$folders = [
    'samedaytour',
    'goldentriangletour',
    'rajasthantour',
    'himachaltour',
    'uttarakhandtour',
    'punjabtour',
    'uttarpradeshtour',
    'gujarattour',
    'nepaltour',
    'spiritualtour',
    'wildlifetour',
    'weekendtour'
];

foreach ($folders as $f) {
    $dataFile = __DIR__ . '/../' . $f . '/data.php';
    if (file_exists($dataFile)) {
        $tours = [];
        include $dataFile;
        echo $f . ': ' . count($tours) . ' tours' . PHP_EOL;
    } else {
        echo $f . ': NO DATA FILE' . PHP_EOL;
    }
}


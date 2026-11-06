<?php
function getFolderTourCount($folder) {
    $dataFile = __DIR__ . '/../' . $folder . '/data.php';
    if (file_exists($dataFile)) {
        $tours = [];
        include $dataFile;
        if (!empty($tours) && is_array($tours)) {
            return count($tours) . ' Tours';
        }
    }
    return '5 Tours';
}

$destinations = [
    ['name' => 'Delhi', 'folder' => 'samedaytour', 'link' => 'samedaytour/index.php', 'image' => 'assets/images/delhi/indiaGate.avif'],
    ['name' => 'Uttar Pradesh', 'folder' => 'uttarpradeshtour', 'link' => 'uttarpradeshtour/index.php', 'image' => 'assets/images/uttarPradesh/tajmahal.avif'],
    ['name' => 'Himachal', 'folder' => 'himachaltour', 'link' => 'himachaltour/index.php', 'image' => 'assets/images/himachal/himachal.avif'],
    ['name' => 'Rajasthan', 'folder' => 'rajasthantour', 'link' => 'rajasthantour/index.php', 'image' => 'assets/images/rajasthan/rajasthan.avif'],
    ['name' => 'Punjab', 'folder' => 'punjabtour', 'link' => 'punjabtour/index.php', 'image' => 'assets/images/punjab/goldenTemple.avif'],
    ['name' => 'Uttarakhand', 'folder' => 'uttarakhandtour', 'link' => 'uttarakhandtour/index.php', 'image' => 'assets/images/uttrakhand/uttrakhand.avif'],
    ['name' => 'Gujarat', 'folder' => 'gujarattour', 'link' => 'gujarattour/index.php', 'image' => 'assets/images/gujrat/gujrat.avif'],
    ['name' => 'Nepal', 'folder' => 'nepaltour', 'link' => 'nepaltour/index.php', 'image' => 'assets/images/nepal/nepal.avif']
];

foreach ($destinations as $d) {
    echo $d['name'] . ': ' . getFolderTourCount($d['folder']) . ' -> ' . $d['link'] . PHP_EOL;
}


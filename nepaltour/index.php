<?php
require_once __DIR__ . '/data.php';

$page_title = ($categoryTitle ?? 'Tour') . " Packages - North India Tours";
require_once __DIR__ . '/../includes/header.php';
require_once __DIR__ . '/../components/categoryTourListView.php';
require_once __DIR__ . '/../includes/footer.php';

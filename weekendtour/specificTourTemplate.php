<?php
require_once __DIR__ . '/data.php';

$tourSlug = $_GET['tour'] ?? (is_array($tours) ? array_key_first($tours) : '');
$currentTour = $tours[$tourSlug] ?? (is_array($tours) ? reset($tours) : null);

$page_title = ($currentTour['title'] ?? 'Tour Details') . " - Taj Mahal Tour";
require_once __DIR__ . '/../includes/header.php';
require_once __DIR__ . '/../components/tourDetailView.php';
require_once __DIR__ . '/../includes/footer.php';

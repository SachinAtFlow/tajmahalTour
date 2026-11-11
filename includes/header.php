<?php
/**
 * Global Header Component
 * Modular layout with Classic Top Bar, Bootstrap 5 Multi-Level Nav, and Mobile Drawer.
 */

// Load Navigation Data
$headerNavDataPath = __DIR__ . '/../data/navigationData.php';
if (!file_exists($headerNavDataPath)) {
    $headerNavDataPath = __DIR__ . '/../data/headerNavigationData.php';
}
$carNavMenu = [];
$tourNavMenu = [];
if (file_exists($headerNavDataPath)) {
    require_once $headerNavDataPath;
}

// Load Top Header Special Offers Data
$offersDataPath = __DIR__ . '/../data/offersData.php';
if (file_exists($offersDataPath)) {
    require_once $offersDataPath;
}
$headerOffers = function_exists('getHeaderOffers') ? getHeaderOffers() : [];

// Load Centralized Site Contact & Social Media Data
$contactDataPath = __DIR__ . '/../data/contactData.php';
if (file_exists($contactDataPath)) {
    require_once $contactDataPath;
}
$siteContact = function_exists('getSiteContact') ? getSiteContact() : [];

if (!isset($rootPrefix)) {
    $rootPrefix = !file_exists('assets/css/style.css') ? '../' : '';
}
$currentPage = basename($_SERVER['PHP_SELF'] ?? '');
$isHomeActive = ($currentPage === 'index.php' || $currentPage === '') && ($rootPrefix === '');
$bookNowUrl = $isHomeActive ? '#booking' : $rootPrefix . 'index.php#booking';
$homePrefix = $isHomeActive ? '' : $rootPrefix . 'index.php';

if (!function_exists('theme_url')) {
    function theme_url($url = '') {
        global $rootPrefix;
        if (empty($url) || strpos($url, 'http://') === 0 || strpos($url, 'https://') === 0 || strpos($url, '#') === 0 || strpos($url, 'tel:') === 0 || strpos($url, 'mailto:') === 0 || strpos($url, 'javascript:') === 0) {
            return $url;
        }
        return ($rootPrefix ?? '') . ltrim($url, '/');
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? htmlspecialchars($page_title) : 'Taj Mahal Tour - Discover Agra Tours & Packages'; ?></title>
    
    <!-- Bootstrap 5 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!-- Bootstrap Icons CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <!-- Swiper CSS CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    
    <!-- Custom Theme CSS -->
    <link rel="stylesheet" href="<?= $rootPrefix; ?>assets/css/style.css?v=<?= file_exists(__DIR__ . '/../assets/css/style.css') ? filemtime(__DIR__ . '/../assets/css/style.css') : time(); ?>">
</head>
<body>

<!-- Top Special Offers Announcement Bar (Scrolls away on scroll) -->
<?php if (!empty($headerOffers)): ?>
<div id="top-special-offers-bar" class="bg-black text-white border-bottom border-dark border-opacity-50 py-1 position-relative">
    <div class="container px-2 px-sm-3">
        <div class="swiper top-offers-swiper">
            <div class="swiper-wrapper">
                <?php foreach ($headerOffers as $offer): ?>
                    <?php 
                        $badge = htmlspecialchars($offer['badge'] ?? 'SPECIAL OFFER');
                        $highlight = htmlspecialchars($offer['highlight'] ?? '');
                        $text = htmlspecialchars($offer['text'] ?? '');
                        $link = theme_url($offer['link'] ?? '#');
                        $btn = htmlspecialchars($offer['btn'] ?? 'View Details');
                    ?>
                    <div class="swiper-slide d-flex align-items-center justify-content-center h-100">
                        <a href="<?= $link; ?>" class="offer-slide-link text-decoration-none text-white d-flex align-items-center justify-content-center gap-2 gap-sm-2 gap-md-3 flex-nowrap w-100 h-100" title="<?= htmlspecialchars(trim($highlight . ' ' . $text)); ?>">
                            <!-- Megaphone Pill Badge with #FFB547 -->
                            <span class="badge rounded-pill offer-pill-badge d-inline-flex align-items-center gap-1 flex-shrink-0 fw-bold me-1 me-sm-0">
                                <i class="bi bi-megaphone-fill"></i>
                                <span class="d-none d-sm-inline"><?= $badge; ?></span>
                                <span class="d-inline d-sm-none">DEAL</span>
                            </span>

                            <!-- Vertical Divider -->
                            <span class="text-white-50 opacity-25 d-none d-sm-inline">|</span>

                            <!-- Offer Main Details Text -->
                            <span class="offer-headline-text text-truncate text-white">
                                <?php if (!empty($highlight)): ?>
                                    <strong class="offer-highlight fw-bold"><?= $highlight; ?></strong>
                                <?php endif; ?>
                                <?= !empty($highlight) ? ' ' : ''; ?><?= $text; ?>
                            </span>

                            <!-- Vertical Divider (Hidden on phone screen) -->
                            <span class="text-white-50 opacity-25 d-none d-sm-inline">|</span>

                            <!-- Action CTA Link (Hidden on phone screen per user request) -->
                            <span class="offer-action-btn fw-bold d-none d-sm-inline-flex align-items-center flex-shrink-0 small">
                                <span><?= $btn; ?></span>
                                <i class="bi bi-arrow-right ms-1"></i>
                            </span>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>

<!-- Master Sticky Header (Main Navigation - Sticky on each page) -->
<header id="site-master-header" class="sticky-top w-100">

<!-- Main Navigation (Compact Height Bootstrap 5 Navbar) -->
<nav id="site-smart-header" class="navbar navbar-expand-lg navbar-light bg-white shadow-sm py-1 py-lg-2">
    <div class="container d-flex align-items-center justify-content-between">

        <!-- Left: Mobile Toggle & Brand Logo -->
        <div class="d-flex align-items-center gap-2">
            <!-- Mobile Drawer Button (Left on mobile) -->
            <button type="button" id="mobile-menu-toggle" class="btn btn-light d-lg-none p-1 rounded-2 border text-dark d-flex align-items-center justify-content-center" aria-label="Toggle navigation menu" style="width: 36px; height: 36px;">
                <i class="bi bi-list fs-4"></i>
            </button>

            <!-- Brand Logo -->
            <a class="navbar-brand py-0 me-2 me-xl-4" href="<?= theme_url('index.php'); ?>">
                <img src="https://modtel.travelerwp.com/wp-content/uploads/2022/04/Color-2.svg" alt="TajMahalTour" height="34">
            </a>
        </div>

        <!-- Center: Desktop Navigation Links (Bootstrap 5 Utilities) -->
        <div class="d-none d-lg-flex align-items-center">
            <ul class="navbar-nav align-items-center gap-1 gap-xl-2 mb-0 rounded-pill">
                
                <!-- Home -->
                <li class="nav-item">
                    <a class="nav-link fw-semibold px-2 px-xl-3 <?php echo $isHomeActive ? 'active' : 'text-dark'; ?> rounded-pill fw-medium position-relative d-inline-flex align-items-center" href="<?= theme_url('index.php'); ?>">
                        Home
                    </a>
                </li>

                <!-- About Us -->
                <li class="nav-item">
                    <a class="nav-link fw-semibold px-2 px-xl-3 <?php echo ($currentPage === 'aboutUs.php') ? 'active text-primary' : 'text-dark'; ?> rounded-pill fw-medium position-relative d-inline-flex align-items-center" href="<?= theme_url('aboutUs.php'); ?>">
                        About
                    </a>
                </li>

                <!-- Car Rental Multi-Level Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle fw-semibold px-2 px-xl-3 <?php echo ($currentPage === 'carRentalLocation.php' || $currentPage === 'carRental.php') ? 'active text-primary' : 'text-dark'; ?> rounded-pill fw-medium position-relative d-inline-flex align-items-center" href="<?= theme_url('carRentalLocation.php'); ?>" role="button">
                        Car Rental
                    </a>
                    <ul class="dropdown-menu shadow border-0 rounded-4 py-2">
                        <?php if (!empty($carNavMenu)): ?>
                            <?php foreach ($carNavMenu as $cat): ?>
                                <?php if (!empty($cat['sub'])): ?>
                                    <!-- Level 2 Submenu -->
                                    <li class="dropdown-submenu">
                                        <a class="dropdown-item py-2 px-3 fw-medium d-flex align-items-center justify-content-between" href="<?php echo htmlspecialchars(theme_url($cat['link'])); ?>">
                                            <span><?php echo htmlspecialchars($cat['title']); ?></span>
                                            <i class="bi bi-chevron-right small text-muted ms-2"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-submenu-menu shadow border-0 rounded-4 py-2">
                                            <li class="dropdown-header text-primary fw-bold small text-uppercase px-3 py-1">
                                                <?php echo htmlspecialchars($cat['title']); ?>
                                            </li>
                                            <?php foreach ($cat['sub'] as $subItem): ?>
                                                <li>
                                                    <a class="dropdown-item py-1.5 px-3 small text-secondary" href="<?php echo htmlspecialchars(theme_url($subItem['link'])); ?>">
                                                        <i class="bi bi-circle-fill text-muted me-2" style="font-size: 5px;"></i>
                                                        <?php echo htmlspecialchars($subItem['name']); ?>
                                                    </a>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </li>
                                <?php else: ?>
                                    <li>
                                        <a class="dropdown-item py-2 px-3 fw-medium" href="<?php echo htmlspecialchars(theme_url($cat['link'])); ?>">
                                            <?php echo htmlspecialchars($cat['title']); ?>
                                        </a>
                                    </li>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </ul>
                </li>

                <!-- Tour Packages Multi-Level Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle fw-semibold px-2 px-xl-3 <?php echo ($currentPage === 'tourPackage.php') ? 'active text-primary' : 'text-dark'; ?> rounded-pill fw-medium position-relative d-inline-flex align-items-center" href="<?= theme_url('tourPackage.php'); ?>" role="button">
                        Tour Packages
                    </a>
                    <ul class="dropdown-menu shadow border-0 rounded-4 py-2">
                        <?php if (!empty($tourNavMenu)): ?>
                            <?php foreach ($tourNavMenu as $tCat): ?>
                                <li class="dropdown-submenu">
                                    <a class="dropdown-item py-2 px-3 fw-medium d-flex align-items-center justify-content-between" href="<?php echo htmlspecialchars(theme_url($tCat['link'])); ?>">
                                        <span><?php echo htmlspecialchars($tCat['title']); ?></span>
                                        <i class="bi bi-chevron-right small text-muted ms-2"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-submenu-menu shadow border-0 rounded-4 py-2">
                                        <li class="dropdown-header text-primary fw-bold small text-uppercase px-3 py-1">
                                            <?php echo htmlspecialchars($tCat['title']); ?>
                                        </li>
                                        <?php foreach ($tCat['sub'] as $subTour): ?>
                                            <li>
                                                <a class="dropdown-item py-1.5 px-3 small text-secondary" href="<?php echo htmlspecialchars(theme_url($subTour['link'])); ?>">
                                                    <i class="bi bi-circle-fill text-muted me-2" style="font-size: 5px;"></i>
                                                    <?php echo htmlspecialchars($subTour['name']); ?>
                                                </a>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </li>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </ul>
                </li>

                <!-- Contact -->
                <li class="nav-item">
                    <a class="nav-link fw-semibold px-2 px-xl-3 <?php echo ($currentPage === 'contactUs.php') ? 'active text-primary' : 'text-dark'; ?> rounded-pill fw-medium position-relative d-inline-flex align-items-center" href="<?= theme_url('contactUs.php'); ?>">
                        Contact
                    </a>
                </li>

                <!-- Payment -->
                <li class="nav-item">
                    <a class="nav-link text-dark fw-semibold px-2 px-xl-3 rounded-pill fw-medium position-relative d-inline-flex align-items-center" href="<?= theme_url('payment.php'); ?>">
                        Payment
                    </a>
                </li>
            </ul>
        </div>

        <!-- Right: "Book Now" Button Only (Clean & Direct) -->
        <div class="d-flex align-items-center">
            <a href="<?php echo $bookNowUrl; ?>" id="header-book-now-btn" class="btn btn-primary btn-sm px-2.5 px-sm-4 py-1.5 py-sm-2 fw-semibold rounded-pill shadow-sm d-inline-flex align-items-center justify-content-center">
                <span>Book Now</span>
            </a>
        </div>

    </div>
</nav>
</header>

<!-- Mobile Navigation Drawer Overlay & Backdrop -->
<div id="mobile-menu-backdrop"></div>

<!-- Mobile Slide-out Drawer -->
<div id="mobile-menu-drawer">
    
    <!-- Drawer Header -->
    <div class="d-flex align-items-center justify-content-between p-3 border-bottom bg-light">
        <a href="<?= theme_url('index.php'); ?>" class="d-flex align-items-center">
            <img src="https://modtel.travelerwp.com/wp-content/uploads/2022/04/Color-2.svg" alt="TajMahalTour" height="30">
        </a>
        <button type="button" id="mobile-menu-close" class="btn btn-outline-secondary btn-sm rounded-circle d-flex align-items-center justify-content-center p-0" style="width: 32px; height: 32px;" aria-label="Close menu">
            <i class="bi bi-x-lg"></i>
        </button>
    </div>

    <!-- Drawer Navigation Links (Scrollable) -->
    <div class="flex-grow-1 overflow-auto p-3">
        
        <!-- Home -->
        <a href="<?= theme_url('index.php'); ?>" class="d-flex align-items-center justify-content-between p-2 rounded-3 text-decoration-none fw-semibold mb-1 <?php echo $isHomeActive ? 'bg-primary bg-opacity-10 text-primary' : 'text-dark'; ?>">
            <span>Home</span>
        </a>

        <!-- About Us -->
        <a href="<?= theme_url('aboutUs.php'); ?>" class="d-flex align-items-center justify-content-between p-2 rounded-3 text-decoration-none fw-semibold text-dark mb-1">
            <span>About Us</span>
        </a>

        <!-- Car Rental Mobile Accordion -->
        <div class="mobile-accordion mb-1">
            <button type="button" class="mobile-accordion-toggle w-100 btn text-start d-flex align-items-center justify-content-between p-2 rounded-3 text-dark fw-semibold border-0 shadow-none">
                <span>Car Rental</span>
                <i class="bi bi-chevron-down accordion-chevron small text-muted"></i>
            </button>
            <div class="accordion-content d-none ps-3 pe-2 py-2 bg-light rounded-3 mb-2 border">
                <a href="<?= theme_url('carRentalLocation.php'); ?>" class="d-block text-primary fw-bold small text-decoration-none mb-2">
                    Explore All Vehicles &rarr;
                </a>
                <?php if (!empty($carNavMenu)): ?>
                    <?php foreach ($carNavMenu as $cat): ?>
                        <?php if (!empty($cat['sub'])): ?>
                            <div class="mobile-accordion mb-1">
                                <button type="button" class="mobile-accordion-toggle w-100 btn btn-sm text-start d-flex align-items-center justify-content-between px-2 py-1 text-dark fw-semibold border-0 shadow-none">
                                    <span><?php echo htmlspecialchars($cat['title']); ?></span>
                                    <i class="bi bi-chevron-down accordion-chevron small text-muted"></i>
                                </button>
                                <div class="accordion-content d-none ps-3 py-1 border-start border-2 border-primary ms-2 mb-1">
                                    <?php foreach ($cat['sub'] as $subItem): ?>
                                        <a href="<?php echo htmlspecialchars(theme_url($subItem['link'])); ?>" class="d-block py-1 text-secondary text-decoration-none small">
                                            &bull; <?php echo htmlspecialchars($subItem['name']); ?>
                                        </a>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        <?php else: ?>
                            <a href="<?php echo htmlspecialchars(theme_url($cat['link'])); ?>" class="d-block py-1 text-secondary text-decoration-none small">
                                <?php echo htmlspecialchars($cat['title']); ?>
                            </a>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>

        <!-- Tour Packages Mobile Accordion -->
        <div class="mobile-accordion mb-1">
            <button type="button" class="mobile-accordion-toggle w-100 btn text-start d-flex align-items-center justify-content-between p-2 rounded-3 text-dark fw-semibold border-0 shadow-none">
                <span>Tour Packages</span>
                <i class="bi bi-chevron-down accordion-chevron small text-muted"></i>
            </button>
            <div class="accordion-content d-none ps-3 pe-2 py-2 bg-light rounded-3 mb-2 border">
                <a href="<?= theme_url('tourPackage.php'); ?>" class="d-block text-primary fw-bold small text-decoration-none mb-2">
                    Explore All Packages &rarr;
                </a>
                <?php if (!empty($tourNavMenu)): ?>
                    <?php foreach ($tourNavMenu as $tCat): ?>
                        <?php if (!empty($tCat['sub'])): ?>
                            <div class="mobile-accordion mb-1">
                                <button type="button" class="mobile-accordion-toggle w-100 btn btn-sm text-start d-flex align-items-center justify-content-between px-2 py-1 text-dark fw-semibold border-0 shadow-none">
                                    <span><?php echo htmlspecialchars($tCat['title']); ?></span>
                                    <i class="bi bi-chevron-down accordion-chevron small text-muted"></i>
                                </button>
                                <div class="accordion-content d-none ps-3 py-1 border-start border-2 border-primary ms-2 mb-1">
                                    <?php foreach ($tCat['sub'] as $subTour): ?>
                                        <a href="<?php echo htmlspecialchars(theme_url($subTour['link'])); ?>" class="d-block py-1 text-secondary text-decoration-none small">
                                            &bull; <?php echo htmlspecialchars($subTour['name']); ?>
                                        </a>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        <?php else: ?>
                            <a href="<?php echo htmlspecialchars(theme_url($tCat['link'])); ?>" class="d-block py-1 text-secondary text-decoration-none small px-2">
                                <?php echo htmlspecialchars($tCat['title']); ?>
                            </a>
                        <?php endif; ?>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>

        <!-- Reviews -->
        <a href="<?php echo $homePrefix; ?>#testimonials" class="d-flex align-items-center justify-content-between p-2 rounded-3 text-decoration-none fw-semibold text-dark mb-1">
            <span>Reviews</span>
        </a>

        <!-- Gallery -->
        <a href="<?= theme_url('gallery.php'); ?>" class="d-flex align-items-center justify-content-between p-2 rounded-3 text-decoration-none fw-semibold text-dark mb-1">
            <span>Gallery</span>
        </a>

        <!-- Contact Us -->
        <a href="contactUs.php" class="d-flex align-items-center justify-content-between p-2 rounded-3 text-decoration-none fw-semibold text-dark mb-1">
            <span>Contact Us</span>
        </a>
    </div>

    <!-- Drawer Footer: Quick Action & Direct Contact CTAs -->
    <div id="mobile-drawer-footer" class="p-3 border-top bg-light">
        <a href="<?php echo $bookNowUrl; ?>" class="btn btn-primary w-100 rounded-pill py-2 fw-semibold d-flex align-items-center justify-content-center gap-2 shadow-sm mb-2">
            <span>Book Now</span>
            <i class="bi bi-arrow-right"></i>
        </a>

        <!-- Minimalist & Modern Contact CTAs (Phone & Mail) -->
        <div id="mobile-drawer-contact-ctas" class="row g-2">
            <div class="col-6">
                <a href="<?= site_phone(false); ?>" class="mobile-drawer-cta btn btn-white bg-white border text-dark py-2 px-2 rounded-3 d-flex align-items-center justify-content-center gap-2 w-100 text-decoration-none shadow-xs">
                    <i class="bi bi-telephone-fill text-primary"></i>
                    <span class="fw-semibold small">Call Us</span>
                </a>
            </div>
            <div class="col-6">
                <a href="<?= site_email('primary', true); ?>" class="mobile-drawer-cta btn btn-white bg-white border text-dark py-2 px-2 rounded-3 d-flex align-items-center justify-content-center gap-2 w-100 text-decoration-none shadow-xs">
                    <i class="bi bi-envelope-fill text-primary"></i>
                    <span class="fw-semibold small">Email Us</span>
                </a>
            </div>
        </div>
    </div>
</div>

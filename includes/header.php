<?php
/**
 * Global Header Component
 * Modular layout with Classic Top Bar, Bootstrap 5 Multi-Level Nav, and Mobile Drawer.
 */

// Load Navigation Data
$headerNavDataPath = __DIR__ . '/../data/headerNavigationData.php';
$carNavMenu = [];
$tourNavMenu = [];
if (file_exists($headerNavDataPath)) {
    require_once $headerNavDataPath;
}

$currentPage = basename($_SERVER['PHP_SELF'] ?? '');
$isHomeActive = ($currentPage === 'index.php' || $currentPage === '');
$bookNowUrl = '#booking';
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
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<!-- Top Info Bar (Original Classic Style Built with Bootstrap 5 Utility Classes) -->
<div class="bg-dark text-white-50 py-1 py-md-2 small d-none d-md-block border-bottom border-secondary border-opacity-25">
    <div class="container d-flex justify-content-between align-items-center">
        <!-- Left: Phone and Email -->
        <div class="d-flex align-items-center gap-2">
            <a href="tel:000999656888" class="text-white-50 text-decoration-none d-inline-flex align-items-center">
                <i class="bi bi-telephone text-primary me-2"></i> (000) 999 -656 -888
            </a>
            <span class="text-secondary opacity-50 mx-2">|</span>
            <a href="mailto:travelerwp@gmail.com" class="text-white-50 text-decoration-none d-inline-flex align-items-center">
                <i class="bi bi-envelope text-primary me-2"></i> travelerwp@gmail.com
            </a>
        </div>

        <!-- Right: Social Media Icons with Separators -->
        <div class="d-flex align-items-center gap-2">
            <a href="#" class="text-white-50 text-decoration-none" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
            <span class="text-secondary opacity-50 mx-1">|</span>
            <a href="#" class="text-white-50 text-decoration-none" aria-label="Twitter"><i class="bi bi-twitter-x"></i></a>
            <span class="text-secondary opacity-50 mx-1">|</span>
            <a href="#" class="text-white-50 text-decoration-none" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
            <span class="text-secondary opacity-50 mx-1">|</span>
            <a href="#" class="text-white-50 text-decoration-none" aria-label="YouTube"><i class="bi bi-youtube"></i></a>
        </div>
    </div>
</div>

<!-- Main Navigation (Compact Height Bootstrap 5 Navbar) -->
<nav id="site-smart-header" class="navbar navbar-expand-lg navbar-light bg-white sticky-top shadow-sm py-1 py-lg-2">
    <div class="container d-flex align-items-center justify-content-between">

        <!-- Left: Mobile Toggle & Brand Logo -->
        <div class="d-flex align-items-center gap-2">
            <!-- Mobile Drawer Button (Left on mobile) -->
            <button type="button" id="mobile-menu-toggle" class="btn btn-light d-lg-none p-1 rounded-2 border text-dark d-flex align-items-center justify-content-center" aria-label="Toggle navigation menu" style="width: 36px; height: 36px;">
                <i class="bi bi-list fs-4"></i>
            </button>

            <!-- Brand Logo -->
            <a class="navbar-brand py-0 me-2 me-xl-4" href="index.php">
                <img src="https://modtel.travelerwp.com/wp-content/uploads/2022/04/Color-2.svg" alt="TajMahalTour" height="34">
            </a>
        </div>

        <!-- Center: Desktop Navigation Links (Bootstrap 5 Utilities) -->
        <div class="d-none d-lg-flex align-items-center">
            <ul class="navbar-nav align-items-center gap-1 gap-xl-2 mb-0">
                
                <!-- Home -->
                <li class="nav-item">
                    <a class="nav-link fw-semibold px-2 px-xl-3 <?php echo $isHomeActive ? 'active' : 'text-dark'; ?>" href="index.php">
                        Home
                    </a>
                </li>

                <!-- About Us -->
                <li class="nav-item">
                    <a class="nav-link text-dark fw-semibold px-2 px-xl-3" href="#about">
                        About
                    </a>
                </li>

                <!-- Car Rental Multi-Level Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-dark fw-semibold px-2 px-xl-3" href="#booking" role="button">
                        Car Rental
                    </a>
                    <ul class="dropdown-menu shadow-sm border-0 rounded-3 py-2">
                        <?php if (!empty($carNavMenu)): ?>
                            <?php foreach ($carNavMenu as $cat): ?>
                                <?php if (!empty($cat['sub'])): ?>
                                    <!-- Level 2 Submenu -->
                                    <li class="dropdown-submenu">
                                        <a class="dropdown-item py-2 px-3 fw-medium d-flex align-items-center justify-content-between" href="<?php echo htmlspecialchars($cat['link']); ?>">
                                            <span><?php echo htmlspecialchars($cat['title']); ?></span>
                                            <i class="bi bi-chevron-right small text-muted ms-2"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-submenu-menu shadow-sm border-0 rounded-3 py-2">
                                            <li class="dropdown-header text-primary fw-bold small text-uppercase px-3 py-1">
                                                <?php echo htmlspecialchars($cat['title']); ?>
                                            </li>
                                            <?php foreach ($cat['sub'] as $subItem): ?>
                                                <li>
                                                    <a class="dropdown-item py-1.5 px-3 small text-secondary" href="<?php echo htmlspecialchars($subItem['link']); ?>">
                                                        <i class="bi bi-circle-fill text-muted me-2" style="font-size: 5px;"></i>
                                                        <?php echo htmlspecialchars($subItem['name']); ?>
                                                    </a>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </li>
                                <?php else: ?>
                                    <li>
                                        <a class="dropdown-item py-2 px-3 fw-medium" href="<?php echo htmlspecialchars($cat['link']); ?>">
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
                    <a class="nav-link dropdown-toggle text-dark fw-semibold px-2 px-xl-3" href="#featured-tours" role="button">
                        Tour Packages
                    </a>
                    <ul class="dropdown-menu shadow-sm border-0 rounded-3 py-2">
                        <?php if (!empty($tourNavMenu)): ?>
                            <?php foreach ($tourNavMenu as $tCat): ?>
                                <li class="dropdown-submenu">
                                    <a class="dropdown-item py-2 px-3 fw-medium d-flex align-items-center justify-content-between" href="<?php echo htmlspecialchars($tCat['link']); ?>">
                                        <span><?php echo htmlspecialchars($tCat['title']); ?></span>
                                        <i class="bi bi-chevron-right small text-muted ms-2"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-submenu-menu shadow-sm border-0 rounded-3 py-2">
                                        <li class="dropdown-header text-primary fw-bold small text-uppercase px-3 py-1">
                                            <?php echo htmlspecialchars($tCat['title']); ?>
                                        </li>
                                        <?php foreach ($tCat['sub'] as $subTour): ?>
                                            <li>
                                                <a class="dropdown-item py-1.5 px-3 small text-secondary" href="<?php echo htmlspecialchars($subTour['link']); ?>">
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

                <!-- Why Us -->
                <li class="nav-item">
                    <a class="nav-link text-dark fw-semibold px-2 px-xl-3" href="#why-us">
                        Why Us
                    </a>
                </li>

                <!-- Reviews -->
                <li class="nav-item">
                    <a class="nav-link text-dark fw-semibold px-2 px-xl-3" href="#testimonials">
                        Reviews
                    </a>
                </li>

                <!-- Contact -->
                <li class="nav-item">
                    <a class="nav-link text-dark fw-semibold px-2 px-xl-3" href="#contact">
                        Contact
                    </a>
                </li>

            </ul>
        </div>

        <!-- Right: "Book Now" Button Only (Clean & Direct) -->
        <div class="d-flex align-items-center">
            <a href="<?php echo $bookNowUrl; ?>" class="btn btn-primary btn-sm px-3 px-sm-4 py-2 fw-semibold rounded-pill shadow-sm d-inline-flex align-items-center gap-2">
                <span>Book Now</span>
                <i class="bi bi-arrow-right small"></i>
            </a>
        </div>

    </div>
</nav>

<!-- Mobile Navigation Drawer Overlay & Backdrop -->
<div id="mobile-menu-backdrop"></div>

<!-- Mobile Slide-out Drawer -->
<div id="mobile-menu-drawer">
    
    <!-- Drawer Header -->
    <div class="d-flex align-items-center justify-content-between p-3 border-bottom bg-light">
        <a href="index.php" class="d-flex align-items-center">
            <img src="https://modtel.travelerwp.com/wp-content/uploads/2022/04/Color-2.svg" alt="TajMahalTour" height="30">
        </a>
        <button type="button" id="mobile-menu-close" class="btn btn-outline-secondary btn-sm rounded-circle d-flex align-items-center justify-content-center p-0" style="width: 32px; height: 32px;" aria-label="Close menu">
            <i class="bi bi-x-lg"></i>
        </button>
    </div>

    <!-- Drawer Navigation Links (Scrollable) -->
    <div class="flex-grow-1 overflow-auto p-3">
        
        <!-- Home -->
        <a href="index.php" class="d-flex align-items-center justify-content-between p-2 rounded-3 text-decoration-none fw-semibold mb-1 <?php echo $isHomeActive ? 'bg-primary bg-opacity-10 text-primary' : 'text-dark'; ?>">
            <span>Home</span>
        </a>

        <!-- About Us -->
        <a href="#about" class="d-flex align-items-center justify-content-between p-2 rounded-3 text-decoration-none fw-semibold text-dark mb-1">
            <span>About Us</span>
        </a>

        <!-- Car Rental Mobile Accordion -->
        <div class="mobile-accordion mb-1">
            <button type="button" class="mobile-accordion-toggle w-100 btn text-start d-flex align-items-center justify-content-between p-2 rounded-3 text-dark fw-semibold border-0 shadow-none">
                <span>Car Rental</span>
                <i class="bi bi-chevron-down accordion-chevron small text-muted"></i>
            </button>
            <div class="accordion-content d-none ps-3 pe-2 py-2 bg-light rounded-3 mb-2 border">
                <a href="#booking" class="d-block text-primary fw-bold small text-decoration-none mb-2">
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
                                        <a href="<?php echo htmlspecialchars($subItem['link']); ?>" class="d-block py-1 text-secondary text-decoration-none small">
                                            &bull; <?php echo htmlspecialchars($subItem['name']); ?>
                                        </a>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        <?php else: ?>
                            <a href="<?php echo htmlspecialchars($cat['link']); ?>" class="d-block py-1 text-secondary text-decoration-none small">
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
                <a href="#featured-tours" class="d-block text-primary fw-bold small text-decoration-none mb-2">
                    Explore All Packages &rarr;
                </a>
                <?php if (!empty($tourNavMenu)): ?>
                    <?php foreach ($tourNavMenu as $tCat): ?>
                        <div class="mobile-accordion mb-1">
                            <button type="button" class="mobile-accordion-toggle w-100 btn btn-sm text-start d-flex align-items-center justify-content-between px-2 py-1 text-dark fw-semibold border-0 shadow-none">
                                <span><?php echo htmlspecialchars($tCat['title']); ?></span>
                                <i class="bi bi-chevron-down accordion-chevron small text-muted"></i>
                            </button>
                            <div class="accordion-content d-none ps-3 py-1 border-start border-2 border-primary ms-2 mb-1">
                                <?php foreach ($tCat['sub'] as $subTour): ?>
                                    <a href="<?php echo htmlspecialchars($subTour['link']); ?>" class="d-block py-1 text-secondary text-decoration-none small">
                                        &bull; <?php echo htmlspecialchars($subTour['name']); ?>
                                    </a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>

        <!-- Why Us -->
        <a href="#why-us" class="d-flex align-items-center justify-content-between p-2 rounded-3 text-decoration-none fw-semibold text-dark mb-1">
            <span>Why Choose Us</span>
        </a>

        <!-- Reviews -->
        <a href="#testimonials" class="d-flex align-items-center justify-content-between p-2 rounded-3 text-decoration-none fw-semibold text-dark mb-1">
            <span>Reviews</span>
        </a>

        <!-- Contact Us -->
        <a href="#contact" class="d-flex align-items-center justify-content-between p-2 rounded-3 text-decoration-none fw-semibold text-dark mb-1">
            <span>Contact Us</span>
        </a>
    </div>

    <!-- Drawer Footer: Quick Action -->
    <div class="p-3 border-top bg-light">
        <a href="<?php echo $bookNowUrl; ?>" class="btn btn-primary w-100 rounded-pill py-2 fw-semibold d-flex align-items-center justify-content-center gap-2 shadow-sm">
            <span>Book Now</span>
            <i class="bi bi-arrow-right"></i>
        </a>
    </div>
</div>

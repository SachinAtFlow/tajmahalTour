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
    
    <!-- Custom Theme CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<!-- Top Info Bar (Built with Bootstrap 5 Utility Classes) -->
<div class="bg-dark text-white-50 py-2 small d-none d-md-block border-bottom border-secondary border-opacity-25">
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

<!-- Main Navigation (Bootstrap 5 Navbar) -->
<nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top shadow-sm py-2 py-lg-3">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand py-0 me-lg-4" href="index.php">
            <img src="https://modtel.travelerwp.com/wp-content/uploads/2022/04/Color-2.svg" alt="Traveler" height="40">
        </a>

        <!-- Mobile Hamburger Toggler Button -->
        <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#travelerNavbarMenu" aria-controls="travelerNavbarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar Menu & Book Now Button -->
        <div class="collapse navbar-collapse" id="travelerNavbarMenu">
            <!-- Center Nav Links: Home, About, Listing, Hotel, Pages, Contact -->
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0 align-items-lg-center">
                <li class="nav-item">
                    <a class="nav-link active text-primary fw-semibold px-3" aria-current="page" href="index.php">Home</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link text-dark fw-semibold px-3" href="#about">About</a>
                </li>

                <!-- Listing Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-dark fw-semibold px-3" href="#" id="listingMenuDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Listing
                    </a>
                    <ul class="dropdown-menu shadow-sm border-0 rounded-3 py-2" aria-labelledby="listingMenuDropdown">
                        <li><a class="dropdown-item py-2" href="#tours">Search Popup Map</a></li>
                        <li><a class="dropdown-item py-2" href="#tours">Search HalfMap</a></li>
                        <li><a class="dropdown-item py-2" href="#tours">All Tour Listings</a></li>
                    </ul>
                </li>

                <!-- Hotel Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-dark fw-semibold px-3" href="#" id="hotelMenuDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Hotel
                    </a>
                    <ul class="dropdown-menu shadow-sm border-0 rounded-3 py-2" aria-labelledby="hotelMenuDropdown">
                        <li><a class="dropdown-item py-2" href="#tours">Studio Allston Hotel</a></li>
                        <li><a class="dropdown-item py-2" href="#tours">Edwardian Kenilworth</a></li>
                        <li><a class="dropdown-item py-2" href="#tours">Detail Room Agra</a></li>
                        <li><a class="dropdown-item py-2" href="#tours">Deluxe Room</a></li>
                    </ul>
                </li>

                <!-- Pages Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-dark fw-semibold px-3" href="#" id="pagesMenuDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Pages
                    </a>
                    <ul class="dropdown-menu shadow-sm border-0 rounded-3 py-2" aria-labelledby="pagesMenuDropdown">
                        <li><a class="dropdown-item py-2" href="#about">About Us</a></li>
                        <li><a class="dropdown-item py-2" href="#why-us">Why Choose Us</a></li>
                        <li><a class="dropdown-item py-2" href="#booking">Become Local Expert</a></li>
                        <li><a class="dropdown-item py-2" href="#contact">FAQ</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-dark fw-semibold px-3" href="#contact">Contact</a>
                </li>
            </ul>

            <!-- Right: "Book Now" Button -->
            <div class="d-flex align-items-center mt-3 mt-lg-0">
                <a href="#booking" class="btn btn-primary fw-semibold px-4 py-2 rounded-pill shadow-sm">
                    Book Now
                </a>
            </div>
        </div>
    </div>
</nav>

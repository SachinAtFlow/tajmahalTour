<?php
/**
 * Car Rental Hero Component (Dynamic by City)
 * Modern Minimalist Banner with City Switcher, Quick Booking Bar, and Trust Indicators.
 */
$allCities = getCarRentalCities();
$currentCitySlug = $cityData['slug'] ?? 'delhi-ncr';
$heroBgImage = (!empty($cityData['image']) && $cityData['image'] !== '#') ? $cityData['image'] : 'assets/images/delhi/indiaGate.avif';
?>

<!-- Car Rental Hero Banner -->
<section id="car-rental-hero" class="position-relative text-white py-5 overflow-hidden" style="background: linear-gradient(rgba(15, 23, 42, 0.76), rgba(15, 23, 42, 0.84)), url('<?= htmlspecialchars($heroBgImage); ?>') center/cover no-repeat; min-height: 440px;">
    <div class="container position-relative z-2 py-4 py-lg-5">
        
        <!-- Breadcrumb & Badge -->
        <div class="text-center mb-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0 small">
                    <li class="breadcrumb-item">
                        <a href="index.php" class="text-white-50 text-decoration-none">
                            <i class="bi bi-house-door me-1"></i> Home
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="carRentalLocation.php" class="text-white-50 text-decoration-none">Car Rental</a>
                    </li>
                    <li class="breadcrumb-item active text-white" aria-current="page"><?= htmlspecialchars($cityData['city_name']); ?></li>
                </ol>
            </nav>
        </div>

        <!-- Banner Title & Description -->
        <div class="text-center mx-auto" style="max-width: 860px;">
            <h1 class="display-5 fw-bold text-white mb-3">
                <?= htmlspecialchars($cityData['headline']); ?>
            </h1>
            <p class="lead text-white-50 mb-4 fs-6 lh-base" style="max-width: 720px; margin: 0 auto;">
                <?= htmlspecialchars($cityData['description']); ?>
            </p>
        </div>

        <!-- City Switcher Pills -->
        <div class="d-flex flex-wrap justify-content-center gap-2 mb-4">
            <?php foreach ($allCities as $slug => $c): ?>
                <?php $isActive = ($slug === $currentCitySlug); ?>
                <a href="carRentalLocation.php?city=<?= urlencode($slug); ?>" class="btn btn-sm rounded-pill px-3 py-1.5 fw-medium <?= $isActive ? 'btn-primary shadow-sm' : 'btn-outline-light text-white-50 border-secondary border-opacity-50'; ?>">
                    <?= htmlspecialchars($c['city_name']); ?>
                </a>
            <?php endforeach; ?>
        </div>

        <!-- Trust Badges Strip -->
        <div class="d-flex flex-wrap justify-content-center align-items-center gap-3 gap-md-4 mt-4 pt-2 text-white-50 small">
            <span class="d-inline-flex align-items-center gap-2">
                <i class="bi bi-star-fill text-warning"></i>
                <strong class="text-white">4.9/5</strong> Driver Rating
            </span>
            <span class="opacity-50 d-none d-sm-inline">&bull;</span>
            <span class="d-inline-flex align-items-center gap-2">
                <i class="bi bi-shield-check text-success"></i>
                <span>₹0 Advance Deposit</span>
            </span>
            <span class="opacity-50 d-none d-sm-inline">&bull;</span>
            <span class="d-inline-flex align-items-center gap-2">
                <i class="bi bi-broadcast text-info"></i>
                <span>GPS Live Tracked</span>
            </span>
            <span class="opacity-50 d-none d-md-inline">&bull;</span>
            <span class="d-inline-flex align-items-center gap-2">
                <i class="bi bi-clock-history text-primary"></i>
                <span>24x7 Doorstep Pickup</span>
            </span>
        </div>

    </div>
</section>


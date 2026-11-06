<?php
/**
 * Car Rental Hero Component (Dynamic by City)
 * Modern Minimalist Banner with City Switcher, Quick Booking Bar, and Trust Indicators.
 */
$allCities = getCarRentalCities();
$currentCitySlug = $cityData['slug'] ?? 'delhi-ncr';
?>

<!-- Car Rental Hero Banner -->
<section id="car-rental-hero" class="position-relative text-white py-5 overflow-hidden" style="background: linear-gradient(rgba(15, 23, 42, 0.76), rgba(15, 23, 42, 0.84)), url('<?= htmlspecialchars($cityData['image']); ?>') center/cover no-repeat; min-height: 440px;">
    <div class="container position-relative z-2 py-4 py-lg-5">
        
        <!-- Breadcrumb & Badge -->
        <div class="text-center mb-3">
            <span class="badge bg-primary bg-opacity-25 text-white border border-light border-opacity-25 px-3 py-1.5 rounded-pill fw-semibold small text-uppercase mb-2 d-inline-flex align-items-center gap-1.5">
                <i class="bi bi-car-front-fill"></i>
                <span><?= htmlspecialchars($cityData['badge']); ?> &bull; <?= htmlspecialchars($cityData['state']); ?></span>
            </span>
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
                <a href="carRentalLocation.php?city=<?= urlencode($slug); ?>" class="btn btn-sm rounded-pill px-3 py-1.5 fw-medium <?= $isActive ? 'btn-primary shadow-sm' : 'btn-outline-light text-white-50 border-secondary border-opacity-50 hover-white'; ?>">
                    <?= htmlspecialchars($c['city_name']); ?>
                </a>
            <?php endforeach; ?>
        </div>

        <!-- Quick Booking & Search Bar Card -->
        <div class="row justify-content-center">
            <div class="col-lg-11 col-xl-10">
                <div class="bg-white rounded-4 shadow-lg p-3 p-md-4 text-dark border border-light-subtle">
                    
                    <!-- Trip Type Radio Pills -->
                    <div class="d-flex flex-wrap align-items-center gap-2 mb-3 pb-2 border-bottom border-light-subtle">
                        <span class="text-secondary small fw-semibold me-2">Service Type:</span>
                        <div class="btn-group btn-group-sm" role="group" aria-label="Trip type selection">
                            <input type="radio" class="btn-check" name="tripTypeRadio" id="tripLocal" autocomplete="off" checked>
                            <label class="btn btn-outline-primary px-3 rounded-pill me-1" for="tripLocal">Local Sightseeing (8h/80km)</label>

                            <input type="radio" class="btn-check" name="tripTypeRadio" id="tripOutstation" autocomplete="off">
                            <label class="btn btn-outline-primary px-3 rounded-pill me-1" for="tripOutstation">Outstation Trip</label>

                            <input type="radio" class="btn-check" name="tripTypeRadio" id="tripAirport" autocomplete="off">
                            <label class="btn btn-outline-primary px-3 rounded-pill" for="tripAirport">Airport Transfer</label>
                        </div>
                    </div>

                    <form action="#booking" method="GET" class="row g-2 g-md-3 align-items-end">
                        
                        <!-- Pickup Spot -->
                        <div class="col-12 col-md-3">
                            <label class="form-label small fw-semibold text-secondary mb-1">
                                <i class="bi bi-geo-alt-fill text-primary me-1"></i> Pickup Location
                            </label>
                            <select class="form-select bg-light border-light-subtle py-2.5 rounded-3 fw-medium">
                                <option value="" selected><?= htmlspecialchars($cityData['city_name']); ?> (Doorstep Pickup)</option>
                                <?php foreach ($cityData['popular_spots'] as $spot): ?>
                                    <option value="<?= htmlspecialchars($spot); ?>"><?= htmlspecialchars($spot); ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <!-- Car Choice -->
                        <div class="col-12 col-md-3">
                            <label class="form-label small fw-semibold text-secondary mb-1">
                                <i class="bi bi-car-front-fill text-primary me-1"></i> Vehicle Fleet
                            </label>
                            <select class="form-select bg-light border-light-subtle py-2.5 rounded-3 fw-medium">
                                <option value="sedan">Dzire / Etios (AC Sedan)</option>
                                <option value="suv">Innova Crysta (6-7 Seater)</option>
                                <option value="hatchback">WagonR (Economy Hatchback)</option>
                                <option value="tempo">Tempo Traveller (12-16 Seater)</option>
                            </select>
                        </div>

                        <!-- Date -->
                        <div class="col-12 col-md-3">
                            <label class="form-label small fw-semibold text-secondary mb-1">
                                <i class="bi bi-calendar-event text-primary me-1"></i> Travel Date
                            </label>
                            <input type="date" class="form-control bg-light border-light-subtle py-2.5 rounded-3 fw-medium" value="<?= date('Y-m-d'); ?>">
                        </div>

                        <!-- Submit Button -->
                        <div class="col-12 col-md-3">
                            <a href="#booking" class="btn btn-primary w-100 py-2.5 rounded-3 fw-semibold shadow-xs d-flex align-items-center justify-content-center gap-2">
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Reserve This Cab</span>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Trust Badges Strip -->
        <div class="d-flex flex-wrap justify-content-center align-items-center gap-3 gap-md-4 mt-4 pt-2 text-white-50 small">
            <span class="d-inline-flex align-items-center gap-1.5">
                <i class="bi bi-star-fill text-warning"></i>
                <strong class="text-white">4.9/5</strong> Driver Rating
            </span>
            <span class="opacity-50 d-none d-sm-inline">&bull;</span>
            <span class="d-inline-flex align-items-center gap-1.5">
                <i class="bi bi-shield-check text-success"></i>
                <span>₹0 Advance Deposit</span>
            </span>
            <span class="opacity-50 d-none d-sm-inline">&bull;</span>
            <span class="d-inline-flex align-items-center gap-1.5">
                <i class="bi bi-broadcast text-info"></i>
                <span>GPS Live Tracked</span>
            </span>
            <span class="opacity-50 d-none d-md-inline">&bull;</span>
            <span class="d-inline-flex align-items-center gap-1.5">
                <i class="bi bi-clock-history text-primary"></i>
                <span>24x7 Doorstep Pickup</span>
            </span>
        </div>

    </div>
</section>


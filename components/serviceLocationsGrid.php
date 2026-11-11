<?php
/**
 * Service Locations Grid Component
 * Displays prominent service hubs with clean Bootstrap 5 square cards.
 */
$allLocations = function_exists('getCarRentalCities') ? getCarRentalCities() : [];

// Detect active city filter from request or parent scope (e.g. carRentalLocation.php)
$activeCitySlug = $_GET['city'] ?? ($cityKey ?? ($cityData['slug'] ?? ''));
?>

<!-- Service Locations Section -->
<section class="py-5 bg-white position-relative" id="service-locations-grid">
    <div class="container py-lg-4">
        
        <!-- Header -->
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-end mb-4 mb-lg-5 gap-3">
            <div>
                <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-1.5 rounded-pill fw-semibold small text-uppercase mb-2 d-inline-flex align-items-center gap-1">
                    <i class="bi bi-geo-alt-fill"></i>
                    <span>Service Locations</span>
                </span>
                <h2 class="display-6 fw-bold text-dark mb-2">
                    Car Rental Hubs Across North India
                </h2>
                <p class="text-secondary mb-0" style="max-width: 640px;">
                    Book reliable chauffeur cabs with doorstep pickup across Delhi NCR, Delhi, Gurgaon, Noida, Greater Noida, Ghaziabad, and Faridabad.
                </p>
            </div>
            
            <a href="tourPackage.php" class="btn btn-outline-primary rounded-pill px-4 py-2 fw-semibold d-inline-flex align-items-center gap-2 flex-shrink-0">
                <span>View Tour Packages</span>
                <i class="bi bi-arrow-right"></i>
            </a>
        </div>

        <!-- Locations Grid (Square Cards) -->
        <div class="row g-3 g-md-4">
            <?php foreach ($allLocations as $slug => $loc): ?>
                <?php 
                    // Hide the currently active city filter from the grid on car rental page
                    if (!empty($activeCitySlug) && $slug === $activeCitySlug) {
                        continue;
                    }
                    $resolvedImg = function_exists('theme_url') ? theme_url($loc['image']) : $loc['image'];
                    $locLink = function_exists('theme_url') ? theme_url('carRentalLocation.php?city=' . urlencode($slug)) : ('carRentalLocation.php?city=' . urlencode($slug));
                ?>
                <div class="col-6 col-md-4">
                    <a href="<?= htmlspecialchars($locLink); ?>" class="text-decoration-none d-block h-100 group">
                        <div class="card h-100 border border-light-subtle rounded-4 overflow-hidden shadow-xs hover-lift bg-white d-flex flex-column location-square-card position-relative" style="aspect-ratio: 1 / 1;">
                            
                            <!-- Image Media (Fills Upper Square Area) -->
                            <div class="position-relative overflow-hidden bg-dark flex-grow-1 w-100" style="min-height: 0; background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%);">
                                <img 
                                    src="<?= htmlspecialchars($resolvedImg); ?>" 
                                    alt="<?= htmlspecialchars($loc['city_name']); ?> Car Rental" 
                                    class="w-100 h-100 object-fit-cover transition-transform position-relative z-1" 
                                    style="transition: transform 0.4s ease;"
                                    loading="lazy"
                                    onerror="this.style.display='none';"
                                >
                                <div class="position-absolute inset-0 d-flex flex-column align-items-center justify-content-center text-white-50 p-2 text-center z-0">
                                    <i class="bi bi-car-front-fill text-primary fs-2 mb-1"></i>
                                    <span class="small fw-semibold text-white"><?= htmlspecialchars($loc['city_name']); ?></span>
                                </div>
                                <div class="position-absolute inset-0 bg-dark bg-opacity-15 z-2 pointer-events-none"></div>
                                <span class="badge bg-dark bg-opacity-75 text-white position-absolute top-0 start-0 m-2.5 m-sm-3 px-2.5 px-sm-3 py-1 rounded-pill small z-3" style="font-size: 11px; backdrop-filter: blur(4px);">
                                    <?= htmlspecialchars($loc['state']); ?>
                                </span>
                            </div>

                            <!-- Content Footer -->
                            <div class="p-2.5 p-sm-3 d-flex justify-content-between align-items-center bg-white flex-shrink-0 border-top border-light-subtle">
                                <div class="text-truncate me-2">
                                    <h3 class="fw-bold fs-6 text-dark mb-0 text-truncate">
                                        <?= htmlspecialchars($loc['city_name']); ?>
                                    </h3>
                                    <span class="text-secondary small d-none d-sm-block text-truncate" style="font-size: 11px;">Car Rental &amp; Cabs</span>
                                </div>
                                <span class="btn btn-outline-primary btn-sm rounded-circle d-flex align-items-center justify-content-center p-0 flex-shrink-0" style="width: 28px; height: 28px;">
                                    <i class="bi bi-arrow-right"></i>
                                </span>
                            </div>

                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>

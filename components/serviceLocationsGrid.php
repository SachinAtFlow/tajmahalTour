<?php
/**
 * Service Locations Grid Component
 * Displays prominent service hubs with clean Bootstrap 5 card design.
 */
$allLocations = getCarRentalCities();
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
                    Book reliable chauffeur cabs with doorstep pickup across Delhi NCR, Agra, Rajasthan, Punjab, Uttarakhand, and Himachal Pradesh.
                </p>
            </div>
            
            <a href="tourPackage.php" class="btn btn-outline-primary rounded-pill px-4 py-2 fw-semibold d-inline-flex align-items-center gap-2 flex-shrink-0">
                <span>View Tour Packages</span>
                <i class="bi bi-arrow-right"></i>
            </a>
        </div>

        <!-- Locations Grid (4 Columns) -->
        <div class="row g-3 g-md-4">
            <?php foreach ($allLocations as $slug => $loc): ?>
                <div class="col-6 col-md-4 col-lg-3">
                    <a href="carRentalLocation.php?city=<?= urlencode($slug); ?>" class="text-decoration-none d-block h-100 group">
                        <div class="card h-100 border border-light-subtle rounded-4 overflow-hidden shadow-xs hover-lift bg-white">
                            <!-- Image Media -->
                            <div class="position-relative overflow-hidden" style="height: 160px;">
                                <img 
                                    src="<?= htmlspecialchars($loc['image']); ?>" 
                                    alt="<?= htmlspecialchars($loc['city_name']); ?>" 
                                    class="w-100 h-100 object-fit-cover transition-transform" 
                                    style="transition: transform 0.4s ease;"
                                    loading="lazy"
                                >
                                <div class="position-absolute inset-0 bg-dark bg-opacity-25"></div>
                                <span class="badge bg-dark bg-opacity-75 text-white position-absolute top-0 start-0 m-2.5 px-2.5 py-1 rounded-pill small" style="font-size: 11px;">
                                    <?= htmlspecialchars($loc['state']); ?>
                                </span>
                            </div>

                            <!-- Content -->
                            <div class="p-3">
                                <h3 class="fw-bold fs-6 text-dark mb-1">
                                    <?= htmlspecialchars($loc['city_name']); ?>
                                </h3>
                                <div class="d-flex justify-content-between align-items-center text-muted small mt-2 pt-2 border-top border-light-subtle">
                                    <span class="text-primary fw-semibold" style="font-size: 12px;">
                                        From <?= htmlspecialchars($loc['rates']['local']); ?>
                                    </span>
                                    <i class="bi bi-arrow-right text-secondary small"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>


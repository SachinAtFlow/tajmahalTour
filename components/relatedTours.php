<?php
/**
 * Related Tour Packages Grid Component
 * File: components/relatedTours.php
 * 
 * Elegant, high-conversion 4-column responsive grid showcase
 * for related tour packages in the same parent category.
 * Rendered using dark luxury tour cards matching featuredTour design.
 */

if (empty($relatedTours) || !is_array($relatedTours)) {
    return;
}

$categorySlug = $categorySlug ?? 'tours';
$categoryTitle = $categoryTitle ?? 'Tour Packages';
?>

<!-- Related Tour Packages Section -->
<section class="py-5 bg-light border-top position-relative" id="related-tour-packages">
    <div class="container py-2">
        
        <!-- Section Header -->
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-end gap-3 mb-4">
            <div>
                <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-1.5 rounded-pill fw-semibold small text-uppercase mb-2 d-inline-flex align-items-center gap-1.5">
                    <i class="bi bi-compass-fill"></i>
                    <span>SIMILAR <?= strtoupper(htmlspecialchars($categoryTitle)); ?> CIRCUITS</span>
                </span>
                <h2 class="display-6 fw-bold text-dark mb-2">
                    Other Recommended <?= htmlspecialchars($categoryTitle); ?> Packages
                </h2>
                <p class="text-secondary mb-0" style="max-width: 640px;">
                    Looking for alternative options in this circuit? Compare other handpicked itineraries with private verified chauffeurs.
                </p>
            </div>

            <!-- View All in Category Link -->
            <a href="index.php" class="btn btn-outline-primary rounded-pill px-4 py-2 fw-semibold d-inline-flex align-items-center gap-2 shadow-xs flex-shrink-0">
                <span>View All in <?= htmlspecialchars($categoryTitle); ?></span>
                <i class="bi bi-arrow-right"></i>
            </a>
        </div>

        <!-- 4-Column Responsive Cards Grid (Dark Luxury Cards matching Featured Tour) -->
        <div class="row row-cols-1 row-cols-sm-2 row-cols-xl-4 g-4 mt-1">
            <?php foreach ($relatedTours as $rTour): ?>
                <?php
                    $tourSlug = $rTour['slug'] ?? '';
                    $tourTitle = $rTour['title'] ?? '';
                    $tourDuration = $rTour['duration'] ?? '1 Day';
                    $tourPrice = $rTour['price_start'] ?? '₹4,500';
                    $tourImage = $rTour['image'] ?? 'assets/images/uttarPradesh/tajmahal.avif';
                    $tourRating = $rTour['rating'] ?? '4.9';
                    $tourTag = $rTour['tag'] ?? 'POPULAR';
                    $tourOverview = $rTour['overview'] ?? '';
                    $tourVehicle = $rTour['vehicle'] ?? 'Private Cab';
                    $tourLink = ($categorySlug ?? '') . '/specificTourTemplate.php?tour=' . urlencode($tourSlug);
                    $fullTourUrl = function_exists('theme_url') ? theme_url($tourLink) : $tourLink;
                    $fullImgUrl = function_exists('theme_url') ? theme_url($tourImage) : $tourImage;
                ?>
                <div class="col">
                    <!-- Dark Luxury Card (Matching Featured Tour Style) -->
                    <div class="dark-tour-card h-100">
                        
                        <!-- Top Media Area with Floating Bookmark & Seamless Bottom Fade -->
                        <div class="dark-tour-media">
                            
                            <!-- Floating Tag Badge (Top-Left) -->
                            <?php if (!empty($tourTag)): ?>
                                <span class="position-absolute top-0 start-0 m-3 z-3 badge rounded-pill bg-dark bg-opacity-75 text-white border border-light border-opacity-25 px-3 py-2 fw-semibold shadow-sm d-inline-flex align-items-center" style="backdrop-filter: blur(8px); -webkit-backdrop-filter: blur(8px); font-size: 11px; letter-spacing: 0.05em;">
                                    <?= htmlspecialchars($tourTag); ?>
                                </span>
                            <?php endif; ?>

                            <!-- Floating Bookmark Icon (Top-Right) -->
                            <a href="<?= htmlspecialchars($fullTourUrl); ?>" class="dark-tour-bookmark" title="Save tour" aria-label="Save tour">
                                <i class="bi bi-bookmark"></i>
                            </a>

                            <a href="<?= htmlspecialchars($fullTourUrl); ?>" tabindex="-1" aria-hidden="true" class="d-block w-100 h-100">
                                <img 
                                    src="<?= htmlspecialchars($fullImgUrl); ?>" 
                                    alt="<?= htmlspecialchars(!empty($tourTitle) ? $tourTitle . ' Tour Package' : 'Tour Package'); ?>" 
                                    loading="lazy"
                                >
                            </a>
                            <!-- Seamless Bottom Gradient Fade into Card Body -->
                            <div class="dark-tour-fade"></div>
                        </div>

                        <!-- Card Content Body -->
                        <div class="dark-tour-body">
                            <div>
                                <!-- Title & Price Capsule Row -->
                                <div class="d-flex align-items-start justify-content-between gap-2 mb-1">
                                    <h5 class="dark-tour-title line-clamp-2" style="min-height: 44px;">
                                        <a href="<?= htmlspecialchars($fullTourUrl); ?>" title="<?= htmlspecialchars($tourTitle); ?>">
                                            <?= htmlspecialchars($tourTitle); ?>
                                        </a>
                                    </h5>
                                    <?php if (!empty($tourPrice)): ?>
                                        <span class="dark-tour-price"><?= htmlspecialchars($tourPrice); ?></span>
                                    <?php endif; ?>
                                </div>

                                <!-- 2-Line Subtitle / Overview -->
                                <p class="dark-tour-desc">
                                    <?= htmlspecialchars($tourOverview); ?>
                                </p>

                                <!-- Spec Pill Badges Row -->
                                <div class="dark-tour-pills">
                                    <span class="dark-tour-pill">
                                        <i class="bi bi-clock"></i> <?= htmlspecialchars($tourDuration); ?>
                                    </span>
                                    <span class="dark-tour-pill">
                                        <i class="bi bi-car-front"></i> Private Cab
                                    </span>
                                    <span class="dark-tour-pill">
                                        <i class="bi bi-star-fill text-warning"></i> <?= htmlspecialchars($tourRating); ?>
                                    </span>
                                </div>
                            </div>

                            <!-- Solid White "Book now" Full-Width CTA Button -->
                            <a href="<?= htmlspecialchars($fullTourUrl); ?>" class="btn-dark-tour-cta">
                                Book now
                            </a>

                        </div>

                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>

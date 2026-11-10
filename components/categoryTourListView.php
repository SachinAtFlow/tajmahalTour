<?php
/**
 * Master Reusable Category Tour List View Component
 * File: components/categoryTourListView.php
 * 
 * Renders the category listing page for each tour category folder index.php:
 * - Breadcrumb navigation
 * - Category Hero Header
 * - Grid of specific tour packages with dynamic links to specificTourTemplate.php?tour={slug}
 * - Reusable global sections (How it works, Driver Safety, Testimonials, FAQ, CTA)
 */

if (!isset($tours) || empty($tours)) {
    echo "<div class='container py-5 text-center'><h3>No tours available in this category.</h3><a href='../tourPackage.php' class='btn btn-primary rounded-pill mt-3'>Back to All Packages</a></div>";
    return;
}

$categorySlug = $categorySlug ?? 'tours';
$categoryTitle = $categoryTitle ?? 'Tour Packages';
$categoryTag = $categoryTag ?? 'EXPLORE NORTH INDIA';
$categoryDescription = $categoryDescription ?? 'Discover handpicked itineraries and curated holiday packages with professional private chauffeurs.';
?>



<!-- Category Hero Header -->
<section class="bg-white py-5 border-bottom position-relative">
    <div class="container position-relative z-2">
        <div class="row align-items-center g-4">
            <div class="col-lg-8">
                <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-1.5 rounded-pill fw-semibold small text-uppercase mb-2">
                    <i class="bi bi-compass-fill me-1"></i> <?= htmlspecialchars($categoryTag); ?>
                </span>
                <h1 class="display-5 fw-bold text-dark mb-3">
                    <?= htmlspecialchars($categoryTitle); ?> Packages
                </h1>
                <p class="text-secondary fs-6 mb-0" style="max-width: 680px; line-height: 1.65;">
                    <?= htmlspecialchars($categoryDescription); ?>
                </p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <div class="d-inline-flex align-items-center gap-3 bg-light p-3 rounded-4 border">
                    <div class="text-center px-2">
                        <div class="fs-4 fw-bold text-primary lh-1"><?= count($tours); ?></div>
                        <div class="text-muted small mt-1">Packages</div>
                    </div>
                    <div class="vr my-1"></div>
                    <div class="text-center px-2">
                        <div class="fs-4 fw-bold text-dark lh-1">4.9★</div>
                        <div class="text-muted small mt-1">Rated</div>
                    </div>
                    <div class="vr my-1"></div>
                    <div class="text-center px-2">
                        <div class="fs-4 fw-bold text-success lh-1">100%</div>
                        <div class="text-muted small mt-1">Verified</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Tour Packages Grid Section -->
<section class="py-5 bg-light" id="category-tours-list">
    <div class="container">
        
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h2 class="fs-4 fw-bold text-dark mb-1">Top <?= htmlspecialchars($categoryTitle); ?> Packages</h2>
                <p class="text-secondary small mb-0">Select any package below to explore detailed day-wise itinerary and book online.</p>
            </div>
            <span class="badge bg-primary rounded-pill px-3 py-2 fw-medium small">
                Showing <?= count($tours); ?> Curated Tours
            </span>
        </div>

        <div class="row g-4">
            <?php foreach ($tours as $tour): ?>
                <?php
                    $slug = $tour['slug'] ?? '';
                    $tourUrl = (!empty($categorySlug) && !file_exists('specificTourTemplate.php')) 
                        ? theme_url($categorySlug . '/specificTourTemplate.php?tour=' . urlencode($slug)) 
                        : 'specificTourTemplate.php?tour=' . urlencode($slug);
                    
                    $imgRaw = $tour['image'] ?? 'assets/images/uttarPradesh/tajmahal.avif';
                    $imgSrc = htmlspecialchars(function_exists('theme_url') ? theme_url($imgRaw) : $imgRaw);
                    
                    $tag = !empty($tour['tag']) ? $tour['tag'] : (!empty($tour['duration']) ? $tour['duration'] : 'FEATURED TOUR');
                    $desc = !empty($tour['overview']) ? $tour['overview'] : (!empty($tour['description']) ? $tour['description'] : 'Handpicked guided journey designed for comfort, luxury, and authentic cultural exploration.');
                    $rating = !empty($tour['rating']) ? $tour['rating'] : '4.9';
                    $reviews = !empty($tour['reviews_count']) ? $tour['reviews_count'] : '250+';
                    $price = !empty($tour['price_start']) ? $tour['price_start'] : (!empty($tour['price']) ? $tour['price'] : '');
                    $duration = !empty($tour['duration']) ? $tour['duration'] : 'Flexible Days';
                ?>
                <div class="col-12 col-sm-6 col-lg-4">
                    <!-- Entire Card As Single Clickable Element with Featured Tour Dark Luxury Look -->
                    <a href="<?= $tourUrl; ?>" class="dark-tour-card text-decoration-none d-flex flex-column h-100 overflow-hidden position-relative" title="<?= htmlspecialchars($tour['title']); ?>">
                        
                        <!-- Top Media Area with Floating Badges & Seamless Bottom Fade -->
                        <div class="dark-tour-media">
                            
                            <!-- Floating Tag Badge (Top-Left) -->
                            <?php if (!empty($tag)): ?>
                                <span class="position-absolute top-0 start-0 m-3 z-3 badge rounded-pill bg-dark bg-opacity-75 text-white border border-light border-opacity-25 px-3 py-2 fw-semibold shadow-sm d-inline-flex align-items-center" style="backdrop-filter: blur(8px); -webkit-backdrop-filter: blur(8px); font-size: 11px; letter-spacing: 0.05em;">
                                    <?= htmlspecialchars($tag); ?>
                                </span>
                            <?php endif; ?>

                            <!-- Floating Price Badge (Top-Right) -->
                            <?php if (!empty($price)): ?>
                                <span class="position-absolute top-0 end-0 m-3 z-3 badge rounded-pill bg-primary text-white px-2.5 py-1.5 fw-bold shadow-sm d-inline-flex align-items-center" style="font-size: 12px;">
                                    <?= htmlspecialchars($price); ?>
                                </span>
                            <?php endif; ?>

                            <img 
                                src="<?= $imgSrc; ?>" 
                                alt="<?= htmlspecialchars($tour['title']); ?> Tour Package" 
                                loading="lazy"
                                decoding="async"
                            >
                            <!-- Seamless Bottom Gradient Fade into Card Body -->
                            <div class="dark-tour-fade position-absolute bottom-0 start-0 end-0 z-1"></div>
                        </div>

                        <!-- Card Content Body -->
                        <div class="dark-tour-body d-flex flex-column flex-grow-1 justify-content-between position-relative z-2">
                            <div>
                                <!-- Title -->
                                <div class="mb-1">
                                    <h3 class="dark-tour-title text-line-clamp-2 fw-bold m-0 text-decoration-none overflow-hidden">
                                        <?= htmlspecialchars($tour['title']); ?>
                                    </h3>
                                </div>

                                <!-- 2-Line Subtitle / Overview Description -->
                                <p class="dark-tour-desc text-line-clamp-2 overflow-hidden">
                                    <?= htmlspecialchars($desc); ?>
                                </p>

                                <!-- Spec Pill Badges Row -->
                                <div class="dark-tour-pills d-flex align-items-center flex-wrap">
                                    <!-- Duration Pill -->
                                    <span class="dark-tour-pill fw-medium d-inline-flex align-items-center">
                                        <i class="bi bi-clock-history opacity-75"></i>
                                        <span><?= htmlspecialchars($duration); ?></span>
                                    </span>
                                    <!-- Vehicle / Type Pill -->
                                    <span class="dark-tour-pill fw-medium d-inline-flex align-items-center">
                                        <i class="bi bi-car-front opacity-75"></i>
                                        <span>Private Chauffeur</span>
                                    </span>
                                    <!-- Rating Pill -->
                                    <span class="dark-tour-pill fw-medium d-inline-flex align-items-center">
                                        <i class="bi bi-star-fill text-warning"></i>
                                        <span><?= htmlspecialchars($rating); ?> (<?= htmlspecialchars($reviews); ?>)</span>
                                    </span>
                                </div>
                            </div>

                            <!-- Solid White "Explore Itinerary" Full-Width CTA Button (Visual Trigger) -->
                            <div class="mt-auto pt-1">
                                <span class="btn-dark-tour-cta d-inline-flex align-items-center justify-content-center gap-2 fw-bold text-center text-decoration-none d-block w-100 border-0">
                                    <span>Explore Itinerary</span>
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

<!-- Reusable Sections: How Booking Works -->
<?php require_once __DIR__ . '/howItWorks.php'; ?>

<!-- Reusable Sections: Driver Safety Standards -->
<?php require_once __DIR__ . '/safetyVarified.php'; ?>

<!--gallery of Category -->
<?php require_once __DIR__ . '/gallerySection.php'; ?>


<!-- Reusable Sections: Testimonials -->
<?php require_once __DIR__ . '/testimonials.php'; ?>

<!-- Reusable Sections: FAQ Section -->
<?php require_once __DIR__ . '/faq.php'; ?>

<!--blog of Category -->
<?php require_once __DIR__ . '/blog.php'; ?>


<!-- Reusable Sections: Call to Action Banner -->
<?php require_once __DIR__ . '/cta.php'; ?>


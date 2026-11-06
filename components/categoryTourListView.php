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

<!-- Breadcrumb Header -->
<div class="bg-light border-bottom py-3">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 small">
                <li class="breadcrumb-item"><a href="<?= theme_url('index.php'); ?>" class="text-decoration-none text-secondary">Home</a></li>
                <li class="breadcrumb-item"><a href="<?= theme_url('tourPackage.php'); ?>" class="text-decoration-none text-secondary">Tour Packages</a></li>
                <li class="breadcrumb-item active text-primary fw-semibold" aria-current="page"><?= htmlspecialchars($categoryTitle); ?></li>
            </ol>
        </nav>
    </div>
</div>

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
                <h2 class="fs-4 fw-bold text-dark mb-1">Available Tour Circuits</h2>
                <p class="text-secondary small mb-0">Select any package below to explore detailed day-wise itinerary and book online.</p>
            </div>
            <span class="badge bg-primary rounded-pill px-3 py-2 fw-medium small">
                Showing <?= count($tours); ?> Curated Tours
            </span>
        </div>

        <div class="row g-4">
            <?php foreach ($tours as $tour): ?>
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border-0 rounded-4 overflow-hidden shadow-sm bg-white d-flex flex-column transition-all hover-shadow">
                        
                        <!-- Tour Card Image -->
                        <div class="position-relative" style="height: 240px; overflow: hidden;">
                            <img 
                                src="<?= theme_url($tour['image'] ?? 'assets/images/uttarPradesh/tajmahal.avif'); ?>" 
                                class="w-100 h-100 object-fit-cover" 
                                alt="<?= htmlspecialchars($tour['title']); ?>"
                                loading="lazy"
                            >
                            <span class="position-absolute top-0 start-0 m-3 badge bg-dark bg-opacity-75 text-white rounded-pill px-3 py-1.5 small fw-semibold">
                                <i class="bi bi-clock-history me-1"></i> <?= htmlspecialchars($tour['duration'] ?? '1 Day'); ?>
                            </span>
                            <span class="position-absolute top-0 end-0 m-3 badge bg-primary text-white rounded-pill px-2.5 py-1.5 small fw-semibold shadow-xs">
                                <?= htmlspecialchars($tour['price_start'] ?? '₹4,500'); ?>
                            </span>
                        </div>

                        <!-- Tour Card Content -->
                        <div class="card-body p-4 d-flex flex-column flex-grow-1">
                            <div class="d-flex align-items-center gap-1 text-warning small mb-2">
                                <i class="bi bi-star-fill"></i>
                                <span class="text-dark fw-bold ms-1"><?= htmlspecialchars($tour['rating'] ?? '4.9'); ?></span>
                                <span class="text-secondary">(<?= htmlspecialchars($tour['reviews_count'] ?? '200+'); ?> reviews)</span>
                            </div>

                            <h3 class="fs-5 fw-bold text-dark mb-2 lh-sm">
                                <?= htmlspecialchars($tour['title']); ?>
                            </h3>

                            <p class="text-secondary small mb-3 flex-grow-1" style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">
                                <?= htmlspecialchars($tour['overview'] ?? ''); ?>
                            </p>

                            <!-- Highlights Preview -->
                            <?php if (!empty($tour['highlights'])): ?>
                                <ul class="list-unstyled small mb-3 d-flex flex-column gap-1.5 text-secondary">
                                    <?php foreach (array_slice($tour['highlights'], 0, 2) as $hl): ?>
                                        <li class="d-flex align-items-start gap-2">
                                            <i class="bi bi-check2 text-success fw-bold mt-0.5"></i>
                                            <span class="text-truncate"><?= htmlspecialchars($hl); ?></span>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>

                            <div class="pt-3 border-top mt-auto d-flex align-items-center justify-content-between">
                                <span class="text-secondary small">
                                    <i class="bi bi-car-front text-primary me-1"></i> Private Chauffeur
                                </span>
                                <a 
                                    href="specificTourTemplate.php?tour=<?= urlencode($tour['slug']); ?>" 
                                    class="btn btn-outline-primary btn-sm rounded-pill px-3 py-1.5 fw-semibold d-inline-flex align-items-center gap-1.5"
                                >
                                    <span>View Details</span>
                                    <i class="bi bi-arrow-right small"></i>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>

<!-- Reusable Sections: How Booking Works -->
<?php require_once __DIR__ . '/howItWorks.php'; ?>

<!-- Reusable Sections: Driver Safety Standards -->
<?php require_once __DIR__ . '/safetyVarified.php'; ?>

<!-- Reusable Sections: Testimonials -->
<?php require_once __DIR__ . '/testimonials.php'; ?>

<!-- Reusable Sections: FAQ Section -->
<?php require_once __DIR__ . '/faq.php'; ?>

<!-- Reusable Sections: Call to Action Banner -->
<?php require_once __DIR__ . '/cta.php'; ?>


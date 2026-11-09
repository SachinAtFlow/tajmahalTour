<?php
/**
 * Master Reusable Tour Detail View Component
 * File: components/tourDetailView.php
 * 
 * Dynamically renders complete specific tour package details:
 * - Breadcrumb navigation
 * - Tour Hero & quick specs (Duration, Pickup, Vehicle, Rating)
 * - Gallery / Hero Image
 * - Tour Highlights & Overview
 * - Day-by-Day / Hourly Timeline Itinerary
 * - Inclusions & Exclusions Checklist
 * - Sticky Fast Booking Inquiry Sidebar
 * - Reusable Global Sections (Driver Safety, Testimonials, FAQ, CTA)
 */

if (!isset($currentTour) || empty($currentTour)) {
    echo "<div class='container py-5 text-center'><h3>Tour package details not found.</h3><a href='index.php' class='btn btn-primary rounded-pill mt-3'>Back to Packages</a></div>";
    return;
}

$categorySlug = $categorySlug ?? 'tours';
$categoryTitle = $categoryTitle ?? 'Tour Packages';

// Filter other tours in this parent category (excluding the currently active tour)
$relatedTours = [];
$activeSlug = $currentTour['slug'] ?? $tourSlug ?? '';

if (!empty($tours) && is_array($tours)) {
    foreach ($tours as $slug => $t) {
        if ($slug !== $activeSlug) {
            $relatedTours[] = $t;
        }
    }
}
?>

<!-- Breadcrumb Header -->
<div class="bg-light border-bottom py-3">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 small">
                <li class="breadcrumb-item"><a href="<?= theme_url('index.php'); ?>" class="text-decoration-none text-secondary">Home</a></li>
                <li class="breadcrumb-item"><a href="<?= theme_url('tourPackage.php'); ?>" class="text-decoration-none text-secondary">Tours</a></li>
                <li class="breadcrumb-item"><a href="index.php" class="text-decoration-none text-secondary"><?= htmlspecialchars($categoryTitle); ?></a></li>
                <li class="breadcrumb-item active text-primary fw-semibold" aria-current="page"><?= htmlspecialchars($currentTour['title']); ?></li>
            </ol>
        </nav>
    </div>
</div>

<!-- Tour Hero Header Section -->
<section class="bg-white py-4 border-bottom">
    <div class="container">
        <div class="row align-items-center g-3">
            <div class="col-lg-8">
                <div class="d-flex flex-wrap align-items-center gap-2 mb-2">
                    <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-1.5 rounded-pill fw-semibold small text-uppercase">
                        <i class="bi bi-tag-fill me-1"></i> <?= htmlspecialchars($currentTour['tag'] ?? 'FEATURED TOUR'); ?>
                    </span>
                    <span class="badge bg-success bg-opacity-10 text-success px-3 py-1.5 rounded-pill fw-semibold small">
                        <i class="bi bi-patch-check-fill me-1"></i> Private Chauffeur
                    </span>
                    <span class="badge bg-warning bg-opacity-10 text-dark px-3 py-1.5 rounded-pill fw-semibold small">
                        <i class="bi bi-star-fill text-warning me-1"></i> <?= htmlspecialchars($currentTour['rating'] ?? '4.9'); ?> (<?= htmlspecialchars($currentTour['reviews_count'] ?? '250+'); ?> Reviews)
                    </span>
                </div>
                <h1 class="display-6 fw-bold text-dark mb-2">
                    <?= htmlspecialchars($currentTour['title']); ?>
                </h1>
                <p class="text-secondary mb-0 fs-6">
                    <?= htmlspecialchars($currentTour['overview'] ?? 'Experience the rich culture and heritage of North India with our private guided tour.'); ?>
                </p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <div class="d-inline-flex flex-column align-items-lg-end">
                    <span class="text-secondary small">Starting From</span>
                    <span class="fs-3 fw-bold text-primary lh-1 mb-2"><?= htmlspecialchars($currentTour['price_start'] ?? '₹4,500'); ?></span>
                    <a href="#tour-inquiry-card" class="btn btn-primary rounded-pill px-4 py-2 fw-semibold shadow-sm d-inline-flex align-items-center gap-2">
                        <span>Book This Tour</span>
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Tour Details Main Layout -->
<section class="py-5 bg-light" id="tour-details-main">
    <div class="container">
        <div class="row g-4 g-xl-5">
            
            <!-- Left Column: Tour Details & Itinerary (8 Cols) -->
            <div class="col-lg-8">
                
                <!-- Main Tour Image Banner -->
                <div class="card border-0 rounded-4 overflow-hidden shadow-sm mb-4">
                    <img 
                        src="<?= theme_url($currentTour['image'] ?? 'assets/images/uttarPradesh/tajmahal.avif'); ?>" 
                        class="w-100 object-fit-cover" 
                        style="height: 420px;" 
                        alt="<?= htmlspecialchars(!empty($currentTour['title']) ? $currentTour['title'] . ' Tour Itinerary' : 'Tour Package Details'); ?>"
                        loading="lazy"
                    >
                </div>

                <!-- Quick Highlights Bar -->
                <div class="card border-0 rounded-4 shadow-sm p-4 mb-4 bg-white">
                    <h3 class="fs-5 fw-bold text-dark mb-3 d-flex align-items-center gap-2">
                        <i class="bi bi-stars text-primary"></i> Tour Highlights
                    </h3>
                    <div class="row g-3">
                        <?php if (!empty($currentTour['highlights'])): ?>
                            <?php foreach ($currentTour['highlights'] as $highlight): ?>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start gap-2">
                                        <i class="bi bi-check-circle-fill text-success flex-shrink-0 mt-1"></i>
                                        <span class="text-dark small fw-medium"><?= htmlspecialchars($highlight); ?></span>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>

                <!-- Tour Specifications Cards Grid -->
                <div class="row g-3 mb-4">
                    <div class="col-sm-6 col-md-3">
                        <div class="card border-0 rounded-4 p-3 bg-white shadow-xs text-center h-100">
                            <i class="bi bi-clock-history text-primary fs-3 mb-1"></i>
                            <span class="text-muted small">Duration</span>
                            <span class="fw-bold text-dark small"><?= htmlspecialchars($currentTour['duration'] ?? '1 Day'); ?></span>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="card border-0 rounded-4 p-3 bg-white shadow-xs text-center h-100">
                            <i class="bi bi-geo-alt-fill text-danger fs-3 mb-1"></i>
                            <span class="text-muted small">Pickup &amp; Drop</span>
                            <span class="fw-bold text-dark small"><?= htmlspecialchars($currentTour['pickup'] ?? 'Delhi NCR'); ?></span>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="card border-0 rounded-4 p-3 bg-white shadow-xs text-center h-100">
                            <i class="bi bi-car-front-fill text-info fs-3 mb-1"></i>
                            <span class="text-muted small">Vehicle</span>
                            <span class="fw-bold text-dark small"><?= htmlspecialchars($currentTour['vehicle'] ?? 'Private AC Cab'); ?></span>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="card border-0 rounded-4 p-3 bg-white shadow-xs text-center h-100">
                            <i class="bi bi-shield-check text-success fs-3 mb-1"></i>
                            <span class="text-muted small">Assistance</span>
                            <span class="fw-bold text-dark small">24x7 Verified</span>
                        </div>
                    </div>
                </div>

                <!-- Detailed Itinerary Timeline -->
                <div class="card border-0 rounded-4 shadow-sm p-4 mb-4 bg-white" id="detailed-tour-itinerary">
                    <div class="d-flex flex-wrap align-items-center justify-content-between gap-2 mb-3 pb-2 border-bottom">
                        <div>
                            <h3 class="fs-5 fw-bold text-dark mb-0 d-flex align-items-center gap-2">
                                <i class="bi bi-calendar3 text-primary"></i> Detailed Tour Itinerary
                            </h3>
                            <p class="text-secondary small mb-0 mt-1">Day-wise travel schedule with private AC vehicle, verified chauffeur & flexible stops.</p>
                        </div>
                        <?php if (!empty($currentTour['itinerary'])): ?>
                            <span class="badge bg-primary bg-opacity-10 text-primary border border-primary border-opacity-25 rounded-pill px-3 py-1.5 fw-semibold small">
                                <i class="bi bi-clock-history me-1"></i> <?= count($currentTour['itinerary']); ?> Planned Schedule Steps
                            </span>
                        <?php endif; ?>
                    </div>

                    <?php if (!empty($currentTour['itinerary'])): ?>
                        <div class="position-relative ps-3 ps-md-4 border-start border-2 border-primary border-opacity-25 ms-2 pt-2">
                            <?php foreach ($currentTour['itinerary'] as $sIdx => $step): ?>
                                <?php 
                                    $timeBadge = !empty($step['time']) ? $step['time'] : (!empty($step['day']) ? $step['day'] : ('Day ' . sprintf('%02d', $sIdx + 1)));
                                    $title = $step['title'] ?? '';
                                    $desc = $step['desc'] ?? '';
                                    $stay = $step['stay'] ?? '';
                                ?>
                                <div class="position-relative mb-4 pb-2 itinerary-day-node">
                                    <!-- Timeline Node Circle -->
                                    <div class="position-absolute rounded-circle bg-primary" style="width: 14px; height: 14px; left: -24px; top: 6px; box-shadow: 0 0 0 4px rgba(59, 113, 254, 0.2);"></div>
                                    
                                    <div class="d-flex flex-wrap align-items-center gap-2 mb-2">
                                        <span class="badge bg-primary text-white rounded-pill px-2.5 py-1 small fw-semibold shadow-xs">
                                            <?= htmlspecialchars($timeBadge); ?>
                                        </span>
                                        <h4 class="fs-6 fw-bold text-dark mb-0"><?= htmlspecialchars($title); ?></h4>
                                    </div>

                                    <div class="text-secondary small mb-2 lh-base itinerary-desc">
                                        <?= nl2br(htmlspecialchars($desc)); ?>
                                    </div>

                                    <?php if (!empty($stay)): ?>
                                        <div class="mt-2">
                                            <span class="badge bg-light text-dark border px-2.5 py-1 small">
                                                <i class="bi bi-moon-stars-fill text-warning me-1"></i> <strong>Night Stay:</strong> <?= htmlspecialchars($stay); ?>
                                            </span>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>

                <!-- Inclusions & Exclusions Card -->
                <div class="card border-0 rounded-4 shadow-sm p-4 mb-4 bg-white">
                    <div class="row g-4">
                        <!-- Inclusions -->
                        <div class="col-md-6 border-end-md">
                            <h4 class="fs-6 fw-bold text-success mb-3 d-flex align-items-center gap-2">
                                <i class="bi bi-check-circle-fill"></i> What's Included
                            </h4>
                            <ul class="list-unstyled mb-0 d-flex flex-column gap-2 small">
                                <?php if (!empty($currentTour['inclusions'])): ?>
                                    <?php foreach ($currentTour['inclusions'] as $inc): ?>
                                        <li class="d-flex align-items-start gap-2">
                                            <i class="bi bi-check2 text-success fw-bold mt-0.5"></i>
                                            <span class="text-dark"><?= htmlspecialchars($inc); ?></span>
                                        </li>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </ul>
                        </div>

                        <!-- Exclusions -->
                        <div class="col-md-6">
                            <h4 class="fs-6 fw-bold text-danger mb-3 d-flex align-items-center gap-2">
                                <i class="bi bi-x-circle-fill"></i> What's Not Included
                            </h4>
                            <ul class="list-unstyled mb-0 d-flex flex-column gap-2 small">
                                <?php if (!empty($currentTour['exclusions'])): ?>
                                    <?php foreach ($currentTour['exclusions'] as $exc): ?>
                                        <li class="d-flex align-items-start gap-2">
                                            <i class="bi bi-x-lg text-danger small mt-1"></i>
                                            <span class="text-muted"><?= htmlspecialchars($exc); ?></span>
                                        </li>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Right Column: Sticky Booking & Inquiry Form (4 Cols) -->
            <div class="col-lg-4">
                <div class="sticky-top" style="top: 85px; z-index: 10;">
                    
                    <div class="card border-0 rounded-4 shadow-sm bg-white overflow-hidden p-4 mb-4" id="tour-inquiry-card">
                        
                        <div class="d-flex justify-content-between align-items-center pb-3 border-bottom mb-3">
                            <div>
                                <span class="badge bg-primary bg-opacity-10 text-primary rounded-pill px-2.5 py-1 small fw-semibold">Instant Quote</span>
                                <div class="fs-4 fw-bold text-dark mt-1"><?= htmlspecialchars($currentTour['price_start'] ?? '₹4,500'); ?></div>
                            </div>
                            <span class="badge bg-success bg-opacity-10 text-success rounded-pill px-3 py-1.5 small fw-semibold">
                                <i class="bi bi-check-circle-fill me-1"></i> Best Rate
                            </span>
                        </div>

                        <!-- Direct WhatsApp & Call Buttons -->
                        <div class="d-flex flex-column gap-2 mb-3">
                            <a 
                                href="https://wa.me/918800722606?text=<?= urlencode('Hello, I am interested in booking: ' . $currentTour['title']); ?>" 
                                target="_blank" 
                                class="btn btn-success rounded-pill w-100 py-2.5 fw-semibold d-flex align-items-center justify-content-center gap-2 shadow-xs"
                            >
                                <i class="bi bi-whatsapp fs-5"></i>
                                <span>Inquire on WhatsApp</span>
                            </a>
                            <a 
                                href="tel:000999656888" 
                                class="btn btn-outline-dark rounded-pill w-100 py-2 fw-semibold d-flex align-items-center justify-content-center gap-2"
                            >
                                <i class="bi bi-telephone-fill text-primary"></i>
                                <span>Call: (000) 999 -656 -888</span>
                            </a>
                        </div>

                        <div class="text-center position-relative my-2">
                            <hr class="text-muted">
                            <span class="position-absolute top-50 start-50 translate-middle bg-white px-2 small text-muted">OR QUICK INQUIRY</span>
                        </div>

                        <!-- Fast Inquiry Form -->
                        <form action="<?= theme_url('contactUs.php'); ?>" method="GET" class="mt-2">
                            <input type="hidden" name="tour" value="<?= htmlspecialchars($currentTour['title']); ?>">
                            
                            <div class="mb-2.5">
                                <label class="form-label small fw-semibold text-dark mb-1">Your Name</label>
                                <input type="text" name="name" class="form-control rounded-3 py-2 small" placeholder="Enter full name" required>
                            </div>
                            
                            <div class="mb-2.5">
                                <label class="form-label small fw-semibold text-dark mb-1">Mobile / WhatsApp Number</label>
                                <input type="tel" name="phone" class="form-control rounded-3 py-2 small" placeholder="+91 98765 43210" required>
                            </div>

                            <div class="row g-2 mb-2.5">
                                <div class="col-6">
                                    <label class="form-label small fw-semibold text-dark mb-1">Travel Date</label>
                                    <input type="date" name="travel_date" class="form-control rounded-3 py-2 small" required>
                                </div>
                                <div class="col-6">
                                    <label class="form-label small fw-semibold text-dark mb-1">Total Guests</label>
                                    <select name="guests" class="form-select rounded-3 py-2 small">
                                        <option value="1">1 Person</option>
                                        <option value="2" selected>2 Persons</option>
                                        <option value="3-4">3-4 Persons</option>
                                        <option value="5+">5+ Family/Group</option>
                                    </select>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary rounded-pill w-100 py-2.5 fw-semibold shadow-sm mt-2">
                                Send Tour Inquiry <i class="bi bi-arrow-right ms-1"></i>
                            </button>
                        </form>

                        <div class="mt-3 pt-3 border-top text-center text-secondary small">
                            <i class="bi bi-shield-check text-success me-1"></i> 100% Verified Drivers • No Advance Fee
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

<!-- Related Tour Packages: 4-Column Responsive Grid Showcase -->
<?php require_once __DIR__ . '/relatedTours.php'; ?>

<!-- Reusable Sections: Driver Safety & Fleet Standards -->
<?php require_once __DIR__ . '/safetyVarified.php'; ?>

<!-- Reusable Sections: Customer Testimonials -->
<?php //require_once __DIR__ . '/testimonials.php'; ?>

<!-- Reusable Sections: Gallery Section -->
<?php require_once __DIR__ . '/gallerySection.php'; ?>


<!-- Reusable Sections: FAQ Section -->
<?php require_once __DIR__ . '/faq.php'; ?>

<!-- Reusable Sections: Call to Action Banner -->
<?php require_once __DIR__ . '/cta.php'; ?>


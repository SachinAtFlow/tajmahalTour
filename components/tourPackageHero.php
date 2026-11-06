<?php
/**
 * Tour Package Page Hero Section
 * Modern Minimalist Banner with Breadcrumbs, Search Bar, and Trust Indicators.
 */
?>

<!-- Tour Package Hero Banner -->
<section id="tour-package-hero" class="position-relative text-white py-5 overflow-hidden" style="background: linear-gradient(rgba(15, 23, 42, 0.72), rgba(15, 23, 42, 0.82)), url('<?= function_exists('theme_url') ? theme_url('assets/images/uttarPradesh/tajmahal.avif') : 'assets/images/uttarPradesh/tajmahal.avif'; ?>') center/cover no-repeat; min-height: 420px;">
    <div class="container position-relative z-2 py-4 py-lg-5">
        
        <!-- Breadcrumb & Tag -->
        <div class="text-center mb-3">
            
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0 small">
                    <li class="breadcrumb-item">
                        <a href="index.php" class="text-white-50 text-decoration-none">
                            <i class="bi bi-house-door me-1"></i> Home
                        </a>
                    </li>
                    <li class="breadcrumb-item active text-white" aria-current="page">Tour Packages</li>
                </ol>
            </nav>
            <span class="badge bg-primary bg-opacity-25 text-white border border-light border-opacity-25 px-3 py-1.5 rounded-pill fw-semibold small text-uppercase mb-2 d-inline-flex align-items-center gap-2 mt-4">
                <i class="bi bi-compass-fill"></i>
                <span>HANDPICKED HOLIDAY EXPERIENCES</span>
            </span>
        </div>

        <!-- Banner Title & Description -->
        <div class="text-center mx-auto" style="max-width: 820px;">
            <h1 class="display-5 fw-bold text-white mb-3">
                North India Holiday &amp; Guided Tour Packages
            </h1>
            <p class="lead text-white-50 mb-4 fs-6 lh-base" style="max-width: 700px; margin: 0 auto;">
                From sunrise at the iconic Taj Mahal to royal Rajasthan palaces, misty Himachal valleys, and sacred Ganga ghats. Travel in luxury private AC cabs with verified local chauffeurs.
            </p>
        </div>

        <!-- Floating Quick Search & Filter Bar -->
        <div class="row justify-content-center mt-4">
            <div class="col-lg-10 col-xl-9">
                <div class="bg-white rounded-4 shadow-lg p-3 p-md-4 text-dark border border-light-subtle">
                    <form action="tourPackage.php#featured-tours" method="GET" class="row g-2 g-md-3 align-items-end" id="tourQuickFilterForm">
                        
                        <!-- Destination Field -->
                        <div class="col-12 col-md-4">
                            <label class="form-label small fw-semibold text-secondary mb-1">
                                <i class="bi bi-geo-alt-fill text-primary me-1"></i> Destination
                            </label>
                            <select class="form-select bg-light border-light-subtle py-2.5 rounded-3 fw-medium" id="tourFilterDestination">
                                <option value="all">All North India Regions</option>
                                <option value="uttar-pradesh">Agra &amp; Taj Mahal (UP)</option>
                                <option value="delhi">Delhi Sightseeing &amp; NCR</option>
                                <option value="rajasthan">Rajasthan Royal Palaces</option>
                                <option value="himachal">Himachal Hills &amp; Valleys</option>
                                <option value="uttarakhand">Uttarakhand &amp; Rishikesh</option>
                                <option value="gujarat">Gujarat Heritage</option>
                                <option value="nepal">Nepal Scenic Tours</option>
                            </select>
                        </div>

                        <!-- Duration Field -->
                        <div class="col-12 col-md-4">
                            <label class="form-label small fw-semibold text-secondary mb-1">
                                <i class="bi bi-clock-history text-primary me-1"></i> Tour Duration
                            </label>
                            <select class="form-select bg-light border-light-subtle py-2.5 rounded-3 fw-medium" id="tourFilterDuration">
                                <option value="any">Any Duration</option>
                                <option value="sameday">Same Day (8&ndash;12 Hours)</option>
                                <option value="weekend">2&ndash;3 Days (Short Break)</option>
                                <option value="extended">4&ndash;7 Days (Holiday Tour)</option>
                            </select>
                        </div>

                        <!-- Action Button -->
                        <div class="col-12 col-md-4">
                            <button type="button" id="tourSearchBtn" class="btn btn-primary w-100 py-2.5 rounded-3 fw-semibold shadow-xs d-flex align-items-center justify-content-center gap-2">
                                <i class="bi bi-search"></i>
                                <span>Find Tour Packages</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Trust Badges Strip -->
        <div class="d-flex flex-wrap justify-content-center align-items-center gap-3 gap-md-4 mt-4 pt-2 text-white-50 small">
            <span class="d-inline-flex align-items-center gap-1.5">
                <i class="bi bi-star-fill text-warning"></i>
                <strong class="text-white">4.9/5</strong> Rating (1,200+ Reviews)
            </span>
            <span class="opacity-50 d-none d-sm-inline">&bull;</span>
            <span class="d-inline-flex align-items-center gap-1.5">
                <i class="bi bi-shield-check text-success"></i>
                <span>₹0 Advance Deposit</span>
            </span>
            <span class="opacity-50 d-none d-sm-inline">&bull;</span>
            <span class="d-inline-flex align-items-center gap-1.5">
                <i class="bi bi-person-check-fill text-info"></i>
                <span>Verified Chauffeur Included</span>
            </span>
            <span class="opacity-50 d-none d-md-inline">&bull;</span>
            <span class="d-inline-flex align-items-center gap-1.5">
                <i class="bi bi-arrow-repeat text-primary"></i>
                <span>Free Date Rescheduling</span>
            </span>
        </div>

    </div>
</section>

<!-- Filter trigger script to seamlessly hook into featured tours tabs -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const searchBtn = document.getElementById('tourSearchBtn');
    const destSelect = document.getElementById('tourFilterDestination');
    
    if (searchBtn && destSelect) {
        searchBtn.addEventListener('click', function() {
            const selectedVal = destSelect.value;
            const targetSection = document.getElementById('featured-tours');
            
            if (targetSection) {
                targetSection.scrollIntoView({ behavior: 'smooth' });
            }
            
            // Trigger matching tab if exists
            const tabBtn = document.querySelector(`.tour-filter-btn[data-category="${selectedVal}"]`) || document.querySelector('.tour-filter-btn[data-category="all"]');
            if (tabBtn) {
                setTimeout(function() {
                    tabBtn.click();
                }, 400);
            }
        });
    }
});
</script>

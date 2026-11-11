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

        

        <!-- Trust Badges Strip -->
        <div class="d-flex flex-wrap justify-content-center align-items-center gap-3 gap-md-4 mt-4 pt-2 text-white-50 small">
            <span class="d-inline-flex align-items-center gap-2">
                <i class="bi bi-star-fill text-warning"></i>
                <strong class="text-white">4.9/5</strong> Rating (1,200+ Reviews)
            </span>
            <span class="opacity-50 d-none d-sm-inline">&bull;</span>
            <span class="d-inline-flex align-items-center gap-2">
                <i class="bi bi-shield-check text-success"></i>
                <span>₹0 Advance Deposit</span>
            </span>
            <span class="opacity-50 d-none d-sm-inline">&bull;</span>
            <span class="d-inline-flex align-items-center gap-2">
                <i class="bi bi-person-check-fill text-info"></i>
                <span>Verified Chauffeur Included</span>
            </span>
            <span class="opacity-50 d-none d-md-inline">&bull;</span>
            <span class="d-inline-flex align-items-center gap-2">
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

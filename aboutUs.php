<?php
$page_title = "About Us - Taj Mahal Tour | Experience North India with Comfort & Confidence";
require_once 'includes/header.php';
?>

<main>
    <!-- About Page Hero Banner with Breadcrumbs -->
    <section id="about-page-banner" class="position-relative text-white text-center d-flex align-items-center justify-content-center py-5" style="background: linear-gradient(rgba(15, 23, 42, 0.68), rgba(15, 23, 42, 0.76)), url('assets/images/uttarPradesh/tajmahal.avif') center/cover no-repeat; min-height: 280px;">
        <div class="container position-relative z-2 py-4">
            <span class="badge bg-primary bg-opacity-25 text-white border border-light border-opacity-25 px-3 py-1.5 rounded-pill fw-semibold small text-uppercase mb-2 d-inline-flex align-items-center gap-1">
                <i class="bi bi-compass"></i>
                <span>WHO WE ARE</span>
            </span>
            <h1 class="display-4 fw-bold text-white mb-2">About Us</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0 small">
                    <li class="breadcrumb-item">
                        <a href="index.php" class="text-white-50 text-decoration-none hover-white">
                            <i class="bi bi-house-door me-1"></i> Home
                        </a>
                    </li>
                    <li class="breadcrumb-item active text-white" aria-current="page">About Us</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- 1. Core About Us Component (Card UI with Overlapping Photos & Counter Animation) -->
    <?php require_once 'components/about.php'; ?>

    <!-- 3. Where We Operate - Interactive Service Area Map -->
    <?php require_once 'components/serviceAreaMap.php'; ?>

    <!-- 2. Why Choose Us Component -->
    <?php require_once 'components/whyUs.php'; ?>

    <!-- 3. Driver Safety & Background Verified Standards -->
    <?php require_once 'components/safetyVarified.php'; ?>

    <!-- 4. Client Testimonials & Experiences -->
    <?php require_once 'components/testimonials.php'; ?>

    <!-- 5. Tour Memories Marquee Strip -->
    <?php require_once 'components/gallerySection.php'; ?>

    <!-- 6. Modern CTA Banner -->
    <?php require_once 'components/cta.php'; ?>
</main>

<?php require_once 'includes/footer.php'; ?>


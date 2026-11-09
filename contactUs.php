<?php
$page_title = "Contact Us - Taj Mahal Tour | Reach Our Agra & Delhi NCR Offices";
require_once 'includes/header.php';
?>

<main>
    <!-- Contact Page Hero Banner with Breadcrumbs -->
    <section id="contact-page-banner" class="position-relative text-white text-center d-flex align-items-center justify-content-center py-5" style="background: linear-gradient(rgba(15, 23, 42, 0.68), rgba(15, 23, 42, 0.76)), url('assets/images/uttarPradesh/tajmahal.avif') center/cover no-repeat; min-height: 280px;">
        <div class="container position-relative z-2 py-4">
            
            <h1 class="display-4 fw-bold text-white mb-2">Contact Us</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0 small">
                    <li class="breadcrumb-item">
                        <a href="index.php" class="text-white-50 text-decoration-none hover-white">
                            <i class="bi bi-house-door me-1"></i> Home
                        </a>
                    </li>
                    <li class="breadcrumb-item active text-white" aria-current="page">Contact Us</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- 1. Contact Information Cards (Agra, Delhi, WhatsApp & Email) -->
    <?php require_once 'components/contactInformation.php'; ?>

    <!-- 2. Interactive Message Form & Google Maps Location -->
    <?php require_once 'components/contactForm.php'; ?>

    

    <!-- 5. Modern Call To Action Banner -->
    <?php require_once 'components/cta.php'; ?>
</main>

<?php require_once 'includes/footer.php'; ?>


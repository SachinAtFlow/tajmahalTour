<?php
/**
 * Modern Call to Action (CTA) Component
 * Light Blue Theme with Professional Linear SVG Background
 */
?>

<!-- Call to Action Section -->
<section class="py-5 bg-white position-relative overflow-hidden" id="cta-section">
    <div class="container py-lg-3">
        
        <div class="cta-banner-card shadow-sm text-center position-relative">
            
            <!-- Professional Linear Architectural SVG Vector Background -->
            <svg class="cta-linear-svg" viewBox="0 0 1200 600" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                <g opacity="0.35">
                    <!-- Flowing Linear Wave Lines -->
                    <path d="M-100 120 C 200 20, 450 250, 750 140 C 1050 30, 1200 180, 1350 120" stroke="#3B71FE" stroke-width="1.2" stroke-dasharray="4 4" opacity="0.35"/>
                    <path d="M-100 200 C 220 80, 480 320, 800 210 C 1100 90, 1220 260, 1350 200" stroke="#3B71FE" stroke-width="1.5" opacity="0.3"/>
                    <path d="M-100 280 C 240 140, 510 390, 850 280 C 1150 160, 1240 330, 1350 280" stroke="#3B71FE" stroke-width="1.8" opacity="0.4"/>
                    <path d="M-100 360 C 260 200, 540 460, 900 350 C 1200 230, 1260 410, 1350 360" stroke="#3B71FE" stroke-width="1.5" opacity="0.4"/>
                    <path d="M-100 440 C 280 260, 570 530, 950 420 C 1250 300, 1280 480, 1350 440" stroke="#3B71FE" stroke-width="1.2" stroke-dasharray="5 5" opacity="0.3"/>
                    
                    <!-- Navigational Contour Circles -->
                    <circle cx="1060" cy="110" r="130" stroke="#3B71FE" stroke-width="1.2" opacity="0.25"/>
                    <circle cx="1060" cy="110" r="210" stroke="#3B71FE" stroke-width="1" stroke-dasharray="6 6" opacity="0.18"/>
                    <circle cx="120" cy="490" r="150" stroke="#3B71FE" stroke-width="1.2" opacity="0.25"/>
                    <circle cx="120" cy="490" r="230" stroke="#3B71FE" stroke-width="1" stroke-dasharray="6 6" opacity="0.15"/>
                </g>
            </svg>

            <!-- Soft Ambient Glows -->
            <div class="cta-banner-glow"></div>
            <div class="cta-banner-glow-2"></div>

            <div class="position-relative z-1">
                
                <!-- Pill Badge -->
                <span class="badge bg-white text-primary border border-primary border-opacity-25 px-3 py-2 rounded-pill fw-semibold mb-3 d-inline-flex align-items-center gap-1.5 shadow-xs">
                    <span>START YOUR UNFORGETTABLE JOURNEY</span>
                </span>

                <!-- Heading -->
                <h2 class="display-5 fw-bold text-dark mb-3">
                    Ready to Experience the Wonder of the Taj Mahal?
                </h2>

                <!-- Subtitle -->
                <p class="text-secondary mx-auto mb-4 fs-6" style="max-width: 660px; line-height: 1.6;">
                    Book your private guided sunrise tour or premium chauffeur service today. Enjoy VIP skip-the-line monument entries, certified local historians, and 100% transparent pricing.
                </p>

                <!-- Action CTA Buttons -->
                <div class="d-flex flex-wrap justify-content-center align-items-center gap-3 mb-4">
                    <a href="<?= function_exists('theme_url') ? theme_url('index.php#booking') : 'index.php#booking'; ?>" class="btn btn-primary rounded-pill px-4 py-3 fw-semibold shadow-sm d-inline-flex align-items-center gap-2">
                        <span>Book Your Tour Now</span>
                        <i class="bi bi-arrow-right"></i>
                    </a>
                    
                    <a 
                        href="https://wa.me/918800722606?text=Hello%20TajMahalTour,%20I%20want%20to%20plan%20my%20Agra%20trip." 
                        target="_blank" 
                        class="btn btn-light border border-primary border-opacity-25 text-dark rounded-pill px-4 py-3 fw-semibold shadow-sm d-inline-flex align-items-center gap-2"
                    >
                        <i class="bi bi-whatsapp text-success"></i>
                        <span>Talk to Travel Expert</span>
                    </a>
                </div>

                <!-- Trust Micro-Badges -->
                <div class="d-flex flex-wrap justify-content-center align-items-center gap-3 gap-md-4 text-secondary small pt-3 border-top border-primary border-opacity-15" style="max-width: 620px; margin: 0 auto;">
                    <div class="d-flex align-items-center gap-2">
                        <i class="bi bi-patch-check-fill text-primary"></i>
                        <span class="fw-medium text-dark">Free 24h Cancellation</span>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <i class="bi bi-patch-check-fill text-primary"></i>
                        <span class="fw-medium text-dark">Verified Chauffeurs</span>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <i class="bi bi-patch-check-fill text-primary"></i>
                        <span class="fw-medium text-dark">24/7 WhatsApp Support</span>  
                    </div>
                </div>

            </div>

        </div>

    </div>
</section>

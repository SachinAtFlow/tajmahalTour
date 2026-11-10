<?php
/**
 * Modern Call to Action (CTA) Component
 * Light Blue Theme with Professional Linear SVG Background
 */
?>

<!-- Call to Action Section -->
<section class="py-5 bg-white position-relative overflow-hidden" id="cta-section">
    <div class="container py-lg-3">
        
        <div class="cta-banner-card shadow-sm text-center position-relative overflow-hidden">
            
            <!-- Professional Linear Architectural SVG Vector Background -->
            <svg class="cta-linear-svg position-absolute w-100 h-100 z-0" viewBox="0 0 1200 600" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
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
            <div class="cta-banner-glow position-absolute rounded-circle z-0"></div>
            <div class="cta-banner-glow-2 position-absolute rounded-circle z-0"></div>

            <div class="position-relative z-1">
                
                <!-- Pill Badge (Centered on all viewports, especially mobile) -->
                <div class="d-flex justify-content-center mb-3">
                    <span class="badge bg-white text-primary border border-primary border-opacity-25 px-3 py-1.5 px-md-3 py-md-2 rounded-pill fw-semibold text-center d-inline-flex align-items-center justify-content-center gap-1.5 shadow-xs small">
                        <span>EXPLORE NORTH INDIA & BEYOND</span>
                    </span>
                </div>

                <!-- Heading (Diverse North India destinations) -->
                <h2 class="display-6 display-md-5 fw-bold text-dark mb-3">
                    Ready to Explore North India's Iconic Destinations?
                </h2>

                <!-- Subtitle (Covering North India regions: Delhi, Rajasthan, Agra, Himalayas, Gujarat & Nepal) -->
                <p class="text-secondary mx-auto mb-4 fs-6" style="max-width: 680px; line-height: 1.6;">
                    From Delhi NCR and the royal heritage of Rajasthan to the Taj Mahal, holy ghats of Varanasi, and scenic Himalayan retreats—book premium chauffeured cabs and customized tour packages with verified drivers and 24/7 on-road support.
                </p>

                <!-- Action CTA Buttons (Responsive sizing: compact on phone screens) -->
                <div class="d-flex flex-wrap justify-content-center align-items-center gap-2 gap-md-3 mb-4">
                    <a href="<?= function_exists('theme_url') ? theme_url('index.php#booking') : 'index.php#booking'; ?>" class="btn btn-primary rounded-pill px-3 py-2 px-md-4 py-md-3 small fs-md-6 fw-semibold shadow-sm d-inline-flex align-items-center gap-2">
                        <span>Book Your Journey</span>
                        <i class="bi bi-arrow-right"></i>
                    </a>
                    
                    <a 
                        href="https://wa.me/918800722606?text=Hello%20TajMahalTour,%20I%20want%20to%20plan%20my%20North%20India%20trip%20and%20cab%20service." 
                        target="_blank" 
                        class="btn btn-light border border-primary border-opacity-25 text-dark rounded-pill px-3 py-2 px-md-4 py-md-3 small fs-md-6 fw-semibold shadow-sm d-inline-flex align-items-center gap-2"
                    >
                        <i class="bi bi-whatsapp text-success"></i>
                        <span>Talk to Travel Expert</span>
                    </a>
                </div>

                <!-- Trust Micro-Badges -->
                <div class="d-flex flex-wrap justify-content-center align-items-center gap-3 gap-md-4 text-secondary small pt-3 border-top border-primary border-opacity-15" style="max-width: 620px; margin: 0 auto;">
                    <div class="d-flex align-items-center gap-2">
                        <i class="bi bi-patch-check-fill text-primary"></i>
                        <span class="fw-medium text-dark">Multi-City Coverage</span>
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

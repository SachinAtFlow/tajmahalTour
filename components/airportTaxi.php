<?php
/**
 * Airport Taxi Service Showcase Component
 * File: components/airportTaxi.php
 * 
 * Theme-synchronized modern airport pick & drop feature showcase
 * with on-time chauffeur highlights, 2x2 value proposition cards,
 * perfectly positioned decorative flight-path SVGs, and floating trust badges.
 */
?>

<section class="position-relative py-5 overflow-hidden" id="airport-taxi-service">
    <div class="container position-relative z-2 py-lg-4">
        <div class="row align-items-center g-5">
            
            <!-- Left Column: Content & Feature Grid -->
            <div class="col-lg-6">
                <div class="pe-xl-3">
                    
                    <!-- Pill Badge (Website Theme) -->
                    <div class="mb-3">
                        <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-2 rounded-pill fw-semibold small text-uppercase d-inline-flex align-items-center gap-2 border border-primary border-opacity-10">
                            <i class="bi bi-airplane-fill" style="transform: rotate(45deg); display: inline-block;"></i>
                            <span>Airport Taxi Service</span>
                        </span>
                    </div>

                    <!-- Main Headline -->
                    <h2 class="display-6 airport-taxi-title mb-3">
                        Stress-Free Airport Pick &amp; Drop 
                        With <span class="text-primary">On-Time</span> Chauffeurs
                    </h2>

                    <!-- Subtitle / Paragraph -->
                    <p class="text-secondary mb-4 fs-6" style="max-width: 540px; line-height: 1.65;">
                        Book our reliable airport taxi service for a smooth, comfortable and punctual journey. Enjoy professional chauffeurs and hassle-free travel across Delhi IGI, Jaipur, Agra, and all North India airports.
                    </p>

                    <!-- 2x2 Feature Cards Grid (Website Theme) -->
                    <div class="row g-3 mb-4">
                        
                        <!-- Feature 1: On-Time Guarantee -->
                        <div class="col-sm-6">
                            <div class="airport-feature-card h-100 d-flex align-items-center">
                                <div class="airport-icon-box rounded-circle d-flex align-items-center justify-content-center flex-shrink-0">
                                    <i class="bi bi-clock-history"></i>
                                </div>
                                <div>
                                    <h4 class="fs-6 fw-bold text-dark mb-0.5 lh-sm">On-Time Guarantee</h4>
                                    <p class="text-secondary small mb-0 lh-sm">Reach your destination on time.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Feature 2: Safe & Comfortable Rides -->
                        <div class="col-sm-6">
                            <div class="airport-feature-card h-100 d-flex align-items-center">
                                <div class="airport-icon-box rounded-circle d-flex align-items-center justify-content-center flex-shrink-0">
                                    <i class="bi bi-shield-check"></i>
                                </div>
                                <div>
                                    <h4 class="fs-6 fw-bold text-dark mb-0.5 lh-sm">Safe &amp; Comfortable</h4>
                                    <p class="text-secondary small mb-0 lh-sm">Travel with complete peace of mind.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Feature 3: Terminal Meet & Greet -->
                        <div class="col-sm-6">
                            <div class="airport-feature-card h-100 d-flex align-items-center">
                                <div class="airport-icon-box rounded-circle d-flex align-items-center justify-content-center flex-shrink-0">
                                    <i class="bi bi-car-front-fill"></i>
                                </div>
                                <div>
                                    <h4 class="fs-6 fw-bold text-dark mb-0.5 lh-sm">Terminal Meet &amp; Greet</h4>
                                    <p class="text-secondary small mb-0 lh-sm">Our chauffeur welcomes you.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Feature 4: Convenient & Verified -->
                        <div class="col-sm-6">
                            <div class="airport-feature-card h-100 d-flex align-items-center">
                                <div class="airport-icon-box rounded-circle d-flex align-items-center justify-content-center flex-shrink-0">
                                    <i class="bi bi-person-check-fill"></i>
                                </div>
                                <div>
                                    <h4 class="fs-6 fw-bold text-dark mb-0.5 lh-sm">Convenient &amp; Verified</h4>
                                    <p class="text-secondary small mb-0 lh-sm">Trusted and professional drivers.</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Call to Action Buttons -->
                    <div class="position-relative d-flex flex-wrap align-items-center gap-3 pt-1 pb-4">
                        <a href="<?= function_exists('theme_url') ? theme_url('airportservice/index.php') : 'airportservice/index.php'; ?>" class="btn btn-primary rounded-pill px-4 py-2.5 fw-semibold shadow-sm d-inline-flex align-items-center justify-content-center gap-2">
                            <span>Explore More</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>

                        <a href="<?= function_exists('site_whatsapp_link') ? site_whatsapp_link('Hi, I want to inquire about Airport Taxi Service') : 'https://wa.me/919810723370'; ?>" target="_blank" class="btn btn-success rounded-pill px-4 py-2.5 fw-semibold shadow-sm d-inline-flex align-items-center justify-content-center gap-2">
                            <i class="bi bi-whatsapp"></i>
                            <span>WhatsApp Booking</span>
                        </a>
                    </div>
                    

                </div>
            </div>

            <!-- Right Column: Visual Composition with Perfectly Anchored Flight SVG & Shapes -->
            <div class="col-lg-6">
                <div class="airport-visual-wrapper position-relative mx-auto">
                    
                    

                    <!-- Decorative Organic Backdrop Shapes (Theme Gradient) -->
                    <div class="airport-theme-blob d-none d-sm-block position-absolute rounded-circle z-1"></div>
                    <div class="airport-theme-backdrop d-none d-sm-block position-absolute z-1"></div>

                    <!-- Main Image Frame -->
                    <div class="airport-image-card position-relative z-2 overflow-hidden w-100 d-block">
                        <img 
                            src="<?= function_exists('theme_url') ? theme_url('assets/images/cars/airport-taxi-terminal.jpg') : 'assets/images/cars/airport-taxi-terminal.jpg'; ?>" 
                            alt="Airport Taxi Service with Professional Chauffeur and Modern Terminal" 
                            loading="lazy"
                        >
                    </div>

                    <!-- Floating Badge 1: 100% Trusted Service (Top Right) -->
                    <div class="airport-floating-trusted position-absolute z-3 d-flex align-items-center">
                        <div class="airport-trusted-icon d-flex align-items-center justify-content-center">
                            <i class="bi bi-check-lg"></i>
                        </div>
                        <div>
                            <div class="fw-bold fs-6 text-dark lh-1">100%</div>
                            <div class="text-secondary small lh-sm" style="font-size: 0.78rem;">Trusted Service</div>
                        </div>
                    </div>

                    <!-- Floating Badge 2: Thousands of Happy Travelers (Bottom Left) -->
                    <div class="airport-floating-reviews position-absolute z-3 d-flex align-items-center">
                        <div class="airport-reviews-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class="bi bi-people-fill"></i>
                        </div>
                        <div>
                            <div class="fw-semibold text-dark lh-sm" style="font-size: 0.88rem;">
                                Hundreds of <span class="d-block fw-bold text-dark">Happy Travelers</span>
                            </div>
                            <div class="d-flex align-items-center gap-1 mt-1 text-warning" style="font-size: 0.82rem;">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

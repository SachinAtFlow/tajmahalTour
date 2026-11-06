<?php
/**
 * How It Works Component (Book in 3 Easy Steps)
 * Modern & Minimalist UI built with Native Bootstrap 5 Utility Classes.
 */
$howItWorksSteps = [
    [
        'step'        => '01',
        'title'       => 'Choose Route & Car',
        'description' => 'Select your pickup city (Delhi NCR, Agra, Jaipur & beyond), trip type (Local 8h/80km, Airport Transfer, or Outstation), and preferred vehicle.',
        'icon'        => 'bi-signpost-split-fill',
        'highlight'   => 'Instant Fair Estimates'
    ],
    [
        'step'        => '02',
        'title'       => 'Instant Driver Allocation',
        'description' => 'Get immediate booking confirmation on WhatsApp & SMS with your verified chauffeur\'s contact details, cab registration, and real-time support.',
        'icon'        => 'bi-person-check-fill',
        'highlight'   => 'Verified & Police Checked'
    ],
    [
        'step'        => '03',
        'title'       => 'Doorstep Chauffeur Ride',
        'description' => 'Your sanitized AC cab arrives right at your doorstep on time. Relax, travel comfortably across North India, and pay transparently upon trip completion.',
        'icon'        => 'bi-shield-fill-check',
        'highlight'   => '₹0 Advance Deposit'
    ]
];
?>

<!-- How It Works Section Start -->
<section class="py-5 bg-light bg-opacity-50 position-relative border-top border-bottom border-light-subtle" id="how-it-works">
    <div class="container py-lg-4">
        
        <!-- Section Header -->
        <div class="text-center mb-4 mb-lg-5">
            <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-1.5 rounded-pill fw-semibold small text-uppercase mb-2 d-inline-flex align-items-center gap-1">
                <i class="bi bi-lightning-charge-fill"></i>
                <span>Simple &amp; Fast Booking</span>
            </span>
            <h2 class="display-6 fw-bold text-dark mb-2">
                How It Works &ndash; Book in 3 Easy Steps
            </h2>
            <p class="text-secondary mx-auto mb-0" style="max-width: 660px;">
                Booking a verified chauffeur-driven cab or tour package across Delhi NCR, Agra, Rajasthan &amp; North India is 100% paperless, transparent, and requires ₹0 advance security deposit.
            </p>
        </div>

        <!-- Steps Grid (3 Modern Cards) -->
        <div class="row g-4 justify-content-center">
            <?php foreach ($howItWorksSteps as $item): ?>
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 border border-light-subtle rounded-4 p-4 p-xl-5 shadow-xs hover-lift position-relative bg-white">
                        
                        <!-- Step Number Badge -->
                        <div class="position-absolute top-0 end-0 translate-middle-y me-4">
                            <span class="badge rounded-pill bg-primary text-white fw-bold px-3 py-2 shadow-sm fs-6">
                                <?= htmlspecialchars($item['step']); ?>
                            </span>
                        </div>

                        <!-- Icon Container -->
                        <div class="rounded-4 bg-primary bg-opacity-10 text-primary d-inline-flex align-items-center justify-content-center mb-4" style="width: 58px; height: 58px;">
                            <i class="bi <?= htmlspecialchars($item['icon']); ?> fs-3"></i>
                        </div>

                        <!-- Step Title -->
                        <h3 class="fw-bold text-dark fs-5 mb-2">
                            <?= htmlspecialchars($item['title']); ?>
                        </h3>

                        <!-- Step Description -->
                        <p class="text-secondary small mb-4 lh-base flex-grow-1">
                            <?= htmlspecialchars($item['description']); ?>
                        </p>

                        <!-- Feature Highlight Pill -->
                        <div class="pt-3 border-top border-light-subtle d-flex align-items-center gap-2 text-primary small fw-semibold">
                            <i class="bi bi-check-circle-fill"></i>
                            <span><?= htmlspecialchars($item['highlight']); ?></span>
                        </div>

                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Bottom Reassurance Banner -->
        <div class="text-center mt-5 pt-2">
            <div class="d-inline-flex flex-wrap align-items-center justify-content-center gap-3 bg-white px-4 py-2.5 rounded-pill border border-light-subtle shadow-xs">
                <span class="text-dark small fw-semibold d-inline-flex align-items-center gap-1.5">
                    <i class="bi bi-patch-check-fill text-primary"></i> 24x7 On-Call Support
                </span>
                <span class="text-secondary opacity-50 d-none d-sm-inline">&bull;</span>
                <span class="text-dark small fw-semibold d-inline-flex align-items-center gap-1.5">
                    <i class="bi bi-credit-card-2-front-fill text-success"></i> Multiple Payment Modes
                </span>
                <span class="text-secondary opacity-50 d-none d-sm-inline">&bull;</span>
                <a href="#booking" class="text-primary small fw-bold text-decoration-none d-inline-flex align-items-center gap-1">
                    <span>Reserve a Cab Now</span>
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>

    </div>
</section>
<!-- How It Works Section End -->


<?php
/**
 * Why Choose Us Component
 * Converted to pure Bootstrap 5 with clean modern structure matching project theme.
 */

$whyUsFeatures = [
    [
        'icon' => 'bi-wallet2',
        'title' => 'Flexible Payment',
        'desc' => 'Dedicated to offering exceptional value for your travel with convenient multi-tier payment choices.'
    ],
    [
        'icon' => 'bi-arrow-repeat',
        'title' => 'No Change Fees',
        'desc' => 'Your journey with us is about relaxation and discovery — reschedule your dates without hidden change penalties.'
    ],
    [
        'icon' => 'bi-piggy-bank',
        'title' => 'Flex Deposit',
        'desc' => 'Lock in your dream destination with a minimal advance deposit and pay the balance comfortably upon arrival.'
    ],
    [
        'icon' => 'bi-shield-check',
        'title' => 'Pay Securely',
        'desc' => 'Book with complete peace of mind through certified 256-bit SSL encrypted payment gateways and card security.'
    ]
];
?>

<!-- Why Choose Us Section (Clean & Modern Bootstrap 5 Structure) -->
<section class="py-5 bg-white position-relative" id="why-choose-us">
    <div class="container py-4">
        
        <!-- Section Header -->
        <div class="text-center mb-5">
            <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-2 rounded-pill fw-semibold mb-2">
                <i class="bi bi-patch-check-fill me-1"></i> WE ARE BEST
            </span>
            <h2 class="display-6 fw-bold text-dark mb-2">
                Why Choose India Tour Hire
            </h2>
            <p class="text-secondary mx-auto mb-0" style="max-width: 620px;">
                Dedicated to providing exceptional value, total peace of mind, and flexible booking solutions for your travel adventures.
            </p>
        </div>

        <!-- 4-Column Feature Cards Grid -->
        <div class="row g-4">
            <?php foreach ($whyUsFeatures as $feature): ?>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="why-feature-card h-100 p-4 text-center d-flex flex-column align-items-center justify-content-start shadow-sm">
                        
                        <!-- Feature Icon Box -->
                        <div class="why-feature-icon d-flex align-items-center justify-content-center mb-4">
                            <i class="bi <?php echo htmlspecialchars($feature['icon']); ?> fs-2"></i>
                        </div>

                        <!-- Feature Title -->
                        <h5 class="fw-bold text-dark mb-2">
                            <?php echo htmlspecialchars($feature['title']); ?>
                        </h5>

                        <!-- Feature Description -->
                        <p class="text-secondary small mb-0 lh-base">
                            <?php echo htmlspecialchars($feature['desc']); ?>
                        </p>

                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>

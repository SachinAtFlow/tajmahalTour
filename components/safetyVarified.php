<?php
$safetyFeatures = [
    [
        "title" => "Police Verification",
        "description" => "Mandatory background clearance and commercial driving license verification for all drivers.",
        "icon" => "bi-shield-check"
    ],
    [
        "title" => "5+ Years Experience",
        "description" => "Experienced chauffeurs with expertise in Yamuna Expressway, NH-48 and North India routes.",
        "icon" => "bi-signpost-2"
    ],
    [
        "title" => "Hygienic AC Fleet",
        "description" => "Well-maintained cabs under 3 years old, sanitized and detailed before every trip.",
        "icon" => "bi-car-front"
    ],
    [
        "title" => "24/7 GPS Support",
        "description" => "Live GPS trip tracking and dedicated round-the-clock journey assistance.",
        "icon" => "bi-headset"
    ]
];
?>

<!-- Driver Safety & Standards Section -->
<section class="py-5 bg-white" id="safety-standards">
    <div class="container py-4">
        <div class="row g-4 g-xl-5 align-items-stretch">

            <!-- Left Content: Heading & 4 Feature Cards -->
            <div class="col-lg-7 d-flex flex-column justify-content-between">
                <div>
                    <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-2 rounded-pill fw-semibold small text-uppercase mb-3">
                        <i class="bi bi-shield-lock-fill me-1"></i> Safety First
                    </span>

                    <h2 class="display-6 fw-bold text-dark mb-3">
                        Police-Verified <span class="text-primary">Driver Safety</span> & Standards
                    </h2>

                    <p class="text-secondary mb-4 leading-relaxed">
                        At Taj Mahal Tour, your safety and comfort are our highest priorities. Whether for late-night IGI Airport pickups or multi-day heritage outstation tours, our chauffeurs undergo rigorous background checks and government clearance.
                    </p>
                </div>

                <!-- 2x2 Feature Cards Grid -->
                <div class="row g-3 g-md-4">
                    <?php foreach ($safetyFeatures as $item): ?>
                        <div class="col-sm-6">
                            <div class="card h-100 border border-light-subtle rounded-4 p-4 shadow-sm safety-card bg-white">
                                <div class="safety-icon-box rounded-3 bg-primary bg-opacity-10 text-primary d-inline-flex align-items-center justify-content-center mb-3">
                                    <i class="bi <?php echo htmlspecialchars($item['icon']); ?> fs-4"></i>
                                </div>
                                <h5 class="fw-bold text-dark mb-2">
                                    <?php echo htmlspecialchars($item['title']); ?>
                                </h5>
                                <p class="text-secondary small mb-0 lh-base">
                                    <?php echo htmlspecialchars($item['description']); ?>
                                </p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Right Content: Image Banner Card -->
            <div class="col-lg-5">
                <div class="card border-0 rounded-4 overflow-hidden h-100 position-relative text-white shadow-sm safety-banner-card" style="min-height: 480px;">
                    <img
                        src="assets/images/others/driving.avif"
                        alt="Safe and verified cab journey"
                        class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover banner-img"
                        loading="lazy"
                    >
                    <div class="position-absolute top-0 start-0 w-100 h-100 banner-overlay d-flex flex-column justify-content-end p-4 p-md-5">
                        <div class="position-relative z-2">
                            <span class="badge bg-warning text-dark px-3 py-2 rounded-pill fw-semibold small mb-3 shadow-sm">
                                <i class="bi bi-patch-check-fill text-dark me-1"></i> 100% Peace of Mind
                            </span>

                            <h3 class="fw-bold text-white mb-3">
                                Your Safe & Comfortable Journey Awaits!
                            </h3>

                            <p class="text-white-50 small mb-4 lh-base">
                                Book a hassle-free cab with experienced, police-verified chauffeurs for local Agra sightseeing, airport transfers, and outstation tours.
                            </p>

                            <a href="#booking" class="btn btn-primary rounded-pill px-4 py-2 fw-semibold d-inline-flex align-items-center gap-2 shadow">
                                Book Verified Ride <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

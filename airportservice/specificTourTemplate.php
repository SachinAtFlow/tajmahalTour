<?php
/**
 * Airport Service Dynamic Specific Page Template
 * File: airportservice/specificTourTemplate.php
 * 
 * Dynamically renders dedicated airport transfer details for:
 * - Indira Gandhi International Airport (IGI Delhi)
 * - Noida International Airport (Jewar)
 */

require_once __DIR__ . '/data.php';

$requestedAirport = $_GET['airport'] ?? $_GET['service'] ?? $_GET['tour'] ?? 'igi-delhi-airport';
if (!isset($airportServices[$requestedAirport])) {
    $requestedAirport = 'igi-delhi-airport';
}

$currentAirport = $airportServices[$requestedAirport];
$page_title = $currentAirport['title'] . " - Rates, Terminals & Booking | Taj Mahal Tour";

// Other airport for cross-linking
$otherAirportSlug = ($requestedAirport === 'igi-delhi-airport') ? 'noida-jewar-airport' : 'igi-delhi-airport';
$otherAirport = $airportServices[$otherAirportSlug] ?? null;

require_once __DIR__ . '/../includes/header.php';
?>

<!-- Airport Detail Hero Banner -->
<section class="bg-white py-4 py-lg-5 border-bottom position-relative" id="airport-detail-hero">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-lg-8">
                
                <div class="d-flex flex-wrap align-items-center gap-2 mb-2">
                    <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-1.5 rounded-pill fw-semibold small text-uppercase">
                        <i class="bi bi-airplane-fill me-1" style="transform: rotate(45deg);"></i> <?= htmlspecialchars($currentAirport['code']); ?> &bull; <?= htmlspecialchars($currentAirport['tag']); ?>
                    </span>
                    <span class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25 px-2.5 py-1 rounded-pill small fw-medium">
                        <i class="bi bi-patch-check-fill me-1"></i> Verified Terminal Chauffeurs
                    </span>
                </div>

                <h1 class="display-6 fw-bold text-dark mb-2">
                    <?= htmlspecialchars($currentAirport['title']); ?>
                </h1>

                <p class="text-secondary fs-6 mb-3" style="max-width: 680px; line-height: 1.6;">
                    <?= htmlspecialchars($currentAirport['subtitle']); ?>
                </p>

                <!-- Spec Badges Row -->
                <div class="d-flex flex-wrap align-items-center gap-3 text-secondary small">
                    <div class="d-flex align-items-center gap-1.5">
                        <i class="bi bi-clock-history text-primary fs-5"></i>
                        <span><strong>24x7</strong> Availability</span>
                    </div>
                    <div class="vr opacity-25 d-none d-sm-block"></div>
                    <div class="d-flex align-items-center gap-1.5">
                        <i class="bi bi-tag-fill text-primary fs-5"></i>
                        <span>Fares from <strong class="text-dark fs-6"><?= htmlspecialchars($currentAirport['price_start']); ?></strong></span>
                    </div>
                    <div class="vr opacity-25 d-none d-sm-block"></div>
                    <div class="d-flex align-items-center gap-1.5">
                        <i class="bi bi-shield-check text-success fs-5"></i>
                        <span>Zero Surge &bull; Free Flight Delay Buffer</span>
                    </div>
                </div>

            </div>

            <!-- Fast Contact CTA Buttons -->
            <div class="col-lg-4 text-lg-end">
                <div class="d-flex flex-column flex-sm-row flex-lg-column gap-2 justify-content-lg-end">
                    <a href="<?= function_exists('site_whatsapp_link') ? site_whatsapp_link('Hi, I want to book taxi for ' . ($currentAirport['title'] ?? 'Airport')) : 'https://wa.me/918800722606'; ?>" target="_blank" class="btn btn-success rounded-pill px-4 py-2.5 fw-semibold d-inline-flex align-items-center justify-content-center gap-2 shadow-sm">
                        <i class="bi bi-whatsapp fs-5"></i>
                        <span>WhatsApp Quick Booking</span>
                    </a>
                    <a href="<?= function_exists('site_phone') ? site_phone(false) : 'tel:+918800722606'; ?>" class="btn btn-outline-primary rounded-pill px-4 py-2.5 fw-semibold d-inline-flex align-items-center justify-content-center gap-2">
                        <i class="bi bi-telephone-fill"></i>
                        <span>Call Airport Desk</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Main Airport Details Layout -->
<section class="py-5 bg-light" id="airport-main-content">
    <div class="container">
        <div class="row g-4 g-xl-5">
            
            <!-- Left Main Column (8 Cols) -->
            <div class="col-lg-8">
                
                <!-- Main Visual Image -->
                <div class="card border-0 rounded-4 overflow-hidden shadow-sm mb-4">
                    <img 
                        src="<?= theme_url($currentAirport['image']); ?>" 
                        class="w-100 object-fit-cover" 
                        style="height: 380px;" 
                        alt="<?= htmlspecialchars($currentAirport['title']); ?>"
                        loading="lazy"
                    >
                </div>

                <!-- Overview & Service Standards -->
                <div class="card border-0 rounded-4 shadow-sm p-4 mb-4 bg-white">
                    <h3 class="fs-5 fw-bold text-dark mb-3 d-flex align-items-center gap-2">
                        <i class="bi bi-info-circle-fill text-primary"></i> Service Overview
                    </h3>
                    <p class="text-secondary mb-4" style="line-height: 1.7;">
                        <?= htmlspecialchars($currentAirport['overview']); ?>
                    </p>

                    <!-- Highlights Checkbox Grid -->
                    <h4 class="fs-6 fw-bold text-dark mb-3">Key Service Guarantees</h4>
                    <div class="row g-3">
                        <?php foreach ($currentAirport['highlights'] as $highlight): ?>
                            <div class="col-md-6">
                                <div class="d-flex align-items-start gap-2">
                                    <i class="bi bi-check-circle-fill text-success flex-shrink-0 mt-1"></i>
                                    <span class="text-dark small fw-medium"><?= htmlspecialchars($highlight); ?></span>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- Terminal-Wise Meet & Greet Guide -->
                <div class="card border-0 rounded-4 shadow-sm p-3 p-md-4 mb-4 bg-white">
                    <h3 class="fs-5 fw-bold text-dark mb-3 d-flex align-items-center gap-2">
                        <i class="bi bi-signpost-split-fill text-primary"></i> Terminal Meet &amp; Greet Points
                    </h3>
                    <div class="row g-3">
                        <?php foreach ($currentAirport['terminals'] as $terminal): ?>
                            <div class="col-12">
                                <div class="p-3 rounded-3 bg-light border border-light-subtle d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-2">
                                    <div class="flex-grow-1 pe-md-2">
                                        <div class="fw-bold text-dark fs-6 mb-0.5 d-flex align-items-center gap-1.5">
                                            <i class="bi bi-airplane text-primary"></i> 
                                            <span><?= htmlspecialchars($terminal['name']); ?></span>
                                        </div>
                                        <div class="text-secondary small">
                                            <?= htmlspecialchars($terminal['type']); ?>
                                        </div>
                                    </div>
                                    <div class="pt-1 pt-md-0 flex-shrink-0">
                                        <div class="bg-white text-primary border border-primary border-opacity-25 px-2.5 py-1.5 rounded-3 rounded-md-pill small fw-semibold d-inline-flex align-items-start align-items-md-center gap-1.5 text-start shadow-2xs" style="max-width: 100%; line-height: 1.4;">
                                            <i class="bi bi-geo-alt-fill text-danger flex-shrink-0 mt-0.5 mt-md-0"></i> 
                                            <span class="text-wrap"><?= htmlspecialchars($terminal['pickup']); ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>



                <!-- Cross-Link to Other Airport -->
                <?php if ($otherAirport): ?>
                    <div class="card border-0 rounded-4 shadow-sm p-3 p-md-4 mb-4 bg-white border-start border-primary border-4">
                        <div class="d-flex flex-column flex-sm-row justify-content-between align-items-sm-center gap-3">
                            <div>
                                <span class="badge bg-primary bg-opacity-10 text-primary px-2.5 py-1 rounded-pill small fw-semibold mb-1">
                                    ALSO AVAILABLE
                                </span>
                                <h4 class="fs-5 fw-bold text-dark mb-1"><?= htmlspecialchars($otherAirport['title']); ?></h4>
                                <p class="text-secondary small mb-0"><?= htmlspecialchars($otherAirport['subtitle']); ?></p>
                            </div>
                            <a href="specificTourTemplate.php?airport=<?= urlencode($otherAirport['slug']); ?>" class="btn btn-outline-primary rounded-pill px-4 py-2 fw-semibold flex-shrink-0">
                                Switch  &rarr;
                            </a>
                        </div>
                    </div>
                <?php endif; ?>

            </div>

            <!-- Right Sidebar: Compact Sticky Reservation Form (4 Cols) -->
            <div class="col-lg-4">
                <div class="sticky-top" style="top: 90px; z-index: 10;">
                    
                    <div class="card border-0 rounded-4 shadow-sm p-3 p-md-3.5 bg-white">
                        <!-- Compact Header with Starting Fare & Badge -->
                        <div class="d-flex align-items-center justify-content-between pb-2 mb-2.5 border-bottom">
                            <div>
                                <span class="text-secondary small d-block" style="font-size: 11px;">Starting From</span>
                                <span class="fs-4 fw-bold text-primary lh-1"><?= htmlspecialchars($currentAirport['price_start']); ?></span>
                            </div>
                            <span class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25 px-2.5 py-1 rounded-pill small">
                                <i class="bi bi-lightning-charge-fill me-1"></i> Instant Quote
                            </span>
                        </div>

                        <h4 class="fs-6 fw-bold text-dark mb-2.5">Book <?= htmlspecialchars($currentAirport['code']); ?> Airport Cab</h4>

                        <!-- 2-Column Compact Form Grid -->
                        <form action="<?= theme_url('contact.php'); ?>" method="GET" class="row g-2">
                            <input type="hidden" name="airport_slug" value="<?= htmlspecialchars($currentAirport['slug']); ?>">
                            
                            <!-- Trip Type & Terminal -->
                            <div class="col-6">
                                <label class="form-label text-secondary mb-1" style="font-size: 11px;">Trip Type</label>
                                <select name="service_direction" class="form-select rounded-3 py-1.5 small text-dark">
                                    <option value="pickup" selected>Pickup</option>
                                    <option value="drop">Drop</option>
                                    <option value="roundtrip">Roundtrip</option>
                                </select>
                            </div>
                            <div class="col-6">
                                <label class="form-label text-secondary mb-1" style="font-size: 11px;">Terminal</label>
                                <select name="terminal" class="form-select rounded-3 py-1.5 small text-dark">
                                    <?php foreach ($currentAirport['terminals'] as $term): ?>
                                        <option value="<?= htmlspecialchars($term['name']); ?>"><?= htmlspecialchars($term['name']); ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <!-- Date & Time -->
                            <div class="col-6">
                                <label class="form-label text-secondary mb-1" style="font-size: 11px;">Travel Date</label>
                                <input type="date" name="travel_date" class="form-control rounded-3 py-1.5 small" value="<?= date('Y-m-d'); ?>">
                            </div>
                            <div class="col-6">
                                <label class="form-label text-secondary mb-1" style="font-size: 11px;">Time</label>
                                <input type="time" name="travel_time" class="form-control rounded-3 py-1.5 small" value="12:00">
                            </div>

                            <!-- Vehicle & Flight No -->
                            <div class="col-6">
                                <label class="form-label text-secondary mb-1" style="font-size: 11px;">Vehicle Type</label>
                                <select name="vehicle_type" class="form-select rounded-3 py-1.5 small text-dark">
                                    <?php foreach ($currentAirport['fleet_pricing'] as $fl): ?>
                                        <option value="<?= htmlspecialchars($fl['type']); ?>">
                                            <?= htmlspecialchars($fl['type']); ?> (<?= htmlspecialchars($fl['fare']); ?>)
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-6">
                                <label class="form-label text-secondary mb-1" style="font-size: 11px;">Flight No.</label>
                                <input type="text" name="flight_no" class="form-control rounded-3 py-1.5 small" placeholder="e.g. 6E-204">
                            </div>

                            <!-- Destination -->
                            <div class="col-12">
                                <label class="form-label text-secondary mb-1" style="font-size: 11px;">Drop / Pickup City or Hotel</label>
                                <input type="text" name="hotel_destination" class="form-control rounded-3 py-1.5 small" placeholder="e.g. Connaught Place, Agra, Noida">
                            </div>

                            <!-- Submit Button -->
                            <div class="col-12 mt-2">
                                <button type="submit" class="btn btn-primary rounded-pill w-100 py-2 fw-semibold shadow-sm">
                                    Confirm Airport Cab <i class="bi bi-arrow-right ms-1"></i>
                                </button>
                            </div>
                        </form>

                        <!-- Compact Support & Guarantees Footer -->
                        <div class="mt-2.5 pt-2.5 border-top d-flex align-items-center justify-content-between text-secondary" style="font-size: 11px;">
                            <span><i class="bi bi-shield-check text-success me-1"></i> Tolls Included</span>
                            <a href="<?= function_exists('site_whatsapp_link') ? site_whatsapp_link('Hi, I need urgent airport taxi') : 'https://wa.me/918800722606'; ?>" target="_blank" class="text-success fw-bold text-decoration-none d-inline-flex align-items-center gap-1">
                                <i class="bi bi-whatsapp"></i> Quick WhatsApp
                            </a>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

<!-- Local Sightseeing Car Rental Fleet -->
<?php require_once __DIR__ . '/../components/localCarType.php'; ?>

<!-- Outstation Car Rental Fleet -->
<?php require_once __DIR__ . '/../components/outstationCarType.php'; ?>

<!-- How it works section -->
<?php require_once __DIR__ . '/../components/howItWorks.php'; ?>


<!-- Reusable Section 1: Modern Airport Taxi Showcase (From Image Design) -->
<?php require_once __DIR__ . '/../components/airportTaxi.php'; ?>

<!-- Reusable Section 2: Driver Safety & Fleet Standards -->
<?php require_once __DIR__ . '/../components/safetyVarified.php'; ?>

<!-- Reusable Section 3: Client Testimonials -->
<?php require_once __DIR__ . '/../components/testimonials.php'; ?>

<!-- Reusable Section 4: Frequently Asked Questions -->
<?php require_once __DIR__ . '/../components/faq.php'; ?>

<!-- Reusable Section 5: Modern Call to Action Banner -->
<?php require_once __DIR__ . '/../components/cta.php'; ?>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>


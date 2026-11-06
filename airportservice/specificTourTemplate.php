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

<!-- Breadcrumb Bar -->
<div class="bg-light border-bottom py-3">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 small">
                <li class="breadcrumb-item"><a href="<?= theme_url('index.php'); ?>" class="text-decoration-none text-secondary">Home</a></li>
                <li class="breadcrumb-item"><a href="<?= theme_url('carRentalLocation.php'); ?>" class="text-decoration-none text-secondary">Car Rental</a></li>
                <li class="breadcrumb-item"><a href="index.php" class="text-decoration-none text-secondary">Airport Service</a></li>
                <li class="breadcrumb-item active text-primary fw-semibold" aria-current="page"><?= htmlspecialchars($currentAirport['short_title']); ?></li>
            </ol>
        </nav>
    </div>
</div>

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
                    <a href="https://wa.me/918800722606?text=Hi%2C%20I%20want%20to%20book%20taxi%20for%20<?= urlencode($currentAirport['title']); ?>" target="_blank" class="btn btn-success rounded-pill px-4 py-2.5 fw-semibold d-inline-flex align-items-center justify-content-center gap-2 shadow-sm">
                        <i class="bi bi-whatsapp fs-5"></i>
                        <span>WhatsApp Quick Booking</span>
                    </a>
                    <a href="tel:000999656888" class="btn btn-outline-primary rounded-pill px-4 py-2.5 fw-semibold d-inline-flex align-items-center justify-content-center gap-2">
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
                <div class="card border-0 rounded-4 shadow-sm p-4 mb-4 bg-white">
                    <h3 class="fs-5 fw-bold text-dark mb-3 d-flex align-items-center gap-2">
                        <i class="bi bi-signpost-split-fill text-primary"></i> Terminal Meet &amp; Greet Points
                    </h3>
                    <div class="row g-3">
                        <?php foreach ($currentAirport['terminals'] as $terminal): ?>
                            <div class="col-12">
                                <div class="p-3 rounded-3 bg-light border border-light-subtle d-flex flex-column flex-sm-row justify-content-between align-items-sm-center gap-2">
                                    <div>
                                        <div class="fw-bold text-dark fs-6 mb-0.5">
                                            <i class="bi bi-airplane text-primary me-1"></i> <?= htmlspecialchars($terminal['name']); ?>
                                        </div>
                                        <div class="text-secondary small">
                                            <?= htmlspecialchars($terminal['type']); ?>
                                        </div>
                                    </div>
                                    <div class="text-sm-end">
                                        <span class="badge bg-white text-primary border border-primary border-opacity-25 px-2.5 py-1.5 rounded-pill small fw-semibold">
                                            <i class="bi bi-geo-alt-fill text-danger me-1"></i> <?= htmlspecialchars($terminal['pickup']); ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- Fleet Rates for this Airport -->
                <div class="card border-0 rounded-4 shadow-sm p-4 mb-4 bg-white">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <h3 class="fs-5 fw-bold text-dark mb-0 d-flex align-items-center gap-2">
                            <i class="bi bi-car-front-fill text-primary"></i> Vehicle Options &amp; Flat Rates
                        </h3>
                        <span class="text-secondary small">Toll &amp; Parking Included</span>
                    </div>

                    <div class="row g-3">
                        <?php foreach ($currentAirport['fleet_pricing'] as $fleet): ?>
                            <div class="col-md-6">
                                <div class="card h-100 border rounded-4 p-3.5 <?= !empty($fleet['popular']) ? 'border-primary shadow-xs' : 'border-light-subtle'; ?> bg-white">
                                    <?php if (!empty($fleet['popular'])): ?>
                                        <span class="badge bg-primary text-white position-absolute top-0 end-0 m-3 px-2 py-1 rounded-pill small fw-semibold" style="font-size: 10px;">
                                            MOST POPULAR
                                        </span>
                                    <?php endif; ?>
                                    
                                    <h4 class="fs-6 fw-bold text-dark mb-1"><?= htmlspecialchars($fleet['type']); ?></h4>
                                    <div class="text-primary fw-bold fs-4 mb-2"><?= htmlspecialchars($fleet['fare']); ?></div>
                                    
                                    <div class="text-secondary small mb-3">
                                        <div class="mb-1"><i class="bi bi-people-fill text-primary me-1.5"></i> <?= htmlspecialchars($fleet['capacity']); ?></div>
                                        <div class="mb-1"><i class="bi bi-briefcase-fill text-primary me-1.5"></i> <?= htmlspecialchars($fleet['luggage']); ?></div>
                                        <div><i class="bi bi-stars text-warning me-1.5"></i> <?= htmlspecialchars($fleet['features']); ?></div>
                                    </div>

                                    <div class="mt-auto pt-2 border-top">
                                        <a href="https://wa.me/918800722606?text=Hi%2C%20I%20want%20to%20book%20<?= urlencode($fleet['type']); ?>%20for%20<?= urlencode($currentAirport['title']); ?>" target="_blank" class="btn btn-outline-primary btn-sm rounded-pill w-100 py-1.5 fw-semibold d-inline-flex align-items-center justify-content-center gap-1.5">
                                            <span>Reserve <?= htmlspecialchars($fleet['type']); ?></span>
                                            <i class="bi bi-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- Popular Transfer Corridors -->
                <div class="card border-0 rounded-4 shadow-sm p-4 mb-4 bg-white">
                    <h3 class="fs-5 fw-bold text-dark mb-3 d-flex align-items-center gap-2">
                        <i class="bi bi-compass-fill text-primary"></i> Popular Highway Transfer Corridors
                    </h3>
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead class="table-light small">
                                <tr>
                                    <th scope="col" class="py-2.5">Destination Route</th>
                                    <th scope="col" class="py-2.5">Distance &amp; Time</th>
                                    <th scope="col" class="py-2.5">Sedan Starting Fare</th>
                                    <th scope="col" class="py-2.5 text-end">Action</th>
                                </tr>
                            </thead>
                            <tbody class="small">
                                <?php foreach ($currentAirport['popular_transfers'] as $transfer): ?>
                                    <tr>
                                        <td class="py-3">
                                            <div class="fw-bold text-dark"><?= htmlspecialchars($transfer['route']); ?></div>
                                            <div class="text-secondary small" style="font-size: 11.5px;"><?= htmlspecialchars($transfer['desc']); ?></div>
                                        </td>
                                        <td class="py-3 text-secondary">
                                            <div><i class="bi bi-speedometer2 text-primary me-1"></i> <?= htmlspecialchars($transfer['distance']); ?></div>
                                            <div><i class="bi bi-hourglass-split text-primary me-1"></i> <?= htmlspecialchars($transfer['duration']); ?></div>
                                        </td>
                                        <td class="py-3">
                                            <span class="text-primary fw-bold fs-6"><?= htmlspecialchars($transfer['fare']); ?></span>
                                            <span class="text-secondary d-block" style="font-size: 10px;">all-inclusive</span>
                                        </td>
                                        <td class="py-3 text-end">
                                            <a href="https://wa.me/918800722606?text=Hi%2C%20I%20want%20to%20book%20<?= urlencode($transfer['route']); ?>" target="_blank" class="btn btn-sm btn-primary rounded-pill px-3 py-1 fw-semibold">
                                                Book
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Cross-Link to Other Airport -->
                <?php if ($otherAirport): ?>
                    <div class="card border-0 rounded-4 shadow-sm p-4 mb-4 bg-white border-start border-primary border-4">
                        <div class="d-flex flex-column flex-sm-row justify-content-between align-items-sm-center gap-3">
                            <div>
                                <span class="badge bg-primary bg-opacity-10 text-primary px-2.5 py-1 rounded-pill small fw-semibold mb-1">
                                    ALSO AVAILABLE
                                </span>
                                <h4 class="fs-5 fw-bold text-dark mb-1"><?= htmlspecialchars($otherAirport['title']); ?></h4>
                                <p class="text-secondary small mb-0"><?= htmlspecialchars($otherAirport['subtitle']); ?></p>
                            </div>
                            <a href="specificTourTemplate.php?airport=<?= urlencode($otherAirport['slug']); ?>" class="btn btn-outline-primary rounded-pill px-4 py-2 fw-semibold flex-shrink-0">
                                Switch to <?= htmlspecialchars($otherAirport['code']); ?> &rarr;
                            </a>
                        </div>
                    </div>
                <?php endif; ?>

            </div>

            <!-- Right Sidebar: Sticky Reservation Form (4 Cols) -->
            <div class="col-lg-4">
                <div class="sticky-top" style="top: 90px; z-index: 10;">
                    
                    <div class="card border-0 rounded-4 shadow-sm p-4 bg-white mb-4">
                        <div class="d-flex align-items-center justify-content-between pb-3 mb-3 border-bottom">
                            <div>
                                <span class="text-secondary small d-block">Instant Quote</span>
                                <span class="fs-3 fw-bold text-primary"><?= htmlspecialchars($currentAirport['price_start']); ?></span>
                                <span class="text-secondary small">/ starting</span>
                            </div>
                            <span class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25 px-2.5 py-1.5 rounded-pill small">
                                <i class="bi bi-lightning-charge-fill me-1"></i> Instant Confirmation
                            </span>
                        </div>

                        <h4 class="fs-6 fw-bold text-dark mb-3">Book Your <?= htmlspecialchars($currentAirport['code']); ?> Airport Cab</h4>

                        <form action="<?= theme_url('contact.php'); ?>" method="GET" class="d-flex flex-column gap-3">
                            <input type="hidden" name="airport_slug" value="<?= htmlspecialchars($currentAirport['slug']); ?>">
                            
                            <div>
                                <label class="form-label small fw-semibold text-secondary mb-1">Service Type</label>
                                <select name="service_direction" class="form-select rounded-3 py-2 small text-dark">
                                    <option value="pickup" selected>Terminal Pickup (Flight Arrival)</option>
                                    <option value="drop">Airport Drop (Flight Departure)</option>
                                    <option value="roundtrip">Airport Roundtrip Transfer</option>
                                </select>
                            </div>

                            <div>
                                <label class="form-label small fw-semibold text-secondary mb-1">Select Terminal</label>
                                <select name="terminal" class="form-select rounded-3 py-2 small text-dark">
                                    <?php foreach ($currentAirport['terminals'] as $term): ?>
                                        <option value="<?= htmlspecialchars($term['name']); ?>"><?= htmlspecialchars($term['name']); ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div>
                                <label class="form-label small fw-semibold text-secondary mb-1">Travel Date &amp; Time</label>
                                <div class="row g-2">
                                    <div class="col-7">
                                        <input type="date" name="travel_date" class="form-control rounded-3 py-2 small" value="<?= date('Y-m-d'); ?>">
                                    </div>
                                    <div class="col-5">
                                        <input type="time" name="travel_time" class="form-control rounded-3 py-2 small" value="12:00">
                                    </div>
                                </div>
                            </div>

                            <div>
                                <label class="form-label small fw-semibold text-secondary mb-1">Flight Number (For Live Tracking)</label>
                                <input type="text" name="flight_no" class="form-control rounded-3 py-2 small" placeholder="e.g. AI-102, 6E-204">
                            </div>

                            <div>
                                <label class="form-label small fw-semibold text-secondary mb-1">Preferred Vehicle</label>
                                <select name="vehicle_type" class="form-select rounded-3 py-2 small text-dark">
                                    <?php foreach ($currentAirport['fleet_pricing'] as $fl): ?>
                                        <option value="<?= htmlspecialchars($fl['type']); ?>">
                                            <?= htmlspecialchars($fl['type']); ?> (<?= htmlspecialchars($fl['fare']); ?>)
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div>
                                <label class="form-label small fw-semibold text-secondary mb-1">Drop / Pickup Hotel or City</label>
                                <input type="text" name="hotel_destination" class="form-control rounded-3 py-2 small" placeholder="e.g. Taj Mahal Hotel Agra, Noida Sec 18">
                            </div>

                            <button type="submit" class="btn btn-primary rounded-pill w-100 py-2.5 fw-semibold shadow-sm mt-1">
                                Confirm Airport Cab <i class="bi bi-arrow-right ms-1"></i>
                            </button>
                        </form>

                        <div class="mt-3 pt-3 border-top text-center text-secondary small" style="font-size: 11.5px;">
                            <i class="bi bi-shield-check text-success me-1"></i> Verified Drivers &bull; Free Waiting Time &bull; No Hidden Tolls
                        </div>
                    </div>

                    <!-- Direct Helpline Card -->
                    <div class="card border-0 rounded-4 shadow-sm p-3.5 bg-dark text-white text-center">
                        <div class="d-flex align-items-center justify-content-center gap-2 mb-2">
                            <i class="bi bi-headset fs-4 text-warning"></i>
                            <span class="fw-bold">Airport Chauffeur Dispatch</span>
                        </div>
                        <p class="text-white-50 small mb-2">Need a last-minute flight pickup in the next 60 minutes?</p>
                        <a href="tel:000999656888" class="text-warning fw-bold text-decoration-none fs-5 d-block mb-2">
                            (000) 999 -656 -888
                        </a>
                        <a href="https://wa.me/918800722606?text=Hi%2C%20I%20need%20urgent%20airport%20taxi" target="_blank" class="btn btn-outline-light btn-sm rounded-pill py-1.5 px-3 small">
                            <i class="bi bi-whatsapp text-success me-1"></i> Urgent WhatsApp Dispatch
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

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


<?php
/**
 * Airport Service Master Page
 * File: airportservice/index.php
 * 
 * Central hub for Delhi IGI & Noida Jewar Airport Taxi & Chauffeur Services.
 */

$page_title = "Airport Taxi Service - Delhi IGI (DEL) & Noida Jewar (DXN) Airport Transfers | Taj Mahal Tour";
require_once __DIR__ . '/data.php';
require_once __DIR__ . '/../includes/header.php';
?>

<!-- Breadcrumb Bar -->
<div class="bg-light border-bottom py-3">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 small">
                <li class="breadcrumb-item"><a href="<?= theme_url('index.php'); ?>" class="text-decoration-none text-secondary">Home</a></li>
                <li class="breadcrumb-item"><a href="<?= theme_url('carRentalLocation.php'); ?>" class="text-decoration-none text-secondary">Car Rental</a></li>
                <li class="breadcrumb-item active text-primary fw-semibold" aria-current="page">Airport Service</li>
            </ol>
        </nav>
    </div>
</div>

<!-- Airport Service Hero Banner -->
<section class="position-relative py-5 bg-dark text-white overflow-hidden" id="airport-hero-banner" style="background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);">
    <div class="position-absolute top-0 end-0 bottom-0 start-0 opacity-20" style="background-image: radial-gradient(#3B71FE 1px, transparent 1px); background-size: 24px 24px;"></div>
    
    <div class="container position-relative z-2 py-lg-4">
        <div class="row align-items-center g-5">
            <div class="col-lg-7">
                <span class="badge bg-primary bg-opacity-25 text-white border border-primary border-opacity-50 px-3 py-2 rounded-pill fw-semibold small text-uppercase mb-3 d-inline-flex align-items-center gap-2">
                    <i class="bi bi-airplane-fill" style="transform: rotate(45deg);"></i>
                    <span>24x7 PREMIER AIRPORT CHAUFFEUR TRANSFERS</span>
                </span>
                
                <h1 class="display-5 fw-bold text-white mb-3">
                    Stress-Free Airport Pick &amp; Drop <br class="d-none d-md-block">
                    In <span class="text-primary">Delhi NCR, Noida &amp; Agra</span>
                </h1>
                
                <p class="text-light text-opacity-75 fs-5 mb-4" style="max-width: 600px; line-height: 1.6;">
                    Pre-book guaranteed on-time airport taxis with flight-tracking chauffeurs for Indira Gandhi International Airport (IGI) and Noida International Airport (Jewar). Fixed upfront rates, terminal meet &amp; greet, and sanitized modern fleet.
                </p>

                <div class="d-flex flex-wrap align-items-center gap-3">
                    <a href="#airport-hubs" class="btn btn-primary rounded-pill px-4 py-2.5 fw-semibold d-inline-flex align-items-center gap-2 shadow-sm">
                        <span>Select Your Airport</span>
                        <i class="bi bi-arrow-down"></i>
                    </a>
                    <a href="https://wa.me/918800722606?text=Hi%2C%20I%20want%20to%20book%20an%20Airport%20Taxi" target="_blank" class="btn btn-outline-light rounded-pill px-4 py-2.5 fw-semibold d-inline-flex align-items-center gap-2">
                        <i class="bi bi-whatsapp text-success"></i>
                        <span>Instant WhatsApp Booking</span>
                    </a>
                </div>

                <!-- Trust Stats -->
                <div class="row g-4 pt-4 mt-2 border-top border-secondary border-opacity-25">
                    <div class="col-auto">
                        <div class="fw-bold fs-4 text-white">100%</div>
                        <div class="text-secondary small">On-Time Arrival</div>
                    </div>
                    <div class="col-auto border-start border-secondary border-opacity-25 ps-4">
                        <div class="fw-bold fs-4 text-warning">4.9/5 <i class="bi bi-star-fill small"></i></div>
                        <div class="text-secondary small">5,000+ Traveler Reviews</div>
                    </div>
                    <div class="col-auto border-start border-secondary border-opacity-25 ps-4">
                        <div class="fw-bold fs-4 text-white">60 Min</div>
                        <div class="text-secondary small">Free Flight Buffer</div>
                    </div>
                </div>
            </div>

            <!-- Quick Booking Card -->
            <div class="col-lg-5">
                <div class="card border-0 rounded-4 shadow-lg p-4 p-md-4 bg-white text-dark">
                    <h3 class="fs-5 fw-bold text-dark mb-1 d-flex align-items-center gap-2">
                        <i class="bi bi-taxi-front-fill text-primary"></i> Fast Airport Cab Booking
                    </h3>
                    <p class="text-secondary small mb-3">Get instant confirmation with zero advance fee.</p>

                    <form action="<?= theme_url('contact.php'); ?>" method="GET" class="row g-3">
                        <input type="hidden" name="service_type" value="airport_transfer">
                        
                        <div class="col-12">
                            <label class="form-label small fw-semibold text-secondary mb-1">Select Airport</label>
                            <select name="airport_select" class="form-select rounded-3 py-2 text-dark fw-medium">
                                <option value="igi-delhi-airport" selected>Indira Gandhi International Airport (DEL) - T1, T2, T3</option>
                                <option value="noida-jewar-airport">Noida International Airport (DXN) - Jewar</option>
                            </select>
                        </div>

                        <div class="col-12">
                            <label class="form-label small fw-semibold text-secondary mb-1">Trip Type</label>
                            <div class="d-flex gap-2">
                                <div class="form-check form-check-inline m-0 flex-fill">
                                    <input class="btn-check" type="radio" name="transfer_direction" id="pickup_opt" value="pickup" checked>
                                    <label class="btn btn-outline-primary btn-sm rounded-pill w-100 py-1.5" for="pickup_opt">
                                        <i class="bi bi-box-arrow-in-down me-1"></i> Airport Pickup
                                    </label>
                                </div>
                                <div class="form-check form-check-inline m-0 flex-fill">
                                    <input class="btn-check" type="radio" name="transfer_direction" id="drop_opt" value="drop">
                                    <label class="btn btn-outline-primary btn-sm rounded-pill w-100 py-1.5" for="drop_opt">
                                        <i class="bi bi-box-arrow-up-right me-1"></i> Airport Drop
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label small fw-semibold text-secondary mb-1">Pickup / Drop Date</label>
                            <input type="date" name="travel_date" class="form-control rounded-3 py-2 text-secondary" value="<?= date('Y-m-d'); ?>">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label small fw-semibold text-secondary mb-1">Pickup / Drop Time</label>
                            <input type="time" name="travel_time" class="form-control rounded-3 py-2 text-secondary" value="10:00">
                        </div>

                        <div class="col-12">
                            <label class="form-label small fw-semibold text-secondary mb-1">Destination Address / Hotel</label>
                            <input type="text" name="destination" class="form-control rounded-3 py-2" placeholder="e.g. Taj Mahal Agra, Aerocity, Noida Sec 62">
                        </div>

                        <div class="col-12 pt-1">
                            <button type="submit" class="btn btn-primary rounded-pill w-100 py-2.5 fw-semibold shadow-sm">
                                Check Available Taxis <i class="bi bi-arrow-right ms-1"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Dedicated Airport Hub Selection Cards Grid -->
<section class="py-5 bg-light position-relative" id="airport-hubs">
    <div class="container py-lg-3">
        <div class="text-center mb-5">
            <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-2 rounded-pill fw-semibold mb-2">
                <i class="bi bi-geo-alt-fill me-1"></i> CHOOSE YOUR DESTINATION AIRPORT
            </span>
            <h2 class="display-6 fw-bold text-dark mb-2">
                Select Your International Airport Hub
            </h2>
            <p class="text-secondary mx-auto mb-0" style="max-width: 650px;">
                Explore terminal details, vehicle options, live flight tracking, and pre-calculated fares for our primary airport gateways.
            </p>
        </div>

        <div class="row g-4 justify-content-center">
            <?php foreach ($airportServices as $airport): ?>
                <?php 
                    $detailUrl = 'specificTourTemplate.php?airport=' . urlencode($airport['slug']);
                ?>
                <div class="col-md-6 col-lg-6">
                    <div class="card h-100 border-0 rounded-4 overflow-hidden shadow-sm hover-lift bg-white transition-all">
                        <div class="position-relative overflow-hidden" style="height: 250px;">
                            <img 
                                src="<?= theme_url($airport['image']); ?>" 
                                class="w-100 h-100 object-fit-cover" 
                                alt="<?= htmlspecialchars($airport['title']); ?>"
                                loading="lazy"
                            >
                            <span class="position-absolute top-0 start-0 m-3 badge bg-dark bg-opacity-75 text-white rounded-pill px-3 py-2 small fw-semibold border border-light border-opacity-25" style="backdrop-filter: blur(6px);">
                                <i class="bi bi-airplane-fill me-1" style="transform: rotate(45deg);"></i> <?= htmlspecialchars($airport['code']); ?> &bull; <?= htmlspecialchars($airport['tag']); ?>
                            </span>

                            <span class="position-absolute bottom-0 end-0 m-3 badge bg-primary text-white rounded-pill px-3 py-2 fw-semibold shadow-xs">
                                Fares from <?= htmlspecialchars($airport['price_start']); ?>
                            </span>
                        </div>

                        <div class="card-body p-4 d-flex flex-column justify-content-between flex-grow-1">
                            <div>
                                <h3 class="fs-4 fw-bold text-dark mb-2">
                                    <a href="<?= $detailUrl; ?>" class="text-dark text-decoration-none hover-primary">
                                        <?= htmlspecialchars($airport['title']); ?>
                                    </a>
                                </h3>
                                
                                <p class="text-secondary small mb-3" style="line-height: 1.6;">
                                    <?= htmlspecialchars($airport['overview']); ?>
                                </p>

                                <div class="mb-4">
                                    <h6 class="fw-bold text-dark small mb-2 d-flex align-items-center gap-1.5">
                                        <i class="bi bi-buildings text-primary"></i> Terminals Handled:
                                    </h6>
                                    <div class="d-flex flex-wrap gap-2">
                                        <?php foreach ($airport['terminals'] as $term): ?>
                                            <span class="badge bg-light text-secondary border px-2.5 py-1.5 rounded-pill small fw-normal">
                                                <i class="bi bi-check-circle-fill text-success me-1"></i> <?= htmlspecialchars($term['name']); ?>
                                            </span>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>

                            <div class="pt-3 border-top d-flex align-items-center justify-content-between gap-3">
                                <a href="<?= $detailUrl; ?>" class="btn btn-primary rounded-pill px-4 py-2 fw-semibold d-inline-flex align-items-center gap-2 shadow-xs">
                                    <span>View Transfers &amp; Fares</span>
                                    <i class="bi bi-arrow-right"></i>
                                </a>

                                <a href="https://wa.me/918800722606?text=Hi%2C%20I%20want%20to%20inquire%20about%20<?= urlencode($airport['title']); ?>" target="_blank" class="btn btn-outline-success rounded-circle d-inline-flex align-items-center justify-content-center p-0" style="width: 42px; height: 42px;" title="Chat on WhatsApp">
                                    <i class="bi bi-whatsapp fs-5"></i>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Reusable Section 1: Modern Airport Taxi Showcase (From Image Design) -->
<?php require_once __DIR__ . '/../components/airportTaxi.php'; ?>

<!-- Reusable Section 2: Outstation Fleet & Rates -->
<?php require_once __DIR__ . '/../components/outstationCarType.php'; ?>

<!-- Reusable Section 3: Driver Safety & Fleet Standards -->
<?php require_once __DIR__ . '/../components/safetyVarified.php'; ?>

<!-- Reusable Section 4: Client Testimonials -->
<?php require_once __DIR__ . '/../components/testimonials.php'; ?>

<!-- Reusable Section 5: Frequently Asked Questions -->
<?php require_once __DIR__ . '/../components/faq.php'; ?>

<!-- Reusable Section 6: Modern Call to Action Banner -->
<?php require_once __DIR__ . '/../components/cta.php'; ?>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>


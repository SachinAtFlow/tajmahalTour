<?php
/**
 * Outstation Cab & Chauffeur Service Master Page
 * File: outstation/index.php
 * 
 * Inter-city outstation car rental across North India:
 * Delhi, Agra, Rajasthan, Himachal Pradesh, Uttarakhand, Punjab & Gujarat.
 */

$page_title = "Outstation Cab Booking - Inter-City Chauffeurs & Round-Trip Taxis | Taj Mahal Tour";
require_once __DIR__ . '/../includes/header.php';
?>

<!-- Breadcrumb Bar -->
<div class="bg-light border-bottom py-3">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 small">
                <li class="breadcrumb-item"><a href="<?= theme_url('index.php'); ?>" class="text-decoration-none text-secondary">Home</a></li>
                <li class="breadcrumb-item"><a href="<?= theme_url('carRentalLocation.php'); ?>" class="text-decoration-none text-secondary">Car Rental</a></li>
                <li class="breadcrumb-item active text-primary fw-semibold" aria-current="page">Outstation Cab</li>
            </ol>
        </nav>
    </div>
</div>

<!-- Outstation Hero Section -->
<section class="position-relative py-5 bg-dark text-white overflow-hidden" id="outstation-hero-banner" style="background: linear-gradient(135deg, #0b1120 0%, #1e293b 100%);">
    <div class="position-absolute top-0 end-0 bottom-0 start-0 opacity-15" style="background-image: radial-gradient(#3B71FE 1px, transparent 1px); background-size: 26px 26px;"></div>

    <div class="container position-relative z-2 py-lg-4">
        <div class="row align-items-center g-5">
            
            <div class="col-lg-7">
                <span class="badge bg-primary bg-opacity-25 text-white border border-primary border-opacity-50 px-3 py-2 rounded-pill fw-semibold small text-uppercase mb-3 d-inline-flex align-items-center gap-2">
                    <i class="bi bi-compass-fill"></i>
                    <span>INTER-CITY HIGHWAY CHAUFFEUR SERVICES</span>
                </span>

                <h1 class="display-5 fw-bold text-white mb-3">
                    Comfortable &amp; Reliable <br class="d-none d-md-block">
                    <span class="text-primary">Outstation Cabs</span> Across North India
                </h1>

                <p class="text-light text-opacity-75 fs-5 mb-4" style="max-width: 620px; line-height: 1.6;">
                    Explore Agra, Jaipur, Rajasthan, Himachal, Uttarakhand, and Punjab with verified commercial chauffeurs. Enjoy transparent per-kilometer billing, sanitized modern sedans, luxury SUVs, and zero hidden state tax surprises.
                </p>

                <!-- Popular Route Badges -->
                <div class="d-flex flex-wrap align-items-center gap-2 mb-4">
                    <span class="badge bg-white bg-opacity-10 text-white border border-light border-opacity-25 px-3 py-2 rounded-pill small">
                        <i class="bi bi-geo-alt-fill text-warning me-1"></i> Delhi &harr; Agra (Taj Mahal)
                    </span>
                    <span class="badge bg-white bg-opacity-10 text-white border border-light border-opacity-25 px-3 py-2 rounded-pill small">
                        <i class="bi bi-geo-alt-fill text-warning me-1"></i> Delhi &harr; Jaipur
                    </span>
                    <span class="badge bg-white bg-opacity-10 text-white border border-light border-opacity-25 px-3 py-2 rounded-pill small">
                        <i class="bi bi-geo-alt-fill text-warning me-1"></i> Delhi &harr; Shimla / Manali
                    </span>
                    <span class="badge bg-white bg-opacity-10 text-white border border-light border-opacity-25 px-3 py-2 rounded-pill small">
                        <i class="bi bi-geo-alt-fill text-warning me-1"></i> Delhi &harr; Haridwar / Rishikesh
                    </span>
                </div>

                <div class="d-flex flex-wrap align-items-center gap-3">
                    <a href="#outstation-car-rental" class="btn btn-primary rounded-pill px-4 py-2.5 fw-semibold d-inline-flex align-items-center gap-2 shadow-sm">
                        <span>View Fleet &amp; Per-Km Fares</span>
                        <i class="bi bi-arrow-down"></i>
                    </a>
                    <a href="https://wa.me/918800722606?text=Hi%2C%20I%20want%20to%20book%20an%20Outstation%20Cab" target="_blank" class="btn btn-outline-light rounded-pill px-4 py-2.5 fw-semibold d-inline-flex align-items-center gap-2">
                        <i class="bi bi-whatsapp text-success"></i>
                        <span>Instant WhatsApp Booking</span>
                    </a>
                </div>

            </div>

            <!-- Quick Outstation Booking Form -->
            <div class="col-lg-5">
                <div class="card border-0 rounded-4 shadow-lg p-4 bg-white text-dark">
                    <h3 class="fs-5 fw-bold text-dark mb-1 d-flex align-items-center gap-2">
                        <i class="bi bi-car-front-fill text-primary"></i> Outstation Fare Inquiry
                    </h3>
                    <p class="text-secondary small mb-3">Instant quote for one-way or round-trip journeys.</p>

                    <form action="<?= theme_url('contact.php'); ?>" method="GET" class="row g-3">
                        <input type="hidden" name="service_type" value="outstation_cab">

                        <div class="col-12">
                            <label class="form-label small fw-semibold text-secondary mb-1">Trip Format</label>
                            <div class="d-flex gap-2">
                                <div class="form-check form-check-inline m-0 flex-fill">
                                    <input class="btn-check" type="radio" name="trip_format" id="roundtrip" value="roundtrip" checked>
                                    <label class="btn btn-outline-primary btn-sm rounded-pill w-100 py-1.5" for="roundtrip">
                                        Round Trip
                                    </label>
                                </div>
                                <div class="form-check form-check-inline m-0 flex-fill">
                                    <input class="btn-check" type="radio" name="trip_format" id="oneway" value="oneway">
                                    <label class="btn btn-outline-primary btn-sm rounded-pill w-100 py-1.5" for="oneway">
                                        One-Way Drop
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label small fw-semibold text-secondary mb-1">Pickup City</label>
                            <input type="text" name="pickup_city" class="form-control rounded-3 py-2" placeholder="e.g. Delhi NCR" value="Delhi NCR">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label small fw-semibold text-secondary mb-1">Destination City</label>
                            <input type="text" name="dest_city" class="form-control rounded-3 py-2" placeholder="e.g. Agra, Jaipur, Shimla">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label small fw-semibold text-secondary mb-1">Departure Date</label>
                            <input type="date" name="dep_date" class="form-control rounded-3 py-2 text-secondary" value="<?= date('Y-m-d'); ?>">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label small fw-semibold text-secondary mb-1">Return Date</label>
                            <input type="date" name="ret_date" class="form-control rounded-3 py-2 text-secondary" value="<?= date('Y-m-d', strtotime('+2 days')); ?>">
                        </div>

                        <div class="col-12">
                            <label class="form-label small fw-semibold text-secondary mb-1">Vehicle Preference</label>
                            <select name="preferred_car" class="form-select rounded-3 py-2 text-dark">
                                <option value="sedan">AC Sedan (Dzire / Etios) - 4 Seater</option>
                                <option value="suv" selected>AC SUV (Innova Crysta / Ertiga) - 6-7 Seater</option>
                                <option value="tempo">Luxury Tempo Traveller - 12-16 Seater</option>
                            </select>
                        </div>

                        <div class="col-12 pt-1">
                            <button type="submit" class="btn btn-primary rounded-pill w-100 py-2.5 fw-semibold shadow-sm">
                                Check Available Cars &amp; Rates <i class="bi bi-arrow-right ms-1"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Premade Reusable Section 1: Outstation Fleet & Rates (Clean Minimalist Cards) -->
<?php require_once __DIR__ . '/../components/outstationCarType.php'; ?>

<!-- Popular Inter-City Circuits Table -->
<section class="py-5 bg-white border-top position-relative" id="popular-circuits">
    <div class="container py-2">
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-end gap-3 mb-4">
            <div>
                <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-1.5 rounded-pill fw-semibold small text-uppercase mb-2">
                    <i class="bi bi-map-fill me-1"></i> POPULAR HIGHWAY ROUTES
                </span>
                <h2 class="display-6 fw-bold text-dark mb-1">
                    Most Booked Outstation Routes from Delhi NCR
                </h2>
                <p class="text-secondary mb-0">Pre-estimated fixed package rates including interstate tax, tolls, and driver allowance.</p>
            </div>
            <a href="https://wa.me/918800722606?text=Hi%2C%20I%20want%20custom%20outstation%20itinerary" target="_blank" class="btn btn-outline-primary rounded-pill px-4 py-2 fw-semibold d-inline-flex align-items-center gap-2 flex-shrink-0">
                <span>Custom Route Inquiry</span>
                <i class="bi bi-arrow-right"></i>
            </a>
        </div>

        <div class="row row-cols-1 row-cols-md-3 g-4">
            
            <div class="col">
                <div class="card h-100 border rounded-4 p-4 bg-light shadow-xs">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <span class="badge bg-primary text-white rounded-pill px-3 py-1 fw-semibold small">EXPRESSWAY</span>
                        <span class="text-primary fw-bold fs-5">₹3,500 <small class="text-secondary fs-6 fw-normal">/ day</small></span>
                    </div>
                    <h4 class="fs-5 fw-bold text-dark mb-2">Delhi &harr; Agra (Taj Mahal)</h4>
                    <p class="text-secondary small mb-3">Fast transit via Yamuna Expressway. Perfect for sunrise or same-day return trips with monument guide assistance.</p>
                    <ul class="list-unstyled small text-secondary mb-4">
                        <li><i class="bi bi-check2 text-primary me-2"></i><strong>Distance:</strong> 230 km (3.5 Hrs)</li>
                        <li><i class="bi bi-check2 text-primary me-2"></i><strong>Expressway Toll:</strong> Included in package</li>
                        <li><i class="bi bi-check2 text-primary me-2"></i><strong>Monuments:</strong> Taj Mahal, Agra Fort, Mehtab Bagh</li>
                    </ul>
                    <a href="https://wa.me/918800722606?text=Hi%2C%20I%20want%20to%20book%20Delhi%20to%20Agra%20Cab" target="_blank" class="btn btn-primary rounded-pill w-100 py-2 fw-semibold">
                        Book Delhi-Agra Cab
                    </a>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 border rounded-4 p-4 bg-light shadow-xs">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <span class="badge bg-primary text-white rounded-pill px-3 py-1 fw-semibold small">HERITAGE</span>
                        <span class="text-primary fw-bold fs-5">₹3,900 <small class="text-secondary fs-6 fw-normal">/ day</small></span>
                    </div>
                    <h4 class="fs-5 fw-bold text-dark mb-2">Delhi &harr; Jaipur (Pink City)</h4>
                    <p class="text-secondary small mb-3">Cruise via new Delhi-Mumbai Expressway. Ideal for royal palaces, Amer Fort, shopping, and weekend cultural getaways.</p>
                    <ul class="list-unstyled small text-secondary mb-4">
                        <li><i class="bi bi-check2 text-primary me-2"></i><strong>Distance:</strong> 260 km (4.5 Hrs)</li>
                        <li><i class="bi bi-check2 text-primary me-2"></i><strong>Driver:</strong> Rajasthan route expert</li>
                        <li><i class="bi bi-check2 text-primary me-2"></i><strong>Options:</strong> 1-Way Drop or 2–3 Days Return</li>
                    </ul>
                    <a href="https://wa.me/918800722606?text=Hi%2C%20I%20want%20to%20book%20Delhi%20to%20Jaipur%20Cab" target="_blank" class="btn btn-primary rounded-pill w-100 py-2 fw-semibold">
                        Book Delhi-Jaipur Cab
                    </a>
                </div>
            </div>

            <div class="col">
                <div class="card h-100 border rounded-4 p-4 bg-light shadow-xs">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <span class="badge bg-primary text-white rounded-pill px-3 py-1 fw-semibold small">HILL STATION</span>
                        <span class="text-primary fw-bold fs-5">₹4,200 <small class="text-secondary fs-6 fw-normal">/ day</small></span>
                    </div>
                    <h4 class="fs-5 fw-bold text-dark mb-2">Delhi &harr; Haridwar &amp; Rishikesh</h4>
                    <p class="text-secondary small mb-3">Smooth corridor journey via Delhi-Meerut Expressway. Visit sacred Ganga Aarti, adventure camps, and ashrams in peace.</p>
                    <ul class="list-unstyled small text-secondary mb-4">
                        <li><i class="bi bi-check2 text-primary me-2"></i><strong>Distance:</strong> 245 km (4.5 Hrs)</li>
                        <li><i class="bi bi-check2 text-primary me-2"></i><strong>Comfort:</strong> Hill-certified chauffeurs</li>
                        <li><i class="bi bi-check2 text-primary me-2"></i><strong>Popular:</strong> 2–3 Days Spiritual Retreat</li>
                    </ul>
                    <a href="https://wa.me/918800722606?text=Hi%2C%20I%20want%20to%20book%20Delhi%20to%20Haridwar%20Cab" target="_blank" class="btn btn-primary rounded-pill w-100 py-2 fw-semibold">
                        Book Haridwar Cab
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Premade Reusable Section 2: Why Choose Us / Value Proposition -->
<?php require_once __DIR__ . '/../components/whyUs.php'; ?>

<!-- Premade Reusable Section 3: Driver Safety & Fleet Standards -->
<?php require_once __DIR__ . '/../components/safetyVarified.php'; ?>

<!-- Premade Reusable Section 4: Client Testimonials -->
<?php require_once __DIR__ . '/../components/testimonials.php'; ?>

<!-- Premade Reusable Section 5: Frequently Asked Questions -->
<?php require_once __DIR__ . '/../components/faq.php'; ?>

<!-- Premade Reusable Section 6: Call to Action Banner -->
<?php require_once __DIR__ . '/../components/cta.php'; ?>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>


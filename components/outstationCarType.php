<?php
/**
 * Outstation Car Rental Fleet Component
 * Modern Dark Card UI matching Featured Tour design
 */
$carImgDir = 'assets/images/cars/';

$outstationCars = [
    [
        'title' => 'Economy Car',
        'model' => 'WagonR, Celerio or similar',
        'handle' => 'economyoutstation',
        'desc' => 'Budget-friendly hatchback option for Agra, Mathura, and short outstation trips.',
        'image' => $carImgDir . 'economy-car.webp',
        'capacity' => '4 Seater',
        'climate' => 'AC Hatchback',
        'fare' => '₹3,000',
        'unit' => '/Day',
        'extra' => 'Extra: ₹12/Km',
        'wa_text' => 'Hello TajMahalTour, I want to book Economy Car for Outstation Tour.'
    ],
    [
        'title' => 'Standard Sedan',
        'model' => 'Dzire, Etios or similar',
        'handle' => 'sedanoutstation',
        'desc' => 'Most popular sedan with spacious boot, highway comfort, and smooth long-distance drive.',
        'image' => $carImgDir . 'standard-sedan-car.webp',
        'capacity' => '4 Seater',
        'climate' => 'AC Sedan',
        'fare' => '₹3,500',
        'unit' => '/Day',
        'extra' => 'Extra: ₹13/Km',
        'wa_text' => 'Hello TajMahalTour, I want to book Standard Sedan for Outstation Tour.'
    ],
    [
        'title' => 'SUV / Innova Crysta',
        'model' => 'Innova Crysta, Ertiga',
        'handle' => 'suvoutstation',
        'desc' => 'Top-tier luxury SUV offering maximum legroom, captain seats, and mountain readiness.',
        'image' => $carImgDir . 'suv-innova.webp',
        'capacity' => '6–7 Seater',
        'climate' => 'Dual AC SUV',
        'fare' => '₹5,000',
        'unit' => '/Day',
        'extra' => 'Extra: ₹19/Km',
        'wa_text' => 'Hello TajMahalTour, I want to book SUV Innova Crysta for Outstation Tour.'
    ],
    [
        'title' => 'Luxury Tempo Traveller',
        'model' => 'Force Luxury 12–16 Seater',
        'handle' => 'tempooutstation',
        'desc' => 'Spacious executive group coach with pushback seats and high roof for family road trips.',
        'image' => $carImgDir . 'tempo-traveller.webp',
        'capacity' => '12–16 Seater',
        'climate' => 'High AC Coach',
        'fare' => '₹7,500',
        'unit' => '/Day',
        'extra' => 'Extra: ₹26/Km',
        'wa_text' => 'Hello TajMahalTour, I want to book Tempo Traveller for Outstation Tour.'
    ]
];
?>

<!-- Outstation Fleet Section (Featured Tour Style Dark Card UI) -->
<section class="py-5 bg-light position-relative" id="outstation-fleet">
    <div class="container py-4">

        <!-- Section Header -->
        <div class="text-center mb-5">
            <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-2 rounded-pill fw-semibold mb-2">
                <i class="bi bi-car-front-fill me-1"></i> OUTSTATION TOUR FLEET
            </span>
            <h2 class="display-6 fw-bold text-dark mb-2">
                Comfortable & Pocket-Friendly Outstation Travel
            </h2>
            <p class="text-secondary mx-auto mb-0" style="max-width: 680px;">
                Explore Agra, Jaipur, Rajasthan, and North India destinations with private AC cabs, transparent per-km billing, and certified police-verified chauffeurs.
            </p>
        </div>

        <!-- 4 Cards Grid Container -->
        <div class="row g-4">
            <?php foreach ($outstationCars as $car): ?>
                <?php 
                    $waUrl = 'https://wa.me/918800722606?text=' . urlencode($car['wa_text']);
                ?>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="tour-dark-card h-100 d-flex flex-column justify-content-between">
                        
                        <div>
                            <!-- Top Media Banner -->
                            <div class="card-banner shadow-sm d-flex align-items-center justify-content-center p-3 position-relative" style="background: radial-gradient(circle at center, rgba(255,255,255,0.06) 0%, rgba(15,23,42,0.85) 100%);">
                                <span class="badge bg-success bg-opacity-90 position-absolute top-0 end-0 m-3 px-2 py-1 rounded-pill small fw-medium">
                                    <i class="bi bi-circle-fill me-1" style="font-size: 6px;"></i>Available
                                </span>
                                <img 
                                    src="<?php echo htmlspecialchars($car['image']); ?>" 
                                    alt="<?php echo htmlspecialchars($car['title']); ?>" 
                                    class="img-fluid"
                                    style="max-height: 135px; width: auto; object-fit: contain;"
                                    loading="lazy"
                                >
                            </div>

                            <!-- Avatar & Profile Row -->
                            <div class="px-2">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <div class="avatar-box shadow">
                                        <i class="bi bi-car-front-fill text-warning fs-5"></i>
                                    </div>
                                    <span class="badge bg-secondary bg-opacity-25 text-white-50 border border-secondary border-opacity-25 rounded-pill px-2.5 py-1 small">
                                        <?php echo htmlspecialchars($car['model']); ?>
                                    </span>
                                </div>

                                <!-- Title & Handle -->
                                <div class="mb-2">
                                    <h5 class="text-white fw-bold mb-0 text-truncate" title="<?php echo htmlspecialchars($car['title']); ?>">
                                        <?php echo htmlspecialchars($car['title']); ?>
                                        <i class="bi bi-patch-check-fill text-warning ms-1 small" title="Verified Fleet"></i>
                                    </h5>
                                    <span class="text-secondary small fw-medium">
                                        @<?php echo htmlspecialchars($car['handle']); ?>
                                    </span>
                                </div>

                                <!-- Description -->
                                <div class="text-white-50 small mb-3" style="line-height: 1.5; min-height: 42px;">
                                    <?php echo htmlspecialchars($car['desc']); ?>
                                </div>

                                <!-- Specs Grid Inside Card -->
                                <div class="row g-2 p-2 rounded-3 bg-dark bg-opacity-50 border border-secondary border-opacity-25 mb-3 text-white-50 small">
                                    <div class="col-6 d-flex align-items-center gap-2">
                                        <i class="bi bi-people-fill text-warning"></i>
                                        <div>
                                            <div class="text-secondary" style="font-size: 10px;">SEATS</div>
                                            <span class="text-white fw-semibold small"><?php echo htmlspecialchars($car['capacity']); ?></span>
                                        </div>
                                    </div>
                                    <div class="col-6 d-flex align-items-center gap-2">
                                        <i class="bi bi-snow text-info"></i>
                                        <div>
                                            <div class="text-secondary" style="font-size: 10px;">CLIMATE</div>
                                            <span class="text-white fw-semibold small"><?php echo htmlspecialchars($car['climate']); ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Footer Price & Booking CTA -->
                        <div class="px-2 pt-2 border-top border-secondary border-opacity-25">
                            <div class="d-flex align-items-center justify-content-between mb-1">
                                <div>
                                    <span class="text-secondary small d-block" style="font-size: 11px;">Fares from</span>
                                    <div class="d-flex align-items-baseline gap-1">
                                        <span class="text-warning fw-bold fs-5"><?php echo htmlspecialchars($car['fare']); ?></span>
                                        <span class="text-secondary small"><?php echo htmlspecialchars($car['unit']); ?></span>
                                    </div>
                                </div>

                                <a 
                                    href="<?php echo htmlspecialchars($waUrl); ?>" 
                                    target="_blank" 
                                    class="btn btn-warning btn-sm rounded-pill fw-bold px-3 py-1.5 shadow-sm d-inline-flex align-items-center gap-1.5"
                                >
                                    <i class="bi bi-whatsapp"></i>
                                    <span>Book Now</span>
                                </a>
                            </div>

                            <div class="text-secondary" style="font-size: 11px;">
                                <i class="bi bi-info-circle me-1"></i><?php echo htmlspecialchars($car['extra']); ?>
                            </div>
                        </div>

                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>

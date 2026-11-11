<?php
/**
 * Outstation Car Rental Fleet Component
 * Clean & Minimalist Modern Card UI
 */
$carImgDir = 'assets/images/cars/';

$outstationCars = [
    [
        'tag' => 'HATCHBACK',
        'title' => 'Economy Car',
        'model' => 'WagonR, Celerio or similar',
        'desc' => 'Budget-friendly hatchback option for Agra, Mathura, and short outstation trips.',
        'image' => $carImgDir . 'economy-car.png',
        'capacity' => '4 Seater',
        'climate' => 'AC Hatchback',
        'fare' => '₹3,000',
        'unit' => '/Day',
        'extra' => 'Extra: ₹12/Km',
        'wa_text' => 'Hello TajMahalTour, I want to book Economy Car for Outstation Tour.'
    ],
    [
        'tag' => 'SEDAN',
        'title' => 'Standard Sedan',
        'model' => 'Dzire, Etios or similar',
        'desc' => 'Most popular sedan with spacious boot, highway comfort, and smooth long-distance drive.',
        'image' => $carImgDir . 'standard-sedan-car.png',
        'capacity' => '4 Seater',
        'climate' => 'AC Sedan',
        'fare' => '₹3,500',
        'unit' => '/Day',
        'extra' => 'Extra: ₹13/Km',
        'wa_text' => 'Hello TajMahalTour, I want to book Standard Sedan for Outstation Tour.'
    ],
    [
        'tag' => 'PREMIUM SUV',
        'title' => 'SUV / Innova Crysta',
        'model' => 'Innova Crysta, Ertiga',
        'desc' => 'Top-tier luxury SUV offering maximum legroom, captain seats, and mountain readiness.',
        'image' => $carImgDir . 'suv-innova.png',
        'capacity' => '6–7 Seater',
        'climate' => 'Dual AC SUV',
        'fare' => '₹5,000',
        'unit' => '/Day',
        'extra' => 'Extra: ₹19/Km',
        'wa_text' => 'Hello TajMahalTour, I want to book SUV Innova Crysta for Outstation Tour.'
    ],
    [
        'tag' => 'GROUP COACH',
        'title' => 'Luxury Tempo Traveller',
        'model' => 'Force Luxury 12–16 Seater',
        'desc' => 'Spacious executive group coach with pushback seats and high roof for family road trips.',
        'image' => $carImgDir . 'tempo-traveller.png',
        'capacity' => '12–16 Seater',
        'climate' => 'High AC Coach',
        'fare' => '₹7,500',
        'unit' => '/Day',
        'extra' => 'Extra: ₹26/Km',
        'wa_text' => 'Hello TajMahalTour, I want to book Tempo Traveller for Outstation Tour.'
    ]
];
?>

<!-- Outstation Fleet Section (Clean & Minimalist Modern Card UI) -->
<section class="py-5 bg-light position-relative" id="outstation-car-rental">
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
                    $waUrl = function_exists('site_whatsapp_link') ? site_whatsapp_link($car['wa_text']) : ('https://wa.me/919810723370?text=' . urlencode($car['wa_text']));
                ?>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="card h-100 border border-light-subtle rounded-4 overflow-hidden shadow-xs hover-lift d-flex flex-column justify-content-between bg-white">
                        
                        <div>
                            <!-- Top Media Banner -->
                            <div class="position-relative overflow-hidden d-flex align-items-center justify-content-center p-3" style="height: 180px; background: linear-gradient(135deg, #f8fafc 0%, #edf2f7 100%);">
                                <span class="badge bg-white text-dark rounded-pill shadow-xs position-absolute top-0 start-0 m-3 px-2.5 py-1 fw-bold" style="font-size: 11px;">
                                    <?php echo htmlspecialchars($car['tag']); ?>
                                </span>
                                <span class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25 rounded-pill position-absolute top-0 end-0 m-3 px-2.5 py-1 fw-semibold" style="font-size: 11px;">
                                    <i class="bi bi-circle-fill me-1" style="font-size: 6px;"></i>Available
                                </span>
                                <img 
                                    src="<?php echo htmlspecialchars(function_exists('theme_url') ? theme_url($car['image']) : $car['image']); ?>" 
                                    alt="<?php echo htmlspecialchars(!empty($car['title']) ? $car['title'] . ' - Outstation Car Rental' : 'Outstation Car'); ?>" 
                                    class="img-fluid object-fit-contain"
                                    style="max-height: 125px; width: auto;"
                                    loading="lazy"
                                >
                            </div>

                            <!-- Content Body -->
                            <div class="card-body p-3 pb-2 d-flex flex-column justify-content-between flex-grow-1">
                                <h6 class="fw-bold fs-6 mb-1 text-dark"><?php echo htmlspecialchars($car['title']); ?></h6>
                                <span class="text-secondary small d-block mb-2"><?php echo htmlspecialchars($car['model']); ?></span>

                                <p class="text-secondary small mb-2 line-clamp-2 overflow-hidden" style="font-size: 13px; line-height: 1.4; min-height: 36px;">
                                    <?php echo htmlspecialchars($car['desc']); ?>
                                </p>

                                <!-- Specs Row (Managed with row g-2 & text-truncate) -->
                                <div class="row g-2 py-2 border-top border-light-subtle text-secondary small my-1">
                                    <div class="col-6 d-flex align-items-center gap-2 min-w-0">
                                        <i class="bi bi-people-fill text-primary flex-shrink-0"></i>
                                        <span class="fw-medium text-dark text-truncate" title="<?php echo htmlspecialchars($car['capacity']); ?>"><?php echo htmlspecialchars($car['capacity']); ?></span>
                                    </div>
                                    <div class="col-6 d-flex align-items-center gap-2 min-w-0">
                                        <i class="bi bi-snow text-primary flex-shrink-0"></i>
                                        <span class="fw-medium text-dark text-truncate" title="<?php echo htmlspecialchars($car['climate']); ?>"><?php echo htmlspecialchars($car['climate']); ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Card Footer -->
                        <div class="px-3 pt-2 pb-3 border-top border-light-subtle">
                            <div class="d-flex align-items-center justify-content-between mb-1.5">
                                <div>
                                    <span class="text-secondary d-block" style="font-size: 11px;">Starting from</span>
                                    <span class="text-primary fw-bold fs-4 lh-1 d-block"><?php echo htmlspecialchars($car['fare']); ?></span>
                                    <span class="text-secondary small d-block mt-1" style="font-size: 11.5px;"><?php echo htmlspecialchars($car['unit']); ?></span>
                                </div>

                                <a 
                                    href="<?php echo htmlspecialchars($waUrl); ?>" 
                                    target="_blank" 
                                    class="btn btn-primary btn-sm rounded-pill px-3 py-2 fw-semibold d-inline-flex align-items-center gap-1.5 shadow-sm"
                                >
                                    <span>Book</span>
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

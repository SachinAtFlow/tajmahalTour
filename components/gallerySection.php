<?php
/**
 * Tour Memories Gallery Section Component
 * File: components/gallerySection.php
 * 
 * Reusable continuous infinite marquee displaying curated travel memories
 * styled in complete harmony with the website's clean light luxury theme.
 */

// Curated 14 tour moments across North India & neighboring regions
$memoriesMeta = [
    1  => ['title' => 'The rays of dawn on marble domes', 'location' => 'Taj Mahal, Agra • Uttar Pradesh'],
    2  => ['title' => 'Golden sunset over desert ramparts', 'location' => 'Amber Fort, Jaipur • Rajasthan'],
    3  => ['title' => 'Sacred evening river reflections', 'location' => 'Ganga Ghats, Varanasi • Uttar Pradesh'],
    4  => ['title' => 'Mist-draped pine valleys & snowy peaks', 'location' => 'Solang Valley, Manali • Himachal'],
    5  => ['title' => 'Gilded tranquility in the holy pool', 'location' => 'Golden Temple, Amritsar • Punjab'],
    6  => ['title' => 'Intricate latticed sandstone balconies', 'location' => 'Hawa Mahal, Jaipur • Rajasthan'],
    7  => ['title' => 'Endless white expanse under starry skies', 'location' => 'Rann of Kutch • Gujarat'],
    8  => ['title' => 'Mountain serenity & prayer flags', 'location' => 'Dharamshala & McLeodGanj • Himachal'],
    9  => ['title' => 'Timeless pagoda courtyards & shrines', 'location' => 'Kathmandu Valley • Nepal Circuit'],
    10 => ['title' => 'Royal palace waters & sunset reflections', 'location' => 'Lake Pichola, Udaipur • Rajasthan'],
    11 => ['title' => 'Echoes of the sacred Ganga Aarti', 'location' => 'Triveni Ghat, Rishikesh • Uttarakhand'],
    12 => ['title' => 'Mughal sandstone grandeur & bastions', 'location' => 'Red Fort & Old Delhi • Delhi NCR'],
    13 => ['title' => 'Golden sandstone cenotaphs in twilight', 'location' => 'Bada Bagh, Jaisalmer • Rajasthan'],
    14 => ['title' => 'Comfortable chauffeur-driven journeys', 'location' => 'North India Highway Network • Luxury Fleet']
];

$marqueePhotos = [];
for ($mIdx = 1; $mIdx <= 14; $mIdx++) {
    $photoRel = 'assets/images/gallery-images/' . $mIdx . '.webp';
    if (file_exists(__DIR__ . '/../' . $photoRel)) {
        $meta = $memoriesMeta[$mIdx] ?? [
            'title'    => 'Tour Memory #' . $mIdx,
            'location' => 'North India Journey'
        ];
        $marqueePhotos[] = [
            'id'       => $mIdx,
            'url'      => $photoRel,
            'title'    => $meta['title'],
            'location' => $meta['location']
        ];
    }
}

// Gentle alternating tilts & vertical offsets creating a natural curved wave
$cardTilts = [-10, -5, 2, 7, 12, -9, -4, 4, 9, 14, -10, -5, 3, 8];
$cardOffsets = [20, 8, -6, -14, 6, 22, 10, -6, -14, 8, 20, 8, -6, -12];
?>

<!-- Tour Memories Marquee Section -->
<section class="py-5 bg-light position-relative overflow-hidden memories-marquee-section" id="tour-gallery-marquee" aria-label="Tour Memories Photo Gallery">
    
    <div class="container py-lg-3 text-center position-relative z-2">
        
        <!-- Standard Theme Section Header -->
        <div class="max-w-2xl mx-auto mb-3">
            <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-2 rounded-pill fw-semibold mb-2 d-inline-flex align-items-center gap-2">
                <i class="bi bi-camera-fill text-warning"></i>
                <span>REAL TRAVEL EXPERIENCES</span>
            </span>
            <h2 class="display-6 fw-bold text-dark mb-2">
                Memories &amp; Moments Captured
            </h2>
            <p class="text-secondary mb-0" style="max-width: 620px; margin: 0 auto;">
                Authentic smiles, majestic fortresses, and candid snapshots from our travelers exploring North India with our verified chauffeurs.
            </p>
        </div>

    </div>

    <!-- Infinite Continuous Marquee Track -->
    <?php if (!empty($marqueePhotos)): ?>
        <div class="memories-marquee position-relative w-100 overflow-hidden position-absolute top-0 bottom-0 start-0 end-0" aria-label="Continuous Tour Photo Carousel">
            <div class="memories-marquee-track d-flex">
                
                <!-- Group 1 -->
                <div class="d-flex align-items-center gap-4 pe-4 flex-shrink-0">
                    <?php foreach ($marqueePhotos as $idx => $photo): ?>
                        <?php 
                            $photoUrl = theme_url($photo['url']);
                            $tilt = $cardTilts[$idx % count($cardTilts)];
                            $offset = $cardOffsets[$idx % count($cardOffsets)];
                        ?>
                        <a href="<?= theme_url('gallery.php'); ?>" 
                           class="memory-card flex-shrink-0 position-relative overflow-hidden d-block text-decoration-none w-100 h-100" 
                           style="transform: rotate(<?= $tilt; ?>deg) translateY(<?= $offset; ?>px);"
                           title="<?= htmlspecialchars($photo['title']); ?> • <?= htmlspecialchars($photo['location']); ?>">
                            
                            <img src="<?= $photoUrl; ?>" 
                                 alt="<?= htmlspecialchars($photo['title']); ?>" 
                                 loading="lazy" 
                                 decoding="async">
                            
                            <!-- Floating Location Pill on Hover -->
                            <div class="memory-card-overlay position-absolute d-flex align-items-end">
                                <span class="badge bg-white text-dark rounded-pill px-3 py-1.5 small fw-bold shadow-sm d-inline-flex align-items-center">
                                    <i class="bi bi-geo-alt-fill text-primary me-1"></i>
                                    <span><?= htmlspecialchars($photo['location']); ?></span>
                                </span>
                            </div>
                        </a>
                    <?php endforeach; ?>
                </div>

                <!-- Group 2 (Duplicate for Seamless Infinite Marquee Loop) -->
                <div class="d-flex align-items-center gap-4 pe-4 flex-shrink-0" aria-hidden="true">
                    <?php foreach ($marqueePhotos as $idx => $photo): ?>
                        <?php 
                            $photoUrl = theme_url($photo['url']);
                            $tilt = $cardTilts[$idx % count($cardTilts)];
                            $offset = $cardOffsets[$idx % count($cardOffsets)];
                        ?>
                        <a href="<?= theme_url('gallery.php'); ?>" 
                           class="memory-card flex-shrink-0 position-relative overflow-hidden d-block text-decoration-none w-100 h-100" 
                           style="transform: rotate(<?= $tilt; ?>deg) translateY(<?= $offset; ?>px);"
                           tabindex="-1">
                            
                            <img src="<?= $photoUrl; ?>" 
                                 alt="<?= htmlspecialchars($photo['title']); ?>" 
                                 loading="lazy" 
                                 decoding="async">
                            
                            <!-- Floating Location Pill on Hover -->
                            <div class="memory-card-overlay position-absolute d-flex align-items-end">
                                <span class="badge bg-white text-dark rounded-pill px-3 py-1.5 small fw-bold shadow-sm d-inline-flex align-items-center">
                                    <i class="bi bi-geo-alt-fill text-primary me-1"></i>
                                    <span><?= htmlspecialchars($photo['location']); ?></span>
                                </span>
                            </div>
                        </a>
                    <?php endforeach; ?>
                </div>

            </div>
        </div>
    <?php endif; ?>

    <!-- Theme Primary CTA Button to gallery.php -->
    <div class="container text-center pt-2 position-relative z-2">
        <a href="<?= theme_url('gallery.php'); ?>" class="btn btn-primary rounded-pill px-4 py-2 px-md-5 py-md-3 small fs-md-6 fw-bold shadow-sm d-inline-flex align-items-center gap-2 hover-lift">
            <span>View Full Gallery</span>
            <i class="bi bi-arrow-right fs-6 fs-md-5"></i>
        </a>
    </div>

</section>

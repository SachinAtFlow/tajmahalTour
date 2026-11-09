<?php
/**
 * Tour Memories Gallery Section Component
 * File: components/gallerySection.php
 * 
 * Reusable continuous infinite marquee displaying 12-14 curated tour memories
 * with alternating artistic tilts matching the provided visual design.
 */

// Curated 14 images from the gallery-images folder
$marqueePhotos = [];
for ($mIdx = 1; $mIdx <= 14; $mIdx++) {
    $photoRel = 'assets/images/gallery-images/' . $mIdx . '.webp';
    if (file_exists(__DIR__ . '/../' . $photoRel)) {
        $marqueePhotos[] = [
            'id'    => $mIdx,
            'url'   => $photoRel,
            'title' => 'Tour Memory #' . $mIdx
        ];
    }
}

// Alternating artistic tilts & vertical offsets (matching provided design)
$cardTilts = [-5, 6, -4, 7, -6, 5, -5, 6, -4, 7, -5, 6, -4, 7];
$cardOffsets = [-8, 10, -6, 12, -10, 8, -6, 10, -8, 12, -6, 10, -8, 12];
?>

<!-- Tour Memories Marquee Section -->
<section class="py-5 bg-light position-relative overflow-hidden" id="tour-gallery-marquee">

    <div class="container py-lg-3 text-center position-relative z-1">
        
        <!-- Section Header -->
        <div class="max-w-2xl mx-auto mb-3">
            <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-2 rounded-pill fw-semibold mb-2">
                <i class="bi bi-camera-fill me-1 text-warning"></i> REAL TRAVEL EXPERIENCES
            </span>
            <h2 class="display-4 fw-bold text-dark mb-2 font-serif">
                Memories
            </h2>
            <p class="text-secondary small mb-0" style="max-width: 580px; margin: 0 auto;">
                Authentic smiles, majestic fortresses, and unforgettable road journeys captured across North India with our happy travelers.
            </p>
        </div>

    </div>

    <!-- Infinite Continuous Marquee Track -->
    <?php if (!empty($marqueePhotos)): ?>
        <div class="memories-marquee" aria-label="Tour Memories Photo Ribbon">
            <div class="memories-marquee-track">
                
                <!-- Group 1 -->
                <div class="memories-group">
                    <?php foreach ($marqueePhotos as $idx => $photo): ?>
                        <?php 
                            $photoUrl = theme_url($photo['url']);
                            $tilt = $cardTilts[$idx % count($cardTilts)];
                            $offset = $cardOffsets[$idx % count($cardOffsets)];
                        ?>
                        <a href="<?= theme_url('gallery.php'); ?>" 
                           class="memory-card" 
                           style="transform: rotate(<?= $tilt; ?>deg) translateY(<?= $offset; ?>px);"
                           title="View in Gallery">
                            
                            <img src="<?= $photoUrl; ?>" 
                                 alt="<?= htmlspecialchars($photo['title']); ?>" 
                                 loading="lazy" 
                                 decoding="async">
                            
                            <div class="memory-card-overlay">
                                <span class="badge bg-white text-dark rounded-pill px-2.5 py-1 small fw-bold shadow-xs">
                                    <i class="bi bi-geo-alt-fill text-primary me-1"></i> <?= htmlspecialchars($photo['title']); ?>
                                </span>
                            </div>
                        </a>
                    <?php endforeach; ?>
                </div>

                <!-- Group 2 (Duplicate for Seamless Infinite Marquee Loop) -->
                <div class="memories-group" aria-hidden="true">
                    <?php foreach ($marqueePhotos as $idx => $photo): ?>
                        <?php 
                            $photoUrl = theme_url($photo['url']);
                            $tilt = $cardTilts[$idx % count($cardTilts)];
                            $offset = $cardOffsets[$idx % count($cardOffsets)];
                        ?>
                        <a href="<?= theme_url('gallery.php'); ?>" 
                           class="memory-card" 
                           style="transform: rotate(<?= $tilt; ?>deg) translateY(<?= $offset; ?>px);"
                           tabindex="-1">
                            
                            <img src="<?= $photoUrl; ?>" 
                                 alt="<?= htmlspecialchars($photo['title']); ?>" 
                                 loading="lazy" 
                                 decoding="async">
                            
                            <div class="memory-card-overlay">
                                <span class="badge bg-white text-dark rounded-pill px-2.5 py-1 small fw-bold shadow-xs">
                                    <i class="bi bi-geo-alt-fill text-primary me-1"></i> <?= htmlspecialchars($photo['title']); ?>
                                </span>
                            </div>
                        </a>
                    <?php endforeach; ?>
                </div>

            </div>
        </div>
    <?php endif; ?>

    <!-- Button to gallery.php -->
    <div class="container text-center pt-2 position-relative z-1">
        <a href="<?= theme_url('gallery.php'); ?>" class="btn btn-primary rounded-pill px-5 py-3 fw-bold shadow-sm d-inline-flex align-items-center gap-2 hover-lift">
            <span>View Full Gallery</span>
            <i class="bi bi-arrow-right fs-5"></i>
        </a>
    </div>

</section>


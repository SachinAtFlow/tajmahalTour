<?php
/**
 * Where We Operate - Destinations & Regions to Explore Component
 * Modern Minimalist Horizontal Scroll Image Cards covering all 8 North India Regions.
 */
$exploreRegions = [
    [
        'name'  => 'Delhi NCR',
        'tag'   => 'Capital Tours & Airport Cabs',
        'image' => 'assets/images/delhi/indiaGate.avif',
        'link'  => 'carRentalLocation.php?city=delhi-ncr'
    ],
    [
        'name'  => 'Rajasthan',
        'tag'   => 'Jaipur, Udaipur & Palaces',
        'image' => 'assets/images/rajasthan/rajasthan.avif',
        'link'  => 'tourPackageDetail.php?tour=rajasthan'
    ],
    [
        'name'  => 'Uttar Pradesh',
        'tag'   => 'Taj Mahal, Agra & Varanasi',
        'image' => 'assets/images/uttarPradesh/tajmahal.avif',
        'link'  => 'tourPackageDetail.php?tour=uttar-pradesh'
    ],
    [
        'name'  => 'Uttarakhand',
        'tag'   => 'Rishikesh, Haridwar & Hills',
        'image' => 'assets/images/uttrakhand/uttrakhand.avif',
        'link'  => 'tourPackageDetail.php?tour=uttarakhand'
    ],
    [
        'name'  => 'Himachal Pradesh',
        'tag'   => 'Shimla, Manali & Valleys',
        'image' => 'assets/images/himachal/himachal.avif',
        'link'  => 'himachaltours/himachalholidays.html'
    ],
    [
        'name'  => 'Gujarat',
        'tag'   => 'Rann of Kutch & Heritage',
        'image' => 'assets/images/gujrat/gujrat.avif',
        'link'  => 'tourPackageDetail.php?tour=gujarat'
    ],
    [
        'name'  => 'Nepal',
        'tag'   => 'Kathmandu & Pokhara Vistas',
        'image' => 'assets/images/nepal/nepal.avif',
        'link'  => 'tourPackageDetail.php?tour=nepal'
    ],
    [
        'name'  => 'Punjab',
        'tag'   => 'Golden Temple & Amritsar',
        'image' => 'assets/images/punjab/goldenTemple.avif',
        'link'  => 'tourPackageDetail.php?tour=punjab'
    ]
];
?>

<!-- Destinations & Regions to Explore Section (Continuous Infinite Marquee) -->
<section class="py-5 bg-white position-relative overflow-hidden" id="service-area-map">
    <div class="container py-lg-4">
        
        <!-- Section Header -->
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-end mb-4 mb-lg-5 gap-3">
            <div>
                <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-1.5 rounded-pill fw-semibold small text-uppercase mb-2 d-inline-flex align-items-center gap-1">
                    <i class="bi bi-compass-fill"></i>
                    <span>Our Service Areas</span>
                </span>
                <h2 class="display-6 fw-bold text-dark mb-2">
                    Destinations to Explore in North India  
                </h2>
                <p class="text-secondary mb-0" style="max-width: 620px;">
                    Choose a region and find the best verified chauffeur cabs, same-day tours, and customized holiday packages.
                </p>
            </div>

            
        </div>

    </div>

    <!-- Infinite Marquee Track (Edge-to-Edge with Smooth Overflow) -->
    <div class="region-marquee">
        <div class="region-marquee-track" id="regionMarqueeTrack">
            <!-- Group 1 -->
            <div class="region-group">
                <?php foreach ($exploreRegions as $region): ?>
                    <a href="<?= htmlspecialchars($region['link']); ?>" class="region-image-card" title="Explore <?= htmlspecialchars($region['name']); ?>">
                        <!-- Background Image -->
                        <img 
                            src="<?= htmlspecialchars(function_exists('theme_url') ? theme_url($region['image']) : $region['image']); ?>" 
                            alt="Explore <?= htmlspecialchars($region['name']); ?> tour destinations" 
                            loading="lazy"
                        >
                        <!-- Dark Gradient Overlay -->
                        <div class="region-image-overlay"></div>
                        <!-- Card Content at Bottom -->
                        <div class="position-absolute bottom-0 start-0 end-0 p-3 z-2">
                            <h3 class="text-white fw-bold fs-5 mb-0 lh-sm"><?= htmlspecialchars($region['name']); ?></h3>
                            <span class="text-white-50 small fw-medium d-block mt-1"><?= htmlspecialchars($region['tag']); ?></span>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>

            <!-- Group 2 (Duplicate for Seamless Infinite Loop) -->
            <div class="region-group" aria-hidden="true">
                <?php foreach ($exploreRegions as $region): ?>
                    <a href="<?= htmlspecialchars($region['link']); ?>" class="region-image-card" tabindex="-1" title="Explore <?= htmlspecialchars($region['name']); ?>">
                        <!-- Background Image -->
                        <img 
                            src="<?= htmlspecialchars(function_exists('theme_url') ? theme_url($region['image']) : $region['image']); ?>" 
                            alt="Explore <?= htmlspecialchars($region['name']); ?> tour destinations" 
                            loading="lazy"
                        >
                        <!-- Dark Gradient Overlay -->
                        <div class="region-image-overlay"></div>
                        <!-- Card Content at Bottom -->
                        <div class="position-absolute bottom-0 start-0 end-0 p-3 z-2">
                            <h3 class="text-white fw-bold fs-5 mb-0 lh-sm"><?= htmlspecialchars($region['name']); ?></h3>
                            <span class="text-white-50 small fw-medium d-block mt-1"><?= htmlspecialchars($region['tag']); ?></span>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <div class="container">
        <!-- View All Destinations Button -->
        <div class="text-center mt-4 pt-2">
            <a href="index.php#featured-tours" class="btn btn-outline-primary rounded-pill px-4 py-2 fw-semibold d-inline-flex align-items-center gap-2">
                <span>View All Tour Packages</span>
                <i class="bi bi-arrow-right"></i>
            </a>
        </div>
    </div>
</section>

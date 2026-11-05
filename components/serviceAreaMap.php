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
        'image' => 'assets/images/rajasthan/jaipur.avif',
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
        'image' => 'assets/images/gujrat/gujrat-ropeway.avif',
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

<!-- Destinations & Regions to Explore Section -->
<section class="py-5 bg-white position-relative" id="service-area-map">
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

            <!-- Arrow Navigation Buttons -->
            <div class="d-flex align-items-center gap-2 flex-shrink-0">
                <button type="button" id="regionScrollPrev" class="btn btn-outline-secondary rounded-circle d-flex align-items-center justify-content-center shadow-xs" style="width: 44px; height: 44px;" aria-label="Previous destination">
                    <i class="bi bi-chevron-left fs-6"></i>
                </button>
                <button type="button" id="regionScrollNext" class="btn btn-primary rounded-circle d-flex align-items-center justify-content-center shadow-xs" style="width: 44px; height: 44px;" aria-label="Next destination">
                    <i class="bi bi-chevron-right fs-6"></i>
                </button>
            </div>
        </div>

        <!-- Scrollable Cards Row Track (8 Specific Regions) -->
        <div class="region-scroll-track" id="regionScrollTrack">
            <?php foreach ($exploreRegions as $region): ?>
                <a href="<?= htmlspecialchars($region['link']); ?>" class="region-image-card" title="Explore <?= htmlspecialchars($region['name']); ?>">
                    <!-- Background Image -->
                    <img 
                        src="<?= htmlspecialchars($region['image']); ?>" 
                        alt="<?= htmlspecialchars($region['name']); ?>" 
                        loading="lazy"
                    >
                    <!-- Dark Gradient Overlay -->
                    <div class="region-image-overlay"></div>
                    <!-- Card Content at Bottom -->
                    <div class="region-image-content">
                        <h3 class="region-image-name"><?= htmlspecialchars($region['name']); ?></h3>
                        <span class="region-image-tag"><?= htmlspecialchars($region['tag']); ?></span>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>

        <!-- View All Destinations Button -->
        <div class="text-center mt-4 pt-2">
            <a href="index.php#featured-tours" class="btn btn-outline-primary rounded-pill px-4 py-2 fw-semibold d-inline-flex align-items-center gap-2">
                <span>View All Tour Packages</span>
                <i class="bi bi-arrow-right"></i>
            </a>
        </div>

    </div>
</section>

<!-- Smooth Horizontal Scroll Controller -->
<script>
(function() {
    function initRegionScroller() {
        const track = document.getElementById('regionScrollTrack');
        const prevBtn = document.getElementById('regionScrollPrev');
        const nextBtn = document.getElementById('regionScrollNext');

        if (!track || !prevBtn || !nextBtn) return;

        const scrollAmount = 300;

        prevBtn.addEventListener('click', function() {
            track.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
        });

        nextBtn.addEventListener('click', function() {
            track.scrollBy({ left: scrollAmount, behavior: 'smooth' });
        });

        function updateButtonsState() {
            const isStart = track.scrollLeft <= 5;
            const isEnd = track.scrollLeft + track.clientWidth >= track.scrollWidth - 5;

            prevBtn.disabled = isStart;
            prevBtn.style.opacity = isStart ? '0.45' : '1';
            
            nextBtn.disabled = isEnd;
            nextBtn.style.opacity = isEnd ? '0.45' : '1';
        }

        track.addEventListener('scroll', updateButtonsState, { passive: true });
        updateButtonsState();
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initRegionScroller);
    } else {
        initRegionScroller();
    }
})();
</script>

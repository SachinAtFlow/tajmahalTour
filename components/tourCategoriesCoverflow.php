<?php
/**
 * Navbar Level 1 Tour Categories 3D Coverflow Showcase Component
 * Displays all Level 1 tour categories from navigationData.php in a modern 3D card carousel.
 */
require_once __DIR__ . '/../data/navigationData.php';

$categoryMeta = [
    'Same Day Tour' => [
        'subtitle' => 'Agra, Delhi, Mathura & Jaipur Excursions',
        'image' => 'assets/images/uttarPradesh/tajmahal.avif',
        'category' => 'same-day',
    ],
    'Tour Package' => [
        'subtitle' => 'Taj Mahal & Agra Guided Packages',
        'image' => 'assets/images/uttarPradesh/tajmahal.avif',
        'category' => 'uttar-pradesh',
    ],
    'Golden Triangle Tour' => [
        'subtitle' => 'Delhi • Agra • Jaipur Classic Circuit',
        'image' => 'assets/images/rajasthan/jaipur.avif',
        'category' => 'all',
    ],
    'Rajasthan Tour' => [
        'subtitle' => 'Jaipur, Udaipur, Jodhpur & Desert Camps',
        'image' => 'assets/images/rajasthan/jaipur.avif',
        'category' => 'rajasthan',
    ],
    'Himachal Tour' => [
        'subtitle' => 'Shimla, Manali & Solang Valley Vistas',
        'image' => 'assets/images/himachal/himachal.avif',
        'category' => 'himachal',
    ],
    'Uttarakhand Tour' => [
        'subtitle' => 'Rishikesh, Mussoorie, Nainital & Auli',
        'image' => 'assets/images/uttrakhand/uttrakhand.avif',
        'category' => 'uttarakhand',
    ],
    'Punjab Tour' => [
        'subtitle' => 'Amritsar, Golden Temple & Wagah Border',
        'image' => 'assets/images/punjab/goldenTemple.avif',
        'category' => 'punjab',
    ],
    'Uttar Pradesh Tour' => [
        'subtitle' => 'Taj Mahal, Varanasi Ghats & Ayodhya',
        'image' => 'assets/images/uttarPradesh/tajmahal.avif',
        'category' => 'uttar-pradesh',
    ],
    'Gujarat Tour' => [
        'subtitle' => 'Rann of Kutch, Somnath & Dwarka',
        'image' => 'assets/images/gujrat/gujrat-ropeway.avif',
        'category' => 'gujarat',
    ],
    'Nepal Tour' => [
        'subtitle' => 'Kathmandu, Pokhara & Everest Flights',
        'image' => 'assets/images/nepal/nepal.avif',
        'category' => 'nepal',
    ],
    'Spiritual Tour' => [
        'subtitle' => 'Char Dham, Kashi Vishwanath & Temple Trails',
        'image' => 'assets/images/uttrakhand/uttrakhand.avif',
        'category' => 'spiritual',
    ],
    'Wildlife Tour' => [
        'subtitle' => 'Corbett, Ranthambore & Tiger Reserves',
        'image' => 'assets/images/rajasthan/jaipur.avif',
        'category' => 'wildlife',
    ],
    'Weekend Tour' => [
        'subtitle' => 'Quick 2–3 Days Escapes from Delhi NCR',
        'image' => 'assets/images/delhi/indiaGate.avif',
        'category' => 'weekend',
    ],
];
?>

<!-- Navbar Level 1 Tour Categories 3D Coverflow Section -->
<section class="tour-categories-showcase position-relative" id="navbar-tour-categories">
    <div class="container position-relative z-2 mb-2">
        
        <!-- Section Header (Dark Premium Aesthetic) -->
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-end gap-3 mb-4">
            <div>
                <span class="badge bg-primary bg-opacity-20 text-white border border-primary border-opacity-30 px-3 py-1.5 rounded-pill fw-semibold small text-uppercase mb-2 d-inline-flex align-items-center gap-1.5">
                    <i class="bi bi-compass-fill text-primary"></i>
                    <span>SIGNATURE CIRCUITS</span>
                </span>
                <h2 class="display-6 fw-bold text-white mb-2">
                    Explore By Tour Category
                </h2>
                <p class="text-white-50 mb-0" style="max-width: 620px;">
                    Browse our handpicked North India tour circuits. Swipe and click any category to view curated itineraries.
                </p>
            </div>

            <!-- Custom Navigation Control Buttons -->
            <div class="d-flex align-items-center gap-2 flex-shrink-0">
                <button type="button" id="catSwiperPrev" class="btn btn-outline-light text-white rounded-circle d-flex align-items-center justify-content-center shadow-sm border-secondary border-opacity-50" style="width: 46px; height: 46px;" aria-label="Previous category">
                    <i class="bi bi-chevron-left fs-6"></i>
                </button>
                <button type="button" id="catSwiperNext" class="btn btn-primary rounded-circle d-flex align-items-center justify-content-center shadow-sm" style="width: 46px; height: 46px;" aria-label="Next category">
                    <i class="bi bi-chevron-right fs-6"></i>
                </button>
            </div>
        </div>

    </div>

    <!-- 3D Coverflow Carousel Container -->
    <div class="w-100 overflow-hidden position-relative">
        <div class="swiper category-coverflow-swiper">
            <div class="swiper-wrapper">
                <?php if (!empty($tourNavMenu)): ?>
                    <?php foreach ($tourNavMenu as $item): ?>
                        <?php
                            $title = $item['title'];
                            $meta = $categoryMeta[$title] ?? [
                                'subtitle' => 'Handcrafted Holiday Tour Packages',
                                'image' => 'assets/images/uttarPradesh/tajmahal.avif',
                                'category' => 'all',
                            ];
                            $categoryKey = $meta['category'] ?? 'all';
                        ?>
                        <div class="swiper-slide">
                            <a 
                                href="<?= htmlspecialchars($item['link']); ?>" 
                                class="w-100 h-100 d-block position-relative text-decoration-none" 
                                data-category="<?= htmlspecialchars($categoryKey); ?>"
                                title="<?= htmlspecialchars($title); ?>"
                            >
                                <!-- Background Image -->
                                <img 
                                    src="<?= htmlspecialchars($meta['image']); ?>" 
                                    alt="<?= htmlspecialchars($title); ?>" 
                                    loading="lazy"
                                >
                                
                                <!-- Cinematic Dark Overlay -->
                                <div class="category-coverflow-overlay"></div>

                                <!-- Card Content at Bottom (Matching User Reference Image) -->
                                <div class="position-absolute bottom-0 start-0 end-0 p-4 z-2">
                                    <h3 class="text-white fw-bold fs-4 mb-1 lh-sm">
                                        <?= htmlspecialchars($title); ?>
                                    </h3>
                                    <p class="text-white text-opacity-75 small mb-0 fw-medium">
                                        <?= htmlspecialchars($meta['subtitle']); ?>
                                    </p>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>

            <!-- Pagination Dots -->
            <div class="cat-swiper-pagination text-center mt-3"></div>
        </div>
    </div>
</section>

<!-- Robust Swiper Coverflow Controller -->
<script>
(function() {
    function initCategoryCoverflow() {
        const swiperEl = document.querySelector('.category-coverflow-swiper');
        if (!swiperEl) return;

        // If Swiper CDN hasn't loaded yet, retry in 100ms
        if (typeof Swiper === 'undefined') {
            setTimeout(initCategoryCoverflow, 100);
            return;
        }

        // Prevent double initialization
        if (swiperEl.swiper) return;

        const catSwiper = new Swiper(swiperEl, {
            effect: 'coverflow',
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: 'auto',
            initialSlide: 1,
            loop: true,
            speed: 650,
            slideToClickedSlide: true,
            preventClicks: false,
            autoplay: {
                delay: 3800,
                disableOnInteraction: false,
                pauseOnMouseEnter: true,
            },
            coverflowEffect: {
                rotate: 0,
                stretch: 20,
                depth: 220,
                modifier: 1,
                slideShadows: false,
            },
            navigation: {
                nextEl: '#catSwiperNext',
                prevEl: '#catSwiperPrev',
            },
            pagination: {
                el: '.cat-swiper-pagination',
                clickable: true,
            },
            breakpoints: {
                320: {
                    coverflowEffect: {
                        depth: 90,
                        stretch: 10,
                        modifier: 1,
                    }
                },
                768: {
                    coverflowEffect: {
                        depth: 170,
                        stretch: 15,
                        modifier: 1,
                    }
                },
                1024: {
                    coverflowEffect: {
                        depth: 220,
                        stretch: 20,
                        modifier: 1,
                    }
                }
            }
        });

        // Click Handler: Clicking the active center card triggers smooth category filter
        swiperEl.querySelectorAll('.swiper-slide').forEach(slide => {
            slide.addEventListener('click', function(e) {
                // If it's already the active center slide, jump & filter
                if (slide.classList.contains('swiper-slide-active')) {
                    const link = slide.querySelector('a');
                    if (!link) return;

                    const category = link.getAttribute('data-category');
                    const targetSection = document.getElementById('featured-tours');

                    if (targetSection && category) {
                        e.preventDefault();
                        targetSection.scrollIntoView({ behavior: 'smooth' });

                        const targetBtn = document.querySelector(`.tour-filter-btn[data-category="${category}"]`);
                        if (targetBtn) {
                            targetBtn.click();
                        }
                        if (window.history && window.history.pushState) {
                            window.history.pushState(null, '', 'tourPackage.php?category=' + encodeURIComponent(category) + '#featured-tours');
                        }
                    }
                }
            });
        });
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initCategoryCoverflow);
    } else {
        initCategoryCoverflow();
    }
    window.addEventListener('load', initCategoryCoverflow);
})();
</script>

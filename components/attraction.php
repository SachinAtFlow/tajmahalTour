<?php
/**
 * Dynamic 3D Coverflow Attraction / Tour Category Showcase Component
 * File: components/attraction.php
 * 
 * Supports dynamic configuration per section & page:
 * - $attraction_key         : Key from data/attractionData.php ('tourCategories', 'popularAttractions', etc.)
 * - $attraction_eyebrow     : Custom badge eyebrow text (e.g., 'SIGNATURE CIRCUITS')
 * - $attraction_icon        : Custom badge icon (e.g., 'bi bi-compass-fill')
 * - $attraction_title       : Custom section main title (e.g., 'Explore By Tour Category')
 * - $attraction_description : Custom section description paragraph
 * - $attraction_items       : Direct array of custom items [ ['title'=>..., 'subtitle'=>..., 'image'=>..., 'link'=>..., 'category'=>...] ]
 * - $attraction_id          : Custom section HTML id (e.g., 'navbar-tour-categories')
 */

require_once __DIR__ . '/../data/attractionData.php';

// 1. Resolve Dataset Defaults
$active_dataset_key = $attraction_key ?? 'tourCategories';
$default_dataset = getAttractionData($active_dataset_key);

// 2. Resolve Configurable Content (Page overrides take precedence)
$resolved_eyebrow     = $attraction_eyebrow     ?? ($default_dataset['eyebrow'] ?? 'SIGNATURE CIRCUITS');
$resolved_icon        = $attraction_icon        ?? ($default_dataset['icon'] ?? 'bi bi-compass-fill');
$resolved_title       = $attraction_title       ?? ($default_dataset['title'] ?? 'Explore By Tour Category');
$resolved_description = $attraction_description ?? ($default_dataset['description'] ?? 'Browse our handpicked North India tour circuits.');
$resolved_items       = $attraction_items       ?? ($default_dataset['items'] ?? []);

// 3. Unique Instance Identifier (allows multiple carousels on the same or different pages)
$instance_id   = 'attraction_' . substr(md5(uniqid((string)mt_rand(), true)), 0, 8);
$section_id    = !empty($attraction_id) ? $attraction_id : 'showcase-' . $instance_id;
$prev_btn_id   = 'prev-' . $instance_id;
$next_btn_id   = 'next-' . $instance_id;
$swiper_id     = 'swiper-' . $instance_id;
$pagination_id = 'pagination-' . $instance_id;
?>

<!-- Zero-artifact Inline Styles for 3D Coverflow on White Background -->
<style>
/* Prevent horizontal window scrollbar flash during 3D transform */
html, body {
    overflow-x: clip !important;
    overflow-x: hidden !important;
    max-width: 100vw !important;
}

#<?= $section_id; ?> {
    overflow: hidden !important;
    contain: paint !important;
    max-width: 100vw !important;
    background-color: #ffffff !important;
}

#<?= $section_id; ?> .category-coverflow-swiper {
    overflow: hidden !important;
    contain: paint !important;
}

/* Eliminate all Swiper coverflow slide shadow elements & borders */
#<?= $section_id; ?> [class*="swiper-slide-shadow"],
#<?= $section_id; ?> .swiper-slide-shadow-left,
#<?= $section_id; ?> .swiper-slide-shadow-right {
    display: none !important;
    opacity: 0 !important;
    visibility: hidden !important;
    width: 0 !important;
    height: 0 !important;
    pointer-events: none !important;
}

#<?= $section_id; ?> .swiper-slide a {
    outline: none !important;
    border: none !important;
    box-shadow: none !important;
    -webkit-tap-highlight-color: transparent !important;
}

#<?= $section_id; ?> .swiper-slide img {
    user-select: none !important;
    -webkit-user-drag: none !important;
    pointer-events: none !important;
}

/* High contrast pagination on white background */
#<?= $section_id; ?> .cat-swiper-pagination .swiper-pagination-bullet {
    width: 8px;
    height: 8px;
    background-color: #94a3b8 !important;
    opacity: 0.45;
    transition: all 0.3s ease;
}

#<?= $section_id; ?> .cat-swiper-pagination .swiper-pagination-bullet-active {
    width: 26px;
    border-radius: 20px;
    background-color: var(--primary-color) !important;
    opacity: 1;
}
</style>

<!-- Attraction 3D Coverflow Section -->
<section class="tour-categories-showcase bg-white position-relative py-5" id="<?= htmlspecialchars($section_id); ?>">
    <div class="container position-relative z-2 mb-2">
        
        <!-- Section Header (Clean High-Contrast on White Background) -->
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-end gap-3 mb-4">
            <div>
                <?php if (!empty($resolved_eyebrow)): ?>
                    <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-1.5 rounded-pill fw-semibold small text-uppercase mb-2 d-inline-flex align-items-center gap-1.5">
                        <i class="<?= htmlspecialchars($resolved_icon); ?>"></i>
                        <span><?= htmlspecialchars($resolved_eyebrow); ?></span>
                    </span>
                <?php endif; ?>
                
                <h2 class="display-6 fw-bold text-dark mb-2">
                    <?= htmlspecialchars($resolved_title); ?>
                </h2>
                
                <?php if (!empty($resolved_description)): ?>
                    <p class="text-secondary mb-0" style="max-width: 620px;">
                        <?= htmlspecialchars($resolved_description); ?>
                    </p>
                <?php endif; ?>
            </div>

            <!-- Custom Navigation Control Buttons -->
            <div class="d-flex align-items-center gap-2 flex-shrink-0">
                <button type="button" id="<?= $prev_btn_id; ?>" class="btn btn-outline-secondary rounded-circle d-flex align-items-center justify-content-center shadow-xs" style="width: 44px; height: 44px;" aria-label="Previous card">
                    <i class="bi bi-chevron-left fs-6"></i>
                </button>
                <button type="button" id="<?= $next_btn_id; ?>" class="btn btn-primary rounded-circle d-flex align-items-center justify-content-center shadow-xs" style="width: 44px; height: 44px;" aria-label="Next card">
                    <i class="bi bi-chevron-right fs-6"></i>
                </button>
            </div>
        </div>

    </div>

    <!-- 3D Coverflow Carousel Container -->
    <div class="w-100 position-relative" style="overflow: hidden !important; contain: paint; max-width: 100vw;">
        <div class="swiper category-coverflow-swiper w-100 position-relative z-2 overflow-hidden text-decoration-none d-block h-100" id="<?= $swiper_id; ?>">
            <div class="swiper-wrapper">
                <?php if (!empty($resolved_items)): ?>
                    <?php foreach ($resolved_items as $item): ?>
                        <?php
                            $card_title    = $item['title'] ?? '';
                            $card_subtitle = $item['subtitle'] ?? '';
                            $card_image    = $item['image'] ?? 'assets/images/uttarPradesh/tajmahal.avif';
                            $card_link     = $item['link'] ?? '#';
                            $card_category = $item['category'] ?? 'all';
                        ?>
                        <div class="swiper-slide">
                            <a 
                                href="<?= htmlspecialchars(function_exists('theme_url') ? theme_url($card_link) : $card_link); ?>" 
                                class="w-100 h-100 d-block position-relative text-decoration-none" 
                                data-category="<?= htmlspecialchars($card_category); ?>"
                                title="<?= htmlspecialchars($card_title); ?>"
                            >
                                <!-- Background Image -->
                                <img 
                                    src="<?= htmlspecialchars(function_exists('theme_url') ? theme_url($card_image) : $card_image); ?>" 
                                    alt="<?= htmlspecialchars(!empty($card_title) ? $card_title . ' - Destination Tour' : 'Attraction Tour'); ?>" 
                                    loading="lazy"
                                    draggable="false"
                                >
                                
                                <!-- Cinematic Dark Overlay -->
                                <div class="category-coverflow-overlay position-absolute"></div>

                                <!-- Card Content at Bottom (Matching User Reference Image) -->
                                <div class="position-absolute bottom-0 start-0 end-0 p-4 z-2">
                                    <h3 class="text-white fw-bold fs-4 mb-1 lh-sm">
                                        <?= htmlspecialchars($card_title); ?>
                                    </h3>
                                    <p class="text-white text-opacity-75 small mb-0 fw-medium">
                                        <?= htmlspecialchars($card_subtitle); ?>
                                    </p>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>

            <!-- Pagination Dots -->
            <div class="cat-swiper-pagination <?= $pagination_id; ?> text-center mt-3"></div>
        </div>
    </div>
</section>

<!-- Robust Swiper Coverflow Controller for this Instance -->
<script>
(function() {
    function initCoverflow_<?= str_replace('-', '_', $instance_id); ?>() {
        const swiperEl = document.getElementById('<?= $swiper_id; ?>');
        if (!swiperEl) return;

        // If Swiper CDN hasn't loaded yet, retry in 100ms
        if (typeof Swiper === 'undefined') {
            setTimeout(initCoverflow_<?= str_replace('-', '_', $instance_id); ?>, 100);
            return;
        }

        // Prevent double initialization
        if (swiperEl.swiper) return;

        // Strip any shadow elements from DOM
        function removeShadowArtifacts(container) {
            if (!container) return;
            const shadows = container.querySelectorAll('[class*="swiper-slide-shadow"]');
            shadows.forEach(function(el) { el.remove(); });
        }

        const coverflowSwiper = new Swiper(swiperEl, {
            effect: 'coverflow',
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: 'auto',
            initialSlide: 1,
            loop: <?= count($resolved_items) > 3 ? 'true' : 'false'; ?>,
            speed: 600,
            slideToClickedSlide: false,
            preventClicks: true,
            preventClicksPropagation: false,
            autoplay: {
                delay: 3800,
                disableOnInteraction: false,
                pauseOnMouseEnter: true,
            },
            coverflowEffect: {
                rotate: 0,
                stretch: 0,
                depth: 180,
                modifier: 1,
                slideShadows: false,
            },
            navigation: {
                nextEl: '#<?= $next_btn_id; ?>',
                prevEl: '#<?= $prev_btn_id; ?>',
            },
            pagination: {
                el: '.<?= $pagination_id; ?>',
                clickable: true,
            },
            breakpoints: {
                320: {
                    coverflowEffect: {
                        depth: 80,
                        stretch: 0,
                        modifier: 1,
                        slideShadows: false,
                    }
                },
                768: {
                    coverflowEffect: {
                        depth: 140,
                        stretch: 0,
                        modifier: 1,
                        slideShadows: false,
                    }
                },
                1024: {
                    coverflowEffect: {
                        depth: 180,
                        stretch: 0,
                        modifier: 1,
                        slideShadows: false,
                    }
                }
            },
            on: {
                init: function() {
                    removeShadowArtifacts(this.el);
                },
                slideChangeTransitionStart: function() {
                    removeShadowArtifacts(this.el);
                },
                setTranslate: function() {
                    removeShadowArtifacts(this.el);
                }
            }
        });

        // Click Handler: Clicking any card opens its respective page
        coverflowSwiper.on('click', function(swiper, e) {
            const clickedSlide = swiper.clickedSlide;
            if (!clickedSlide) return;
            const link = clickedSlide.querySelector('a');
            if (link && link.href && link.href !== '#' && !link.href.endsWith('#')) {
                window.location.href = link.href;
            }
        });
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initCoverflow_<?= str_replace('-', '_', $instance_id); ?>);
    } else {
        initCoverflow_<?= str_replace('-', '_', $instance_id); ?>();
    }
    window.addEventListener('load', initCoverflow_<?= str_replace('-', '_', $instance_id); ?>);
})();
</script>

<?php
// Clean up temporary variables so subsequent inclusions won't inherit stale values
unset(
    $attraction_key,
    $attraction_eyebrow,
    $attraction_icon,
    $attraction_title,
    $attraction_description,
    $attraction_items,
    $attraction_id,
    $active_dataset_key,
    $default_dataset,
    $resolved_eyebrow,
    $resolved_icon,
    $resolved_title,
    $resolved_description,
    $resolved_items,
    $instance_id,
    $section_id,
    $prev_btn_id,
    $next_btn_id,
    $swiper_id,
    $pagination_id
);
?>

<?php
/**
 * Testimonials Component
 * File: components/testimonials.php
 * 
 * Pure Bootstrap 5 markup with external data and resilient Swiper controller.
 */
require_once __DIR__ . '/../data/testimonialData.php';
$testimonials = !empty($testimonialData) ? $testimonialData : (!empty($location_reviews) ? $location_reviews : []);
$testimonialCount = !empty($testimonials) ? count($testimonials) : 0;
?>

<!-- Testimonials Section -->
<section class="bg-light py-5 position-relative overflow-hidden" id="testimonials">
    <div class="container py-lg-4">
        
        <!-- Section Heading -->
        <div class="row justify-content-center text-center mb-4 mb-lg-5">
            <div class="col-lg-8">
                <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-2 rounded-pill fw-semibold mb-2">
                    <i class="bi bi-chat-heart-fill me-1"></i> REAL TRAVELER EXPERIENCES
                </span>
                <h2 class="fw-bold text-dark mb-2">Loved by Travelers Worldwide</h2>
                <p class="text-secondary mb-0">Discover authentic stories from guests who experienced Agra with our certified guides and private tours.</p>
            </div>
        </div>

        <!-- Swiper Container Card -->
        <div class="swiper testimonial-swiper bg-white rounded-4 shadow-sm p-4 p-md-5 border border-light-subtle">
            <div class="swiper-wrapper">
                <?php if (!empty($testimonials)): ?>
                    <?php foreach ($testimonials as $index => $item): ?>
                        <?php 
                            $rawImg = $item['image'] ?? 'assets/images/others/reviewers/avatar1.jpg';
                            // Normalize avatar name if simple format given e.g. "avatar1"
                            if (!empty($rawImg) && strpos($rawImg, '/') === false) {
                                if (strpos($rawImg, '.jpg') === false && strpos($rawImg, '.png') === false) {
                                    $rawImg .= '.jpg';
                                }
                                $rawImg = 'assets/images/others/reviewers/' . $rawImg;
                            }
                            $imgSrc = function_exists('theme_url') ? theme_url($rawImg) : $rawImg;
                            $quoteText = !empty($item['review']) ? $item['review'] : (!empty($item['quote']) ? $item['quote'] : '');
                            $tourName = !empty($item['reviewOf']) ? $item['reviewOf'] : (!empty($item['tour']) ? $item['tour'] : 'Taj Mahal Tour Agra Delhi Hire Car and Driver');
                            $authorName = !empty($item['name']) ? $item['name'] : 'Traveler';
                            $ratingVal = (int)(!empty($item['rating']) ? $item['rating'] : 5);
                            $roleText = !empty($item['travelled']) ? 'Travelled ' . $item['travelled'] : (!empty($item['role']) ? $item['role'] : 'Verified Traveler');
                            $locationText = !empty($item['location']) ? $item['location'] : (!empty($item['visited']) ? 'Visited in ' . $item['visited'] : 'Verified Review');
                        ?>
                        <div class="swiper-slide <?= $index === 0 ? 'swiper-slide-active' : ''; ?>">
                            <div class="row align-items-center g-4 g-lg-5">
                                
                                <!-- Left Column: Circular User Avatar -->
                                <div class="col-md-5 col-lg-4 text-center">
                                    <div class="position-relative d-inline-block">
                                        <div class="testimonial-avatar-wrapper mx-auto">
                                            <img 
                                                src="<?php echo htmlspecialchars($imgSrc); ?>" 
                                                alt="<?php echo htmlspecialchars($authorName); ?>" 
                                                class="w-100 h-100 rounded-circle object-fit-cover"
                                                loading="lazy"
                                            >
                                        </div>
                                        <!-- Verified Floating Icon -->
                                        <span class="position-absolute bottom-0 end-0 bg-white shadow-sm rounded-circle p-2 border border-2 border-white d-flex align-items-center justify-content-center translate-middle" style="width: 44px; height: 44px;">
                                            <i class="bi bi-patch-check-fill text-primary fs-5"></i>
                                        </span>
                                    </div>
                                    <div class="mt-3">
                                        <span class="badge bg-light text-secondary border px-3 py-2 rounded-pill small fw-semibold">
                                            <i class="bi bi-geo-alt-fill text-primary me-1"></i><?php echo htmlspecialchars($tourName); ?>
                                        </span>
                                    </div>
                                </div>

                                <!-- Right Column: Quote & Author Details -->
                                <div class="col-md-7 col-lg-8">
                                    <div class="position-relative z-1 px-lg-3">
                                        
                                        <!-- Star Ratings -->
                                        <div class="d-flex align-items-center gap-1 mb-3">
                                            <?php for ($i = 0; $i < $ratingVal; $i++): ?>
                                                <i class="bi bi-star-fill text-warning fs-5"></i>
                                            <?php endfor; ?>
                                            <span class="text-secondary small ms-2 fw-semibold">(5.0 / 5.0)</span>
                                        </div>

                                        <!-- Decorative Quote Mark & Review Text -->
                                        <div class="position-relative mb-4">
                                            <span class="testimonial-quote-mark position-absolute top-0 start-0 user-select-none opacity-25">&ldquo;</span>
                                            <p class="fs-4 fw-medium text-dark lh-base position-relative z-1 mb-0 fst-normal">
                                                "<?php echo htmlspecialchars($quoteText); ?>"
                                            </p>
                                        </div>

                                        <!-- Reviewer Attribution & Navigation Controls -->
                                        <div class="border-top pt-3 d-flex flex-wrap justify-content-between align-items-center gap-3">
                                            <div>
                                                <h5 class="fw-bold text-dark mb-1">
                                                    <?php echo htmlspecialchars($authorName); ?>
                                                </h5>
                                                <p class="text-secondary small mb-0">
                                                    <span class="fw-semibold text-dark"><?php echo htmlspecialchars($roleText); ?></span> &middot; <?php echo htmlspecialchars($locationText); ?>
                                                </p>
                                            </div>

                                            <!-- Navigation Buttons (Bootstrap Buttons with delegated event listeners) -->
                                            <div class="d-flex gap-2">
                                                <button type="button" class="btn btn-outline-primary rounded-circle d-inline-flex align-items-center justify-content-center p-0 testimonial-btn-prev shadow-xs" style="width: 42px; height: 42px;" aria-label="Previous Slide">
                                                    <i class="bi bi-chevron-left"></i>
                                                </button>
                                                <button type="button" class="btn btn-outline-primary rounded-circle d-inline-flex align-items-center justify-content-center p-0 testimonial-btn-next shadow-xs" style="width: 42px; height: 42px;" aria-label="Next Slide">
                                                    <i class="bi bi-chevron-right"></i>
                                                </button>
                                            </div>
                                        </div>

                                        <!-- Pagination Bullets (Synchronized across all slides) -->
                                        <div class="testimonial-pagination d-flex align-items-center gap-2 mt-4" role="tablist">
                                            <?php for ($b = 0; $b < $testimonialCount; $b++): ?>
                                                <span 
                                                    class="swiper-pagination-bullet <?= $b === 0 ? 'swiper-pagination-bullet-active' : ''; ?>" 
                                                    data-slide-index="<?= $b; ?>" 
                                                    role="button" 
                                                    tabindex="0"
                                                    aria-label="Go to testimonial <?= $b + 1; ?>"
                                                ></span>
                                            <?php endfor; ?>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>

        <!-- Write a Review on Google Action Button -->
        <div class="d-flex justify-content-center align-items-center text-center mt-4 pt-2">
            <a href="https://share.google/YvijXnULif0EI5xRG" target="_blank" class="hc-btn-google" rel="noopener noreferrer">
                <svg class="hc-btn-icon" width="20" height="20" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                    <path fill="#EA4335" d="M24 9.5c3.1 0 5.8 1.1 7.9 2.9l5.9-5.9C34.2 3.4 29.4 1 24 1 14.9 1 7.2 6.5 3.8 14.3l6.9 5.4C12.4 13.4 17.7 9.5 24 9.5z"></path>
                    <path fill="#4285F4" d="M46.6 24.5c0-1.6-.1-3.1-.4-4.5H24v8.5h12.7c-.5 2.8-2.2 5.2-4.7 6.8l7.3 5.7c4.3-3.9 6.3-9.7 6.3-16.5z"></path>
                    <path fill="#FBBC05" d="M10.7 28.3C10.2 26.9 10 25.5 10 24s.2-2.9.7-4.3L3.8 14.3C2.1 17.6 1 21.2 1 24c0 2.8 1.1 6.4 2.8 9.7l6.9-5.4z"></path>
                    <path fill="#34A853" d="M24 47c5.4 0 10-1.8 13.3-4.8l-7.3-5.7c-1.8 1.2-4 1.9-6 1.9-6.3 0-11.6-3.9-13.3-9.1l-6.9 5.4C7.2 41.5 14.9 47 24 47z"></path>
                </svg>
                <span>Write a Review on Google</span>
            </a>
        </div>

    </div>
</section>

<!-- Self-Healing Controller for Testimonials Swiper (guarantees execution on all pages) -->
<script>
(function() {
    function ensureTestimonialSwiper() {
        if (typeof window.initTestimonialSwiper === 'function') {
            window.initTestimonialSwiper();
            return;
        }

        const testimonialEl = document.querySelector('.testimonial-swiper');
        if (!testimonialEl) return;

        if (typeof Swiper === 'undefined') {
            setTimeout(ensureTestimonialSwiper, 150);
            return;
        }

        if (testimonialEl.swiper) return;

        function syncBullets(realIndex) {
            testimonialEl.querySelectorAll('.testimonial-pagination').forEach(pagContainer => {
                const bullets = pagContainer.querySelectorAll('.swiper-pagination-bullet');
                bullets.forEach((bullet, idx) => {
                    if (idx === realIndex) {
                        bullet.classList.add('swiper-pagination-bullet-active');
                    } else {
                        bullet.classList.remove('swiper-pagination-bullet-active');
                    }
                });
            });
        }

        const swiper = new Swiper(testimonialEl, {
            effect: 'fade',
            fadeEffect: { crossFade: true },
            loop: true,
            speed: 650,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
                pauseOnMouseEnter: true
            },
            on: {
                init: function () { syncBullets(this.realIndex); },
                slideChange: function () { syncBullets(this.realIndex); }
            }
        });

        testimonialEl.addEventListener('click', function (e) {
            const nextBtn = e.target.closest('.testimonial-btn-next');
            if (nextBtn) {
                e.preventDefault();
                swiper.slideNext();
                return;
            }
            const prevBtn = e.target.closest('.testimonial-btn-prev');
            if (prevBtn) {
                e.preventDefault();
                swiper.slidePrev();
                return;
            }
            const bullet = e.target.closest('.swiper-pagination-bullet');
            if (bullet) {
                e.preventDefault();
                const slideIdx = parseInt(bullet.getAttribute('data-slide-index'), 10);
                if (!isNaN(slideIdx)) swiper.slideToLoop(slideIdx);
            }
        });
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', ensureTestimonialSwiper);
    } else {
        ensureTestimonialSwiper();
    }
})();
</script>

<?php
/**
 * Testimonials Component
 * Pure Bootstrap 5 markup with external data and JS initialization.
 */
require_once __DIR__ . '/../data/testimonialData.php';
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
                <?php if (!empty($testimonialData)): ?>
                    <?php foreach ($testimonialData as $item): ?>
                        <div class="swiper-slide">
                            <div class="row align-items-center g-4 g-lg-5">
                                
                                <!-- Left Column: Circular User Avatar -->
                                <div class="col-md-5 col-lg-4 text-center">
                                    <div class="position-relative d-inline-block">
                                        <div class="testimonial-avatar-wrapper mx-auto">
                                            <img 
                                                src="<?php echo htmlspecialchars($item['image']); ?>" 
                                                alt="<?php echo htmlspecialchars($item['name']); ?>" 
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
                                            <i class="bi bi-geo-alt-fill text-primary me-1"></i><?php echo htmlspecialchars($item['tour']); ?>
                                        </span>
                                    </div>
                                </div>

                                <!-- Right Column: Quote & Author Details -->
                                <div class="col-md-7 col-lg-8">
                                    <div class="position-relative z-1 px-lg-3">
                                        
                                        <!-- Star Ratings -->
                                        <div class="d-flex align-items-center gap-1 mb-3">
                                            <?php for ($i = 0; $i < (int)$item['rating']; $i++): ?>
                                                <i class="bi bi-star-fill text-warning fs-5"></i>
                                            <?php endfor; ?>
                                            <span class="text-secondary small ms-2 fw-semibold">(5.0 / 5.0)</span>
                                        </div>

                                        <!-- Decorative Quote Mark & Review Text -->
                                        <div class="position-relative mb-4">
                                            <span class="testimonial-quote-mark position-absolute top-0 start-0 user-select-none opacity-25">&ldquo;</span>
                                            <p class="fs-4 fw-medium text-dark lh-base position-relative z-1 mb-0 fst-normal">
                                                "<?php echo htmlspecialchars($item['quote']); ?>"
                                            </p>
                                        </div>

                                        <!-- Reviewer Attribution & Navigation Controls -->
                                        <div class="border-top pt-3 d-flex flex-wrap justify-content-between align-items-center gap-3">
                                            <div>
                                                <h5 class="fw-bold text-dark mb-1">
                                                    <?php echo htmlspecialchars($item['name']); ?>
                                                </h5>
                                                <p class="text-secondary small mb-0">
                                                    <span class="fw-semibold text-dark"><?php echo htmlspecialchars($item['role']); ?></span> &middot; <?php echo htmlspecialchars($item['location']); ?>
                                                </p>
                                            </div>

                                            <!-- Navigation Buttons (Bootstrap Buttons) -->
                                            <div class="d-flex gap-2">
                                                <button type="button" class="btn btn-outline-secondary rounded-circle d-inline-flex align-items-center justify-content-center p-0 testimonial-nav-btn testimonial-btn-prev" aria-label="Previous Slide">
                                                    <i class="bi bi-chevron-left"></i>
                                                </button>
                                                <button type="button" class="btn btn-outline-secondary rounded-circle d-inline-flex align-items-center justify-content-center p-0 testimonial-nav-btn testimonial-btn-next" aria-label="Next Slide">
                                                    <i class="bi bi-chevron-right"></i>
                                                </button>
                                            </div>
                                        </div>

                                        <!-- Pagination Bullets -->
                                        <div class="testimonial-pagination"></div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>

    </div>
</section>

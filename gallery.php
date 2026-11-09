<?php
/**
 * Tour & Fleet Gallery Page
 * File: gallery.php
 * 
 * Minimalist, Modern & Responsive Justified Linear Photo Wall
 * Showcase of candid travel moments across North India and royal circuits.
 */

$page_title = "Tour & Fleet Gallery - Real Moments & Memories | Taj Mahal Tour";
require_once __DIR__ . '/data/galleryData.php';
require_once __DIR__ . '/includes/header.php';

$galleryImages = get_gallery_images();
$totalCount = count($galleryImages);
$initialBatch = 30; // Initial photos to show for optimal performance
?>

<main id="gallery-page">

    <!-- 2. Page Hero Banner -->
    <section class="position-relative py-5 bg-dark text-white text-center overflow-hidden" id="gallery-hero-banner" style="background: linear-gradient(rgba(15, 23, 42, 0.78), rgba(15, 23, 42, 0.88)), url('<?= theme_url('assets/images/uttarPradesh/tajmahal.avif'); ?>') center/cover no-repeat; min-height: 290px;">
        <div class="position-absolute top-0 end-0 bottom-0 start-0 opacity-20 pointer-events-none" style="background-image: radial-gradient(#3B71FE 1px, transparent 1px); background-size: 28px 28px;"></div>
        
        <div class="container position-relative z-1 py-4 py-lg-5">
            <span class="badge bg-primary bg-opacity-25 text-white border border-light border-opacity-25 px-3 py-2 rounded-pill fw-semibold mb-3">
                <i class="bi bi-camera-fill me-1 text-warning"></i> REAL MOMENTS & MEMORIES
            </span>
            <h1 class="display-4 fw-bold text-white mb-2 font-serif">
                Tour & Fleet Gallery
            </h1>
            <p class="lead text-white-50 fs-6 max-w-2xl mx-auto mb-0" style="max-width: 650px;">
                Candid moments, smiling passengers, and iconic destinations captured on road trips across Delhi, Agra, Rajasthan, Himachal Pradesh, Punjab, and Uttarakhand.
            </p>
        </div>
    </section>

    <!-- 3. Justified Linear Photo Wall Section -->
    <section class="py-5 bg-white position-relative" id="gallery-photo-wall">
        
        <!-- Ambient Background Glow -->
        <div class="position-absolute top-0 start-50 translate-middle-x pointer-events-none" style="width: 600px; height: 300px; background: radial-gradient(circle, rgba(59, 113, 254, 0.08) 0%, rgba(59, 113, 254, 0) 70%); filter: blur(50px); z-index: 0;"></div>

        <div class="container-fluid px-3 px-sm-4 px-lg-5 position-relative z-1" style="max-width: 1750px;">
            
            <!-- Section Header & Counter -->
            <div class="text-center max-w-3xl mx-auto mb-4 mb-lg-5">
                <h2 class="display-6 fw-bold text-dark mb-2 font-serif">
                    Our Visual Journey Across North India
                </h2>
                <p class="text-secondary small mb-3" style="max-width: 600px; margin: 0 auto;">
                    Click any photo to explore in high resolution. From majestic sunrise views at the Taj Mahal to serene mountain passes and desert sunsets.
                </p>
                <div class="d-inline-flex align-items-center gap-2 bg-light border px-3 py-1.5 rounded-pill shadow-2xs">
                    <i class="bi bi-images text-primary"></i>
                    <span class="small fw-bold text-dark" id="gallery-counter-display">
                        Showing <span id="visible-count"><?= min($initialBatch, $totalCount); ?></span> of <?= $totalCount; ?> Curated Photos
                    </span>
                </div>
            </div>

            <!-- Justified Linear Photo Wall Grid -->
            <?php if (!empty($galleryImages)): ?>
                <div class="gallery-justified-container" id="photo-wall-grid">
                    <?php foreach ($galleryImages as $index => $img): ?>
                        <?php 
                            $imgUrl = theme_url($img['url']);
                            $isExtra = ($index >= $initialBatch);
                            $extraClass = $isExtra ? 'd-none gallery-hidden-item' : '';
                        ?>
                        <div class="gallery-justified-item <?= $extraClass; ?>"
                             style="--aspect-ratio: <?= $img['ratio']; ?>;"
                             onclick="openGalleryModal(<?= $index; ?>)"
                             role="button"
                             tabindex="0"
                             data-index="<?= $index; ?>"
                             aria-label="<?= htmlspecialchars($img['name']); ?>">
                            
                            <img src="<?= $imgUrl; ?>" 
                                 alt="<?= htmlspecialchars($img['name']); ?>" 
                                 loading="lazy" 
                                 decoding="async"
                                 onerror="this.onerror=null; this.src='<?= theme_url('assets/images/uttarPradesh/tajmahal.avif'); ?>';" />
                            
                            <!-- Hover Overlay -->
                            <div class="gallery-hover-overlay">
                                <span class="gallery-zoom-pill" title="View Fullscreen">
                                    <i class="bi bi-arrows-fullscreen"></i>
                                </span>
                                <span class="gallery-title-pill">
                                    <?= htmlspecialchars($img['name']); ?>
                                </span>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <!-- Load More Button -->
                <?php if ($totalCount > $initialBatch): ?>
                    <div class="text-center mt-5" id="load-more-wrapper">
                        <button type="button" 
                                id="btn-load-more" 
                                class="btn btn-outline-primary rounded-pill px-5 py-3 fw-bold shadow-sm d-inline-flex align-items-center gap-2 hover-lift"
                                onclick="loadMoreGalleryPhotos()">
                            <span>Load More Memories</span>
                            <span class="badge bg-primary text-white rounded-pill px-2.5 py-1 ms-1" id="remaining-count">
                                <?= $totalCount - $initialBatch; ?> more
                            </span>
                        </button>
                    </div>
                <?php endif; ?>

            <?php else: ?>
                <div class="text-center py-5 text-secondary">
                    <i class="bi bi-images display-3 text-muted mb-3 d-block"></i>
                    <p class="fs-5">No gallery images found at this time.</p>
                </div>
            <?php endif; ?>

            <!-- Bottom Floating Booking Assist Card -->
            <div class="mt-5 pt-3 text-center">
                <div class="d-inline-flex flex-wrap align-items-center justify-content-center gap-3 p-2 px-4 rounded-pill bg-light border shadow-sm">
                    <span class="small text-secondary fw-medium">
                        Want to create unforgettable travel memories across North India?
                    </span>
                    <a href="<?= theme_url('tourPackage.php'); ?>" class="btn btn-sm btn-primary rounded-pill px-4 py-2 fw-semibold d-inline-flex align-items-center gap-2 shadow-xs">
                        <span>Book Your Tour Cab</span>
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>

        </div>
    </section>

    <!-- 4. Client Testimonials Component (Reusable) -->
    <?php require_once __DIR__ . '/components/testimonials.php'; ?>

    <!-- 5. Frequently Asked Questions (Reusable) -->
    <?php require_once __DIR__ . '/components/faq.php'; ?>

    <!-- 6. Final Booking Call to Action (Reusable) -->
    <?php require_once __DIR__ . '/components/cta.php'; ?>

</main>

<!-- ========================================================
     CLEAN FRAMELESS FULLSCREEN LIGHTBOX MODAL
     ======================================================== -->
<div id="gallery-lightbox-modal" 
     role="dialog" 
     aria-modal="true" 
     aria-label="Photo Preview"
     onclick="handleModalBackdropClick(event)">
    
    <!-- Top Counter Badge -->
    <div class="gallery-modal-counter" id="modal-counter-badge">
        Memory <span id="modal-current-idx">1</span> / <?= $totalCount; ?>
    </div>

    <!-- Floating Close Button -->
    <button type="button" 
            class="gallery-modal-close" 
            onclick="closeGalleryModal()" 
            aria-label="Close Lightbox">
        <i class="bi bi-x-lg"></i>
    </button>

    <!-- Previous Chevron Button -->
    <button type="button" 
            class="gallery-modal-nav gallery-nav-prev" 
            onclick="prevGalleryImage(event)" 
            aria-label="Previous Photo">
        <i class="bi bi-chevron-left"></i>
    </button>

    <!-- Enlarged Image Container -->
    <div class="gallery-modal-img-wrapper" id="modal-img-card" onclick="event.stopPropagation()">
        <img id="gallery-modal-active-img" 
             src="" 
             alt="Tour Memory Preview" 
             class="gallery-modal-img" />
    </div>

    <!-- Next Chevron Button -->
    <button type="button" 
            class="gallery-modal-nav gallery-nav-next" 
            onclick="nextGalleryImage(event)" 
            aria-label="Next Photo">
        <i class="bi bi-chevron-right"></i>
    </button>
</div>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

<!-- ========================================================
     GALLERY & LIGHTBOX CONTROLLER SCRIPT
     ======================================================== -->
<script>
(function() {
    const rawImages = <?= json_encode(array_map(function($img) {
        return theme_url($img['url']);
    }, $galleryImages)); ?>;
    
    const totalImages = rawImages.length;
    let currentModalIndex = 0;
    const batchSize = 30;
    let currentlyVisible = <?= min($initialBatch, $totalCount); ?>;

    // Load More Photos Handler
    window.loadMoreGalleryPhotos = function() {
        const hiddenItems = document.querySelectorAll('.gallery-hidden-item');
        let unhidden = 0;

        for (let i = 0; i < hiddenItems.length; i++) {
            if (unhidden >= batchSize) break;
            hiddenItems[i].classList.remove('d-none', 'gallery-hidden-item');
            unhidden++;
        }

        currentlyVisible += unhidden;
        const visibleDisplay = document.getElementById('visible-count');
        if (visibleDisplay) visibleDisplay.textContent = currentlyVisible;

        const remainingCount = totalImages - currentlyVisible;
        const remainingBadge = document.getElementById('remaining-count');
        if (remainingBadge) remainingBadge.textContent = remainingCount + ' more';

        if (currentlyVisible >= totalImages) {
            const btnWrapper = document.getElementById('load-more-wrapper');
            if (btnWrapper) btnWrapper.style.display = 'none';
        }
    };

    // Open Lightbox Modal
    window.openGalleryModal = function(index) {
        if (index < 0 || index >= totalImages) index = 0;
        currentModalIndex = index;
        renderActiveModalImage(currentModalIndex);

        const modal = document.getElementById('gallery-lightbox-modal');
        if (!modal) return;

        modal.classList.add('active');
        document.body.style.overflow = 'hidden';
    };

    // Render Active Image
    function renderActiveModalImage(index) {
        const imgEl = document.getElementById('gallery-modal-active-img');
        const counterEl = document.getElementById('modal-current-idx');
        if (!imgEl || !rawImages[index]) return;

        imgEl.style.opacity = '0.3';
        imgEl.src = rawImages[index];

        setTimeout(function() {
            imgEl.style.opacity = '1';
        }, 60);

        if (counterEl) {
            counterEl.textContent = (index + 1);
        }
    }

    // Close Lightbox Modal
    window.closeGalleryModal = function() {
        const modal = document.getElementById('gallery-lightbox-modal');
        if (!modal) return;

        modal.classList.remove('active');
        document.body.style.overflow = '';
    };

    window.handleModalBackdropClick = function(e) {
        if (e.target && e.target.id === 'gallery-lightbox-modal') {
            closeGalleryModal();
        }
    };

    // Navigation (Next / Prev)
    window.nextGalleryImage = function(e) {
        if (e && e.stopPropagation) e.stopPropagation();
        if (totalImages === 0) return;
        currentModalIndex = (currentModalIndex + 1) % totalImages;
        renderActiveModalImage(currentModalIndex);
    };

    window.prevGalleryImage = function(e) {
        if (e && e.stopPropagation) e.stopPropagation();
        if (totalImages === 0) return;
        currentModalIndex = (currentModalIndex - 1 + totalImages) % totalImages;
        renderActiveModalImage(currentModalIndex);
    };

    // Keyboard Navigation (ESC, Left, Right)
    document.addEventListener('keydown', function(e) {
        const modal = document.getElementById('gallery-lightbox-modal');
        if (!modal || !modal.classList.contains('active')) return;

        if (e.key === 'Escape') {
            closeGalleryModal();
        } else if (e.key === 'ArrowRight') {
            nextGalleryImage();
        } else if (e.key === 'ArrowLeft') {
            prevGalleryImage();
        }
    });

    // Touch Swipe Gesture Support for Mobile
    let touchStartX = 0;
    let touchEndX = 0;

    const modal = document.getElementById('gallery-lightbox-modal');
    if (modal) {
        modal.addEventListener('touchstart', function(e) {
            touchStartX = e.changedTouches[0].screenX;
        }, { passive: true });

        modal.addEventListener('touchend', function(e) {
            touchEndX = e.changedTouches[0].screenX;
            handleSwipeGesture();
        }, { passive: true });
    }

    function handleSwipeGesture() {
        const swipeDistance = touchEndX - touchStartX;
        const threshold = 50; // min swipe distance in px

        if (swipeDistance > threshold) {
            // Swiped Right -> Previous image
            prevGalleryImage();
        } else if (swipeDistance < -threshold) {
            // Swiped Left -> Next image
            nextGalleryImage();
        }
    }
})();
</script>


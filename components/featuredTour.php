    <?php
    require_once __DIR__ . '/../data/tourData.php';

    // Helper function to resolve image path with fallback
    if (!function_exists('getTourImageFallback')) {
        function getTourImageFallback($img) {
            if (!empty($img) && file_exists(__DIR__ . '/../' . $img)) {
                return $img;
            }
            $imgLower = strtolower($img ?? '');
            if (strpos($imgLower, 'delhi') !== false) return 'assets/images/delhi/indiaGate.avif';
            if (strpos($imgLower, 'uttar') !== false || strpos($imgLower, 'agra') !== false || strpos($imgLower, 'taj') !== false) return 'assets/images/uttarPradesh/tajmahal.avif';
            if (strpos($imgLower, 'himachal') !== false) return 'assets/images/himachal/himachal.avif';
            if (strpos($imgLower, 'rajasthan') !== false || strpos($imgLower, 'jaipur') !== false) return 'assets/images/rajasthan/jaipur.avif';
            if (strpos($imgLower, 'punjab') !== false || strpos($imgLower, 'golden') !== false) return 'assets/images/punjab/goldenTemple.avif';
            if (strpos($imgLower, 'uttrakhand') !== false || strpos($imgLower, 'uttarakhand') !== false || strpos($imgLower, 'rishikesh') !== false) return 'assets/images/uttrakhand/uttrakhand.avif';
            if (strpos($imgLower, 'guj') !== false) return 'assets/images/gujrat/gujrat-ropeway.avif';
            if (strpos($imgLower, 'nepal') !== false) return 'assets/images/nepal/nepal.avif';
            return 'assets/images/delhi/indiaGate.avif';
        }
    }

    // Helper function to resolve Bootstrap icon
    if (!function_exists('getTourBootstrapIcon')) {
        function getTourBootstrapIcon($icon) {
            $iconMap = [
                'car' => 'bi-car-front-fill',
                'user' => 'bi-person-badge-fill',
                'map' => 'bi-geo-alt-fill',
                'mountain' => 'bi-triangle-fill',
                'sparkles' => 'bi-stars',
                'tree' => 'bi-tree-fill',
                'shield' => 'bi-shield-check',
                'compass' => 'bi-compass-fill',
            ];
            return $iconMap[$icon] ?? 'bi-compass-fill';
        }
    }
    ?>

    <!-- Featured Tours Section (Modern Dark Card UI) -->
    <section class="py-5 bg-light" id="featured-tours">
        <div class="container py-4">
            
            <!-- Header & Category Filter Tabs -->
            <div class="d-flex flex-column mb-5 gap-3">
                <div>
                    <span class="text-warning text-uppercase fw-bold small letter-spacing-1 d-block mb-1">
                        Popular Tours
                    </span>
                    <h2 class="display-6 fw-bold text-dark mb-0">
                        North India Bestseller Packages
                    </h2>
                </div>

                <!-- Filter Tabs -->
                <div class="d-flex flex-wrap items-center gap-2 mt-2">
                    <button type="button" data-category="all" class="tour-filter-btn active">All</button>
                    <button type="button" data-category="delhi" class="tour-filter-btn">Delhi</button>
                    <button type="button" data-category="uttar-pradesh" class="tour-filter-btn">Uttar Pradesh</button>
                    <button type="button" data-category="rajasthan" class="tour-filter-btn">Rajasthan</button>
                    <button type="button" data-category="himachal" class="tour-filter-btn">Himachal</button>
                    <button type="button" data-category="uttarakhand" class="tour-filter-btn">Uttarakhand</button>
                    <button type="button" data-category="gujarat" class="tour-filter-btn">Gujarat</button>
                    <button type="button" data-category="nepal" class="tour-filter-btn">Nepal</button>
                    <button type="button" data-category="spiritual" class="tour-filter-btn">Spiritual</button>
                    <button type="button" data-category="wildlife" class="tour-filter-btn">Wildlife</button>
                    <button type="button" data-category="weekend" class="tour-filter-btn">Weekend</button>
                </div>
            </div>

            <!-- Dynamic Cards Grid -->
            <div class="row g-4" id="tour-cards-container">
                <?php if (!empty($toursData) && is_array($toursData)): ?>
                    <?php foreach ($toursData as $tour): ?>
                        <?php 
                            $category = $tour['category'] ?? 'all';
                            $isFeatured = (!empty($tour['is_featured']) && $tour['is_featured'] === true) ? 'true' : 'false';
                            $imageSrc = getTourImageFallback($tour['image'] ?? '');
                            $iconClass = getTourBootstrapIcon($tour['icon'] ?? 'compass');
                            $tagText = $tour['tag'] ?? 'TOUR';
                            $handle = strtolower(preg_replace('/[^a-zA-Z0-9]/', '', $tagText));
                        ?>
                        
                        <div class="col-12 col-sm-6 col-lg-3 tour-card-col" 
                            data-category="<?= htmlspecialchars($category); ?>" 
                            data-featured="<?= $isFeatured; ?>">
                            
                            <!-- Modern Dark Card (matching provided UI reference) -->
                            <div class="tour-dark-card h-100 d-flex flex-column justify-content-between">
                                
                                <div>
                                    <!-- Top Media Banner -->
                                    <a href="<?= htmlspecialchars($tour['link'] ?? '#'); ?>" class="d-block text-decoration-none">
                                        <div class="card-banner shadow-sm">
                                            <img src="<?= htmlspecialchars($imageSrc); ?>" alt="<?= htmlspecialchars($tour['title'] ?? ''); ?>" loading="lazy">
                                        </div>
                                    </a>

                                    <!-- Avatar & Profile Row -->
                                    <div class="px-2">
                                        <div class="d-flex align-items-center justify-content-between mb-2">
                                            <div class="d-flex align-items-center gap-2">
                                                <!-- Icon Box Badge -->
                                                <div class="avatar-box shadow">
                                                    <i class="bi <?= $iconClass; ?> text-warning fs-5"></i>
                                                </div>
                                            </div>
                                            <!-- Follow / Action Pill Button -->
                                            <a href="<?= htmlspecialchars($tour['link'] ?? '#'); ?>" class="btn-card-action">
                                                Explore
                                            </a>
                                        </div>

                                        <!-- Title & Handle -->
                                        <div class="mb-2">
                                            <a href="<?= htmlspecialchars($tour['link'] ?? '#'); ?>" class="text-decoration-none">
                                                <h5 class="text-white fw-bold mb-0 text-truncate" title="<?= htmlspecialchars($tour['title'] ?? ''); ?>">
                                                    <?= htmlspecialchars($tour['title'] ?? ''); ?>
                                                    <i class="bi bi-patch-check-fill text-warning ms-1 small" title="Verified Tour"></i>
                                                </h5>
                                            </a>
                                            <span class="text-secondary small fw-medium">
                                                @<?= htmlspecialchars($handle); ?>
                                            </span>
                                        </div>

                                        <!-- Description / Subtitle -->
                                        <div class="text-white-50 small mb-3" style="line-height: 1.5; min-height: 42px;">
                                            <?= strip_tags($tour['subtitle'] ?? '', '<span><b><strong>'); ?>
                                        </div>
                                    </div>
                                </div>

                                <!-- Footer Stats & Link -->
                                <div class="px-2 pt-2 border-top border-secondary border-opacity-25">
                                    <!-- Stats Row -->
                                    <div class="d-flex align-items-center gap-3 text-white-50 small mb-2">
                                        <div>
                                            <span class="text-white fw-bold"><?= htmlspecialchars($tour['duration'] ?? ''); ?></span>
                                            <span class="text-secondary small ms-1">Duration</span>
                                        </div>
                                        <div>
                                            <span class="text-white fw-bold"><?= htmlspecialchars($tour['type'] ?? ''); ?></span>
                                            <span class="text-secondary small ms-1">Type</span>
                                        </div>
                                    </div>

                                    <!-- Link Action -->
                                    <div class="d-flex align-items-center justify-content-between pt-1">
                                        <a href="<?= htmlspecialchars($tour['link'] ?? '#'); ?>" class="text-secondary text-decoration-none small d-inline-flex align-items-center">
                                            <i class="bi bi-link-45deg text-warning fs-5 me-1"></i>
                                            <span class="text-truncate" style="max-width: 140px;"><?= htmlspecialchars($tour['tag'] ?? 'tajmahaltour'); ?>.in</span>
                                        </a>
                                        <a href="<?= htmlspecialchars($tour['link'] ?? '#'); ?>" class="text-warning text-decoration-none small fw-semibold">
                                            Details <i class="bi bi-arrow-up-right small"></i>
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>

                <!-- No Tours Found Alert -->
                <div id="no-tours-message" class="col-12 d-none text-center py-5">
                    <div class="bg-white rounded-4 p-5 border border-dashed text-secondary">
                        <i class="bi bi-geo-alt-fill text-warning fs-1 d-block mb-3"></i>
                        <h5 class="fw-bold text-dark">No packages found right now</h5>
                        <p class="small text-muted mb-0">Tours in <span id="state-name-holder" class="fw-bold text-primary text-capitalize"></span> are getting updated soon.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Filter Script -->
    <script>
    (function() {
        function initTourFilter() {
            const filterButtons = document.querySelectorAll('.tour-filter-btn');
            const tourCards = document.querySelectorAll('.tour-card-col');
            const noToursMessage = document.getElementById('no-tours-message');
            const stateNameHolder = document.getElementById('state-name-holder');

            if (!filterButtons.length || !tourCards.length) return;

            // Default "All" filter call
            filterCards('all', 'All');

            filterButtons.forEach(button => {
                button.addEventListener('click', () => {
                    const selectedCategory = button.getAttribute('data-category');
                    const stateName = button.textContent.trim();

                    // Button Active state
                    filterButtons.forEach(btn => btn.classList.remove('active'));
                    button.classList.add('active');

                    // Filter cards
                    filterCards(selectedCategory, stateName);
                });
            });

            function filterCards(category, stateName) {
                let visibleCount = 0;

                tourCards.forEach(card => {
                    const cardCategories = (card.getAttribute('data-category') || '').split(' ');
                    const isFeatured = card.getAttribute('data-featured') === 'true';

                    if (category === 'all') {
                        if (isFeatured) {
                            card.classList.remove('d-none');
                            visibleCount++;
                        } else {
                            card.classList.add('d-none');
                        }
                    } else {
                        if (cardCategories.includes(category)) {
                            card.classList.remove('d-none');
                            visibleCount++;
                        } else {
                            card.classList.add('d-none');
                        }
                    }
                });

                // Empty state toggle
                if (visibleCount === 0) {
                    if (stateNameHolder) stateNameHolder.textContent = stateName;
                    if (noToursMessage) noToursMessage.classList.remove('d-none');
                } else {
                    if (noToursMessage) noToursMessage.classList.add('d-none');
                }
            }
        }

        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', initTourFilter);
        } else {
            initTourFilter();
        }
    })();
    </script>


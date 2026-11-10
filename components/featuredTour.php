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
            if (strpos($imgLower, 'wildlife') !== false || strpos($imgLower, 'corbett') !== false || strpos($imgLower, 'safari') !== false) return 'assets/images/wildlife/ranthambhore.avif';
            if (strpos($imgLower, 'guj') !== false) return 'assets/images/gujrat/gujrat.avif';
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

    // Helper function to format tour price
    if (!function_exists('getTourPriceDisplay')) {
        function getTourPriceDisplay($tour) {
            if (!empty($tour['price'])) {
                return $tour['price'];
            }
            $priceMap = [
                1 => '₹1,850',
                2 => '₹2,499',
                3 => '₹6,499',
                4 => '₹8,999',
                5 => '₹7,499',
                6 => '₹3,200',
                7 => '₹5,500',
                8 => '₹4,800',
                9 => '₹9,200',
                10 => '₹4,500',
            ];
            $id = $tour['id'] ?? 1;
            return $priceMap[$id] ?? ('₹' . number_format(2000 + (($id * 450) % 6500)));
        }
    }

    // Helper function to format tour rating
    if (!function_exists('getTourRatingDisplay')) {
        function getTourRatingDisplay($tour) {
            if (!empty($tour['rating'])) {
                return $tour['rating'];
            }
            $ratings = ['4.9', '4.8', '5.0', '4.9', '4.8', '4.9'];
            $idx = abs(($tour['id'] ?? 1) % count($ratings));
            return $ratings[$idx];
        }
    }

    // Helper function to format tour description
    if (!function_exists('getTourDescriptionDisplay')) {
        function getTourDescriptionDisplay($tour) {
            if (!empty($tour['description'])) {
                return $tour['description'];
            }
            $descMap = [
                1 => 'Experience seamless local sightseeing with an executive private AC cab and verified chauffeur.',
                2 => 'Visit the iconic Taj Mahal and historic Agra Fort with private AC cab and skip-the-line guide.',
                3 => 'Explore imperial palaces, Mughal forts, and vibrant bazaars across Delhi, Agra, and Jaipur.',
                4 => 'Discover majestic desert forts, royal heritage palaces, and rich Rajasthani cultural traditions.',
                5 => 'Enjoy scenic pine-clad valleys, misty mountain passes, and cool hill station viewpoints.',
                6 => 'Experience the sacred Ganga Aarti, tranquil ashrams, and rejuvenating Himalayan foothills.',
                7 => 'Embark on a soul-enriching pilgrimage to revered sacred temples across North India.',
                8 => 'Experience exhilarating jungle safaris, tiger tracking, and rich biodiversity in national parks.',
            ];
            $id = $tour['id'] ?? 0;
            if (isset($descMap[$id])) {
                return $descMap[$id];
            }
            if (!empty($tour['subtitle'])) {
                return trim(strip_tags($tour['subtitle'])) . ' with private AC vehicles and verified chauffeurs.';
            }
            return 'Handpicked guided journey designed for comfort, luxury, and authentic cultural exploration.';
        }
    }

    // Determine if current page is Home Page (index.php)
    $currentPage = basename($_SERVER['PHP_SELF'] ?? '');
    $isHomePage = isset($isHomeActive) ? $isHomeActive : (($currentPage === 'index.php' || $currentPage === '') && (empty($rootPrefix) || $rootPrefix === './'));
    $displayedTours = !empty($toursData) && is_array($toursData) ? $toursData : [];
    ?>

    <!-- Featured Tours Section (Clean & Minimalist Modern Card UI) -->
    <section class="py-5 bg-light" id="featured-tours">
        <div class="container py-4">
            
            <!-- Header & Category Filter Tabs -->
            <div class="d-flex flex-column mb-5 gap-3">
                <div>
                    <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-2 rounded-pill fw-semibold mb-2">
                        <i class="bi bi-compass-fill me-1"></i> POPULAR TOURS
                    </span>
                    <h2 class="display-6 fw-bold text-dark mb-0">
                        North India Bestseller Packages
                    </h2>
                    <p class="text-secondary small mt-1 mb-0">Handpicked guided journeys designed for comfort, luxury, and authentic cultural exploration.</p>
                </div>

                <!-- Filter Tabs (Left-aligned) -->
                <div class="d-flex flex-wrap align-items-center justify-content-start gap-2 mt-3" id="tour-filter-tabs">
                    <button type="button" data-category="top" class="tour-filter-btn active fw-semibold d-inline-flex align-items-center justify-content-center">Top</button>
                    <button type="button" data-category="delhi" class="tour-filter-btn fw-semibold d-inline-flex align-items-center justify-content-center">Delhi</button>
                    <button type="button" data-category="uttar-pradesh" class="tour-filter-btn fw-semibold d-inline-flex align-items-center justify-content-center">Uttar Pradesh</button>
                    <button type="button" data-category="rajasthan" class="tour-filter-btn fw-semibold d-inline-flex align-items-center justify-content-center">Rajasthan</button>
                    <button type="button" data-category="himachal" class="tour-filter-btn fw-semibold d-inline-flex align-items-center justify-content-center">Himachal</button>
                    <button type="button" data-category="uttarakhand" class="tour-filter-btn fw-semibold d-inline-flex align-items-center justify-content-center">Uttarakhand</button>
                    <button type="button" data-category="punjab" class="tour-filter-btn fw-semibold d-inline-flex align-items-center justify-content-center">Punjab</button>
                    <button type="button" data-category="gujarat" class="tour-filter-btn fw-semibold d-inline-flex align-items-center justify-content-center">Gujarat</button>
                    <button type="button" data-category="nepal" class="tour-filter-btn fw-semibold d-inline-flex align-items-center justify-content-center">Nepal</button>
                    <button type="button" data-category="spiritual" class="tour-filter-btn fw-semibold d-inline-flex align-items-center justify-content-center">Spiritual</button>
                    <button type="button" data-category="wildlife" class="tour-filter-btn fw-semibold d-inline-flex align-items-center justify-content-center">Wildlife</button>
                    <button type="button" data-category="weekend" class="tour-filter-btn fw-semibold d-inline-flex align-items-center justify-content-center">Weekend</button>
                </div>
            </div>

            <!-- Dynamic Cards Grid -->
            <div class="row g-4" id="tour-cards-container">
                <?php if (!empty($displayedTours) && is_array($displayedTours)): ?>
                    <?php foreach ($displayedTours as $tour): ?>
                        <?php 
                            $rawCat = strtolower($tour['category'] ?? 'all');
                            if (strpos($rawCat, 'uttrakhand') !== false && strpos($rawCat, 'uttarakhand') === false) {
                                $rawCat .= ' uttarakhand';
                            }
                            if (strpos($rawCat, 'gujrat') !== false && strpos($rawCat, 'gujarat') === false) {
                                $rawCat .= ' gujarat';
                            }
                            $isFeaturedBool = (!empty($tour['is_featured']) && $tour['is_featured'] === true);
                            $isFeatured = $isFeaturedBool ? 'true' : 'false';
                            // Initial display: only Top / Featured cards are visible on load, others start hidden
                            $initialClass = $isFeaturedBool ? '' : 'd-none';
                            $imageSrc = getTourImageFallback($tour['image'] ?? '');
                            $price = getTourPriceDisplay($tour);
                            $rating = getTourRatingDisplay($tour);
                            $desc = getTourDescriptionDisplay($tour);
                            $rawTourLink = $tour['link'] ?? '#booking';
                            $tourLink = htmlspecialchars(function_exists('theme_url') ? theme_url($rawTourLink) : $rawTourLink);
                        ?>
                        
                        <div class="col-12 col-sm-6 col-lg-3 tour-card-col <?= $initialClass; ?>" 
                            data-category="<?= htmlspecialchars($rawCat); ?>" 
                            data-featured="<?= $isFeatured; ?>">
                            
                            <!-- Dark Luxury Card (Matching Provided Image Design) -->
                            <div class="dark-tour-card overflow-hidden d-flex flex-column h-100 position-relative">
                                
                                <!-- Top Media Area with Floating Bookmark & Seamless Bottom Fade -->
                                <div class="dark-tour-media">
                                    
                                    <!-- Floating Tag Badge (Top-Left) -->
                                    <?php if (!empty($tour['tag'])): ?>
                                        <span class="position-absolute top-0 start-0 m-3 z-3 badge rounded-pill bg-dark bg-opacity-75 text-white border border-light border-opacity-25 px-3 py-2 fw-semibold shadow-sm d-inline-flex align-items-center" style="backdrop-filter: blur(8px); -webkit-backdrop-filter: blur(8px); font-size: 11px; letter-spacing: 0.05em;">
                                            <?= htmlspecialchars($tour['tag']); ?>
                                        </span>
                                    <?php endif; ?>

                                    <a href="<?= $tourLink; ?>" tabindex="-1" aria-hidden="true" class="d-block w-100 h-100">
                                        <img 
                                            src="<?= htmlspecialchars(function_exists('theme_url') ? theme_url($imageSrc) : $imageSrc); ?>" 
                                            alt="<?= htmlspecialchars(!empty($tour['title']) ? $tour['title'] . ' Tour Package' : 'Tour Package'); ?>" 
                                            loading="lazy"
                                        >
                                    </a>
                                    <!-- Seamless Bottom Gradient Fade into Card Body -->
                                    <div class="dark-tour-fade position-absolute bottom-0 start-0 end-0 z-1"></div>
                                </div>

                                <!-- Card Content Body -->
                                <div class="dark-tour-body d-flex flex-column flex-grow-1 justify-content-between position-relative z-2">
                                    <div>
                                        <!-- Title & Price Capsule Row -->
                                        <div class="d-flex align-items-start justify-content-between gap-2 mb-1">
                                            <h5 class="dark-tour-title text-truncate-2 fw-bold m-0 text-decoration-none">
                                                <a href="<?= $tourLink; ?>" title="<?= htmlspecialchars($tour['title'] ?? ''); ?>">
                                                    <?= htmlspecialchars($tour['title'] ?? ''); ?>
                                                </a>
                                            </h5>
                                                
                                        </div>

                                        <!-- 2-Line Subtitle / Description -->
                                        <p class="dark-tour-desc overflow-hidden">
                                            <?= htmlspecialchars($desc); ?>
                                        </p>

                                        <!-- Spec Pill Badges Row -->
                                        <div class="dark-tour-pills d-flex align-items-center flex-wrap">
                                            
                                            <!-- Type Pill -->
                                            <span class="dark-tour-pill fw-medium d-inline-flex align-items-center">
                                                <?= htmlspecialchars($tour['type'] ?? 'Private Trip'); ?>
                                            </span>
                                            <!-- Duration Pill -->
                                            <span class="dark-tour-pill fw-medium d-inline-flex align-items-center">
                                                <?= htmlspecialchars($tour['duration'] ?? '1 Day'); ?>
                                            </span>
                                        </div>
                                    </div>

                                    <!-- Solid White "Book now" Full-Width CTA Button -->
                                    <a href="<?= $tourLink; ?>" class="btn-dark-tour-cta fw-bold text-center text-decoration-none d-block w-100 border-0">
                                        Book now
                                    </a>

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

            <?php if ($isHomePage): ?>
            <!-- Explore More Tours Navigation Button (Only on Home Page) -->
            <div class="text-center mt-5" id="explore-more-tours-wrapper">
                <a id="btn-explore-more-tours" href="<?= function_exists('theme_url') ? theme_url('tourPackage.php') : 'tourPackage.php'; ?>" class="btn btn-primary rounded-pill px-5 py-3 fw-bold shadow-sm d-inline-flex align-items-center gap-2 hover-lift">
                    <span>Explore More Tours</span>
                    <i class="bi bi-arrow-right fs-5"></i>
                </a>
            </div>
            <?php endif; ?>

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
                    const cardCategories = (card.getAttribute('data-category') || '').toLowerCase().split(' ');
                    const isFeatured = card.getAttribute('data-featured') === 'true';

                    if (category === 'top') {
                        if (isFeatured) {
                            card.classList.remove('d-none');
                            visibleCount++;
                        } else {
                            card.classList.add('d-none');
                        }
                    } else if (category === 'all') {
                        card.classList.remove('d-none');
                        visibleCount++;
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

<?php
/**
 * Master Reusable Tour Detail View Component
 * File: components/tourDetailView.php
 * 
 * Dynamically renders complete specific tour package details:
 * - Breadcrumb navigation
 * - Tour Hero & quick specs (Duration, Pickup, Vehicle, Rating)
 * - Gallery / Hero Image
 * - Tour Highlights & Overview
 * - Day-by-Day / Hourly Timeline Itinerary
 * - Inclusions & Exclusions Checklist
 * - Sticky Fast Booking Inquiry Sidebar
 * - Reusable Global Sections (Driver Safety, Testimonials, FAQ, CTA)
 */

if (!isset($currentTour) || empty($currentTour)) {
    echo "<div class='container py-5 text-center'><h3>Tour package details not found.</h3><a href='index.php' class='btn btn-primary rounded-pill mt-3'>Back to Packages</a></div>";
    return;
}

$categorySlug = $categorySlug ?? 'tours';
$categoryTitle = $categoryTitle ?? 'Tour Packages';

// Filter other tours in this parent category (excluding the currently active tour)
$relatedTours = [];
$activeSlug = $currentTour['slug'] ?? $tourSlug ?? '';

if (!empty($tours) && is_array($tours)) {
    foreach ($tours as $slug => $t) {
        if ($slug !== $activeSlug) {
            $relatedTours[] = $t;
        }
    }
}

/**
 * Intelligent Itinerary Step Parser & Formatter Helper
 * Transforms dense paragraph text into structured, highly readable day cards
 * with bolded monuments/cities, distance pills, and night-stay badges.
 */
if (!function_exists('parseTourItineraryStep')) {
    function parseTourItineraryStep($step, $sIdx) {
        $timeBadge = !empty($step['time']) ? $step['time'] : (!empty($step['day']) ? $step['day'] : ('Day ' . sprintf('%02d', $sIdx + 1)));
        $rawTitle = $step['title'] ?? '';
        $rawDesc = $step['desc'] ?? '';
        $detectedStay = $step['stay'] ?? '';

        // 1. Extract Route Distance & Drive Time from Title
        $distance = '';
        $cleanTitle = $rawTitle;

        if (preg_match('/\(([^)]*(?:km|kms|hr|hrs|hours|drive|trek)[^)]*)\)/i', $rawTitle, $m)) {
            $distance = trim($m[1]);
            $cleanTitle = trim(str_replace($m[0], '', $rawTitle));
        } else if (preg_match('/(\d+\s*[\/\-]?\s*(?:kms?|km)\s*[,;\/]?\s*\d*\s*[\/\-]?\s*(?:hrs?|hours)?)/i', $rawTitle, $m)) {
            $distance = trim($m[1]);
            $cleanTitle = trim(str_replace($m[0], '', $rawTitle));
        }
        
        // Normalize distance formatting
        if (!empty($distance)) {
            $distance = preg_replace('/(\d+)\s*[\/\-]\s*Kms?\s*[,;\/]\s*(\d+)\s*[\/\-]\s*Hrs?/i', '$1 Kms • $2 Hrs', $distance);
            $distance = preg_replace('/\s*[\/\,]\s*/', ' • ', $distance);
            $distance = preg_replace('/(\d+)\s*(kms?)/i', '$1 Kms', $distance);
            $distance = preg_replace('/(\d+)\s*(hrs?|hours?)/i', '$1 Hrs', $distance);
            $distance = trim($distance, " •-–:\t");
        }
        $cleanTitle = trim($cleanTitle, " -–:\t");

        // 2. Extract Stay and Break text into lines
        $rawLines = preg_split('/\r\n|\r|\n/', trim($rawDesc));
        $lines = [];

        foreach ($rawLines as $l) {
            $trim = trim($l);
            if (empty($trim)) continue;

            // Check if line indicates overnight stay
            if (empty($detectedStay)) {
                if (preg_match('/^(?:Evening:\s*)?Overnight(?:\'s)?\s+stay(?:\s+at\s+hotel)?\s+(?:in|at)\s+([A-Za-z\s\/\,\-]+)\.?$/i', $trim, $sm)
                    || preg_match('/^(?:Night\s+stay(?:\s+in|\s+at)\s+([A-Za-z\s\/\,\-]+)\.?)$/i', $trim, $sm)) {
                    $detectedStay = trim($sm[1], " .\t\n\r\0\x0B");
                    continue;
                }
            }
            $lines[] = $trim;
        }

        // If single long block, break into sentences
        if (count($lines) === 1 && strlen($lines[0]) > 140) {
            $sentenceList = preg_split('/(?<=[.!?])\s+(?=[A-Z0-9])/', $lines[0]);
            $grouped = [];
            $temp = '';
            foreach ($sentenceList as $s) {
                $s = trim($s);
                if (empty($s)) continue;

                // Check if sentence indicates stay
                if (empty($detectedStay)) {
                    if (preg_match('/Overnight(?:\'s)?\s+stay(?:\s+at\s+hotel)?\s+(?:in|at)\s+([A-Za-z\s\/\,\-]+)\.?/i', $s, $sm)) {
                        $detectedStay = trim($sm[1], " .\t\n\r\0\x0B");
                        $s = trim(preg_replace('/Overnight(?:\'s)?\s+stay(?:\s+at\s+hotel)?\s+(?:in|at)\s+([A-Za-z\s\/\,\-]+)\.?/i', '', $s));
                    }
                }

                if (empty($s)) continue;

                if (empty($temp)) {
                    $temp = $s;
                } else if (strlen($temp) + strlen($s) < 160) {
                    $temp .= ' ' . $s;
                } else {
                    $grouped[] = $temp;
                    $temp = $s;
                }
            }
            if (!empty($temp)) {
                $grouped[] = $temp;
            }
            $lines = count($grouped) > 1 ? $grouped : $lines;
        }

        // 3. Highlight Important Locations & Terms
        $keywords = [
            // Monuments & Heritage
            'Taj Mahal', 'Agra Fort', 'Baby Taj', 'Itmad-ud-Daulah', 'Fatehpur Sikri', 'Buland Darwaza',
            'Amber Fort', 'Amer Fort', 'City Palace', 'Hawa Mahal', 'Jantar Mantar', 'Jal Mahal', 'Nahargarh Fort', 'Jaigarh Fort', 'Albert Hall Museum', 'Albert Hall',
            'Red Fort', 'Jama Masjid', 'Raj Ghat', 'Qutub Minar', 'Humayun\'s Tomb', 'Humayun Tomb', 'India Gate', 'Rashtrapati Bhavan', 'Parliament House', 'Lotus Temple', 'Akshardham Temple', 'Swaminarayan Akshardham',
            'Mehrangarh Fort', 'Jaswant Thada', 'Umaid Bhawan Palace', 'Sonar Fort', 'Jaisalmer Fort', 'Patwon Ki Haveli', 'Gadisar Lake', 'Sam Sand Dunes', 'Junagarh Fort', 'Lalgarh Palace',
            'Lake Pichola', 'Saheliyon Ki Bari', 'Jagdish Temple', 'Chittorgarh Fort', 'Kumbhalgarh Fort', 'Ranakpur Jain Temple', 'Ranakpur Temples', 'Dilwara Temples',
            'Gwalior Fort', 'Khajuraho Temples', 'Western Group of Temples', 'Orchha Fort', 'Jehangir Mahal', 'Bara Imambara', 'Chhota Imambara', 'Rumi Darwaza',
            // Spiritual & Sacred Sites
            'Golden Temple', 'Harmandir Sahib', 'Akal Takht', 'Jallianwala Bagh', 'Wagah Border', 'Partition Museum', 'Gobindgarh Fort', 'Anandpur Sahib', 'Virasat-e-Khalsa',
            'Har Ki Pauri', 'Mansa Devi Temple', 'Mansa Devi', 'Chandi Devi Temple', 'Chandi Devi', 'Parmarth Niketan', 'Triveni Ghat', 'Ram Jhula', 'Lakshman Jhula', 'Beatles Ashram', 'Neelkanth Mahadev',
            'Yamunotri Temple', 'Yamunotri', 'Gangotri Temple', 'Gangotri', 'Kedarnath Temple', 'Kedarnath', 'Badrinath Temple', 'Badrinath', 'Char Dham', 'Janki Chatti', 'Gaurikund',
            'Kashi Vishwanath Temple', 'Kashi Vishwanath Corridor', 'Kashi Vishwanath', 'Dashashwamedh Ghat', 'Manikarnika Ghat', 'Sarnath', 'Dhamek Stupa', 'Assi Ghat',
            'Shri Ram Janmabhoomi Mandir', 'Ram Janmabhoomi', 'Ram Mandir', 'Hanuman Garhi', 'Kanak Bhawan', 'Saryu River', 'Ram Ki Paidi',
            'Shri Krishna Janmabhoomi', 'Banke Bihari Temple', 'Banke Bihari', 'Prem Mandir', 'Dwarkadhish Temple', 'ISKCON Temple', 'Nidhivan', 'Gomti Ghat',
            'Bet Dwarka', 'Nageshwar Jyotirlinga', 'Somnath Temple', 'Bhalka Tirth', 'Triveni Sangam',
            'Pashupatinath Temple', 'Boudhanath Stupa', 'Swayambhunath Stupa', 'Swayambhunath', 'Bhaktapur Durbar Square', 'Patan Durbar Square', 'Kathmandu Durbar Square',
            // Hill Stations & Nature
            'Kufri', 'Mall Road', 'Ridge Maidan', 'Christ Church', 'Jakhu Temple', 'Solang Valley', 'Rohtang Pass', 'Hadimba Devi Temple', 'Vashisht Bath', 'McLeodganj', 'Khajjiar',
            'Naini Lake', 'Naina Devi Temple', 'Bhimtal', 'Kempty Falls', 'Gun Hill', 'Lal Tibba', 'Camel\'s Back Road',
            'Phewa Lake', 'Sarangkot', 'Davis Falls', 'Machhapuchhre', 'Annapurna',
            // Wildlife Parks
            'Ranthambhore National Park', 'Ranthambore National Park', 'Ranthambore', 'Jim Corbett National Park', 'Corbett National Park', 'Corbett', 'Keoladeo Ghana Bird Sanctuary', 'Bharatpur Bird Sanctuary', 'Bharatpur', 'Sariska Tiger Reserve', 'Sariska', 'Gir National Park', 'Sasan Gir', 'Devalia Safari Park',
            // Cities & Destinations
            'Delhi NCR', 'New Delhi', 'Old Delhi', 'Delhi', 'Agra', 'Jaipur', 'Amritsar', 'Haridwar', 'Rishikesh', 'Mussoorie', 'Dehradun', 'Nainital', 'Almora', 'Ranikhet', 'Kausani',
            'Shimla', 'Manali', 'Kullu', 'Dharamshala', 'Dalhousie', 'Chandigarh',
            'Udaipur', 'Jodhpur', 'Jaisalmer', 'Bikaner', 'Pushkar', 'Ajmer', 'Mandawa', 'Shekhawati', 'Mount Abu', 'Bundi', 'Kota',
            'Varanasi', 'Ayodhya', 'Prayagraj', 'Lucknow', 'Mathura', 'Vrindavan', 'Khajuraho', 'Orchha',
            'Ahmedabad', 'Rajkot', 'Bhuj', 'Dhordo', 'Great Rann of Kutch', 'Statue of Unity', 'Kevadia',
            'Kathmandu', 'Pokhara', 'Chitwan',
            // Activities & Experiences
            'Ganga Aarti', 'Saryu Aarti', 'Maha Aarti', 'Jungle Safari', 'Jeep Safari', 'Tiger Safari', 'Camel Safari', 'Sunrise', 'Sunset', 'Boat Ride', 'Ropeway',
            'Guru Ka Langar', 'Palki Sahib', 'Yamuna Expressway', 'Private AC Cab', 'Chauffeur'
        ];

        usort($keywords, function($a, $b) {
            return strlen($b) - strlen($a);
        });

        $pattern = '/\b(' . implode('|', array_map('preg_quote', $keywords)) . ')\b/i';

        $cleanPoints = [];
        foreach ($lines as $line) {
            $cleanLine = preg_replace('/^[•\-\*#\d\.\)]+\s*/', '', $line);
            if (empty($cleanLine)) continue;

            $highlighted = preg_replace_callback($pattern, function($match) {
                return '<strong class="text-dark fw-bold">' . $match[0] . '</strong>';
            }, htmlspecialchars($cleanLine, ENT_QUOTES, 'UTF-8'));

            $highlighted = str_replace(['&lt;strong class=&quot;text-dark fw-bold&quot;&gt;', '&lt;/strong&gt;'], ['<strong class="text-dark fw-bold">', '</strong>'], $highlighted);
            $cleanPoints[] = $highlighted;
        }

        return [
            'timeBadge' => $timeBadge,
            'title' => $cleanTitle,
            'distance' => $distance,
            'points' => $cleanPoints,
            'stay' => $detectedStay
        ];
    }
}
?>


<!-- Tour Hero Header Section -->
<section class="bg-white py-4 border-bottom">
    <div class="container">
        <div class="row align-items-center g-3">
            <div class="col-lg-8">
                <div class="d-flex flex-wrap align-items-center gap-2 mb-2">
                    <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-1.5 rounded-pill fw-semibold small text-uppercase">
                        <i class="bi bi-tag-fill me-1"></i> <?= htmlspecialchars($currentTour['tag'] ?? 'FEATURED TOUR'); ?>
                    </span>
                    <span class="badge bg-success bg-opacity-10 text-success px-3 py-1.5 rounded-pill fw-semibold small">
                        <i class="bi bi-patch-check-fill me-1"></i> Private Chauffeur
                    </span>
                    <span class="badge bg-warning bg-opacity-10 text-dark px-3 py-1.5 rounded-pill fw-semibold small">
                        <i class="bi bi-star-fill text-warning me-1"></i> <?= htmlspecialchars($currentTour['rating'] ?? '4.9'); ?> (<?= htmlspecialchars($currentTour['reviews_count'] ?? '250+'); ?> Reviews)
                    </span>
                </div>
                <h1 class="display-6 fw-bold text-dark mb-2">
                    <?= htmlspecialchars($currentTour['title']); ?>
                </h1>
                <p class="text-secondary mb-0 fs-6">
                    <?= htmlspecialchars($currentTour['overview'] ?? 'Experience the rich culture and heritage of North India with our private guided tour.'); ?>
                </p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <div class="d-inline-flex flex-column align-items-lg-end">
                    <span class="text-secondary small">Starting From</span>
                    <span class="fs-3 fw-bold text-primary lh-1 mb-2"><?= htmlspecialchars($currentTour['price_start'] ?? '₹4,500'); ?></span>
                    <a href="#tour-inquiry-card" class="btn btn-primary rounded-pill px-4 py-2 fw-semibold shadow-sm d-inline-flex align-items-center gap-2">
                        <span>Book This Tour</span>
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Tour Details Main Layout -->
<section class="py-5 bg-light" id="tour-details-main">
    <div class="container">
        <div class="row g-4 g-xl-5">
            
            <!-- Left Column: Tour Details & Itinerary (8 Cols) -->
            <div class="col-lg-8">
                
                <!-- Main Tour Image Banner -->
                <div class="card border-0 rounded-4 overflow-hidden shadow-sm mb-4">
                    <img 
                        src="<?= theme_url($currentTour['image'] ?? 'assets/images/uttarPradesh/tajmahal.avif'); ?>" 
                        class="w-100 object-fit-cover" 
                        style="height: 420px;" 
                        alt="<?= htmlspecialchars(!empty($currentTour['title']) ? $currentTour['title'] . ' Tour Itinerary' : 'Tour Package Details'); ?>"
                        loading="lazy"
                    >
                </div>

                <!-- Quick Highlights Bar -->
                <div class="card border-0 rounded-4 shadow-sm p-4 mb-4 bg-white">
                    <h3 class="fs-5 fw-bold text-dark mb-3 d-flex align-items-center gap-2">
                        <i class="bi bi-stars text-primary"></i> Tour Highlights
                    </h3>
                    <div class="row g-3">
                        <?php if (!empty($currentTour['highlights'])): ?>
                            <?php foreach ($currentTour['highlights'] as $highlight): ?>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-start gap-2">
                                        <i class="bi bi-check-circle-fill text-success flex-shrink-0 mt-1"></i>
                                        <span class="text-dark small fw-medium"><?= htmlspecialchars($highlight); ?></span>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>

                <!-- Tour Specifications Cards Grid -->
                <div class="row g-3 mb-4">
                    <div class="col-sm-6 col-md-3">
                        <div class="card border-0 rounded-4 p-3 bg-white shadow-xs text-center h-100">
                            <i class="bi bi-clock-history text-primary fs-3 mb-1"></i>
                            <span class="text-muted small">Duration</span>
                            <span class="fw-bold text-dark small"><?= htmlspecialchars($currentTour['duration'] ?? '1 Day'); ?></span>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="card border-0 rounded-4 p-3 bg-white shadow-xs text-center h-100">
                            <i class="bi bi-geo-alt-fill text-danger fs-3 mb-1"></i>
                            <span class="text-muted small">Pickup &amp; Drop</span>
                            <span class="fw-bold text-dark small"><?= htmlspecialchars($currentTour['pickup'] ?? 'Delhi NCR'); ?></span>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="card border-0 rounded-4 p-3 bg-white shadow-xs text-center h-100">
                            <i class="bi bi-car-front-fill text-info fs-3 mb-1"></i>
                            <span class="text-muted small">Vehicle</span>
                            <span class="fw-bold text-dark small"><?= htmlspecialchars($currentTour['vehicle'] ?? 'Private AC Cab'); ?></span>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="card border-0 rounded-4 p-3 bg-white shadow-xs text-center h-100">
                            <i class="bi bi-shield-check text-success fs-3 mb-1"></i>
                            <span class="text-muted small">Assistance</span>
                            <span class="fw-bold text-dark small">24x7 Verified</span>
                        </div>
                    </div>
                </div>

                <!-- Detailed Itinerary Timeline -->
                <div class="card border-0 rounded-4 shadow-sm p-4 p-md-4 mb-4 bg-white" id="detailed-tour-itinerary">
                    <div class="d-flex flex-column flex-md-row align-items-start align-items-md-center justify-content-between gap-3 mb-4 pb-3 border-bottom">
                        <div>
                            <div class="d-flex align-items-center gap-2 mb-3">
                                <span class="badge bg-primary bg-opacity-10 text-primary rounded-pill px-3 py-1 small fw-semibold">
                                    <i class="bi bi-map-fill me-1"></i> DAY-BY-DAY ROUTE & SIGHTSEEING
                                </span>
                            </div>
                            <h3 class="fs-5 fw-bold text-dark mb-1 d-flex align-items-center gap-2">
                                <i class="bi bi-calendar3 text-primary"></i> Detailed Tour Itinerary
                            </h3>
                            <p class="text-secondary small mb-0">Thoughtfully crafted day-wise schedule with private AC vehicle, verified chauffeur & flexible stops.</p>
                        </div>
                        <?php if (!empty($currentTour['itinerary'])): ?>
                            <span class="badge bg-primary text-white border-0 rounded-pill px-3.5 py-2 fw-semibold small shadow-xs flex-shrink-0 align-self-start align-self-md-center">
                                <i class="bi bi-clock-history me-1"></i> <?= count($currentTour['itinerary']); ?> Planned Days Schedule
                            </span>
                        <?php endif; ?>
                    </div>

                    <?php if (!empty($currentTour['itinerary'])): ?>
                        <div class="itinerary-timeline-container">
                            <?php foreach ($currentTour['itinerary'] as $sIdx => $rawStep): ?>
                                <?php 
                                    $step = parseTourItineraryStep($rawStep, $sIdx);
                                ?>
                                <div class="itinerary-day-wrapper">
                                    <!-- Timeline Node Marker -->
                                    <div class="itinerary-timeline-marker"></div>

                                    <!-- Day Content Card Box -->
                                    <div class="itinerary-day-box">
                                        <!-- Header: Day Badge, Title & Distance -->
                                        <div class="itinerary-day-header d-flex flex-wrap align-items-center justify-content-between gap-2.5">
                                            <div class="d-flex flex-wrap align-items-center gap-2">
                                                <span class="itinerary-day-badge">
                                                    <i class="bi bi-calendar-check-fill me-2"></i> <?= htmlspecialchars($step['timeBadge']); ?>
                                                </span>
                                                <h4 class="itinerary-day-title"><?= htmlspecialchars($step['title']); ?></h4>
                                            </div>
                                            <?php if (!empty($step['distance'])): ?>
                                                <span class="itinerary-dist-badge">
                                                    <i class="bi bi-speedometer2 text-primary"></i> <?= htmlspecialchars($step['distance']); ?>
                                                </span>
                                            <?php endif; ?>
                                        </div>

                                        <!-- Day Points / Activities -->
                                        <ul class="itinerary-points-list">
                                            <?php foreach ($step['points'] as $pt): ?>
                                                <li class="itinerary-point-item">
                                                    <span class="itinerary-point-bullet">
                                                        <i class="bi bi-geo-alt-fill"></i>
                                                    </span>
                                                    <div class="itinerary-point-text">
                                                        <?= $pt; ?>
                                                    </div>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>

                                        <!-- Night Stay / Overnight Indicator -->
                                        <?php if (!empty($step['stay'])): ?>
                                            <div class="itinerary-day-footer d-flex flex-wrap align-items-center justify-content-between gap-2">
                                                <span class="itinerary-night-stay">
                                                    <i class="bi bi-moon-stars-fill text-warning"></i>
                                                    <span><strong>Night Stay:</strong> <?= htmlspecialchars($step['stay']); ?></span>
                                                </span>
                                                <span class="text-muted small d-inline-flex align-items-center gap-2">
                                                    <i class="bi bi-shield-check text-success"></i> Handpicked Verified Hotel Stay
                                                </span>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>

                <!-- Inclusions & Exclusions Card -->
                <div class="card border-0 rounded-4 shadow-sm p-4 mb-4 bg-white">
                    <div class="row g-4">
                        <!-- Inclusions -->
                        <div class="col-md-6 border-end-md">
                            <h4 class="fs-6 fw-bold text-success mb-3 d-flex align-items-center gap-2">
                                <i class="bi bi-check-circle-fill"></i> What's Included
                            </h4>
                            <ul class="list-unstyled mb-0 d-flex flex-column gap-2 small">
                                <?php if (!empty($currentTour['inclusions'])): ?>
                                    <?php foreach ($currentTour['inclusions'] as $inc): ?>
                                        <li class="d-flex align-items-start gap-2">
                                            <i class="bi bi-check2 text-success fw-bold mt-0.5"></i>
                                            <span class="text-dark"><?= htmlspecialchars($inc); ?></span>
                                        </li>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </ul>
                        </div>

                        <!-- Exclusions -->
                        <div class="col-md-6">
                            <h4 class="fs-6 fw-bold text-danger mb-3 d-flex align-items-center gap-2">
                                <i class="bi bi-x-circle-fill"></i> What's Not Included
                            </h4>
                            <ul class="list-unstyled mb-0 d-flex flex-column gap-2 small">
                                <?php if (!empty($currentTour['exclusions'])): ?>
                                    <?php foreach ($currentTour['exclusions'] as $exc): ?>
                                        <li class="d-flex align-items-start gap-2">
                                            <i class="bi bi-x-lg text-danger small mt-1"></i>
                                            <span class="text-muted"><?= htmlspecialchars($exc); ?></span>
                                        </li>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Right Column: Sticky Booking & Inquiry Form (4 Cols) -->
            <div class="col-lg-4 position-relative">
                <div class="tour-sticky-sidebar sticky-top" style="top: 90px; z-index: 100;">
                    
                    <div class="card border-0 rounded-4 shadow-sm bg-white overflow-hidden p-4 mb-4" id="tour-inquiry-card">
                        
                        <div class="d-flex justify-content-between align-items-center pb-3 border-bottom mb-3">
                            <div>
                                <span class="badge bg-primary bg-opacity-10 text-primary rounded-pill px-2.5 py-1 small fw-semibold">Instant Quote</span>
                                <div class="fs-4 fw-bold text-dark mt-1"><?= htmlspecialchars($currentTour['price_start'] ?? '₹4,500'); ?></div>
                            </div>
                            <span class="badge bg-success bg-opacity-10 text-success rounded-pill px-3 py-1.5 small fw-semibold">
                                <i class="bi bi-check-circle-fill me-1"></i> Best Rate
                            </span>
                        </div>

                        <!-- Direct WhatsApp & Call Buttons -->
                        <div class="d-flex flex-column gap-2 mb-3">
                            <a 
                                href="https://wa.me/918800722606?text=<?= urlencode('Hello, I am interested in booking: ' . $currentTour['title']); ?>" 
                                target="_blank" 
                                class="btn btn-success rounded-pill w-100 py-2.5 fw-semibold d-flex align-items-center justify-content-center gap-2 shadow-xs"
                            >
                                <i class="bi bi-whatsapp fs-5"></i>
                                <span>Inquire on WhatsApp</span>
                            </a>
                            <a 
                                href="tel:000999656888" 
                                class="btn btn-outline-dark rounded-pill w-100 py-2 fw-semibold d-flex align-items-center justify-content-center gap-2"
                            >
                                <i class="bi bi-telephone-fill text-primary"></i>
                                <span>Call: (000) 999 -656 -888</span>
                            </a>
                        </div>

                        <div class="text-center position-relative my-2">
                            <hr class="text-muted">
                            <span class="position-absolute top-50 start-50 translate-middle bg-white px-2 small text-muted">OR QUICK INQUIRY</span>
                        </div>

                        <!-- Fast Inquiry Form -->
                        <form action="<?= theme_url('contactUs.php'); ?>" method="GET" class="mt-2">
                            <input type="hidden" name="tour" value="<?= htmlspecialchars($currentTour['title']); ?>">
                            
                            <div class="mb-2.5">
                                <label class="form-label small fw-semibold text-dark mb-1">Your Name</label>
                                <input type="text" name="name" class="form-control rounded-3 py-2 small" placeholder="Enter full name" required>
                            </div>
                            
                            <div class="mb-2.5">
                                <label class="form-label small fw-semibold text-dark mb-1">Mobile / WhatsApp Number</label>
                                <input type="tel" name="phone" class="form-control rounded-3 py-2 small" placeholder="+91 98765 43210" required>
                            </div>

                            <div class="row g-2 mb-2.5">
                                <div class="col-6">
                                    <label class="form-label small fw-semibold text-dark mb-1">Travel Date</label>
                                    <input type="date" name="travel_date" class="form-control rounded-3 py-2 small" required>
                                </div>
                                <div class="col-6">
                                    <label class="form-label small fw-semibold text-dark mb-1">Total Guests</label>
                                    <select name="guests" class="form-select rounded-3 py-2 small">
                                        <option value="1">1 Person</option>
                                        <option value="2" selected>2 Persons</option>
                                        <option value="3-4">3-4 Persons</option>
                                        <option value="5+">5+ Family/Group</option>
                                    </select>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary rounded-pill w-100 py-2.5 fw-semibold shadow-sm mt-2">
                                Send Tour Inquiry <i class="bi bi-arrow-right ms-1"></i>
                            </button>
                        </form>

                        <div class="mt-3 pt-3 border-top text-center text-secondary small">
                            <i class="bi bi-shield-check text-success me-1"></i> 100% Verified Drivers • No Advance Fee
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

<!-- Related Tour Packages: 4-Column Responsive Grid Showcase -->
<?php //require_once __DIR__ . '/relatedTours.php'; ?>

<!-- Car Type Section -->
<?php require_once __DIR__ . '/localCarType.php'; ?>
<?php require_once __DIR__ . '/outstationCarType.php'; ?>
<?php require_once __DIR__ . '/testimonials.php'; ?>



<?php require_once __DIR__ . '/howItWorks.php'; ?>
<?php require_once __DIR__ . '/whyUs.php'; ?>
<?php require_once __DIR__ . '/about.php'; ?>







<!-- Reusable Sections: Driver Safety & Fleet Standards -->
<?php require_once __DIR__ . '/safetyVarified.php'; ?>

<!-- Reusable Sections: Customer Testimonials -->
<?php //require_once __DIR__ . '/testimonials.php'; ?>

<!-- Top Places,gallery Section -->
<?php require_once __DIR__ . '/top-places.php'; ?>
<?php require_once __DIR__ . '/gallerySection.php'; ?>


<!-- Reusable Sections: FAQ Section -->
<?php require_once __DIR__ . '/faq.php'; ?>


<!-- Reusable Sections: Blog -->
<?php require_once __DIR__ . '/blog.php'; ?>

<!-- Reusable Sections: Call to Action Banner -->
<?php require_once __DIR__ . '/cta.php'; ?>


<?php
/**
 * Specific Blog Post Template
 * File: blog/specificBlogTemplate.php
 * 
 * Dynamic detail view for individual travel articles, guides, and itineraries.
 * Rich typography, Trip Facts, Day-by-Day Timeline, Pro Tips, Vehicle Selector & FAQs.
 */

require_once __DIR__ . '/blogData.php';

$slug = trim($_GET['slug'] ?? '');
$id = trim($_GET['id'] ?? '');

$post = null;
if (!empty($slug)) {
    $post = get_blog_post_by_slug($slug);
} elseif (!empty($id)) {
    $post = get_blog_post_by_id($id);
}

// Fallback to featured post if query did not match
if (!$post) {
    $post = get_featured_blog_post();
}

$page_title = htmlspecialchars($post['title'] ?? 'Travel Guide') . " - Taj Mahal Tour Blog";
require_once __DIR__ . '/../includes/header.php';

$relatedPosts = get_latest_blog_posts(3, $post['id'] ?? null);
$postImg = theme_url($post['image'] ?? 'assets/images/uttarPradesh/tajmahal.avif');

// Trip Facts fallback
$tripFacts = $post['trip_facts'] ?? [
    'season'   => 'October to March (Pleasant Sightseeing)',
    'duration' => '2 to 4 Days (Customizable Circuit)',
    'start_hub'=> 'New Delhi (IGI Airport & City Hotels)',
    'vehicle'  => 'AC Sedan / Toyota Innova Crysta SUV'
];

// Highlights fallback
$highlights = $post['highlights'] ?? [
    'Private door-to-door chauffeur transit with verified commercial drivers',
    'Customizable sunrise and sunset timings for iconic monuments',
    'Flexible stops at heritage stepwells, local artisan markets & highway dhabas',
    'Transparent pricing with toll taxes, interstate state permits & fuel included'
];

// Pro tips fallback
$proTips = $post['pro_tips'] ?? [
    'Book ASI monument entry tickets online in advance to skip ticket counter queues.',
    'Carry lightweight cotton scarves for temple visits where head covering is required.',
    'Keep your chauffeur\'s mobile number saved for effortless pickup after visiting pedestrian markets.'
];
?>

<main id="single-blog-page">

    <!-- 2. Main Article Content Container -->
    <article class="py-5 bg-white" id="blog-article-content">
        <div class="container py-lg-3">
            
            <div class="row justify-content-center">
                <div class="col-lg-10 col-xl-9">
                    
                    <!-- Article Category & Tag -->
                    <div class="d-flex flex-wrap align-items-center gap-2 mb-3">
                        <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-2 rounded-pill fw-semibold">
                            <i class="bi bi-tag-fill me-1"></i> <?= htmlspecialchars($post['tag'] ?? 'TRAVEL GUIDE'); ?>
                        </span>
                        <span class="badge bg-dark bg-opacity-10 text-dark px-3 py-2 rounded-pill fw-medium">
                            <i class="bi bi-compass me-1"></i> <?= htmlspecialchars($post['category'] ?? 'North India Circuit'); ?>
                        </span>
                    </div>

                    <!-- Article Title -->
                    <h1 class="display-5 fw-bold text-dark mb-3 lh-sm font-serif">
                        <?= htmlspecialchars($post['title'] ?? ''); ?>
                    </h1>

                    <!-- Article Subtitle -->
                    <?php if (!empty($post['subtitle'])): ?>
                        <p class="lead text-secondary mb-4 fs-5 lh-base">
                            <?= htmlspecialchars($post['subtitle']); ?>
                        </p>
                    <?php endif; ?>

                    <!-- Author & Publishing Meta Bar -->
                    <div class="d-flex flex-wrap align-items-center justify-content-between border-top border-bottom py-3 mb-4 gap-3">
                        <div class="d-flex align-items-center gap-3">
                            <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center fw-bold shadow-xs" style="width: 46px; height: 46px; font-size: 1.1rem;">
                                <?= strtoupper(substr($post['author'] ?? 'E', 0, 1)); ?>
                            </div>
                            <div>
                                <div class="fw-bold text-dark mb-0"><?= htmlspecialchars($post['author'] ?? 'Editorial Team'); ?></div>
                                <div class="text-secondary small"><?= htmlspecialchars($post['author_role'] ?? 'Senior Travel Specialist'); ?></div>
                            </div>
                        </div>

                        <div class="d-flex align-items-center gap-3 text-secondary small">
                            <span><i class="bi bi-calendar3 me-1 text-primary"></i> <?= htmlspecialchars($post['date'] ?? ''); ?></span>
                            <span>&bull;</span>
                            <span><i class="bi bi-clock me-1 text-primary"></i> <?= htmlspecialchars($post['read_time'] ?? '6 min read'); ?></span>
                        </div>
                    </div>

                    <!-- Hero Media Image with Rounded Corners -->
                    <div class="mb-5 overflow-hidden shadow-sm" style="border-radius: 24px;">
                        <img 
                            src="<?= $postImg; ?>" 
                            alt="<?= htmlspecialchars($post['title'] ?? ''); ?>" 
                            class="w-100 object-fit-cover"
                            style="max-height: 500px; min-height: 320px;"
                        >
                    </div>

                    <!-- Trip Snapshot / Quick Facts Matrix Bar (4 Badges) -->
                    <div class="bg-light rounded-4 p-4 mb-5 border border-light-subtle shadow-2xs" id="trip-facts-bar">
                        <h2 class="h6 fw-bold text-uppercase text-primary letter-spacing-1 mb-3">
                            <i class="bi bi-info-circle-fill me-1"></i> Quick Trip Snapshot
                        </h2>
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-3">
                            <div class="col">
                                <div class="p-3 bg-white rounded-3 border h-100">
                                    <div class="text-muted small mb-1"><i class="bi bi-calendar-event text-primary me-1"></i> Best Season</div>
                                    <div class="fw-bold text-dark small"><?= htmlspecialchars($tripFacts['season']); ?></div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 bg-white rounded-3 border h-100">
                                    <div class="text-muted small mb-1"><i class="bi bi-hourglass-split text-primary me-1"></i> Duration</div>
                                    <div class="fw-bold text-dark small"><?= htmlspecialchars($tripFacts['duration']); ?></div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 bg-white rounded-3 border h-100">
                                    <div class="text-muted small mb-1"><i class="bi bi-geo-alt text-primary me-1"></i> Starting Hub</div>
                                    <div class="fw-bold text-dark small"><?= htmlspecialchars($tripFacts['start_hub']); ?></div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="p-3 bg-white rounded-3 border h-100">
                                    <div class="text-muted small mb-1"><i class="bi bi-car-front text-primary me-1"></i> Ideal Ride</div>
                                    <div class="fw-bold text-dark small"><?= htmlspecialchars($tripFacts['vehicle']); ?></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Article Body Prose -->
                    <div class="article-prose fs-6 text-secondary lh-lg mb-5">
                        
                        <!-- Introduction Lead -->
                        <?php if (!empty($post['content']['intro'])): ?>
                            <p class="lead text-dark fw-medium mb-4 fs-5">
                                <?= htmlspecialchars($post['content']['intro']); ?>
                            </p>
                        <?php else: ?>
                            <p class="lead text-dark fw-medium mb-4 fs-5">
                                <?= htmlspecialchars($post['excerpt'] ?? $post['description'] ?? ''); ?>
                            </p>
                        <?php endif; ?>

                        <!-- Key Highlights Checklist Box -->
                        <div class="my-5 p-4 rounded-4 bg-primary bg-opacity-10 border border-primary border-opacity-25 shadow-2xs">
                            <h2 class="h5 fw-bold text-dark mb-3 d-flex align-items-center gap-2">
                                <i class="bi bi-stars text-warning"></i> Key Highlights of This Tour
                            </h2>
                            <ul class="list-unstyled mb-0 d-flex flex-column gap-2">
                                <?php foreach ($highlights as $hl): ?>
                                    <li class="d-flex align-items-start gap-2">
                                        <i class="bi bi-check-circle-fill text-primary mt-1 flex-shrink-0"></i>
                                        <span class="text-dark fw-medium"><?= htmlspecialchars($hl); ?></span>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>

                        <!-- Subsections with Headings -->
                        <?php if (!empty($post['content']['sections']) && is_array($post['content']['sections'])): ?>
                            <?php foreach ($post['content']['sections'] as $sec): ?>
                                <div class="my-5 pt-2">
                                    <h2 class="h3 fw-bold text-dark mb-3">
                                        <?= htmlspecialchars($sec['heading']); ?>
                                    </h2>
                                    <p class="mb-0 fs-6">
                                        <?= htmlspecialchars($sec['text']); ?>
                                    </p>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>

                        <!-- Curated Day-by-Day Timeline Itinerary Breakdown -->
                        <?php if (!empty($post['itinerary']) && is_array($post['itinerary'])): ?>
                            <div class="my-5 pt-3" id="suggested-itinerary">
                                <div class="d-flex align-items-center gap-2 mb-4 border-bottom pb-3">
                                    <i class="bi bi-map-fill text-primary fs-4"></i>
                                    <h2 class="h4 fw-bold text-dark mb-0">Suggested Itinerary & Schedule</h2>
                                </div>

                                <div class="d-flex flex-column gap-4">
                                    <?php foreach ($post['itinerary'] as $index => $itin): ?>
                                        <div class="p-4 rounded-4 bg-light border border-light-subtle position-relative hover-lift transition-all">
                                            <div class="d-flex flex-wrap align-items-center justify-content-between gap-2 mb-2">
                                                <span class="badge bg-primary text-white rounded-pill px-3 py-1.5 fw-semibold small">
                                                    <?= htmlspecialchars($itin['day']); ?>
                                                </span>
                                            </div>
                                            <h3 class="h5 fw-bold text-dark mb-2">
                                                <?= htmlspecialchars($itin['title']); ?>
                                            </h3>
                                            <p class="text-secondary small mb-0 lh-base">
                                                <?= htmlspecialchars($itin['desc']); ?>
                                            </p>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        <?php endif; ?>

                        <!-- Highlight Quote Box -->
                        <div class="p-4 my-5 rounded-4 bg-light border-start border-4 border-primary shadow-2xs">
                            <p class="fst-italic text-dark mb-2 fs-6">
                                "Travel across North India is as much about the scenic road journey, welcoming dhabas, and changing landscapes as it is about reaching the grand historical monuments."
                            </p>
                            <div class="small fw-bold text-primary">— Taj Mahal Tour Chauffeur Dispatch Team</div>
                        </div>

                        <!-- Pro Tips for Travelers Box -->
                        <div class="my-5 p-4 rounded-4 bg-warning bg-opacity-10 border border-warning border-opacity-50 shadow-2xs" id="pro-tips-card">
                            <h2 class="h5 fw-bold text-dark mb-3 d-flex align-items-center gap-2">
                                <i class="bi bi-lightbulb-fill text-warning"></i> Insider Tips for Travelers
                            </h2>
                            <ul class="list-unstyled mb-0 d-flex flex-column gap-2">
                                <?php foreach ($proTips as $tip): ?>
                                    <li class="d-flex align-items-start gap-2">
                                        <i class="bi bi-arrow-right-circle-fill text-warning mt-1 flex-shrink-0"></i>
                                        <span class="text-dark small fw-medium"><?= htmlspecialchars($tip); ?></span>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>

                        <!-- Vehicle Recommendation Guide (Sedan vs SUV vs Tempo Traveller) -->
                        <div class="my-5 pt-3" id="vehicle-recommendations">
                            <div class="d-flex align-items-center gap-2 mb-4 border-bottom pb-3">
                                <i class="bi bi-car-front-fill text-primary fs-4"></i>
                                <h2 class="h4 fw-bold text-dark mb-0">Recommended Vehicles for this Journey</h2>
                            </div>

                            <div class="row row-cols-1 row-cols-md-3 g-3">
                                <!-- Sedan -->
                                <div class="col">
                                    <div class="card h-100 border rounded-4 p-3 text-center bg-white shadow-2xs">
                                        <div class="fw-bold text-dark mb-1">Standard AC Sedan</div>
                                        <div class="text-muted small mb-2">Dzire / Etios (1-4 Guests)</div>
                                        <p class="text-secondary small mb-3 flex-grow-1">Ideal for couples, solo travelers, and swift expressway drives between cities.</p>
                                        <a href="<?= theme_url('carRentalLocation.php'); ?>" class="btn btn-sm btn-outline-primary rounded-pill">View Sedans</a>
                                    </div>
                                </div>
                                <!-- SUV -->
                                <div class="col">
                                    <div class="card h-100 border-primary rounded-4 p-3 text-center bg-primary bg-opacity-10 shadow-sm position-relative">
                                        <span class="badge bg-primary position-absolute top-0 end-0 m-2 rounded-pill small">Popular</span>
                                        <div class="fw-bold text-primary mb-1">Innova Crysta SUV</div>
                                        <div class="text-muted small mb-2">6-7 Seats (Spacious Comfort)</div>
                                        <p class="text-secondary small mb-3 flex-grow-1">Top recommendation for family circuits, long luggage runs, and mountain roads.</p>
                                        <a href="<?= theme_url('carRentalLocation.php'); ?>" class="btn btn-sm btn-primary rounded-pill">View SUVs</a>
                                    </div>
                                </div>
                                <!-- Tempo Traveller -->
                                <div class="col">
                                    <div class="card h-100 border rounded-4 p-3 text-center bg-white shadow-2xs">
                                        <div class="fw-bold text-dark mb-1">Luxury Tempo Traveller</div>
                                        <div class="text-muted small mb-2">9-16 Seats (Group Travel)</div>
                                        <p class="text-secondary small mb-3 flex-grow-1">Reclining seats, high roof, and dedicated boot space for large families & tours.</p>
                                        <a href="<?= theme_url('carRentalLocation.php'); ?>" class="btn btn-sm btn-outline-primary rounded-pill">View Vans</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Frequently Asked Questions (Article Specific FAQs) -->
                        <?php if (!empty($post['faqs']) && is_array($post['faqs'])): ?>
                            <div class="my-5 pt-3" id="article-faqs">
                                <div class="d-flex align-items-center gap-2 mb-4 border-bottom pb-3">
                                    <i class="bi bi-question-circle-fill text-primary fs-4"></i>
                                    <h2 class="h4 fw-bold text-dark mb-0">Frequently Asked Questions</h2>
                                </div>

                                <div class="accordion d-flex flex-column gap-3" id="blogPostAccordion">
                                    <?php foreach ($post['faqs'] as $qIndex => $faq): ?>
                                        <div class="border rounded-4 overflow-hidden bg-light shadow-2xs">
                                            <div class="p-3 bg-white fw-bold text-dark d-flex align-items-center gap-2">
                                                <i class="bi bi-patch-question text-primary"></i>
                                                <span><?= htmlspecialchars($faq['q']); ?></span>
                                            </div>
                                            <div class="p-3 text-secondary small border-top bg-light">
                                                <?= htmlspecialchars($faq['a']); ?>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        <?php endif; ?>

                        <!-- Conclusion -->
                        <?php if (!empty($post['content']['conclusion'])): ?>
                            <div class="my-4">
                                <h3 class="h5 fw-bold text-dark mb-2">Final Travel Takeaway</h3>
                                <p><?= htmlspecialchars($post['content']['conclusion']); ?></p>
                            </div>
                        <?php endif; ?>

                        <!-- Quick Booking Assistance Box -->
                        <div class="p-4 p-md-5 mt-5 rounded-4 bg-dark text-white d-flex flex-column flex-md-row align-items-md-center justify-content-between gap-4 shadow-sm" style="background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%);">
                            <div>
                                <span class="badge bg-warning text-dark fw-bold rounded-pill px-3 py-1 mb-2">
                                    <i class="bi bi-shield-check me-1"></i> VERIFIED CHAUFFEURS
                                </span>
                                <h3 class="h4 fw-bold mb-2">Planning a Similar North India Tour?</h3>
                                <p class="text-white-50 small mb-0" style="max-width: 500px;">
                                    Hire a certified, police-verified driver with sanitized AC cabs from Delhi, Agra, Jaipur, or Varanasi. Doorstep pickup & transparent billing.
                                </p>
                            </div>
                            <div class="d-flex flex-column flex-sm-row gap-2 flex-shrink-0">
                                <a href="<?= theme_url('index.php#booking'); ?>" class="btn btn-primary rounded-pill px-4 py-2.5 fw-bold shadow-sm text-nowrap">
                                    Book Tour Cab &rarr;
                                </a>
                                <a href="<?= function_exists('site_phone') ? site_phone(false) : 'tel:+918800722606'; ?>" class="btn btn-outline-light rounded-pill px-3 py-2.5 fw-semibold d-inline-flex align-items-center justify-content-center gap-2 text-nowrap">
                                    <i class="bi bi-telephone-fill text-warning"></i>
                                    <span>Call Support</span>
                                </a>
                            </div>
                        </div>

                    </div>

                    <!-- Article Footer / Share Bar -->
                    <div class="d-flex flex-wrap align-items-center justify-content-between border-top pt-4 gap-3">
                        <a href="<?= theme_url('blog/index.php'); ?>" class="btn btn-outline-secondary rounded-pill px-4 py-2 small fw-semibold">
                            &larr; Back to All Articles
                        </a>

                        <div class="d-flex align-items-center gap-2">
                            <span class="small text-secondary me-2">Share this story:</span>
                            <a href="https://api.whatsapp.com/send?text=<?= urlencode(($post['title'] ?? '') . ' - ' . (isset($_SERVER['HTTP_HOST']) ? 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] : '')); ?>" target="_blank" rel="noopener noreferrer" class="btn btn-sm btn-outline-success rounded-circle d-flex align-items-center justify-content-center" style="width: 38px; height: 38px;" title="Share on WhatsApp">
                                <i class="bi bi-whatsapp"></i>
                            </a>
                            <a href="<?= function_exists('site_phone') ? site_phone(false) : 'tel:+918800722606'; ?>" class="btn btn-sm btn-outline-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 38px; height: 38px;" title="Call Helpline">
                                <i class="bi bi-telephone"></i>
                            </a>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </article>

    <!-- 3. Related Articles Section -->
    <?php if (!empty($relatedPosts)): ?>
        <section class="py-5 bg-light" id="related-blog-articles">
            <div class="container py-lg-3">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <div>
                        <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-1.5 rounded-pill fw-semibold mb-1 small">
                            EXPLORE MORE
                        </span>
                        <h3 class="h4 fw-bold text-dark mb-0 font-serif">
                            Related Travel Guides & Stories
                        </h3>
                    </div>
                    <a href="<?= theme_url('blog/index.php'); ?>" class="btn btn-sm btn-outline-primary rounded-pill px-3 py-1.5 fw-semibold small">
                        View All Articles &rarr;
                    </a>
                </div>

                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <?php foreach ($relatedPosts as $rel): ?>
                        <?php 
                            $relLink = theme_url('blog/specificBlogTemplate.php?slug=' . urlencode($rel['slug']));
                            $relImg = theme_url($rel['image']);
                        ?>
                        <div class="col">
                            <div class="card h-100 border-0 bg-white rounded-4 overflow-hidden shadow-sm hover-lift transition-all">
                                <div class="position-relative overflow-hidden" style="height: 190px;">
                                    <a href="<?= $relLink; ?>">
                                        <img src="<?= $relImg; ?>" alt="<?= htmlspecialchars($rel['title']); ?>" class="w-100 h-100 object-fit-cover hover-scale" style="transition: transform 0.35s ease;">
                                    </a>
                                    <span class="position-absolute top-0 start-0 m-3 badge bg-dark bg-opacity-75 text-white rounded-pill px-3 py-1 small">
                                        <?= htmlspecialchars($rel['tag'] ?? 'TRAVEL'); ?>
                                    </span>
                                </div>
                                <div class="card-body p-4 d-flex flex-column">
                                    <div class="d-flex align-items-center gap-2 text-muted small mb-2">
                                        <i class="bi bi-clock"></i>
                                        <span><?= htmlspecialchars($rel['date']); ?></span>
                                    </div>
                                    <h4 class="h6 fw-bold text-dark mb-2 text-truncate-2">
                                        <a href="<?= $relLink; ?>" class="text-decoration-none text-dark hover-primary">
                                            <?= htmlspecialchars($rel['title']); ?>
                                        </a>
                                    </h4>
                                    <p class="text-secondary small mb-3 flex-grow-1 text-truncate-2">
                                        <?= htmlspecialchars($rel['excerpt'] ?? $rel['description'] ?? ''); ?>
                                    </p>
                                    <a href="<?= $relLink; ?>" class="text-primary fw-semibold small text-decoration-none mt-auto">
                                        Read Guide &rarr;
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <!-- 4. Client Testimonials Component (Reusable) -->
    <?php require_once __DIR__ . '/../components/testimonials.php'; ?>

    <!-- 5. Frequently Asked Questions (Reusable) -->
    <?php require_once __DIR__ . '/../components/faq.php'; ?>

    <!-- 6. Final Booking Call to Action (Reusable) -->
    <?php require_once __DIR__ . '/../components/cta.php'; ?>

</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>

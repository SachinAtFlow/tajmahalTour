<?php
/**
 * Master Error Page (404, 400, 403, 500, 503)
 * File: 404.php
 * 
 * Styled according to the Taj Mahal Tour luxury design system:
 * Bootstrap 5 utilities, CSS variables, modular includes, and travel-themed content.
 */

// Check for status code via GET param, Apache REDIRECT_STATUS, or existing response code
$code = 404;

if (isset($_GET['code']) && is_numeric($_GET['code'])) {
    $code = (int)$_GET['code'];
} elseif (isset($_SERVER['REDIRECT_STATUS']) && is_numeric($_SERVER['REDIRECT_STATUS']) && $_SERVER['REDIRECT_STATUS'] >= 400) {
    $code = (int)$_SERVER['REDIRECT_STATUS'];
} elseif (http_response_code() >= 400) {
    $code = http_response_code();
}

http_response_code($code);

// Error details configuration tailored for North India travel service
$errors = [
    400 => [
        'badge'       => '400 • Bad Request',
        'heading'     => 'Invalid Request',
        'subheading'  => 'Something Went Wrong.',
        'description' => "We couldn't process your request due to an invalid syntax or unexpected parameter. Please check the URL or select a destination below.",
        'icon'        => 'bi-exclamation-triangle-fill'
    ],
    403 => [
        'badge'       => '403 • Access Restricted',
        'heading'     => 'Permission Denied',
        'subheading'  => 'Restricted Destination.',
        'description' => 'You do not have permission to view this resource or directory. If you believe this is an error, please reach out to our 24/7 travel desk.',
        'icon'        => 'bi-shield-slash-fill'
    ],
    404 => [
        'badge'       => '404 • Page Not Found',
        'heading'     => "Oops! We Couldn't",
        'subheading'  => 'Find That Destination.',
        'description' => "The tour package, guide, or route you're looking for might have been moved, renamed, or is temporarily off the itinerary. Let's get you back on track for your journey!",
        'icon'        => 'bi-geo-alt-fill'
    ],
    500 => [
        'badge'       => '500 • Internal Server Error',
        'heading'     => 'Technical Glitch',
        'subheading'  => 'We Are Fixing It.',
        'description' => 'Our servers ran into an unexpected issue while preparing your itinerary. Our technical team is on it. Please try again in a few moments.',
        'icon'        => 'bi-hdd-network-fill'
    ],
    503 => [
        'badge'       => '503 • Service Unavailable',
        'heading'     => 'Under Maintenance',
        'subheading'  => 'Back In A Moment.',
        'description' => 'Our reservation servers are undergoing brief scheduled maintenance to serve your North India travel bookings better. Please check back shortly.',
        'icon'        => 'bi-tools'
    ]
];

$errorInfo = $errors[$code] ?? [
    'badge'       => "{$code} • Unexpected Error",
    'heading'     => 'Unexpected Issue',
    'subheading'  => 'Something Happened.',
    'description' => 'An unexpected issue occurred while loading this page. Please return home or contact our 24/7 customer support for instant booking assistance.',
    'icon'        => 'bi-exclamation-circle-fill'
];

// Determine web root prefix dynamically so assets load accurately from any URL depth
$scriptDir = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? ''));
if ($scriptDir === '/' || $scriptDir === '.' || empty($scriptDir)) {
    $rootPrefix = '/';
} else {
    $rootPrefix = rtrim($scriptDir, '/') . '/';
}

$page_title = "{$code} - {$errorInfo['heading']} | Taj Mahal Tour";
require_once __DIR__ . '/includes/header.php';
?>

<main id="error-page" class="py-5 bg-light position-relative overflow-hidden" style="min-height: 75vh;">

    <!-- Ambient Glowing Background Blobs -->
    <div class="position-absolute top-0 start-50 translate-middle-x pointer-events-none" style="width: 600px; height: 350px; background: radial-gradient(circle, rgba(59, 113, 254, 0.12) 0%, rgba(59, 113, 254, 0) 70%); filter: blur(50px); z-index: 0;"></div>
    <div class="position-absolute bottom-0 end-0 pointer-events-none" style="width: 450px; height: 350px; background: radial-gradient(circle, rgba(245, 158, 11, 0.08) 0%, rgba(245, 158, 11, 0) 70%); filter: blur(60px); z-index: 0;"></div>

    <div class="container py-lg-4 position-relative" style="z-index: 1;">
        
        <!-- Luxury Floating Error Card -->
        <div class="card border-0 rounded-5 shadow-lg overflow-hidden bg-white p-4 p-sm-5 p-lg-5" style="border: 1px solid rgba(226, 232, 240, 0.8) !important;">
            
            <div class="row align-items-center g-4 g-lg-5">
                
                <!-- Left Side: Content & Actions -->
                <div class="col-lg-7 order-2 order-lg-1">
                    
                    <!-- Status Badge -->
                    <div class="mb-3">
                        <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-2 rounded-pill fw-bold d-inline-flex align-items-center gap-2">
                            <i class="<?= htmlspecialchars($errorInfo['icon']); ?>"></i>
                            <span><?= htmlspecialchars($errorInfo['badge']); ?></span>
                        </span>
                    </div>

                    <!-- Main Heading with Primary Gradient Highlight -->
                    <h1 class="display-5 fw-bold text-dark tracking-tight lh-sm mb-3">
                        <?= htmlspecialchars($errorInfo['heading']); ?>
                        <span class="d-block text-primary">
                            <?= htmlspecialchars($errorInfo['subheading']); ?>
                        </span>
                    </h1>

                    <!-- Reassuring Travel-Oriented Description -->
                    <p class="text-secondary lead fs-6 mb-4 lh-base" style="max-width: 580px;">
                        <?= htmlspecialchars($errorInfo['description']); ?>
                    </p>

                    <!-- Action Buttons -->
                    <div class="d-flex flex-wrap align-items-center gap-3 pt-2 mb-4">
                        <!-- Primary "Back to Home" Button -->
                        <a href="<?= theme_url('index.php'); ?>" class="btn btn-primary rounded-pill px-4 py-3 fw-bold shadow-sm d-inline-flex align-items-center gap-2 hover-lift">
                            <span>Back To Home</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>

                        <!-- Secondary Context-Aware Button -->
                        <?php if ($code === 500 || $code === 503): ?>
                            <a href="<?= theme_url('contactUs.php'); ?>" class="btn btn-outline-secondary rounded-pill px-4 py-3 fw-semibold d-inline-flex align-items-center gap-2 hover-lift">
                                <i class="bi bi-telephone-fill text-primary"></i>
                                <span>Contact Support</span>
                            </a>
                        <?php else: ?>
                            <a href="<?= theme_url('tourPackage.php'); ?>" class="btn btn-outline-primary rounded-pill px-4 py-3 fw-semibold d-inline-flex align-items-center gap-2 hover-lift">
                                <i class="bi bi-compass-fill"></i>
                                <span>Explore Tour Packages</span>
                            </a>
                        <?php endif; ?>
                    </div>

                    <!-- Quick Navigation Links Bar -->
                    <div class="pt-4 border-top border-light-subtle">
                        <div class="d-flex flex-wrap align-items-center gap-2 small">
                            <span class="text-secondary fw-bold text-uppercase me-1" style="font-size: 11px; letter-spacing: 0.5px;">Quick Links:</span>
                            <a href="<?= theme_url('tourPackage.php'); ?>" class="text-dark text-decoration-none fw-semibold hover-primary px-2 py-1 rounded-pill bg-light">
                                Tour Packages
                            </a>
                            <span class="text-muted">&bull;</span>
                            <a href="<?= theme_url('carRentalLocation.php'); ?>" class="text-dark text-decoration-none fw-semibold hover-primary px-2 py-1 rounded-pill bg-light">
                                Car Rental
                            </a>
                            <span class="text-muted">&bull;</span>
                            <a href="<?= theme_url('blog/index.php'); ?>" class="text-dark text-decoration-none fw-semibold hover-primary px-2 py-1 rounded-pill bg-light">
                                Travel Blog
                            </a>
                            <span class="text-muted">&bull;</span>
                            <a href="<?= theme_url('aboutUs.php'); ?>" class="text-dark text-decoration-none fw-semibold hover-primary px-2 py-1 rounded-pill bg-light">
                                About Us
                            </a>
                            <span class="text-muted">&bull;</span>
                            <a href="<?= theme_url('contactUs.php'); ?>" class="text-dark text-decoration-none fw-semibold hover-primary px-2 py-1 rounded-pill bg-light">
                                Contact Us
                            </a>
                        </div>
                    </div>

                    <!-- 24/7 Helpline Strip -->
                    <div class="mt-4 pt-3 d-flex flex-wrap align-items-center gap-3 text-secondary small">
                        <div class="d-flex align-items-center gap-2">
                            <span class="badge bg-success rounded-circle p-1 d-inline-block"></span>
                            <span>24/7 Chauffeur Helpline:</span>
                        </div>
                        <a href="<?= function_exists('site_phone') ? site_phone(false) : 'tel:+918800722606'; ?>" class="text-dark fw-bold text-decoration-none hover-primary">
                            <i class="bi bi-telephone-fill text-primary me-1"></i> <?= function_exists('site_phone') ? site_phone(true) : '+91 88007 22606'; ?>
                        </a>
                        <span class="text-muted">&bull;</span>
                        <a href="<?= function_exists('site_whatsapp_link') ? site_whatsapp_link('Hi, I need assistance on Taj Mahal Tour') : 'https://wa.me/919810723370'; ?>" target="_blank" rel="noopener noreferrer" class="text-success fw-bold text-decoration-none">
                            <i class="bi bi-whatsapp me-1"></i> WhatsApp Support
                        </a>
                    </div>

                </div>

                <!-- Right Side: Big Styled Error Code Visual Display -->
                <div class="col-lg-5 order-1 order-lg-2 text-center position-relative py-3 py-lg-0">
                    
                    <!-- Decorative Soft Gradient Circle Backdrop -->
                    <div class="position-absolute top-50 start-50 translate-middle rounded-circle pointer-events-none" style="width: 280px; height: 280px; background: radial-gradient(circle, rgba(59, 113, 254, 0.15) 0%, rgba(59, 113, 254, 0) 70%);"></div>

                    <!-- Large Gradient Error Numeral -->
                    <div class="position-relative d-inline-block select-none">
                        <span class="display-1 fw-bold tracking-tighter" style="font-size: clamp(5.5rem, 13vw, 11rem); font-weight: 900; line-height: 0.9; color: var(--primary-color); background: linear-gradient(135deg, var(--primary-color) 0%, #1e40af 50%, #60a5fa 100%); -webkit-background-clip: text; background-clip: text; -webkit-text-fill-color: transparent; filter: drop-shadow(0 12px 24px rgba(59, 113, 254, 0.25)); display: inline-block;">
                            <?= (int)$code; ?>
                        </span>

                        <!-- Floating Compass Destination Pin Badge -->
                        <div class="position-absolute top-0 end-0 translate-middle-y badge bg-white border shadow-sm rounded-pill p-2 px-3 text-dark d-flex align-items-center gap-2" style="transform: rotate(6deg);">
                            <i class="bi bi-compass text-primary fs-5"></i>
                            <span class="small fw-bold">Lost Route?</span>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>
</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>


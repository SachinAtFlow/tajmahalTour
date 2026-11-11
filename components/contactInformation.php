<?php
/**
 * Contact Information Component
 * 4 Responsive Cards with direct click-to-call, email, and location details.
 * Sourced directly from central data/contactData.php
 */
if (!function_exists('getSiteContact')) {
    $contactDataPath = __DIR__ . '/../data/contactData.php';
    if (file_exists($contactDataPath)) {
        require_once $contactDataPath;
    }
}
$siteContact = function_exists('getSiteContact') ? getSiteContact() : [];

$contactDetails = [
    [
        'icon' => 'bi-geo-alt-fill',
        'color' => 'primary',
        'title' => $siteContact['address']['delhi']['title'] ?? 'Agra Head Office',
        'subtitle' => $siteContact['address']['delhi']['subtitle'] ?? 'Monument & Tour Operations',
        'line1' => $siteContact['address']['delhi']['line1'] ?? 'Krishna Nagar, New Delhi - 110051',
        'line2' => $siteContact['address']['delhi']['line2'] ?? 'Delhi, India',
        'link' => $siteContact['address']['delhi']['map_link'] ?? 'https://maps.app.goo.gl/pRwZnKFnjWYEqPZj8',
        'link_text' => 'View on Map'
    ],
    [
        'icon' => 'bi-building-fill',
        'color' => 'success',
        'title' => 'Tour Operations & Fleet Hub',
        'subtitle' => 'North India & Golden Triangle',
        'line1' => 'Delhi, Agra, Rajasthan & Punjab',
        'line2' => '24/7 Verified Chauffeur Service',
        'link' => function_exists('site_phone') ? site_phone(false) : 'tel:+918800722606',
        'link_text' => 'Call Operations'
    ],
    [
        'icon' => 'bi-telephone-fill',
        'color' => 'warning',
        'title' => '24/7 Helpline & WhatsApp',
        'subtitle' => 'Instant Booking Assistance',
        'line1' => ($siteContact['whatsapp']['display'] ?? '+91 98107 23370') . ' (WhatsApp)',
        'line2' => ($siteContact['phone']['display'] ?? '+91 88007 22606') . ' / ' . ($siteContact['phone']['alternate'] ?? '+91-9871777590'),
        'link' => function_exists('site_whatsapp_link') ? site_whatsapp_link('Hello Taj Mahal Tour, I would like to inquire about your tour and cab services.') : 'https://wa.me/919810723370',
        'link_text' => 'Chat on WhatsApp'
    ],
    [
        'icon' => 'bi-envelope-paper-fill',
        'color' => 'danger',
        'title' => 'Email Support',
        'subtitle' => 'Custom Itineraries & Quotes',
        'line1' => $siteContact['email']['primary'] ?? 'uniqueholidaytrip@gmail.com',
        'line2' => '24/7 Dedicated Support',
        'link' => function_exists('site_email') ? site_email('primary', true) : 'mailto:uniqueholidaytrip@gmail.com',
        'link_text' => 'Send Email'
    ]
];
?>

<!-- Contact Information Cards Section -->
<section class="py-5 bg-white position-relative" id="contact-information">
    <div class="container py-lg-4">
        
        <div class="text-center mb-5">
            <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-2 rounded-pill fw-semibold mb-2">
                <i class="bi bi-pin-map-fill me-1"></i> OUR OFFICES & CHANNELS
            </span>
            <h2 class="display-6 fw-bold text-dark mb-2">
                Get in Touch with Our Travel Experts
            </h2>
            <p class="text-secondary mx-auto mb-0" style="max-width: 620px;">
                Have questions about our Taj Mahal tours, North India itineraries, or private chauffeur rentals? We are available 24/7 to assist you.
            </p>
        </div>

        <div class="row g-4">
            <?php foreach ($contactDetails as $item): ?>
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="card h-100 border border-light-subtle rounded-4 p-4 shadow-xs hover-lift text-center">
                        <div class="mx-auto mb-3 bg-<?= $item['color']; ?> bg-opacity-10 text-<?= $item['color']; ?> rounded-circle d-flex align-items-center justify-content-center" style="width: 64px; height: 64px;">
                            <i class="bi <?= $item['icon']; ?> fs-3"></i>
                        </div>
                        <h5 class="fw-bold text-dark mb-1" style="font-size: 1.05rem;">
                            <?= htmlspecialchars($item['title']); ?>
                        </h5>
                        <span class="text-primary small fw-semibold d-block mb-2">
                            <?= htmlspecialchars($item['subtitle']); ?>
                        </span>
                        <p class="text-secondary small mb-3 flex-grow-1" style="line-height: 1.5;">
                            <?= htmlspecialchars($item['line1']); ?><br>
                            <?= htmlspecialchars($item['line2']); ?>
                        </p>
                        <div class="pt-2 border-top border-light-subtle">
                            <a href="<?= htmlspecialchars($item['link']); ?>" target="_blank" rel="noopener" class="text-<?= $item['color']; ?> fw-semibold small text-decoration-none d-inline-flex align-items-center gap-1">
                                <span><?= htmlspecialchars($item['link_text']); ?></span>
                                <i class="bi bi-arrow-right small"></i>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>


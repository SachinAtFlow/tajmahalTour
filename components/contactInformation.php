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
        'title' => $siteContact['address']['agra']['title'] ?? 'Agra Head Office',
        'subtitle' => $siteContact['address']['agra']['subtitle'] ?? 'Monument & Tour Operations',
        'line1' => $siteContact['address']['agra']['line1'] ?? 'Fatehabad Road, Near Taj East Gate',
        'line2' => $siteContact['address']['agra']['line2'] ?? 'Agra, Uttar Pradesh - 282001',
        'link' => $siteContact['address']['agra']['map_link'] ?? 'https://maps.google.com/?q=Taj+Mahal+Agra',
        'link_text' => 'View on Map'
    ],
    [
        'icon' => 'bi-building-fill',
        'color' => 'success',
        'title' => $siteContact['address']['delhi']['title'] ?? 'Delhi NCR Branch',
        'subtitle' => $siteContact['address']['delhi']['subtitle'] ?? 'Fleet & Chauffeur Hub',
        'line1' => $siteContact['address']['delhi']['line1'] ?? 'Krishna Nagar, East Delhi',
        'line2' => $siteContact['address']['delhi']['line2'] ?? 'New Delhi - 110051, India',
        'link' => $siteContact['address']['delhi']['map_link'] ?? 'https://maps.google.com/?q=Krishna+Nagar+Delhi',
        'link_text' => 'Get Directions'
    ],
    [
        'icon' => 'bi-telephone-fill',
        'color' => 'warning',
        'title' => '24/7 Helpline & WhatsApp',
        'subtitle' => 'Instant Booking Assistance',
        'line1' => ($siteContact['whatsapp']['display'] ?? '+91 88007 22606') . ' (WhatsApp)',
        'line2' => ($siteContact['phone']['alt_display'] ?? '+91 98765 43210') . ' (Direct Call)',
        'link' => function_exists('site_whatsapp_link') ? site_whatsapp_link('Hello TajMahalTour, I would like to inquire about your tour and cab services.') : 'https://wa.me/918800722606',
        'link_text' => 'Chat on WhatsApp'
    ],
    [
        'icon' => 'bi-envelope-paper-fill',
        'color' => 'danger',
        'title' => 'Email Support',
        'subtitle' => 'Custom Itineraries & Quotes',
        'line1' => $siteContact['email']['primary'] ?? 'info@tajmahaltour.com',
        'line2' => $siteContact['email']['booking'] ?? 'booking@tajmahaltour.com',
        'link' => function_exists('site_email') ? site_email('primary', true) : 'mailto:info@tajmahaltour.com',
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


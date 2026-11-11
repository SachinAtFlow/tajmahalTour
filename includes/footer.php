<?php
$rootPrefix = !file_exists('assets/css/style.css') ? '../' : '';

// Ensure Centralized Contact & Social Data is loaded
if (!function_exists('getSiteContact')) {
    $contactDataPath = __DIR__ . '/../data/contactData.php';
    if (file_exists($contactDataPath)) {
        require_once $contactDataPath;
    }
}

if (!function_exists('theme_url')) {
    function theme_url($url = '') {
        global $rootPrefix;
        if (empty($url) || strpos($url, 'http://') === 0 || strpos($url, 'https://') === 0 || strpos($url, '#') === 0 || strpos($url, 'tel:') === 0 || strpos($url, 'mailto:') === 0 || strpos($url, 'javascript:') === 0) {
            return $url;
        }
        return ($rootPrefix ?? '') . ltrim($url, '/');
    }
}
?>
<!-- Footer Section -->
<footer id="site-footer" class="bg-dark text-white-50 pt-5 pb-3 mt-5">
    <div class="container">
        <div class="row g-4">
            <!-- About Us Column -->
            <div class="col-lg-4 col-md-6">
                <h5 class="text-white fw-bold mb-3 d-flex align-items-center">
                    <i class="bi bi-compass text-primary me-2"></i> TajMahal<span class="text-primary">Tour</span>
                </h5>
                <p class="small text-white-50">
                    We offer premier guided tours to the world-renowned Taj Mahal and heritage sites in Agra. Enjoy private AC transport, expert local historians, skip-the-line monument entries, and memorable experiences.
                </p>
                <div class="d-flex gap-2 mt-3">
                    <a href="<?= site_social('facebook'); ?>" target="_blank" rel="noopener noreferrer" class="btn btn-outline-secondary btn-sm rounded-circle text-white" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                    <a href="<?= site_social('x'); ?>" target="_blank" rel="noopener noreferrer" class="btn btn-outline-secondary btn-sm rounded-circle text-white" aria-label="X / Twitter"><i class="bi bi-twitter-x"></i></a>
                    <a href="<?= site_social('youtube'); ?>" target="_blank" rel="noopener noreferrer" class="btn btn-outline-secondary btn-sm rounded-circle text-white" aria-label="YouTube"><i class="bi bi-youtube"></i></a>
                    <a href="<?= site_social('linkedin'); ?>" target="_blank" rel="noopener noreferrer" class="btn btn-outline-secondary btn-sm rounded-circle text-white" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="col-lg-2 col-md-6">
                <h6 class="text-white fw-semibold mb-3">Quick Links</h6>
                <ul class="list-unstyled small mb-0 d-flex flex-column gap-2">
                    <li><a href="<?= theme_url('index.php'); ?>" class="text-white-50 text-decoration-none hover-white"><i class="bi bi-chevron-right text-primary small me-1"></i> Home</a></li>
                    <li><a href="<?= theme_url('aboutUs.php'); ?>" class="text-white-50 text-decoration-none hover-white"><i class="bi bi-chevron-right text-primary small me-1"></i> About Us</a></li>
                    <li><a href="<?= theme_url('carRentalLocation.php'); ?>" class="text-white-50 text-decoration-none hover-white"><i class="bi bi-chevron-right text-primary small me-1"></i> Car Rental</a></li>
                    <li><a href="<?= theme_url('tourPackage.php'); ?>" class="text-white-50 text-decoration-none hover-white"><i class="bi bi-chevron-right text-primary small me-1"></i> Tour Packages</a></li>
                    <li><a href="<?= theme_url('gallery.php'); ?>" class="text-white-50 text-decoration-none hover-white"><i class="bi bi-chevron-right text-primary small me-1"></i> Tour & Fleet Gallery</a></li>
                    <li><a href="<?= theme_url('blog/index.php'); ?>" class="text-white-50 text-decoration-none hover-white"><i class="bi bi-chevron-right text-primary small me-1"></i> Travel Blog</a></li>
                    <li><a href="<?= theme_url('contactUs.php'); ?>" class="text-white-50 text-decoration-none hover-white"><i class="bi bi-chevron-right text-primary small me-1"></i> Contact Us</a></li>
                </ul>
            </div>

            <!-- Popular Tour Packages -->
            <div class="col-lg-3 col-md-6">
                <h6 class="text-white fw-semibold mb-3">Popular Tours</h6>
                <ul class="list-unstyled small mb-0 d-flex flex-column gap-2">
                    <li><a href="#featured-tours" class="text-white-50 text-decoration-none"><i class="bi bi-check2 text-primary me-1"></i> Sunrise Taj Mahal Tour</a></li>
                    <li><a href="#featured-tours" class="text-white-50 text-decoration-none"><i class="bi bi-check2 text-primary me-1"></i> Same Day Agra Tour by Car</a></li>
                    <li><a href="#featured-tours" class="text-white-50 text-decoration-none"><i class="bi bi-check2 text-primary me-1"></i> Agra Tour by Gatimaan Express</a></li>
                    <li><a href="#featured-tours" class="text-white-50 text-decoration-none"><i class="bi bi-check2 text-primary me-1"></i> Agra Fort & Mehtab Bagh Tour</a></li>
                    <li><a href="#featured-tours" class="text-white-50 text-decoration-none"><i class="bi bi-check2 text-primary me-1"></i> Golden Triangle 3 Days Tour</a></li>
                </ul>
            </div>

            <!-- Contact Information -->
            <div class="col-lg-3 col-md-6" id="contact">
                <h6 class="text-white fw-semibold mb-3">Contact Our Office</h6>
                <ul class="list-unstyled small text-white-50 d-flex flex-column gap-2 mb-0">
                    <li class="d-flex align-items-start">
                        <i class="bi bi-geo-alt-fill text-primary me-2 mt-1"></i>
                        <a href="<?= htmlspecialchars(getSiteContact('address', 'delhi')['map_link'] ?? 'https://maps.app.goo.gl/pRwZnKFnjWYEqPZj8'); ?>" target="_blank" rel="noopener noreferrer" class="text-white-50 text-decoration-none hover-white" title="Open Office Location in Google Maps">
                            <?= htmlspecialchars(getSiteContact('address', 'delhi')['full'] ?? 'Krishna Nagar, New Delhi - 110051, Delhi, India'); ?>
                        </a>
                    </li>
                    <li class="d-flex align-items-center">
                        <i class="bi bi-telephone-fill text-primary me-2"></i>
                        <a href="<?= site_phone(false); ?>" class="text-white-50 text-decoration-none hover-white"><?= site_phone(true); ?></a>
                    </li>
                    <li class="d-flex align-items-center">
                        <i class="bi bi-whatsapp text-success me-2"></i>
                        <a href="<?= site_whatsapp(false); ?>" target="_blank" rel="noopener noreferrer" class="text-white-50 text-decoration-none hover-white"><?= site_whatsapp(true); ?> (WhatsApp)</a>
                    </li>
                    <li class="d-flex align-items-center">
                        <i class="bi bi-envelope-fill text-primary me-2"></i>
                        <a href="<?= site_email('primary', true); ?>" class="text-white-50 text-decoration-none hover-white"><?= site_email(); ?></a>
                    </li>
                    <li class="d-flex align-items-center">
                        <i class="bi bi-shield-check text-primary me-2"></i>
                        <span>Govt. Approved Tour Operators</span>
                    </li>
                </ul>
            </div>
        </div>

        <hr class="border-secondary my-4">

        <!-- Bottom Copyright -->
        <div class="row align-items-center small">
            <div class="col-md-6 text-center text-md-start mb-2 mb-md-0">
                &copy; <?php echo date('Y'); ?> <strong class="text-white">TajMahalTour</strong>. All Rights Reserved.
            </div>
            <div class="col-md-6 text-center text-md-end">
                <span class="text-white-50 me-3">Design and Developed by <a href="https://www.techgosh.com/" target="_blank" rel="noopener noreferrer" class="text-white-50 text-decoration-none hover-white">Tech Gosh</a></span>
                <a href="privacy-policy.php" class="text-white-50 text-decoration-none me-3 hover-white">Privacy Policy</a>
                <a href="terms-conditions.php" class="text-white-50 text-decoration-none hover-white">Terms &amp; Conditions</a>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap 5 Bundle JS CDN (includes Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<!-- Swiper JS CDN -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Global Config & Utils Scripts (per AGENTS.md rule 8) -->
<script src="<?= $rootPrefix; ?>assets/js/config.js"></script>
<script src="<?= $rootPrefix; ?>assets/js/utils.js"></script>

<!-- Component Scripts -->
<script src="<?= $rootPrefix; ?>assets/js/header.js"></script>
<script src="<?= $rootPrefix; ?>assets/js/components/testimonial.js"></script>

<!-- Interactive Scripts for Search Form -->
<script>
    // Location Selection Handler
    document.addEventListener('DOMContentLoaded', function() {
        const locationItems = document.querySelectorAll('.location-option, .destination-search .st-scrollbar li:not(.parent_li)');
        const locationInput = document.getElementById('location_name_hotel');
        const locationIdInput = document.getElementById('location_id');

        locationItems.forEach(function(item) {
            item.addEventListener('click', function() {
                const text = this.innerText;
                const val = this.getAttribute('data-value') || '';
                if (locationInput) locationInput.value = text.trim();
                if (locationIdInput) locationIdInput.value = val;
                
                // Close dropdown if open
                const dropdownEl = document.getElementById('dropdown-destination-hotel');
                if (dropdownEl) {
                    const bsDropdown = bootstrap.Dropdown.getInstance(dropdownEl) || new bootstrap.Dropdown(dropdownEl);
                    if (bsDropdown) bsDropdown.hide();
                }
            });
        });
    });

    // Plus/Minus Count Handler for Guests & Rooms
    function changeCount(fieldId, delta) {
        const input = document.getElementById(fieldId);
        if (!input) return;

        let currentVal = parseInt(input.value) || 0;
        const min = parseInt(input.getAttribute('data-min')) || 0;
        const max = parseInt(input.getAttribute('data-max')) || 99;

        let newVal = currentVal + delta;
        if (newVal >= min && newVal <= max) {
            input.value = newVal;
            updateGuestSummary();
        }
    }

    function updateGuestSummary() {
        const rooms = parseInt(document.getElementById('room_num_search')?.value) || 1;
        const adults = parseInt(document.getElementById('adult_number')?.value) || 1;
        const children = parseInt(document.getElementById('child_number')?.value) || 0;

        const totalGuests = adults + children;
        const guestText = totalGuests === 1 ? '1 guest' : totalGuests + ' guests';
        const roomText = rooms === 1 ? '1 room' : rooms + ' rooms';

        const summaryEl = document.getElementById('guestSummaryText');
        if (summaryEl) {
            summaryEl.innerText = guestText + ', ' + roomText;
        }
    }

    // Date Picker Display Updater
    function updateDateDisplay(dateInput, displayId, hiddenInputId) {
        if (!dateInput.value) return;
        const parts = dateInput.value.split('-'); // YYYY-MM-DD
        if (parts.length === 3) {
            const formatted = parts[1] + '/' + parts[2] + '/' + parts[0];
            const displayEl = document.getElementById(displayId);
            const hiddenEl = document.getElementById(hiddenInputId);
            if (displayEl) displayEl.innerText = formatted;
            if (hiddenEl) hiddenEl.value = formatted;
        }
    }
</script>

</body>
</html>


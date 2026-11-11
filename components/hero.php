<?php
/**
 * Hero Section with Swiper Carousel & Modern Left Whitish Gradient Overlay
 * File: components/hero.php
 * Hero Carousel Images: India Gate, Rajasthan, Taj Mahal, Car Rental
 */

$heroSlides = [
    [
        'image' => 'assets/images/heroImages/indiaGate.jpg',
        'alt'   => 'India Gate Delhi Sightseeing Tour'
    ],
    [
        'image' => 'assets/images/heroImages/rajasthanhero.png',
        'alt'   => 'Royal Rajasthan Heritage Forts & Palaces'
    ],
    [
        'image' => 'assets/images/heroImages/tajmahalhero.png',
        'alt'   => 'Iconic Taj Mahal Agra Guided Tour'
    ],
    [
        'image' => 'assets/images/heroImages/carRentalHero.png',
        'alt'   => 'Executive Chauffeur Car Rental North India'
    ]
];
?>

<!-- Hero Section with Swiper Carousel & Left Whitish Gradient -->
<section id="hero-banner" class="hero-section position-relative d-flex flex-column align-items-start justify-content-start align-items-lg-center justify-content-lg-center overflow-visible pt-3 pt-sm-4 pt-lg-5 pb-4 pb-lg-5">
    
    <!-- Swiper Carousel Background -->
    <div class="swiper hero-swiper position-absolute top-0 start-0 w-100 h-100 z-1">
        <div class="swiper-wrapper">
            <?php foreach ($heroSlides as $idx => $slide): ?>
                <?php 
                    $resolvedImg = function_exists('theme_url') ? theme_url($slide['image']) : $slide['image']; 
                    $altText = htmlspecialchars($slide['alt']);
                ?>
                <div class="swiper-slide">
                    <img 
                        src="<?= htmlspecialchars($resolvedImg); ?>" 
                        class="hero-carousel-img w-100 h-100 object-fit-cover" 
                        alt="<?= $altText; ?>"
                        loading="<?= $idx === 0 ? 'eager' : 'lazy'; ?>"
                    >
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Whitish Gradient Overlay on Left Side (Matching Provided Reference Image) -->
    <div class="hero-whitish-overlay position-absolute top-0 start-0 w-100 h-100 z-2 pointer-events-none"></div>

    <!-- Hero Content Container (Positioned on Left over Whitish Gradient) -->
    <div class="container position-relative z-3 pt-1 pt-sm-2 pt-lg-5 pb-0 pb-lg-5 my-0 my-lg-auto">
        <div class="row align-items-center">
            <div class="col-lg-7 col-xl-6 text-start">
                <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-1.5 rounded-pill fw-semibold small mb-2 mb-sm-3 d-inline-flex align-items-center gap-2 shadow-xs">
                    <i class="bi bi-compass-fill"></i> North India Premier Tour &amp; Cab Service
                </span>
                <h1 class="display-5 fw-bold text-dark mb-2 mb-lg-3 lh-sm">
                    Explore India’s Best Tours &amp; Car Rentals
                </h1>
                <p class="lead text-secondary mb-0 mb-lg-4 fs-6 fs-md-5 fw-normal">
                    Reliable private cabs and custom holiday packages for Delhi, Agra, Rajasthan, Himachal &amp; Wildlife.
                </p>
            </div>
        </div>
    </div>

    <!-- Banner Search Form (Desktop: 50% bottom overlap | Phone: In-flow directly below content) -->
    <div class="elementor-container elementor-column-gap-default hero-search-wrapper w-100 px-3 z-3" style="max-width: 1170px;">
        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7992d52a" data-id="7992d52a" data-element_type="column" data-e-type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-56787504 elementor-widget elementor-widget-st_banner_form" data-id="56787504" data-element_type="widget" data-e-type="widget" data-settings="{&quot;style&quot;:&quot;style_2&quot;,&quot;type_form&quot;:&quot;single&quot;}" data-widget_type="st_banner_form.default">
                    <div class="elementor-widget-container">
                        <div id="booking" class="bg-white rounded-5 shadow-lg p-2 p-lg-3 mx-auto text-start">
                            <form id="home-booking-form" action="#featured-tours" class="d-flex flex-column flex-lg-row align-items-stretch align-items-lg-center justify-content-between gap-2 m-0" method="get">
                                    
                                <!-- Location Field -->
                                <div class="dropdown flex-grow-1 border-bottom border-lg-bottom-0 border-lg-end border-light-subtle px-3 py-2">
                                    <div id="dropdown-destination-hotel" role="button" class="d-flex align-items-center dropdown-toggle text-decoration-none cursor-pointer" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                        <i class="bi bi-geo-alt-fill text-primary fs-3 me-3"></i>
                                        <div class="flex-grow-1">
                                            <label class="form-label small fw-bold text-dark d-block mb-0">Location</label>
                                            <input type="text" class="form-control-plaintext p-0 small fw-medium text-secondary shadow-none" autocomplete="off" id="location_name_hotel" name="location_name" value="" placeholder="Where are you going?">
                                            <input type="hidden" name="location_id" id="location_id" value="">
                                        </div>
                                    </div>
                                    <ul class="dropdown-menu shadow border-0 rounded-4 p-2 w-100" style="max-height: 260px; overflow-y: auto;" aria-labelledby="dropdown-destination-hotel">
                                        <li class="dropdown-header text-uppercase small fw-bold text-muted px-3 py-2">Popular Destinations</li>
                                        <li><a class="dropdown-item py-2 rounded-3 d-flex align-items-center location-option" data-value="101" href="javascript:void(0)"><i class="bi bi-geo-alt text-primary me-2"></i>Agra, Uttar Pradesh</a></li>
                                        <li><a class="dropdown-item py-2 rounded-3 d-flex align-items-center location-option" data-value="102" href="javascript:void(0)"><i class="bi bi-geo-alt text-primary me-2"></i>New Delhi, India</a></li>
                                        <li><a class="dropdown-item py-2 rounded-3 d-flex align-items-center location-option" data-value="103" href="javascript:void(0)"><i class="bi bi-geo-alt text-primary me-2"></i>Jaipur, Rajasthan</a></li>
                                        <li><a class="dropdown-item py-2 rounded-3 d-flex align-items-center location-option" data-value="104" href="javascript:void(0)"><i class="bi bi-geo-alt text-primary me-2"></i>Varanasi, Uttar Pradesh</a></li>
                                        <li><hr class="dropdown-divider my-1"></li>
                                        <li class="dropdown-header text-uppercase small fw-bold text-muted px-3 py-2">International</li>
                                        <li><a class="dropdown-item py-2 rounded-3 d-flex align-items-center location-option" data-value="55" href="javascript:void(0)"><i class="bi bi-geo-alt text-primary me-2"></i>California, USA</a></li>
                                        <li><a class="dropdown-item py-2 rounded-3 d-flex align-items-center location-option" data-value="56" href="javascript:void(0)"><i class="bi bi-geo-alt text-primary me-2"></i>Los Angeles, USA</a></li>
                                        <li><a class="dropdown-item py-2 rounded-3 d-flex align-items-center location-option" data-value="61" href="javascript:void(0)"><i class="bi bi-geo-alt text-primary me-2"></i>New York City, USA</a></li>
                                    </ul>
                                </div>

                                <!-- Check In / Check Out Field -->
                                <div class="d-flex align-items-center flex-grow-1 border-bottom border-lg-bottom-0 border-lg-end border-light-subtle px-3 py-2">
                                    <!-- Checkin -->
                                    <div class="d-flex align-items-center cursor-pointer flex-grow-1" onclick="document.getElementById('nativeCheckinDate').showPicker ? document.getElementById('nativeCheckinDate').showPicker() : document.getElementById('nativeCheckinDate').focus()">
                                        <i class="bi bi-calendar-check-fill text-primary fs-3 me-3"></i>
                                        <div>
                                            <label class="form-label small fw-bold text-dark d-block mb-0">Check in</label>
                                            <div class="small fw-medium text-secondary" id="checkinRender"><?php echo date('m/d/Y'); ?></div>
                                        </div>
                                    </div>
                                    
                                    <i class="bi bi-arrow-right text-muted mx-3"></i>

                                    <!-- Checkout -->
                                    <div class="d-flex align-items-center cursor-pointer flex-grow-1" onclick="document.getElementById('nativeCheckoutDate').showPicker ? document.getElementById('nativeCheckoutDate').showPicker() : document.getElementById('nativeCheckoutDate').focus()">
                                        <i class="bi bi-calendar-x-fill text-primary fs-3 me-3"></i>
                                        <div>
                                            <label class="form-label small fw-bold text-dark d-block mb-0">Check out</label>
                                            <div class="small fw-medium text-secondary" id="checkoutRender"><?php echo date('m/d/Y', strtotime('+1 day')); ?></div>
                                        </div>
                                    </div>

                                    <input type="date" id="nativeCheckinDate" class="visually-hidden" value="<?php echo date('Y-m-d'); ?>" onchange="updateDateDisplay(this, 'checkinRender', 'startInput')">
                                    <input type="date" id="nativeCheckoutDate" class="visually-hidden" value="<?php echo date('Y-m-d', strtotime('+1 day')); ?>" onchange="updateDateDisplay(this, 'checkoutRender', 'endInput')">
                                    <input type="hidden" class="check-in-input" id="startInput" value="<?php echo date('m/d/Y'); ?>" name="start">
                                    <input type="hidden" class="check-out-input" id="endInput" value="<?php echo date('m/d/Y', strtotime('+1 day')); ?>" name="end">
                                </div>

                                <!-- Guests Field -->
                                <div class="dropdown flex-grow-1 px-3 py-2">
                                    <div class="d-flex align-items-center dropdown-toggle text-decoration-none cursor-pointer" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                        <i class="bi bi-people-fill text-primary fs-3 me-3"></i>
                                        <div class="flex-grow-1">
                                            <label class="form-label small fw-bold text-dark d-block mb-0">Guests</label>
                                            <div class="small fw-medium text-secondary" id="guestSummaryText">1 guest, 1 room</div>
                                        </div>
                                    </div>
                                    <div class="dropdown-menu shadow border-0 rounded-4 p-3" style="min-width: 290px;">
                                        <!-- Rooms -->
                                        <div class="d-flex align-items-center justify-content-between py-2 border-bottom">
                                            <span class="small fw-semibold text-dark">Rooms</span>
                                            <div class="d-flex align-items-center gap-2">
                                                <button type="button" class="btn btn-outline-secondary btn-sm rounded-circle p-0 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;" onclick="changeCount('room_num_search', -1)"><i class="bi bi-dash"></i></button>
                                                <input type="text" id="room_num_search" name="room_num_search" value="1" class="form-control-plaintext text-center fw-bold p-0" style="width: 36px;" readonly data-min="1" data-max="14">
                                                <button type="button" class="btn btn-outline-secondary btn-sm rounded-circle p-0 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;" onclick="changeCount('room_num_search', 1)"><i class="bi bi-plus"></i></button>
                                            </div>
                                        </div>
                                        <!-- Adults -->
                                        <div class="d-flex align-items-center justify-content-between py-2 border-bottom">
                                            <span class="small fw-semibold text-dark">Adults</span>
                                            <div class="d-flex align-items-center gap-2">
                                                <button type="button" class="btn btn-outline-secondary btn-sm rounded-circle p-0 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;" onclick="changeCount('adult_number', -1)"><i class="bi bi-dash"></i></button>
                                                <input type="text" id="adult_number" name="adult_number" value="1" class="form-control-plaintext text-center fw-bold p-0" style="width: 36px;" readonly data-min="1" data-max="80">
                                                <button type="button" class="btn btn-outline-secondary btn-sm rounded-circle p-0 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;" onclick="changeCount('adult_number', 1)"><i class="bi bi-plus"></i></button>
                                            </div>
                                        </div>
                                        <!-- Children -->
                                        <div class="d-flex align-items-center justify-content-between py-2">
                                            <span class="small fw-semibold text-dark">Children</span>
                                            <div class="d-flex align-items-center gap-2">
                                                <button type="button" class="btn btn-outline-secondary btn-sm rounded-circle p-0 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;" onclick="changeCount('child_number', -1)"><i class="bi bi-dash"></i></button>
                                                <input type="text" id="child_number" name="child_number" value="0" class="form-control-plaintext text-center fw-bold p-0" style="width: 36px;" readonly data-min="0" data-max="9">
                                                <button type="button" class="btn btn-outline-secondary btn-sm rounded-circle p-0 d-flex align-items-center justify-content-center" style="width: 32px; height: 32px;" onclick="changeCount('child_number', 1)"><i class="bi bi-plus"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Search Button -->
                                <div class="p-1">
                                    <button type="submit" class="btn btn-primary rounded-pill px-4 py-3 fw-semibold text-white shadow-sm d-flex align-items-center justify-content-center gap-2 w-100 w-lg-auto">
                                        <i class="bi bi-search"></i> Search
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Hero Background Swiper Initialization -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const heroSwiperEl = document.querySelector('.hero-swiper');
    if (heroSwiperEl && typeof Swiper !== 'undefined') {
        new Swiper(heroSwiperEl, {
            effect: 'fade',
            fadeEffect: {
                crossFade: true
            },
            loop: true,
            speed: 1200,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false
            },
            allowTouchMove: true,
            observer: true,
            observeParents: true
        });
    }
});
</script>


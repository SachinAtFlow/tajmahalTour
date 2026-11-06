<?php
/**
 * Dynamic Car Rental Template by Location & City
 * North India Scope: Delhi NCR, Agra, Jaipur, Gurgaon, Noida, Chandigarh, Uttarakhand, Himachal.
 */
require_once __DIR__ . '/data/carRentalCitiesData.php';

// Resolve requested city slug (Default: delhi-ncr)
$cityKey = $_GET['city'] ?? 'delhi-ncr';
$cityData = getCarRentalCityData($cityKey);

// Page Metadata for header
$page_title = $cityData['page_title'] . " - Taj Mahal Tour";

require_once 'includes/header.php';
?>

<main>
    <!-- 1. Dynamic Hero Banner with City Switcher & Quick Booking Bar -->
    <?php require_once 'components/carRentalHero.php'; ?>

    <!-- 2. Local City Sightseeing Fleet (8h/80km) -->
    <?php require_once 'components/localCarType.php'; ?>

    <!-- 3. Outstation Road Trips Fleet (Round-Trip / One-Way) -->
    <?php require_once 'components/outstationCarType.php'; ?>

    <!-- 4. Prominent Service Locations Grid Across North India -->
    <?php require_once 'components/serviceLocationsGrid.php'; ?>

    <!-- 5. Destinations to Explore (Continuous Marquee) -->
    <?php require_once 'components/serviceAreaMap.php'; ?>

    <!-- 6. How It Works – Book in 3 Easy Steps -->
    <?php require_once 'components/howItWorks.php'; ?>

    <!-- 7. Police-Verified Driver Safety & Fleet Standards -->
    <?php require_once 'components/safetyVarified.php'; ?>

    <!-- 8. Guest Reviews & Experiences -->
    <?php require_once 'components/testimonials.php'; ?>

    <!-- 9. Quick Booking & Cab Inquiry Form -->
    <?php require_once 'components/booking.php'; ?>

    <!-- 10. Frequently Asked Questions (FAQ) -->
    <?php require_once 'components/faq.php'; ?>

    <!-- 11. Final Call To Action Banner -->
    <?php require_once 'components/cta.php'; ?>
</main>

<?php require_once 'includes/footer.php'; ?>


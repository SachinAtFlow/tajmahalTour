<?php
$page_title = "Tour Packages - Explore North India & Taj Mahal Holiday Tours";
require_once 'includes/header.php';
?>

<main>
    <!-- 1. Dedicated Tour Packages Hero Banner with Quick Search/Filter Bar -->
    <?php require_once 'components/tourPackageHero.php'; ?>

    <!-- 2. Navbar Level 1 Categories 3D Showcase (Swiper Coverflow) -->
    <?php require_once 'components/attraction.php'; ?>

    <!-- 3. Interactive Tour Packages Showcase with Regional Filter Tabs -->
    <?php require_once 'components/featuredTour.php'; ?>

    <!-- 3. Destinations & Regions to Explore (Continuous Marquee) -->
    <?php require_once 'components/serviceAreaMap.php'; ?>

<!-- Local & Outstation Car Type -->
    <?php require_once 'components/localCarType.php'; ?>
    <?php require_once 'components/outStationCarType.php'; ?>


    <!-- 4. How It Works – Book in 3 Easy Steps -->
    <?php require_once 'components/howItWorks.php'; ?>

    <!-- 5. Police-Verified Driver Safety & Fleet Standards -->
    <?php require_once 'components/safetyVarified.php'; ?>

<!-- About -->
<?php require_once 'components/about.php'; ?>

    <!-- 6. Client Testimonials & Experiences -->
    <?php require_once 'components/testimonials.php'; ?>

    <!-- 7. Customized Tour Planning & Fast Reservation Form -->
    <?php //require_once 'components/booking.php'; ?>

    <!-- 8. Tour Memories Marquee Strip -->
    <?php require_once 'components/gallerySection.php'; ?>

<!-- Blog -->
<?php require_once 'components/blog.php'; ?>

    <!-- 9. Frequently Asked Questions (FAQ) -->
    <?php require_once 'components/faq.php'; ?>



    <!-- 10. Modern Call To Action Banner -->
    <?php require_once 'components/cta.php'; ?>
</main>

<?php require_once 'includes/footer.php'; ?>


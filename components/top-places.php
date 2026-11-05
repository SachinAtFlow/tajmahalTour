<?php
$destinations = [
    [
        'name' => 'Delhi',
        'count' => '12 Tours',
        'image' => 'assets/images/delhi/indiaGate.avif',
        'link' => 'tourPackageDetail.php?tour=delhi-tour'
    ],
    [
        'name' => 'Uttar Pradesh',
        'count' => '18 Tours',
        'image' => 'assets/images/uttarPradesh/tajmahal.avif',
        'link' => 'tourPackageDetail.php?tour=uttar-pradesh'
    ],
    [
        'name' => 'Himachal',
        'count' => '14 Tours',
        'image' => 'assets/images/himachal/himachal.avif',
        'link' => 'himachaltours/himachalholidays.html'
    ],
    [
        'name' => 'Rajasthan',
        'count' => '16 Tours',      
        'image' => 'assets/images/rajasthan/jaipur.avif',
        'link' => 'tourPackageDetail.php?tour=rajasthan'
    ],
    [
        'name' => 'Punjab',
        'count' => '7 Tours',
        'image' => 'assets/images/punjab/goldenTemple.avif',
        'link' => 'tourPackageDetail.php?tour=punjab'
    ],
    [
        'name' => 'Uttarakhand',
        'count' => '10 Tours',
        'image' => 'assets/images/uttrakhand/uttrakhand.avif',
        'link' => 'tourPackageDetail.php?tour=uttarakhand'
    ],
    [
        'name' => 'Gujarat',
        'count' => '9 Tours',
        'image' => 'assets/images/gujrat/gujrat-ropeway.avif',
        'link' => 'tourPackageDetail.php?tour=gujarat'
    ],
    [
        'name' => 'Nepal',
        'count' => '8 Tours',
        'image' => 'assets/images/nepal/nepal.avif',
        'link' => 'tourPackageDetail.php?tour=nepal'
    ]
];
?>

<!-- Top Destinations Section (Infinite Marquee) -->
<section class="bg-white overflow-hidden section-after-hero py-5" id="top-destinations">
    <div class="container-fluid px-4">

        <!-- SECTION HEADING -->
        <div class="text-center mb-5">
            <h2 class="fw-bold text-dark">
                Top destinations
            </h2>
        </div>

        <!-- INFINITE MARQUEE -->
        <div class="w-100 overflow-hidden destination-marquee">
            <div class="destination-track">

                <!-- FIRST GROUP -->
                <div class="d-flex align-items-start flex-shrink-0 destination-group">
                    <?php foreach ($destinations as $destination): ?>
                        <div class="destination-card text-center px-3">
                            <a href="<?php echo htmlspecialchars($destination['link']); ?>" class="text-decoration-none">
                                
                                <!-- CIRCLE IMAGE -->
                                <div class="destination-img rounded-circle overflow-hidden mx-auto mb-3 shadow-sm bg-light">
                                    <img
                                        src="<?php echo htmlspecialchars($destination['image']); ?>"
                                        alt="<?php echo htmlspecialchars($destination['name']); ?>"
                                        class="img-fluid w-100 h-100 object-fit-cover"
                                        loading="lazy"
                                    >
                                </div>

                                <!-- NAME -->
                                <h6 class="fw-bold text-dark mb-1">
                                    <?php echo htmlspecialchars($destination['name']); ?>
                                </h6>

                                <!-- TOUR COUNT -->
                                <p class="text-secondary small mb-0">
                                    <?php echo htmlspecialchars($destination['count']); ?>
                                </p>

                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>

                <!-- DUPLICATE GROUP FOR INFINITE LOOP -->
                <div class="d-flex align-items-start flex-shrink-0 destination-group" aria-hidden="true">
                    <?php foreach ($destinations as $destination): ?>
                        <div class="destination-card text-center px-3">
                            <a href="<?php echo htmlspecialchars($destination['link']); ?>" class="text-decoration-none" tabindex="-1">
                                
                                <!-- CIRCLE IMAGE -->
                                <div class="destination-img rounded-circle overflow-hidden mx-auto mb-3 shadow-sm bg-light">
                                    <img
                                        src="<?php echo htmlspecialchars($destination['image']); ?>"
                                        alt=""
                                        class="img-fluid w-100 h-100 object-fit-cover"
                                        loading="lazy"
                                    >
                                </div>

                                <h6 class="fw-bold text-dark mb-1">
                                    <?php echo htmlspecialchars($destination['name']); ?>
                                </h6>

                                <p class="text-secondary small mb-0">
                                    <?php echo htmlspecialchars($destination['count']); ?>
                                </p>

                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>

            </div>
        </div>

    </div>
</section>

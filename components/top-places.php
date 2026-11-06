<?php
if (!function_exists('getDestinationTourCount')) {
    function getDestinationTourCount($folder) {
        $dataFile = __DIR__ . '/../' . $folder . '/data.php';
        if (file_exists($dataFile)) {
            $tours = [];
            include $dataFile;
            if (!empty($tours) && is_array($tours)) {
                return count($tours) . ' Tours';
            }
        }
        return '5 Tours';
    }
}

$destinations = [
    [
        'name' => 'Delhi',
        'count' => getDestinationTourCount('samedaytour'),
        'image' => 'assets/images/delhi/indiaGate.avif',
        'link' => 'samedaytour/index.php'
    ],
    [
        'name' => 'Uttar Pradesh',
        'count' => getDestinationTourCount('uttarpradeshtour'),
        'image' => 'assets/images/uttarPradesh/tajmahal.avif',
        'link' => 'uttarpradeshtour/index.php'
    ],
    [
        'name' => 'Himachal',
        'count' => getDestinationTourCount('himachaltour'),
        'image' => 'assets/images/himachal/himachal.avif',
        'link' => 'himachaltour/index.php'
    ],
    [
        'name' => 'Rajasthan',
        'count' => getDestinationTourCount('rajasthantour'),
        'image' => 'assets/images/rajasthan/rajasthan.avif',
        'link' => 'rajasthantour/index.php'
    ],
    [
        'name' => 'Punjab',
        'count' => getDestinationTourCount('punjabtour'),
        'image' => 'assets/images/punjab/goldenTemple.avif',
        'link' => 'punjabtour/index.php'
    ],
    [
        'name' => 'Uttarakhand',
        'count' => getDestinationTourCount('uttarakhandtour'),
        'image' => 'assets/images/uttrakhand/uttrakhand.avif',
        'link' => 'uttarakhandtour/index.php'
    ],
    [
        'name' => 'Gujarat',
        'count' => getDestinationTourCount('gujarattour'),
        'image' => 'assets/images/gujrat/gujrat.avif',
        'link' => 'gujarattour/index.php'
    ],
    [
        'name' => 'Nepal',
        'count' => getDestinationTourCount('nepaltour'),
        'image' => 'assets/images/nepal/nepal.avif',
        'link' => 'nepaltour/index.php'
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
                        <?php 
                            $destLink = function_exists('theme_url') ? theme_url($destination['link']) : $destination['link'];
                            $destImg = function_exists('theme_url') ? theme_url($destination['image']) : $destination['image'];
                        ?>
                        <div class="destination-card text-center px-3">
                            <a href="<?php echo htmlspecialchars($destLink); ?>" class="text-decoration-none">
                                
                                <!-- CIRCLE IMAGE -->
                                <div class="destination-img rounded-circle overflow-hidden mx-auto mb-3 shadow-sm bg-light">
                                    <img
                                        src="<?php echo htmlspecialchars($destImg); ?>"
                                        alt="<?php echo htmlspecialchars($destination['name'] . ' Tour Destination'); ?>"
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
                        <?php 
                            $destLink = function_exists('theme_url') ? theme_url($destination['link']) : $destination['link'];
                            $destImg = function_exists('theme_url') ? theme_url($destination['image']) : $destination['image'];
                        ?>
                        <div class="destination-card text-center px-3">
                            <a href="<?php echo htmlspecialchars($destLink); ?>" class="text-decoration-none" tabindex="-1">
                                
                                <!-- CIRCLE IMAGE -->
                                <div class="destination-img rounded-circle overflow-hidden mx-auto mb-3 shadow-sm bg-light">
                                    <img
                                        src="<?php echo htmlspecialchars($destImg); ?>"
                                        alt="<?php echo htmlspecialchars($destination['name'] . ' Tour Destination'); ?>"
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

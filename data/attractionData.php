<?php
/**
 * Attraction & Coverflow Showcase Data
 * File: data/attractionData.php
 * 
 * Central data repository for 3D Coverflow Attraction / Tour Category showcases across North India:
 * Delhi NCR, Uttar Pradesh (Agra/Mathura/Varanasi), Rajasthan, Himachal Pradesh,
 * Uttarakhand, Punjab, Gujarat, and Nepal.
 */

if (!function_exists('getAttractionDataSets')) {
    /**
     * Returns all predefined attraction datasets
     * @return array
     */
    function getAttractionDataSets() {
        return [
            // 1. Navbar Tour Categories (Default for Tour Packages Page)
            'tourCategories' => [
                'eyebrow' => 'SIGNATURE CIRCUITS',
                'icon' => 'bi bi-compass-fill',
                'title' => 'Explore By Tour Category',
                'description' => 'Browse our handpicked North India tour circuits. Swipe and click any category to view curated itineraries.',
                'items' => [
                    [
                        'title' => 'Same Day Tour',
                        'subtitle' => 'Agra, Delhi, Mathura & Jaipur Excursions',
                        'image' => 'assets/images/uttarPradesh/tajmahal.avif',
                        'link' => 'samedaytour/index.php',
                        'category' => 'same-day',
                    ],
                    [
                        'title' => 'Golden Triangle Tour',
                        'subtitle' => 'Delhi • Agra • Jaipur Classic Circuit',
                        'image' => 'assets/images/rajasthan/jaipur.avif',
                        'link' => 'goldentriangletour/index.php',
                        'category' => 'all',
                    ],
                    [
                        'title' => 'Rajasthan Tour',
                        'subtitle' => 'Jaipur, Udaipur, Jodhpur & Desert Camps',
                        'image' => 'assets/images/rajasthan/rajasthan.avif',
                        'link' => 'rajasthantour/index.php',
                        'category' => 'rajasthan',
                    ],
                    [
                        'title' => 'Himachal Tour',
                        'subtitle' => 'Shimla, Manali & Solang Valley Vistas',
                        'image' => 'assets/images/himachal/himachal.avif',
                        'link' => 'himachaltour/index.php',
                        'category' => 'himachal',
                    ],
                    [
                        'title' => 'Uttarakhand Tour',
                        'subtitle' => 'Rishikesh, Mussoorie, Nainital & Auli',
                        'image' => 'assets/images/uttrakhand/uttrakhand.avif',
                        'link' => 'uttarakhandtour/index.php',
                        'category' => 'uttarakhand',
                    ],
                    [
                        'title' => 'Punjab Tour',
                        'subtitle' => 'Amritsar, Golden Temple & Wagah Border',
                        'image' => 'assets/images/punjab/goldenTemple.avif',
                        'link' => 'punjabtour/index.php',
                        'category' => 'punjab',
                    ],
                    [
                        'title' => 'Uttar Pradesh Tour',
                        'subtitle' => 'Taj Mahal, Varanasi Ghats & Ayodhya',
                        'image' => 'assets/images/uttarPradesh/tajmahal.avif',
                        'link' => 'uttarpradeshtour/index.php',
                        'category' => 'uttar-pradesh',
                    ],
                    [
                        'title' => 'Gujarat Tour',
                        'subtitle' => 'Rann of Kutch, Somnath & Dwarka',
                        'image' => 'assets/images/gujrat/gujrat.avif',
                        'link' => 'gujarattour/index.php',
                        'category' => 'gujarat',
                    ],
                    [
                        'title' => 'Nepal Tour',
                        'subtitle' => 'Kathmandu, Pokhara & Everest Flights',
                        'image' => 'assets/images/nepal/nepal.avif',
                        'link' => 'nepaltour/index.php',
                        'category' => 'nepal',
                    ],
                    [
                        'title' => 'Spiritual Tour',
                        'subtitle' => 'Char Dham, Kashi Vishwanath & Temple Trails',
                        'image' => 'assets/images/uttrakhand/kedarnath.avif',
                        'link' => 'spiritualtour/index.php',
                        'category' => 'spiritual',
                    ],
                    [
                        'title' => 'Wildlife Tour',
                        'subtitle' => 'Corbett, Ranthambore & Tiger Reserves',
                        'image' => 'assets/images/wildlife/ranthambhore.avif',
                        'link' => 'wildlifetour/index.php',
                        'category' => 'wildlife',
                    ],
                    [
                        'title' => 'Weekend Tour',
                        'subtitle' => 'Quick 2–3 Days Escapes from Delhi NCR',
                        'image' => 'assets/images/delhi/indiaGate.avif',
                        'link' => 'weekendtour/index.php',
                        'category' => 'weekend',
                    ],
                ]
            ],

            // 2. North India Iconic Landmarks & Attractions
            'popularAttractions' => [
                'eyebrow' => 'ICONIC LANDMARKS',
                'icon' => 'bi bi-geo-alt-fill',
                'title' => 'Top North India Attractions',
                'description' => 'Explore world-renowned monuments, royal palaces, sacred ghats, and Himalayan vistas.',
                'items' => [
                    [
                        'title' => 'Taj Mahal, Agra',
                        'subtitle' => 'UNESCO World Wonder • Uttar Pradesh',
                        'image' => 'assets/images/uttarPradesh/tajmahal.avif',
                        'link' => 'samedaytour/specificTourTemplate.php?tour=agra-taj-mahal-same-day-tour',
                        'category' => 'uttar-pradesh',
                    ],
                    [
                        'title' => 'Hawa Mahal & Amber Fort',
                        'subtitle' => 'Royal Heritage & Pink City • Rajasthan',
                        'image' => 'assets/images/rajasthan/jaipur.avif',
                        'link' => 'rajasthantour/specificTourTemplate.php?tour=royal-rajasthan-tour-16-days',
                        'category' => 'rajasthan',
                    ],
                    [
                        'title' => 'Golden Temple, Amritsar',
                        'subtitle' => 'Spiritual Reverence & Langar • Punjab',
                        'image' => 'assets/images/punjab/goldenTemple.avif',
                        'link' => 'punjabtour/specificTourTemplate.php?tour=amritsar-golden-temple-2-days',
                        'category' => 'punjab',
                    ],
                    [
                        'title' => 'Solang Valley, Manali',
                        'subtitle' => 'Snow Valleys & Himalayan Passes • Himachal',
                        'image' => 'assets/images/himachal/manali.avif',
                        'link' => 'himachaltour/specificTourTemplate.php?tour=himachal-holidays-hill-station-tour',
                        'category' => 'himachal',
                    ],
                    [
                        'title' => 'Lakshman Jhula & Ganga Aarti',
                        'subtitle' => 'Yoga Capital & Sacred River • Rishikesh, Uttarakhand',
                        'image' => 'assets/images/uttrakhand/rishikesh.avif',
                        'link' => 'uttarakhandtour/specificTourTemplate.php?tour=haridwar-rishikesh-3-days-tour',
                        'category' => 'uttarakhand',
                    ],
                    [
                        'title' => 'India Gate & Qutub Minar',
                        'subtitle' => 'Imperial Capital Monuments • New Delhi',
                        'image' => 'assets/images/delhi/indiaGate.avif',
                        'link' => 'samedaytour/specificTourTemplate.php?tour=delhi-sightseeing-same-day-tour',
                        'category' => 'delhi',
                    ],
                    [
                        'title' => 'Great Rann of Kutch',
                        'subtitle' => 'White Salt Desert & Cultural Fiesta • Gujarat',
                        'image' => 'assets/images/gujrat/rannofkutch.avif',
                        'link' => 'gujarattour/specificTourTemplate.php?tour=rann-of-kutch-white-desert-tour',
                        'category' => 'gujarat',
                    ],
                    [
                        'title' => 'Pashupatinath & Pokhara',
                        'subtitle' => 'Ancient Temples & Annapurna Peaks • Nepal',
                        'image' => 'assets/images/nepal/pokhra.avif',
                        'link' => 'nepaltour/specificTourTemplate.php?tour=kathmandu-pashupatinath-tour-4-days',
                        'category' => 'nepal',
                    ],
                ]
            ],

            // 3. Golden Triangle Circuit Highlights
            'goldenTriangle' => [
                'eyebrow' => 'THE ROYAL CIRCUIT',
                'icon' => 'bi bi-gem',
                'title' => 'Golden Triangle Wonders',
                'description' => 'Experience the legendary triad of Delhi, Agra, and Jaipur with royal palaces and grand architecture.',
                'items' => [
                    [
                        'title' => 'Taj Mahal & Agra Fort',
                        'subtitle' => 'Mughal Architecture & Yamuna Riverfront',
                        'image' => 'assets/images/uttarPradesh/tajmahal.avif',
                        'link' => 'samedaytour/specificTourTemplate.php?tour=agra-taj-mahal-same-day-tour',
                        'category' => 'uttar-pradesh',
                    ],
                    [
                        'title' => 'Amber Fort & City Palace',
                        'subtitle' => 'Royal Rajputana Splendor in Jaipur',
                        'image' => 'assets/images/rajasthan/jaipur.avif',
                        'link' => 'goldentriangletour/specificTourTemplate.php?tour=delhi-agra-jaipur-tour-4-days',
                        'category' => 'rajasthan',
                    ],
                    [
                        'title' => 'India Gate & Humayun Tomb',
                        'subtitle' => 'Historic Monuments & Green Boulevards in Delhi',
                        'image' => 'assets/images/delhi/humayunTomb.avif',
                        'link' => 'samedaytour/specificTourTemplate.php?tour=delhi-sightseeing-same-day-tour',
                        'category' => 'delhi',
                    ],
                    [
                        'title' => 'Fatehpur Sikri',
                        'subtitle' => 'Red Sandstone Ghost City & Buland Darwaza',
                        'image' => 'assets/images/uttarPradesh/tajmahal2.avif',
                        'link' => 'samedaytour/specificTourTemplate.php?tour=agra-taj-mahal-same-day-tour',
                        'category' => 'uttar-pradesh',
                    ],
                ]
            ],

            // 4. Himalayan Hill Stations & Escapes
            'himalayanEscapes' => [
                'eyebrow' => 'SERENE ALTITUDES',
                'icon' => 'bi bi-tree-fill',
                'title' => 'Himalayan Mountain Retreats',
                'description' => 'Breathe crisp alpine air across Himachal Pradesh and Uttarakhand hill sanctuaries.',
                'items' => [
                    [
                        'title' => 'Shimla & Kufri',
                        'subtitle' => 'Colonial Charm & Pine Ridges • Himachal Pradesh',
                        'image' => 'assets/images/himachal/shimla.avif',
                        'link' => 'himachaltour/specificTourTemplate.php?tour=delhi-to-shimla-weekend-tour',
                        'category' => 'himachal',
                    ],
                    [
                        'title' => 'Manali & Rohtang Pass',
                        'subtitle' => 'Glacial Streams & Snow Adventure • Himachal Pradesh',
                        'image' => 'assets/images/himachal/manali.avif',
                        'link' => 'himachaltour/specificTourTemplate.php?tour=himachal-holidays-hill-station-tour',
                        'category' => 'himachal',
                    ],
                    [
                        'title' => 'Mussoorie & Queen of Hills',
                        'subtitle' => 'Panoramic Doon Valley Views • Uttarakhand',
                        'image' => 'assets/images/uttrakhand/mussoorie.avif',
                        'link' => 'uttarakhandtour/specificTourTemplate.php?tour=mussoorie-dehradun-weekend-tour',
                        'category' => 'uttarakhand',
                    ],
                    [
                        'title' => 'Rishikesh & Haridwar',
                        'subtitle' => 'Holy Ganga & Himalayan Foothills • Uttarakhand',
                        'image' => 'assets/images/uttrakhand/haridwar.avif',
                        'link' => 'uttarakhandtour/specificTourTemplate.php?tour=haridwar-rishikesh-3-days-tour',
                        'category' => 'uttarakhand',
                    ],
                    [
                        'title' => 'Kathmandu Valley & Pokhara',
                        'subtitle' => 'Phewa Lake & Annapurna Sanctuary • Nepal',
                        'image' => 'assets/images/nepal/nepal.avif',
                        'link' => 'nepaltour/specificTourTemplate.php?tour=kathmandu-pashupatinath-tour-4-days',
                        'category' => 'nepal',
                    ],
                ]
            ],
        ];
    }
}

if (!function_exists('getAttractionData')) {
    /**
     * Retrieve a specific attraction dataset by key
     * @param string $key Dataset identifier (e.g., 'tourCategories', 'popularAttractions')
     * @return array
     */
    function getAttractionData($key = 'tourCategories') {
        $datasets = getAttractionDataSets();
        if (isset($datasets[$key])) {
            return $datasets[$key];
        }
        return $datasets['tourCategories'];
    }
}


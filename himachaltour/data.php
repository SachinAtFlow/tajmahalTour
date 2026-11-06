<?php
/**
 * Himachal Tour Packages Data
 * File: himachaltour/data.php
 */

$categoryTitle = 'Himachal Tour';
$categorySlug = 'himachaltour';
$categoryTag = 'HIMALAYAN PARADISE';
$categoryDescription = 'Breathe crisp mountain air across snow-capped Himalayan peaks, pine ridges, apple orchards, and sacred mountain rivers in Himachal Pradesh.';
$categoryHeroImage = 'assets/images/himachal/himachal.avif';

$tours = [
    'delhi-to-shimla-weekend-tour' => [
        'slug' => 'delhi-to-shimla-weekend-tour',
        'title' => 'Delhi To Shimla Weekend Tour',
        'tag' => 'QUICK GETAWAY',
        'duration' => '3 Days / 2 Nights',
        'pickup' => 'Delhi NCR',
        'drop' => 'Delhi NCR / As per itinerary',
        'vehicle' => 'Private AC Mountain Chauffeur Cab',
        'rating' => '4.9',
        'reviews_count' => '320+',
        'price_start' => '₹9,500',
        'image' => 'assets/images/himachal/shimla.avif',
        'overview' => 'Quick refreshing escape to the Queen of Hills. Stroll the historic colonial Mall Road, visit Christ Church, and take in the panoramic Himalayan views at Kufri.',
        'highlights' => array (
  0 => 'Stroll along Shimla Mall Road and the historic Ridge',
  1 => 'Visit Kufri winter sports park and Himalayan Nature Park',
  2 => 'Panoramic views of snow-draped Shivalik ranges',
  3 => 'Comfortable roundtrip drive via Himalayan Expressway',
),
        'itinerary' => array (
  0 => 
  array (
    'time' => 'Day 01',
    'title' => 'Delhi to Shimla Scenic Drive',
    'desc' => 'Early departure from Delhi. Drive via the Himalayan Expressway to Shimla. Evening stroll along Mall Road.',
  ),
  1 => 
  array (
    'time' => 'Day 02',
    'title' => 'Kufri & Shimla Sightseeing',
    'desc' => 'Excursion to Kufri, Mahasu Peak, Jakhoo Temple, and Christ Church.',
  ),
  2 => 
  array (
    'time' => 'Day 03',
    'title' => 'Shimla to Delhi Return',
    'desc' => 'Morning breakfast, visit Viceregal Lodge, and return drive to Delhi NCR.',
  ),
),
        'inclusions' => [
            'Private AC car with chauffeur for the entire circuit',
            'All toll taxes, state border permits, fuel, and parking fees',
            'Chauffeur night allowances and assistance',
            'Complimentary bottled water throughout the journey'
        ],
        'exclusions' => [
            'Monument/park entry tickets and activity fees',
            'Hotel stays (available upon request) and personal meals',
            'Tips and personal expenses'
        ],
        'faqs' => [
            ['q' => 'Can we customize this itinerary?', 'a' => 'Yes, all our private chauffeur tours can be customized to match your schedule and preference.'],
            ['q' => 'Is hotel accommodation included?', 'a' => 'This package includes private transportation. We can happily add verified 3, 4, or 5-star hotel options on request.']
        ]
    ],
    'himachal-holidays-hill-station-tour' => [
        'slug' => 'himachal-holidays-hill-station-tour',
        'title' => 'Himachal Holidays Hill Station Tour',
        'tag' => 'SHIMLA & MANALI',
        'duration' => '6 Days / 5 Nights',
        'pickup' => 'Delhi / Chandigarh',
        'drop' => 'Delhi NCR / As per itinerary',
        'vehicle' => 'Private AC Sedan/SUV',
        'rating' => '4.9',
        'reviews_count' => '320+',
        'price_start' => '₹18,500',
        'image' => 'assets/images/himachal/himachal.avif',
        'overview' => 'The definitive Himachal vacation covering Shimla, Kufri, Kullu Valley, Manali, and snow adventures in Solang Valley.',
        'highlights' => array (
  0 => 'Kufri snow view and Shimla colonial architecture',
  1 => 'White water rafting in Kullu along the Beas River',
  2 => 'Solang Valley paragliding, skiing, and Atal Tunnel excursion',
  3 => 'Hadimba Temple and Tibetan monasteries in Manali',
),
        'itinerary' => array (
  0 => 
  array (
    'time' => 'Day 01',
    'title' => 'Delhi to Shimla',
    'desc' => 'Scenic drive to Shimla and check-in.',
  ),
  1 => 
  array (
    'time' => 'Day 02',
    'title' => 'Kufri & Shimla Local',
    'desc' => 'Full day Kufri adventure and Ridge walk.',
  ),
  2 => 
  array (
    'time' => 'Day 03',
    'title' => 'Shimla to Manali via Kullu',
    'desc' => 'Drive along Pandoh Dam and Kullu Valley to Manali.',
  ),
  3 => 
  array (
    'time' => 'Day 04',
    'title' => 'Solang Valley & Atal Tunnel',
    'desc' => 'Adventure sports at Solang Valley and snow views at Atal Tunnel.',
  ),
  4 => 
  array (
    'time' => 'Day 05',
    'title' => 'Manali Local Sightseeing',
    'desc' => 'Hadimba Temple, Vashisht Hot Springs, and Mall Road.',
  ),
  5 => 
  array (
    'time' => 'Day 06',
    'title' => 'Manali to Delhi Return',
    'desc' => 'Drive back to Delhi or Chandigarh airport drop-off.',
  ),
),
        'inclusions' => [
            'Private AC car with chauffeur for the entire circuit',
            'All toll taxes, state border permits, fuel, and parking fees',
            'Chauffeur night allowances and assistance',
            'Complimentary bottled water throughout the journey'
        ],
        'exclusions' => [
            'Monument/park entry tickets and activity fees',
            'Hotel stays (available upon request) and personal meals',
            'Tips and personal expenses'
        ],
        'faqs' => [
            ['q' => 'Can we customize this itinerary?', 'a' => 'Yes, all our private chauffeur tours can be customized to match your schedule and preference.'],
            ['q' => 'Is hotel accommodation included?', 'a' => 'This package includes private transportation. We can happily add verified 3, 4, or 5-star hotel options on request.']
        ]
    ],
    'shimla-manali-dharamshala-chandigarh-tour' => [
        'slug' => 'shimla-manali-dharamshala-chandigarh-tour',
        'title' => 'Shimla Manali Dharamshala Chandigarh Tour',
        'tag' => 'COMPLETE HIMACHAL',
        'duration' => '9 Days / 8 Nights',
        'pickup' => 'Delhi NCR',
        'drop' => 'Delhi NCR / As per itinerary',
        'vehicle' => 'Private AC Vehicle with Mountain Chauffeur',
        'rating' => '4.9',
        'reviews_count' => '320+',
        'price_start' => '₹28,500',
        'image' => 'assets/images/himachal/dharamshala.avif',
        'overview' => 'Experience the full grandeur of Himachal Pradesh: Shimla hills, Manali alpine valleys, McLeodGanj Tibetan culture, and planned city Chandigarh.',
        'highlights' => array (
  0 => 'Colonial charm of Shimla and adventure in Solang Valley',
  1 => 'His Holiness Dalai Lama Temple and Tibetan Monasteries in Dharamshala',
  2 => 'Scenic Kangra Valley and tea gardens in Palampur',
  3 => 'Rock Garden and Sukhna Lake in modern Chandigarh',
),
        'itinerary' => array (
  0 => 
  array (
    'time' => 'Day 01-02',
    'title' => 'Delhi to Shimla & Kufri',
    'desc' => 'Shimla Mall Road and Kufri panoramic vistas.',
  ),
  1 => 
  array (
    'time' => 'Day 03-05',
    'title' => 'Manali, Solang Valley & Atal Tunnel',
    'desc' => 'Beas river valley, adventure sports, and Hadimba Devi temple.',
  ),
  2 => 
  array (
    'time' => 'Day 06-07',
    'title' => 'Dharamshala & McLeodGanj',
    'desc' => 'Dalai Lama residence, Bhagsunag waterfalls, and St. John Church.',
  ),
  3 => 
  array (
    'time' => 'Day 08-09',
    'title' => 'Chandigarh City to Delhi',
    'desc' => 'Explore Rock Garden and return to Delhi.',
  ),
),
        'inclusions' => [
            'Private AC car with chauffeur for the entire circuit',
            'All toll taxes, state border permits, fuel, and parking fees',
            'Chauffeur night allowances and assistance',
            'Complimentary bottled water throughout the journey'
        ],
        'exclusions' => [
            'Monument/park entry tickets and activity fees',
            'Hotel stays (available upon request) and personal meals',
            'Tips and personal expenses'
        ],
        'faqs' => [
            ['q' => 'Can we customize this itinerary?', 'a' => 'Yes, all our private chauffeur tours can be customized to match your schedule and preference.'],
            ['q' => 'Is hotel accommodation included?', 'a' => 'This package includes private transportation. We can happily add verified 3, 4, or 5-star hotel options on request.']
        ]
    ],
    'hillstation-himachal-adventure-tour' => [
        'slug' => 'hillstation-himachal-adventure-tour',
        'title' => 'Hillstation Himachal Adventure Tour',
        'tag' => 'THRILL & NATURE',
        'duration' => '7 Days / 6 Nights',
        'pickup' => 'Delhi / Chandigarh',
        'drop' => 'Delhi NCR / As per itinerary',
        'vehicle' => 'Private AC SUV with Mountain Driver',
        'rating' => '4.9',
        'reviews_count' => '320+',
        'price_start' => '₹22,000',
        'image' => 'assets/images/himachal/spiti.avif',
        'overview' => 'An adrenaline-filled journey featuring river rafting, paragliding in Bir Billing, skiing in Solang, and high mountain passes.',
        'highlights' => array (
  0 => 'Tandem paragliding at Bir Billing (World paragliding championship site)',
  1 => 'White water river rafting in Beas River, Kullu',
  2 => 'Trek to Jogini waterfalls and snow activities at Rohtang Pass / Atal Tunnel',
  3 => 'Safe mountain transport with verified chauffeurs',
),
        'itinerary' => array (
  0 => 
  array (
    'time' => 'Day 01-02',
    'title' => 'Delhi to Manali Alpine Base',
    'desc' => 'Scenic highway drive and acclimatization in Old Manali.',
  ),
  1 => 
  array (
    'time' => 'Day 03-04',
    'title' => 'Solang Valley & Rohtang Pass Snow',
    'desc' => 'High altitude snow activities, ATV rides, and zip-lining.',
  ),
  2 => 
  array (
    'time' => 'Day 05',
    'title' => 'Bir Billing Paragliding Takeoff',
    'desc' => 'Soar above tea estates and Dhauladhar ranges.',
  ),
  3 => 
  array (
    'time' => 'Day 06-07',
    'title' => 'Kullu Rafting & Return to Delhi',
    'desc' => 'Grade III rapids rafting and return drive.',
  ),
),
        'inclusions' => [
            'Private AC car with chauffeur for the entire circuit',
            'All toll taxes, state border permits, fuel, and parking fees',
            'Chauffeur night allowances and assistance',
            'Complimentary bottled water throughout the journey'
        ],
        'exclusions' => [
            'Monument/park entry tickets and activity fees',
            'Hotel stays (available upon request) and personal meals',
            'Tips and personal expenses'
        ],
        'faqs' => [
            ['q' => 'Can we customize this itinerary?', 'a' => 'Yes, all our private chauffeur tours can be customized to match your schedule and preference.'],
            ['q' => 'Is hotel accommodation included?', 'a' => 'This package includes private transportation. We can happily add verified 3, 4, or 5-star hotel options on request.']
        ]
    ],
    'hillstation-honeymoon-tour-packages' => [
        'slug' => 'hillstation-honeymoon-tour-packages',
        'title' => 'Hillstation Honeymoon Tour Packages',
        'tag' => 'ROMANTIC GETAWAY',
        'duration' => '6 Days / 5 Nights',
        'pickup' => 'Delhi Airport / Railway Station',
        'drop' => 'Delhi NCR / As per itinerary',
        'vehicle' => 'Private Dedicated Luxury Sedan',
        'rating' => '4.9',
        'reviews_count' => '320+',
        'price_start' => '₹21,000',
        'image' => 'assets/images/himachal/manali.avif',
        'overview' => 'Crafted especially for couples: luxury resort stays with mountain views, candlelit dinners, flower bed decorations, and scenic sightseeing.',
        'highlights' => array (
  0 => 'Complimentary honeymoon inclusions: candle-lit dinner & badam milk',
  1 => 'Scenic couple photoshoots in Solang Valley & apple orchards',
  2 => 'Romantic private vehicle with professional chauffeur',
  3 => 'Customizable itineraries tailored to your pace',
),
        'itinerary' => array (
  0 => 
  array (
    'time' => 'Day 01',
    'title' => 'Delhi to Shimla with Mountain View Room',
    'desc' => 'Relaxing couple drive to Shimla hill resort.',
  ),
  1 => 
  array (
    'time' => 'Day 02',
    'title' => 'Kufri & Private Strolls',
    'desc' => 'Quiet pine forest trails and couple photography.',
  ),
  2 => 
  array (
    'time' => 'Day 03-05',
    'title' => 'Manali Valley of Gods',
    'desc' => 'Solang snow views, riverside cafes, and private bonfire.',
  ),
  3 => 
  array (
    'time' => 'Day 06',
    'title' => 'Return Journey to Delhi',
    'desc' => 'Sweet memories transfer to Delhi.',
  ),
),
        'inclusions' => [
            'Private AC car with chauffeur for the entire circuit',
            'All toll taxes, state border permits, fuel, and parking fees',
            'Chauffeur night allowances and assistance',
            'Complimentary bottled water throughout the journey'
        ],
        'exclusions' => [
            'Monument/park entry tickets and activity fees',
            'Hotel stays (available upon request) and personal meals',
            'Tips and personal expenses'
        ],
        'faqs' => [
            ['q' => 'Can we customize this itinerary?', 'a' => 'Yes, all our private chauffeur tours can be customized to match your schedule and preference.'],
            ['q' => 'Is hotel accommodation included?', 'a' => 'This package includes private transportation. We can happily add verified 3, 4, or 5-star hotel options on request.']
        ]
    ],
];

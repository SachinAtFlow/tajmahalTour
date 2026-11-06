<?php
/**
 * Nepal Tour Packages Data
 * File: nepaltour/data.php
 */

$categoryTitle = 'Nepal Tour';
$categorySlug = 'nepaltour';
$categoryTag = 'HIMALAYAN KINGDOM';
$categoryDescription = 'Discover ancient pagoda temples, sacred Buddhist stupas, panoramic Everest mountain flights, and tranquil lakes in the roof of the world.';
$categoryHeroImage = 'assets/images/nepal/nepal.avif';

$tours = [
    'kathmandu-pashupatinath-tour-4-days' => [
        'slug' => 'kathmandu-pashupatinath-tour-4-days',
        'title' => 'Kathmandu & Pashupatinath Tour (4 Days)',
        'tag' => 'VALLEY OF GODS',
        'duration' => '4 Days / 3 Nights',
        'pickup' => 'Kathmandu Tribhuvan Airport (KTM)',
        'drop' => 'As per tour itinerary',
        'vehicle' => 'Private AC Vehicle with Guide',
        'rating' => '4.9',
        'reviews_count' => '310+',
        'price_start' => '₹18,500',
        'image' => 'assets/images/nepal/kathmandu.avif',
        'overview' => 'Explore the UNESCO World Heritage monuments of Kathmandu Valley: sacred Pashupatinath Temple on the Bagmati River, Boudhanath Stupa, and Swayambhunath Monkey Temple.',
        'highlights' => array (
  0 => 'Sacred Pashupatinath Temple and evening Bagmati River Aarti',
  1 => 'Boudhanath Stupa (one of the largest spherical stupas in the world)',
  2 => 'Swayambhunath Monkey Temple overlooking Kathmandu valley',
  3 => 'Kathmandu Durbar Square and Kumari Ghar (Living Goddess residence)',
),
        'itinerary' => array (
  0 => 
  array (
    'time' => 'Day 01',
    'title' => 'Arrival in Kathmandu',
    'desc' => 'Pickup from Tribhuvan International Airport and hotel check-in. Evening at Thamel.',
  ),
  1 => 
  array (
    'time' => 'Day 02',
    'title' => 'Pashupatinath, Boudhanath & Swayambhunath',
    'desc' => 'Full day heritage pilgrimage across Kathmandu’s most sacred temples.',
  ),
  2 => 
  array (
    'time' => 'Day 03',
    'title' => 'Patan Durbar Square & Bhaktapur',
    'desc' => 'Explore medieval Newari architecture and pottery squares in Bhaktapur.',
  ),
  3 => 
  array (
    'time' => 'Day 04',
    'title' => 'Departure from Kathmandu',
    'desc' => 'Souvenir shopping in Thamel and airport transfer.',
  ),
),
        'inclusions' => [
            'Private AC vehicle with professional chauffeur for the entire trip',
            'All highway tolls, parking fees, fuel, and state entry taxes',
            'Chauffeur overnight allowance and assistance',
            'Complimentary bottled water throughout the journey'
        ],
        'exclusions' => [
            'Monument and national park entry fees',
            'Meals, beverages, and personal expenses',
            'Tips and camera fees'
        ],
        'faqs' => [
            ['q' => 'Can we customize the travel dates and stops?', 'a' => 'Yes, our tours are completely private and flexible to your preferences.'],
            ['q' => 'Is pickup from airport included?', 'a' => 'Yes, pickup from the designated city airport or railway station is included in the package.']
        ]
    ],
    'pokhara-phewa-lake-mountain-tour-5-days' => [
        'slug' => 'pokhara-phewa-lake-mountain-tour-5-days',
        'title' => 'Pokhara Phewa Lake & Mountain Tour (5 Days)',
        'tag' => 'ANNAPURNA LAKES',
        'duration' => '5 Days / 4 Nights',
        'pickup' => 'Kathmandu Airport',
        'drop' => 'As per tour itinerary',
        'vehicle' => 'Private AC Vehicle / Internal Flight Option',
        'rating' => '4.9',
        'reviews_count' => '310+',
        'price_start' => '₹24,500',
        'image' => 'assets/images/nepal/pokhra.avif',
        'overview' => 'Combines the cultural heritage of Kathmandu with the sublime beauty of Pokhara: boating on Phewa Lake with Machapuchare (Fishtail) reflections.',
        'highlights' => array (
  0 => 'Sunrise over the Annapurna and Dhaulagiri ranges from Sarangkot',
  1 => 'Private boat ride on Phewa Lake to Tal Barahi temple',
  2 => 'Davis Falls, Gupteshwor Mahadev cave, and World Peace Pagoda',
  3 => 'Kathmandu heritage sights included',
),
        'itinerary' => array (
  0 => 
  array (
    'time' => 'Day 01',
    'title' => 'Kathmandu Arrival & Sights',
    'desc' => 'Pashupatinath and Boudhanath.',
  ),
  1 => 
  array (
    'time' => 'Day 02',
    'title' => 'Kathmandu to Pokhara Scenic Drive',
    'desc' => 'Drive along Trishuli river valley to Pokhara.',
  ),
  2 => 
  array (
    'time' => 'Day 03',
    'title' => 'Sarangkot Sunrise & Pokhara Sights',
    'desc' => 'Golden Annapurna sunrise, Davis Falls, and lake boating.',
  ),
  3 => 
  array (
    'time' => 'Day 04',
    'title' => 'Pokhara to Kathmandu Return',
    'desc' => 'Scenic return drive and evening cultural dinner in Kathmandu.',
  ),
  4 => 
  array (
    'time' => 'Day 05',
    'title' => 'Departure Transfer',
    'desc' => 'Airport drop-off for flight home.',
  ),
),
        'inclusions' => [
            'Private AC vehicle with professional chauffeur for the entire trip',
            'All highway tolls, parking fees, fuel, and state entry taxes',
            'Chauffeur overnight allowance and assistance',
            'Complimentary bottled water throughout the journey'
        ],
        'exclusions' => [
            'Monument and national park entry fees',
            'Meals, beverages, and personal expenses',
            'Tips and camera fees'
        ],
        'faqs' => [
            ['q' => 'Can we customize the travel dates and stops?', 'a' => 'Yes, our tours are completely private and flexible to your preferences.'],
            ['q' => 'Is pickup from airport included?', 'a' => 'Yes, pickup from the designated city airport or railway station is included in the package.']
        ]
    ],
    'everest-mountain-flight-tour' => [
        'slug' => 'everest-mountain-flight-tour',
        'title' => 'Everest Mountain Flight Tour',
        'tag' => 'TOP OF THE WORLD',
        'duration' => '4 Days / 3 Nights',
        'pickup' => 'Kathmandu Airport',
        'drop' => 'As per tour itinerary',
        'vehicle' => 'Private AC Cab + 1-Hour Scenic Flight',
        'rating' => '4.9',
        'reviews_count' => '310+',
        'price_start' => '₹32,000',
        'image' => 'assets/images/nepal/everestBaseCamp.avif',
        'overview' => 'Experience the ultimate thrill of flying within eye-level distance of Mount Everest (8,848m), Lhotse, Makalu, and the mighty Himalayan crest.',
        'highlights' => array (
  0 => '1-hour guaranteed window-seat flight over Mount Everest',
  1 => 'Personalized certificate of Everest flight completion',
  2 => 'Comprehensive Kathmandu Valley UNESCO guided sightseeing',
  3 => 'Luxury hotel stays in Kathmandu',
),
        'itinerary' => array (
  0 => 
  array (
    'time' => 'Day 01',
    'title' => 'Kathmandu Arrival',
    'desc' => 'Check in and evening orientation.',
  ),
  1 => 
  array (
    'time' => 'Day 02',
    'title' => 'Morning Everest Mountain Flight & Sights',
    'desc' => 'Early morning flight over Everest peak followed by Pashupatinath temple.',
  ),
  2 => 
  array (
    'time' => 'Day 03',
    'title' => 'Bhaktapur & Nagarkot Sunset',
    'desc' => 'Medieval city of Bhaktapur and panoramic sunset over Nagarkot.',
  ),
  3 => 
  array (
    'time' => 'Day 04',
    'title' => 'Departure',
    'desc' => 'Transfer to airport.',
  ),
),
        'inclusions' => [
            'Private AC vehicle with professional chauffeur for the entire trip',
            'All highway tolls, parking fees, fuel, and state entry taxes',
            'Chauffeur overnight allowance and assistance',
            'Complimentary bottled water throughout the journey'
        ],
        'exclusions' => [
            'Monument and national park entry fees',
            'Meals, beverages, and personal expenses',
            'Tips and camera fees'
        ],
        'faqs' => [
            ['q' => 'Can we customize the travel dates and stops?', 'a' => 'Yes, our tours are completely private and flexible to your preferences.'],
            ['q' => 'Is pickup from airport included?', 'a' => 'Yes, pickup from the designated city airport or railway station is included in the package.']
        ]
    ],
    'chitwan-jungle-safari-pokhara-tour' => [
        'slug' => 'chitwan-jungle-safari-pokhara-tour',
        'title' => 'Chitwan Jungle Safari & Pokhara Tour',
        'tag' => 'WILDLIFE & MOUNTAINS',
        'duration' => '7 Days / 6 Nights',
        'pickup' => 'Kathmandu Airport',
        'drop' => 'As per tour itinerary',
        'vehicle' => 'Private AC Vehicle for Circuit',
        'rating' => '4.9',
        'reviews_count' => '310+',
        'price_start' => '₹34,000',
        'image' => 'assets/images/nepal/nepal.avif',
        'overview' => 'The ultimate Nepal holiday: Kathmandu heritage, one-horned rhinoceros safaris in Chitwan National Park, and tranquil alpine lakes in Pokhara.',
        'highlights' => array (
  0 => 'Jungle jeep safari in Chitwan National Park for One-Horned Rhinos',
  1 => 'Canoeing on Rapti River spotting Gharial crocodiles',
  2 => 'Annapurna sunrise from Sarangkot and Phewa Lake boating in Pokhara',
  3 => 'Traditional Tharu cultural dance and jungle lodge stays',
),
        'itinerary' => array (
  0 => 
  array (
    'time' => 'Day 01-02',
    'title' => 'Kathmandu to Chitwan Jungle',
    'desc' => 'Arrive in Chitwan and enjoy river sunset and Tharu dance.',
  ),
  1 => 
  array (
    'time' => 'Day 03',
    'title' => 'Full Day Chitwan Safari Activities',
    'desc' => 'Jeep safari, bird watching, and elephant breeding center.',
  ),
  2 => 
  array (
    'time' => 'Day 04-05',
    'title' => 'Chitwan to Pokhara Lake City',
    'desc' => 'Sarangkot sunrise and lake boating.',
  ),
  3 => 
  array (
    'time' => 'Day 06-07',
    'title' => 'Pokhara to Kathmandu & Departure',
    'desc' => 'Pashupatinath visit and airport transfer.',
  ),
),
        'inclusions' => [
            'Private AC vehicle with professional chauffeur for the entire trip',
            'All highway tolls, parking fees, fuel, and state entry taxes',
            'Chauffeur overnight allowance and assistance',
            'Complimentary bottled water throughout the journey'
        ],
        'exclusions' => [
            'Monument and national park entry fees',
            'Meals, beverages, and personal expenses',
            'Tips and camera fees'
        ],
        'faqs' => [
            ['q' => 'Can we customize the travel dates and stops?', 'a' => 'Yes, our tours are completely private and flexible to your preferences.'],
            ['q' => 'Is pickup from airport included?', 'a' => 'Yes, pickup from the designated city airport or railway station is included in the package.']
        ]
    ],
    'complete-nepal-odyssey-7-days' => [
        'slug' => 'complete-nepal-odyssey-7-days',
        'title' => 'Complete Nepal Odyssey 7 Days',
        'tag' => 'GRAND NEPAL CIRCUIT',
        'duration' => '7 Days / 6 Nights',
        'pickup' => 'Kathmandu Airport',
        'drop' => 'As per tour itinerary',
        'vehicle' => 'Private AC Vehicle + Certified Guide',
        'rating' => '4.9',
        'reviews_count' => '310+',
        'price_start' => '₹36,000',
        'image' => 'assets/images/nepal/nepal.avif',
        'overview' => 'An enriching circuit linking Kathmandu, the medieval royal city of Bhaktapur, scenic hill resort Nagarkot, and tranquil Pokhara.',
        'highlights' => array (
  0 => 'All 7 UNESCO World Heritage sites of Kathmandu Valley',
  1 => 'Himalayan sunrise panoramas from Nagarkot and Sarangkot',
  2 => 'Phewa Lake boating and Peace Pagoda walk in Pokhara',
  3 => 'Private vehicle, all entrance fees, and guide included',
),
        'itinerary' => array (
  0 => 
  array (
    'time' => 'Day 01-03',
    'title' => 'Kathmandu, Patan & Bhaktapur',
    'desc' => 'Ancient palaces and sacred stupas.',
  ),
  1 => 
  array (
    'time' => 'Day 04-05',
    'title' => 'Nagarkot to Pokhara',
    'desc' => 'Mountain sunrise and lakeside leisure.',
  ),
  2 => 
  array (
    'time' => 'Day 06-07',
    'title' => 'Pokhara to Kathmandu Departure',
    'desc' => 'Return drive and airport farewell.',
  ),
),
        'inclusions' => [
            'Private AC vehicle with professional chauffeur for the entire trip',
            'All highway tolls, parking fees, fuel, and state entry taxes',
            'Chauffeur overnight allowance and assistance',
            'Complimentary bottled water throughout the journey'
        ],
        'exclusions' => [
            'Monument and national park entry fees',
            'Meals, beverages, and personal expenses',
            'Tips and camera fees'
        ],
        'faqs' => [
            ['q' => 'Can we customize the travel dates and stops?', 'a' => 'Yes, our tours are completely private and flexible to your preferences.'],
            ['q' => 'Is pickup from airport included?', 'a' => 'Yes, pickup from the designated city airport or railway station is included in the package.']
        ]
    ],
];

<?php
/**
 * Same Day Tour Packages Data
 * File: samedaytour/data.php
 */

$categoryTitle = 'Same Day Tour';
$categorySlug = 'samedaytour';
$categoryTag = 'SAME DAY EXCURSION';
$categoryDescription = 'Short on time? Discover world-famous monuments, sacred pilgrimage sites, and royal capitals with our private chauffeur same day tour packages from Delhi NCR.';
$categoryHeroImage = 'assets/images/uttarPradesh/tajmahal.avif';

$tours = [
    'agra-taj-mahal-same-day-tour' => [
        'slug' => 'agra-taj-mahal-same-day-tour',
        'title' => 'Agra Taj Mahal Same Day Tour',
        'tag' => 'SAME DAY TOUR',
        'duration' => '1 Day (12-14 Hours)',
        'pickup' => 'Delhi NCR / Hotel / Airport',
        'drop' => 'Delhi NCR / Hotel / Airport',
        'vehicle' => 'Private AC Sedan / SUV with Chauffeur',
        'rating' => '4.9',
        'reviews_count' => '420+',
        'price_start' => '₹4,500',
        'image' => 'assets/images/uttarPradesh/tajmahal.avif',
        'overview' => 'Experience the timeless beauty of the Taj Mahal and Agra Fort in a single day. Travel via the 6-lane Yamuna Expressway in a comfortable private air-conditioned car with a certified local guide.',
        'highlights' => [
            'Guided visit to the majestic Taj Mahal (UNESCO World Heritage Site).',
            'Explore the grand red sandstone Agra Fort & royal palaces.',
            'Visit Mehtab Bagh for panoramic sunset views across the Yamuna River.',
            'Roundtrip express journey from Delhi NCR with toll, tax, and fuel included.'
        ],
        'itinerary' => [
            ['time' => '06:00 AM', 'title' => 'Pickup from Delhi NCR & Drive to Agra', 'desc' => 'Your chauffeur picks you up from your hotel or Delhi Airport. Relax during the smooth 3-hour journey along the Yamuna Expressway.'],
            ['time' => '09:30 AM', 'title' => 'Guided Taj Mahal Visit', 'desc' => 'Arrive in Agra and meet your government-approved guide. Enter the magnificent Taj Mahal and discover the poignant love story of Shah Jahan and Mumtaz.'],
            ['time' => '12:30 PM', 'title' => 'Lunch at Recommended Mughlai Restaurant', 'desc' => 'Enjoy an authentic North Indian lunch and regional culinary delights.'],
            ['time' => '02:00 PM', 'title' => 'Agra Fort Exploration', 'desc' => 'Visit Agra Fort, exploring the Diwan-i-Am, Diwan-i-Khas, Jahangiri Mahal, and royal courtyards.'],
            ['time' => '04:00 PM', 'title' => 'Mehtab Bagh & Marble Inlay Art', 'desc' => 'Gaze at the Taj Mahal reflection from the Mehtab Bagh gardens and watch skilled artisans demonstrate centuries-old marble pietra dura craft.'],
            ['time' => '05:30 PM', 'title' => 'Return Journey to Delhi NCR', 'desc' => 'Depart Agra and head back to Delhi. Arrive by 08:30 PM with drop-off at your hotel or airport.']
        ],
        'inclusions' => [
            'Private air-conditioned car with commercial permit',
            'Professional English-speaking local tour guide in Agra',
            'All expressway tolls, parking fees, and state taxes',
            'Chauffeur allowance and journey assistance',
            'Complimentary bottled water throughout the trip'
        ],
        'exclusions' => [
            'Monument entrance tickets',
            'Meals, lunch, and personal drinks',
            'Camera/drone fees and gratuities/tips'
        ],
        'faqs' => [
            ['q' => 'Is Taj Mahal open on Friday?', 'a' => 'No, the Taj Mahal is closed every Friday for religious prayers.'],
            ['q' => 'What is the travel time between Delhi and Agra?', 'a' => 'Via the Yamuna Expressway, travel time is approximately 3 to 3.5 hours each way.']
        ]
    ],

    'delhi-sightseeing-same-day-tour' => [
        'slug' => 'delhi-sightseeing-same-day-tour',
        'title' => 'Delhi Sightseeing Same Day Tour',
        'tag' => 'CITY TOUR',
        'duration' => '8-10 Hours (Full Day)',
        'pickup' => 'Any Hotel / Residence / Airport in Delhi NCR',
        'drop' => 'Delhi NCR',
        'vehicle' => 'Private Chauffeur Sedan / Innova',
        'rating' => '4.8',
        'reviews_count' => '310+',
        'price_start' => '₹2,800',
        'image' => 'assets/images/delhi/indiaGate.avif',
        'overview' => 'Explore the vibrant duality of India’s capital: the narrow heritage lanes and Mughal monuments of Old Delhi, juxtaposed against the grand colonial boulevards of New Delhi.',
        'highlights' => [
            'Visit iconic landmarks: Red Fort, Jama Masjid, and Raj Ghat in Old Delhi.',
            'Drive past India Gate, Parliament House, and Rashtrapati Bhavan.',
            'Explore UNESCO World Heritage wonders: Qutub Minar and Humayun’s Tomb.',
            'Stop at the serene Lotus Temple and modern architectural spectacle Akshardham.'
        ],
        'itinerary' => [
            ['time' => '09:00 AM', 'title' => 'Morning Pickup & Old Delhi Tour', 'desc' => 'Commence your city exploration with visits to Jama Masjid, driving past the Red Fort, and paying respects at Raj Ghat.'],
            ['time' => '11:30 AM', 'title' => 'Rajpath & Lutyens Delhi', 'desc' => 'Drive along Kartavya Path (Rajpath) to view India Gate, the war memorial, the grand Parliament House, and the President House.'],
            ['time' => '01:00 PM', 'title' => 'Lunch Break', 'desc' => 'Enjoy lunch at Connaught Place or a recommended traditional restaurant.'],
            ['time' => '02:30 PM', 'title' => 'Humayun’s Tomb & Lotus Temple', 'desc' => 'Marvel at the precursor to the Taj Mahal at Humayun’s Tomb and experience peace at the lotus-shaped Bahai Temple.'],
            ['time' => '04:30 PM', 'title' => 'Qutub Minar Complex', 'desc' => 'Visit the soaring 73-meter victory minaret and the ancient rust-resistant Iron Pillar.'],
            ['time' => '06:30 PM', 'title' => 'Drop-off at Destination', 'desc' => 'Return transfer to your hotel or airport in Delhi NCR.']
        ],
        'inclusions' => [
            'Dedicated private AC car for 8 hours / 80 km or full day',
            'Courteous, verified, city-experienced chauffeur',
            'All city tolls, fuel, and parking fees',
            'Chauffeur assistance and route guidance'
        ],
        'exclusions' => [
            'Monument admission fees',
            'Meals, snacks, and personal expenses',
            'Guide charges (available upon request)'
        ],
        'faqs' => [
            ['q' => 'Which monuments are closed on Mondays in Delhi?', 'a' => 'Red Fort, Lotus Temple, and Akshardham Temple are closed on Mondays.']
        ]
    ],

    'mathura-vrindavan-same-day-tour' => [
        'slug' => 'mathura-vrindavan-same-day-tour',
        'title' => 'Mathura Vrindavan Same Day Tour',
        'tag' => 'SPIRITUAL TOUR',
        'duration' => '1 Day (12 Hours)',
        'pickup' => 'Delhi NCR / Hotel',
        'drop' => 'Delhi NCR',
        'vehicle' => 'Private AC Vehicle with Chauffeur',
        'rating' => '4.9',
        'reviews_count' => '280+',
        'price_start' => '₹4,000',
        'image' => 'assets/images/uttarPradesh/vrindavan.avif',
        'overview' => 'Immerse yourself in divine devotion across Braj Bhoomi. Visit Shri Krishna Janmabhoomi temple in Mathura and world-renowned temples like Banke Bihari and Prem Mandir in Vrindavan.',
        'highlights' => [
            'Darshan at Shri Krishna Janmasthan (Birthplace of Lord Krishna) in Mathura.',
            'Visit Dwarkadhish Temple and historic Vishram Ghat along the Yamuna.',
            'Special Darshan at Banke Bihari Temple & ISKCON Temple in Vrindavan.',
            'Witness the mesmerizing musical fountain and light show at Prem Mandir in the evening.'
        ],
        'itinerary' => [
            ['time' => '06:30 AM', 'title' => 'Departure from Delhi NCR', 'desc' => 'Early departure via Yamuna Expressway to arrive in Mathura by 09:30 AM.'],
            ['time' => '10:00 AM', 'title' => 'Krishna Janmabhoomi & Dwarkadhish Temple', 'desc' => 'Offer prayers at the sanctum sanctorum where Lord Krishna was born and explore the vibrant temple complex.'],
            ['time' => '01:00 PM', 'title' => 'Lunch & Traditional Mathura Peda', 'desc' => 'Relish pure vegetarian satvik thali and taste the famous Mathura peda sweets.'],
            ['time' => '03:30 PM', 'title' => 'Vrindavan Temples (Banke Bihari & ISKCON)', 'desc' => 'Visit the sacred Banke Bihari Mandir and the peaceful Krishna Balaram ISKCON Temple.'],
            ['time' => '06:30 PM', 'title' => 'Prem Mandir Evening Light Show', 'desc' => 'Marvel at the Italian white marble carvings illuminated by vibrant colored lights.'],
            ['time' => '07:30 PM', 'title' => 'Return Journey to Delhi NCR', 'desc' => 'Head back via the highway, reaching Delhi by 10:30 PM.']
        ],
        'inclusions' => [
            'Private air-conditioned chauffeur-driven cab',
            'Yamuna expressway toll tax, fuel, and parking fees',
            'Chauffeur food allowance and guidance',
            'Complimentary bottled water'
        ],
        'exclusions' => [
            'VIP temple darshan passes or pooja offerings',
            'Meals and personal donations',
            'Auto/e-rickshaw charges inside narrow temple lanes'
        ],
        'faqs' => [
            ['q' => 'Are temples closed during afternoon hours?', 'a' => 'Yes, most temples in Mathura and Vrindavan close between 12:00 PM and 04:00 PM for Bhog/rest.']
        ]
    ],

    'jaipur-pink-city-same-day-tour' => [
        'slug' => 'jaipur-pink-city-same-day-tour',
        'title' => 'Jaipur Pink City Same Day Tour',
        'tag' => 'ROYAL HERITAGE',
        'duration' => '1 Day (14-16 Hours)',
        'pickup' => 'Delhi NCR / Hotel',
        'drop' => 'Delhi NCR',
        'vehicle' => 'Private AC Sedan / Ertiga / Innova',
        'rating' => '4.8',
        'reviews_count' => '390+',
        'price_start' => '₹6,500',
        'image' => 'assets/images/rajasthan/jaipur.avif',
        'overview' => 'Embark on an exhilarating day trip to Rajasthan’s royal capital. Experience Amber Fort, Hawa Mahal, City Palace, and vibrant bazaars in the Pink City.',
        'highlights' => [
            'Ascend to the hilltop Amber Fort with its mirror palace (Sheesh Mahal).',
            'Photo stop at the iconic honeycomb facade of Hawa Mahal (Palace of Winds).',
            'Visit the Jal Mahal (Water Palace) standing serenely in Man Sagar Lake.',
            'Tour the regal City Palace museum and Jantar Mantar observatory.'
        ],
        'itinerary' => [
            ['time' => '05:30 AM', 'title' => 'Pickup from Delhi NCR', 'desc' => 'Drive along the Delhi-Jaipur Expressway (NH-48) or Delhi-Mumbai Expressway.'],
            ['time' => '10:00 AM', 'title' => 'Amber Fort & Jal Mahal', 'desc' => 'Explore the sprawling courtyards, Sheesh Mahal, and grand ramparts of Amber Fort overlooking Maota Lake.'],
            ['time' => '01:30 PM', 'title' => 'Authentic Rajasthani Lunch', 'desc' => 'Savor traditional Dal Baati Churma and Rajasthani delicacies.'],
            ['time' => '02:30 PM', 'title' => 'City Palace & Jantar Mantar', 'desc' => 'Walk through royal courtyards, textiles, armory, and the UNESCO astronomical observatory.'],
            ['time' => '04:30 PM', 'title' => 'Hawa Mahal & Pink City Bazaars', 'desc' => 'Marvel at the 953 stone jharokhas of Hawa Mahal and shop for blue pottery and handicrafts.'],
            ['time' => '05:30 PM', 'title' => 'Return Journey to Delhi', 'desc' => 'Arrive back in Delhi NCR around 10:30 PM.']
        ],
        'inclusions' => [
            'Roundtrip private AC car with experienced highway chauffeur',
            'All state border taxes, tolls, fuel, and parking fees',
            'Chauffeur food allowance',
            'Mineral water bottles'
        ],
        'exclusions' => [
            'Entry tickets and elephant/jeep ride at Amber Fort',
            'Meals, lunch, and camera fees'
        ],
        'faqs' => [
            ['q' => 'Is it possible to complete Jaipur in one day from Delhi?', 'a' => 'Yes, with an early 5:30 AM start and the new expressway, you can comfortably explore the top 4 attractions.']
        ]
    ],

    'haridwar-rishikesh-same-day-tour' => [
        'slug' => 'haridwar-rishikesh-same-day-tour',
        'title' => 'Haridwar Rishikesh Same Day Tour',
        'tag' => 'SPIRITUAL & NATURE',
        'duration' => '1 Day (14-16 Hours)',
        'pickup' => 'Delhi NCR / Hotel',
        'drop' => 'Delhi NCR',
        'vehicle' => 'Private AC Vehicle with Chauffeur',
        'rating' => '4.9',
        'reviews_count' => '340+',
        'price_start' => '₹6,000',
        'image' => 'assets/images/uttrakhand/rishikesh.avif',
        'overview' => 'Escape to the sacred foothills of the Himalayas. Experience holy river bathing at Har Ki Pauri, explore the suspension bridges and ashrams of Rishikesh, and witness the spellbinding evening Ganga Aarti.',
        'highlights' => [
            'Holy dip and prayers at Har Ki Pauri ghat in Haridwar.',
            'Visit the suspension bridges Ram Jhula and Lakshman Jhula in Rishikesh.',
            'Explore spiritual ashrams, Beatles Ashram exterior, and sacred temples.',
            'Witness the world-famous evening Ganga Aarti at Triveni Ghat or Parmarth Niketan.'
        ],
        'itinerary' => [
            ['time' => '05:00 AM', 'title' => 'Early Departure from Delhi NCR', 'desc' => 'Drive along the Meerut Expressway & NH-334 to Haridwar, arriving around 09:30 AM.'],
            ['time' => '10:00 AM', 'title' => 'Haridwar (Har Ki Pauri & Mansa Devi)', 'desc' => 'Visit Har Ki Pauri ghat and take the cable car or stroll to Mansa Devi temple.'],
            ['time' => '12:30 PM', 'title' => 'Drive to Rishikesh & Lunch', 'desc' => '30-minute scenic drive to Rishikesh. Enjoy fresh vegetarian lunch overlooking the river.'],
            ['time' => '02:00 PM', 'title' => 'Ram Jhula, Gita Bhawan & Ashrams', 'desc' => 'Walk across the iconic suspension bridge and visit serene ashrams and yoga centers.'],
            ['time' => '05:30 PM', 'title' => 'Grand Evening Ganga Aarti', 'desc' => 'Be spellbound by the chanting of mantras, ringing bells, and hundreds of floating earthen lamps.'],
            ['time' => '07:00 PM', 'title' => 'Return Journey to Delhi NCR', 'desc' => 'Smooth drive back, arriving in Delhi by 11:30 PM.']
        ],
        'inclusions' => [
            'Private AC car for roundtrip Delhi-Haridwar-Rishikesh',
            'All state entry taxes, highway tolls, and parking',
            'Chauffeur assistance and driving expenses',
            'Water bottles'
        ],
        'exclusions' => [
            'Cable car tickets to Mansa Devi',
            'Meals, prasad offerings, and personal expenses'
        ],
        'faqs' => [
            ['q' => 'What time does the evening Ganga Aarti start?', 'a' => 'The Ganga Aarti takes place at sunset, usually between 5:30 PM in winter and 6:45 PM in summer.']
        ]
    ]
];


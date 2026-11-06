<?php
/**
 * Airport Service Data Source
 * File: airportservice/data.php
 * 
 * Comprehensive details for major North India airports:
 * - Indira Gandhi International Airport (IGI Delhi)
 * - Noida International Airport (Jewar)
 */

$airportServices = [
    'igi-delhi-airport' => [
        'slug' => 'igi-delhi-airport',
        'code' => 'DEL',
        'tag' => 'DELHI NCR HUB',
        'title' => 'Indira Gandhi International Airport (IGI) Taxi Service',
        'short_title' => 'Delhi IGI Airport Taxi',
        'subtitle' => '24x7 Reliable Terminal 1, 2 & 3 Chauffeur Pick & Drop Transfers',
        'city' => 'New Delhi',
        'price_start' => '₹999',
        'image' => 'assets/images/cars/airport-taxi-terminal.jpg',
        'overview' => 'India\'s busiest aviation hub connecting millions of passengers worldwide. We provide punctual, pre-sanitized private airport cabs with flight-tracking chauffeurs across Terminals 1, 2, and 3. Experience zero-stress meet & greet, help with luggage, and fixed transparent pricing with no surge fees.',
        'terminals' => [
            ['name' => 'Terminal 1 (T1)', 'type' => 'Domestic Low-Cost Carriers (IndiGo, SpiceJet)', 'pickup' => 'Designated Arrival Lane / Multi-Level Car Parking'],
            ['name' => 'Terminal 2 (T2)', 'type' => 'Select Domestic Airlines Operations', 'pickup' => 'Pillar 4 & 5 Arrival Passenger Pickup Bay'],
            ['name' => 'Terminal 3 (T3)', 'type' => 'All International Flights & Full-Service Domestic (Air India, Vistara)', 'pickup' => 'Pillars 1 to 18 Lane 2 Arrival Forecourt']
        ],
        'highlights' => [
            'Real-Time Flight Tracking: Pickup timings automatically adjust for flight delays or early landings',
            'Terminal Meet & Greet: Chauffeur waits at designated pillar with name placard and luggage cart assistance',
            '60 Minutes Free Waiting Time from the moment your aircraft touches down',
            'All Toll Taxes & Airport Parking Included: Upfront transparent billing with zero surge pricing'
        ],
        'fleet_pricing' => [
            [
                'type' => 'Sedan (Dzire / Etios)',
                'capacity' => '4 Passengers',
                'luggage' => '2 Suitcases + 2 Handbags',
                'fare' => '₹999',
                'features' => 'AC, Clean Interiors, Mobile Charger, Bottled Water',
                'popular' => true
            ],
            [
                'type' => 'Ertiga / XL6 SUV',
                'capacity' => '5-6 Passengers',
                'luggage' => '3 Large Suitcases + Bags',
                'fare' => '₹1,499',
                'features' => 'Dual AC, Flexible Seating, Spacious Legroom',
                'popular' => false
            ],
            [
                'type' => 'Innova Crysta Premium',
                'capacity' => '6-7 Passengers',
                'luggage' => '4 Large Suitcases + Bags',
                'fare' => '₹2,199',
                'features' => 'Executive Leather Captain Seats, Rear AC, Super Smooth Ride',
                'popular' => true
            ],
            [
                'type' => 'Luxury Tempo Traveller',
                'capacity' => '12-16 Passengers',
                'luggage' => '10-14 Bags in dedicated boot',
                'fare' => '₹3,999',
                'features' => 'Pushback Reclining Seats, High Roof, Group Comfort',
                'popular' => false
            ]
        ],
        'popular_transfers' => [
            [
                'route' => 'IGI Airport to Agra (Taj Mahal Express)',
                'distance' => '230 km',
                'duration' => '3.5 Hours (via Yamuna Expressway)',
                'fare' => '₹3,499',
                'desc' => 'Direct same-day or multi-day transfer right from IGI arrival lounge to your Agra hotel.'
            ],
            [
                'route' => 'IGI Airport to Jaipur (Pink City)',
                'distance' => '260 km',
                'duration' => '4.5 Hours (via Delhi-Mumbai Expressway)',
                'fare' => '₹3,999',
                'desc' => 'Smooth highway road trip connecting Delhi airport to Jaipur heritage hotels.'
            ],
            [
                'route' => 'IGI Airport to Gurgaon (Cyber City / Golf Course Rd)',
                'distance' => '18 km',
                'duration' => '30–40 Minutes',
                'fare' => '₹899',
                'desc' => 'Fastest corporate business transfer with express toll lanes.'
            ],
            [
                'route' => 'IGI Airport to Noida & Greater Noida',
                'distance' => '48 km',
                'duration' => '60–75 Minutes',
                'fare' => '₹1,299',
                'desc' => 'Comfortable cross-city transit via DND Flyway or Barapullah corridor.'
            ],
            [
                'route' => 'IGI Airport to Haridwar & Rishikesh',
                'distance' => '245 km',
                'duration' => '4.5 Hours (via Delhi-Meerut Expressway)',
                'fare' => '₹4,199',
                'desc' => 'Spiritual direct transfer straight to your ashram or Ganga riverside resort.'
            ],
            [
                'route' => 'IGI Airport to Central Delhi / Connaught Place',
                'distance' => '16 km',
                'duration' => '35 Minutes',
                'fare' => '₹999',
                'desc' => 'Hassle-free downtown Delhi drop right at your hotel lobby.'
            ]
        ],
        'faqs' => [
            [
                'q' => 'How does the driver find me at IGI Airport Terminal 3 or Terminal 1?',
                'a' => 'Our verified chauffeur coordinates with you via WhatsApp/call before flight landing. Once you exit the baggage claim, your driver will be waiting at the designated arrival pillar with your name clearly displayed on a digital placard.'
            ],
            [
                'q' => 'What if my flight arrives late at night or is delayed?',
                'a' => 'We track your flight number in real time. Pickup timing automatically reschedules according to your actual touchdown time with 60 minutes complimentary buffer time for immigration and luggage collection.'
            ],
            [
                'q' => 'Are airport parking and interstate highway toll taxes included?',
                'a' => 'Yes! All quotes provided on our website are 100% all-inclusive. You will not be asked for extra parking or toll charges.'
            ]
        ]
    ],

    'noida-jewar-airport' => [
        'slug' => 'noida-jewar-airport',
        'code' => 'DXN',
        'tag' => 'GREENFIELD MEGA AIRPORT',
        'title' => 'Noida International Airport (Jewar) Taxi Service',
        'short_title' => 'Noida Jewar Airport Taxi',
        'subtitle' => 'Seamless Chauffeur Transfers Connecting Jewar Airport, Delhi NCR, Agra & Western UP',
        'city' => 'Noida / Jewar',
        'price_start' => '₹1,199',
        'image' => 'assets/images/cars/airport-taxi-terminal.jpg',
        'overview' => 'Noida International Airport (Jewar) is Asia\'s largest greenfield international gateway, strategically situated on the Yamuna Expressway. We offer premier 24x7 airport taxi and chauffeur transfers connecting Jewar Airport directly with Greater Noida, Central Noida, Delhi NCR, Mathura, Vrindavan, and the Taj Mahal in Agra.',
        'terminals' => [
            ['name' => 'Passenger Terminal 1 (T1)', 'type' => 'Integrated Domestic & International Flights', 'pickup' => 'Arrival Forecourt & Dedicated Chauffeur Pickup Bays'],
            ['name' => 'VIP & Corporate Aviation Apron', 'type' => 'Charter Jets & Executive Business Aviation', 'pickup' => 'Private Executive Terminal Lounge Gate']
        ],
        'highlights' => [
            'Direct Yamuna Expressway Access: Instant highway cruise to Agra, Mathura, and Greater Noida',
            'Pre-Scheduled Verified Chauffeur: Sanitized modern sedans and luxury SUVs on standby',
            'No Surge Pricing: Transparent, fixed upfront rates guaranteed 24 hours a day',
            'Luggage Assistance & Meet & Greet: Chauffeur assists from terminal exit to comfortable car seating'
        ],
        'fleet_pricing' => [
            [
                'type' => 'Sedan (Dzire / Etios)',
                'capacity' => '4 Passengers',
                'luggage' => '2 Suitcases + 2 Handbags',
                'fare' => '₹1,199',
                'features' => 'AC, Clean Interiors, Mobile Charger, Bottled Water',
                'popular' => true
            ],
            [
                'type' => 'Ertiga / XL6 SUV',
                'capacity' => '5-6 Passengers',
                'luggage' => '3 Large Suitcases + Bags',
                'fare' => '₹1,699',
                'features' => 'Dual AC, Flexible Seating, Highway Stability',
                'popular' => false
            ],
            [
                'type' => 'Innova Crysta Premium',
                'capacity' => '6-7 Passengers',
                'luggage' => '4 Large Suitcases + Bags',
                'fare' => '₹2,499',
                'features' => 'Executive Leather Captain Seats, Rear AC, Super Smooth Ride',
                'popular' => true
            ],
            [
                'type' => 'Luxury Tempo Traveller',
                'capacity' => '12-16 Passengers',
                'luggage' => '10-14 Bags in dedicated boot',
                'fare' => '₹4,499',
                'features' => 'Pushback Reclining Seats, High Roof, Group Comfort',
                'popular' => false
            ]
        ],
        'popular_transfers' => [
            [
                'route' => 'Jewar Airport to Agra (Taj Mahal)',
                'distance' => '130 km',
                'duration' => '1.5–2 Hours (Direct Yamuna Expressway)',
                'fare' => '₹2,499',
                'desc' => 'The fastest direct airport-to-monument gateway for global tourists visiting Agra.'
            ],
            [
                'route' => 'Jewar Airport to Mathura & Vrindavan',
                'distance' => '85 km',
                'duration' => '1 Hour 15 Minutes',
                'fare' => '₹1,899',
                'desc' => 'Quick spiritual pilgrimage transit right off the Yamuna Expressway corridor.'
            ],
            [
                'route' => 'Jewar Airport to Noida Sector 18 / 62',
                'distance' => '55 km',
                'duration' => '50 Minutes (via Expressway)',
                'fare' => '₹1,299',
                'desc' => 'Swift corridor connection to IT hubs and residential sectors in Noida.'
            ],
            [
                'route' => 'Jewar Airport to Greater Noida (Pari Chowk)',
                'distance' => '32 km',
                'duration' => '30 Minutes',
                'fare' => '₹999',
                'desc' => 'Short transfer to Greater Noida universities, Expo Mart, and business centers.'
            ],
            [
                'route' => 'Jewar Airport to Delhi IGI Airport / Aerocity',
                'distance' => '85 km',
                'duration' => '1.5 Hours (via Eastern Peripheral / KMP)',
                'fare' => '₹1,799',
                'desc' => 'Inter-airport transit for connecting flights between Jewar (DXN) and Delhi (DEL).'
            ],
            [
                'route' => 'Jewar Airport to Aligarh / Western UP',
                'distance' => '65 km',
                'duration' => '1 Hour 10 Minutes',
                'fare' => '₹1,599',
                'desc' => 'Direct transfer to major commercial and educational towns in Western UP.'
            ]
        ],
        'faqs' => [
            [
                'q' => 'Can I book a cab from Jewar Airport directly to the Taj Mahal in Agra?',
                'a' => 'Yes! Because Noida International Airport is situated directly on the Yamuna Expressway, it provides the quickest airport route to Agra, reaching the Taj Mahal in just 90 to 120 minutes.'
            ],
            [
                'q' => 'Do you provide one-way and round-trip transfers from Jewar Airport?',
                'a' => 'We offer both one-way drop-offs and round-trip packages with private chauffeur waiting service for same-day returns or multi-day tours.'
            ],
            [
                'q' => 'How in advance should I reserve my Jewar airport taxi?',
                'a' => 'We recommend booking at least 6 to 12 hours in advance to guarantee vehicle allocation and on-time terminal placement.'
            ]
        ]
    ]
];


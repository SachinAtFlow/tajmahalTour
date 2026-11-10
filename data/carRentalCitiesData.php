<?php
/**
 * Car Rental Locations & Cities Data
 * North India Scope: Delhi NCR, Agra, Jaipur, Gurgaon, Noida, Chandigarh, Uttarakhand, Himachal.
 */

if (!function_exists('getCarRentalCities')) {
    function getCarRentalCities() {
        return [
            'delhi-ncr' => [
                'slug' => 'delhi-ncr',
                'city_name' => 'Delhi NCR',
                'state' => 'National Capital Region',
                'badge' => 'PREMIER HUB',
                'headline' => 'Car Rental in Delhi NCR & Chauffeur Services',
                'description' => 'Book verified AC chauffeur-driven cabs across Delhi, Noida, Gurugram, Faridabad, and Ghaziabad. Enjoy transparent pricing, 24/7 airport transfers, and outstation trips with ₹0 advance deposit.',
                'image' => 'assets/images/delhi/indiaGate.avif',
                'page_title' => 'Car Rental in Delhi NCR - Verified AC Cabs with Chauffeur',
                'rates' => [
                    'local' => '₹2,000 / 8h 80km',
                    'outstation' => '₹12/km',
                    'airport' => '₹899 Flat'
                ],
                'popular_spots' => ['IGI Airport T1/T2/T3', 'New Delhi Rly Station', 'Cyber City Gurugram', 'Noida Sec 18', 'Connaught Place']
            ],
            'delhi' => [
                'slug' => 'delhi',
                'city_name' => 'Delhi',
                'state' => 'Delhi',
                'badge' => 'CAPITAL CITY',
                'headline' => 'Car Rental in Delhi – Sightseeing & Chauffeur Services',
                'description' => 'Rent private AC cabs for Delhi city sightseeing, Connaught Place shopping, embassy visits, and corporate travel. Professional local chauffeurs and instant booking.',
                'image' => 'assets/images/delhi/redfort.avif',
                'page_title' => 'Car Rental in Delhi - Sightseeing Cabs & Chauffeur Service',
                'rates' => [
                    'local' => '₹1,999 / 8h 80km',
                    'outstation' => '₹12/km',
                    'airport' => '₹799 Flat'
                ],
                'popular_spots' => ['India Gate', 'Red Fort', 'Qutub Minar', 'Connaught Place', 'New Delhi Railway Station']
            ],
            'gurgaon' => [
                'slug' => 'gurgaon',
                'city_name' => 'Gurgaon',
                'state' => 'Haryana / Delhi NCR',
                'badge' => 'CORPORATE & AIRPORT',
                'headline' => 'Car Rental in Gurgaon – Corporate, Airport & Outstation Cabs',
                'description' => 'Fast executive cabs across Cyber Hub, Golf Course Road, Sohna Road, and Udyog Vihar. 15-minute pickup to IGI Airport and direct cabs to Jaipur, Agra, and Chandigarh.',
                'image' => 'assets/images/delhi/gurgaon.avif',
                'page_title' => 'Car Rental in Gurgaon - Corporate Cabs & Airport Transfers',
                'rates' => [
                    'local' => '₹2,100 / 8h 80km',
                    'outstation' => '₹12/km',
                    'airport' => '₹799 Flat'
                ],
                'popular_spots' => ['Cyber Hub', 'Golf Course Ext.', 'Huda City Centre', 'Ambience Mall', 'Sohna Road']
            ],
            'noida' => [
                'slug' => 'noida',
                'city_name' => 'Noida',
                'state' => 'Uttar Pradesh / Delhi NCR',
                'badge' => 'EXPRESSWAY CONNECT',
                'headline' => 'Car Rental in Noida – City Cabs & Expressway Transfers',
                'description' => 'Sanitized cabs covering Sector 18, Sector 62, Advant Navis, and Noida Expressway. Direct non-stop cabs to Taj Mahal Agra via Yamuna Expressway.',
                'image' => 'assets/images/others/Noida.avif',
                'page_title' => 'Car Rental in Noida - Chauffeur Cabs & Agra Expressway Cabs',
                'rates' => [
                    'local' => '₹2,000 / 8h 80km',
                    'outstation' => '₹12/km',
                    'airport' => '₹999 Flat'
                ],
                'popular_spots' => ['Sector 18 Atta Market', 'Sector 62 IT Park', 'Advant Navis', 'Botanical Garden', 'Expressway Entry']
            ],
            'greater-noida' => [
                'slug' => 'greater-noida',
                'city_name' => 'Greater Noida',
                'state' => 'Uttar Pradesh / Delhi NCR',
                'badge' => 'YAMUNA EXPRESSWAY',
                'headline' => 'Car Rental in Greater Noida – Cabs & Airport Transfers',
                'description' => 'Premier car rental services across Pari Chowk, Knowledge Park, India Expo Mart, and Yamuna Expressway. Seamless transfers to Noida International Airport (Jewar) and Delhi.',
                'image' => 'assets/images/others/gr_noida.avif',
                'page_title' => 'Car Rental in Greater Noida - Cabs & Airport Transfers',
                'rates' => [
                    'local' => '₹2,100 / 8h 80km',
                    'outstation' => '₹12/km',
                    'airport' => '₹1,099 Flat'
                ],
                'popular_spots' => ['Pari Chowk', 'India Expo Mart', 'Knowledge Park', 'Yamuna Expressway Entry', 'Gautam Buddha University']
            ],
            'ghaziabad' => [
                'slug' => 'ghaziabad',
                'city_name' => 'Ghaziabad',
                'state' => 'Uttar Pradesh / Delhi NCR',
                'badge' => 'GATEWAY HUB',
                'headline' => 'Car Rental in Ghaziabad – City Sightseeing & Outstation Cabs',
                'description' => 'Reliable private car rental across Indirapuram, Vaishali, Raj Nagar Extension, and Mohan Nagar. Doorstep pickup with verified commercial drivers and transparent billing.',
                'image' => 'assets/images/others/ghaziabad.avif',
                'page_title' => 'Car Rental in Ghaziabad - City Cabs & Outstation Transfers',
                'rates' => [
                    'local' => '₹1,999 / 8h 80km',
                    'outstation' => '₹12/km',
                    'airport' => '₹999 Flat'
                ],
                'popular_spots' => ['Indirapuram', 'Vaishali Metro Station', 'Raj Nagar Extension', 'Mohan Nagar', 'Ghaziabad Railway Station']
            ],
            'faridabad' => [
                'slug' => 'faridabad',
                'city_name' => 'Faridabad',
                'state' => 'Haryana / Delhi NCR',
                'badge' => 'INDUSTRIAL CAPITAL',
                'headline' => 'Car Rental in Faridabad – Chauffeur Cabs & Highway Transfers',
                'description' => 'Book clean AC chauffeur cabs across Sector 15, NIT Faridabad, Badarpur Border, and Mathura Road. Fast transfers to Delhi, Gurgaon, and IGI Airport.',
                'image' => 'assets/images/others/faridabad.avif',
                'page_title' => 'Car Rental in Faridabad - Chauffeur Cabs & Outstation Transfers',
                'rates' => [
                    'local' => '₹2,000 / 8h 80km',
                    'outstation' => '₹12/km',
                    'airport' => '₹999 Flat'
                ],
                'popular_spots' => ['NIT Faridabad', 'Sector 15', 'Badarpur Border', 'Bata Chowk', 'Surajkund']
            ]
        ];
    }
}

if (!function_exists('getCarRentalCityData')) {
    function getCarRentalCityData($key = 'delhi-ncr') {
        $cities = getCarRentalCities();
        $slug = strtolower(trim($key ?? ''));
        if (isset($cities[$slug])) {
            return $cities[$slug];
        }

        // Auxiliary regional data support for backward compatibility
        $extraCities = [
            'agra' => [
                'slug' => 'agra',
                'city_name' => 'Agra & Taj Mahal',
                'state' => 'Uttar Pradesh',
                'badge' => 'HERITAGE SPECIAL',
                'headline' => 'Car Rental in Agra – Guided Taj Mahal & Monument Cabs',
                'description' => 'Explore the iconic Taj Mahal, Agra Fort, and Fatehpur Sikri with premier private AC cars. Doorstep pickup from Agra Cantt station, local hotels, or Yamuna Expressway transfers.',
                'image' => 'assets/images/uttarPradesh/tajmahal.avif',
                'page_title' => 'Car Rental in Agra - Taj Mahal Sightseeing & Outstation Cabs',
                'rates' => ['local' => '₹1,800 / 8h 80km', 'outstation' => '₹12/km', 'airport' => '₹799 Flat'],
                'popular_spots' => ['Agra Cantt Railway Station', 'Taj East Gate', 'Fatehabad Road', 'Agra Fort', 'Yamuna Expressway Toll']
            ],
            'jaipur' => [
                'slug' => 'jaipur',
                'city_name' => 'Jaipur (Pink City)',
                'state' => 'Rajasthan',
                'badge' => 'ROYAL GATEWAY',
                'headline' => 'Car Rental in Jaipur – Sightseeing & Rajasthan Tours',
                'description' => 'Tour Amber Fort, Hawa Mahal, City Palace, and Nahargarh with verified local chauffeurs. Reliable intercity cabs from Jaipur to Delhi, Agra, Ajmer, and Udaipur.',
                'image' => 'assets/images/rajasthan/jaipur.avif',
                'page_title' => 'Car Rental in Jaipur - Pink City Sightseeing & Cabs',
                'rates' => ['local' => '₹2,200 / 8h 80km', 'outstation' => '₹13/km', 'airport' => '₹850 Flat'],
                'popular_spots' => ['Jaipur Airport (JAI)', 'Jaipur Junction', 'MI Road', 'Amber Fort Foot', 'Mansarovar']
            ],
            'chandigarh' => [
                'slug' => 'chandigarh',
                'city_name' => 'Chandigarh & Punjab',
                'state' => 'Punjab & Haryana',
                'badge' => 'TRI-CITY & HILL ROUTE',
                'headline' => 'Car Rental in Chandigarh – City Cabs & Gateway to Hills',
                'description' => 'Comfortable sedans and hill-ready SUVs from Chandigarh to Shimla, Manali, Dharamshala, Amritsar, and Delhi with experienced mountain chauffeurs.',
                'image' => 'assets/images/punjab/goldenTemple.avif',
                'page_title' => 'Car Rental in Chandigarh - Cabs to Shimla, Manali & Delhi',
                'rates' => ['local' => '₹2,200 / 8h 80km', 'outstation' => '₹13/km', 'airport' => '₹899 Flat'],
                'popular_spots' => ['Chandigarh Airport (IXC)', 'Sector 17 Plaza', 'Rock Garden', 'Tribune Chowk', 'Zirakpur Junction']
            ],
            'dehradun-rishikesh' => [
                'slug' => 'dehradun-rishikesh',
                'city_name' => 'Dehradun & Rishikesh',
                'state' => 'Uttarakhand',
                'badge' => 'DEV BHOOMI',
                'headline' => 'Car Rental in Dehradun & Rishikesh – Pilgrimage & Hills',
                'description' => 'Reliable mountain AC cabs for Jolly Grant Airport, Mussoorie hill excursions, Haridwar Ganga Aarti, and Char Dham pilgrimage routes.',
                'image' => 'assets/images/uttrakhand/uttrakhand.avif',
                'page_title' => 'Car Rental in Dehradun & Rishikesh - Hill Station & Pilgrimage Cabs',
                'rates' => ['local' => '₹2,400 / 8h 80km', 'outstation' => '₹14/km', 'airport' => '₹950 Flat'],
                'popular_spots' => ['Jolly Grant Airport (DED)', 'Dehradun Railway Station', 'Laxman Jhula Rishikesh', 'Haridwar Ghats', 'Mussoorie Diversion']
            ],
            'shimla-manali' => [
                'slug' => 'shimla-manali',
                'city_name' => 'Shimla & Himachal Pradesh',
                'state' => 'Himachal Pradesh',
                'badge' => 'HIMALAYAN TOURS',
                'headline' => 'Car Rental in Himachal – Shimla, Manali & Mountain Cabs',
                'description' => 'Specialized mountain chauffeurs with well-maintained Innova Crysta and commercial cabs. Safe scenic travel across Kufri, Solang, Atal Tunnel, and Kasol.',
                'image' => 'assets/images/himachal/himachal.avif',
                'page_title' => 'Car Rental in Himachal - Shimla, Manali & Valley Cabs',
                'rates' => ['local' => '₹2,600 / 8h 80km', 'outstation' => '₹15/km', 'airport' => '₹1,200 Flat'],
                'popular_spots' => ['Mall Road Shimla', 'Kalka Station', 'Manali Mall Road', 'Solang Valley', 'Chandigarh-Shimla Highway']
            ]
        ];

        if (isset($extraCities[$slug])) {
            return $extraCities[$slug];
        }

        foreach ($cities as $k => $c) {
            if (strpos($k, $slug) !== false || strpos($slug, $k) !== false) {
                return $c;
            }
        }
        foreach ($extraCities as $k => $c) {
            if (strpos($k, $slug) !== false || strpos($slug, $k) !== false) {
                return $c;
            }
        }
        return $cities['delhi-ncr'];
    }
}


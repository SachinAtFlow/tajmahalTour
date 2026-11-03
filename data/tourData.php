<?php
// tours-data.php

$toursData = [
    // Top 8 Featured / Main Cards
    [
        "id" => 1,
        "title" => "Delhi NCR Car Rental",
        "category" => "delhi",
        "tag" => "DELHI",
        "subtitle" => "Explore <span class=\"text-orange-500 font-bold\">Delhi with a Private Car</span>",
        "image" => "assets/images/delhi/india-gate.avif",
        "duration" => "Full Day",
        "type" => "Chauffeur",
        "icon" => "car",
        "link" => "carRentalLocation.php?city=delhi-ncr",
        "is_featured" => true // All tab pe top 8 me dikhega
    ],
    [
        "id" => 2,
        "title" => "Delhi To Agra Same Day Tour",
        "category" => "uttar-pradesh delhi",
        "tag" => "DELHI - AGRA",
        "subtitle" => "Visit <span class=\"text-orange-500 font-bold\">Taj Mahal & Agra Fort</span>",
        "image" => "assets/images/uttarpradesh/tajmahal2.avif",
        "duration" => "01 Day",
        "type" => "Private Trip",
        "icon" => "user",
        "link" => "samedaytours/samedayagratour.html",
        "is_featured" => true
    ],
    [
        "id" => 3,
        "title" => "Golden Triangle Tour",
        "category" => "rajasthan delhi uttar-pradesh",
        "tag" => "GOLDEN TRIANGLE",
        "subtitle" => "Delhi <span class=\"text-orange-500 font-bold\">• Agra • Jaipur</span>",
        "image" => "assets/images/rajasthan/jaipur.avif",
        "duration" => "4 Days",
        "type" => "Private Car",
        "icon" => "car",
        "link" => "tourPackageDetail.php?tour=golden-triangle-delhi-agra-jaipur-4-days",
        "is_featured" => true
    ],
    [
        "id" => 4,
        "title" => "Rajasthan Tour Packages",
        "category" => "rajasthan",
        "tag" => "RAJASTHAN",
        "subtitle" => "Discover <span class=\"text-orange-500 font-bold\">Jaipur • Udaipur • Jodhpur</span>",
        "image" => "assets/images/rajasthan/rajasthan2.avif",
        "duration" => "2–5 Days",
        "type" => "Flexible",
        "icon" => "map",
        "link" => "tourPackageDetail.php?tour=rajasthan",
        "is_featured" => true
    ],
    [
        "id" => 5,
        "title" => "Himachal Tour Packages",
        "category" => "himachal",
        "tag" => "HIMACHAL",
        "subtitle" => "Explore <span class=\"text-orange-500 font-bold\">Shimla • Manali • Dalhousie</span>",
        "image" => "assets/images/himachal/shimla.avif",
        "duration" => "3–11 Days",
        "type" => "Hill Trip",
        "icon" => "mountain",
        "link" => "tourPackageDetail.php?tour=himachal-holidays-hill-station-tour",
        "is_featured" => true
    ],
    [
        "id" => 6,
        "title" => "Rishikesh & Haridwar Tour",
        "category" => "uttarakhand",
        "tag" => "UTTARAKHAND",
        "subtitle" => "Spiritual <span class=\"text-orange-500 font-bold\">Getaway from Delhi</span>",
        "image" => "assets/images/uttrakhand/rishikesh.avif",
        "duration" => "2–3 Days",
        "type" => "Spiritual",
        "icon" => "sparkles",
        "link" => "tourPackageDetail.php?tour=haridwar-rishikesh-same-day",
        "is_featured" => false
    ],
    [
        "id" => 7,
        "title" => "Spiritual Tour Packages",
        "category" => "spiritual uttar-pradesh uttarakhand",
        "tag" => "SPIRITUAL PILGRIMAGE",
        "subtitle" => "Sacred <span class=\"text-orange-500 font-bold\">Char Dham • Haridwar • Amritsar</span>",
        "image" => "assets/images/hero-images/ram-mandir.avif",
        "duration" => "4–12 Days",
        "type" => "Pilgrimage",
        "icon" => "user-check",
        "link" => "tourPackageDetail.php?tour=spiritual",
        "is_featured" => true
    ],
    [
        "id" => 8,
        "title" => "India Wildlife Tour Packages",
        "category" => "wildlife uttarakhand rajasthan",
        "tag" => "WILDLIFE SAFARI",
        "subtitle" => "Explore <span class=\"text-orange-500 font-bold\">Corbett • Ranthambore • Bharatpur</span>",
        "image" => "assets/images/uttrakhand/national-park.avif",
        "duration" => "4–13 Days",
        "type" => "Jungle Safari",
        "icon" => "trees",
        "link" => "tourPackageDetail.php?tour=wildlife",
        "is_featured" => true
    ],

    // Extra Tour Packages (Jo "All" me nahi, par Filter Tab me dikhenge)
    [
        "id" => 9,
        "title" => "Udaipur & Jodhpur Luxury Tour",
        "category" => "rajasthan",
        "tag" => "RAJASTHAN",
        "subtitle" => "Experience <span class=\"text-orange-500 font-bold\">Royal Palaces</span>",
        "image" => "assets/images/rajasthan/udaipur.avif",
        "duration" => "4 Days",
        "type" => "Luxury Car",
        "icon" => "car",
        "link" => "tourPackageDetail.php?tour=udaipur-mount-abu-tour",
        "is_featured" => false // All tab pe nahi dikhega, sirf Rajasthan tab me
    ],
    [
        "id" => 10,
        "title" => "Delhi To Shimla Weekend Tour",
        "category" => "himachal",
        "tag" => "HIMACHAL",
        "subtitle" => "Shimla <span class=\"text-orange-500 font-bold\">• Kufri • Mall Road</span>",
        "image" => "assets/images/himachal/shimla.avif",
        "duration" => "3 Days",
        "type" => "Weekend Hill Trip",
        "icon" => "mountain",
        "link" => "tourPackageDetail.php?tour=delhi-to-shimla-weekend-tour",
        "is_featured" => false
    ],

    // =========================================================
    // GUJARAT TOURS
    // =========================================================
    [
        "id" => 11,
        "title" => "Gujarat Tour Packages",
        "category" => "gujarat gujrat",
        "tag" => "GUJARAT",
        "subtitle" => "Explore <span class=\"text-orange-500 font-bold\">Dwarka • Somnath • Kutch</span>",
        "image" => "assets/images/gujrat/gujrat.avif",
        "duration" => "5–7 Days",
        "type" => "Heritage & Safari",
        "icon" => "map",
        "link" => "tourPackageDetail.php?tour=gujarat",
        "is_featured" => false
    ],
    [
        "id" => 12,
        "title" => "Dwarka Somnath Spiritual Tour",
        "category" => "gujarat gujrat",
        "tag" => "GUJARAT",
        "subtitle" => "Visit <span class=\"text-orange-500 font-bold\">Dwarkadhish & Jyotirlinga</span>",
        "image" => "assets/images/gujrat/dwarkadhish-temple.jpeg",
        "duration" => "4–5 Days",
        "type" => "Spiritual",
        "icon" => "sparkles",
        "link" => "tourPackageDetail.php?tour=dwarka-somnath-tour",
        "is_featured" => false
    ],
    [
        "id" => 13,
        "title" => "Rann of Kutch White Desert Tour",
        "category" => "gujarat gujrat",
        "tag" => "GUJARAT",
        "subtitle" => "Experience <span class=\"text-orange-500 font-bold\">White Salt Desert & Safari</span>",
        "image" => "assets/images/gujrat/rannofkutch.avif",
        "duration" => "3–4 Days",
        "type" => "Desert Tour",
        "icon" => "sun",
        "link" => "tourPackageDetail.php?tour=rann-of-kutch-tour",
        "is_featured" => false
    ],
    [
        "id" => 14,
        "title" => "Gir National Park Wildlife Safari",
        "category" => "gujarat gujrat",
        "tag" => "GUJARAT",
        "subtitle" => "Discover <span class=\"text-orange-500 font-bold\">Wild Asiatic Lions</span>",
        "image" => "assets/images/gujrat/gir-national-park.avif",
        "duration" => "3 Days",
        "type" => "Safari",
        "icon" => "trees",
        "link" => "tourPackageDetail.php?tour=gir-national-park-tour",
        "is_featured" => false
    ],

    // =========================================================
    // NEPAL TOURS
    // =========================================================
    [
        "id" => 15,
        "title" => "Nepal Tour Packages from Delhi",
        "category" => "nepal",
        "tag" => "NEPAL",
        "subtitle" => "Discover <span class=\"text-orange-500 font-bold\">Kathmandu • Pokhara • Everest</span>",
        "image" => "assets/images/nepal/nepal.avif",
        "duration" => "6–8 Days",
        "type" => "Himalayan Trip",
        "icon" => "mountain",
        "link" => "tourPackageDetail.php?tour=nepal",
        "is_featured" => true
    ],
    [
        "id" => 16,
        "title" => "Kathmandu & Pashupatinath Tour",
        "category" => "nepal",
        "tag" => "NEPAL",
        "subtitle" => "Visit <span class=\"text-orange-500 font-bold\">Pashupatinath & Stupas</span>",
        "image" => "assets/images/nepal/kathmandu.avif",
        "duration" => "4 Days",
        "type" => "Cultural Trip",
        "icon" => "sparkles",
        "link" => "tourPackageDetail.php?tour=kathmandu-heritage-tour",
        "is_featured" => false
    ],
    [
        "id" => 17,
        "title" => "Pokhara Phewa Lake & Mountain Tour",
        "category" => "nepal",
        "tag" => "NEPAL",
        "subtitle" => "Relax at <span class=\"text-orange-500 font-bold\">Phewa Lake & Sarangkot</span>",
        "image" => "assets/images/nepal/pokhra.avif",
        "duration" => "5 Days",
        "type" => "Scenic Hills",
        "icon" => "compass",
        "link" => "tourPackageDetail.php?tour=pokhara-annapurna-tour",
        "is_featured" => false
    ],
    [
        "id" => 18,
        "title" => "Everest Mountain Flight Tour",
        "category" => "nepal",
        "tag" => "NEPAL",
        "subtitle" => "Witness <span class=\"text-orange-500 font-bold\">Mount Everest Up-Close</span>",
        "image" => "assets/images/nepal/everest-base-camp.avif",
        "duration" => "4 Days",
        "type" => "Scenic Flight",
        "icon" => "plane",
        "link" => "tourPackageDetail.php?tour=everest-flight-kathmandu",
        "is_featured" => false
    ],
    [
        "id" => 19,
        "title" => "Chitwan Jungle Safari & Pokhara Tour",
        "category" => "nepal",
        "tag" => "NEPAL",
        "subtitle" => "Explore <span class=\"text-orange-500 font-bold\">Chitwan Safari & Pokhara</span>",
        "image" => "assets/images/nepal/nepal.avif",
        "duration" => "5–6 Days",
        "type" => "Jungle & Lakes",
        "icon" => "trees",
        "link" => "tourPackageDetail.php?tour=chitwan-wildlife-tour",
        "is_featured" => false
    ],
    [
        "id" => 20,
        "title" => "Complete Nepal Odyssey 7 Days",
        "category" => "nepal",
        "tag" => "NEPAL",
        "subtitle" => "Kathmandu <span class=\"text-orange-500 font-bold\">• Chitwan Safari • Pokhara</span>",
        "image" => "assets/images/nepal/nepal.avif",
        "duration" => "7 Days",
        "type" => "Grand Odyssey",
        "icon" => "compass",
        "link" => "tourPackageDetail.php?tour=complete-nepal-odyssey",
        "is_featured" => false
    ],

    // =========================================================
    // 5 COMPREHENSIVE RAJASTHAN TOURS
    // =========================================================
    [
        "id" => 21,
        "title" => "20-Day Rajasthan Heritage Tour",
        "category" => "rajasthan",
        "tag" => "RAJASTHAN",
        "subtitle" => "Epic 20 Days <span class=\"text-orange-500 font-bold\">Heritage Odyssey</span>",
        "image" => "assets/images/hero-images/rajasthan.avif",
        "duration" => "20 Days",
        "type" => "Grand Heritage",
        "icon" => "crown",
        "link" => "tourPackageDetail.php?tour=rajasthan-heritage-tour-20-days",
        "is_featured" => false
    ],
    [
        "id" => 22,
        "title" => "Royal Rajasthan Tour",
        "category" => "rajasthan",
        "tag" => "RAJASTHAN",
        "subtitle" => "Forts, Palaces & <span class=\"text-orange-500 font-bold\">Desert Sand Dunes</span>",
        "image" => "assets/images/rajasthan/rajasthan2.avif",
        "duration" => "16 Days",
        "type" => "Royal Circuit",
        "icon" => "castle",
        "link" => "tourPackageDetail.php?tour=royal-rajasthan-tour-16-days",
        "is_featured" => false
    ],
    [
        "id" => 23,
        "title" => "Rajasthan Forts & Palaces Tour",
        "category" => "rajasthan",
        "tag" => "RAJASTHAN",
        "subtitle" => "Discover Historic <span class=\"text-orange-500 font-bold\">Citadels & Palaces</span>",
        "image" => "assets/images/rajasthan/jaipur.avif",
        "duration" => "13 Days",
        "type" => "Forts Tour",
        "icon" => "shield",
        "link" => "tourPackageDetail.php?tour=rajasthan-forts-palaces-tour-13-days",
        "is_featured" => false
    ],
    [
        "id" => 24,
        "title" => "Rajasthan Camel Safari Tour",
        "category" => "rajasthan",
        "tag" => "RAJASTHAN",
        "subtitle" => "Thar Dunes & <span class=\"text-orange-500 font-bold\">Desert Safari Camp</span>",
        "image" => "assets/images/rajasthan/jaisalmer.avif",
        "duration" => "14 Days",
        "type" => "Desert Safari",
        "icon" => "sun",
        "link" => "tourPackageDetail.php?tour=rajasthan-camel-safari-tour-14-days",
        "is_featured" => false
    ],
    [
        "id" => 25,
        "title" => "Rajasthan Culture Tour",
        "category" => "rajasthan",
        "tag" => "RAJASTHAN",
        "subtitle" => "Folk Traditions & <span class=\"text-orange-500 font-bold\">Living Royal Culture</span>",
        "image" => "assets/images/rajasthan/udaipur.avif",
        "duration" => "16 Days",
        "type" => "Cultural Tour",
        "icon" => "sparkles",
        "link" => "tourPackageDetail.php?tour=rajasthan-culture-tour-16-days",
        "is_featured" => false
    ],

    // =========================================================
    // 5 COMPREHENSIVE GOLDEN TRIANGLE TOURS
    // =========================================================
    [
        "id" => 26,
        "title" => "Golden Triangle Delhi Agra Jaipur Tour",
        "category" => "rajasthan delhi uttar-pradesh",
        "tag" => "GOLDEN TRIANGLE",
        "subtitle" => "Delhi <span class=\"text-orange-500 font-bold\">• Agra Taj Mahal • Jaipur</span>",
        "image" => "assets/images/rajasthan/jaipur.avif",
        "duration" => "4 Days",
        "type" => "Heritage Triangle",
        "icon" => "map-pin",
        "link" => "tourPackageDetail.php?tour=golden-triangle-delhi-agra-jaipur-4-days",
        "is_featured" => false
    ],
    [
        "id" => 27,
        "title" => "Golden Temple Amritsar Tour Packages",
        "category" => "delhi uttar-pradesh",
        "tag" => "GOLDEN TRIANGLE + PUNJAB",
        "subtitle" => "Amritsar <span class=\"text-orange-500 font-bold\">• Delhi • Agra • Jaipur</span>",
        "image" => "assets/images/punjab/golden-temple.avif",
        "duration" => "7 Days",
        "type" => "Spiritual & Heritage",
        "icon" => "sparkles",
        "link" => "tourPackageDetail.php?tour=golden-triangle-amritsar-tour-7-days",
        "is_featured" => false
    ],
    [
        "id" => 28,
        "title" => "Delhi To Haridwar Rishikesh Tour Packages",
        "category" => "delhi uttrakhand uttar-pradesh",
        "tag" => "TRIANGLE + UTTARAKHAND",
        "subtitle" => "Jaipur <span class=\"text-orange-500 font-bold\">• Agra • Haridwar • Rishikesh</span>",
        "image" => "assets/images/uttrakhand/rishikesh2.avif",
        "duration" => "8 Days",
        "type" => "Spiritual Circuit",
        "icon" => "compass",
        "link" => "tourPackageDetail.php?tour=golden-triangle-haridwar-rishikesh-8-days",
        "is_featured" => false
    ],
    [
        "id" => 29,
        "title" => "Delhi To Orchha Khajuraho Varanasi Tour",
        "category" => "delhi uttar-pradesh rajasthan",
        "tag" => "HERITAGE & TEMPLE CIRCUIT",
        "subtitle" => "Agra <span class=\"text-orange-500 font-bold\">• Orchha • Khajuraho • Varanasi</span>",
        "image" => "assets/images/uttarpradesh/varanasi.avif",
        "duration" => "10-12 Days",
        "type" => "Grand Temple Odyssey",
        "icon" => "crown",
        "link" => "tourPackageDetail.php?tour=golden-triangle-orchha-khajuraho-varanasi-tour",
        "is_featured" => false
    ],
    [
        "id" => 30,
        "title" => "Ranthambhore Tiger Safari Wildlife Tour",
        "category" => "rajasthan delhi uttar-pradesh",
        "tag" => "TRIANGLE + WILDLIFE",
        "subtitle" => "Agra <span class=\"text-orange-500 font-bold\">• Bharatpur • Ranthambhore • Jaipur</span>",
        "image" => "assets/images/uttrakhand/national-park.avif",
        "duration" => "9 Days",
        "type" => "Wildlife & Royal Forts",
        "icon" => "camera",
        "link" => "tourPackageDetail.php?tour=golden-triangle-ranthambore-tiger-safari-9-days",
        "is_featured" => false
    ],

    // =========================================================
    // 5 SAME DAY TOUR PACKAGES
    // =========================================================
    [
        "id" => 31,
        "title" => "Delhi City Sightseeing Tour By Car",
        "category" => "delhi",
        "tag" => "DELHI SIGHTSEEING",
        "subtitle" => "12 Heritage <span class=\"text-orange-500 font-bold\">Monuments of Delhi</span>",
        "image" => "assets/images/delhi/india-gate.avif",
        "duration" => "1 Day",
        "type" => "City Sightseeing",
        "icon" => "car",
        "link" => "samedaytours/delhifulldaytour.html",
        "is_featured" => false
    ],
    [
        "id" => 32,
        "title" => "Taj Mahal Tour From Delhi By Car",
        "category" => "uttar-pradesh delhi",
        "tag" => "AGRA SAME DAY",
        "subtitle" => "Taj Mahal <span class=\"text-orange-500 font-bold\">• Sunrise & Sunset • Agra Fort</span>",
        "image" => "assets/images/uttarpradesh/tajmahal2.avif",
        "duration" => "1 Day",
        "type" => "Sunrise & Sunset Excursion",
        "icon" => "sun",
        "link" => "samedaytours/samedayagratour.html",
        "is_featured" => false
    ],
    [
        "id" => 33,
        "title" => "Delhi To Jaipur Same Day Tour Packages",
        "category" => "rajasthan",
        "tag" => "JAIPUR SAME DAY",
        "subtitle" => "Amber Fort <span class=\"text-orange-500 font-bold\">• City Palace • Hawa Mahal</span>",
        "image" => "assets/images/rajasthan/jaipur.avif",
        "duration" => "1 Day",
        "type" => "Expressway Cab",
        "icon" => "castle",
        "link" => "tourPackageDetail.php?tour=jaipur-same-day",
        "is_featured" => false
    ],
    [
        "id" => 34,
        "title" => "Delhi To Mathura Vrindavan Agra Tour",
        "category" => "uttar-pradesh delhi",
        "tag" => "DIVINE BRAJ BHOOMI",
        "subtitle" => "Mathura <span class=\"text-orange-500 font-bold\">• Vrindavan • Agra</span>",
        "image" => "assets/images/uttarpradesh/mathura.avif",
        "duration" => "1 / 2 Days",
        "type" => "Spiritual & Heritage",
        "icon" => "sparkles",
        "link" => "tourPackageDetail.php?tour=mathura-vrindavan-same-day",
        "is_featured" => false
    ],
    [
        "id" => 35,
        "title" => "Delhi to Haridwar Rishikesh Tour",
        "category" => "uttrakhand delhi",
        "tag" => "DEVBHOOMI PILGRIMAGE",
        "subtitle" => "Har Ki Pauri <span class=\"text-orange-500 font-bold\">• Mansa Devi • Rishikesh</span>",
        "image" => "assets/images/uttrakhand/haridwar.avif",
        "duration" => "1 / 2 / 3 Days",
        "type" => "Holy Snan & Aarti",
        "icon" => "compass",
        "link" => "tourPackageDetail.php?tour=haridwar-rishikesh-same-day",
        "is_featured" => false
    ],

    // =========================================================
    // 4 COMPREHENSIVE HIMACHAL PACKAGES
    // =========================================================
    [
        "id" => 36,
        "title" => "Himachal Holidays Hill Station Tour",
        "category" => "himachal",
        "tag" => "HIMACHAL",
        "subtitle" => "Shimla <span class=\"text-orange-500 font-bold\">• Manali • Dalhousie • Khajjiar</span>",
        "image" => "assets/images/himachal/shimla2.avif",
        "duration" => "11 Days",
        "type" => "Complete Hill Odyssey",
        "icon" => "mountain",
        "link" => "tourPackageDetail.php?tour=himachal-holidays-hill-station-tour",
        "is_featured" => false
    ],
    [
        "id" => 37,
        "title" => "Delhi To Shimla Manali Dharamshala Dalhousie Chandigarh Tour",
        "category" => "himachal punjab",
        "tag" => "HIMACHAL & CHANDIGARH",
        "subtitle" => "Shimla <span class=\"text-orange-500 font-bold\">• Rohtang • McLeodganj • Rock Garden</span>",
        "image" => "assets/images/himachal/dharamshala.avif",
        "duration" => "11 Days",
        "type" => "Grand Hill & City Circuit",
        "icon" => "compass",
        "link" => "tourPackageDetail.php?tour=shimla-manali-dharamshala-dalhousie-chandigarh-tour",
        "is_featured" => false
    ],
    [
        "id" => 38,
        "title" => "Hillstation Himachal Adventure Tour Car Hire",
        "category" => "himachal",
        "tag" => "HIMACHAL ADVENTURE",
        "subtitle" => "Trekking <span class=\"text-orange-500 font-bold\">• Jeep Safari • Camping • Hang Gliding</span>",
        "image" => "assets/images/himachal/spiti.avif",
        "duration" => "8 Days",
        "type" => "Adventure Safari",
        "icon" => "tent",
        "link" => "tourPackageDetail.php?tour=himachal-adventure-tour-car-hire",
        "is_featured" => false
    ],
    [
        "id" => 39,
        "title" => "Hillstation Honeymoon Tour Packages",
        "category" => "himachal",
        "tag" => "HIMACHAL HONEYMOON",
        "subtitle" => "Romantic <span class=\"text-orange-500 font-bold\">Shimla • Kullu • Manali</span>",
        "image" => "assets/images/himachal/manali.avif",
        "duration" => "8 Days",
        "type" => "Honeymoon Special",
        "icon" => "heart",
        "link" => "tourPackageDetail.php?tour=himachal-honeymoon-tour-packages",
        "is_featured" => false
    ],

    // =========================================================
    // 5 SPIRITUAL & PILGRIMAGE TOURS (From tourDataPilgrimage.txt)
    // =========================================================
    [
        "id" => 40,
        "title" => "Delhi To Char Dham Yatra 2026",
        "category" => "spiritual uttarakhand",
        "tag" => "CHAR DHAM YATRA",
        "subtitle" => "Yamunotri <span class=\"text-orange-500 font-bold\">• Gangotri • Kedarnath • Badrinath</span>",
        "image" => "assets/images/uttrakhand/kedarnath.avif",
        "duration" => "12 Days",
        "type" => "Sacred Yatra",
        "icon" => "sparkles",
        "link" => "tourPackageDetail.php?tour=delhi-to-char-dham-yatra",
        "is_featured" => false
    ],
    [
        "id" => 41,
        "title" => "Delhi to Amritsar Golden Temple Tour",
        "category" => "spiritual punjab",
        "tag" => "GOLDEN TEMPLE",
        "subtitle" => "Harmandir Sahib <span class=\"text-orange-500 font-bold\">• Wagah Border • Chandigarh</span>",
        "image" => "assets/images/punjab/golden-temple.avif",
        "duration" => "4 Days",
        "type" => "Spiritual & Heritage",
        "icon" => "sun",
        "link" => "tourPackageDetail.php?tour=delhi-to-amritsar-golden-temple-tour",
        "is_featured" => false
    ],
    [
        "id" => 42,
        "title" => "Delhi To Agra Jaipur Ajmer Pushkar Tour",
        "category" => "spiritual rajasthan uttar-pradesh",
        "tag" => "AJMER & PUSHKAR",
        "subtitle" => "Taj Mahal <span class=\"text-orange-500 font-bold\">• Amber Fort • Ajmer Sharif • Pushkar</span>",
        "image" => "assets/images/rajasthan/rajasthan2.avif",
        "duration" => "9 Days",
        "type" => "Heritage & Sufi Pilgrimage",
        "icon" => "compass",
        "link" => "tourPackageDetail.php?tour=delhi-to-agra-jaipur-ajmer-pushkar-tour",
        "is_featured" => false
    ],
    [
        "id" => 43,
        "title" => "Delhi To Agra Jaipur Pushkar Tour",
        "category" => "spiritual rajasthan uttar-pradesh",
        "tag" => "BRAJ & RAJASTHAN",
        "subtitle" => "Agra <span class=\"text-orange-500 font-bold\">• Fatehpur Sikri • Jaipur • Brahma Temple</span>",
        "image" => "assets/images/rajasthan/jaipur.avif",
        "duration" => "6 Days",
        "type" => "Heritage & Temples",
        "icon" => "castle",
        "link" => "tourPackageDetail.php?tour=delhi-to-agra-jaipur-pushkar-tour",
        "is_featured" => false
    ],
    [
        "id" => 44,
        "title" => "Delhi to Haridwar Rishikesh Mussoorie Tour",
        "category" => "spiritual uttarakhand",
        "tag" => "DEVBHOOMI & HILLS",
        "subtitle" => "Har Ki Pauri <span class=\"text-orange-500 font-bold\">• Rishikesh Yoga • Mussoorie Hills</span>",
        "image" => "assets/images/uttrakhand/haridwar.avif",
        "duration" => "7 Days",
        "type" => "Pilgrimage & Hill Station",
        "icon" => "mountain",
        "link" => "tourPackageDetail.php?tour=delhi-to-haridwar-rishikesh-mussoorie-tour",
        "is_featured" => false
    ],

    // =========================================================
    // 4 WILDLIFE TOURS (From tourDataWildlife.txt)
    // =========================================================
    [
        "id" => 45,
        "title" => "Delhi To Bharatpur Bird Sanctuary Tour",
        "category" => "wildlife rajasthan uttar-pradesh",
        "tag" => "BIRD SANCTUARY",
        "subtitle" => "Keoladeo Ghana <span class=\"text-orange-500 font-bold\">• Sultanpur • Taj Mahal • Sikri</span>",
        "image" => "assets/images/wildlife/bharatpur.avif",
        "duration" => "6 Days",
        "type" => "Birdwatching Safari",
        "icon" => "trees",
        "link" => "tourPackageDetail.php?tour=delhi-to-bharatpur-bird-sanctuary-tour",
        "is_featured" => false
    ],
    [
        "id" => 46,
        "title" => "Delhi to Corbett Wildlife Tour Packages",
        "category" => "wildlife uttarakhand",
        "tag" => "CORBETT TIGER SAFARI",
        "subtitle" => "Jim Corbett <span class=\"text-orange-500 font-bold\">• 4x4 Jeep Safari • Kosi River</span>",
        "image" => "assets/images/wildlife/jim-corbett.avif",
        "duration" => "4 Days",
        "type" => "Tiger Safari",
        "icon" => "trees",
        "link" => "tourPackageDetail.php?tour=delhi-to-corbett-wildlife-tour-packages",
        "is_featured" => false
    ],
    [
        "id" => 47,
        "title" => "Delhi to Ranthambhore Wildlife Tour",
        "category" => "wildlife rajasthan uttarakhand",
        "tag" => "GRAND WILDLIFE ODYSSEY",
        "subtitle" => "Ranthambore <span class=\"text-orange-500 font-bold\">• Keoladeo • Taj Mahal • Corbett</span>",
        "image" => "assets/images/wildlife/ranthambhore.avif",
        "duration" => "13 Days",
        "type" => "Grand Tiger Odyssey",
        "icon" => "compass",
        "link" => "tourPackageDetail.php?tour=delhi-to-ranthambhore-wildlife-tour",
        "is_featured" => false
    ],
    [
        "id" => 48,
        "title" => "Delhi To Sariska Wildlife Tour Packages",
        "category" => "wildlife rajasthan",
        "tag" => "SARISKA & TIGERS",
        "subtitle" => "Sariska Tigers <span class=\"text-orange-500 font-bold\">• Ranthambore • Keoladeo Birds</span>",
        "image" => "assets/images/wildlife/sariska.avif",
        "duration" => "7 Days",
        "type" => "Wildlife Circuit",
        "icon" => "trees",
        "link" => "tourPackageDetail.php?tour=delhi-to-sariska-wildlife-tour-packages",
        "is_featured" => false
    ],

    // =========================================================
    // 5 WEEKEND TOURS (From tourDataWeekend.txt)
    // =========================================================
    [
        "id" => 49,
        "title" => "Delhi To Shimla Manali Weekend Tour",
        "category" => "weekend himachal",
        "tag" => "HIMACHAL WEEKEND",
        "subtitle" => "Shimla <span class=\"text-orange-500 font-bold\">• Kullu • Manali • Kufri</span>",
        "image" => "assets/images/himachal/shimla.avif",
        "duration" => "8 Days",
        "type" => "Hills & Valley Tour",
        "icon" => "mountain",
        "link" => "tourPackageDetail.php?tour=delhi-to-shimla-manali-weekend-tour",
        "is_featured" => false
    ],
    [
        "id" => 50,
        "title" => "Delhi Nainital Kausani Almora Ranikhet Tour",
        "category" => "weekend uttarakhand",
        "tag" => "KUMAON LAKES & PEAKS",
        "subtitle" => "Nainital Lake <span class=\"text-orange-500 font-bold\">• Kausani • Almora • Ranikhet</span>",
        "image" => "assets/images/uttrakhand/nainital.avif",
        "duration" => "6 Days",
        "type" => "Lake District Retreat",
        "icon" => "mountain",
        "link" => "tourPackageDetail.php?tour=delhi-nainital-kausani-almora-ranikhet-tour",
        "is_featured" => false
    ],
    [
        "id" => 51,
        "title" => "Delhi To Jim Corbett Wildlife Tour Car",
        "category" => "weekend wildlife uttarakhand",
        "tag" => "CORBETT TIGER SAFARI",
        "subtitle" => "Corbett Tiger Reserve <span class=\"text-orange-500 font-bold\">• 4x4 Jeep Safari • Ramganga</span>",
        "image" => "assets/images/wildlife/jim-corbett.avif",
        "duration" => "3 Days",
        "type" => "Wildlife Safari",
        "icon" => "trees",
        "link" => "tourPackageDetail.php?tour=delhi-to-jim-corbett-wildlife-tour-car",
        "is_featured" => false
    ],
    [
        "id" => 52,
        "title" => "Delhi To Jaipur Weekend Tour",
        "category" => "weekend rajasthan",
        "tag" => "ROYAL PINK CITY",
        "subtitle" => "Amer Fort <span class=\"text-orange-500 font-bold\">• City Palace • Hawa Mahal</span>",
        "image" => "assets/images/rajasthan/jaipur.avif",
        "duration" => "3 Days",
        "type" => "Royal Heritage Tour",
        "icon" => "car",
        "link" => "tourPackageDetail.php?tour=delhi-to-jaipur-weekend-tour",
        "is_featured" => false
    ],
    [
        "id" => 53,
        "title" => "Delhi To Mussoorie Weekend Tour Packages",
        "category" => "weekend uttarakhand",
        "tag" => "QUEEN OF HILLS",
        "subtitle" => "Mussoorie <span class=\"text-orange-500 font-bold\">• Kempty Falls • Gun Hill • Camel\'s Back</span>",
        "image" => "assets/images/uttrakhand/mussoorie.avif",
        "duration" => "3 Days",
        "type" => "Hill Getaway",
        "icon" => "mountain",
        "link" => "tourPackageDetail.php?tour=delhi-to-mussoorie-weekend-tour-packages",
        "is_featured" => false
    ],
    [
        "id" => 54,
        "title" => "Delhi Weekend Tour Packages",
        "category" => "weekend",
        "tag" => "WEEKEND GETAWAYS",
        "subtitle" => "Shimla <span class=\"text-orange-500 font-bold\">• Corbett • Jaipur • Mussoorie • Nainital</span>",
        "image" => "assets/images/uttrakhand/mussoorie.avif",
        "duration" => "2–8 Days",
        "type" => "Flexible Weekend Escapes",
        "icon" => "car",
        "link" => "tourPackageDetail.php?tour=weekend-tour",
        "is_featured" => false
    ]
];
?>
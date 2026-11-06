<?php
/**
 * Navigation Data for Header & Mobile Navigation
 * File: data/navigationData.php
 * Synchronized with Taj Mahal Tour & North India Website Routes.
 */

// Tour Packages Navigation Menu
$tourNavMenu = [
    [
        'title' => 'Same Day Tour',
        'link'  => 'tourPackage.php?category=same-day#featured-tours',
        'sub' => [
            ['name' => 'Agra Taj Mahal Same Day Tour', 'link' => 'tourPackage.php?category=uttar-pradesh#featured-tours'],
            ['name' => 'Delhi Sightseeing Same Day Tour', 'link' => 'tourPackage.php?category=delhi#featured-tours'],
            ['name' => 'Mathura Vrindavan Same Day Tour', 'link' => 'tourPackage.php?category=uttar-pradesh#featured-tours'],
            ['name' => 'Jaipur Pink City Same Day Tour', 'link' => 'tourPackage.php?category=rajasthan#featured-tours'],
            ['name' => 'Haridwar Rishikesh Same Day Tour', 'link' => 'tourPackage.php?category=uttarakhand#featured-tours']
        ]
    ],
    [
        'title' => 'Golden Triangle Tour',
        'link'  => 'tourPackage.php?category=all#featured-tours',
        'sub' => [
            ['name' => 'Delhi Agra Jaipur Tour (4 Days)', 'link' => 'tourPackage.php?category=rajasthan#featured-tours'],
            ['name' => 'Golden Triangle with Amritsar (7 Days)', 'link' => 'tourPackage.php?category=punjab#featured-tours'],
            ['name' => 'Golden Triangle with Haridwar Rishikesh (8 Days)', 'link' => 'tourPackage.php?category=uttarakhand#featured-tours'],
            ['name' => 'Golden Triangle with Orchha Khajuraho Varanasi', 'link' => 'tourPackage.php?category=spiritual#featured-tours'],
            ['name' => 'Golden Triangle with Ranthambhore Safari (9 Days)', 'link' => 'tourPackage.php?category=wildlife#featured-tours']
        ]
    ],
    [
        'title' => 'Rajasthan Tour',
        'link'  => 'tourPackage.php?category=rajasthan#featured-tours',
        'sub' => [
            ['name' => '20-Day Rajasthan Heritage Tour', 'link' => 'tourPackage.php?category=rajasthan#featured-tours'],
            ['name' => 'Royal Rajasthan Tour (16 Days)', 'link' => 'tourPackage.php?category=rajasthan#featured-tours'],
            ['name' => 'Rajasthan Forts & Palaces (13 Days)', 'link' => 'tourPackage.php?category=rajasthan#featured-tours'],
            ['name' => 'Rajasthan Camel Safari (14 Days)', 'link' => 'tourPackage.php?category=rajasthan#featured-tours'],
            ['name' => 'Rajasthan Culture Tour (16 Days)', 'link' => 'tourPackage.php?category=rajasthan#featured-tours']
        ]
    ],
    [
        'title' => 'Himachal Tour',
        'link'  => 'tourPackage.php?category=himachal#featured-tours',
        'sub' => [
            ['name' => 'Delhi To Shimla Weekend Tour', 'link' => 'tourPackage.php?category=himachal#featured-tours'],
            ['name' => 'Himachal Holidays Hill Station Tour', 'link' => 'tourPackage.php?category=himachal#featured-tours'],
            ['name' => 'Shimla Manali Dharamshala Chandigarh Tour', 'link' => 'tourPackage.php?category=himachal#featured-tours'],
            ['name' => 'Hillstation Himachal Adventure Tour', 'link' => 'tourPackage.php?category=himachal#featured-tours'],
            ['name' => 'Hillstation Honeymoon Tour Packages', 'link' => 'tourPackage.php?category=himachal#featured-tours']
        ]
    ],
    [
        'title' => 'Uttarakhand Tour',
        'link'  => 'tourPackage.php?category=uttarakhand#featured-tours',
        'sub' => [
            ['name' => 'Haridwar Rishikesh 3 Days Tour', 'link' => 'tourPackage.php?category=uttarakhand#featured-tours'],
            ['name' => 'Mussoorie Dehradun Weekend Tour', 'link' => 'tourPackage.php?category=uttarakhand#featured-tours'],
            ['name' => 'Nainital Corbett National Park Tour', 'link' => 'tourPackage.php?category=uttarakhand#featured-tours'],
            ['name' => 'Auli Chopta Winter Adventure', 'link' => 'tourPackage.php?category=uttarakhand#featured-tours'],
            ['name' => 'Char Dham Yatra Tour Package', 'link' => 'tourPackage.php?category=spiritual#featured-tours']
        ]
    ],
    [
        'title' => 'Punjab Tour',
        'link'  => 'tourPackage.php?category=punjab#featured-tours',
        'sub' => [
            ['name' => 'Amritsar Golden Temple 2 Days', 'link' => 'tourPackage.php?category=punjab#featured-tours'],
            ['name' => 'Amritsar Wagah Border Tour', 'link' => 'tourPackage.php?category=punjab#featured-tours'],
            ['name' => 'Chandigarh City Tour', 'link' => 'tourPackage.php?category=punjab#featured-tours'],
            ['name' => 'Anandpur Sahib Spiritual Tour', 'link' => 'tourPackage.php?category=punjab#featured-tours'],
            ['name' => 'Complete Punjab Heritage Tour', 'link' => 'tourPackage.php?category=punjab#featured-tours']
        ]
    ],
    [
        'title' => 'Uttar Pradesh Tour',
        'link'  => 'tourPackage.php?category=uttar-pradesh#featured-tours',
        'sub' => [
            ['name' => 'Agra Mathura Vrindavan 3 Days', 'link' => 'tourPackage.php?category=uttar-pradesh#featured-tours'],
            ['name' => 'Varanasi Kashi Vishwanath Tour', 'link' => 'tourPackage.php?category=spiritual#featured-tours'],
            ['name' => 'Ayodhya Ram Mandir Darshan', 'link' => 'tourPackage.php?category=spiritual#featured-tours'],
            ['name' => 'Prayagraj Sangam & Varanasi', 'link' => 'tourPackage.php?category=spiritual#featured-tours'],
            ['name' => 'Lucknow Heritage & Food Tour', 'link' => 'tourPackage.php?category=uttar-pradesh#featured-tours']
        ]
    ],
    [
        'title' => 'Gujarat Tour',
        'link'  => 'tourPackage.php?category=gujarat#featured-tours',
        'sub' => [
            ['name' => 'Dwarka Somnath Spiritual Tour', 'link' => 'tourPackage.php?category=gujarat#featured-tours'],
            ['name' => 'Rann of Kutch White Desert Tour', 'link' => 'tourPackage.php?category=gujarat#featured-tours'],
            ['name' => 'Gir National Park Wildlife Safari', 'link' => 'tourPackage.php?category=wildlife#featured-tours'],
            ['name' => 'Statue of Unity & Ahmedabad Tour', 'link' => 'tourPackage.php?category=gujarat#featured-tours'],
            ['name' => 'Complete Gujarat Heritage 7 Days', 'link' => 'tourPackage.php?category=gujarat#featured-tours']
        ]
    ],
    [
        'title' => 'Nepal Tour',
        'link'  => 'tourPackage.php?category=nepal#featured-tours',
        'sub' => [
            ['name' => 'Kathmandu & Pashupatinath Tour (4 Days)', 'link' => 'tourPackage.php?category=nepal#featured-tours'],
            ['name' => 'Pokhara Phewa Lake & Mountain Tour (5 Days)', 'link' => 'tourPackage.php?category=nepal#featured-tours'],
            ['name' => 'Everest Mountain Flight Tour', 'link' => 'tourPackage.php?category=nepal#featured-tours'],
            ['name' => 'Chitwan Jungle Safari & Pokhara Tour', 'link' => 'tourPackage.php?category=wildlife#featured-tours'],
            ['name' => 'Complete Nepal Odyssey 7 Days', 'link' => 'tourPackage.php?category=nepal#featured-tours']
        ]
    ],
    [
        'title' => 'Spiritual Tour',
        'link'  => 'tourPackage.php?category=spiritual#featured-tours',
        'sub' => [
            ['name' => 'Delhi To Char Dham Yatra (12 Days)', 'link' => 'tourPackage.php?category=spiritual#featured-tours'],
            ['name' => 'Delhi to Amritsar Golden Temple Tour (4 Days)', 'link' => 'tourPackage.php?category=spiritual#featured-tours'],
            ['name' => 'Delhi To Agra Jaipur Ajmer Pushkar Tour (9 Days)', 'link' => 'tourPackage.php?category=spiritual#featured-tours'],
            ['name' => 'Delhi To Agra Jaipur Pushkar Tour (6 Days)', 'link' => 'tourPackage.php?category=spiritual#featured-tours'],
            ['name' => 'Delhi to Haridwar Rishikesh Mussoorie Tour (7 Days)', 'link' => 'tourPackage.php?category=spiritual#featured-tours']
        ]
    ],
    [
        'title' => 'Wildlife Tour',
        'link'  => 'tourPackage.php?category=wildlife#featured-tours',
        'sub' => [
            ['name' => 'Delhi To Bharatpur Bird Sanctuary Tour (6 Days)', 'link' => 'tourPackage.php?category=wildlife#featured-tours'],
            ['name' => 'Delhi to Corbett Wildlife Tour Packages (4 Days)', 'link' => 'tourPackage.php?category=wildlife#featured-tours'],
            ['name' => 'Delhi to Ranthambhore Wildlife Tour (13 Days)', 'link' => 'tourPackage.php?category=wildlife#featured-tours'],
            ['name' => 'Delhi To Sariska Wildlife Tour Packages (7 Days)', 'link' => 'tourPackage.php?category=wildlife#featured-tours']
        ]
    ],
    [
        'title' => 'Weekend Tour',
        'link'  => 'tourPackage.php?category=weekend#featured-tours',
        'sub' => [
            ['name' => 'Delhi To Shimla Manali Weekend Tour (8 Days)', 'link' => 'tourPackage.php?category=weekend#featured-tours'],
            ['name' => 'Delhi Nainital Kausani Almora Ranikhet Tour (6 Days)', 'link' => 'tourPackage.php?category=weekend#featured-tours'],
            ['name' => 'Delhi To Jim Corbett Wildlife Tour (3 Days)', 'link' => 'tourPackage.php?category=weekend#featured-tours'],
            ['name' => 'Delhi To Jaipur Weekend Tour (3 Days)', 'link' => 'tourPackage.php?category=weekend#featured-tours'],
            ['name' => 'Delhi To Mussoorie Weekend Tour (3 Days)', 'link' => 'tourPackage.php?category=weekend#featured-tours']
        ]
    ]
];

// Car Rental Navigation Menu
$carNavMenu = [
    [
        'title' => 'Car Rental',
        'link'  => 'carRentalLocation.php',
        'sub' => [
            ['name' => 'Car Rental In Delhi NCR', 'link' => 'carRentalLocation.php?city=delhi-ncr'],
            ['name' => 'Car Rental In Delhi', 'link' => 'carRentalLocation.php?city=delhi'],
            ['name' => 'Car Rental In Gurgaon', 'link' => 'carRentalLocation.php?city=gurgaon'],
            ['name' => 'Car Rental In Noida', 'link' => 'carRentalLocation.php?city=noida'],
            ['name' => 'Car Rental In Greater Noida', 'link' => 'carRentalLocation.php?city=noida'],
            ['name' => 'Car Rental In Ghaziabad', 'link' => 'carRentalLocation.php?city=delhi-ncr'],
            ['name' => 'Car Rental In Faridabad', 'link' => 'carRentalLocation.php?city=delhi-ncr'],
            ['name' => 'Car Rental In Agra & Taj Mahal', 'link' => 'carRentalLocation.php?city=agra'],
            ['name' => 'Car Rental In Jaipur', 'link' => 'carRentalLocation.php?city=jaipur'],
            ['name' => 'Car Rental In Chandigarh', 'link' => 'carRentalLocation.php?city=chandigarh']
        ]
    ],
    [
        'title' => 'Airport Service',
        'link'  => 'carRentalLocation.php?city=delhi-ncr#booking',
        'sub' => [
            ['name' => 'Indira Gandhi International Airport (IGI)', 'link' => 'carRentalLocation.php?city=delhi-ncr#booking'],
            ['name' => 'Noida International Airport (Jewar)', 'link' => 'carRentalLocation.php?city=noida#booking'],
            ['name' => 'Jaipur International Airport (JAI)', 'link' => 'carRentalLocation.php?city=jaipur#booking']
        ]
    ],
    [
        'title' => 'Outstation Cab',
        'link'  => 'carRentalLocation.php#outstation-car-rental'
    ]
];

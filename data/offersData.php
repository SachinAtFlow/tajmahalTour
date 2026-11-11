<?php
/**
 * Top Header Announcement & Offers Bar Data
 * File: data/offersData.php
 * Synchronized with Taj Mahal Tour & North India Tour Routes.
 */

if (!function_exists('getHeaderOffers')) {
    function getHeaderOffers() {
        return [
            [
                'badge'     => 'SPECIAL OFFER',
                'highlight' => 'Flat 15% OFF',
                'text'      => 'on Royal Rajasthan Tour (16 Days)',
                'link'      => 'rajasthantour/specificTourTemplate.php?tour=royal-rajasthan-tour-16-days',
                'btn'       => 'View Details'
            ],
            [
                'badge'     => 'POPULAR TOUR',
                'highlight' => 'Special 10% OFF',
                'text'      => 'on Golden Triangle with Amritsar (7 Days)',
                'link'      => 'goldentriangletour/specificTourTemplate.php?tour=golden-triangle-with-amritsar-7-days',
                'btn'       => 'View Details'
            ],
            [
                'badge'     => 'EXCLUSIVE DEAL',
                'highlight' => 'Save 20%',
                'text'      => 'on Rajasthan Cultural Heritage Tour (16 Days)',
                'link'      => 'rajasthantour/specificTourTemplate.php?tour=rajasthan-culture-tour-16-days',
                'btn'       => 'View Details'
            ],
            [
                'badge'     => 'WEEKEND ESCAPE',
                'highlight' => 'Instant Discount',
                'text'      => 'on Mussoorie & Dehradun Weekend Tour',
                'link'      => 'uttarakhandtour/specificTourTemplate.php?tour=mussoorie-dehradun-weekend-tour',
                'btn'       => 'Explore Tour'
            ],
            [
                'badge'     => 'SPIRITUAL SPECIAL',
                'highlight' => 'All-Inclusive Cab Deal',
                'text'      => 'on Haridwar & Rishikesh 3 Days Journey',
                'link'      => 'uttarakhandtour/specificTourTemplate.php?tour=haridwar-rishikesh-3-days-tour',
                'btn'       => 'Explore Tour'
            ],
            [
                'badge'     => 'PILGRIMAGE SPECIAL',
                'highlight' => 'Early Bird 10% OFF',
                'text'      => 'on Sacred Char Dham Yatra Tour Package',
                'link'      => 'uttarakhandtour/specificTourTemplate.php?tour=char-dham-yatra-tour-package',
                'btn'       => 'Explore Tour'
            ],
            [
                'badge'     => 'AGRA TOUR DEAL',
                'highlight' => 'Save Flat 15%',
                'text'      => 'on Agra, Mathura & Vrindavan 3 Days Tour',
                'link'      => 'uttarpradeshtour/specificTourTemplate.php?tour=agra-mathura-vrindavan-3-days',
                'btn'       => 'Explore Tour'
            ],
            [
                'badge'     => 'HILL STATION DEAL',
                'highlight' => 'Weekend Package Deal',
                'text'      => 'on Delhi to Shimla Weekend Tour',
                'link'      => 'himachaltour/specificTourTemplate.php?tour=delhi-to-shimla-weekend-tour',
                'btn'       => 'Explore Tour'
            ],
            [
                'badge'     => 'NEPAL HOLIDAY',
                'highlight' => 'Best Price Guaranteed',
                'text'      => 'on Kathmandu Pashupatinath Tour (4 Days)',
                'link'      => 'nepaltour/specificTourTemplate.php?tour=kathmandu-pashupatinath-tour-4-days',
                'btn'       => 'Explore Tour'
            ],
            [
                'badge'     => 'GOLDEN TRIANGLE',
                'highlight' => 'Top Rated Package',
                'text'      => 'on Delhi Agra Jaipur Tour (4 Days)',
                'link'      => 'goldentriangletour/specificTourTemplate.php?tour=delhi-agra-jaipur-tour-4-days',
                'btn'       => 'View Details'
            ]
        ];
    }
}

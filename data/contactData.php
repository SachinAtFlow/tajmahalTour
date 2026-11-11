<?php
/**
 * Master Contact & Social Media Configuration
 * File: data/contactData.php
 * 
 * Centralized repository for all site contact numbers, WhatsApp lines,
 * official emails, physical office addresses, and social media channels.
 * Sourced globally across headers, footers, sidebars, and booking widgets.
 */

if (!function_exists('getSiteContact')) {
    function getSiteContact($key = null, $subKey = null) {
        static $siteContact = [
            // Brand & Entity
            'brand_name'      => 'Taj Mahal Tour',
            'legal_entity'    => 'Taj Mahal Tour & Travels India',
            'website_url'     => 'https://www.tajmahaltour.com',

            // Calling Phone Numbers
            'phone' => [
                'call'         => '+918800722606',
                'raw'          => '+918800722606',
                'display'      => '+91 88007 22606',
                'tel_link'     => 'tel:+918800722606',
                'whatsapp'     => '+919810723370',
                'alternate'    => '+91-9871777590',
                'alt_display'  => '+91 98717 77590',
                'alt_tel'      => 'tel:+919871777590',
                'toll_free'    => '+91 88007 22606'
            ],

            // WhatsApp Direct Lines
            'whatsapp' => [
                'raw'         => '919810723370',
                'display'     => '+91 98107 23370',
                'number'      => '+91 98107 23370',
                'default_msg' => 'Hello Taj Mahal Tour, I would like to inquire about your tour packages and cab booking services.',
                'link'        => 'https://wa.me/919810723370?text=Hello%20Taj%20Mahal%20Tour,%20I%20would%20like%20to%20inquire%20about%20your%20tour%20packages%20and%20cab%20booking%20services.'
            ],

            // Official Emails      
            'email' => [
                'primary'     => 'uniqueholidaytrip@gmail.com',
                'booking'     => 'uniqueholidaytrip@gmail.com',
                'support'     => 'uniqueholidaytrip@gmail.com',
                'privacy'     => 'uniqueholidaytrip@gmail.com',
                'mailto'      => 'mailto:uniqueholidaytrip@gmail.com'
            ],

            // Physical Office Addresses
            'address' => [
                'delhi' => [
                    'title'    => 'Agra Head Office',
                    'subtitle' => 'Monument & Tour Operations',
                    'line1'    => 'Krishna Nagar, New Delhi - 110051',
                    'line2'    => 'Delhi, India',
                    'full'     => 'Krishna Nagar, New Delhi - 110051, Delhi, India',
                    'map_link' => 'https://maps.app.goo.gl/pRwZnKFnjWYEqPZj8'
                ],
                'agra' => [
                    'title'    => 'Agra Head Office',
                    'subtitle' => 'Monument & Tour Operations',
                    'line1'    => 'Krishna Nagar, New Delhi - 110051',
                    'line2'    => 'Delhi, India',
                    'full'     => 'Krishna Nagar, New Delhi - 110051, Delhi, India',
                    'map_link' => 'https://maps.app.goo.gl/pRwZnKFnjWYEqPZj8'
                ],
            ],

            // Social Media Profiles
            'social' => [
                'youtube'   => 'https://www.youtube.com/@AshuSharmauniqueholidaytrip',
                'x'         => 'http://twitter.com/uniquetrip2012',
                'twitter'   => 'http://twitter.com/uniquetrip2012',
                'facebook'  => 'https://www.facebook.com/tajmahal.tour.agra.delhi.car.hire.taxi.rental/',
                'linkedin'  => 'https://www.linkedin.com/in/delhi-outsation-car-hire-taxi-rental-service/',
                'instagram' => 'https://www.facebook.com/tajmahal.tour.agra.delhi.car.hire.taxi.rental/'
            ],

            // Hours & Operations
            'hours' => [
                'support'   => '24x7 Dedicated Support',
                'office'    => 'Mon - Sun: 06:00 AM - 10:00 PM (IST)'
            ]
        ];

        if ($key === null) {
            return $siteContact;
        }

        if ($subKey !== null && isset($siteContact[$key][$subKey])) {
            return $siteContact[$key][$subKey];
        }

        return $siteContact[$key] ?? null;
    }
}

// Global convenience access variable
$siteContact = getSiteContact();

// Helper Functions for template use
if (!function_exists('site_phone')) {
    function site_phone($display = true) {
        $contact = getSiteContact('phone');
        if ($display === 'alt') {
            return $contact['alternate'] ?? ($contact['alt_display'] ?? '+91-9871777590');
        }
        if ($display === 'alt_link') {
            return $contact['alt_tel'] ?? 'tel:+919871777590';
        }
        if ($display) {
            return $contact['display'] ?? ($contact['call'] ?? '+91 88007 22606');
        }
        return $contact['tel_link'] ?? ('tel:' . ($contact['call'] ?? '+918800722606'));
    }
}

if (!function_exists('site_whatsapp')) {
    function site_whatsapp($display = true) {
        $contact = getSiteContact('whatsapp');
        if ($display) {
            return $contact['display'] ?? '+91 98107 23370';
        }
        return $contact['link'] ?? 'https://wa.me/919810723370';
    }
}

if (!function_exists('site_whatsapp_link')) {
    function site_whatsapp_link($customText = '') {
        $raw = getSiteContact('whatsapp', 'raw') ?: '919810723370';
        if (!empty($customText)) {
            return 'https://wa.me/' . $raw . '?text=' . urlencode($customText);
        }
        return getSiteContact('whatsapp', 'link') ?: ('https://wa.me/' . $raw);
    }
}

if (!function_exists('site_email')) {
    function site_email($type = 'primary', $asMailto = false) {
        $emails = getSiteContact('email');
        $addr = is_array($emails) ? ($emails[$type] ?? ($emails['primary'] ?? 'uniqueholidaytrip@gmail.com')) : 'uniqueholidaytrip@gmail.com';
        return $asMailto ? ('mailto:' . $addr) : $addr;
    }
}

if (!function_exists('site_social')) {
    function site_social($platform = 'facebook') {
        $socials = getSiteContact('social');
        $link = $socials[strtolower($platform)] ?? '#';
        if ($link !== '#' && !preg_match('~^https?://~i', $link)) {
            $link = 'https://' . ltrim($link, '/');
        }
        return $link;
    }
}

if (!function_exists('site_address')) {
    function site_address($branch = 'delhi', $field = 'full') {
        $address = getSiteContact('address', $branch);
        if (!$address) {
            $address = getSiteContact('address', 'delhi') ?? getSiteContact('address', 'agra');
        }
        return $address[$field] ?? ($address['full'] ?? 'Krishna Nagar, New Delhi - 110051, Delhi, India');
    }
}

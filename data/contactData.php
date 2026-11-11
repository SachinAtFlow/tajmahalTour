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
                'raw'         => '+918800722606',
                'display'     => '+91 88007 22606',
                'tel_link'    => 'tel:+918800722606',
                'alt_raw'     => '+919876543210',
                'alt_display' => '+91 98765 43210',
                'alt_tel'     => 'tel:+919876543210',
                'toll_free'   => '1800 123 4567'
            ],

            // WhatsApp Direct Lines
            'whatsapp' => [
                'raw'         => '918800722606',
                'display'     => '+91 88007 22606',
                'number'      => '+91 88007 22606',
                'default_msg' => 'Hello Taj Mahal Tour, I would like to inquire about your tour packages and cab booking services.',
                'link'        => 'https://wa.me/918800722606?text=Hello%20Taj%20Mahal%20Tour,%20I%20would%20like%20to%20inquire%20about%20your%20tour%20packages%20and%20cab%20booking%20services.'
            ],

            // Official Emails      
            'email' => [
                'primary'     => 'info@tajmahaltour.com',
                'booking'     => 'booking@tajmahaltour.com',
                'support'     => 'support@tajmahaltour.com',
                'privacy'     => 'privacy@tajmahaltour.com',
                'mailto'      => 'mailto:info@tajmahaltour.com'
            ],

            // Physical Office Addresses
            'address' => [
                'agra' => [
                    'title'    => 'Agra Head Office',
                    'subtitle' => 'Monument & Tour Operations',
                    'line1'    => 'Fatehabad Road, Near Taj East Gate',
                    'line2'    => 'Agra, Uttar Pradesh - 282001',
                    'full'     => 'Fatehabad Road, Near Taj East Gate, Agra, UP 282001, India',
                    'map_link' => 'https://maps.google.com/?q=Taj+Mahal+Agra'
                ],
                'delhi' => [
                    'title'    => 'Delhi NCR Branch',
                    'subtitle' => 'Fleet & Chauffeur Hub',
                    'line1'    => 'Krishna Nagar, East Delhi',
                    'line2'    => 'New Delhi - 110051, India',
                    'full'     => 'Krishna Nagar, East Delhi, New Delhi - 110051, India',
                    'map_link' => 'https://maps.google.com/?q=Krishna+Nagar+Delhi'
                ]
            ],

            // Social Media Profiles
            'social' => [
                'youtube'   => 'https://www.youtube.com/@tajmahaltour',
                'x'         => 'https://x.com/tajmahaltour',
                'twitter'   => 'https://x.com/tajmahaltour',
                'facebook'  => 'https://www.facebook.com/tajmahaltour',
                'linkedin'  => 'https://www.linkedin.com/company/tajmahaltour',
                'instagram' => 'https://www.instagram.com/tajmahaltour'
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
        return $display ? ($contact['display'] ?? '') : ($contact['tel_link'] ?? '');
    }
}

if (!function_exists('site_whatsapp')) {
    function site_whatsapp($display = true) {
        $contact = getSiteContact('whatsapp');
        return $display ? ($contact['display'] ?? '') : ($contact['link'] ?? '');
    }
}

if (!function_exists('site_whatsapp_link')) {
    function site_whatsapp_link($customText = '') {
        $raw = getSiteContact('whatsapp', 'raw') ?: '918800722606';
        if (!empty($customText)) {
            return 'https://wa.me/' . $raw . '?text=' . urlencode($customText);
        }
        return getSiteContact('whatsapp', 'link');
    }
}

if (!function_exists('site_email')) {
    function site_email($type = 'primary', $asMailto = false) {
        $emails = getSiteContact('email');
        $addr = $emails[$type] ?? ($emails['primary'] ?? 'info@tajmahaltour.com');
        return $asMailto ? ('mailto:' . $addr) : $addr;
    }
}

if (!function_exists('site_social')) {
    function site_social($platform = 'facebook') {
        $socials = getSiteContact('social');
        return $socials[strtolower($platform)] ?? '#';
    }
}


/**
 * Global Site Configuration & Constants
 * File: assets/js/config.js
 * 
 * Strict rule: Configuration & constants only. No event listeners or DOM manipulation.
 */

window.APP_CONFIG = Object.freeze({
    appName: 'Taj Mahal Tour',
    apiBaseUrl: window.location.origin + '/tajmahalTour/api/',
    defaultCurrency: 'INR',
    currencySymbol: '₹',
    phone: {
        raw: '+918800722606',
        display: '+91 88007 22606',
        altDisplay: '+91 98765 43210'
    },
    whatsapp: {
        raw: '918800722606',
        display: '+91 88007 22606',
        link: 'https://wa.me/918800722606'
    },
    email: {
        primary: 'info@tajmahaltour.com',
        booking: 'booking@tajmahaltour.com'
    },
    social: {
        youtube: 'https://www.youtube.com/@tajmahaltour',
        x: 'https://x.com/tajmahaltour',
        twitter: 'https://x.com/tajmahaltour',
        facebook: 'https://www.facebook.com/tajmahaltour',
        linkedin: 'https://www.linkedin.com/company/tajmahaltour',
        instagram: 'https://www.instagram.com/tajmahaltour'
    },
    supportPhone: '+91 88007 22606',
    supportEmail: 'info@tajmahaltour.com',
    swiperDefaults: {
        autoplayDelay: 4500,
        speed: 700
    }
});


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
    supportPhone: '+91 999 656 888',
    supportEmail: 'travelerwp@gmail.com',
    swiperDefaults: {
        autoplayDelay: 4500,
        speed: 700
    }
});


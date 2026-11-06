/**
 * Global Utility & Helper Functions
 * File: assets/js/utils.js
 * 
 * Reusable modular helpers across pages and components.
 */

window.AppUtils = {
    /**
     * Query selector helper
     */
    $: function(selector, context = document) {
        return context.querySelector(selector);
    },

    /**
     * Query selector all helper
     */
    $$: function(selector, context = document) {
        return Array.from(context.querySelectorAll(selector));
    },

    /**
     * Format currency in Indian numbering (e.g. ₹14,500)
     */
    formatCurrency: function(amount, symbol = '₹') {
        const num = parseFloat(amount);
        if (isNaN(num)) return amount;
        return symbol + num.toLocaleString('en-IN');
    },

    /**
     * Safe callback runner after DOM ready
     */
    onReady: function(fn) {
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', fn);
        } else {
            fn();
        }
    },

    /**
     * Wait for global variable (e.g. Swiper) before executing callback
     */
    waitForGlobal: function(varName, callback, maxRetries = 30, interval = 100) {
        let retries = 0;
        function check() {
            if (typeof window[varName] !== 'undefined') {
                callback(window[varName]);
            } else if (retries < maxRetries) {
                retries++;
                setTimeout(check, interval);
            }
        }
        check();
    }
};


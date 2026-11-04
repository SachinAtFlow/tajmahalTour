/**
 * Testimonial Component Swiper Initialization
 * File: assets/js/components/testimonial.js
 */

document.addEventListener('DOMContentLoaded', () => {
    const testimonialEl = document.querySelector('.testimonial-swiper');
    if (!testimonialEl || typeof Swiper === 'undefined') {
        return;
    }

    const testimonialSwiper = new Swiper(testimonialEl, {
        effect: 'fade',
        fadeEffect: {
            crossFade: true
        },
        loop: true,
        speed: 700,
        autoplay: {
            delay: 4500,
            disableOnInteraction: false,
            pauseOnMouseEnter: true
        },
        pagination: {
            el: '.testimonial-pagination',
            clickable: true
        },
        navigation: {
            nextEl: '.testimonial-btn-next',
            prevEl: '.testimonial-btn-prev'
        }
    });
});


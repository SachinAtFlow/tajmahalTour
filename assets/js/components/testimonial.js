/**
 * Testimonial Component Swiper Controller
 * File: assets/js/components/testimonial.js
 * 
 * High-performance, bulletproof Swiper initialization with:
 * - Dynamic retry if Swiper CDN is still loading
 * - Prev/Next button event delegation (works regardless of active slide)
 * - Custom synchronized bullet pagination across slides
 * - Smooth fade transitions and hover pause
 */

(function () {
    'use strict';

    function initTestimonialSwiper() {
        const testimonialEl = document.querySelector('.testimonial-swiper');
        if (!testimonialEl) return;

        // If Swiper CDN hasn't loaded yet, retry in 100ms (up to 30 times)
        if (typeof Swiper === 'undefined') {
            if (!window._testimonialRetryCount) window._testimonialRetryCount = 0;
            if (window._testimonialRetryCount < 30) {
                window._testimonialRetryCount++;
                setTimeout(initTestimonialSwiper, 100);
            }
            return;
        }

        // Prevent double initialization
        if (testimonialEl.swiper) return;

        // Synchronize all pagination bullet elements across slides
        function syncBullets(realIndex) {
            testimonialEl.querySelectorAll('.testimonial-pagination').forEach(pagContainer => {
                const bullets = pagContainer.querySelectorAll('.swiper-pagination-bullet');
                bullets.forEach((bullet, idx) => {
                    if (idx === realIndex) {
                        bullet.classList.add('swiper-pagination-bullet-active');
                        bullet.setAttribute('aria-selected', 'true');
                    } else {
                        bullet.classList.remove('swiper-pagination-bullet-active');
                        bullet.setAttribute('aria-selected', 'false');
                    }
                });
            });
        }

        // Initialize Swiper with smooth crossfade
        const swiper = new Swiper(testimonialEl, {
            effect: 'fade',
            fadeEffect: {
                crossFade: true
            },
            loop: true,
            speed: 650,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
                pauseOnMouseEnter: true
            },
            on: {
                init: function () {
                    syncBullets(this.realIndex);
                },
                slideChange: function () {
                    syncBullets(this.realIndex);
                }
            }
        });

        // Event Delegation for Prev & Next Buttons (Handles all slides seamlessly)
        testimonialEl.addEventListener('click', function (e) {
            const nextBtn = e.target.closest('.testimonial-btn-next');
            if (nextBtn) {
                e.preventDefault();
                swiper.slideNext();
                return;
            }

            const prevBtn = e.target.closest('.testimonial-btn-prev');
            if (prevBtn) {
                e.preventDefault();
                swiper.slidePrev();
                return;
            }

            // Bullet Click Handler
            const bullet = e.target.closest('.swiper-pagination-bullet');
            if (bullet) {
                e.preventDefault();
                const slideIdx = parseInt(bullet.getAttribute('data-slide-index'), 10);
                if (!isNaN(slideIdx)) {
                    swiper.slideToLoop(slideIdx);
                }
            }
        });
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initTestimonialSwiper);
    } else {
        initTestimonialSwiper();
    }

    // Expose global init helper if needed
    window.initTestimonialSwiper = initTestimonialSwiper;
})();

<!-- About Us Section (Modern Card UI with Overlapping Photos, Flight Trail & Counter Animation) -->
<section class="py-5 bg-light position-relative" id="about-us">
    <div class="container py-lg-4">
        
        <!-- Main Card Wrapper Matching Reference Image Design -->
        <div class="about-custom-card p-4 p-md-5 p-lg-5">
            
            <!-- Decorative Dashed Flight Trail SVG with Paper Airplane -->
            <svg class="position-absolute top-0 start-0 w-100 h-100 pointer-events-none" viewBox="0 0 1100 520" fill="none" xmlns="http://www.w3.org/2000/svg" style="z-index: 0; pointer-events: none;" preserveAspectRatio="none">
                <!-- Smooth Dashed Arc Trail -->
                <path d="M 980,50 C 1040,170 820,300 520,340 C 260,375 110,280 50,140" stroke="#d1d5db" stroke-width="1.8" stroke-dasharray="7 7" stroke-linecap="round" fill="none" opacity="0.75" />
                <!-- Origami Paper Airplane -->
                <g transform="translate(480, 325) rotate(14)">
                    <path d="M0,0 L26,9 L5,15 L0,0 Z" fill="#94a3b8" opacity="0.9" />
                    <path d="M5,15 L26,9 L12,24 L5,15 Z" fill="#cbd5e1" />
                    <path d="M5,15 L12,24 L10,32 L5,15 Z" fill="#64748b" opacity="0.6" />
                </g>
            </svg>

            <!-- Top Grid: Content on Left, Overlapping Photos on Right -->
            <div class="row align-items-center g-4 g-lg-5 position-relative z-1">
                
                <!-- Left Column: Content -->
                <div class="col-lg-6">
                    <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-2 rounded-pill fw-semibold mb-3 d-inline-flex align-items-center gap-1">
                        <i class="bi bi-compass-fill"></i>
                        <span>ABOUT OUR COMPANY</span>
                    </span>

                    <h2 class="display-5 fw-bold text-dark mb-2">About Us</h2>

                    <p class="text-primary fw-semibold fs-5 mb-3">
                        Explore North India with Comfort & Confidence!
                    </p>

                    <p class="text-secondary mb-4 fs-6" style="line-height: 1.7;">
                        With 12+ years of travel experience, we offer comfortable premium cars, professional drivers and hassle-free journeys. From local Delhi rides to outstation trips, we make every journey safe, smooth and memorable.
                    </p>

                    <!-- Service Highlights -->
                    <div class="row g-3 mb-4">
                        <!-- Feature 1: Car Rental & Travel Services -->
                        <div class="col-12 col-md-6">
                            <div class="p-3 bg-light rounded-4 h-100 border border-light-subtle">
                                <div class="d-flex align-items-center gap-2 mb-1">
                                    <i class="bi bi-car-front-fill text-primary fs-5"></i>
                                    <h6 class="fw-bold text-dark mb-0" style="font-size: 0.95rem;">Car Rental Services</h6>
                                </div>
                                <p class="text-secondary small mb-0 lh-sm" style="font-size: 12.5px;">
                                    Enjoy hassle-free car rentals for sightseeing, airport transfers & outstation trips with expert drivers.
                                </p>
                            </div>
                        </div>

                        <!-- Feature 2: Customized Tour Packages -->
                        <div class="col-12 col-md-6">
                            <div class="p-3 bg-light rounded-4 h-100 border border-light-subtle">
                                <div class="d-flex align-items-center gap-2 mb-1">
                                    <i class="bi bi-map-fill text-primary fs-5"></i>
                                    <h6 class="fw-bold text-dark mb-0" style="font-size: 0.95rem;">Customized Tour Packages</h6>
                                </div>
                                <p class="text-secondary small mb-0 lh-sm" style="font-size: 12.5px;">
                                    Explore North India with curated Golden Triangle, Rajasthan, Himachal, wildlife & customized tour packages.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- CTA Button (Vibrant Orange Pill Matching Reference Design) -->
                    <div>
                        <a href="#booking" class="btn btn-primary d-inline-flex align-items-center gap-2">
                            <span>More about</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Right Column: Overlapping Photos Matching Reference Layout -->
                <div class="col-lg-6">
                    <div class="position-relative d-flex justify-content-center justify-content-lg-end pe-lg-3 py-3">
                        
                        <!-- Base Background Heritage Photo -->
                        <img 
                            src="assets/images/uttarPradesh/tajmahal.avif" 
                            alt="Taj Mahal Tour Agra" 
                            class="about-img-base"
                            loading="lazy"
                        >

                        <!-- Overlapping Rotated Foreground Photo -->
                        <img 
                            src="assets/images/others/driving.avif" 
                            alt="Travel Experience" 
                            class="about-img-rotated"
                            loading="lazy"
                        >

                    </div>
                </div>

            </div>

            <!-- Bottom Counter Statistics Row (3 Fields per User Request) -->
            <div class="row pt-5 mt-5 border-top border-light-subtle text-center g-4 align-items-center justify-content-around position-relative z-1">
                
                <!-- Field 1: 12+ Years Experience -->
                <div class="col-12 col-sm-4 text-center">
                    <div class="d-inline-flex align-items-baseline justify-content-center">
                        <span class="about-counter-num fw-bold text-dark" data-target="12">0</span>
                        <span class="about-counter-num fw-bold text-orange-500 ms-1">+</span>
                    </div>
                    <div class="text-secondary small fw-medium mt-1 text-uppercase" style="letter-spacing: 0.04em;">Years Experience</div>
                </div>

                <!-- Field 2: 500+ Tours Completed -->
                <div class="col-12 col-sm-4 text-center">
                    <div class="d-inline-flex align-items-baseline justify-content-center">
                        <span class="about-counter-num fw-bold text-dark" data-target="500">0</span>
                        <span class="about-counter-num fw-bold text-orange-500 ms-1">+</span>
                    </div>
                    <div class="text-secondary small fw-medium mt-1 text-uppercase" style="letter-spacing: 0.04em;">Tours Completed</div>
                </div>

                <!-- Field 3: 10+ Fleet Vehicles -->
                <div class="col-12 col-sm-4 text-center">
                    <div class="d-inline-flex align-items-baseline justify-content-center">
                        <span class="about-counter-num fw-bold text-dark" data-target="10">0</span>
                        <span class="about-counter-num fw-bold text-orange-500 ms-1">+</span>
                    </div>
                    <div class="text-secondary small fw-medium mt-1 text-uppercase" style="letter-spacing: 0.04em;">Fleet Vehicles</div>
                </div>

            </div>

        </div>

    </div>
</section>

<!-- Counter Animation Script (IntersectionObserver with Smooth Ease-Out RAF) -->
<script>
(function() {
    function initAboutCounters() {
        const counters = document.querySelectorAll('.about-counter-num[data-target]');
        const section = document.getElementById('about-us');
        if (!counters.length || !section) return;

        let animated = false;

        function runCounters() {
            if (animated) return;
            animated = true;

            const duration = 1600; // Animation duration in milliseconds

            counters.forEach(counter => {
                const target = parseInt(counter.getAttribute('data-target'), 10) || 0;
                const startTime = performance.now();

                function updateCounter(currentTime) {
                    const elapsed = currentTime - startTime;
                    const progress = Math.min(elapsed / duration, 1);
                    // Smooth Cubic Ease-Out
                    const easeOut = 1 - Math.pow(1 - progress, 3);
                    const currentVal = Math.floor(easeOut * target);

                    counter.textContent = currentVal.toLocaleString();

                    if (progress < 1) {
                        requestAnimationFrame(updateCounter);
                    } else {
                        counter.textContent = target.toLocaleString();
                    }
                }

                requestAnimationFrame(updateCounter);
            });
        }

        if ('IntersectionObserver' in window) {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        runCounters();
                        observer.disconnect();
                    }
                });
            }, { threshold: 0.2 });

            observer.observe(section);
        } else {
            runCounters();
        }
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initAboutCounters);
    } else {
        initAboutCounters();
    }
})();
</script>

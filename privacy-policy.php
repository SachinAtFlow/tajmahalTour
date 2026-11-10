<?php
/**
 * Privacy Policy Page
 * Clean, Minimalist & Modern Privacy Policy for Taj Mahal Tour.
 */
$page_title = "Privacy Policy - Taj Mahal Tour | Data Protection & Terms";
require_once 'includes/header.php';

// Site Configuration
$site_name       = "Taj Mahal Tour";
$site_url        = "www.tajmahaltour.com";
$last_updated    = "04 November 2026";
$officer_name    = "Grievance & Data Privacy Officer";
$contact_email   = "privacy@tajmahaltour.com";
$support_email   = "info@tajmahaltour.com";
$contact_phone   = "+91 98765 43210";
$company_address = "Fatehabad Road, Near Taj East Gate, Agra, Uttar Pradesh 282001, India";
?>

<main id="privacy-policy-main">

    <!-- Privacy Policy Hero Banner Section -->
    <section id="privacy-banner" class="policy-hero-banner text-center position-relative overflow-hidden">
        <div class="policy-hero-glow position-absolute rounded-circle"></div>
        <div class="container position-relative py-lg-4">
            
            <h1 class="display-5 fw-bold text-white mb-3">
                Privacy Policy
            </h1>
            <p class="text-white-50 small mb-3">
                <i class="bi bi-clock-history me-1"></i> Last Updated: <?php echo $last_updated; ?> &bull; Effective Immediately
            </p>
            <p class="text-light opacity-75 mx-auto fs-6 mb-0" style="max-width: 680px; line-height: 1.6;">
                Your trust is our utmost priority. Learn how <strong><?php echo $site_name; ?></strong> collects, safeguards, and responsibly manages your personal data across our digital platforms and travel services.
            </p>
        </div>
    </section>

    <!-- Main Content Section -->
    <section id="privacy-content" class="py-5 bg-light">
        <div class="container py-lg-3">
            <div class="row g-4 g-lg-5">

                <!-- Left Column: Sticky Table of Contents Navigation (Desktop) -->
                <div class="col-lg-4 col-xl-3 d-none d-lg-block">
                    <aside class="policy-sidebar sticky-top">
                        <div class="bg-white rounded-4 border border-light-subtle p-3 shadow-xs mb-3">
                            <h6 class="text-uppercase text-secondary fw-bold small px-3 pt-2 mb-3 tracking-wider">
                                Table of Contents
                            </h6>
                            <nav id="policy-nav" class="d-flex flex-column gap-1">
                                <a class="policy-nav-link active d-block fw-medium text-decoration-none fw-semibold" href="#overview">
                                    <i class="bi bi-info-circle me-1.5 opacity-75"></i> Overview & Scope
                                </a>
                                <a class="policy-nav-link d-block fw-medium text-decoration-none fw-semibold" href="#section-1-collection">
                                    <i class="bi bi-person-badge me-1.5 opacity-75"></i> 1. Data Collection
                                </a>
                                <a class="policy-nav-link d-block fw-medium text-decoration-none fw-semibold" href="#section-2-purpose">
                                    <i class="bi bi-bullseye me-1.5 opacity-75"></i> 2. Purpose & Usage
                                </a>
                                <a class="policy-nav-link d-block fw-medium text-decoration-none fw-semibold" href="#section-3-analytics">
                                    <i class="bi bi-bar-chart me-1.5 opacity-75"></i> 3. Non-Personal Data
                                </a>
                                <a class="policy-nav-link d-block fw-medium text-decoration-none fw-semibold" href="#section-4-sharing">
                                    <i class="bi bi-share me-1.5 opacity-75"></i> 4. Sharing & Disclosure
                                </a>
                                <a class="policy-nav-link d-block fw-medium text-decoration-none fw-semibold" href="#section-5-security">
                                    <i class="bi bi-shield-lock me-1.5 opacity-75"></i> 5. Data Security
                                </a>
                                <a class="policy-nav-link d-block fw-medium text-decoration-none fw-semibold" href="#section-6-retention">
                                    <i class="bi bi-hourglass-split me-1.5 opacity-75"></i> 6. Data Retention
                                </a>
                                <a class="policy-nav-link d-block fw-medium text-decoration-none fw-semibold" href="#section-7-rights">
                                    <i class="bi bi-check2-circle me-1.5 opacity-75"></i> 7. Your Privacy Rights
                                </a>
                                <a class="policy-nav-link d-block fw-medium text-decoration-none fw-semibold" href="#section-8-cookies">
                                    <i class="bi bi-cookie me-1.5 opacity-75"></i> 8. Cookies Policy
                                </a>
                                <a class="policy-nav-link d-block fw-medium text-decoration-none fw-semibold" href="#section-9-children">
                                    <i class="bi bi-people me-1.5 opacity-75"></i> 9. Children's Privacy
                                </a>
                                <a class="policy-nav-link d-block fw-medium text-decoration-none fw-semibold" href="#section-10-grievance">
                                    <i class="bi bi-envelope-at me-1.5 opacity-75"></i> 10. Grievance Officer
                                </a>
                            </nav>
                        </div>

                        <!-- Quick Assistance Box -->
                        <div class="bg-white rounded-4 border border-light-subtle p-3.5 shadow-xs text-center p-3">
                            <i class="bi bi-chat-heart text-primary fs-3 mb-2 d-inline-block"></i>
                            <h6 class="fw-bold text-dark mb-1">Have Any Questions?</h6>
                            <p class="text-secondary small mb-3">Our support team is here to clarify any aspect of our privacy practices.</p>
                            <a href="https://wa.me/918800722606?text=Hello%20TajMahalTour,%20I%20have%20a%20privacy%20question." target="_blank" class="btn btn-outline-primary btn-sm rounded-pill w-100 fw-semibold d-inline-flex align-items-center justify-content-center gap-2">
                                <i class="bi bi-whatsapp"></i>
                                <span>WhatsApp Privacy Desk</span>
                            </a>
                        </div>
                    </aside>
                </div>

                <!-- Right Column: Privacy Policy Text Content -->
                <div class="col-lg-8 col-xl-9">
                    <div class="bg-white rounded-4 border border-light-subtle p-4 p-md-5 shadow-xs mb-4">

                        <!-- Overview Section -->
                        <section id="overview" class="policy-section-anchor mb-5">
                            <h2 class="h4 fw-bold text-dark mb-3 pb-2 border-bottom border-light-subtle d-flex align-items-center gap-2">
                                <i class="bi bi-info-circle text-primary"></i>
                                <span>Overview & Scope</span>
                            </h2>
                            <p class="text-secondary leading-relaxed mb-3">
                                Welcome to <strong><?php echo $site_name; ?></strong> ("We", "Us", or "Our"). We are committed to safeguarding the privacy, confidentiality, and security of travelers visiting our website (<a href="https://<?php echo $site_url; ?>" class="text-primary text-decoration-none fw-medium"><?php echo $site_url; ?></a>) and utilizing our private tour booking and chauffeur rental services across North India (including Agra, Delhi, Rajasthan, Himachal Pradesh, Uttarakhand, Punjab, and neighboring regions).
                            </p>
                            <p class="text-secondary leading-relaxed mb-3">
                                This Privacy Policy explains our practices regarding the collection, handling, storage, and protection of personal data when you book guided monument tours, rent vehicles, make inquiries, or interact with our travel desk.
                            </p>

                            <div class="p-3 p-md-4 bg-primary bg-opacity-10 border border-primary border-opacity-25 rounded-4 mb-3">
                                <h6 class="fw-bold text-dark mb-2 d-flex align-items-center gap-2">
                                    <i class="bi bi-patch-check-fill text-primary"></i>
                                    <span>Our Core Privacy Principles:</span>
                                </h6>
                                <ul class="list-unstyled mb-0 text-secondary small d-flex flex-column gap-1.5">
                                    <li><i class="bi bi-check2 text-primary me-2"></i><strong>Zero Data Selling:</strong> We never sell, rent, or lease your personal information to third-party advertisers.</li>
                                    <li><i class="bi bi-check2 text-primary me-2"></i><strong>Strict Encryption:</strong> All sensitive transactions are protected with SSL/TLS 256-bit encryption.</li>
                                    <li><i class="bi bi-check2 text-primary me-2"></i><strong>Complete Control:</strong> You have the right to inspect, update, or request the deletion of your data at any time.</li>
                                </ul>
                            </div>

                            <p class="text-muted small mb-0">
                                By accessing our platform, submitting inquiries, or booking services, you acknowledge having read and understood the provisions of this policy.
                            </p>
                        </section>

                        <!-- Section 1: Data Collection -->
                        <section id="section-1-collection" class="policy-section-anchor mb-5">
                            <h2 class="h4 fw-bold text-dark mb-3 pb-2 border-bottom border-light-subtle d-flex align-items-center gap-2">
                                <i class="bi bi-person-badge text-primary"></i>
                                <span>1. Personal Data We Collect</span>
                            </h2>
                            <p class="text-secondary leading-relaxed mb-3">
                                To confirm itineraries, coordinate pick-up locations, and deliver reliable private tour services, we collect relevant categories of personal data:
                            </p>

                            <div class="row g-3 mb-3">
                                <div class="col-md-6">
                                    <div class="p-3.5 bg-light rounded-3 border border-light-subtle h-100 p-3">
                                        <h6 class="fw-bold text-dark mb-2 d-flex align-items-center gap-1.5">
                                            <i class="bi bi-person-lines-fill text-primary"></i>
                                            <span>a. Information Provided Directly</span>
                                        </h6>
                                        <ul class="text-secondary small mb-0 ps-3 d-flex flex-column gap-1.5">
                                            <li><strong>Contact Info:</strong> Full name, email address, mobile number, and city of residence.</li>
                                            <li><strong>Itinerary Particulars:</strong> Travel dates, flight/train numbers for airport or railway transfers, and hotel pickup addresses.</li>
                                            <li><strong>Identity Proof:</strong> Government-issued ID details (Passport, Aadhaar, or Driving License) when strictly required for skip-the-line monument permits (ASI) or interstate border crossings.</li>
                                            <li><strong>Payment Details:</strong> Transaction identifiers and payment status handled exclusively via certified PCI-DSS payment gateways. We never store complete credit/debit card numbers on our servers.</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-3.5 bg-light rounded-3 border border-light-subtle h-100 p-3">
                                        <h6 class="fw-bold text-dark mb-2 d-flex align-items-center gap-1.5">
                                            <i class="bi bi-laptop text-primary"></i>
                                            <span>b. Information Collected Automatically</span>
                                        </h6>
                                        <ul class="text-secondary small mb-0 ps-3 d-flex flex-column gap-1.5">
                                            <li><strong>Technical & Device Data:</strong> IP address, browser type, operating system, language preferences, and device specifications.</li>
                                            <li><strong>Usage Metrics:</strong> Pages viewed, time spent on tour packages, search queries, and referring website links.</li>
                                            <li><strong>Operational Location Data:</strong> Live GPS location shared during active chauffeur trips solely for safety, coordination, and emergency tracking.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- Section 2: Purpose & Usage -->
                        <section id="section-2-purpose" class="policy-section-anchor mb-5">
                            <h2 class="h4 fw-bold text-dark mb-3 pb-2 border-bottom border-light-subtle d-flex align-items-center gap-2">
                                <i class="bi bi-bullseye text-primary"></i>
                                <span>2. Purpose & Legal Basis for Processing</span>
                            </h2>
                            <p class="text-secondary leading-relaxed mb-3">
                                We process your personal data exclusively for lawful, legitimate, and service-oriented purposes:
                            </p>
                            <ul class="text-secondary leading-relaxed ps-3 d-flex flex-column gap-2 mb-0">
                                <li>
                                    <strong class="text-dark">Service Execution & Fulfillment:</strong> Processing bookings, verifying payment receipts, assigning certified chauffeurs and licensed monument guides, and issuing official vouchers.
                                </li>
                                <li>
                                    <strong class="text-dark">Operational Communication:</strong> Dispatching driver details, vehicle registration numbers, pickup reminders, and itinerary updates via WhatsApp, SMS, or Email.
                                </li>
                                <li>
                                    <strong class="text-dark">Traveler Safety & Security:</strong> Verifying passenger credentials for monument ticketing authorities and maintaining chauffeur-passenger accountability.
                                </li>
                                <li>
                                    <strong class="text-dark">Customer Support:</strong> Responding promptly to itinerary customization requests, cancellation claims, or emergency queries.
                                </li>
                                <li>
                                    <strong class="text-dark">Statutory Compliance:</strong> Complying with Indian tourism regulations, state transport taxation, GST billing, and lawful law enforcement requests.
                                </li>
                            </ul>
                        </section>

                        <!-- Section 3: Non-Personal Data -->
                        <section id="section-3-analytics" class="policy-section-anchor mb-5">
                            <h2 class="h4 fw-bold text-dark mb-3 pb-2 border-bottom border-light-subtle d-flex align-items-center gap-2">
                                <i class="bi bi-bar-chart text-primary"></i>
                                <span>3. Non-Personal Information & Analytics</span>
                            </h2>
                            <p class="text-secondary leading-relaxed mb-0">
                                We may gather de-identified, statistical, or aggregated data that does not identify any individual traveler. This includes analytics on popular search routes, peak visiting hours for the Taj Mahal, and device responsiveness. We utilize this analytical data to refine our website performance, streamline booking flows, and enhance server speeds.
                            </p>
                        </section>

                        <!-- Section 4: Sharing & Disclosure -->
                        <section id="section-4-sharing" class="policy-section-anchor mb-5">
                            <h2 class="h4 fw-bold text-dark mb-3 pb-2 border-bottom border-light-subtle d-flex align-items-center gap-2">
                                <i class="bi bi-share text-primary"></i>
                                <span>4. Sharing and Disclosure of Information</span>
                            </h2>
                            <p class="text-secondary leading-relaxed mb-3">
                                <strong>We strictly maintain a zero-tolerance policy against selling customer data.</strong> Information is shared solely on a need-to-know operational basis with:
                            </p>
                            <div class="row g-3 mb-0">
                                <div class="col-md-4">
                                    <div class="p-3 bg-light rounded-3 border border-light-subtle h-100">
                                        <h6 class="fw-bold text-dark small mb-1"><i class="bi bi-car-front text-primary me-1"></i> Assigned Chauffeurs & Guides</h6>
                                        <p class="text-secondary small mb-0">Passenger name, pickup location, and contact number for seamless pickup execution.</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="p-3 bg-light rounded-3 border border-light-subtle h-100">
                                        <h6 class="fw-bold text-dark small mb-1"><i class="bi bi-credit-card text-primary me-1"></i> Payment Infrastructure</h6>
                                        <p class="text-secondary small mb-0">RBI-approved payment gateways handling end-to-end encrypted transactions.</p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="p-3 bg-light rounded-3 border border-light-subtle h-100">
                                        <h6 class="fw-bold text-dark small mb-1"><i class="bi bi-bank text-primary me-1"></i> Monument & State Authorities</h6>
                                        <p class="text-secondary small mb-0">Official Archaeological Survey of India (ASI) portals for issuing monument e-tickets.</p>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- Section 5: Data Security -->
                        <section id="section-5-security" class="policy-section-anchor mb-5">
                            <h2 class="h4 fw-bold text-dark mb-3 pb-2 border-bottom border-light-subtle d-flex align-items-center gap-2">
                                <i class="bi bi-shield-lock text-primary"></i>
                                <span>5. Information Security & Encryption</span>
                            </h2>
                            <p class="text-secondary leading-relaxed mb-3">
                                We implement multi-layered physical, administrative, and technological security controls to guard your personal information against accidental loss, unauthorized access, or disclosure:
                            </p>
                            <ul class="text-secondary small ps-3 d-flex flex-column gap-2 mb-0">
                                <li><strong>SSL/TLS 256-Bit Encryption:</strong> End-to-end cryptographic protection for all web traffic and forms submitted on our platform.</li>
                                <li><strong>Restricted Access:</strong> Strict role-based authentication allowing access solely to authorized operations executives.</li>
                                <li><strong>Secure Server Hosting:</strong> Hardened cloud servers protected with real-time DDoS mitigation and automated firewall checks.</li>
                            </ul>
                        </section>

                        <!-- Section 6: Data Retention -->
                        <section id="section-6-retention" class="policy-section-anchor mb-5">
                            <h2 class="h4 fw-bold text-dark mb-3 pb-2 border-bottom border-light-subtle d-flex align-items-center gap-2">
                                <i class="bi bi-hourglass-split text-primary"></i>
                                <span>6. Data Retention Policy</span>
                            </h2>
                            <p class="text-secondary leading-relaxed mb-0">
                                We retain personal information only for the duration required to accomplish the travel services requested, satisfy statutory taxation guidelines (e.g. GST invoice retention mandates under Indian law), and resolve potential billing disputes. When data is no longer necessary, it is securely purged or anonymized.
                            </p>
                        </section>

                        <!-- Section 7: Your Rights -->
                        <section id="section-7-rights" class="policy-section-anchor mb-5">
                            <h2 class="h4 fw-bold text-dark mb-3 pb-2 border-bottom border-light-subtle d-flex align-items-center gap-2">
                                <i class="bi bi-check2-circle text-primary"></i>
                                <span>7. Your Privacy Rights & Choices</span>
                            </h2>
                            <p class="text-secondary leading-relaxed mb-3">
                                Regardless of your location, you hold full autonomy over your personal information:
                            </p>
                            <ul class="text-secondary small ps-3 d-flex flex-column gap-2 mb-0">
                                <li><strong>Right to Access:</strong> Request a summary of the personal information stored in our reservation system.</li>
                                <li><strong>Right to Rectification:</strong> Update or amend inaccuracies in your passenger profile or contact records.</li>
                                <li><strong>Right to Erasure:</strong> Request the deletion of your personal records, subject to regulatory tax retention obligations.</li>
                                <li><strong>Marketing Opt-Out:</strong> Unsubscribe from non-essential promotional newsletters or WhatsApp broadcasts at any moment by replying "STOP".</li>
                            </ul>
                        </section>

                        <!-- Section 8: Cookies Policy -->
                        <section id="section-8-cookies" class="policy-section-anchor mb-5">
                            <h2 class="h4 fw-bold text-dark mb-3 pb-2 border-bottom border-light-subtle d-flex align-items-center gap-2">
                                <i class="bi bi-cookie text-primary"></i>
                                <span>8. Cookies & Tracking Technologies</span>
                            </h2>
                            <p class="text-secondary leading-relaxed mb-0">
                                Our website uses lightweight session cookies to maintain your active tour booking session, remember currency/language selections, and measure page load responsiveness. You can adjust your browser settings to decline cookies; however, certain booking features may function with limited efficiency.
                            </p>
                        </section>

                        <!-- Section 9: Children's Privacy -->
                        <section id="section-9-children" class="policy-section-anchor mb-5">
                            <h2 class="h4 fw-bold text-dark mb-3 pb-2 border-bottom border-light-subtle d-flex align-items-center gap-2">
                                <i class="bi bi-people text-primary"></i>
                                <span>9. Protection of Minors</span>
                            </h2>
                            <p class="text-secondary leading-relaxed mb-0">
                                Our guided tours and car rental services are intended for booking by individuals aged 18 years or older. While we warmly welcome family tours with children, any information pertaining to minors (such as monument concessions) must be submitted exclusively by a parent or legal guardian.
                            </p>
                        </section>

                        <!-- Section 10: Grievance Officer & Contact Details -->
                        <section id="section-10-grievance" class="policy-section-anchor">
                            <h2 class="h4 fw-bold text-dark mb-3 pb-2 border-bottom border-light-subtle d-flex align-items-center gap-2">
                                <i class="bi bi-envelope-at text-primary"></i>
                                <span>10. Grievance Officer & Contact Details</span>
                            </h2>
                            <p class="text-secondary leading-relaxed mb-3">
                                In accordance with the Information Technology Act, 2000 and the Digital Personal Data Protection (DPDP) Act, if you have any questions, grievances, or requests regarding this Privacy Policy, please reach out to our designated officer:
                            </p>

                            <div class="p-4 bg-light border border-light-subtle border-start border-4 border-primary rounded-end-4">
                                <h5 class="fw-bold text-dark mb-3 d-flex align-items-center gap-2">
                                    <i class="bi bi-shield-lock-fill text-primary"></i>
                                    <span><?php echo $officer_name; ?></span>
                                </h5>
                                <div class="row g-3 text-secondary small">
                                    <div class="col-sm-6">
                                        <div class="d-flex align-items-center gap-2">
                                            <i class="bi bi-envelope-fill text-primary fs-6"></i>
                                            <div>
                                                <strong class="text-dark d-block">Privacy Inquiries:</strong>
                                                <a href="mailto:<?php echo $contact_email; ?>" class="text-primary text-decoration-none"><?php echo $contact_email; ?></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="d-flex align-items-center gap-2">
                                            <i class="bi bi-headset text-primary fs-6"></i>
                                            <div>
                                                <strong class="text-dark d-block">Customer Desk:</strong>
                                                <a href="tel:<?php echo str_replace(' ', '', $contact_phone); ?>" class="text-primary text-decoration-none"><?php echo $contact_phone; ?></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-2">
                                        <div class="d-flex align-items-start gap-2">
                                            <i class="bi bi-geo-alt-fill text-primary fs-6 mt-1"></i>
                                            <div>
                                                <strong class="text-dark d-block">Registered Agra Office:</strong>
                                                <span><?php echo $company_address; ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                    </div>
                </div>

            </div>
        </div>
    </section>

</main>

<!-- Smooth Scrolling and Active Nav Link Script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const navLinks = document.querySelectorAll('.policy-nav-link');
    const sections = document.querySelectorAll('.policy-section-anchor');

    if (sections.length && navLinks.length) {
        window.addEventListener('scroll', function() {
            let current = '';
            const scrollPos = window.pageYOffset || document.documentElement.scrollTop;

            sections.forEach(function(section) {
                const sectionTop = section.offsetTop - 140;
                if (scrollPos >= sectionTop) {
                    current = section.getAttribute('id');
                }
            });

            navLinks.forEach(function(link) {
                link.classList.remove('active');
                if (link.getAttribute('href') === '#' + current) {
                    link.classList.add('active');
                }
            });
        });
    }
});
</script>

<?php require_once 'includes/footer.php'; ?>


<?php
/**
 * Terms & Conditions Page
 * Clean, Minimalist & Modern Terms and Conditions for Taj Mahal Tour.
 */
$page_title = "Terms & Conditions - Taj Mahal Tour | Booking Policies & Service Terms";
require_once 'includes/header.php';

// Site Configuration
$site_name       = "Taj Mahal Tour";
$site_url        = "www.tajmahaltour.com";
$last_updated    = "04 November 2026";
$contact_email   = "info@tajmahaltour.com";
$booking_email   = "booking@tajmahaltour.com";
$contact_phone   = "+91 98765 43210";
$whatsapp_number = "918800722606";
$company_address = "Fatehabad Road, Near Taj East Gate, Agra, Uttar Pradesh 282001, India";
?>

<main id="terms-conditions-main">

    <!-- Terms & Conditions Hero Banner Section -->
    <section id="terms-banner" class="policy-hero-banner text-center position-relative">
        <div class="policy-hero-glow"></div>
        <div class="container position-relative py-lg-4">
            <h1 class="display-5 fw-bold text-white mb-3">
                Terms & Conditions
            </h1>
            <p class="text-white-50 small mb-3">
                <i class="bi bi-clock-history me-1"></i> Last Updated: <?php echo $last_updated; ?> &bull; Effective for All Bookings
            </p>
            <p class="text-light opacity-75 mx-auto fs-6 mb-0" style="max-width: 680px; line-height: 1.6;">
                Please read these terms carefully before booking any private guided tour, chauffeur package, or airport transfer with <strong><?php echo $site_name; ?></strong>. We are committed to transparency and exceptional service.
            </p>
        </div>
    </section>

    <!-- Main Content Section -->
    <section id="terms-content" class="py-5 bg-light">
        <div class="container py-lg-3">
            <div class="row g-4 g-lg-5">

                <!-- Left Column: Sticky Table of Contents Navigation (Desktop) -->
                <div class="col-lg-4 col-xl-3 d-none d-lg-block">
                    <aside class="policy-sidebar">
                        <div class="bg-white rounded-4 border border-light-subtle p-3 shadow-xs mb-3">
                            <h6 class="text-uppercase text-secondary fw-bold small px-3 pt-2 mb-3 tracking-wider">
                                Table of Contents
                            </h6>
                            <nav id="terms-nav" class="d-flex flex-column gap-1">
                                <a class="policy-nav-link active" href="#welcome">
                                    <i class="bi bi-info-circle me-1.5 opacity-75"></i> Welcome & Agreement
                                </a>
                                <a class="policy-nav-link" href="#sec-services">
                                    <i class="bi bi-compass me-1.5 opacity-75"></i> 1. Scope of Services
                                </a>
                                <a class="policy-nav-link" href="#sec-eligibility">
                                    <i class="bi bi-person-check me-1.5 opacity-75"></i> 2. Eligibility & Bookings
                                </a>
                                <a class="policy-nav-link" href="#sec-inclusions">
                                    <i class="bi bi-check2-square me-1.5 opacity-75"></i> 3. Inclusions & Exclusions
                                </a>
                                <a class="policy-nav-link" href="#sec-payment">
                                    <i class="bi bi-credit-card me-1.5 opacity-75"></i> 4. Pricing & Payments
                                </a>
                                <a class="policy-nav-link" href="#sec-cancellation">
                                    <i class="bi bi-arrow-counterclockwise me-1.5 opacity-75"></i> 5. Cancellation & Refunds
                                </a>
                                <a class="policy-nav-link" href="#sec-rescheduling">
                                    <i class="bi bi-calendar-range me-1.5 opacity-75"></i> 6. Traveller Rescheduling
                                </a>
                                <a class="policy-nav-link" href="#sec-company-changes">
                                    <i class="bi bi-shield-exclamation me-1.5 opacity-75"></i> 7. Operational Changes
                                </a>
                                <a class="policy-nav-link" href="#sec-responsibilities">
                                    <i class="bi bi-person-arms-up me-1.5 opacity-75"></i> 8. Traveller Conduct
                                </a>
                                <a class="policy-nav-link" href="#sec-safety">
                                    <i class="bi bi-shield-shaded me-1.5 opacity-75"></i> 9. Safety & Health
                                </a>
                                <a class="policy-nav-link" href="#sec-liability">
                                    <i class="bi bi-exclamation-triangle me-1.5 opacity-75"></i> 10. Limitation of Liability
                                </a>
                                <a class="policy-nav-link" href="#sec-ip">
                                    <i class="bi bi-c-circle me-1.5 opacity-75"></i> 11. Intellectual Property
                                </a>
                                <a class="policy-nav-link" href="#sec-jurisdiction">
                                    <i class="bi bi-bank me-1.5 opacity-75"></i> 12. Governing Law
                                </a>
                                <a class="policy-nav-link" href="#sec-contact">
                                    <i class="bi bi-headset me-1.5 opacity-75"></i> 13. Contact & Support
                                </a>
                            </nav>
                        </div>

                        <!-- Quick Assistance Box -->
                        <div class="bg-white rounded-4 border border-light-subtle p-3.5 shadow-xs text-center p-3">
                            <i class="bi bi-patch-question text-primary fs-3 mb-2 d-inline-block"></i>
                            <h6 class="fw-bold text-dark mb-1">Booking Clarification?</h6>
                            <p class="text-secondary small mb-3">Our reservation specialists are on standby to clarify custom terms or group booking policies.</p>
                            <a href="https://wa.me/<?php echo $whatsapp_number; ?>?text=Hello%20TajMahalTour,%20I%20have%20a%20question%20regarding%20booking%20terms." target="_blank" class="btn btn-outline-primary btn-sm rounded-pill w-100 fw-semibold d-inline-flex align-items-center justify-content-center gap-2">
                                <i class="bi bi-whatsapp"></i>
                                <span>Chat with Travel Desk</span>
                            </a>
                        </div>
                    </aside>
                </div>

                <!-- Right Column: Terms Text Content -->
                <div class="col-lg-8 col-xl-9">
                    <div class="bg-white rounded-4 border border-light-subtle p-4 p-md-5 shadow-xs mb-4">

                        <!-- Welcome & Agreement -->
                        <section id="welcome" class="policy-section-anchor mb-5">
                            <h2 class="h4 fw-bold text-dark mb-3 pb-2 border-bottom border-light-subtle d-flex align-items-center gap-2">
                                <i class="bi bi-info-circle text-primary"></i>
                                <span>Welcome & Agreement to Terms</span>
                            </h2>
                            <p class="text-secondary leading-relaxed mb-3">
                                Welcome to <strong><?php echo $site_name; ?></strong> ("Company", "We", "Us", or "Our"), accessible via <a href="https://<?php echo $site_url; ?>" class="text-primary text-decoration-none fw-medium"><?php echo $site_url; ?></a> (the "Website"). By accessing our platform, submitting inquiries, or confirming a reservation for any guided sightseeing tour, private chauffeur rental, or outstation package across North India (including Agra, Delhi, Rajasthan, Himachal Pradesh, Uttarakhand, Punjab, and neighboring regions), You ("Traveller", "Customer", "You") agree to be bound by these Terms & Conditions ("Terms").
                            </p>
                            <div class="p-3 p-md-4 bg-primary bg-opacity-10 border border-primary border-opacity-25 rounded-4 mb-3">
                                <h6 class="fw-bold text-dark mb-1 d-flex align-items-center gap-2">
                                    <i class="bi bi-shield-check text-primary"></i>
                                    <span>Important Notice:</span>
                                </h6>
                                <p class="text-secondary small mb-0">
                                    If you do not agree with any part of these terms, please refrain from finalizing reservations on this website. Making a booking confirmation deposit or full payment constitutes an express acceptance of these terms.
                                </p>
                            </div>
                            <p class="text-muted small mb-0">
                                We reserve the right to revise or modify these terms periodically. Continued use of our services following revisions indicates acceptance of the updated terms.
                            </p>
                        </section>

                        <!-- Section 1: Scope of Services -->
                        <section id="sec-services" class="policy-section-anchor mb-5">
                            <h2 class="h4 fw-bold text-dark mb-3 pb-2 border-bottom border-light-subtle d-flex align-items-center gap-2">
                                <i class="bi bi-compass text-primary"></i>
                                <span>1. Scope of Travel & Chauffeur Services</span>
                            </h2>
                            <p class="text-secondary leading-relaxed mb-3">
                                <?php echo $site_name; ?> specializes in luxury and standard private travel arrangements, including:
                            </p>
                            <ul class="text-secondary small ps-3 d-flex flex-column gap-2 mb-3">
                                <li><strong>Private Monument Tours:</strong> Guided tours to the Taj Mahal, Agra Fort, Fatehpur Sikri, Mehtab Bagh, and Golden Triangle circuits.</li>
                                <li><strong>Chauffeur Car Rentals:</strong> Local 8h/80km city rentals, Delhi airport transfers, and multi-day outstation itineraries.</li>
                                <li><strong>Licensed Tour Guide Services:</strong> Certified multilingual guides approved by the Ministry of Tourism, Government of India.</li>
                                <li><strong>Express Train Packages:</strong> Same-day Agra tours via Gatimaan Express or Vande Bharat Express.</li>
                            </ul>
                            <p class="text-muted small mb-0">
                                Where particular components (such as luxury hotel accommodation or railway tickets) are arranged via third-party operators, their respective service conditions shall supplement these terms.
                            </p>
                        </section>

                        <!-- Section 2: Eligibility & Booking -->
                        <section id="sec-eligibility" class="policy-section-anchor mb-5">
                            <h2 class="h4 fw-bold text-dark mb-3 pb-2 border-bottom border-light-subtle d-flex align-items-center gap-2">
                                <i class="bi bi-person-check text-primary"></i>
                                <span>2. Eligibility & Booking Confirmation</span>
                            </h2>
                            <ul class="text-secondary small ps-3 d-flex flex-column gap-2 mb-0">
                                <li><strong>Age Requirement:</strong> You must be at least 18 years of age to book travel services. Bookings for minors must be initiated and accompanied by a parent or adult guardian.</li>
                                <li><strong>Accurate Passenger Information:</strong> You must provide exact passenger names (as stated in official IDs/passports), valid mobile contact details, active email, and pickup hotel addresses.</li>
                                <li><strong>Official Confirmation Voucher:</strong> A booking is officially confirmed once the agreed token advance or full payment is received, following which an official booking voucher with a unique reservation ID is issued.</li>
                            </ul>
                        </section>

                        <!-- Section 3: Inclusions & Exclusions -->
                        <section id="sec-inclusions" class="policy-section-anchor mb-5">
                            <h2 class="h4 fw-bold text-dark mb-3 pb-2 border-bottom border-light-subtle d-flex align-items-center gap-2">
                                <i class="bi bi-check2-square text-primary"></i>
                                <span>3. Inclusions & Exclusions Policy</span>
                            </h2>
                            <div class="row g-3 mb-0">
                                <div class="col-md-6">
                                    <div class="p-3.5 bg-light rounded-3 border border-light-subtle h-100 p-3">
                                        <h6 class="fw-bold text-success mb-2 d-flex align-items-center gap-1.5">
                                            <i class="bi bi-check-circle-fill"></i>
                                            <span>Typically Included</span>
                                        </h6>
                                        <ul class="text-secondary small ps-3 d-flex flex-column gap-1.5 mb-0">
                                            <li>Private air-conditioned vehicle as per chosen category (Sedan/SUV/Tempo).</li>
                                            <li>Fuel charges, state border road taxes, toll taxes, and parking fees.</li>
                                            <li>Professional, verified, English/Hindi speaking chauffeur.</li>
                                            <li>Authorized local monument historian/guide (if selected in package).</li>
                                            <li>Bottled mineral water during the road journey.</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-3.5 bg-light rounded-3 border border-light-subtle h-100 p-3">
                                        <h6 class="fw-bold text-danger mb-2 d-flex align-items-center gap-1.5">
                                            <i class="bi bi-x-circle-fill"></i>
                                            <span>Typically Excluded</span>
                                        </h6>
                                        <ul class="text-secondary small ps-3 d-flex flex-column gap-1.5 mb-0">
                                            <li>Monument entrance tickets (unless explicitly listed in custom all-inclusive quotes).</li>
                                            <li>Personal meals, beverages, alcoholic drinks, and laundry charges.</li>
                                            <li>Gratuities/tips for chauffeur and tour guide (optional & at discretion).</li>
                                            <li>Camera/video commercial permits levied by monument authorities.</li>
                                            <li>Travel insurance and medical emergency coverage.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- Section 4: Pricing & Payments -->
                        <section id="sec-payment" class="policy-section-anchor mb-5">
                            <h2 class="h4 fw-bold text-dark mb-3 pb-2 border-bottom border-light-subtle d-flex align-items-center gap-2">
                                <i class="bi bi-credit-card text-primary"></i>
                                <span>4. Pricing, Taxes & Payment Schedules</span>
                            </h2>
                            <p class="text-secondary leading-relaxed mb-3">
                                All tour prices are quoted in Indian Rupees (INR) or specified equivalent foreign currencies. Applicable Goods and Services Tax (GST) is clearly disclosed during checkout or quotation.
                            </p>
                            <ul class="text-secondary small ps-3 d-flex flex-column gap-2 mb-0">
                                <li><strong>Advance Token:</strong> A partial advance deposit (typically 20% to 50%) is required to reserve vehicles, assign chauffeurs, and lock tour guide dates.</li>
                                <li><strong>Balance Payment:</strong> The remaining balance may be settled upon meeting the chauffeur at pickup or prior to commencement of outstation travel via Cash, UPI, or Credit/Debit Card.</li>
                                <li><strong>Safe Gateways:</strong> Digital card payments are handled via PCI-DSS certified Indian payment gateways. We never retain full card credentials.</li>
                            </ul>
                        </section>

                        <!-- Section 5: Cancellation & Refunds -->
                        <section id="sec-cancellation" class="policy-section-anchor mb-5">
                            <h2 class="h4 fw-bold text-dark mb-3 pb-2 border-bottom border-light-subtle d-flex align-items-center gap-2">
                                <i class="bi bi-arrow-counterclockwise text-primary"></i>
                                <span>5. Cancellation & Refund Policy</span>
                            </h2>
                            <p class="text-secondary leading-relaxed mb-3">
                                We believe in fair and transparent cancellation terms. If you need to cancel a confirmed booking, the following schedule applies:
                            </p>

                            <!-- Responsive Refund Table -->
                            <div class="table-responsive mb-3">
                                <table class="table table-bordered align-middle mb-0 text-secondary small">
                                    <thead class="table-light text-dark fw-bold">
                                        <tr>
                                            <th class="p-3" style="width: 55%;">Notice Period Before Tour Start</th>
                                            <th class="p-3" style="width: 45%;">Refund Eligibility</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="p-3">
                                                <strong>15 days or more</strong> before scheduled pickup date
                                            </td>
                                            <td class="p-3 text-success fw-bold">
                                                <i class="bi bi-check-circle me-1"></i> 100% Refund <span class="text-muted fw-normal">(less payment gateway transaction fee)</span>
                                            </td>
                                        </tr>
                                        <tr class="table-light">
                                            <td class="p-3">
                                                <strong>4 to 14 days</strong> before scheduled pickup date
                                            </td>
                                            <td class="p-3 text-warning fw-bold">
                                                <i class="bi bi-dash-circle me-1"></i> 50% Refund of total booking value
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-3">
                                                <strong>Less than 72 hours</strong>, or No-Show on tour date
                                            </td>
                                            <td class="p-3 text-danger fw-bold">
                                                <i class="bi bi-x-circle me-1"></i> No Refund
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="p-3 p-md-4 bg-primary bg-opacity-10 border border-primary border-opacity-25 rounded-4 mb-3">
                                <h6 class="fw-bold text-dark small mb-1">Important Refund Clauses:</h6>
                                <ul class="text-secondary small ps-3 d-flex flex-column gap-1 mb-0">
                                    <li>Written cancellation notice must be dispatched via email to <a href="mailto:<?php echo $booking_email; ?>" class="text-primary text-decoration-none"><?php echo $booking_email; ?></a> or via WhatsApp to our official desk.</li>
                                    <li>Monument entry tickets issued by the Archaeological Survey of India (ASI) and confirmed railway tickets are non-refundable in accordance with Indian government directives.</li>
                                    <li>Approved refunds are processed back to the original funding account within 5 to 7 operational banking days.</li>
                                </ul>
                            </div>
                        </section>

                        <!-- Section 6: Traveller Rescheduling -->
                        <section id="sec-rescheduling" class="policy-section-anchor mb-5">
                            <h2 class="h4 fw-bold text-dark mb-3 pb-2 border-bottom border-light-subtle d-flex align-items-center gap-2">
                                <i class="bi bi-calendar-range text-primary"></i>
                                <span>6. Rescheduling & Date Amendments by Traveller</span>
                            </h2>
                            <p class="text-secondary leading-relaxed mb-0">
                                Date modifications are welcomed up to 48 hours prior to journey commencement without penalty fees, subject to vehicle fleet and guide availability. If rescheduling shifts your journey into peak holiday dates (e.g. Christmas, New Year, Diwali season) where tariffs differ, the revised rate differential will be communicated prior to voucher re-issuance.
                            </p>
                        </section>

                        <!-- Section 7: Operational Changes & Force Majeure -->
                        <section id="sec-company-changes" class="policy-section-anchor mb-5">
                            <h2 class="h4 fw-bold text-dark mb-3 pb-2 border-bottom border-light-subtle d-flex align-items-center gap-2">
                                <i class="bi bi-shield-exclamation text-primary"></i>
                                <span>7. Operational Adjustments & Force Majeure</span>
                            </h2>
                            <p class="text-secondary leading-relaxed mb-3">
                                In rare events of unforeseen road closures, extreme fog during North Indian winters, political rallies, landmark closure directives by authorities (e.g. Taj Mahal Friday closure for prayers, VIP security protocols), or mechanical breakdowns:
                            </p>
                            <ul class="text-secondary small ps-3 d-flex flex-column gap-1.5 mb-0">
                                <li><strong>Vehicle Breakdown Guarantee:</strong> In the unlikely event of vehicle mechanical failure during a journey, an equivalent replacement vehicle will be arranged promptly at no extra charge.</li>
                                <li><strong>Force Majeure:</strong> Neither party is liable for failure or delay in performance caused by natural disasters, strikes, pandemic quarantine restrictions, or government decrees. An alternate date or credit voucher will be provided.</li>
                            </ul>
                        </section>

                        <!-- Section 8: Traveller Conduct -->
                        <section id="sec-responsibilities" class="policy-section-anchor mb-5">
                            <h2 class="h4 fw-bold text-dark mb-3 pb-2 border-bottom border-light-subtle d-flex align-items-center gap-2">
                                <i class="bi bi-person-arms-up text-primary"></i>
                                <span>8. Traveller Conduct & Passenger Responsibilities</span>
                            </h2>
                            <p class="text-secondary leading-relaxed mb-3">
                                To ensure a serene and respectable travel environment for all parties, travellers agree to:
                            </p>
                            <ul class="text-secondary small ps-3 d-flex flex-column gap-1.5 mb-3">
                                <li>Carry original government identification/passports during travels as required by police checkpoints and monument authorities.</li>
                                <li>Treat chauffeurs, tour guides, monument custodians, and fellow passengers with dignity and courtesy.</li>
                                <li>Strictly refrain from consuming illegal narcotics, smoking inside non-smoking tourist vehicles, or carrying unauthorized weapons.</li>
                            </ul>
                            <p class="text-muted small mb-0">
                                The company reserves the right to terminate tour services without refund if a passenger indulges in aggressive misconduct, harassment, or unlawful acts endangering safety.
                            </p>
                        </section>

                        <!-- Section 9: Safety & Health -->
                        <section id="sec-safety" class="policy-section-anchor mb-5">
                            <h2 class="h4 fw-bold text-dark mb-3 pb-2 border-bottom border-light-subtle d-flex align-items-center gap-2">
                                <i class="bi bi-shield-shaded text-primary"></i>
                                <span>9. Safety, Health & Monument Regulations</span>
                            </h2>
                            <p class="text-secondary leading-relaxed mb-0">
                                The Archaeological Survey of India (ASI) enforces strict heritage preservation protocols at the Taj Mahal and historic forts (e.g., prohibition of tripods, large backpacks, tobacco products, drones, and food items inside monument perimeters). Travellers are obligated to comply with these heritage rules. We strongly advise international and domestic travellers to maintain personal travel and emergency health insurance.
                            </p>
                        </section>

                        <!-- Section 10: Limitation of Liability -->
                        <section id="sec-liability" class="policy-section-anchor mb-5">
                            <h2 class="h4 fw-bold text-dark mb-3 pb-2 border-bottom border-light-subtle d-flex align-items-center gap-2">
                                <i class="bi bi-exclamation-triangle text-primary"></i>
                                <span>10. Limitation of Liability</span>
                            </h2>
                            <p class="text-secondary leading-relaxed mb-3">
                                To the maximum extent permitted by applicable Indian laws:
                            </p>
                            <ul class="text-secondary small ps-3 d-flex flex-column gap-1.5 mb-3">
                                <li>We are not liable for delayed flights, missed trains, or lost personal baggage left unattended in hotel lobbies or sightseeing spots.</li>
                                <li>We are not responsible for injuries or illnesses sustained by travellers participating in independent optional activities not part of our scheduled itinerary.</li>
                                <li>The company's aggregate cumulative liability for any proven claim arising out of a booking shall be strictly capped at the total amount paid by the customer for that specific booking.</li>
                            </ul>
                        </section>

                        <!-- Section 11: Intellectual Property -->
                        <section id="sec-ip" class="policy-section-anchor mb-5">
                            <h2 class="h4 fw-bold text-dark mb-3 pb-2 border-bottom border-light-subtle d-flex align-items-center gap-2">
                                <i class="bi bi-c-circle text-primary"></i>
                                <span>11. Intellectual Property & Platform Usage</span>
                            </h2>
                            <p class="text-secondary leading-relaxed mb-0">
                                All text, itineraries, tour descriptions, logos, visual assets, and website layout designs on <strong><?php echo $site_url; ?></strong> are proprietary intellectual property of <?php echo $site_name; ?>. Unauthorized scraping, automated harvesting, copying, or commercial re-distribution without written authorization is strictly prohibited.
                            </p>
                        </section>

                        <!-- Section 12: Governing Law -->
                        <section id="sec-jurisdiction" class="policy-section-anchor mb-5">
                            <h2 class="h4 fw-bold text-dark mb-3 pb-2 border-bottom border-light-subtle d-flex align-items-center gap-2">
                                <i class="bi bi-bank text-primary"></i>
                                <span>12. Governing Law & Dispute Resolution</span>
                            </h2>
                            <p class="text-secondary leading-relaxed mb-0">
                                These Terms & Conditions are governed by and construed in accordance with the laws of the Republic of India. In the event of an unresolved dispute arising from services rendered, both parties agree to first explore amicable mediation. Should legal proceedings arise, the competent civil courts located in <strong>Agra, Uttar Pradesh, India</strong> shall possess exclusive jurisdiction.
                            </p>
                        </section>

                        <!-- Section 13: Contact & Support -->
                        <section id="sec-contact" class="policy-section-anchor">
                            <h2 class="h4 fw-bold text-dark mb-3 pb-2 border-bottom border-light-subtle d-flex align-items-center gap-2">
                                <i class="bi bi-headset text-primary"></i>
                                <span>13. Contact & Reservation Desk</span>
                            </h2>
                            <p class="text-secondary leading-relaxed mb-3">
                                For booking inquiries, custom itinerary planning, or clarification regarding these terms, our travel support team is available 24/7:
                            </p>

                            <div class="p-4 bg-light border border-light-subtle border-start border-4 border-primary rounded-end-4">
                                <h5 class="fw-bold text-dark mb-3 d-flex align-items-center gap-2">
                                    <i class="bi bi-building-check text-primary"></i>
                                    <span><?php echo $site_name; ?> Booking Office</span>
                                </h5>
                                <div class="row g-3 text-secondary small">
                                    <div class="col-sm-6">
                                        <div class="d-flex align-items-center gap-2">
                                            <i class="bi bi-envelope-fill text-primary fs-6"></i>
                                            <div>
                                                <strong class="text-dark d-block">Booking & Itinerary Desk:</strong>
                                                <a href="mailto:<?php echo $booking_email; ?>" class="text-primary text-decoration-none"><?php echo $booking_email; ?></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="d-flex align-items-center gap-2">
                                            <i class="bi bi-telephone-fill text-primary fs-6"></i>
                                            <div>
                                                <strong class="text-dark d-block">Customer Helpline:</strong>
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
    const navLinks = document.querySelectorAll('#terms-nav .policy-nav-link');
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


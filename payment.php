<?php
/**
 * Payment & Online Booking Options Page
 * Clean, modern, transparent UI per AGENTS.md standards.
 */
$page_title = "Pay Online & Payment Methods - Taj Mahal Tour | Safe & Verified";
require_once 'includes/header.php';
?>

<main class="payment-wrapper">

    <!-- 1. Payment Page Hero Banner with Breadcrumbs -->
    <section id="payment-hero-banner" class="position-relative text-white text-center d-flex align-items-center justify-content-center py-5" style="background: linear-gradient(rgba(15, 23, 42, 0.72), rgba(15, 23, 42, 0.8)), url('assets/images/uttarPradesh/tajmahal.avif') center/cover no-repeat; min-height: 280px;">
        <div class="container position-relative z-2 py-4">
            <span class="badge bg-primary bg-opacity-25 text-white border border-light border-opacity-25 px-3 py-1.5 rounded-pill fw-semibold small text-uppercase mb-2 d-inline-flex align-items-center gap-1">
                <i class="bi bi-shield-lock-fill"></i>
                <span>100% SECURE &amp; VERIFIED</span>
            </span>
            <h1 class="display-4 fw-bold text-white mb-2">Pay Online &amp; Payment Methods</h1>
            <p class="text-white-50 max-w-600 mx-auto mb-3" style="max-width: 650px;">
                Transparent, flexible, and convenient payment options for all your North India car rental and tour package bookings.
            </p>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0 small">
                    <li class="breadcrumb-item">
                        <a href="index.php" class="text-white text-decoration-none opacity-75 hover-opacity-100">
                            <i class="bi bi-house-door me-1"></i> Home
                        </a>
                    </li>
                    <li class="breadcrumb-item active text-white" aria-current="page">Pay Online</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- Main Payment Container -->
    <div class="container py-5">

        <!-- 2. Payment Milestones Section -->
        <section id="payment-milestones" class="mb-5">
            <div class="payment-card">
                <div class="payment-card-header">
                    <div class="d-flex align-items-center gap-3">
                        <div class="payment-header-icon">
                            <i class="bi bi-calendar2-check-fill"></i>
                        </div>
                        <div>
                            <h3 class="fw-bold text-dark mb-1 fs-4">Standard Payment Milestones</h3>
                            <p class="text-secondary small mb-0">Hassle-free, staged payments tailored for complete peace of mind</p>
                        </div>
                    </div>
                    <span class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25 px-3 py-2 rounded-pill fw-semibold small">
                        <i class="bi bi-check2-circle me-1"></i> Zero Hidden Costs
                    </span>
                </div>

                <!-- 3 Steps Grid -->
                <div class="row g-3 g-md-4">
                    <!-- Step 1 -->
                    <div class="col-12 col-md-4">
                        <div class="milestone-step-card">
                            <div class="milestone-badge-num">25%</div>
                            <div>
                                <h5 class="fw-bold text-dark mb-1 fs-6">Booking Advance</h5>
                                <p class="text-secondary small mb-0 lh-sm">
                                    Pay 25% at the time of reservation to confirm and block your designated premium vehicle and verified driver.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Step 2 -->
                    <div class="col-12 col-md-4">
                        <div class="milestone-step-card">
                            <div class="milestone-badge-num">50%</div>
                            <div>
                                <h5 class="fw-bold text-dark mb-1 fs-6">On Tour Arrival</h5>
                                <p class="text-secondary small mb-0 lh-sm">
                                    Pay 50% upon vehicle arrival and pickup at your hotel, airport, or starting city in North India.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Step 3 -->
                    <div class="col-12 col-md-4">
                        <div class="milestone-step-card">
                            <div class="milestone-badge-num">25%</div>
                            <div>
                                <h5 class="fw-bold text-dark mb-1 fs-6">Tour Completion</h5>
                                <p class="text-secondary small mb-0 lh-sm">
                                    Pay the remaining 25% balance during your journey or upon final drop-off at your destination.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Guarantee Notice Bar -->
                <div class="mt-4 p-3 bg-primary bg-opacity-10 border border-primary border-opacity-25 rounded-3 d-flex align-items-center gap-3">
                    <i class="bi bi-shield-check text-primary fs-4 flex-shrink-0"></i>
                    <div class="small text-dark">
                        <strong>Complete Transparency:</strong> Official GST invoice and WhatsApp payment receipts are issued immediately after each transaction.
                    </div>
                </div>
            </div>
        </section>

        <!-- 3. Method 1: Instant UPI & QR Codes -->
        <section id="payment-upi-methods" class="mb-5">
            <div class="payment-card">
                <div class="payment-card-header">
                    <div class="d-flex align-items-center gap-3">
                        <div class="payment-header-icon" style="background: rgba(34, 197, 94, 0.1); color: #16a34a;">
                            <i class="bi bi-qr-code-scan"></i>
                        </div>
                        <div>
                            <h3 class="fw-bold text-dark mb-1 fs-4">Scan &amp; Pay via UPI</h3>
                            <p class="text-secondary small mb-0">Fastest method &bull; 0% Convenience Fee &bull; Instant WhatsApp Confirmation</p>
                        </div>
                    </div>
                    <span class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25 px-3 py-2 rounded-pill fw-semibold small">
                        <i class="bi bi-lightning-charge-fill me-1"></i> Instant Confirmation
                    </span>
                </div>

                <!-- QR Grid -->
                <div class="row g-4">
                    <!-- Paytm UPI -->
                    <div class="col-12 col-md-4">
                        <div class="payment-qr-box">
                            <div>
                                <div class="fw-bold text-primary mb-2 d-flex align-items-center justify-content-center gap-2">
                                    <i class="bi bi-wallet2"></i>
                                    <span>Paytm UPI</span>
                                </div>
                                <div class="payment-qr-frame" onclick="openPaymentQrModal('assets/images/others/payment/paytm.jpg', 'Paytm QR Code')">
                                    <img src="assets/images/others/payment/paytm.jpg" alt="Paytm QR Code Taj Mahal Tour" loading="lazy">
                                    <div class="payment-qr-zoom-hint">
                                        <i class="bi bi-arrows-fullscreen me-1"></i> Click to Enlarge
                                    </div>
                                </div>
                                <p class="text-secondary small mb-3">
                                    Scan with Paytm, BHIM, or any UPI app
                                </p>
                            </div>
                            <div>
                                <button type="button" class="btn-copy-chip w-100 justify-content-center" onclick="copyPaymentData('9810723370', this)">
                                    <i class="bi bi-clipboard"></i>
                                    <span>Copy Number: 9810723370</span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- PhonePe UPI -->
                    <div class="col-12 col-md-4">
                        <div class="payment-qr-box">
                            <div>
                                <div class="fw-bold text-dark mb-2 d-flex align-items-center justify-content-center gap-2" style="color: #5f259f !important;">
                                    <i class="bi bi-phone"></i>
                                    <span>PhonePe UPI</span>
                                </div>
                                <div class="payment-qr-frame" onclick="openPaymentQrModal('assets/images/others/payment/phonepay.jpg', 'PhonePe QR Code')">
                                    <img src="assets/images/others/payment/phonepay.jpg" alt="PhonePe QR Code Taj Mahal Tour" loading="lazy">
                                    <div class="payment-qr-zoom-hint">
                                        <i class="bi bi-arrows-fullscreen me-1"></i> Click to Enlarge
                                    </div>
                                </div>
                                <p class="text-secondary small mb-3">
                                    Scan with PhonePe or any bank UPI app
                                </p>
                            </div>
                            <div>
                                <button type="button" class="btn-copy-chip w-100 justify-content-center" onclick="copyPaymentData('9810723370', this)">
                                    <i class="bi bi-clipboard"></i>
                                    <span>Copy Number: 9810723370</span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Google Pay (GPay) -->
                    <div class="col-12 col-md-4">
                        <div class="payment-qr-box">
                            <div>
                                <div class="fw-bold text-dark mb-2 d-flex align-items-center justify-content-center gap-2" style="color: #1a73e8 !important;">
                                    <i class="bi bi-google"></i>
                                    <span>Google Pay</span>
                                </div>
                                <div class="payment-qr-frame" onclick="openPaymentQrModal('assets/images/others/payment/gpay.jpg', 'Google Pay QR Code')">
                                    <img src="assets/images/others/payment/gpay.jpg" alt="Google Pay QR Code Taj Mahal Tour" loading="lazy">
                                    <div class="payment-qr-zoom-hint">
                                        <i class="bi bi-arrows-fullscreen me-1"></i> Click to Enlarge
                                    </div>
                                </div>
                                <p class="text-secondary small mb-3">
                                    Scan with Google Pay or any UPI app
                                </p>
                            </div>
                            <div>
                                <button type="button" class="btn-copy-chip w-100 justify-content-center" onclick="copyPaymentData('9810723370', this)">
                                    <i class="bi bi-clipboard"></i>
                                    <span>Copy Number: 9810723370</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 4. Method 2: Direct Bank Transfer (NEFT / RTGS / IMPS) -->
        <section id="payment-bank-transfer" class="mb-5">
            <div class="payment-card">
                <div class="payment-card-header">
                    <div class="d-flex align-items-center gap-3">
                        <div class="payment-header-icon" style="background: rgba(14, 165, 233, 0.1); color: #0284c7;">
                            <i class="bi bi-bank2"></i>
                        </div>
                        <div>
                            <h3 class="fw-bold text-dark mb-1 fs-4">Direct Bank Transfer (NEFT / RTGS / IMPS)</h3>
                            <p class="text-secondary small mb-0">Official Bank Account Details for Domestic Wire Transfers</p>
                        </div>
                    </div>
                    <span class="badge bg-info bg-opacity-10 text-info border border-info border-opacity-25 px-3 py-2 rounded-pill fw-semibold small">
                        <i class="bi bi-building me-1"></i> ICICI Bank Current A/C
                    </span>
                </div>

                <!-- Bank Info Tiles Grid -->
                <div class="row g-3 g-md-4">
                    <!-- Account Name -->
                    <div class="col-12 col-md-6">
                        <div class="bank-info-tile">
                            <div>
                                <span class="bank-info-label">Account Holder Name</span>
                                <span class="bank-info-value">Ashu Sharma</span>
                            </div>
                            <button type="button" class="btn-copy-chip" onclick="copyPaymentData('Ashu Sharma', this)">
                                <i class="bi bi-clipboard"></i>
                                <span>Copy</span>
                            </button>
                        </div>
                    </div>

                    <!-- Bank Name -->
                    <div class="col-12 col-md-6">
                        <div class="bank-info-tile">
                            <div>
                                <span class="bank-info-label">Bank Name</span>
                                <span class="bank-info-value">ICICI BANK LIMITED</span>
                            </div>
                            <button type="button" class="btn-copy-chip" onclick="copyPaymentData('ICICI BANK LIMITED', this)">
                                <i class="bi bi-clipboard"></i>
                                <span>Copy</span>
                            </button>
                        </div>
                    </div>

                    <!-- Account Number -->
                    <div class="col-12 col-md-6">
                        <div class="bank-info-tile" style="border-left: 4px solid var(--primary-color);">
                            <div>
                                <span class="bank-info-label">Account Number</span>
                                <span class="bank-info-value text-primary fs-5">102401503656</span>
                            </div>
                            <button type="button" class="btn-copy-chip" onclick="copyPaymentData('102401503656', this)">
                                <i class="bi bi-clipboard"></i>
                                <span>Copy A/C</span>
                            </button>
                        </div>
                    </div>

                    <!-- IFSC Code -->
                    <div class="col-12 col-md-6">
                        <div class="bank-info-tile" style="border-left: 4px solid #16a34a;">
                            <div>
                                <span class="bank-info-label">IFSC Code</span>
                                <span class="bank-info-value text-success fs-5">ICIC0001024</span>
                            </div>
                            <button type="button" class="btn-copy-chip" onclick="copyPaymentData('ICIC0001024', this)">
                                <i class="bi bi-clipboard"></i>
                                <span>Copy IFSC</span>
                            </button>
                        </div>
                    </div>

                    <!-- Branch -->
                    <div class="col-12 col-md-6">
                        <div class="bank-info-tile">
                            <div>
                                <span class="bank-info-label">Branch</span>
                                <span class="bank-info-value">Krishna Nagar, New Delhi</span>
                            </div>
                            <span class="text-secondary small fw-medium">New Delhi</span>
                        </div>
                    </div>

                    <!-- PAN Number -->
                    <div class="col-12 col-md-6">
                        <div class="bank-info-tile">
                            <div>
                                <span class="bank-info-label">PAN Number</span>
                                <span class="bank-info-value">BBXPS4022F</span>
                            </div>
                            <button type="button" class="btn-copy-chip" onclick="copyPaymentData('BBXPS4022F', this)">
                                <i class="bi bi-clipboard"></i>
                                <span>Copy PAN</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 5. Method 3: International & Overseas Payments -->
        <section id="payment-international" class="mb-5">
            <div class="payment-card">
                <div class="payment-card-header">
                    <div class="d-flex align-items-center gap-3">
                        <div class="payment-header-icon" style="background: rgba(99, 102, 241, 0.1); color: #6366f1;">
                            <i class="bi bi-globe-americas"></i>
                        </div>
                        <div>
                            <h3 class="fw-bold text-dark mb-1 fs-4">International &amp; Overseas Payments</h3>
                            <p class="text-secondary small mb-0">For tourists, international guests, and clients booking from abroad</p>
                        </div>
                    </div>
                    <span class="badge bg-secondary bg-opacity-10 text-secondary border border-secondary border-opacity-25 px-3 py-2 rounded-pill fw-semibold small">
                        <i class="bi bi-airplane-fill me-1"></i> Global Transfers
                    </span>
                </div>

                <div class="row g-4">
                    <!-- PayPal Online Checkout -->
                    <div class="col-12 col-md-6">
                        <div class="intl-method-card">
                            <div>
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <div class="intl-logo-frame">
                                        <img src="assets/images/others/payment/paypal.png" alt="PayPal Payment" loading="lazy">
                                    </div>
                                    <span class="badge bg-primary bg-opacity-10 text-primary fw-semibold small px-3 py-1.5 rounded-pill">
                                        Cards &amp; PayPal
                                    </span>
                                </div>
                                <h4 class="fw-bold text-dark fs-5 mb-2">PayPal Online Checkout</h4>
                                <p class="text-secondary small mb-4 lh-base">
                                    Pay securely using International Credit &amp; Debit Cards (Visa, MasterCard, American Express) or your registered PayPal wallet with complete buyer protection.
                                </p>
                            </div>

                            <!-- Verified Direct PayPal Form -->
                            <form target="_blank" action="https://www.paypal.com/cgi-bin/webscr" method="post" class="mt-2">
                                <input type="hidden" name="cmd" value="_xclick">
                                <input type="hidden" name="business" value="uniqueholidaytrip@gmail.com">
                                <input type="hidden" name="item_name" value="Taj Mahal Tour & North India Car Hire Booking">
                                <input type="hidden" name="item_number" value="TOUR_BOOKING">
                                <input type="hidden" name="no_shipping" value="1">
                                <input type="hidden" name="amount" value="200">
                                <input type="hidden" name="currency_code" value="USD">
                                <input type="hidden" name="lc" value="US">
                                <input type="hidden" name="country" value="US">
                                <input type="hidden" name="bn" value="PP-BuyNowBF:btn_paynowCC_LG.gif:NonHosted">
                                <input type="hidden" name="return" value="index.php">
                                <input type="hidden" name="cancel_return" value="payment.php">
                                
                                <button type="submit" class="btn btn-primary w-100 py-2 fw-semibold d-inline-flex align-items-center justify-content-center gap-2">
                                    <i class="bi bi-credit-card-2-front-fill"></i>
                                    <span>Pay with PayPal ($200 USD Deposit)</span>
                                </button>
                            </form>
                        </div>
                    </div>

                    <!-- Western Union Transfer -->
                    <div class="col-12 col-md-6">
                        <div class="intl-method-card">
                            <div>
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <div class="intl-logo-frame">
                                        <img src="assets/images/others/payment/western-union-logo.png" alt="Western Union Money Transfer" loading="lazy">
                                    </div>
                                    <span class="badge bg-warning bg-opacity-25 text-dark fw-semibold small px-3 py-1.5 rounded-pill">
                                        Wire Transfer
                                    </span>
                                </div>
                                <h4 class="fw-bold text-dark fs-5 mb-2">Western Union Transfer</h4>
                                <p class="text-secondary small mb-4 lh-base">
                                    Send booking advance deposits via any local Western Union branch worldwide or directly online. Instant booking confirmation once MTCN number is shared with our team.
                                </p>
                            </div>

                            <div>
                                <a href="https://wa.me/919810723370?text=Hi,%20please%20share%20Western%20Union%20beneficiary%20details%20for%20my%20tour%20booking." target="_blank" class="btn btn-outline-dark w-100 py-2 fw-semibold d-inline-flex align-items-center justify-content-center gap-2">
                                    <i class="bi bi-whatsapp text-success"></i>
                                    <span>Get Western Union Details on WhatsApp</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 6. Confirmation & Instant Helpdesk Support -->
        <section id="payment-support-cta" class="mb-5">
            <div class="payment-support-box">
                <div class="row align-items-center g-4 position-relative z-1">
                    <div class="col-lg-7">
                        <span class="badge bg-success bg-opacity-25 text-success border border-success border-opacity-50 px-3 py-1.5 rounded-pill fw-semibold small mb-2 d-inline-flex align-items-center gap-1">
                            <i class="bi bi-patch-check-fill"></i>
                            <span>STEP 2: CONFIRMATION</span>
                        </span>
                        <h3 class="fw-bold text-white mb-2 fs-3">Completed Your Payment?</h3>
                        <p class="text-white-50 mb-4 small lh-base" style="max-width: 540px;">
                            Please share your payment screenshot or transaction reference / UTR number on WhatsApp or Call for immediate booking receipt, trip itinerary, and designated driver allotment.
                        </p>
                        <div class="d-flex flex-wrap gap-3">
                            <a href="https://wa.me/919810723370?text=Hi,%20I%20have%20completed%20the%20payment%20for%20my%20tour%20booking.%20Please%20find%20the%20receipt%20attached." target="_blank" class="btn btn-success fw-bold px-4 py-2.5 d-inline-flex align-items-center gap-2 shadow">
                                <i class="bi bi-whatsapp fs-5"></i>
                                <span>Send Screenshot on WhatsApp</span>
                            </a>
                            <a href="tel:+919810723370" class="btn btn-outline-light fw-semibold px-4 py-2.5 d-inline-flex align-items-center gap-2">
                                <i class="bi bi-telephone-fill"></i>
                                <span>Call +91 98107 23370</span>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="p-4 rounded-4" style="background: rgba(255, 255, 255, 0.08); border: 1px solid rgba(255, 255, 255, 0.15);">
                            <div class="small text-white-50 text-uppercase fw-semibold mb-1" style="letter-spacing: 0.05em;">24/7 Dedicated Helpdesk:</div>
                            <strong class="d-block text-white fs-5 fw-bold mb-1">+91 98107 23370</strong>
                            <strong class="d-block text-white fs-6 fw-bold mb-2">+91 88007 22606</strong>
                            <div class="d-flex align-items-center gap-2 small text-success">
                                <span class="spinner-grow spinner-grow-sm text-success" role="status" style="width: 8px; height: 8px;"></span>
                                <span>Available 24 Hours &bull; Instant Response</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 7. Payment FAQ & Policy Accordion -->
        <section id="payment-faq" class="mb-5">
            <div class="payment-card">
                <div class="text-center mb-4">
                    <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-1.5 rounded-pill fw-semibold small text-uppercase mb-2">
                        TRANSPARENT POLICIES
                    </span>
                    <h3 class="fw-bold text-dark fs-4">Frequently Asked Questions</h3>
                    <p class="text-secondary small mb-0">Answers to common questions regarding booking deposits, invoicing, and refunds</p>
                </div>

                <div class="accordion accordion-flush" id="paymentAccordion">
                    <!-- Q1 -->
                    <div class="accordion-item border-bottom">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed fw-bold text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                <i class="bi bi-question-circle text-primary me-2"></i>
                                What happens immediately after I make an advance payment?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#paymentAccordion">
                            <div class="accordion-body text-secondary small lh-base">
                                As soon as you share your transaction reference or screenshot via WhatsApp or email, our reservations manager validates the receipt, reserves your specific vehicle model, assigns a verified driver, and sends you an official digital confirmation voucher with complete trip itinerary.
                            </div>
                        </div>
                    </div>

                    <!-- Q2 -->
                    <div class="accordion-item border-bottom">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed fw-bold text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <i class="bi bi-question-circle text-primary me-2"></i>
                                Are tolls, state taxes, and parking fees included in the price?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#paymentAccordion">
                            <div class="accordion-body text-secondary small lh-base">
                                Yes, our all-inclusive tour packages clearly specify included expenses (toll taxes, inter-state entry taxes, parking fees, fuel, and driver allowances). There are absolutely zero surprise charges during your journey.
                            </div>
                        </div>
                    </div>

                    <!-- Q3 -->
                    <div class="accordion-item border-bottom">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed fw-bold text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <i class="bi bi-question-circle text-primary me-2"></i>
                                Can I pay the remaining balance in cash to the driver?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#paymentAccordion">
                            <div class="accordion-body text-secondary small lh-base">
                                Yes. You can pay the remaining milestone balances directly to your assigned driver in Indian Rupees (INR) cash, or online using UPI (Google Pay, PhonePe, Paytm) and net banking at your convenience.
                            </div>
                        </div>
                    </div>

                    <!-- Q4 -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed fw-bold text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <i class="bi bi-question-circle text-primary me-2"></i>
                                What is your cancellation and refund policy?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#paymentAccordion">
                            <div class="accordion-body text-secondary small lh-base">
                                Cancellations made 48 hours or more prior to the scheduled pickup time are eligible for a 100% refund of the advance deposit (minus nominal banking processing fees). We believe in fair, customer-first service.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 8. Trust & Security Badges -->
        <section id="payment-trust-badges">
            <div class="row g-4 justify-content-center text-center">
                <div class="col-6 col-md-3">
                    <div class="payment-trust-badge justify-content-center">
                        <i class="bi bi-shield-lock-fill"></i>
                        <span>256-Bit SSL Encryption</span>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="payment-trust-badge justify-content-center">
                        <i class="bi bi-receipt-cutoff"></i>
                        <span>Official GST Tax Invoice</span>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="payment-trust-badge justify-content-center">
                        <i class="bi bi-patch-check-fill"></i>
                        <span>Verified Tour Operator</span>
                    </div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="payment-trust-badge justify-content-center">
                        <i class="bi bi-headset"></i>
                        <span>24/7 Dedicated Support</span>
                    </div>
                </div>
            </div>
        </section>

    </div>

</main>

<!-- Lightbox Modal for QR Code Zoom -->
<div id="paymentQrModal" class="payment-qr-modal" onclick="closePaymentQrModal(event)">
    <div class="payment-qr-modal-content" onclick="event.stopPropagation()">
        <button type="button" class="btn-close position-absolute top-0 end-0 m-3" aria-label="Close" onclick="closePaymentQrModal()"></button>
        <h4 id="paymentQrModalTitle" class="fw-bold text-dark fs-5 mb-2">Scan &amp; Pay</h4>
        <img id="paymentQrModalImg" src="" alt="Enlarged QR Code" class="img-fluid rounded-3 mb-2" style="max-height: 280px; object-fit: contain;">
        <p class="text-secondary small mb-3">Scan using Google Pay, PhonePe, Paytm, BHIM, or any UPI banking app</p>
        <button type="button" class="btn btn-secondary btn-sm w-100 py-2 rounded-3" onclick="closePaymentQrModal()">Close</button>
    </div>
</div>

<!-- Floating Toast Notification for Copy Feedback -->
<div id="payment-toast">
    <i class="bi bi-check-circle-fill text-success fs-5"></i>
    <span id="payment-toast-msg">Copied to clipboard!</span>
</div>

<!-- Clean Vanilla JavaScript Interactions -->
<script>
function copyPaymentData(text, btnElement) {
    if (navigator.clipboard && window.isSecureContext) {
        navigator.clipboard.writeText(text).then(function() {
            showPaymentToast('Copied: ' + text);
            triggerCopyEffect(btnElement);
        }).catch(function() {
            fallbackPaymentCopy(text, btnElement);
        });
    } else {
        fallbackPaymentCopy(text, btnElement);
    }
}

function fallbackPaymentCopy(text, btnElement) {
    var textArea = document.createElement("textarea");
    textArea.value = text;
    textArea.style.position = "fixed";
    textArea.style.left = "-9999px";
    document.body.appendChild(textArea);
    textArea.focus();
    textArea.select();
    try {
        document.execCommand('copy');
        showPaymentToast('Copied: ' + text);
        triggerCopyEffect(btnElement);
    } catch (err) {
        showPaymentToast('Failed to copy');
    }
    document.body.removeChild(textArea);
}

function triggerCopyEffect(btnElement) {
    if (!btnElement) return;
    var originalHTML = btnElement.innerHTML;
    btnElement.classList.add('copied');
    btnElement.innerHTML = '<i class="bi bi-check2"></i> <span>Copied!</span>';
    setTimeout(function() {
        btnElement.classList.remove('copied');
        btnElement.innerHTML = originalHTML;
    }, 2000);
}

function showPaymentToast(msg) {
    var toast = document.getElementById("payment-toast");
    var toastMsg = document.getElementById("payment-toast-msg");
    if (toast && toastMsg) {
        toastMsg.textContent = msg;
        toast.className = "show";
        setTimeout(function() {
            toast.className = "";
        }, 2600);
    }
}

function openPaymentQrModal(imgSrc, title) {
    var modal = document.getElementById('paymentQrModal');
    var modalImg = document.getElementById('paymentQrModalImg');
    var modalTitle = document.getElementById('paymentQrModalTitle');
    if (modal && modalImg && modalTitle) {
        modalImg.src = imgSrc;
        modalTitle.textContent = title;
        modal.classList.add('active');
        document.body.style.overflow = 'hidden';
    }
}

function closePaymentQrModal() {
    var modal = document.getElementById('paymentQrModal');
    if (modal) {
        modal.classList.remove('active');
        document.body.style.overflow = '';
    }
}

document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        closePaymentQrModal();
    }
});
</script>

<?php require_once 'includes/footer.php'; ?>

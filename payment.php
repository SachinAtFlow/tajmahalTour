<?php
/**
 * Payment & Online Booking Checkout Page
 * Fully aligned with Bootstrap 5 utility classes and theme design tokens per AGENTS.md.
 */
$page_title = "Pay Online & Payment Methods - Taj Mahal Tour | 100% Secure & Verified";
require_once 'includes/header.php';
?>

<main class="bg-light min-vh-100">

    <!-- 1. Theme-Consistent Hero Banner with Breadcrumbs -->
    <section id="payment-page-banner" class="position-relative text-white text-center d-flex align-items-center justify-content-center py-5" style="background: linear-gradient(rgba(15, 23, 42, 0.68), rgba(15, 23, 42, 0.76)), url('assets/images/uttarPradesh/tajmahal.avif') center/cover no-repeat; min-height: 280px;">
        <div class="container position-relative z-2 py-4">
            <h1 class="display-4 fw-bold text-white mb-2">Pay Online</h1>
            <p class="text-white-50 mx-auto mb-3" style="max-width: 620px;">
                Transparent, flexible, and instant online payment options for your North India tour &amp; car rental bookings.
            </p>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center mb-0 small">
                    <li class="breadcrumb-item">
                        <a href="index.php" class="text-white-50 text-decoration-none hover-white">
                            <i class="bi bi-house-door me-1"></i> Home
                        </a>
                    </li>
                    <li class="breadcrumb-item active text-white" aria-current="page">Pay Online</li>
                </ol>
            </nav>
        </div>
    </section>

    <!-- Main Checkout Container (2-Column Theme Layout) -->
    <div class="container py-4 py-lg-5">

        <!-- 2. Milestone Stepper (Visual Progress Tracker) -->
        <div class="bg-white rounded-4 border border-light-subtle p-3 p-md-4 shadow-sm mb-4 mb-lg-5">
            <div class="stepper-track position-relative d-flex justify-content-between align-items-center">
                <!-- Step 1: Advance (Active) -->
                <div class="stepper-step active position-relative z-2 d-flex flex-column align-items-center text-center">
                    <div class="stepper-node rounded-circle d-flex align-items-center justify-content-center fw-bold">1</div>
                    <div class="fw-bold text-dark mt-2 small">25% Advance</div>
                    <div class="text-secondary small d-none d-sm-block">Payable Now to Confirm</div>
                </div>

                <!-- Step 2: On Arrival -->
                <div class="stepper-step position-relative z-2 d-flex flex-column align-items-center text-center">
                    <div class="stepper-node rounded-circle d-flex align-items-center justify-content-center fw-bold">2</div>
                    <div class="fw-bold text-dark mt-2 small">50% On Arrival</div>
                    <div class="text-secondary small d-none d-sm-block">At Pickup in Delhi/Agra</div>
                </div>

                <!-- Step 3: Completion -->
                <div class="stepper-step position-relative z-2 d-flex flex-column align-items-center text-center">
                    <div class="stepper-node rounded-circle d-flex align-items-center justify-content-center fw-bold">3</div>
                    <div class="fw-bold text-dark mt-2 small">25% Tour End</div>
                    <div class="text-secondary small d-none d-sm-block">Before Final Drop-off</div>
                </div>
            </div>
        </div>

        <div class="row g-4 g-lg-5">

            <!-- ==========================================
                 LEFT COLUMN: PAYMENT OPTIONS & DETAILS (8 Cols)
                 ========================================== -->
            <div class="col-lg-8">

                <!-- Section Header -->
                <div class="d-flex align-items-center justify-content-between mb-3">
                    <div>
                        <h2 class="fw-bold text-dark fs-4 mb-1">Select Payment Method</h2>
                        <p class="text-secondary small mb-0">Choose your preferred instant online or bank wire method</p>
                    </div>
                    <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-1.5 rounded-pill small fw-semibold">
                        <i class="bi bi-check2-circle me-1"></i> 0% Convenience Fee
                    </span>
                </div>

                <!-- 4 Selectable Payment Method Cards (Native Bootstrap Grid) -->
                <div class="row g-3 mb-4" id="checkout-method-selector">
                    
                    <!-- Method 1: UPI & QR Code (Default Active) -->
                    <div class="col-12 col-md-6">
                        <div class="checkout-method-card bg-white border border-2 border-light-subtle rounded-4 p-3 d-flex align-items-start gap-3 user-select-none cursor-pointer h-100 active" data-target-pane="pane-upi" onclick="selectPaymentMethod(this, 'pane-upi')">
                            <div class="method-icon-box rounded-3 bg-light text-secondary d-flex align-items-center justify-content-center flex-shrink-0 fs-4" style="width: 48px; height: 48px;">
                                <i class="bi bi-qr-code-scan"></i>
                            </div>
                            <div class="flex-grow-1">
                                <div class="fw-bold text-dark mb-1 d-flex align-items-center gap-2">
                                    <span>UPI &amp; QR Code</span>
                                    <span class="badge bg-primary bg-opacity-10 text-primary small" style="font-size: 11px;">Recommended</span>
                                </div>
                                <p class="text-secondary small mb-0">Google Pay, PhonePe, Paytm, BHIM</p>
                            </div>
                            <div class="method-radio-indicator rounded-circle d-flex align-items-center justify-content-center flex-shrink-0"></div>
                        </div>
                    </div>

                    <!-- Method 2: Direct Bank Transfer (NEFT/RTGS) -->
                    <div class="col-12 col-md-6">
                        <div class="checkout-method-card bg-white border border-2 border-light-subtle rounded-4 p-3 d-flex align-items-start gap-3 user-select-none cursor-pointer h-100" data-target-pane="pane-bank" onclick="selectPaymentMethod(this, 'pane-bank')">
                            <div class="method-icon-box rounded-3 bg-light text-secondary d-flex align-items-center justify-content-center flex-shrink-0 fs-4" style="width: 48px; height: 48px;">
                                <i class="bi bi-bank2"></i>
                            </div>
                            <div class="flex-grow-1">
                                <div class="fw-bold text-dark mb-1 d-flex align-items-center gap-2">
                                    <span>Direct Bank Transfer</span>
                                </div>
                                <p class="text-secondary small mb-0">ICICI Bank • NEFT / RTGS / IMPS</p>
                            </div>
                            <div class="method-radio-indicator rounded-circle d-flex align-items-center justify-content-center flex-shrink-0"></div>
                        </div>
                    </div>

                    <!-- Method 3: Cards & PayPal (International) -->
                    <div class="col-12 col-md-6">
                        <div class="checkout-method-card bg-white border border-2 border-light-subtle rounded-4 p-3 d-flex align-items-start gap-3 user-select-none cursor-pointer h-100" data-target-pane="pane-paypal" onclick="selectPaymentMethod(this, 'pane-paypal')">
                            <div class="method-icon-box rounded-3 bg-light text-secondary d-flex align-items-center justify-content-center flex-shrink-0 fs-4" style="width: 48px; height: 48px;">
                                <i class="bi bi-credit-card-2-front-fill"></i>
                            </div>
                            <div class="flex-grow-1">
                                <div class="fw-bold text-dark mb-1 d-flex align-items-center gap-2">
                                    <span>Cards &amp; PayPal</span>
                                    <span class="badge bg-secondary bg-opacity-10 text-secondary small" style="font-size: 11px;">Global</span>
                                </div>
                                <p class="text-secondary small mb-0">Visa, Mastercard, Amex, PayPal</p>
                            </div>
                            <div class="method-radio-indicator rounded-circle d-flex align-items-center justify-content-center flex-shrink-0"></div>
                        </div>
                    </div>

                    <!-- Method 4: Western Union Transfer -->
                    <div class="col-12 col-md-6">
                        <div class="checkout-method-card bg-white border border-2 border-light-subtle rounded-4 p-3 d-flex align-items-start gap-3 user-select-none cursor-pointer h-100" data-target-pane="pane-western" onclick="selectPaymentMethod(this, 'pane-western')">
                            <div class="method-icon-box rounded-3 bg-light text-secondary d-flex align-items-center justify-content-center flex-shrink-0 fs-4" style="width: 48px; height: 48px;">
                                <i class="bi bi-globe-americas"></i>
                            </div>
                            <div class="flex-grow-1">
                                <div class="fw-bold text-dark mb-1 d-flex align-items-center gap-2">
                                    <span>Western Union</span>
                                </div>
                                <p class="text-secondary small mb-0">Worldwide Cash Wire Transfer</p>
                            </div>
                            <div class="method-radio-indicator rounded-circle d-flex align-items-center justify-content-center flex-shrink-0"></div>
                        </div>
                    </div>

                </div>

                <!-- ==========================================
                     DYNAMIC PANES: CONTENT FOR SELECTED METHOD
                     ========================================== -->

                <!-- PANE 1: UPI & QR CODES (Active by Default) -->
                <div class="checkout-panel-card bg-white rounded-4 border border-light-subtle p-4 p-md-5 shadow-sm mb-4 active" id="pane-upi">
                    <div class="d-flex align-items-center justify-content-between mb-3 pb-3 border-bottom border-light-subtle">
                        <div>
                            <h3 class="fw-bold text-dark fs-5 mb-1">
                                <i class="bi bi-lightning-charge-fill text-primary me-1"></i> Scan &amp; Pay Instantly via UPI
                            </h3>
                            <p class="text-secondary small mb-0">Open any UPI app on your phone and scan the verified QR code below</p>
                        </div>
                        <span class="badge bg-primary bg-opacity-10 text-primary fw-semibold small px-3 py-1.5 rounded-pill">
                            Instant Confirmation
                        </span>
                    </div>

                    <!-- 3 QR Cards -->
                    <div class="row g-3 g-md-4 mb-4">
                        <!-- Paytm -->
                        <div class="col-12 col-md-4">
                            <div class="qr-modern-card bg-white rounded-4 border border-light-subtle p-3 text-center h-100 d-flex flex-column justify-content-between">
                                <div>
                                    <div class="fw-bold text-primary small d-flex align-items-center justify-content-center gap-1 mb-1">
                                        <i class="bi bi-wallet2"></i>
                                        <span>Paytm UPI</span>
                                    </div>
                                    <div class="qr-frame-modern bg-light border border-dashed rounded-4 p-3 my-3 position-relative overflow-hidden cursor-pointer" onclick="openPaymentQrModal('assets/images/others/payment/paytm.jpg', 'Paytm UPI QR Code')">
                                        <img src="assets/images/others/payment/paytm.jpg" alt="Paytm QR Code" loading="lazy" class="img-fluid">
                                        <div class="qr-zoom-badge position-absolute fw-semibold">
                                            <i class="bi bi-arrows-fullscreen me-1"></i> Click to Zoom
                                        </div>
                                    </div>
                                    <div class="text-secondary small mb-2" style="font-size: 12px;">Paytm &bull; BHIM &bull; All UPI</div>
                                </div>
                                <button type="button" class="btn-copy-chip btn btn-sm btn-light border border-light-subtle rounded-3 w-100 justify-content-center fw-semibold d-inline-flex align-items-center gap-1" onclick="copyPaymentData('9810723370', this)">
                                    <i class="bi bi-clipboard"></i>
                                    <span>Copy: 9810723370</span>
                                </button>
                            </div>
                        </div>

                        <!-- PhonePe -->
                        <div class="col-12 col-md-4">
                            <div class="qr-modern-card bg-white rounded-4 border border-light-subtle p-3 text-center h-100 d-flex flex-column justify-content-between">
                                <div>
                                    <div class="fw-bold text-primary small d-flex align-items-center justify-content-center gap-1 mb-1">
                                        <i class="bi bi-phone"></i>
                                        <span>PhonePe UPI</span>
                                    </div>
                                    <div class="qr-frame-modern bg-light border border-dashed rounded-4 p-3 my-3 position-relative overflow-hidden cursor-pointer" onclick="openPaymentQrModal('assets/images/others/payment/phonepay.jpg', 'PhonePe UPI QR Code')">
                                        <img src="assets/images/others/payment/phonepay.jpg" alt="PhonePe QR Code" loading="lazy" class="img-fluid">
                                        <div class="qr-zoom-badge position-absolute fw-semibold">
                                            <i class="bi bi-arrows-fullscreen me-1"></i> Click to Zoom
                                        </div>
                                    </div>
                                    <div class="text-secondary small mb-2" style="font-size: 12px;">PhonePe &bull; Bank UPI</div>
                                </div>
                                <button type="button" class="btn-copy-chip btn btn-sm btn-light border border-light-subtle rounded-3 w-100 justify-content-center fw-semibold d-inline-flex align-items-center gap-1" onclick="copyPaymentData('9810723370', this)">
                                    <i class="bi bi-clipboard"></i>
                                    <span>Copy: 9810723370</span>
                                </button>
                            </div>
                        </div>

                        <!-- Google Pay -->
                        <div class="col-12 col-md-4">
                            <div class="qr-modern-card bg-white rounded-4 border border-light-subtle p-3 text-center h-100 d-flex flex-column justify-content-between">
                                <div>
                                    <div class="fw-bold text-primary small d-flex align-items-center justify-content-center gap-1 mb-1">
                                        <i class="bi bi-google"></i>
                                        <span>Google Pay</span>
                                    </div>
                                    <div class="qr-frame-modern bg-light border border-dashed rounded-4 p-3 my-3 position-relative overflow-hidden cursor-pointer" onclick="openPaymentQrModal('assets/images/others/payment/gpay.jpg', 'Google Pay QR Code')">
                                        <img src="assets/images/others/payment/gpay.jpg" alt="Google Pay QR Code" loading="lazy" class="img-fluid">
                                        <div class="qr-zoom-badge position-absolute fw-semibold">
                                            <i class="bi bi-arrows-fullscreen me-1"></i> Click to Zoom
                                        </div>
                                    </div>
                                    <div class="text-secondary small mb-2" style="font-size: 12px;">Google Pay &bull; Any Bank</div>
                                </div>
                                <button type="button" class="btn-copy-chip btn btn-sm btn-light border border-light-subtle rounded-3 w-100 justify-content-center fw-semibold d-inline-flex align-items-center gap-1" onclick="copyPaymentData('9810723370', this)">
                                    <i class="bi bi-clipboard"></i>
                                    <span>Copy: 9810723370</span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- 3-Step Visual Micro-Guide -->
                    <div class="p-3 bg-light rounded-4 border border-light-subtle d-flex flex-column flex-md-row align-items-md-center justify-content-between gap-3 text-secondary small">
                        <div class="d-flex align-items-center gap-2">
                            <span class="badge bg-primary rounded-circle p-1 d-inline-flex justify-content-center align-items-center" style="width: 22px; height: 22px;">1</span>
                            <span>Open any UPI app</span>
                        </div>
                        <i class="bi bi-chevron-right text-muted d-none d-md-block"></i>
                        <div class="d-flex align-items-center gap-2">
                            <span class="badge bg-primary rounded-circle p-1 d-inline-flex justify-content-center align-items-center"
                                    style="width: 22px; height: 22px;">2</span>
                            <span>Scan QR / Enter number</span>
                        </div>
                        <i class="bi bi-chevron-right text-muted d-none d-md-block"></i>
                        <div class="d-flex align-items-center gap-2">
                            <span class="badge bg-primary rounded-circle p-1 d-inline-flex justify-content-center align-items-center" style="width: 22px; height: 22px;">3</span>
                            <span>Share receipt on WhatsApp</span>
                        </div>
                    </div>
                </div>

                <!-- PANE 2: DIRECT BANK TRANSFER (ICICI BANK) -->
                <div class="checkout-panel-card bg-white rounded-4 border border-light-subtle p-4 p-md-5 shadow-sm mb-4" id="pane-bank">
                    <div class="d-flex align-items-center justify-content-between mb-3 pb-3 border-bottom border-light-subtle">
                        <div>
                            <h3 class="fw-bold text-dark fs-5 mb-1">
                                <i class="bi bi-bank2 text-primary me-1"></i> ICICI Bank Official Current Account
                            </h3>
                            <p class="text-secondary small mb-0">Domestic Wire Transfers via NEFT / RTGS / IMPS</p>
                        </div>
                        <span class="badge bg-primary bg-opacity-10 text-primary fw-semibold small px-3 py-1.5 rounded-pill">
                            Verified Current A/C
                        </span>
                    </div>

                    <!-- Virtual Banking Card Display (Styled to Match Dark Luxury Card Theme) -->
                    <div class="virtual-bank-card w-75 mx-auto">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="virtual-card-chip"></div>
                            <span class="badge bg-white bg-opacity-20 text-black px-3 py-1 rounded-pill small fw-bold">
                                ICICI BANK LIMITED
                            </span>
                        </div>
                        <div class="small text-white-50 text-uppercase" style="letter-spacing: 1px;">Account Number</div>
                        <div class="virtual-card-number fw-bold">1024 0150 3656</div>
                        <div class="row g-2 align-items-end">
                            <div class="col-6">
                                <div class="small text-white-50 text-uppercase" style="font-size: 11px;">Account Holder</div>
                                <div class="fw-bold text-white fs-6">ASHU SHARMA</div>
                            </div>
                            <div class="col-6 text-end">
                                <div class="small text-white-50 text-uppercase" style="font-size: 11px;">IFSC Code</div>
                                <div class="fw-bold text-warning fs-6">ICIC0001024</div>
                            </div>
                        </div>
                    </div>

                    <!-- Credential Action Tiles -->
                    <div class="row g-3">
                        <div class="col-12 col-md-6">
                            <div class="p-3 bg-light rounded-4 border border-light-subtle d-flex justify-content-between align-items-center">
                                <div>
                                    <div class="text-secondary small text-uppercase fw-semibold" style="font-size: 11px;">Account Number</div>
                                    <strong class="text-dark fs-6">102401503656</strong>
                                </div>
                                <button type="button" class="btn-copy-chip btn btn-sm btn-light border border-light-subtle rounded-3" onclick="copyPaymentData('102401503656', this)">
                                    <i class="bi bi-clipboard"></i> Copy
                                </button>
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="p-3 bg-light rounded-4 border border-light-subtle d-flex justify-content-between align-items-center">
                                <div>
                                    <div class="text-secondary small text-uppercase fw-semibold" style="font-size: 11px;">IFSC Code</div>
                                    <strong class="text-primary fs-6">ICIC0001024</strong>
                                </div>
                                <button type="button" class="btn-copy-chip btn btn-sm btn-light border border-light-subtle rounded-3" onclick="copyPaymentData('ICIC0001024', this)">
                                    <i class="bi bi-clipboard"></i> Copy
                                </button>
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="p-3 bg-light rounded-4 border border-light-subtle d-flex justify-content-between align-items-center">
                                <div>
                                    <div class="text-secondary small text-uppercase fw-semibold" style="font-size: 11px;">Beneficiary Name</div>
                                    <strong class="text-dark fs-6">Ashu Sharma</strong>
                                </div>
                                <button type="button" class="btn-copy-chip btn btn-sm btn-light border border-light-subtle rounded-3" onclick="copyPaymentData('Ashu Sharma', this)">
                                    <i class="bi bi-clipboard"></i> Copy
                                </button>
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="p-3 bg-light rounded-4 border border-light-subtle d-flex justify-content-between align-items-center">
                                <div>
                                    <div class="text-secondary small text-uppercase fw-semibold" style="font-size: 11px;">Branch &amp; PAN</div>
                                    <strong class="text-dark fs-6">Krishna Nagar &bull; BBXPS4022F</strong>
                                </div>
                                <button type="button" class="btn-copy-chip btn btn-sm btn-light border border-light-subtle rounded-3" onclick="copyPaymentData('BBXPS4022F', this)">
                                    <i class="bi bi-clipboard"></i> Copy
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- PANE 3: CARDS & PAYPAL (INTERNATIONAL) -->
                <div class="checkout-panel-card bg-white rounded-4 border border-light-subtle p-4 p-md-5 shadow-sm mb-4" id="pane-paypal">
                    <div class="d-flex align-items-center justify-content-between mb-3 pb-3 border-bottom border-light-subtle">
                        <div>
                            <h3 class="fw-bold text-dark fs-5 mb-1">
                                <i class="bi bi-credit-card-2-front-fill text-primary me-1"></i> PayPal &amp; International Cards
                            </h3>
                            <p class="text-secondary small mb-0">For overseas travelers paying with Visa, MasterCard, Amex, or PayPal wallet</p>
                        </div>
                        <img src="assets/images/others/payment/paypal.png" alt="PayPal" style="height: 32px; object-fit: contain;">
                    </div>

                    <div class="p-4 bg-light rounded-4 border border-light-subtle mb-3 text-center">
                        <div class="mb-3">
                            <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-1.5 rounded-pill small fw-semibold">
                                Instant Buyer Protection
                            </span>
                        </div>
                        <h4 class="fw-bold text-dark fs-5 mb-2">Secure Online Deposit ($200 USD)</h4>
                        <p class="text-secondary small mb-4 mx-auto" style="max-width: 480px;">
                            You will be safely redirected to PayPal’s encrypted payment gateway. You can pay with your existing PayPal account or any major international credit card without registration.
                        </p>

                        <!-- Verified Direct PayPal Form -->
                        <form target="_blank" action="https://www.paypal.com/cgi-bin/webscr" method="post" class="d-inline-block w-100" style="max-width: 420px;">
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
                            
                            <button type="submit" class="btn btn-primary btn-lg w-100 py-3 fw-bold shadow-sm d-inline-flex align-items-center justify-content-center gap-2">
                                <i class="bi bi-paypal fs-5"></i>
                                <span>Proceed to PayPal ($200 USD)</span>
                            </button>
                        </form>
                    </div>

                    <div class="d-flex align-items-center justify-content-center gap-2 text-secondary small">
                        <i class="bi bi-lock-fill text-primary"></i>
                        <span>End-to-end encrypted checkout powered by PayPal Inc.</span>
                    </div>
                </div>

                <!-- PANE 4: WESTERN UNION TRANSFER -->
                <div class="checkout-panel-card bg-white rounded-4 border border-light-subtle p-4 p-md-5 shadow-sm mb-4" id="pane-western">
                    <div class="d-flex align-items-center justify-content-between mb-3 pb-3 border-bottom border-light-subtle">
                        <div>
                            <h3 class="fw-bold text-dark fs-5 mb-1">
                                <i class="bi bi-globe-americas text-primary me-1"></i> Western Union Wire Transfer
                            </h3>
                            <p class="text-secondary small mb-0">Send funds from your local Western Union branch worldwide</p>
                        </div>
                        <img src="assets/images/others/payment/western-union-logo.png" alt="Western Union" style="height: 32px; object-fit: contain;">
                    </div>

                    <div class="p-4 bg-light rounded-4 border border-light-subtle mb-3">
                        <h4 class="fw-bold text-dark fs-6 mb-2">How Western Union Transfers Work:</h4>
                        <ol class="text-secondary small mb-4 ps-3 lh-lg">
                            <li>Connect with our travel manager on WhatsApp to obtain the authorized beneficiary name &amp; city.</li>
                            <li>Visit any Western Union agent location or pay online on westernunion.com.</li>
                            <li>Share your 10-digit MTCN (Money Transfer Control Number) with our team.</li>
                            <li>Your reservation is confirmed immediately upon MTCN verification.</li>
                        </ol>

                        <a href="<?= function_exists('site_whatsapp_link') ? site_whatsapp_link('Hi, please share Western Union beneficiary details for my tour booking.') : 'https://wa.me/918800722606'; ?>" target="_blank" class="btn btn-outline-dark w-100 py-2.5 fw-semibold d-inline-flex align-items-center justify-content-center gap-2">
                            <i class="bi bi-whatsapp text-success fs-5"></i>
                            <span>Get Beneficiary Details via WhatsApp</span>
                        </a>
                    </div>
                </div>

                <!-- ==========================================
                     STEP 2 ACTION: VERIFY PAYMENT & GET VOUCHER
                     ========================================== -->
                <div class="bg-white rounded-4 border border-light-subtle p-4 shadow-sm my-4">
                    <div class="row align-items-center g-3">
                        <div class="col-md-7">
                            <div class="d-flex align-items-center gap-2 mb-1">
                                <span class="badge bg-primary text-white rounded-pill px-2.5 py-1 small" style="font-size: 11px;">STEP 2</span>
                                <h4 class="fw-bold text-dark fs-6 mb-0">Share Transaction / UTR Number</h4>
                            </div>
                            <p class="text-secondary small mb-0">
                                Enter your payment reference or UTR number below to notify our reservations desk instantly:
                            </p>
                        </div>
                        <div class="col-md-5">
                            <div class="input-group">
                                <input type="text" id="utr-input-field" class="form-control" placeholder="e.g. 412356789012" aria-label="UTR Number">
                                <button class="btn btn-primary fw-semibold d-inline-flex align-items-center gap-1" type="button" onclick="sendUtrToWhatsApp()">
                                    <i class="bi bi-whatsapp"></i>
                                    <span>Verify</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Payment FAQ Accordion -->
                <div class="p-4 bg-white rounded-4 border border-light-subtle shadow-sm mb-4">
                    <div class="d-flex align-items-center gap-2 mb-3">
                        <i class="bi bi-patch-question-fill text-primary fs-5"></i>
                        <h4 class="fw-bold text-dark fs-6 mb-0">Frequently Asked Questions</h4>
                    </div>

                    <div class="accordion accordion-flush" id="checkoutFaq">
                        <div class="accordion-item border-bottom">
                            <h2 class="accordion-header" id="faqOne">
                                <button class="accordion-button collapsed fw-semibold text-dark small py-2.5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFaqOne">
                                    When will I receive my booking voucher and driver details?
                                </button>
                            </h2>
                            <div id="collapseFaqOne" class="accordion-collapse collapse" data-bs-parent="#checkoutFaq">
                                <div class="accordion-body text-secondary small pt-1 pb-3">
                                    You will receive your official booking voucher immediately via WhatsApp &amp; Email upon advance payment confirmation. Driver details and car number are sent 12-24 hours prior to pickup.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item border-bottom">
                            <h2 class="accordion-header" id="faqTwo">
                                <button class="accordion-button collapsed fw-semibold text-dark small py-2.5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFaqTwo">
                                    Are toll taxes, parking, and state entry fees included?
                                </button>
                            </h2>
                            <div id="collapseFaqTwo" class="accordion-collapse collapse" data-bs-parent="#checkoutFaq">
                                <div class="accordion-body text-secondary small pt-1 pb-3">
                                    Yes! All tour quotes and package pricing are fully transparent. Inter-state taxes, toll charges, fuel, and driver allowances are included with zero surprise charges.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faqThree">
                                <button class="accordion-button collapsed fw-semibold text-dark small py-2.5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFaqThree">
                                    What is the cancellation and refund policy?
                                </button>
                            </h2>
                            <div id="collapseFaqThree" class="accordion-collapse collapse" data-bs-parent="#checkoutFaq">
                                <div class="accordion-body text-secondary small pt-1 pb-3">
                                    Cancellations made at least 48 hours before scheduled journey time qualify for a full 100% refund of your advance deposit.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- ==========================================
                 RIGHT COLUMN: PAYMENT GUIDELINES & SUPPORT (4 Cols)
                 ========================================== -->
            <div class="col-lg-4">
                
                <div class="bg-white rounded-4 border border-light-subtle p-4 shadow-sm sticky-top" style="top: 90px; z-index: 10;">
                    
                    <!-- Header -->
                    <div class="d-flex align-items-center justify-content-between mb-3 pb-2 border-bottom border-light-subtle">
                        <div class="d-flex align-items-center gap-2">
                            <i class="bi bi-shield-check text-primary fs-5"></i>
                            <h3 class="fw-bold text-dark fs-5 mb-0">Payment Help &amp; Safety</h3>
                        </div>
                        <span class="badge bg-success bg-opacity-10 text-success small fw-semibold">
                            <i class="bi bi-patch-check-fill me-1"></i> Verified
                        </span>
                    </div>

                    <!-- How Much to Pay Notice -->
                    <div class="p-3 bg-light rounded-3 border border-light-subtle mb-3">
                        <div class="d-flex align-items-center gap-2 mb-1">
                            <i class="bi bi-info-circle-fill text-primary"></i>
                            <strong class="text-dark small">How Much to Pay?</strong>
                        </div>
                        <p class="text-secondary small mb-0 lh-sm" style="font-size: 12.5px;">
                            Please transfer the exact advance deposit amount confirmed by our travel consultant for your vehicle or tour itinerary.
                        </p>
                    </div>

                    <!-- 3 Simple Post-Payment Steps -->
                    <div class="mb-4">
                        <label class="small text-secondary fw-bold text-uppercase d-block mb-2" style="font-size: 11px; letter-spacing: 0.5px;">
                            What To Do After Payment:
                        </label>
                        <div class="d-flex flex-column gap-2.5">
                            <div class="d-flex align-items-start gap-2 mb-2">
                                <span class="badge bg-primary rounded-circle p-1 flex-shrink-0 mt-1 d-inline-flex justify-content-center align-items-center"
                                style="width: 20px; height: 20px; font-size: 10px;">1</span>
                                <div class="small text-secondary lh-sm">
                                    <strong class="text-dark">Save Receipt:</strong> Take a quick screenshot of the success screen or copy the 12-digit UTR / Ref Number.
                                </div>
                            </div>
                            <div class="d-flex align-items-start gap-2 mb-2">
                                <span class="badge bg-primary rounded-circle p-1 flex-shrink-0 mt-1 d-inline-flex justify-content-center align-items-center"
                                style="width: 20px; height: 20px; font-size: 10px;">2</span>
                                <div class="small text-secondary lh-sm">
                                    <strong class="text-dark">Send on WhatsApp:</strong> Share the payment proof or UTR with our desk at <strong><?= function_exists('site_whatsapp') ? site_whatsapp(true) : '+91 88007 22606'; ?></strong>.
                                </div>
                            </div>
                            <div class="d-flex align-items-start gap-2">
                                <span class="badge bg-primary rounded-circle p-1 flex-shrink-0 mt-1 d-inline-flex justify-content-center align-items-center" style="width: 20px; height: 20px; font-size: 10px;">3</span>
                                <div class="small text-secondary lh-sm">
                                    <strong class="text-dark">Instant Voucher:</strong> Receive your confirmed booking voucher, GST invoice, and chauffeur details.
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Instant WhatsApp Help Action -->
                    <div class="mb-3">
                        <a href="<?= function_exists('site_whatsapp_link') ? site_whatsapp_link('Hi, I have completed the payment for my tour booking. Please find the details attached.') : 'https://wa.me/918800722606'; ?>" target="_blank" class="btn btn-primary w-100 py-2.5 fw-bold d-inline-flex align-items-center justify-content-center gap-2 shadow-sm">
                            <i class="bi bi-whatsapp fs-5"></i>
                            <span>Send Receipt on WhatsApp</span>
                        </a>
                    </div>

                    <!-- 24/7 Telephone Direct Dial -->
                    <div class="text-center small text-secondary mb-3">
                        <span>Direct Booking Desk: </span>
                        <a href="<?= function_exists('site_phone') ? site_phone(false) : 'tel:+918800722606'; ?>" class="text-dark fw-bold text-decoration-none"><?= function_exists('site_phone') ? site_phone(true) : '+91 88007 22606'; ?></a>
                    </div>

                    <!-- Trust Seals List -->
                    <div class="pt-3 border-top border-light-subtle">
                        <div class="d-flex align-items-center gap-2 small text-secondary mb-1.5">
                            <i class="bi bi-check-circle-fill text-primary"></i>
                            <span>100% Refund on 48h Advance Cancellation</span>
                        </div>
                        <div class="d-flex align-items-center gap-2 small text-secondary mb-1.5">
                            <i class="bi bi-check-circle-fill text-primary"></i>
                            <span>Official GST Invoicing &amp; Digital Voucher</span>
                        </div>
                        <div class="d-flex align-items-center gap-2 small text-secondary">
                            <i class="bi bi-check-circle-fill text-primary"></i>
                            <span>Zero Hidden Toll, Tax or Parking Charges</span>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>

</main>

<!-- Lightbox Modal for QR Code Zoom -->
<div id="paymentQrModal" class="payment-qr-modal d-none position-fixed align-items-center justify-content-center d-flex" onclick="closePaymentQrModal(event)">
    <div class="payment-qr-modal-content w-100 text-center position-relative" onclick="event.stopPropagation()">
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

<!-- Clean Vanilla JavaScript Interactive Controller -->
<script>
// Tab / Method Switcher
function selectPaymentMethod(cardElement, targetPaneId) {
    const cards = document.querySelectorAll('.checkout-method-card');
    cards.forEach(card => card.classList.remove('active'));
    cardElement.classList.add('active');

    const panes = document.querySelectorAll('.checkout-panel-card');
    panes.forEach(pane => pane.classList.remove('active'));
    
    const targetPane = document.getElementById(targetPaneId);
    if (targetPane) {
        targetPane.classList.add('active');
    }
}

// 1-Click UTR WhatsApp Verification
function sendUtrToWhatsApp() {
    const utrInput = document.getElementById('utr-input-field');
    const utrVal = utrInput ? utrInput.value.trim() : '';
    let msg = 'Hi, I have completed the advance payment for my North India tour booking.';
    if (utrVal) {
        msg += ` My Transaction / UTR Number is: ${utrVal}. Please find the details attached for my voucher generation.`;
    } else {
        msg += ' Please find the payment screenshot attached.';
    }
    const whatsappRaw = '<?= function_exists('getSiteContact') ? (getSiteContact('whatsapp', 'raw') ?: '918800722606') : '918800722606'; ?>';
    const whatsappUrl = `https://wa.me/${whatsappRaw}?text=${encodeURIComponent(msg)}`;
    window.open(whatsappUrl, '_blank');
}

// Clipboard Copy Helper
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
    const textArea = document.createElement("textarea");
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
    const originalHTML = btnElement.innerHTML;
    btnElement.classList.add('copied');
    btnElement.innerHTML = '<i class="bi bi-check2"></i> <span>Copied!</span>';
    setTimeout(function() {
        btnElement.classList.remove('copied');
        btnElement.innerHTML = originalHTML;
    }, 2000);
}

function showPaymentToast(msg) {
    const toast = document.getElementById("payment-toast");
    const toastMsg = document.getElementById("payment-toast-msg");
    if (toast && toastMsg) {
        toastMsg.textContent = msg;
        toast.className = "show";
        setTimeout(function() {
            toast.className = "";
        }, 2600);
    }
}

// Lightbox QR Zoom
function openPaymentQrModal(imgSrc, title) {
    const modal = document.getElementById('paymentQrModal');
    const modalImg = document.getElementById('paymentQrModalImg');
    const modalTitle = document.getElementById('paymentQrModalTitle');
    if (modal && modalImg && modalTitle) {
        modalImg.src = imgSrc;
        modalTitle.textContent = title;
        modal.classList.add('active');
        document.body.style.overflow = 'hidden';
    }
}

function closePaymentQrModal() {
    const modal = document.getElementById('paymentQrModal');
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

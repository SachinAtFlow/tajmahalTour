<?php
/**
 * Contact Inquiry Form & Google Map Component
 */
?>

<!-- Contact Inquiry Form & Google Map Section -->
<section class="py-5 bg-light position-relative" id="contact-form-section">
    <div class="container py-lg-4">
        
        <div class="row g-4 g-lg-5 align-items-stretch">
            
            <!-- Left Column: Inquiry Form -->
            <div class="col-lg-7">
                <div class="bg-white rounded-4 p-4 p-md-5 shadow-sm border border-light-subtle h-100 d-flex flex-column justify-content-between">
                    <div>
                        <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-1.5 rounded-pill fw-semibold small text-uppercase mb-2">
                            <i class="bi bi-chat-dots-fill me-1"></i> SEND A MESSAGE
                        </span>
                        <h3 class="fw-bold text-dark mb-2">Plan Your Tour or Rent a Cab</h3>
                        <p class="text-secondary small mb-4">
                            Fill out the form below. Our dedicated tour planner will review your requirements and send a customized quote within 15 minutes.
                        </p>

                        <form id="site-contact-form" class="row g-3" onsubmit="event.preventDefault(); document.getElementById('contact-success-msg').classList.remove('d-none'); this.reset();">
                            
                            <!-- Full Name -->
                            <div class="col-md-6">
                                <label class="form-label fw-semibold text-dark small">Your Full Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control rounded-3 py-2 px-3 shadow-none border-light-subtle" placeholder="e.g. Rahul Sharma" required>
                            </div>

                            <!-- Email Address -->
                            <div class="col-md-6">
                                <label class="form-label fw-semibold text-dark small">Email Address <span class="text-danger">*</span></label>
                                <input type="email" class="form-control rounded-3 py-2 px-3 shadow-none border-light-subtle" placeholder="e.g. rahul@example.com" required>
                            </div>

                            <!-- Phone / WhatsApp -->
                            <div class="col-md-6">
                                <label class="form-label fw-semibold text-dark small">Phone / WhatsApp Number <span class="text-danger">*</span></label>
                                <input type="tel" class="form-control rounded-3 py-2 px-3 shadow-none border-light-subtle" placeholder="e.g. +91 98765 43210" required>
                            </div>

                            <!-- Service Interested In -->
                            <div class="col-md-6">
                                <label class="form-label fw-semibold text-dark small">Service / Tour Interested In</label>
                                <select class="form-select rounded-3 py-2 px-3 shadow-none border-light-subtle">
                                    <option value="Same Day Agra Tour">Same Day Agra Tour by Car</option>
                                    <option value="Sunrise Taj Mahal Tour">Sunrise Taj Mahal Guided Tour</option>
                                    <option value="Golden Triangle Tour">Golden Triangle (Delhi-Agra-Jaipur)</option>
                                    <option value="Delhi NCR Local Sightseeing">Delhi NCR Local Cab Rental (8h/80km)</option>
                                    <option value="Outstation Cab Rental">Outstation Cab Rental (Round Trip / One Way)</option>
                                    <option value="Rajasthan Tour Package">Royal Rajasthan Heritage Tour</option>
                                    <option value="Himachal Tour Package">Himachal Scenic Mountain Tour</option>
                                    <option value="Custom Itinerary">Customized Multi-Day Holiday Itinerary</option>
                                </select>
                            </div>

                            <!-- Travel Date -->
                            <div class="col-md-6">
                                <label class="form-label fw-semibold text-dark small">Estimated Travel Date</label>
                                <input type="date" class="form-control rounded-3 py-2 px-3 shadow-none border-light-subtle">
                            </div>

                            <!-- Number of Travelers -->
                            <div class="col-md-6">
                                <label class="form-label fw-semibold text-dark small">Number of Travelers</label>
                                <input type="number" min="1" max="50" class="form-control rounded-3 py-2 px-3 shadow-none border-light-subtle" placeholder="2">
                            </div>

                            <!-- Message / Requirements -->
                            <div class="col-12">
                                <label class="form-label fw-semibold text-dark small">Pickup Location / Special Preferences</label>
                                <textarea class="form-control rounded-3 py-2 px-3 shadow-none border-light-subtle" rows="4" placeholder="Tell us about hotel pickup details, vehicle type preference (Sedan, Innova, Tempo Traveller), or specific monument requests..."></textarea>
                            </div>

                            <!-- Success Alert -->
                            <div id="contact-success-msg" class="col-12 d-none">
                                <div class="alert alert-success d-flex align-items-center gap-2 rounded-3 py-2 mb-0" role="alert">
                                    <i class="bi bi-check-circle-fill fs-5 text-success"></i>
                                    <div class="small fw-medium">
                                        Thank you! Your message has been received. Our team will contact you shortly via WhatsApp and Email.
                                    </div>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="col-12 mt-4">
                                <button type="submit" class="btn btn-primary rounded-pill px-5 py-2.5 fw-semibold shadow-sm d-inline-flex align-items-center gap-2">
                                    <span>Send Inquiry Message</span>
                                    <i class="bi bi-send-fill small"></i>
                                </button>
                            </div>

                        </form>
                    </div>

                    <div class="mt-4 pt-3 border-top border-light-subtle d-flex flex-wrap align-items-center justify-content-between gap-2 text-secondary small">
                        <span><i class="bi bi-shield-check text-success me-1"></i> 100% Privacy Protected</span>
                        <span><i class="bi bi-clock-history text-primary me-1"></i> Average reply: 15 mins</span>
                    </div>

                </div>
            </div>

            <!-- Right Column: Interactive Google Map & Quick Support Card -->
            <div class="col-lg-5 d-flex flex-column justify-content-between gap-4">
                
                <!-- Google Maps Embed Card -->
                <div class="bg-white rounded-4 p-3 p-md-4 shadow-sm border border-light-subtle flex-grow-1">
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <div>
                            <h5 class="fw-bold text-dark mb-0">Agra Operations Hub</h5>
                            <span class="text-secondary small">Near Taj Mahal East Gate</span>
                        </div>
                        <a href="https://www.google.com/maps/search/?api=1&query=Krishna%20Nagar%2C%20New%20Delhi%2C%20Delhi%20110051" target="_blank" rel="noopener" class="btn btn-outline-primary btn-sm rounded-pill px-3">
                            Open in Maps
                        </a>
                    </div>
                    <div class="rounded-4 overflow-hidden border border-light-subtle shadow-xs" style="height: 310px;">
                        <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3500!2d77.0!3d28.0!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x...%3A0x...!2s...!" 
        width="100%" 
        height="100%" 
        style="border:0;" 
        allowfullscreen="" 
        loading="lazy" 
        referrerpolicy="no-referrer-when-downgrade"
        title="Taj Mahal Tour Agra Office Location">
    </iframe>
</div>
                </div>

                <!-- Fast Direct Contact Card -->
                <div class="bg-white rounded-4 p-4 shadow-sm border border-light-subtle">
                    <h6 class="fw-bold text-dark mb-3 d-flex align-items-center gap-2">
                        <i class="bi bi-lightning-charge-fill text-warning fs-5"></i>
                        <span>Need Instant Cab or Tour Booking?</span>
                    </h6>
                    <p class="text-secondary small mb-3">
                        Speak directly with our senior reservation desk or start an immediate WhatsApp chat for instant driver assignment.
                    </p>
                    <div class="d-flex flex-wrap gap-2">
                        <a href="https://wa.me/918800722606?text=Hi%2C+I+need+urgent+cab%2Ftour+booking." class="btn btn-success btn-sm rounded-pill px-3 py-2 fw-semibold d-inline-flex align-items-center gap-2 shadow-xs fast-contact-btn">
                            <i class="bi bi-whatsapp"></i>
                            <span>WhatsApp: +91 8800722606</span>
                        </a>
                        <a href="tel:+919876543210" class="btn btn-outline-dark btn-sm rounded-pill px-3 py-2 fw-semibold d-inline-flex align-items-center gap-2 fast-contact-btn">
                            <i class="bi bi-telephone"></i>
                            <span>Call: +91 98765 43210</span> 
                        </a>    
                    </div>
                </div>

            </div>

        </div>

    </div>
</section>


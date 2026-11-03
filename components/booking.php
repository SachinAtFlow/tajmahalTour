<!-- Booking & Inquiry Form Section -->
<section class="py-5 bg-light" id="booking">
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card border-0 shadow-sm rounded-4 p-4 p-md-5">
                    <div class="text-center mb-4">
                        <span class="text-primary text-uppercase fw-bold small">Fast Booking Confirmation</span>
                        <h2 class="fw-bold">Reserve Your Tour Today</h2>
                        <p class="text-muted small">Fill out this quick form and our travel expert will confirm your itinerary within 15 minutes.</p>
                    </div>

                    <form class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Your Full Name</label>
                            <input type="text" class="form-control" placeholder="e.g. John Doe" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Email Address</label>
                            <input type="email" class="form-control" placeholder="e.g. john@example.com" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Phone / WhatsApp Number</label>
                            <input type="tel" class="form-control" placeholder="e.g. +91 98765 43210" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Select Tour</label>
                            <select class="form-select">
                                <option>Sunrise Taj Mahal Tour</option>
                                <option>Same Day Agra Tour By Car</option>
                                <option>Agra Tour by Gatimaan Express Train</option>
                                <option>Agra Fort & Mehtab Bagh Sunset</option>
                                <option>Custom / Customized Tour</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Preferred Tour Date</label>
                            <input type="date" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Number of Travelers</label>
                            <input type="number" class="form-control" min="1" value="2">
                        </div>
                        <div class="col-12">
                            <label class="form-label fw-semibold">Special Requests / Pickup Location</label>
                            <textarea class="form-control" rows="3" placeholder="Hotel name or airport pickup details, dietary needs, etc."></textarea>
                        </div>
                        <div class="col-12 text-center mt-4">
                            <button type="submit" class="btn btn-warning btn-lg fw-semibold px-5 rounded-pill shadow-sm">
                                <i class="bi bi-send-check me-1"></i> Send Booking Request
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


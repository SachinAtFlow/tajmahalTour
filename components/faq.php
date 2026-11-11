<?php
/**
 * Frequently Asked Questions (FAQ) Component
 * Clean, Minimalist & Modern Accordion matching project theme.
 */
require_once __DIR__ . '/../data/faqData.php';
?>

<!-- FAQ Section -->
<section class="py-5 bg-white position-relative" id="faq">
    <div class="container py-lg-4">
        
        <!-- Section Header -->
        <div class="text-center mb-4 mb-lg-5">
            <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-2 rounded-pill fw-semibold mb-2">
                <i class="bi bi-question-circle-fill me-1"></i> GOT QUESTIONS?
            </span>
            <h2 class="display-6 fw-bold text-dark mb-2">
                Frequently Asked Questions
            </h2>
            <p class="text-secondary mx-auto mb-0" style="max-width: 620px;">
                Quick answers to common questions about our Agra tours, vehicle fleet, tickets, timings, and booking policies.
            </p>
        </div>

        <!-- Accordion Container -->
        <div class="row justify-content-center">
            <div class="col-lg-9 col-xl-8">
                
                <div class="accordion" id="travelFaqAccordion">
                    <?php if (!empty($faqData)): ?>
                        <?php foreach ($faqData as $faq): ?>
                            <?php $isFirst = ($faq['id'] === 1); ?>
                            <div class="accordion-item shadow-xs border border-light-subtle rounded-4 mb-3 overflow-hidden bg-white">
                                <h3 class="accordion-header" id="faqHeading<?php echo $faq['id']; ?>">
                                    <button 
                                        class="accordion-button fw-semibold px-4 py-3 bg-white text-dark shadow-none rounded-4 <?php echo $isFirst ? '' : 'collapsed'; ?>" 
                                        type="button" 
                                        data-bs-toggle="collapse" 
                                        data-bs-target="#faqCollapse<?php echo $faq['id']; ?>" 
                                        aria-expanded="<?php echo $isFirst ? 'true' : 'false'; ?>" 
                                        aria-controls="faqCollapse<?php echo $faq['id']; ?>"
                                    >
                                        <?php echo htmlspecialchars($faq['question']); ?>
                                    </button>
                                </h3>
                                <div 
                                    id="faqCollapse<?php echo $faq['id']; ?>" 
                                    class="accordion-collapse collapse <?php echo $isFirst ? 'show' : ''; ?>" 
                                    aria-labelledby="faqHeading<?php echo $faq['id']; ?>" 
                                    data-bs-parent="#travelFaqAccordion"
                                >
                                    <div class="accordion-body px-4 pt-2 pb-4 text-secondary lh-base">
                                        <?php echo htmlspecialchars($faq['answer']); ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>

                <!-- Bottom Help & Support Callout -->
                <div class="mt-4 p-4 rounded-4 bg-light text-center border border-light-subtle shadow-xs">
                    <h6 class="fw-bold text-dark mb-1">Still have questions about your journey?</h6>
                    <p class="text-secondary small mb-3">Our dedicated travel desk is available 24/7 to assist with itineraries and questions.</p>
                    <a 
                        href="<?= function_exists('site_whatsapp_link') ? site_whatsapp_link('Hello Taj Mahal Tour, I have a question about your tours.') : 'https://wa.me/919810723370'; ?>" 
                        target="_blank" 
                        class="btn btn-primary btn-sm rounded-pill px-4 py-2 fw-semibold d-inline-flex align-items-center gap-2 shadow-sm"
                    >
                        <i class="bi bi-whatsapp"></i>
                        <span>Chat With Travel Expert</span>
                    </a>
                </div>

            </div>
        </div>

    </div>
</section>


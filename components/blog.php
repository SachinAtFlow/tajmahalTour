<?php
/**
 * Travel Blog & Guides Component
 * Minimalist, Clean & Modern Blog Section displaying n-number of travel articles.
 */
require_once __DIR__ . '/../data/blogData.php';
?>

<!-- Latest Travel Guides & Blog Section -->
<section class="py-5 bg-light position-relative" id="travel-blog">
    <div class="container py-lg-4">

        <!-- Section Header -->
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-end mb-4 mb-lg-5 gap-3">
            <div>
                <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-2 rounded-pill fw-semibold mb-2">
                    <i class="bi bi-journal-richtext me-1"></i> TRAVEL INSIGHTS & STORIES
                </span>
                <h2 class="display-6 fw-bold text-dark mb-2">
                    Latest Travel Guides & Articles
                </h2>
                <p class="text-secondary mb-0" style="max-width: 620px;">
                    Expert itineraries, monument guides, and local chauffeur tips to inspire your next North India adventure.
                </p>
            </div>
            <div class="flex-shrink-0">
                <a href="blog.php" class="btn btn-outline-primary rounded-pill px-4 py-2 fw-semibold d-inline-flex align-items-center gap-2">
                    <span>View All Articles</span>
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>

        <!-- Dynamic Blog Cards Grid (Matching Featured Tour Card UI) -->
        <div class="row g-4">
            <?php if (!empty($blogPosts)): ?>
                <?php foreach ($blogPosts as $post): ?>
                    <?php 
                        $tag = htmlspecialchars($post['tag'] ?? strtoupper($post['category'] ?? 'TRAVEL GUIDE'));
                        $postLink = htmlspecialchars($post['link'] ?? '#booking');
                    ?>
                    <div class="col-12 col-sm-6 col-lg-3">
                        <article class="tour-bestseller-card">
                            
                            <!-- 1. Image -->
                            <a href="<?= $postLink; ?>" class="tour-bestseller-media" tabindex="-1" aria-hidden="true">
                                <img 
                                    src="<?= htmlspecialchars($post['image']); ?>" 
                                    alt="<?= htmlspecialchars($post['title']); ?>" 
                                    loading="lazy"
                                >
                            </a>

                            <!-- Content Body (Seamlessly below image, zero jitter) -->
                            <div class="tour-bestseller-body p-3">
                                <div>
                                    <!-- 2. Tag / Category -->
                                    <span class="text-uppercase text-secondary fw-semibold d-block mb-1" style="font-size: 11px; letter-spacing: 0.05em;">
                                        <?= $tag; ?>
                                    </span>

                                    <!-- 3. Title -->
                                    <h6 class="fw-bold text-dark mb-1 text-truncate" title="<?= htmlspecialchars($post['title']); ?>" style="font-size: 0.98rem; line-height: 1.35;">
                                        <a href="<?= $postLink; ?>" class="text-dark text-decoration-none">
                                            <?= htmlspecialchars($post['title']); ?>
                                        </a>
                                    </h6>

                                    <!-- 4. Subtitle / Description (with orange keyword highlight) -->
                                    <p class="small text-secondary mb-2 text-truncate" style="font-size: 12.5px; line-height: 1.4;">
                                        <?= $post['subtitle'] ?? htmlspecialchars($post['description'] ?? ''); ?>
                                    </p>

                                    <!-- 5. Published Date & 6. Read Time -->
                                    <div class="d-flex align-items-center gap-3 pt-2 border-top border-light-subtle text-secondary small" style="font-size: 11.5px;">
                                        <span class="d-inline-flex align-items-center gap-1 min-w-0 text-truncate">
                                            <i class="bi bi-calendar3 opacity-75"></i>
                                            <span><?= htmlspecialchars($post['date']); ?></span>
                                        </span>
                                        <span class="d-inline-flex align-items-center gap-1 min-w-0 text-truncate">
                                            <i class="bi bi-clock opacity-75"></i>
                                            <span><?= htmlspecialchars($post['read_time']); ?></span>
                                        </span>
                                    </div>

                                    <!-- 7. Action Link (Read Article) -->
                                    <div class="pt-2 mt-1">
                                        <a href="<?= $postLink; ?>" class="text-dark fw-bold text-decoration-none small d-inline-flex align-items-center gap-1 hover-primary" style="font-size: 12px;">
                                            <span>Read article</span>
                                            <i class="bi bi-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </article>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>

    </div>
</section>


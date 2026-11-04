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

        <!-- Dynamic Blog Cards Grid (Supports n-number of cards) -->
        <div class="row g-4">
            <?php if (!empty($blogPosts)): ?>
                <?php foreach ($blogPosts as $post): ?>
                    <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                        <article class="blog-card shadow-xs">
                            
                            <!-- Card Thumbnail Media & Category Badge -->
                            <div class="blog-card-media">
                                <a href="<?php echo htmlspecialchars($post['link']); ?>" tabindex="-1" aria-hidden="true">
                                    <img 
                                        src="<?php echo htmlspecialchars($post['image']); ?>" 
                                        alt="<?php echo htmlspecialchars($post['title']); ?>" 
                                        loading="lazy"
                                    >
                                </a>
                                <?php if (!empty($post['category'])): ?>
                                    <span class="blog-card-badge">
                                        <?php echo htmlspecialchars($post['category']); ?>
                                    </span>
                                <?php endif; ?>
                            </div>

                            <!-- Card Content Body -->
                            <div class="blog-card-body">
                                
                                <!-- Meta Information: Date & Reading Time -->
                                <div class="d-flex align-items-center gap-2 text-secondary small mb-2">
                                    <span class="d-inline-flex align-items-center gap-1">
                                        <i class="bi bi-calendar3 text-primary"></i>
                                        <span><?php echo htmlspecialchars($post['date']); ?></span>
                                    </span>
                                    <span class="text-muted opacity-50">&bull;</span>
                                    <span class="d-inline-flex align-items-center gap-1">
                                        <i class="bi bi-clock text-primary"></i>
                                        <span><?php echo htmlspecialchars($post['read_time']); ?></span>
                                    </span>
                                </div>

                                <!-- Blog Title -->
                                <h3 class="blog-card-title mb-2 line-clamp-2">
                                    <a href="<?php echo htmlspecialchars($post['link']); ?>" class="text-decoration-none text-reset">
                                        <?php echo htmlspecialchars($post['title']); ?>
                                    </a>
                                </h3>

                                <!-- Short Excerpt / Description -->
                                <p class="text-secondary small mb-4 line-clamp-2 flex-grow-1">
                                    <?php echo htmlspecialchars($post['description']); ?>
                                </p>

                                <!-- Footer Action Button -->
                                <div class="pt-3 border-top border-light-subtle d-flex align-items-center justify-content-between">
                                    <a 
                                        href="<?php echo htmlspecialchars($post['link']); ?>" 
                                        class="btn btn-outline-primary btn-sm rounded-pill px-3 py-1.5 fw-semibold d-inline-flex align-items-center gap-1 text-nowrap"
                                        aria-label="Read full article: <?php echo htmlspecialchars($post['title']); ?>"
                                    >
                                        <span>Read Article</span>
                                        <i class="bi bi-arrow-right"></i>
                                    </a>
                                    <span class="text-muted small">
                                        <i class="bi bi-bookmark text-secondary opacity-75"></i>
                                    </span>
                                </div>

                            </div>

                        </article>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>

    </div>
</section>


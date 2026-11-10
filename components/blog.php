<?php
/**
 * Travel Blog & Guides Component
 * File: components/blog.php
 * 
 * Minimalist, Clean & Modern Blog Section displaying curated North India travel articles
 * aligned with the website's light luxury theme.
 */

require_once __DIR__ . '/../data/blogData.php';

$maxBlogPosts = $blog_limit ?? 4;
$homeBlogPosts = !empty($blogPosts) ? array_slice($blogPosts, 0, $maxBlogPosts) : [];
?>

<!-- Latest Travel Guides & Blog Section -->
<section class="py-5 bg-light position-relative" id="travel-blog" aria-label="Latest Travel Guides and Articles">
    <div class="container py-lg-4">

        <!-- Section Header -->
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-end mb-4 mb-lg-5 gap-3">
            <div>
                <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-2 rounded-pill fw-semibold mb-2 d-inline-flex align-items-center gap-2">
                    <i class="bi bi-journal-richtext"></i>
                    <span>TRAVEL STORIES &amp; GUIDES</span>
                </span>
                <h2 class="display-6 fw-bold text-dark mb-2">
                    Latest Travel Guides &amp; Articles
                </h2>
                <p class="text-secondary mb-0" style="max-width: 620px;">
                    Curated monument itineraries, highway secrets, and insider chauffeur tips across North India.
                </p>
            </div>
            <div class="flex-shrink-0">
                <a href="<?= function_exists('theme_url') ? theme_url('blog/index.php') : 'blog/index.php'; ?>" class="btn btn-outline-primary rounded-pill px-4 py-2 fw-semibold d-inline-flex align-items-center gap-2 hover-lift">
                    <span>View All Articles</span>
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>

        <!-- Dynamic Blog Cards Grid (Theme-Consistent Clean Light Cards) -->
        <div class="row g-4">
            <?php if (!empty($homeBlogPosts)): ?>
                <?php foreach ($homeBlogPosts as $post): ?>
                    <?php 
                        $rawTag = !empty($post['tag']) ? $post['tag'] : (!empty($post['category']) ? strtoupper($post['category']) : 'TRAVEL GUIDE');
                        $tag = htmlspecialchars($rawTag);
                        
                        $rawLink = !empty($post['slug']) ? 'blog/specificBlogTemplate.php?slug=' . urlencode($post['slug']) : ($post['link'] ?? 'blog/index.php');
                        $postLink = htmlspecialchars(function_exists('theme_url') ? theme_url($rawLink) : $rawLink);
                        
                        $rawImg = !empty($post['image']) ? $post['image'] : 'assets/images/uttarPradesh/tajmahal.avif';
                        $postImage = htmlspecialchars(function_exists('theme_url') ? theme_url($rawImg) : $rawImg);
                        
                        $date = htmlspecialchars($post['date'] ?? '12 Jun, 2026');
                        $readTime = htmlspecialchars($post['read_time'] ?? '5 min read');
                        $author = htmlspecialchars($post['author'] ?? 'Editorial Team');
                        $desc = htmlspecialchars($post['description'] ?? $post['subtitle'] ?? 'Discover essential tips, road timings, and cultural secrets for an unforgettable trip.');
                    ?>
                    <div class="col-12 col-sm-6 col-lg-3">
                        <article class="theme-blog-card h-100 overflow-hidden d-flex flex-column text-decoration-none">
                            
                            <!-- Media Thumbnail with Floating Badges -->
                            <div class="theme-blog-media">
                                <!-- Floating Category / Tag (Top-Left) -->
                                <span class="theme-blog-category-badge position-absolute z-3 fw-bold rounded-pill d-inline-flex align-items-center">
                                    <span class="badge-dot rounded-circle"></span>
                                    <span><?= $tag; ?></span>
                                </span>

                                <!-- Floating Read Time (Top-Right) -->
                                <span class="theme-blog-time-badge position-absolute z-3 fw-semibold rounded-pill d-inline-flex align-items-center">
                                    <i class="bi bi-clock text-warning"></i>
                                    <span><?= $readTime; ?></span>
                                </span>

                                <a href="<?= $postLink; ?>" class="d-block w-100 h-100" tabindex="-1" aria-hidden="true">
                                    <img 
                                        src="<?= $postImage; ?>" 
                                        alt="<?= htmlspecialchars($post['title'] ?? 'Travel Guide'); ?>" 
                                        loading="lazy"
                                        decoding="async"
                                    >
                                </a>
                            </div>

                            <!-- Card Content Body -->
                            <div class="theme-blog-body d-flex flex-column flex-grow-1">
                                
                                <!-- Meta Row: Date & Author -->
                                <div class="theme-blog-meta d-flex align-items-center justify-content-between">
                                    <span class="d-inline-flex align-items-center gap-1">
                                        <i class="bi bi-calendar3 text-primary opacity-75"></i>
                                        <span><?= $date; ?></span>
                                    </span>
                                    <span class="d-inline-flex align-items-center gap-1 ms-auto">
                                        <i class="bi bi-person text-secondary opacity-75"></i>
                                        <span><?= $author; ?></span>
                                    </span>
                                </div>

                                <!-- Post Title (Clamped to 2 lines) -->
                                <h3 class="theme-blog-title text-line-clamp-2 fw-bold overflow-hidden">
                                    <a href="<?= $postLink; ?>" class="text-decoration-none text-dark" title="<?= htmlspecialchars($post['title'] ?? ''); ?>">
                                        <?= htmlspecialchars($post['title'] ?? ''); ?>
                                    </a>
                                </h3>

                                <!-- Post Excerpt (Clamped to 2 lines) -->
                                <p class="theme-blog-excerpt text-line-clamp-2 overflow-hidden">
                                    <?= $desc; ?>
                                </p>

                                <!-- Card Footer: Interactive CTA Link & Arrow Circle -->
                                <div class="theme-blog-footer d-flex align-items-center justify-content-between">
                                    <a href="<?= $postLink; ?>" class="theme-blog-cta-text text-decoration-none fw-bold d-inline-flex align-items-center" title="Read full guide">
                                        <span>Read Article</span>
                                        <i class="bi bi-arrow-right"></i>
                                    </a>
                                    <a href="<?= $postLink; ?>" class="theme-blog-arrow-circle text-decoration-none rounded-circle d-inline-flex align-items-center justify-content-center" tabindex="-1" aria-hidden="true">
                                        <i class="bi bi-arrow-up-right"></i>
                                    </a>
                                </div>

                            </div>

                        </article>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>

    </div>
</section>

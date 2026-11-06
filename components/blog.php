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
                <a href="<?= function_exists('theme_url') ? theme_url('blog/index.php') : 'blog/index.php'; ?>" class="btn btn-outline-primary rounded-pill px-4 py-2 fw-semibold d-inline-flex align-items-center gap-2">
                    <span>View All Articles</span>
                    <i class="bi bi-arrow-right"></i>
                </a>
            </div>
        </div>

        <!-- Dynamic Blog Cards Grid (Matching Featured Tour Card UI) -->
        <div class="row g-4">
            <?php 
                $homeBlogPosts = !empty($blogPosts) ? array_slice($blogPosts, 0, 4) : [];
            ?>
            <?php if (!empty($homeBlogPosts)): ?>
                <?php foreach ($homeBlogPosts as $post): ?>
                    <?php 
                        $tag = htmlspecialchars($post['tag'] ?? strtoupper($post['category'] ?? 'TRAVEL GUIDE'));
                        $rawLink = !empty($post['slug']) ? 'blog/specificBlogTemplate.php?slug=' . urlencode($post['slug']) : ($post['link'] ?? 'blog/index.php');
                        $postLink = htmlspecialchars(function_exists('theme_url') ? theme_url($rawLink) : $rawLink);
                        $postImage = htmlspecialchars(function_exists('theme_url') ? theme_url($post['image']) : $post['image']);
                    ?>
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="dark-tour-card">
                            
                            <!-- Top Media Area with Floating Tag & Seamless Bottom Fade -->
                            <div class="dark-tour-media">
                                
                                <!-- Floating Tag Badge (Top-Left) -->
                                <?php if (!empty($tag)): ?>
                                    <span class="position-absolute top-0 start-0 m-3 z-3 badge rounded-pill bg-dark bg-opacity-75 text-white border border-light border-opacity-25 px-3 py-2 fw-semibold shadow-sm d-inline-flex align-items-center" style="backdrop-filter: blur(8px); -webkit-backdrop-filter: blur(8px); font-size: 11px; letter-spacing: 0.05em;">
                                        <?= $tag; ?>
                                    </span>
                                <?php endif; ?>

                                <a href="<?= $postLink; ?>" tabindex="-1" aria-hidden="true" class="d-block w-100 h-100">
                                    <img 
                                        src="<?= $postImage; ?>" 
                                        alt="<?= htmlspecialchars($post['title'] ?? ''); ?>" 
                                        loading="lazy"
                                    >
                                </a>
                                <!-- Seamless Bottom Gradient Fade into Card Body -->
                                <div class="dark-tour-fade"></div>
                            </div>

                            <!-- Card Content Body -->
                            <div class="dark-tour-body">
                                <div>
                                    <!-- Title -->
                                    <div class="d-flex align-items-start justify-content-between gap-2 mb-1">
                                        <h5 class="dark-tour-title text-truncate-2">
                                            <a href="<?= $postLink; ?>" title="<?= htmlspecialchars($post['title'] ?? ''); ?>">
                                                <?= htmlspecialchars($post['title'] ?? ''); ?>
                                            </a>
                                        </h5>
                                    </div>

                                    <!-- 2-Line Subtitle / Description -->
                                    <p class="dark-tour-desc">
                                        <?= htmlspecialchars($post['description'] ?? ''); ?>
                                    </p>

                                    <!-- Spec Pill Badges Row (Single Row with flex-nowrap & text-nowrap) -->
                                    <div class="dark-tour-pills d-flex align-items-center flex-nowrap gap-2 mb-3">
                                        <!-- Date Pill -->
                                        <span class="dark-tour-pill text-nowrap">
                                            <i class="bi bi-calendar3 opacity-75"></i>
                                            <span><?= htmlspecialchars($post['date'] ?? ''); ?></span>
                                        </span>
                                        <!-- Read Time Pill -->
                                        <span class="dark-tour-pill text-nowrap">
                                            <i class="bi bi-clock opacity-75"></i>
                                            <span><?= htmlspecialchars($post['read_time'] ?? ''); ?></span>
                                        </span>
                                    </div>
                                </div>

                                <!-- Solid White "Read article" Full-Width CTA Button -->
                                <a href="<?= $postLink; ?>" class="btn-dark-tour-cta">
                                    Read article
                                </a>

                            </div>

                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>

    </div>
</section>


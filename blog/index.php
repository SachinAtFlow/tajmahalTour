<?php
/**
 * Master Blog Page
 * File: blog/index.php
 * 
 * Curated Travel Articles & Guides matching the modern Minimalist Layout
 * with Featured Post Hero & Latest Posts 4-Grid Card Container.
 */

$page_title = "Our Blog - North India Travel Guides & Chauffeur Stories | Taj Mahal Tour";
require_once __DIR__ . '/blogData.php';
require_once __DIR__ . '/../includes/header.php';

$featuredPost = get_featured_blog_post();
$latestPosts = get_latest_blog_posts(4, $featuredPost['id'] ?? null);
$allPosts = get_all_blog_posts();
?>

<main id="blog-master-page">

    <!-- 1. Breadcrumb Bar -->
    <div class="bg-light border-bottom py-3" id="blog-breadcrumb">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 small">
                    <li class="breadcrumb-item">
                        <a href="<?= theme_url('index.php'); ?>" class="text-decoration-none text-secondary">
                            <i class="bi bi-house-door me-1"></i> Home
                        </a>
                    </li>
                    <li class="breadcrumb-item active text-primary fw-semibold" aria-current="page">
                        Our Blog
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- 2. Main Blog Showcase Section (Matching Provided Design) -->
    <section class="py-5 bg-white" id="our-blog-showcase">
        <div class="container py-lg-3">

            <!-- Page Title -->
            <div class="mb-4 mb-lg-5">
                <h1 class="display-5 fw-bold text-dark mb-0 font-serif">
                    Our Blog
                </h1>
            </div>

            <!-- Top Featured Post Area (2 Columns: Content Left, Large Rounded Image Right) -->
            <?php if (!empty($featuredPost)): ?>
                <?php 
                    $featSlug = $featuredPost['slug'] ?? '';
                    $featLink = theme_url('blog/specificBlogTemplate.php?slug=' . urlencode($featSlug));
                    $featImg = theme_url($featuredPost['image']);
                ?>
                <div class="row align-items-center g-4 g-lg-5 mb-5" id="blog-featured-card">
                    <!-- Left: Metadata, Heading, Excerpt & Button -->
                    <div class="col-lg-6 order-2 order-lg-1">
                        <!-- Date with Clock Icon -->
                        <div class="d-flex align-items-center gap-2 text-secondary small fw-medium mb-3">
                            <i class="bi bi-clock opacity-75"></i>
                            <span><?= htmlspecialchars($featuredPost['date'] ?? '12 Jun, 2026'); ?></span>
                            <span class="mx-1 opacity-50">&bull;</span>
                            <span class="badge bg-primary bg-opacity-10 text-primary rounded-pill px-2.5 py-1">
                                <?= htmlspecialchars($featuredPost['tag'] ?? 'FEATURED'); ?>
                            </span>
                        </div>

                        <!-- Main Title -->
                        <h2 class="display-6 fw-bold text-dark mb-3 lh-sm">
                            <a href="<?= $featLink; ?>" class="text-decoration-none text-dark hover-primary transition-all">
                                <?= htmlspecialchars($featuredPost['title']); ?>
                            </a>
                        </h2>

                        <!-- Excerpt Description -->
                        <p class="text-secondary lead fs-6 mb-4 lh-base" style="max-width: 560px;">
                            <?= htmlspecialchars($featuredPost['excerpt'] ?? $featuredPost['description'] ?? ''); ?>
                        </p>

                        <!-- "Read More" Button -->
                        <div>
                            <a href="<?= $featLink; ?>" class="btn btn-outline-dark rounded-3 px-4 py-2 fw-medium d-inline-flex align-items-center gap-2 shadow-sm hover-lift">
                                <span>Read More</span>
                                <i class="bi bi-arrow-right small"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Right: Large Rounded Media Image -->
                    <div class="col-lg-6 order-1 order-lg-2">
                        <div class="position-relative overflow-hidden shadow-sm" style="border-radius: 24px;">
                            <a href="<?= $featLink; ?>" class="d-block text-decoration-none">
                                <img 
                                    src="<?= $featImg; ?>" 
                                    alt="<?= htmlspecialchars($featuredPost['title']); ?>" 
                                    class="w-100 object-fit-cover hover-scale"
                                    style="height: 380px; min-height: 280px; transition: transform 0.4s ease;"
                                    loading="eager"
                                >
                            </a>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <!-- Bottom Section: Latest Posts (Contained in a Soft Light Card Box) -->
            <div class="bg-light rounded-4 p-4 p-md-5 mt-4 border border-light-subtle shadow-sm" id="blog-latest-posts-box">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h2 class="h3 fw-bold text-dark mb-0 font-serif">
                        Latest Posts
                    </h2>
                    <span class="text-secondary small">
                        Showing <?= count($latestPosts); ?> recent stories
                    </span>
                </div>

                <!-- 4-Card Grid (Matching Provided Layout) -->
                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4">
                    <?php if (!empty($latestPosts)): ?>
                        <?php foreach ($latestPosts as $post): ?>
                            <?php 
                                $postLink = theme_url('blog/specificBlogTemplate.php?slug=' . urlencode($post['slug']));
                                $postImage = theme_url($post['image']);
                            ?>
                            <div class="col">
                                <article class="card h-100 border-0 bg-transparent text-start group-hover-parent">
                                    <!-- Image Thumbnail with Rounded Corners -->
                                    <div class="overflow-hidden rounded-3 mb-3 position-relative shadow-2xs" style="border-radius: 16px;">
                                        <a href="<?= $postLink; ?>" class="d-block overflow-hidden" tabindex="-1">
                                            <img 
                                                src="<?= $postImage; ?>" 
                                                alt="<?= htmlspecialchars($post['title']); ?>" 
                                                class="w-100 object-fit-cover hover-scale"
                                                style="height: 180px; border-radius: 16px; transition: transform 0.35s ease;"
                                                loading="lazy"
                                            >
                                        </a>
                                    </div>

                                    <!-- Title (2-Line Clamped) -->
                                    <h3 class="h6 fw-bold mb-2 lh-base" style="min-height: 2.6rem;">
                                        <a href="<?= $postLink; ?>" class="text-decoration-none text-dark hover-primary transition-all text-truncate-2">
                                            <?= htmlspecialchars($post['title']); ?>
                                        </a>
                                    </h3>

                                    <!-- Date with Clock Icon -->
                                    <div class="d-flex align-items-center gap-1 text-muted small mt-auto">
                                        <i class="bi bi-clock opacity-75"></i>
                                        <span><?= htmlspecialchars($post['date'] ?? '24 Jun, 2026'); ?></span>
                                    </div>
                                </article>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>

            <!-- All Blog Articles Archive (Clean & Modular Grid) -->
            <?php if (count($allPosts) > 5): ?>
                <div class="mt-5 pt-4" id="all-articles-archive">
                    <div class="d-flex align-items-center justify-content-between mb-4 border-bottom pb-3">
                        <h3 class="h4 fw-bold text-dark mb-0">
                            More Travel Guides & Road Itineraries
                        </h3>
                    </div>

                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                        <?php foreach (array_slice($allPosts, 5) as $morePost): ?>
                            <?php 
                                $moreLink = theme_url('blog/specificBlogTemplate.php?slug=' . urlencode($morePost['slug']));
                                $moreImg = theme_url($morePost['image']);
                            ?>
                            <div class="col">
                                <div class="card h-100 border rounded-4 overflow-hidden shadow-2xs hover-lift transition-all">
                                    <div class="position-relative overflow-hidden" style="height: 200px;">
                                        <img src="<?= $moreImg; ?>" alt="<?= htmlspecialchars($morePost['title']); ?>" class="w-100 h-100 object-fit-cover">
                                        <span class="position-absolute top-0 start-0 m-3 badge bg-dark bg-opacity-75 text-white rounded-pill px-3 py-1 small">
                                            <?= htmlspecialchars($morePost['tag'] ?? 'GUIDE'); ?>
                                        </span>
                                    </div>
                                    <div class="card-body p-4 d-flex flex-column">
                                        <div class="d-flex align-items-center gap-2 text-muted small mb-2">
                                            <i class="bi bi-clock"></i>
                                            <span><?= htmlspecialchars($morePost['date']); ?></span>
                                            <span>&bull;</span>
                                            <span><?= htmlspecialchars($morePost['read_time']); ?></span>
                                        </div>
                                        <h4 class="h6 fw-bold text-dark mb-2">
                                            <a href="<?= $moreLink; ?>" class="text-decoration-none text-dark hover-primary">
                                                <?= htmlspecialchars($morePost['title']); ?>
                                            </a>
                                        </h4>
                                        <p class="text-secondary small mb-3 flex-grow-1 text-truncate-2">
                                            <?= htmlspecialchars($morePost['excerpt'] ?? $morePost['description'] ?? ''); ?>
                                        </p>
                                        <a href="<?= $moreLink; ?>" class="btn btn-sm btn-outline-primary rounded-pill mt-auto align-self-start px-3">
                                            Read Guide &rarr;
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>

        </div>
    </section>

    <!-- 3. Client Testimonials Component (Reusable Section) -->
    <?php require_once __DIR__ . '/../components/testimonials.php'; ?>

    <!-- 4. Frequently Asked Questions (FAQ Component) -->
    <?php require_once __DIR__ . '/../components/faq.php'; ?>

    <!-- 5. Final Booking Call-to-Action (CTA Component) -->
    <?php require_once __DIR__ . '/../components/cta.php'; ?>

</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>


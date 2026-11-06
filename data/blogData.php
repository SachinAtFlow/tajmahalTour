<?php
/**
 * Global Blog Data Bridge
 * File: data/blogData.php
 * 
 * Synchronized with blog/blogData.php for unified blog listings across the site.
 */

require_once __DIR__ . '/../blog/blogData.php';

$allBlogs = get_all_blog_posts();
$blogPosts = [];

foreach ($allBlogs as $b) {
    $blogPosts[] = [
        'id'          => $b['id'],
        'slug'        => $b['slug'],
        'title'       => $b['title'],
        'category'    => $b['category'],
        'tag'         => $b['tag'],
        'subtitle'    => $b['subtitle'] ?? '',
        'description' => $b['description'] ?? $b['excerpt'],
        'image'       => $b['image'],
        'date'        => $b['date'],
        'read_time'   => $b['read_time'],
        'author'      => $b['author'],
        'link'        => 'blog/specificBlogTemplate.php?slug=' . urlencode($b['slug'])
    ];
}

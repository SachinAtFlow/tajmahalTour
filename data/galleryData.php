<?php
/**
 * Tour & Fleet Gallery Data Provider
 * File: data/galleryData.php
 * 
 * Dynamically loads and indexes all curated WebP tour memories from assets/images/gallery-images/
 */

if (!function_exists('get_gallery_images')) {
    function get_gallery_images() {
        static $cachedGallery = null;
        if ($cachedGallery !== null) {
            return $cachedGallery;
        }

        $galleryDir = __DIR__ . '/../assets/images/gallery-images/';
        $matched = glob($galleryDir . '*.webp');
        $cachedGallery = [];

        if (!empty($matched)) {
            natsort($matched);
            $matched = array_values($matched);

            foreach ($matched as $idx => $filePath) {
                $fileName = basename($filePath);
                $size = @getimagesize($filePath);
                $width = !empty($size[0]) ? (int)$size[0] : 800;
                $height = !empty($size[1]) ? (int)$size[1] : 600;
                $ratio = ($height > 0) ? round($width / $height, 4) : 1.3333;

                $cachedGallery[] = [
                    'id'     => $idx + 1,
                    'url'    => 'assets/images/gallery-images/' . rawurlencode($fileName),
                    'name'   => 'Tour Memory #' . ($idx + 1),
                    'width'  => $width,
                    'height' => $height,
                    'ratio'  => $ratio
                ];
            }
        }

        return $cachedGallery;
    }
}


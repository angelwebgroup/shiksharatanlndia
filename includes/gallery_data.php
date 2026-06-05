<?php
/**
 * Centralized Gallery Image Management
 * Add images to the $galleryImages array OR upload them to the /gallery-img/ folder.
 */

$galleryImages = [
    "gallery1.jpeg",
    "gallery2.jpeg",
    "gallery3.jpeg",
    // Add more image filenames here
];

/**
 * Get all gallery images.
 * This function merges the manual array with any images found in the gallery-img folder.
 * 
 * @return array List of image paths
 */
function getGalleryImages() {
    global $galleryImages;
    $directory = __DIR__ . '/../gallery-img/';
    $baseUrl = 'gallery-img/';
    
    // Scan directory for images (fallback/automatic addition)
    $files = [];
    if (is_dir($directory)) {
        $scannedFiles = scandir($directory);
        foreach ($scannedFiles as $file) {
            if (in_array(strtolower(pathinfo($file, PATHINFO_EXTENSION)), ['jpg', 'jpeg', 'png', 'webp', 'gif'])) {
                $files[] = [
                    'name' => $file,
                    'time' => filemtime($directory . $file)
                ];
            }
        }
    }
    
    // Sort by modification time (latest first)
    usort($files, function($a, $b) {
        return $b['time'] <=> $a['time'];
    });
    
    // Extract names
    $scannedFileNames = array_column($files, 'name');
    
    // Merge manual array with scanned files and remove duplicates
    // We put scanned files first to prioritize "latest" uploads
    $allImages = array_unique(array_merge($scannedFileNames, $galleryImages));
    
    // Prepend base URL
    return array_map(function($img) use ($baseUrl) {
        return $baseUrl . $img;
    }, $allImages);
}

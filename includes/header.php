<?php
require_once __DIR__ . '/../config/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $config['site_name'] ?> - <?= $config['tagline'] ?></title>
    <meta name="description" content="<?= $config['site_name'] ?> - Discover. Nurture. Empower.">
    <link rel="icon" type="image/webp" href="<?= $config['base_url'] ?>/assets/img/logo.webp">
    
    <!-- Open Graph Tags -->
    <meta property="og:title" content="<?= $config['site_name'] ?>">
    <meta property="og:description" content="<?= $config['site_name'] ?> - <?= $config['tagline'] ?>">
    <meta property="og:image" content="<?= $config['base_url'] ?><?= $config['logo_path'] ?>">
    <meta property="og:url" content="<?= $config['base_url'] ?>">

    <!-- Google Fonts for Shiksha Ratan Poster Theme -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <!-- FontAwesome for additional icons if needed -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    
    <!-- Swiper CSS for Hero Slider -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= $config['base_url'] ?>/assets/css/style.css">

    <!-- Parsley CSS for Form Validation -->
    <style>
        .parsley-errors-list {
            margin: 2px 0 3px;
            padding: 0;
            list-style-type: none;
            font-size: 0.9em;
            line-height: 0.9em;
            opacity: 0;
            color: #c0392b;
            transition: all .3s ease-in;
        }
        .parsley-errors-list.filled {
            opacity: 1;
        }
    </style>
</head>
<body>
<?php include_once __DIR__ . '/navbar.php'; ?>

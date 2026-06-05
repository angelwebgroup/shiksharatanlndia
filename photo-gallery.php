<?php 
require_once __DIR__ . '/includes/gallery_data.php';
require_once __DIR__ . '/includes/header.php'; 
?>

<!-- HERO -->
<section class="page-hero" style="background: radial-gradient(circle at center, rgba(255,140,26,0.15) 0%, var(--text-dark) 70%); background-color: var(--text-dark); color: #fff; padding: 100px 0 80px; text-align: center; border-bottom: 1px solid rgba(255,255,255,0.05);">
  <div class="container">
    <h1 style="font-size: 56px; margin-bottom: 20px; font-weight: 900; text-transform: uppercase; letter-spacing: -1px; color: #fff;">Photo <span style="color: var(--primary);">Gallery</span></h1>
    <div class="breadcrumbs" style="font-size: 14px; font-weight: 600; text-transform: uppercase; letter-spacing: 2px;">
      <a href="<?= $config['base_url'] ?>/index.php" style="color: rgba(255,255,255,0.6); text-decoration: none; transition: color 0.3s;" onmouseover="this.style.color='#fff'" onmouseout="this.style.color='rgba(255,255,255,0.6)'">Home</a> 
      <span style="color: var(--primary); margin: 0 10px;">/</span> 
      <span style="color: #fff;">Gallery</span>
    </div>
  </div>
</section>

<!-- Gallery Grid -->
<section class="section">
  <div class="container">
    <div class="section-header" style="max-width: 800px; margin: 0 auto 50px; text-align: center;">
      <span class="tag">Memories</span>
      <h2>Capturing <span class="text-primary">Moments</span></h2>
      <p style="font-size: 18px; color: var(--text-muted); margin-top: 20px;">
        Explore memorable moments from Shiksha Ratan Talent Hunt events, competitions, award ceremonies, and student achievements.
      </p>
    </div>
    <?php 
    $allImages = getGalleryImages();
    if (!empty($allImages)): 
    ?>
      <div class="gallery-grid">
        <?php foreach ($allImages as $img): ?>
          <div class="gallery-item" data-fancybox="gallery" data-src="<?= $config['base_url'] ?>/<?= $img ?>">
            <img src="<?= $config['base_url'] ?>/<?= $img ?>" alt="Shiksha Ratan Gallery" loading="lazy">
            <div class="gallery-overlay">
              <i class="fas fa-search-plus"></i>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    <?php else: ?>
      <div style="text-align: center; padding: 100px 0;">
        <i class="fas fa-images" style="font-size: 64px; color: var(--bg-subtle); margin-bottom: 20px;"></i>
        <h3>No images found in the gallery.</h3>
        <p>Check back later for new updates!</p>
      </div>
    <?php endif; ?>
  </div>
</section>

<!-- CTA Section -->
<section class="section" style="background-color: var(--text-dark); color: #fff; text-align: center;">
  <div class="container">
    <h2 style="color: #fff; margin-bottom: 20px;">Want to be part of our next event?</h2>
    <p style="color: rgba(255,255,255,0.7); margin-bottom: 40px;">Register now and show your talent to the world!</p>
    <a href="<?= $config['base_url'] ?>/contact.php" class="btn btn-primary">Register Now</a>
  </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

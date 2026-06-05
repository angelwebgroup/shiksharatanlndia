<?php 
require_once __DIR__ . '/includes/gallery_data.php';
require_once __DIR__ . '/includes/header.php'; 
?>

<!-- Page Header -->
<section class="section section-alt" style="padding: 100px 0 60px;">
  <div class="container">
    <div class="section-header" style="max-width: 800px; margin: 0 auto; text-align: center;">
      <div style="margin-bottom: 20px;">
        <a href="<?= $config['base_url'] ?>/index.php" style="color: var(--text-muted); font-size: 14px;"><i class="fas fa-home"></i> Home</a>
        <span style="margin: 0 10px; color: var(--text-muted);">/</span>
        <span style="color: var(--primary); font-size: 14px; font-weight: 600;">Gallery</span>
      </div>
      <span class="tag">Memories</span>
      <h1>Photo <span class="text-primary">Gallery</span></h1>
      <p style="font-size: 18px; color: var(--text-muted); margin-top: 20px;">
        Explore memorable moments from Shiksha Ratan Talent Hunt events, competitions, award ceremonies, and student achievements.
      </p>
    </div>
  </div>
</section>

<!-- Gallery Grid -->
<section class="section">
  <div class="container">
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

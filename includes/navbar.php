<header class="header" id="header">
  <div class="container header-inner">
    <!-- Logo -->
    <a href="<?= $config['base_url'] ?>/index.php" class="logo">
      <img src="<?= $config['base_url'] ?><?= $config['logo_path'] ?>" alt="Shiksha Ratan Logo" class="logo-icon">
    </a>

    <!-- Desktop Nav -->
    <nav class="nav">
      <a href="<?= $config['base_url'] ?>/index.php" class="<?= basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : '' ?>">Home</a>
      <a href="<?= $config['base_url'] ?>/about.php" class="<?= basename($_SERVER['PHP_SELF']) == 'about.php' ? 'active' : '' ?>">About</a>
      <a href="<?= $config['base_url'] ?>/academics.php" class="<?= basename($_SERVER['PHP_SELF']) == 'academics.php' ? 'active' : '' ?>">Syllabus & Dates</a>
      <a href="<?= $config['base_url'] ?>/photo-gallery.php" class="<?= basename($_SERVER['PHP_SELF']) == 'photo-gallery.php' ? 'active' : '' ?>">Gallery</a>
      <a href="<?= $config['base_url'] ?>/faq.php" class="<?= basename($_SERVER['PHP_SELF']) == 'faq.php' ? 'active' : '' ?>">FAQs</a>
      <a href="<?= $config['base_url'] ?>/contact.php" class="<?= basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'active' : '' ?>">Contact</a>
    </nav>

    <div class="header-cta">
      <a href="<?= $config['base_url'] ?>/contact.php" class="btn btn-primary" style="display: inline-flex; align-items: center; gap: 8px;"><i class="fas fa-user-edit"></i> Register Now</a>
    </div>

    <!-- Hamburger -->
    <div class="hamburger" id="hamburger">
      <span></span><span></span><span></span>
    </div>
  </div>
</header>

<!-- Mobile Menu -->
<div class="mobile-menu" id="mobileMenu">
  <a href="<?= $config['base_url'] ?>/index.php" class="<?= basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : '' ?>">Home</a>
  <a href="<?= $config['base_url'] ?>/about.php" class="<?= basename($_SERVER['PHP_SELF']) == 'about.php' ? 'active' : '' ?>">About</a>
  <a href="<?= $config['base_url'] ?>/academics.php" class="<?= basename($_SERVER['PHP_SELF']) == 'academics.php' ? 'active' : '' ?>">Syllabus & Dates</a>
  <a href="<?= $config['base_url'] ?>/photo-gallery.php" class="<?= basename($_SERVER['PHP_SELF']) == 'photo-gallery.php' ? 'active' : '' ?>">Gallery</a>
  <a href="<?= $config['base_url'] ?>/faq.php" class="<?= basename($_SERVER['PHP_SELF']) == 'faq.php' ? 'active' : '' ?>">FAQs</a>
  <a href="<?= $config['base_url'] ?>/contact.php" class="<?= basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'active' : '' ?>">Contact</a>
  <a href="<?= $config['base_url'] ?>/contact.php" class="btn btn-primary" style="margin-top: 15px; padding: 14px 28px; border-radius: 50px; display: inline-flex; align-items: center; justify-content: center; gap: 8px;"><i class="fas fa-user-edit"></i> Register Now</a>
</div>

<?php require_once __DIR__ . '/includes/header.php'; ?>

<!-- HERO -->
<section class="page-hero" style="background: radial-gradient(circle at center, rgba(255,140,26,0.15) 0%, var(--text-dark) 70%); background-color: var(--text-dark); color: #fff; padding: 100px 0 80px; text-align: center; border-bottom: 1px solid rgba(255,255,255,0.05);">
  <div class="container">
    <h1 style="font-size: 56px; margin-bottom: 20px; font-weight: 900; text-transform: uppercase; letter-spacing: -1px; color: #fff;">Frequently Asked <span style="color: var(--primary);">Questions</span></h1>
    <div class="breadcrumbs" style="font-size: 14px; font-weight: 600; text-transform: uppercase; letter-spacing: 2px;">
      <a href="<?= $config['base_url'] ?>/index.php" style="color: rgba(255,255,255,0.6); text-decoration: none; transition: color 0.3s;" onmouseover="this.style.color='#fff'" onmouseout="this.style.color='rgba(255,255,255,0.6)'">Home</a> 
      <span style="color: var(--primary); margin: 0 10px;">/</span> 
      <span style="color: #fff;">FAQs</span>
    </div>
  </div>
</section>

<!-- FAQ SECTION -->
<section class="section">
  <div class="container" style="max-width: 800px; margin: 0 auto;">
    <div class="section-header" style="text-align: center; margin-bottom: 50px;">
      <span class="tag" style="background: rgba(255,140,26,0.1); color: var(--primary); padding: 6px 16px; border-radius: 50px; font-size: 12px; font-weight: 700; text-transform: uppercase;">Support</span>
      <h2 style="font-size: 40px; margin: 20px 0;">How can we <span class="text-primary">help you?</span></h2>
      <p style="color: var(--text-muted); font-size: 18px;">Find answers to the most common questions about Shiksha Ratan Talent Hunt below.</p>
    </div>
    
    <?php require_once __DIR__ . '/includes/faq_content.php'; ?>
    
    <div style="text-align: center; margin-top: 50px;">
      <p style="color: var(--text-dark); font-size: 18px; margin-bottom: 20px; font-weight: 600;">Still have questions?</p>
      <a href="<?= $config['base_url'] ?>/pages/contact.php" class="btn btn-primary" style="font-size: 16px; padding: 15px 30px;">Contact Us</a>
    </div>
  </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

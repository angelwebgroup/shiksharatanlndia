<?php require_once __DIR__ . '/includes/header.php'; ?>

<!-- HERO -->
<section class="page-hero" style="background: radial-gradient(circle at center, rgba(255,140,26,0.15) 0%, var(--text-dark) 70%); background-color: var(--text-dark); color: #fff; padding: 100px 0 80px; text-align: center; border-bottom: 1px solid rgba(255,255,255,0.05);">
  <div class="container">
    <h1 style="font-size: 56px; margin-bottom: 20px; font-weight: 900; text-transform: uppercase; letter-spacing: -1px; color: #fff;">About <span style="color: var(--primary);">Us</span></h1>
    <div class="breadcrumbs" style="font-size: 14px; font-weight: 600; text-transform: uppercase; letter-spacing: 2px;">
      <a href="<?= $config['base_url'] ?>/index.php" style="color: rgba(255,255,255,0.6); text-decoration: none; transition: color 0.3s;" onmouseover="this.style.color='#fff'" onmouseout="this.style.color='rgba(255,255,255,0.6)'">Home</a> 
      <span style="color: var(--primary); margin: 0 10px;">/</span> 
      <span style="color: #fff;">About Us</span>
    </div>
  </div>
</section>

<section class="section section-alt">
  <div class="container">
    <div class="responsive-grid-2" style="display: grid; grid-template-columns: 1fr 1fr; gap: 80px; align-items: center;">
      <div style="position: relative;">
        <img src="https://images.unsplash.com/photo-1427504494785-3a9ca7044f45?auto=format&fit=crop&q=80&w=800" alt="About Olympiad" style="border-radius: var(--radius-lg); box-shadow: var(--shadow-lg);">
      </div>
      <div>
        <span class="tag" style="background: rgba(255,140,26,0.1); color: var(--primary); padding: 6px 16px; border-radius: 50px; font-size: 12px; font-weight: 700; text-transform: uppercase;">About Us</span>
        <h2 style="font-size: 48px; margin: 20px 0;">About Shiksha Ratan <span class="text-primary">Talent Hunt</span></h2>
        <p style="color: var(--text-muted); margin-bottom: 30px; font-size: 18px;">Shiksha Ratan Talent Hunt is an education-focused initiative that aims to identify, encourage and celebrate academic excellence among students. Our competitions are carefully designed to enhance conceptual understanding, analytical thinking and subject knowledge.</p>
        
        <h4 style="margin-bottom: 20px; font-size: 20px;">Our Objectives</h4>
        <div class="responsive-grid-2-sm" style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 30px;">
          <div style="display: flex; align-items: flex-start; gap: 15px;">
            <i class="fas fa-graduation-cap text-primary" style="font-size: 24px; margin-top: 4px;"></i> 
            <div><strong style="display: block;">Promote</strong> <span style="font-size: 14px; color: var(--text-muted);">Academic Excellence</span></div>
          </div>
          <div style="display: flex; align-items: flex-start; gap: 15px;">
            <i class="fas fa-brain text-primary" style="font-size: 24px; margin-top: 4px;"></i> 
            <div><strong style="display: block;">Enhance</strong> <span style="font-size: 14px; color: var(--text-muted);">Conceptual & Analytical Skills</span></div>
          </div>
          <div style="display: flex; align-items: flex-start; gap: 15px;">
            <i class="fas fa-book-reader text-primary" style="font-size: 24px; margin-top: 4px;"></i> 
            <div><strong style="display: block;">Build</strong> <span style="font-size: 14px; color: var(--text-muted);">Confidence & Competitiveness</span></div>
          </div>
          <div style="display: flex; align-items: flex-start; gap: 15px;">
            <i class="fas fa-balance-scale text-primary" style="font-size: 24px; margin-top: 4px;"></i> 
            <div><strong style="display: block;">Provide</strong> <span style="font-size: 14px; color: var(--text-muted);">Fair & Transparent Platform</span></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FOUNDER VISION -->
<section class="section section-alt">
  <div class="container">
    <div class="responsive-grid-2" style="display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: center;">
      <div style="position: relative;">
        <img src="../assets/img/founder.png" alt="Founder" style="border-radius: var(--radius-lg); box-shadow: var(--shadow-lg);">
        <div style="position: absolute; bottom: -20px; right: -20px; background: var(--primary); color: #fff; padding: 20px 30px; border-radius: var(--radius); box-shadow: var(--shadow-md);">
          <h4 style="margin: 0; font-size: 20px; color: #fff;">Mr. Surendra & Mr. Yogesh</h4>
          <p style="margin: 0; font-size: 14px; opacity: 0.9;">Founders, Shiksha Ratan</p>
        </div>
      </div>
      <div>
        <span class="tag" style="background: rgba(255,140,26,0.1); color: var(--primary); padding: 6px 16px; border-radius: 50px; font-size: 12px; font-weight: 700; text-transform: uppercase;">Our Mission</span>
        <h2 style="font-size: 48px; margin: 20px 0;">Founders' <span class="text-primary">Vision</span></h2>
        <i class="fas fa-quote-left" style="font-size: 40px; color: rgba(255,140,26,0.2); margin-bottom: 20px; display: block;"></i>
        <p style="color: var(--text-dark); font-size: 24px; font-weight: 600; line-height: 1.4; margin-bottom: 30px;">
          "Every child has unique talent. We aim to identify, nurture and celebrate that talent through academic excellence and healthy competition."
        </p>
        <p style="color: var(--text-muted); font-size: 16px; line-height: 1.6;">
          At Shiksha Ratan Talent Hunt, we believe that providing a national platform at an early age builds confidence and prepares students for future challenges. Our mission is to ensure that no talent goes unnoticed and every hard-working student receives the recognition they deserve.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- RECOGNITION & AWARDS -->
<section class="section">
  <div class="container">
    <div class="section-header">
      <span class="tag">Fame</span>
      <h2>National <span class="text-primary">Recognition</span></h2>
      <p>We make sure our champions are seen and celebrated!</p>
    </div>
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 40px;">
      <div class="premium-card text-center">
        <i class="fas fa-microphone-alt text-primary" style="font-size: 48px; margin-bottom: 20px;"></i>
        <h3>Stage Recognition</h3>
        <p style="color: var(--text-muted); margin-top: 10px;">Grand felicitation ceremony for all top rankers.</p>
      </div>
      <div class="premium-card text-center">
        <i class="fas fa-camera-retro text-primary" style="font-size: 48px; margin-bottom: 20px;"></i>
        <h3>Social Media Highlight</h3>
        <p style="color: var(--text-muted); margin-top: 10px;">Dedicated winner posts on our official pages.</p>
      </div>
      <div class="premium-card text-center">
        <i class="fas fa-scroll text-primary" style="font-size: 48px; margin-bottom: 20px;"></i>
        <h3>Merit Certificates</h3>
        <p style="color: var(--text-muted); margin-top: 10px;">Prestigious physical certificates delivered to your school.</p>
      </div>
    </div>
  </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

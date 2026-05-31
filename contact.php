<?php require_once __DIR__ . '/includes/header.php'; ?>

<style>
  :root {
    --primary-glow: rgba(255, 140, 26, 0.15);
    --primary-color: #ff8c1a; /* Backup color in case var(--primary) is not populated */
  }

  /* Entrance animations */
  @keyframes fadeInLeft {
    from {
      opacity: 0;
      transform: translateX(-30px);
    }
    to {
      opacity: 1;
      transform: translateX(0);
    }
  }

  @keyframes fadeInRight {
    from {
      opacity: 0;
      transform: translateY(30px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  .animated-left-col {
    animation: fadeInLeft 0.8s cubic-bezier(0.16, 1, 0.3, 1) forwards;
  }

  .animated-right-col {
    animation: fadeInRight 0.8s cubic-bezier(0.16, 1, 0.3, 1) forwards;
  }

  /* Interactive Contact Card Styling */
  .contact-card-item {
    display: flex;
    align-items: center;
    margin-bottom: 25px;
    padding: 20px;
    border-radius: 12px;
    background: #ffffff;
    transition: all 0.3s ease;
    box-shadow: 0 4px 6px -1px rgba(0,0,0,0.02), 0 2px 4px -1px rgba(0,0,0,0.02);
    border: 1px solid rgba(0, 0, 0, 0.04);
  }

  .contact-card-item:hover {
    transform: translateY(-4px);
    box-shadow: 0 12px 20px -3px rgba(0,0,0,0.06), 0 4px 6px -2px rgba(0,0,0,0.05);
    border-color: rgba(255,140,26,0.15);
  }

  .contact-icon-wrapper {
    background: rgba(255, 140, 26, 0.1);
    width: 55px;
    height: 55px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--primary, var(--primary-color));
    font-size: 20px;
    margin-right: 20px;
    flex-shrink: 0;
    transition: all 0.3s ease;
  }

  .contact-card-item:hover .contact-icon-wrapper {
    background: var(--primary, var(--primary-color));
    color: #ffffff;
    transform: scale(1.05);
  }

  /* Premium Form & Floating Label Animations */
  .premium-form-card {
    padding: 45px;
    background: #ffffff;
    border-radius: 16px;
    box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.05), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
    border-top: 5px solid var(--primary, var(--primary-color));
    transition: box-shadow 0.3s ease;
  }

  .premium-form-card:hover {
    box-shadow: 0 25px 30px -5px rgba(0, 0, 0, 0.08), 0 15px 15px -5px rgba(0, 0, 0, 0.04);
  }

  .floating-group {
    position: relative;
    margin-bottom: 24px;
  }

  .floating-input, .floating-select, .floating-textarea {
    width: 100%;
    padding: 16px;
    border: 1.5px solid #e2e8f0;
    border-radius: 8px;
    background: #fdfdfd;
    font-size: 15px;
    color: var(--text-dark, #333);
    outline: none;
    transition: all 0.3s ease;
  }

  .floating-input:focus, .floating-select:focus, .floating-textarea:focus {
    border-color: var(--primary, var(--primary-color));
    background: #ffffff;
    box-shadow: 0 0 0 4px var(--primary-glow);
  }

  .floating-label {
    position: absolute;
    left: 16px;
    top: 50%;
    transform: translateY(-50%);
    color: #718096;
    font-size: 15px;
    pointer-events: none;
    transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
    background: transparent;
    padding: 0 6px;
  }

  /* Label transitions upon interaction */
  .floating-input:focus + .floating-label,
  .floating-input:not(:placeholder-shown) + .floating-label,
  .floating-textarea:focus + .floating-label,
  .floating-textarea:not(:placeholder-shown) + .floating-label,
  .floating-select:focus + .floating-label,
  .floating-select:valid + .floating-label {
    top: 0;
    font-size: 12px;
    color: var(--primary, var(--primary-color));
    background: #ffffff;
    font-weight: 600;
  }

  /* Specific adjustment for textarea */
  .floating-textarea {
    min-height: 120px;
    resize: vertical;
  }
  .floating-textarea + .floating-label {
    top: 24px;
  }
  .floating-textarea:focus + .floating-label,
  .floating-textarea:not(:placeholder-shown) + .floating-label {
    top: 0;
  }

  /* Form Select visual adjustment */
  .floating-select {
    appearance: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    background-image: url("data:image/svg+xml;utf8,<svg fill='%23718096' height='24' viewBox='0 0 24 24' width='24' xmlns='http://www.w3.org/2000/svg'><path d='M7 10l5 5 5-5z'/><path d='M0 0h24v24H0z' fill='none'/></svg>");
    background-repeat: no-repeat;
    background-position: right 12px center;
  }

  /* Animated Submit Button */
  .btn-premium-animate {
    position: relative;
    overflow: hidden;
    width: 100%;
    font-size: 16px;
    padding: 16px;
    font-weight: 700;
    letter-spacing: 1px;
    text-transform: uppercase;
    border-radius: 8px;
    border: none;
    background: var(--primary, var(--primary-color));
    color: #ffffff;
    cursor: pointer;
    transition: all 0.3s ease;
    z-index: 1;
  }

  .btn-premium-animate::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(
      120deg,
      transparent,
      rgba(255, 255, 255, 0.25),
      transparent
    );
    transition: all 0.6s ease;
    z-index: -1;
  }

  .btn-premium-animate:hover::before {
    left: 100%;
  }

  .btn-premium-animate:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 20px rgba(255, 140, 26, 0.3);
  }

  .btn-premium-animate:active {
    transform: translateY(-1px);
  }
</style>

<!-- HERO -->
<section class="page-hero" style="background: radial-gradient(circle at center, rgba(255,140,26,0.15) 0%, var(--text-dark) 70%); background-color: var(--text-dark); color: #fff; padding: 100px 0 80px; text-align: center; border-bottom: 1px solid rgba(255,255,255,0.05);">
  <div class="container">
    <h1 style="font-size: 56px; margin-bottom: 20px; font-weight: 900; text-transform: uppercase; letter-spacing: -1px; color: #fff;">Contact <span style="color: var(--primary);">Us</span></h1>
    <div class="breadcrumbs" style="font-size: 14px; font-weight: 600; text-transform: uppercase; letter-spacing: 2px;">
      <a href="<?= $config['base_url'] ?>/index.php" style="color: rgba(255,255,255,0.6); text-decoration: none; transition: color 0.3s;" onmouseover="this.style.color='#fff'" onmouseout="this.style.color='rgba(255,255,255,0.6)'">Home</a> 
      <span style="color: var(--primary); margin: 0 10px;">/</span> 
      <span style="color: #fff;">Contact Us</span>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 40px; align-items: flex-start;">
      
      <!-- LEFT COLUMN -->
      <div class="animated-left-col" style="flex: 1; padding: 10px; max-width: 550px; margin: 0 auto;">
        <h2 style="color: var(--primary-dark); font-size: 28px; margin-bottom: 20px; font-weight: 800;">Contact Information</h2>
        <p style="margin-bottom: 40px; color: var(--text-body); line-height: 1.6;">Whether you are looking to conduct a nationwide exam, register your school for olympiads, or partner with us for skill assessments, our team of experts is ready to assist you.</p>
        
        <!-- Address -->
        <div class="contact-card-item">
          <div class="contact-icon-wrapper">
            <i class="fas fa-map-marker-alt"></i>
          </div>
          <div>
            <h5 style="color: var(--text-dark); margin-bottom: 5px; font-size: 17px; font-weight: 700;">Head Office</h5>
            <p style="color: var(--text-muted); font-size: 15px; margin: 0; line-height: 1.5;"><?= $config['address'] ?></p>
          </div>
        </div>

        <!-- Phone -->
        <div class="contact-card-item">
          <div class="contact-icon-wrapper">
            <i class="fas fa-phone-alt"></i>
          </div>
          <div>
            <h5 style="color: var(--text-dark); margin-bottom: 5px; font-size: 17px; font-weight: 700;">Phone Number</h5>
            <p style="margin: 0; line-height: 1.8;">
              <?php 
                $phones = explode(',', $config['phone_number']);
                foreach($phones as $phone) {
                  $clean_phone = trim($phone);
                  $tel_link = preg_replace('/[^0-9+]/', '', $clean_phone);
                  echo '<a href="tel:' . $tel_link . '" style="color: var(--text-muted); font-size: 15px; display: inline-block; margin-right: 15px;"><i class="fas fa-phone fa-sm" style="margin-right: 5px; opacity: 0.6;"></i>' . htmlspecialchars($clean_phone) . '</a>';
                }
              ?>
            </p>
          </div>
        </div>

        <!-- WhatsApp -->
        <div class="contact-card-item">
          <div class="contact-icon-wrapper">
            <i class="fab fa-whatsapp"></i>
          </div>
          <div>
            <h5 style="color: var(--text-dark); margin-bottom: 5px; font-size: 17px; font-weight: 700;">Chat Support</h5>
            <p style="margin: 0; line-height: 1.5;"> 
              <a href="https://wa.me/<?= preg_replace('/[^0-9]/', '', $config['whatsapp_number']) ?>" target="_blank" style="color: var(--text-muted); font-size: 15px; display: inline-block;">
                <?= preg_replace('/^\+91-/', '', $config['whatsapp_number']) ?>
              </a>
            </p>
          </div>
        </div>

        <!-- Email -->
        <div class="contact-card-item">
          <div class="contact-icon-wrapper">
            <i class="fas fa-envelope"></i>
          </div>
          <div>
            <h5 style="color: var(--text-dark); margin-bottom: 5px; font-size: 17px; font-weight: 700;">Email Address</h5>
            <p style="margin: 0; line-height: 1.5;"><a href="mailto:<?= $config['email_address'] ?>" style="color: var(--text-muted); font-size: 15px;"><?= $config['email_address'] ?></a></p>
          </div>
        </div>

        <!-- Social Media links -->
        <div style="margin-top: 40px; padding-left: 10px;">
          <h4 style="color: var(--text-dark); font-size: 18px; margin-bottom: 15px; font-weight: 700;">Follow Us</h4>
          <div style="display: flex; gap: 15px;">
            <a href="<?= $config['instagram_url'] ?>" style="width: 45px; height: 45px; background: rgba(255,140,26,0.1); color: var(--primary); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 18px; transition: all 0.3s ease;" onmouseover="this.style.background='#E1306C'; this.style.color='#fff';" onmouseout="this.style.background='rgba(255,140,26,0.1)'; this.style.color='var(--primary)';"><i class="fab fa-instagram"></i></a>
            <a href="<?= $config['facebook_url'] ?>" style="width: 45px; height: 45px; background: rgba(255,140,26,0.1); color: var(--primary); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 18px; transition: all 0.3s ease;" onmouseover="this.style.background='#1877F2'; this.style.color='#fff';" onmouseout="this.style.background='rgba(255,140,26,0.1)'; this.style.color='var(--primary)';"><i class="fab fa-facebook-f"></i></a>
            <a href="<?= $config['youtube_url'] ?>" style="width: 45px; height: 45px; background: rgba(255,140,26,0.1); color: var(--primary); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 18px; transition: all 0.3s ease;" onmouseover="this.style.background='#FF0000'; this.style.color='#fff';" onmouseout="this.style.background='rgba(255,140,26,0.1)'; this.style.color='var(--primary)';"><i class="fab fa-youtube"></i></a>
            <a href="https://wa.me/<?= preg_replace('/[^0-9]/', '', $config['whatsapp_number']) ?>" style="width: 45px; height: 45px; background: rgba(255,140,26,0.1); color: var(--primary); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 18px; transition: all 0.3s ease;" onmouseover="this.style.background='#25D366'; this.style.color='#fff';" onmouseout="this.style.background='rgba(255,140,26,0.1)'; this.style.color='var(--primary)';"><i class="fab fa-whatsapp"></i></a>
          </div>
        </div>
      </div>

      <!-- RIGHT COLUMN (FORM) -->
      <div class="animated-right-col" style="flex: 1.2;">
        <div class="premium-form-card">
          <h3 style="color: var(--text-dark); font-size: 30px; margin-bottom: 30px; font-weight: 800; letter-spacing: -0.5px;">Send an Enquiry</h3>
          
          <form id="enquiryForm" action="<?= $config['base_url'] ?>/process/process_enquiry.php" method="POST">
            <input type="hidden" name="csrf_token" value="<?= $_SESSION['csrf_token'] ?>">
            <input type="text" name="website_url" style="display:none" tabindex="-1" autocomplete="off">
            
            <!-- Grid Layout inside the form -->
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px;">
              <div class="floating-group">
                <input type="text" name="name" id="name" class="floating-input" placeholder=" " required data-parsley-trigger="change">
                <label for="name" class="floating-label">Name *</label>
              </div>
              
              <div class="floating-group">
                <input type="tel" name="phone" id="phone" class="floating-input" placeholder=" " required data-parsley-pattern="^[0-9\+\-\s]+$" data-parsley-trigger="change">
                <label for="phone" class="floating-label">Phone Number *</label>
              </div>
            </div>
            
            <div class="floating-group">
              <input type="email" name="email" id="email" class="floating-input" placeholder=" " data-parsley-type="email" data-parsley-trigger="change">
              <label for="email" class="floating-label">Email Address (Optional)</label>
            </div>
            
            <div class="floating-group">
              <textarea name="message" id="message" class="floating-textarea" placeholder=" " required data-parsley-trigger="change" data-parsley-minlength="10"></textarea>
              <label for="message" class="floating-label">Message *</label>
            </div>
            
            <button type="submit" class="btn-premium-animate">
              Submit Enquiry <i class="fas fa-paper-plane" style="margin-left: 10px;"></i>
            </button>
          </form>
        </div>
      </div>

    </div>
  </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
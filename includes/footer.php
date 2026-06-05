<footer class="footer">
  <div class="container">
    <div class="footer-grid">
      <div class="footer-col footer-brand">
        <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 20px;">
          <img src="<?= $config['base_url'] ?><?= $config['logo_path'] ?>" alt="Logo" class="logo-icon" style="width:60px; height:auto; object-fit:contain; background:#fff; padding:5px; border-radius:8px;">
          <div style="display: flex; flex-direction: column; justify-content: center;">
            <div style="font-size: 20px; font-weight: 800; color: #fff; line-height: 1.1;">SHIKSHA RATAN</div>
            <div style="font-size: 10px; color: #ced4da; letter-spacing: 2px;">Talent Hunt</div>
          </div>
        </div>
        <p>India's most trusted Olympiad & Scholarship platform. Discovering, nurturing, and empowering the next generation of leaders.</p>
        <div style="margin-top: 25px;">
          <strong style="color: #fff; display: block; margin-bottom: 15px; font-family: var(--ff-heading); letter-spacing: 1px; text-transform: uppercase;">Follow Us</strong>
          <div class="social-links" style="display: flex; gap: 15px;">
            <a href="<?= $config['instagram_url'] ?>" style="width: 40px; height: 40px; background: rgba(255,255,255,0.1); color: #fff; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 18px; transition: all 0.3s ease;" onmouseover="this.style.background='#E1306C'" onmouseout="this.style.background='rgba(255,255,255,0.1)'"><i class="fab fa-instagram"></i></a>
            <a href="<?= $config['facebook_url'] ?>" style="width: 40px; height: 40px; background: rgba(255,255,255,0.1); color: #fff; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 18px; transition: all 0.3s ease;" onmouseover="this.style.background='#1877F2'" onmouseout="this.style.background='rgba(255,255,255,0.1)'"><i class="fab fa-facebook-f"></i></a>
            <a href="<?= $config['youtube_url'] ?>" style="width: 40px; height: 40px; background: rgba(255,255,255,0.1); color: #fff; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 18px; transition: all 0.3s ease;" onmouseover="this.style.background='#FF0000'" onmouseout="this.style.background='rgba(255,255,255,0.1)'"><i class="fab fa-youtube"></i></a>
            <a href="https://wa.me/<?= preg_replace('/[^0-9]/', '', $config['whatsapp_number']) ?>" style="width: 40px; height: 40px; background: rgba(255,255,255,0.1); color: #fff; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 18px; transition: all 0.3s ease;" onmouseover="this.style.background='#25D366'" onmouseout="this.style.background='rgba(255,255,255,0.1)'"><i class="fab fa-whatsapp"></i></a>
          </div>
        </div>
      </div>
      
      <div class="footer-col">
        <h4>Quick Links</h4>
        <ul>
          <li><a href="<?= $config['base_url'] ?>/index.php">Home</a></li>
          <li><a href="<?= $config['base_url'] ?>/about.php">About Us</a></li>
          <li><a href="<?= $config['base_url'] ?>/academics.php">Exams & Dates</a></li>
          <li><a href="<?= $config['base_url'] ?>/contact.php">Contact Us</a></li>
        </ul>
      </div>
      
      <div class="footer-col">
        <h4>Support</h4>
        <ul>
          <li><a href="<?= $config['base_url'] ?>/contact.php">How to Register</a></li>
          <li><a href="<?= $config['base_url'] ?>/academics.php">Syllabus & Pattern</a></li>
          <li><a href="#">Terms & Conditions</a></li>
          <li><a href="#">Privacy Policy</a></li>
        </ul>
      </div>
      
      <div class="footer-col">
        <h4>Contact Info</h4>
        <div style="margin-bottom: 15px;">
          <strong style="color: #fff; display: block; margin-bottom: 4px;">Head Office</strong>
          <span style="font-size: 14px; color: #ced4da;"><i class="fas fa-map-marker-alt" style="margin-right: 8px;"></i><?= $config['address'] ?></span>
        </div>
        <div style="margin-bottom: 15px;">
          <strong style="color: #fff; display: block; margin-bottom: 4px;">Email Support</strong>
          <a href="mailto:<?= $config['email_address'] ?>" style="font-size: 14px; color: #ced4da;"><i class="fas fa-envelope" style="margin-right: 8px;"></i><?= $config['email_address'] ?></a>
        </div>
        <div>
          <strong style="color: #fff; display: block; margin-bottom: 4px;">Call Us</strong>
          <a href="tel:<?= $config['phone_number'] ?>" style="font-size: 14px; color: #ced4da;"><i class="fas fa-phone-alt" style="margin-right: 8px;"></i><?= $config['phone_number'] ?></a>
        </div>
      </div>
    </div>
    
    <div class="footer-bottom">
      <div class="container">
        © <?= date('Y') ?> <?= $config['site_name'] ?>. All rights reserved.
      </div>
    </div>
  </div>
</footer>

<!-- Floating Mobile Register Button -->
<a href="<?= $config['base_url'] ?>/contact.php" class="mobile-float-register">
  <i class="fas fa-user-edit"></i> Register Now
</a>

<!-- Floating WhatsApp Button -->
<a href="https://wa.me/<?= preg_replace('/[^0-9]/', '', $config['whatsapp_number']) ?>" target="_blank" class="whatsapp-float">
  <div class="whatsapp-float-icon">
    <i class="fab fa-whatsapp"></i>
  </div>
</a>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<!-- Parsley JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"></script>
<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Fancybox JS -->
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>

<script src="<?= $config['base_url'] ?>/assets/js/main.js"></script>

</body>
</html>

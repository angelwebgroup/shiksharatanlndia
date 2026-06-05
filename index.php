<?php require_once __DIR__ . '/includes/header.php'; ?>

<!-- 1. HERO SLIDER -->
<section class="hero-slider-section">
  <!-- Swiper -->
  <div class="swiper heroSwiper">
    <div class="swiper-wrapper">
      <!-- Slide 1 -->
      <div class="swiper-slide">
        <picture>
          <source media="(max-width: 768px)" srcset="<?= $config['base_url'] ?>/slider/mobile-slider1.png">
          <img src="<?= $config['base_url'] ?>/slider/desktop-slider1.png" alt="Hero Slider 1">
        </picture>
      </div>
      <!-- Slide 2 (Example, can be uncommented when available) -->
      <!--
      <div class="swiper-slide">
        <picture>
          <source media="(max-width: 768px)" srcset="<?= $config['base_url'] ?>/slider/mobile-slider2.png">
          <img src="<?= $config['base_url'] ?>/slider/desktop-slider2.png" alt="Hero Slider 2">
        </picture>
      </div>
      -->
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
    <!-- Add Navigation -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
</section>

<!-- 2. STATISTICS SECTION -->
<section class="section-alt" style="padding: 60px 0; border-top: 1px solid var(--border-color); border-bottom: 1px solid var(--border-color);">
  <div class="container">
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 30px;">
      <div class="stat-card">
        <div class="stat-icon">🏫</div>
        <div class="stat-value">10,000+</div>
        <div class="stat-label">Schools</div>
      </div>
      <div class="stat-card">
        <div class="stat-icon">👨‍🎓</div>
        <div class="stat-value">2.5L+</div>
        <div class="stat-label">Students</div>
      </div>
      <div class="stat-card">
        <div class="stat-icon">📚</div>
        <div class="stat-value">12</div>
        <div class="stat-label">Subjects</div>
      </div>
      <div class="stat-card">
        <div class="stat-icon">🏆</div>
        <div class="stat-value">₹2.1L</div>
        <div class="stat-label">Prize Pool</div>
      </div>
    </div>
  </div>
</section>

<!-- 3. PRIZE POOL SECTION ⭐ -->
<section class="section" style="background-color: var(--text-dark);">
  <div class="container">
    <div class="section-header" style="color: #fff;">
      <span class="tag" style="background: rgba(255,215,0,0.2); color: var(--gold); padding: 6px 16px; border-radius: 50px; font-size: 12px; font-weight: 700; text-transform: uppercase;">Rewards</span>
      <h2 style="color: #fff;">National <span style="color: var(--gold);">Prize Pool</span></h2>
      <p style="color: rgba(255,255,255,0.7);">Win huge cash prizes, prestigious medals, and national glory!</p>
    </div>

    <div class="pricing-grid" style="gap: 20px; align-items: stretch;">
      <!-- 1st Rank -->
      <div class="premium-card" style="text-align: center; border-radius: 12px; padding: 30px 20px; background: linear-gradient(to bottom, #ffe47a, #f7b733); box-shadow: 0 10px 20px rgba(0,0,0,0.3); border: 2px solid #ffcc00; display: flex; flex-direction: column; justify-content: center;">
        <h4 style="color: #4a3300; text-transform: uppercase; letter-spacing: 1px; font-size: 18px; margin-bottom: 0;">1st Prize</h4>
        <div class="price-amt" style="font-size: 64px; color: #7a1000; margin: 0; font-weight: 900; line-height: 1.1;">₹2100</div>
        <p style="font-size: 16px; color: #332200; font-weight: 800; margin-bottom: 15px; line-height: 1.4;">+ TROPHY<br>+ GOLD MEDAL</p>
        <div style="display: flex; justify-content: center; gap: 10px; align-items: flex-end;">
          <i class="fas fa-trophy" style="font-size: 60px; color: #d4af37; filter: drop-shadow(0 4px 6px rgba(0,0,0,0.4));"></i>
          <i class="fas fa-medal" style="font-size: 40px; color: #d4af37; filter: drop-shadow(0 2px 4px rgba(0,0,0,0.4));"></i>
        </div>
      </div>

      <!-- 2nd Rank -->
      <div class="premium-card" style="text-align: center; border-radius: 12px; padding: 30px 20px; background: linear-gradient(to bottom, #f8f9fa, #ced4da); box-shadow: 0 10px 20px rgba(0,0,0,0.3); border: 2px solid #e9ecef; display: flex; flex-direction: column; justify-content: center;">
        <h4 style="color: #212529; text-transform: uppercase; letter-spacing: 1px; font-size: 18px; margin-bottom: 0;">2nd Prize</h4>
        <div class="price-amt" style="font-size: 64px; color: #0b1736; margin: 0; font-weight: 900; line-height: 1.1;">₹1100</div>
        <p style="font-size: 16px; color: #343a40; font-weight: 800; margin-bottom: 15px; line-height: 1.4;">+ TROPHY<br>+ SILVER MEDAL</p>
        <div style="display: flex; justify-content: center; gap: 10px; align-items: flex-end;">
          <i class="fas fa-trophy" style="font-size: 60px; color: #c0c0c0; filter: drop-shadow(0 4px 6px rgba(0,0,0,0.4));"></i>
          <i class="fas fa-medal" style="font-size: 40px; color: #c0c0c0; filter: drop-shadow(0 2px 4px rgba(0,0,0,0.4));"></i>
        </div>
      </div>

      <!-- 3rd Rank -->
      <div class="premium-card" style="text-align: center; border-radius: 12px; padding: 30px 20px; background: linear-gradient(to bottom, #ffb380, #e65c00); box-shadow: 0 10px 20px rgba(0,0,0,0.3); border: 2px solid #ff8c1a; display: flex; flex-direction: column; justify-content: center;">
        <h4 style="color: #4a1900; text-transform: uppercase; letter-spacing: 1px; font-size: 18px; margin-bottom: 0;">3rd Prize</h4>
        <div class="price-amt" style="font-size: 64px; color: #7a1000; margin: 0; font-weight: 900; line-height: 1.1;">₹500</div>
        <p style="font-size: 16px; color: #331100; font-weight: 800; margin-bottom: 15px; line-height: 1.4;">+ TROPHY<br>+ BRONZE MEDAL</p>
        <div style="display: flex; justify-content: center; gap: 10px; align-items: flex-end;">
          <i class="fas fa-trophy" style="font-size: 60px; color: #cd7f32; filter: drop-shadow(0 4px 6px rgba(0,0,0,0.4));"></i>
          <i class="fas fa-medal" style="font-size: 40px; color: #cd7f32; filter: drop-shadow(0 2px 4px rgba(0,0,0,0.4));"></i>
        </div>
      </div>
    </div>
    
    <div style="margin-top: 60px; text-align: center;">
      <h2 style="font-size: 42px; color: #fff; margin-bottom: 10px;">Every Participant <span style="color: var(--primary);">Gets</span></h2>
      <p style="color: rgba(255, 255, 255, 0.7); font-size: 18px; margin-bottom: 40px;">Nobody goes home empty-handed. We value every student's effort.</p>
      
      <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 30px; max-width: 900px; margin: 0 auto;">
        <!-- Certificate -->
        <div style="display: flex; flex-direction: column; align-items: center;">
          <div style="width: 100px; height: 100px; background-color: rgba(255, 255, 255, 0.08); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 20px; transition: transform 0.3s ease;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
            <i class="fas fa-certificate" style="font-size: 40px; color: var(--primary);"></i>
          </div>
          <h4 style="color: #fff; font-size: 18px; font-weight: 600;">Certificate</h4>
        </div>
        
        <!-- Participation Badge -->
        <div style="display: flex; flex-direction: column; align-items: center;">
          <div style="width: 100px; height: 100px; background-color: rgba(255, 255, 255, 0.08); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 20px; transition: transform 0.3s ease;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
            <i class="fas fa-id-badge" style="font-size: 40px; color: var(--primary);"></i>
          </div>
          <h4 style="color: #fff; font-size: 18px; font-weight: 600;">Participation Badge</h4>
        </div>
        
        <!-- Exciting Gifts -->
        <div style="display: flex; flex-direction: column; align-items: center;">
          <div style="width: 100px; height: 100px; background-color: rgba(255, 255, 255, 0.08); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 20px; transition: transform 0.3s ease;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
            <i class="fas fa-gift" style="font-size: 40px; color: var(--primary);"></i>
          </div>
          <h4 style="color: #fff; font-size: 18px; font-weight: 600;">Exciting Gifts</h4>
        </div>
        
        <!-- Digital Certificate -->
        <div style="display: flex; flex-direction: column; align-items: center;">
          <div style="width: 100px; height: 100px; background-color: rgba(255, 255, 255, 0.08); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 20px; transition: transform 0.3s ease;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
            <i class="fas fa-file-pdf" style="font-size: 40px; color: var(--primary);"></i>
          </div>
          <h4 style="color: #fff; font-size: 18px; font-weight: 600;">Digital Certificate</h4>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 4. ABOUT TALENT HUNT -->
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

<!-- 5. WHY PARTICIPATE -->
<section class="section">
  <div class="container">
    <div class="section-header">
      <span class="tag">Benefits</span>
      <h2>Why <span class="text-primary">Participate?</span></h2>
      <p>Transform your child's academic journey with our expertly crafted Olympiads.</p>
    </div>
    
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px;">
      <div class="premium-card text-center">
        <i class="fas fa-rocket text-primary" style="font-size: 48px; margin-bottom: 24px;"></i>
        <h3>Boost Confidence</h3>
        <p style="color: var(--text-muted); margin-top: 15px;">Overcome exam fear and build immense self-belief early on.</p>
      </div>
      <div class="premium-card text-center">
        <i class="fas fa-bullseye text-primary" style="font-size: 48px; margin-bottom: 24px;"></i>
        <h3>Improve Focus</h3>
        <p style="color: var(--text-muted); margin-top: 15px;">Develop deep concentration through competitive problem solving.</p>
      </div>
      <div class="premium-card text-center">
        <i class="fas fa-book-reader text-primary" style="font-size: 48px; margin-bottom: 24px;"></i>
        <h3>Enhance Knowledge</h3>
        <p style="color: var(--text-muted); margin-top: 15px;">Go beyond school textbooks and master conceptual depth.</p>
      </div>
      <div class="premium-card text-center">
        <i class="fas fa-star text-primary" style="font-size: 48px; margin-bottom: 24px;"></i>
        <h3>Win Recognition</h3>
        <p style="color: var(--text-muted); margin-top: 15px;">Get highlighted on national platforms and social media.</p>
      </div>
    </div>
  </div>
</section>

<!-- 6. SUBJECTS -->
<section id="syllabus" class="section section-alt">
  <div class="container">
    <div class="section-header">
      <span class="tag">Curriculum</span>
      <h2>Compete in <span class="text-primary">Core Subjects</span></h2>
    </div>
    
    <div class="subjects-grid">
      <div class="subject-card premium-card" style="padding: 30px 20px;">
        <div class="subject-icon-wrap" style="background: #1565C0; color: #fff;"><i class="fas fa-square-root-alt"></i></div>
        <h4>Mathematics</h4>
      </div>
      <div class="subject-card premium-card" style="padding: 30px 20px;">
        <div class="subject-icon-wrap" style="background: #E65100; color: #fff;"><i class="fas fa-flask"></i></div>
        <h4>Science</h4>
      </div>
      <div class="subject-card premium-card" style="padding: 30px 20px;">
        <div class="subject-icon-wrap" style="background: #2E7D32; color: #fff;"><i class="fas fa-language"></i></div>
        <h4>English</h4>
      </div>
      <div class="subject-card premium-card" style="padding: 30px 20px;">
        <div class="subject-icon-wrap" style="background: #6A1B9A; color: #fff;"><i class="fas fa-globe-americas"></i></div>
        <h4>Gen. Knowledge</h4>
      </div>
      <div class="subject-card premium-card" style="padding: 30px 20px;">
        <div class="subject-icon-wrap" style="background: #00838F; color: #fff;"><i class="fas fa-laptop-code"></i></div>
        <h4>Computer</h4>
      </div>
      <div class="subject-card premium-card" style="padding: 30px 20px;">
        <div class="subject-icon-wrap" style="background: #BF360C; color: #fff;"><i class="fas fa-chess-knight"></i></div>
        <h4>Reasoning</h4>
      </div>
    </div>
  </div>
</section>



<!-- 8. EXAM SCHEDULE & TIMELINE -->
<section class="section">
  <div class="container">
    <div class="section-header">
      <span class="tag">Timeline</span>
      <h2>Exam Schedule <span class="text-primary">2026</span></h2>
    </div>
    
    <div class="v-timeline">
      <div class="v-timeline-item">
        <div class="v-timeline-dot"></div>
        <div class="premium-card">
          <div class="v-timeline-date">April 15, 2026</div>
          <h4 style="font-size: 20px; margin-bottom: 10px;">Registrations Open</h4>
        </div>
      </div>
      <div class="v-timeline-item">
        <div class="v-timeline-dot"></div>
        <div class="premium-card">
          <div class="v-timeline-date">August 30, 2026</div>
          <h4 style="font-size: 20px; margin-bottom: 10px;">Registration Closes</h4>
        </div>
      </div>
      <div class="v-timeline-item">
        <div class="v-timeline-dot"></div>
        <div class="premium-card">
          <div class="v-timeline-date">October - November 2026</div>
          <h4 style="font-size: 20px; margin-bottom: 10px;">Phase 1 Examinations</h4>
        </div>
      </div>
    </div>
  </div>
</section>



<!-- 10. SCHOOL PARTNERSHIP & SPONSORS -->
<section class="section" style="background: linear-gradient(135deg, #FF8C1A 0%, #e67300 100%); color: #fff;">
  <div class="container">
    <div style="text-align: center; margin-bottom: 60px;">
      <h2 style="color: #fff; font-size: 56px; margin-bottom: 24px;">School Partnership & Sponsors</h2>
      <p style="font-size: 20px; max-width: 800px; margin: 0 auto; color: rgba(255,255,255,0.95);">
        Be a partner in nurturing excellence. Be a part of Shiksha Ratan Talent Hunt.
      </p>
    </div>

    <div class="responsive-grid-2" style="display: grid; grid-template-columns: 1fr 1fr; gap: 40px; margin-bottom: 60px;">
      <!-- Why Schools Should Support -->
      <div style="background: rgba(255,255,255,0.1); padding: 40px; border-radius: 24px;">
        <h3 style="color: #fff; border-bottom: 2px solid rgba(255,255,255,0.3); padding-bottom: 15px; margin-bottom: 20px;">Why Schools Should Support</h3>
        <ul style="list-style: none; padding: 0;">
          <li style="margin-bottom: 15px; display: flex; align-items: flex-start; gap: 12px;"><i class="fas fa-check-square" style="margin-top: 4px;"></i> Encourages academic culture in students</li>
          <li style="margin-bottom: 15px; display: flex; align-items: flex-start; gap: 12px;"><i class="fas fa-check-square" style="margin-top: 4px;"></i> Provides performance benchmark for students</li>
          <li style="margin-bottom: 15px; display: flex; align-items: flex-start; gap: 12px;"><i class="fas fa-check-square" style="margin-top: 4px;"></i> Recognizes bright students at a larger platform</li>
          <li style="margin-bottom: 15px; display: flex; align-items: flex-start; gap: 12px;"><i class="fas fa-check-square" style="margin-top: 4px;"></i> Helps in overall academic development</li>
          <li style="margin-bottom: 15px; display: flex; align-items: flex-start; gap: 12px;"><i class="fas fa-check-square" style="margin-top: 4px;"></i> Builds positive reputation for the institution</li>
        </ul>
      </div>

      <!-- Partner With Us -->
      <div style="background: rgba(255,255,255,0.1); padding: 40px; border-radius: 24px;">
        <h3 style="color: #fff; border-bottom: 2px solid rgba(255,255,255,0.3); padding-bottom: 15px; margin-bottom: 20px;">Partner With Us</h3>
        <ul style="list-style: none; padding: 0;">
          <li style="margin-bottom: 15px; display: flex; align-items: flex-start; gap: 12px;"><i class="fas fa-handshake" style="margin-top: 4px;"></i> Associate with a trusted academic initiative</li>
          <li style="margin-bottom: 15px; display: flex; align-items: flex-start; gap: 12px;"><i class="fas fa-bullhorn" style="margin-top: 4px;"></i> Gain visibility among schools & communities</li>
          <li style="margin-bottom: 15px; display: flex; align-items: flex-start; gap: 12px;"><i class="fas fa-chart-bar" style="margin-top: 4px;"></i> Support academic excellence & student growth</li>
          <li style="margin-bottom: 15px; display: flex; align-items: flex-start; gap: 12px;"><i class="fas fa-users" style="margin-top: 4px;"></i> Strengthen your brand's social impact</li>
        </ul>
      </div>
    </div>

    <div style="text-align: center;">
      <h4 style="color: #fff; margin-bottom: 15px; font-size: 24px;">For Sponsorship & Collaboration</h4>
      <p style="color: rgba(255,255,255,0.9); margin-bottom: 30px;">Be a part of a movement that is shaping the future through education. Limited sponsorships available!</p>
      <a href="<?= $config['base_url'] ?>/contact.php" class="btn btn-white" style="font-size: 16px; padding: 18px 48px; border: none; color: var(--text-dark);">Contact Sales Team</a>
    </div>
  </div>
</section>

<!-- 11. OLYMPIAD JOURNEY -->
<section class="section">
  <div class="container">
    <div class="section-header">
      <span class="tag">Process</span>
      <h2>Competition <span class="text-primary">Structure</span></h2>
    </div>
    <div class="journey-grid">
      <div class="journey-step premium-card"><div class="journey-step-num"><i class="fas fa-clipboard-list text-primary" style="font-size: 40px;"></i></div><h4 style="margin-top: 15px;">Registration</h4><p>Through School</p></div>
      <div class="journey-step premium-card"><div class="journey-step-num"><i class="fas fa-pencil-alt text-primary" style="font-size: 40px;"></i></div><h4 style="margin-top: 15px;">Competition</h4><p>At School Level</p></div>
      <div class="journey-step premium-card"><div class="journey-step-num"><i class="fas fa-award text-primary" style="font-size: 40px;"></i></div><h4 style="margin-top: 15px;">Result</h4><p>Result & Merit List</p></div>
      <div class="journey-step premium-card"><div class="journey-step-num"><i class="fas fa-trophy text-primary" style="font-size: 40px;"></i></div><h4 style="margin-top: 15px;">Certificates</h4><p>Certificates & Recognition</p></div>
    </div>
  </div>
</section>





<!-- 14. TESTIMONIALS -->
<section class="section section-alt">
  <div class="container">
    <div class="section-header">
      <h2>Trusted by <span class="text-primary">Parents & Schools</span></h2>
      <div class="google-rating-badge" style="margin-top: 20px;">
       
        <span style="font-weight: 700; color: var(--text-dark);">Google Rating</span>
        <span class="google-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></span>
        <span style="font-weight: 700; color: var(--text-dark);">4.8/5</span>
      </div>
    </div>
    <div class="swiper testimonialSwiper" style="padding-bottom: 50px;">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="premium-card testimonial-card" style="height: 100%; text-align: left; position: relative; padding: 40px;">
            <i class="fas fa-quote-right" style="position: absolute; top: 40px; right: 40px; font-size: 50px; color: rgba(255,140,26,0.1);"></i>
            <div class="google-stars" style="margin-bottom: 20px; font-size: 18px;"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
            <p style="font-size: 18px; color: var(--text-dark); font-style: italic; margin-bottom: 30px; line-height: 1.6; font-weight: 500;">"The pattern is exactly like national entrance exams. My son gained a lot of confidence competing at this level. Highly recommended!"</p>
            <div class="testimonial-user" style="border-top: 1px solid var(--border-color); padding-top: 20px; margin-bottom: 0;">
              <img src="https://i.pravatar.cc/150?img=32" alt="Parent">
              <div>
                <h4 style="font-size: 18px; margin: 0; color: var(--text-dark);">Rajesh Sharma</h4>
                <p style="font-size: 13px; color: var(--primary); margin: 0; font-weight: 600; text-transform: uppercase;">Parent</p>
              </div>
            </div>
          </div>
        </div>
        
        <div class="swiper-slide">
          <div class="premium-card testimonial-card" style="height: 100%; text-align: left; position: relative; padding: 40px;">
            <i class="fas fa-quote-right" style="position: absolute; top: 40px; right: 40px; font-size: 50px; color: rgba(255,140,26,0.1);"></i>
            <div class="google-stars" style="margin-bottom: 20px; font-size: 18px;"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i></div>
            <p style="font-size: 18px; color: var(--text-dark); font-style: italic; margin-bottom: 30px; line-height: 1.6; font-weight: 500;">"Seamless execution and detailed analytical reports for students. We register our entire school every year!"</p>
            <div class="testimonial-user" style="border-top: 1px solid var(--border-color); padding-top: 20px; margin-bottom: 0;">
              <img src="https://i.pravatar.cc/150?img=47" alt="Teacher">
              <div>
                <h4 style="font-size: 18px; margin: 0; color: var(--text-dark);">Anjali Verma</h4>
                <p style="font-size: 13px; color: var(--primary); margin: 0; font-weight: 600; text-transform: uppercase;">School Principal</p>
              </div>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="premium-card testimonial-card" style="height: 100%; text-align: left; position: relative; padding: 40px;">
            <i class="fas fa-quote-right" style="position: absolute; top: 40px; right: 40px; font-size: 50px; color: rgba(255,140,26,0.1);"></i>
            <div class="google-stars" style="margin-bottom: 20px; font-size: 18px;"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
            <p style="font-size: 18px; color: var(--text-dark); font-style: italic; margin-bottom: 30px; line-height: 1.6; font-weight: 500;">"Winning the Gold Medal at the National level was the best moment of my academic journey. The test was challenging but fair!"</p>
            <div class="testimonial-user" style="border-top: 1px solid var(--border-color); padding-top: 20px; margin-bottom: 0;">
              <img src="https://i.pravatar.cc/150?img=11" alt="Student">
              <div>
                <h4 style="font-size: 18px; margin: 0; color: var(--text-dark);">Aditya Kumar</h4>
                <p style="font-size: 13px; color: var(--primary); margin: 0; font-weight: 600; text-transform: uppercase;">National Topper</p>
              </div>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="premium-card testimonial-card" style="height: 100%; text-align: left; position: relative; padding: 40px;">
            <i class="fas fa-quote-right" style="position: absolute; top: 40px; right: 40px; font-size: 50px; color: rgba(255,140,26,0.1);"></i>
            <div class="google-stars" style="margin-bottom: 20px; font-size: 18px;"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
            <p style="font-size: 18px; color: var(--text-dark); font-style: italic; margin-bottom: 30px; line-height: 1.6; font-weight: 500;">"The analytical report helped identify my child's weak areas in Mathematics. We worked on it, and now she is at the top of her class."</p>
            <div class="testimonial-user" style="border-top: 1px solid var(--border-color); padding-top: 20px; margin-bottom: 0;">
              <img src="https://i.pravatar.cc/150?img=5" alt="Parent">
              <div>
                <h4 style="font-size: 18px; margin: 0; color: var(--text-dark);">Priya Gupta</h4>
                <p style="font-size: 13px; color: var(--primary); margin: 0; font-weight: 600; text-transform: uppercase;">Parent</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
</section>

<!-- 14.5 FOUNDER VISION -->
<section class="section section-alt">
  <div class="container">
    <div class="responsive-grid-2" style="display: grid; grid-template-columns: 1fr 1fr; gap: 60px; align-items: center;">
      <div style="position: relative;">
        <img src="assets/img/founder.png" alt="Founder" style="border-radius: var(--radius-lg); box-shadow: var(--shadow-lg);">
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

<!-- 14.6 GALLERY HIGHLIGHTS -->
<?php 
require_once __DIR__ . '/includes/gallery_data.php'; 
$allImages = getGalleryImages();
// Ensure we have at least some images to show
if (!empty($allImages)):
?>
<section class="gallery-highlights">
  <div class="container">
    <div class="section-header" style="text-align: center; margin-bottom: 50px;">
      <span class="tag">Gallery Highlights</span>
      <h2>Capturing Moments of <span class="text-primary">Excellence</span></h2>
    </div>
  </div>

  <!-- Carousel 1 -->
  <div class="gallery-slider-container" style="position: relative;">
    <div class="swiper gallerySlider1 gallery-slider">
      <div class="swiper-wrapper">
        <?php foreach ($allImages as $img): ?>
          <div class="swiper-slide">
            <img src="<?= $config['base_url'] ?>/<?= $img ?>" alt="Gallery Image" loading="lazy">
          </div>
        <?php endforeach; ?>
      </div>
      <!-- Add Pagination -->
      <div class="swiper-pagination gallery-pagination"></div>
      <!-- Add Navigation -->
      <div class="swiper-button-next gallery-button-next"></div>
      <div class="swiper-button-prev gallery-button-prev"></div>
    </div>
  </div>

  <!-- Carousel 2 (Reverse direction or different speed) -->
  <div class="gallery-slider-container" style="position: relative;">
    <div class="swiper gallerySlider2 gallery-slider">
      <div class="swiper-wrapper">
        <?php 
        $reversedImages = array_reverse($allImages);
        foreach ($reversedImages as $img): 
        ?>
          <div class="swiper-slide">
            <img src="<?= $config['base_url'] ?>/<?= $img ?>" alt="Gallery Image" loading="lazy">
          </div>
        <?php endforeach; ?>
      </div>
      <!-- Add Pagination -->
      <div class="swiper-pagination gallery-pagination"></div>
      <!-- Add Navigation -->
      <div class="swiper-button-next gallery-button-next"></div>
      <div class="swiper-button-prev gallery-button-prev"></div>
    </div>
  </div>

  <!-- Carousel 3 -->
  <div class="gallery-slider-container" style="position: relative;">
    <div class="swiper gallerySlider3 gallery-slider">
      <div class="swiper-wrapper">
        <?php 
        // Shuffle or shift for variety
        $shuffledImages = $allImages;
        if (count($shuffledImages) > 1) {
            array_push($shuffledImages, array_shift($shuffledImages));
        }
        foreach ($shuffledImages as $img): 
        ?>
          <div class="swiper-slide">
            <img src="<?= $config['base_url'] ?>/<?= $img ?>" alt="Gallery Image" loading="lazy">
          </div>
        <?php endforeach; ?>
      </div>
      <!-- Add Pagination -->
      <div class="swiper-pagination gallery-pagination"></div>
      <!-- Add Navigation -->
      <div class="swiper-button-next gallery-button-next"></div>
      <div class="swiper-button-prev gallery-button-prev"></div>
    </div>
  </div>

  <div class="container" style="text-align: center; margin-top: 40px;">
    <a href="<?= $config['base_url'] ?>/photo-gallery.php" class="btn btn-primary">
      View More Gallery <i class="fas fa-arrow-right"></i>
    </a>
  </div>
</section>
<?php endif; ?>

<!-- 15. FAQ -->
<section id="faq" class="section">
  <div class="container">
    <div class="section-header"><h2>Frequently Asked <span class="text-primary">Questions</span></h2></div>
    <?php require_once __DIR__ . '/includes/faq_content.php'; ?>
  </div>
</section>

<!-- 16. FINAL CTA -->
<section class="section" style="background: radial-gradient(circle at center, rgba(255,140,26,0.15) 0%, var(--text-dark) 70%); background-color: var(--text-dark); text-align: center; border-top: 1px solid rgba(255,255,255,0.05); padding: 100px 0;">
  <div class="container">
    <div style="display: inline-block; border: 1px solid rgba(255,215,0,0.5); color: var(--gold); padding: 8px 24px; border-radius: 50px; font-size: 12px; font-weight: 700; letter-spacing: 2px; text-transform: uppercase; margin-bottom: 30px;">
      Don't Miss Out
    </div>
    <h2 style="font-size: 64px; margin-bottom: 24px; color: #fff; text-transform: uppercase; font-weight: 900; letter-spacing: -1px; line-height: 1.1;">
      Be The Next <span style="color: var(--gold);">Champion</span>
    </h2>
    <p style="font-size: 20px; color: rgba(255,255,255,0.8); max-width: 700px; margin: 0 auto 50px; line-height: 1.6;">
      Registration is open for Classes 1 to 12. Limited seats — secure your spot today and begin your journey to the national stage.
    </p>
    <div style="display: flex; justify-content: center; gap: 20px; flex-wrap: wrap;">
      <a href="<?= $config['base_url'] ?>/contact.php" class="btn" style="background: linear-gradient(to right, #f7b733, #fc4a1a); color: #fff; font-size: 18px; font-weight: 700; padding: 18px 40px; border-radius: 50px; box-shadow: 0 10px 20px rgba(252,74,26,0.3); border: none; transition: transform 0.3s ease;" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
        Register Now — ₹250 Only <i class="fas fa-arrow-right" style="margin-left: 8px;"></i>
      </a>
      <a href="<?= $config['base_url'] ?>/contact.php" class="btn" style="background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.3); color: #fff; font-size: 18px; font-weight: 600; padding: 18px 40px; border-radius: 50px; transition: all 0.3s ease;" onmouseover="this.style.background='rgba(255,255,255,0.1)'; this.style.borderColor='rgba(255,255,255,0.5)'" onmouseout="this.style.background='rgba(255,255,255,0.05)'; this.style.borderColor='rgba(255,255,255,0.3)'">
        Partner with Us
      </a>
    </div>
  </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

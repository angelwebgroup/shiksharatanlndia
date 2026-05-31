<?php require_once __DIR__ . '/includes/header.php'; ?>

<!-- HERO -->
<section class="page-hero" style="background: radial-gradient(circle at center, rgba(255,140,26,0.15) 0%, var(--text-dark) 70%); background-color: var(--text-dark); color: #fff; padding: 100px 0 80px; text-align: center; border-bottom: 1px solid rgba(255,255,255,0.05);">
  <div class="container">
    <h1 style="font-size: 56px; margin-bottom: 20px; font-weight: 900; text-transform: uppercase; letter-spacing: -1px; color: #fff;">Syllabus & <span style="color: var(--primary);">Dates</span></h1>
    <div class="breadcrumbs" style="font-size: 14px; font-weight: 600; text-transform: uppercase; letter-spacing: 2px;">
      <a href="<?= $config['base_url'] ?>/index.php" style="color: rgba(255,255,255,0.6); text-decoration: none; transition: color 0.3s;" onmouseover="this.style.color='#fff'" onmouseout="this.style.color='rgba(255,255,255,0.6)'">Home</a> 
      <span style="color: var(--primary); margin: 0 10px;">/</span> 
      <span style="color: #fff;">Syllabus & Dates</span>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-header">
      <span class="tag">Overview</span>
      <h2>Olympiad <span class="text-primary">Structure</span></h2>
    </div>
    
    <div style="overflow-x: auto; margin-bottom: 60px;">
      <table class="data-table">
        <thead>
          <tr>
            <th>Class Level</th>
            <th>Subjects Covered</th>
            <th>Total Questions</th>
            <th>Total Marks</th>
            <th>Duration</th>
            <th>Mode of Exam</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Classes 1 to 4</td>
            <td>Maths, Science, English, GK</td>
            <td>35</td>
            <td>50</td>
            <td>60 Minutes</td>
            <td>Online / Offline (OMR)</td>
          </tr>
          <tr>
            <td>Classes 5 to 8</td>
            <td>Maths, Science, English, Cyber</td>
            <td>50</td>
            <td>60</td>
            <td>60 Minutes</td>
            <td>Online / Offline (OMR)</td>
          </tr>
          <tr>
            <td>Classes 9 to 10</td>
            <td>Talent Hunt (IQ, Reasoning, Core Subjects)</td>
            <td>50</td>
            <td>100</td>
            <td>90 Minutes</td>
            <td>Online / Offline (OMR)</td>
          </tr>
          <tr>
            <td>Classes 11 to 12</td>
            <td>Physics, Chemistry, Maths/Bio</td>
            <td>60</td>
            <td>100</td>
            <td>90 Minutes</td>
            <td>Online / Offline (OMR)</td>
          </tr>
        </tbody>
      </table>
    </div>

    <div class="section-header">
      <span class="tag">Schedule</span>
      <h2>Important <span class="text-primary">Dates</span></h2>
    </div>

    <div style="overflow-x: auto;">
      <table class="data-table">
        <thead>
          <tr>
            <th>Event</th>
            <th>Date (Tentative)</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>School Registration Opens</td>
            <td>15th April <?= date('Y') ?></td>
            <td><span style="color: #28a745; font-weight: 600;">Active</span></td>
          </tr>
          <tr>
            <td>Individual Registration Opens</td>
            <td>1st May <?= date('Y') ?></td>
            <td><span style="color: #28a745; font-weight: 600;">Active</span></td>
          </tr>
          <tr>
            <td>Registration Closes</td>
            <td>30th August <?= date('Y') ?></td>
            <td><span style="color: var(--text-muted); font-weight: 600;">Upcoming</span></td>
          </tr>
          <tr>
            <td>Admit Card Release</td>
            <td>15th September <?= date('Y') ?></td>
            <td><span style="color: var(--text-muted); font-weight: 600;">Upcoming</span></td>
          </tr>
          <tr>
            <td>Examination Window</td>
            <td>10th - 25th October <?= date('Y') ?></td>
            <td><span style="color: var(--text-muted); font-weight: 600;">Upcoming</span></td>
          </tr>
          <tr>
            <td>Results Declaration</td>
            <td>30th November <?= date('Y') ?></td>
            <td><span style="color: var(--text-muted); font-weight: 600;">Upcoming</span></td>
          </tr>
        </tbody>
      </table>
    </div>

  </div>
</section>

<!-- CTA -->
<section class="section" style="background: radial-gradient(circle at center, rgba(255,140,26,0.15) 0%, var(--text-dark) 70%); background-color: var(--text-dark); text-align: center; border-top: 1px solid rgba(255,255,255,0.05); padding: 80px 0;">
  <div class="container">
    <h2 style="font-size: 48px; margin-bottom: 24px; color: #fff; text-transform: uppercase; font-weight: 900; letter-spacing: -1px; line-height: 1.1;">Ready to test your <span style="color: var(--gold);">knowledge?</span></h2>
    <a href="<?= $config['base_url'] ?>/pages/contact.php" class="btn" style="background: linear-gradient(to right, #f7b733, #fc4a1a); color: #fff; font-size: 18px; font-weight: 700; padding: 18px 40px; border-radius: 50px; box-shadow: 0 10px 20px rgba(252,74,26,0.3); border: none; transition: transform 0.3s ease;" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">Register Now <i class="fas fa-arrow-right" style="margin-left: 10px;"></i></a>
  </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

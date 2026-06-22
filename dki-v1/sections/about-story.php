<!-- =============== ABOUT STORY =============== -->
<section id="about-story" aria-labelledby="story-heading">
  <div class="container">

    <!-- Story -->
    <div class="row g-5 align-items-center mb-5">
      <div class="col-lg-6 fade-up">
        <span class="section-label dark">Our Story</span>
        <div class="section-divider"></div>
        <h2 id="story-heading">From Startup to Trusted Agency</h2>
        <p class="mt-3">
          DKI Empire was founded in <?php echo $config['founded']; ?> with a single focus:
          building digital solutions that actually work for the organizations that need them most.
          What started as a small web development shop quickly evolved into a full-service digital
          agency with deep expertise in government compliance, healthcare, and enterprise e-commerce.
        </p>
        <p>
          Today, our team of designers, developers, and compliance specialists serves clients
          coast to coast — from county courthouses and state agencies to healthcare networks and
          national e-commerce brands. Every project we take on receives the same commitment to
          quality, transparency, and measurable results.
        </p>
        <div class="mt-4 d-flex flex-wrap gap-3">
          <?php foreach ($config['stats'] as $stat): ?>
            <div style="text-align:center;min-width:90px;">
              <div style="font-family:var(--font-heading);font-size:1.6rem;font-weight:900;color:var(--ice-dark);"><?php echo $stat['num']; ?></div>
              <div style="font-size:.75rem;font-weight:600;color:var(--muted);text-transform:uppercase;letter-spacing:.06em;"><?php echo $stat['label']; ?></div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="col-lg-6 fade-up" style="transition-delay:.12s;">
        <img
          src="https://placehold.co/580x380/0F172A/4FC3F7?text=DKI+Empire+Team"
          alt="DKI Empire Team"
          class="img-fluid"
          style="border-radius:16px;border:1px solid var(--border);"
        >
      </div>
    </div>

    <!-- Values -->
    <div class="text-center mb-4 fade-up">
      <span class="section-label dark">Our Values</span>
      <div class="section-divider mx-auto"></div>
      <h3>What Drives Us</h3>
    </div>
    <div class="row g-4">
      <?php
      $values = [
        ['icon' => 'bi-award-fill',         'title' => 'Quality First',       'text' => 'We never cut corners. Every project is built to the highest standards of design, development, and compliance.'],
        ['icon' => 'bi-eye-fill',            'title' => 'Full Transparency',   'text' => 'No hidden fees, no surprises. Clear communication and honest pricing throughout every engagement.'],
        ['icon' => 'bi-universal-access',    'title' => 'Accessibility',       'text' => 'We believe the web should be accessible to everyone. ADA compliance is built into every solution we deliver.'],
        ['icon' => 'bi-graph-up-arrow',      'title' => 'Results Focused',     'text' => 'We measure our success by your success — traffic, conversions, compliance ratings, and user satisfaction.'],
        ['icon' => 'bi-people-fill',         'title' => 'Client Partnership',  'text' => 'We are not just a vendor. We become a long-term technology partner invested in your organization\'s growth.'],
        ['icon' => 'bi-shield-fill-check',   'title' => 'Security & Trust',    'text' => 'Government-grade security practices protect your data and your users on every platform we build.'],
      ];
      foreach ($values as $i => $v):
      ?>
        <div class="col-lg-4 col-md-6 fade-up" style="transition-delay:<?php echo ($i % 3) * 0.1; ?>s;">
          <div class="about-value-card">
            <div class="about-value-icon"><i class="bi <?php echo $v['icon']; ?>"></i></div>
            <h5 style="font-size:.95rem;"><?php echo $v['title']; ?></h5>
            <p style="font-size:.875rem;"><?php echo $v['text']; ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <!-- Tech Stack -->
    <div class="text-center mt-5 mb-4 fade-up">
      <span class="section-label dark">Technologies We Use</span>
      <div class="section-divider mx-auto"></div>
      <h3>Our Tech Stack</h3>
    </div>
    <div class="d-flex flex-wrap gap-2 justify-content-center fade-up">
      <?php foreach ($config['tech_stack'] as $tech): ?>
        <span class="tech-badge"><?php echo $tech; ?></span>
      <?php endforeach; ?>
    </div>

  </div>
</section>

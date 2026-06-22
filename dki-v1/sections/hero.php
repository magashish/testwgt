<!-- =============== HERO =============== -->
<section id="hero" aria-label="Hero">
  <div class="hero-orb-ice"></div>
  <div class="hero-orb-gold"></div>

  <div class="container hero-content">
    <div class="row align-items-center g-5">

      <!-- Left Column -->
      <div class="col-lg-6 fade-up">
        <p class="hero-eyebrow">
          <i class="bi bi-shield-check me-1"></i>
          <?php echo $config['tagline']; ?> &nbsp;|&nbsp; Since <?php echo $config['founded']; ?>
        </p>
        <h1>
          We Build Digital Solutions That Drive
          <span class="text-ice">Real Results</span>
        </h1>
        <p class="hero-sub">
          From government portals to healthcare platforms and enterprise e-commerce — DKI Empire
          delivers custom websites, ADA compliance, and scalable software trusted by organizations nationwide.
        </p>
        <div class="hero-ctas">
          <a href="#quote-form" class="btn-gold btn-lg">
            <?php echo $config['cta_label']; ?> <i class="bi bi-arrow-right ms-1"></i>
          </a>
          <a href="<?php echo $config['phone_href']; ?>" class="btn-outline-white btn-lg">
            <i class="bi bi-telephone-fill"></i> <?php echo $config['phone']; ?>
          </a>
        </div>
        <div class="d-flex flex-wrap gap-3 align-items-center" style="font-size:.82rem;color:rgba(255,255,255,.55);">
          <span><i class="bi bi-check-circle-fill text-ice me-1"></i> No Long-Term Contracts</span>
          <span><i class="bi bi-check-circle-fill text-ice me-1"></i> Free Initial Consultation</span>
          <span><i class="bi bi-check-circle-fill text-ice me-1"></i> ADA Certified</span>
        </div>
      </div>

      <!-- Right Column: Stat Card -->
      <div class="col-lg-6 fade-up" style="transition-delay:.15s;">
        <div class="hero-stat-card">
          <p class="section-label mb-2">Our Impact At a Glance</p>
          <div class="hero-stat-grid">
            <?php foreach ($config['stats'] as $stat): ?>
              <div class="hero-stat-item">
                <div class="hero-stat-num"><?php echo $stat['num']; ?></div>
                <div class="hero-stat-label"><?php echo $stat['label']; ?></div>
              </div>
            <?php endforeach; ?>
          </div>
          <p style="font-size:.78rem;color:rgba(255,255,255,.5);margin-bottom:.6rem;font-weight:600;text-transform:uppercase;letter-spacing:.08em;">Clients We Serve</p>
          <div class="hero-client-chips">
            <?php foreach ($config['client_types'] as $type): ?>
              <span class="hero-chip"><?php echo $type; ?></span>
            <?php endforeach; ?>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- Trust Bar -->
  <div class="hero-trust-bar">
    <div class="container">
      <div class="trust-bar-inner">
        <div class="trust-item"><i class="bi bi-award-fill"></i><span>Founded <?php echo $config['founded']; ?></span></div>
        <div class="trust-item"><i class="bi bi-geo-alt-fill"></i><span><?php echo $config['service_area']; ?></span></div>
        <div class="trust-item"><i class="bi bi-universal-access"></i><span>ADA Compliant Solutions</span></div>
        <div class="trust-item"><i class="bi bi-shield-fill-check"></i><span>Section 508 Certified</span></div>
        <div class="trust-item"><i class="bi bi-headset"></i><span>Dedicated Account Support</span></div>
      </div>
    </div>
  </div>
</section>

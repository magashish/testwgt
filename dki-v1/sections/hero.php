<!-- =============== HERO =============== -->
<section id="hero" aria-label="Hero">
  <div class="hero-grid-overlay"></div>
  <div class="hero-glow hero-glow-1"></div>
  <div class="hero-glow hero-glow-2"></div>

  <div class="container hero-inner">
    <div class="row align-items-center gy-5">

      <!-- Left: copy -->
      <div class="col-lg-7 fade-up">
        <div class="hero-eyebrow">
          <i class="bi bi-lightning-charge-fill me-1" style="color:var(--gold);"></i>
          FULL-SERVICE DIGITAL AGENCY
        </div>
        <h1>
          We Build Digital Solutions
          <span class="text-gradient-ice"> That Drive Real Results</span>
        </h1>
        <p class="hero-sub mt-4">
          From county court portals to enterprise e-commerce platforms, DKI Empire delivers
          government-grade web development, ADA compliance, and custom software for organizations
          that demand excellence and accountability.
        </p>

        <div class="hero-ctas mt-4">
          <a href="portfolio.php" class="btn-gold btn-lg">
            VIEW OUR WORK <i class="bi bi-arrow-right ms-1"></i>
          </a>
          <a href="#quote-form" class="btn-outline-white btn-lg">
            <?php echo $config['cta_label']; ?>
          </a>
        </div>

        <!-- Trust badges -->
        <div class="hero-trust-row mt-5">
          <?php foreach ($config['compliance_badges'] as $badge): ?>
            <div class="hero-trust-badge">
              <i class="bi bi-shield-fill-check"></i> <?php echo $badge; ?>
            </div>
          <?php endforeach; ?>
        </div>
      </div>

      <!-- Right: floating stats card -->
      <div class="col-lg-5 fade-up" style="transition-delay:.15s;">
        <div class="hero-card">
          <div class="hero-card-header">
            <i class="bi bi-bar-chart-fill me-2" style="color:var(--gold);"></i>
            Agency at a Glance
          </div>
          <div class="hero-card-body">
            <?php foreach ($config['stats'] as $stat): ?>
              <div class="hero-stat-row">
                <div class="hero-stat-num"><?php echo $stat['num']; ?></div>
                <div class="hero-stat-label"><?php echo $stat['label']; ?></div>
              </div>
            <?php endforeach; ?>
          </div>
          <div class="hero-card-footer">
            <i class="bi bi-geo-alt-fill me-1" style="color:var(--ice);"></i>
            <?php echo $config['service_area']; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

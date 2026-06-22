<!-- =============== ABOUT HERO =============== -->
<section id="about-hero" style="background:var(--navy);padding:7rem 0 4.5rem;">
  <div class="hero-grid-overlay" style="opacity:.2;"></div>
  <div class="container" style="position:relative;z-index:1;">
    <div class="row align-items-center g-5">
      <div class="col-lg-7 fade-up">
        <span class="section-label">About DKI Empire</span>
        <div class="section-divider"></div>
        <h1 style="color:var(--white);font-size:clamp(2rem,4.5vw,3.2rem);">
          Digital Excellence Built on<br>
          <span class="text-gradient-ice">Expertise &amp; Trust</span>
        </h1>
        <p style="color:rgba(255,255,255,.7);font-size:1.1rem;line-height:1.8;max-width:580px;">
          Since 2013, DKI Empire has been the agency of choice for government entities, municipal organizations, and businesses that need more than just a website — they need a digital partner they can rely on.
        </p>
        <div class="d-flex flex-wrap gap-3 mt-4">
          <a href="#our-story" class="btn-gold">
            <i class="bi bi-book me-2"></i> Our Story
          </a>
          <a href="/#quote-form" class="btn-outline-white">
            <i class="bi bi-send me-2"></i> Work With Us
          </a>
        </div>
      </div>
      <div class="col-lg-5 fade-up" style="transition-delay:.15s;">
        <div class="row g-3">
          <?php foreach ($config['stats'] as $stat): ?>
            <div class="col-6">
              <div class="about-stat-card">
                <div class="about-stat-num"><?php echo $stat['num']; ?></div>
                <div class="about-stat-label"><?php echo $stat['label']; ?></div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>

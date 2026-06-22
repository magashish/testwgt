<!-- =============== SERVICE HERO =============== -->
<section id="service-hero" style="background:var(--navy);padding:7rem 0 4rem;">
  <div class="hero-grid-overlay" style="opacity:.2;"></div>
  <div class="container" style="position:relative;z-index:1;">
    <div class="row align-items-center g-5">
      <div class="col-lg-8 fade-up">
        <a href="/#services" class="section-label text-decoration-none" style="cursor:pointer;">
          <i class="bi bi-arrow-left me-1"></i> All Services
        </a>
        <div class="section-divider"></div>
        <div class="d-flex align-items-center gap-3 mb-4">
          <div class="svc-icon-lg">
            <i class="bi <?php echo $svc['icon']; ?>"></i>
          </div>
          <h1 style="color:var(--white);margin:0;font-size:clamp(1.8rem,4vw,2.8rem);">
            <?php echo $svc['title']; ?>
          </h1>
        </div>
        <p style="color:rgba(255,255,255,.75);font-size:1.2rem;max-width:680px;line-height:1.7;">
          <?php echo $svc['tagline']; ?>
        </p>
        <div class="d-flex flex-wrap gap-3 mt-4">
          <a href="#get-started" class="btn-gold">
            <i class="bi bi-send-fill me-2"></i> Get a Free Quote
          </a>
          <a href="<?php echo $config['phone_href']; ?>" class="btn-outline-white">
            <i class="bi bi-telephone-fill me-2"></i> <?php echo $config['phone']; ?>
          </a>
        </div>
      </div>
      <div class="col-lg-4 fade-up text-center" style="transition-delay:.15s;">
        <div class="svc-hero-badge">
          <i class="bi bi-patch-check-fill" style="color:var(--gold);font-size:2rem;display:block;margin-bottom:.75rem;"></i>
          <div style="color:var(--white);font-weight:700;font-size:1.1rem;">10+ Years Delivering</div>
          <div style="color:var(--muted);font-size:.9rem;">Expert <?php echo $svc['title']; ?></div>
          <hr style="border-color:rgba(255,255,255,.15);margin:1rem 0;">
          <div class="d-flex justify-content-around">
            <div>
              <div style="color:var(--gold);font-weight:800;font-size:1.4rem;">200+</div>
              <div style="color:var(--muted);font-size:.78rem;">Projects</div>
            </div>
            <div>
              <div style="color:var(--gold);font-weight:800;font-size:1.4rem;">100%</div>
              <div style="color:var(--muted);font-size:.78rem;">Satisfaction</div>
            </div>
            <div>
              <div style="color:var(--gold);font-weight:800;font-size:1.4rem;">50+</div>
              <div style="color:var(--muted);font-size:.78rem;">Gov Clients</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

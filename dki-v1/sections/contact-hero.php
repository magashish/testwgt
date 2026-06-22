<!-- =============== CONTACT HERO =============== -->
<section id="contact-hero" style="background:var(--navy);padding:6rem 0 4rem;">
  <div class="hero-grid-overlay" style="opacity:.2;"></div>
  <div class="container" style="position:relative;z-index:1;">
    <div class="row justify-content-center text-center">
      <div class="col-lg-7 fade-up">
        <span class="section-label">Contact Us</span>
        <div class="section-divider mx-auto"></div>
        <h1 style="color:var(--white);font-size:clamp(2rem,4vw,3rem);">
          Let's Talk About<br>
          <span class="text-gradient-ice">Your Next Project</span>
        </h1>
        <p style="color:rgba(255,255,255,.7);font-size:1.05rem;line-height:1.8;max-width:540px;margin:0 auto 2rem;">
          Whether you have a detailed brief or just an idea, we'd love to hear from you.
          We respond to every inquiry within one business day.
        </p>
        <div class="d-flex flex-wrap justify-content-center gap-3">
          <a href="<?php echo $config['phone_href']; ?>" class="btn-gold">
            <i class="bi bi-telephone-fill me-2"></i> <?php echo $config['phone']; ?>
          </a>
          <a href="<?php echo $config['email_href']; ?>" class="btn-outline-white">
            <i class="bi bi-envelope-fill me-2"></i> <?php echo $config['email']; ?>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

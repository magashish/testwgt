<!-- =============== SERVICE HERO =============== -->
<section id="service-hero" aria-labelledby="service-hero-heading">
  <div class="container" style="position:relative;z-index:1;">
    <div class="row align-items-center">
      <div class="col-lg-8 fade-up">
        <span class="section-label"><?php echo $config['tagline']; ?></span>
        <div class="service-hero-icon">
          <i class="bi <?php echo $service['icon']; ?>"></i>
        </div>
        <h1 id="service-hero-heading"><?php echo $service['title']; ?></h1>
        <p class="mt-3" style="font-size:1.05rem;max-width:580px;">
          <?php echo $service['tagline']; ?>
        </p>
        <div class="d-flex flex-wrap gap-3 mt-4">
          <a href="#quote-form" class="btn-gold btn-lg">
            <?php echo $config['cta_label']; ?> <i class="bi bi-arrow-right ms-1"></i>
          </a>
          <a href="<?php echo $config['phone_href']; ?>" class="btn-outline-white btn-lg">
            <i class="bi bi-telephone-fill"></i> <?php echo $config['phone']; ?>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- =============== ABOUT HERO =============== -->
<section id="about-hero" aria-label="About Page Hero">
  <div class="container page-hero-content">
    <div class="row justify-content-center text-center fade-up">
      <div class="col-lg-7">
        <p class="hero-eyebrow">
          <i class="bi bi-house-heart-fill me-1"></i>
          FAMILY OWNED SINCE <?php echo $config['founded']; ?>
        </p>
        <h1 style="color:var(--white);">About <?php echo $config['business_name']; ?></h1>
        <p class="hero-sub mx-auto">
          For over 75 years, we've been the trusted name for doors and windows across Northwest Ohio.
          A family business built on craftsmanship, integrity, and community.
        </p>
        <div class="d-flex flex-wrap justify-content-center gap-3 mt-3">
          <a href="#quote-form" class="btn-red btn-lg">
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

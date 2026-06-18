<!-- =============== HERO =============== -->
<section id="hero" aria-label="Hero">
  <div class="container hero-content">
    <div class="row">
      <div class="col-lg-7 fade-up">
        <p class="hero-eyebrow">
          <i class="bi bi-star-fill me-1"></i>
          FAMILY OWNED SINCE <?php echo $config['founded']; ?> &nbsp;|&nbsp; NORTHWEST OHIO
        </p>
        <h1>
          Northwest Ohio's Trusted Door &amp; Window Experts
          <span class="text-red">Since <?php echo $config['founded']; ?></span>
        </h1>
        <p class="hero-sub">
          Garage Doors, Garage Door Repair, Entry Doors, Windows, and Commercial Door Systems.
        </p>
        <div class="hero-ctas">
          <a href="#quote-form" class="btn-red btn-lg">
            <?php echo $config['cta_label']; ?> <i class="bi bi-arrow-right ms-1"></i>
          </a>
          <a href="<?php echo $config['phone_href']; ?>" class="btn-outline-white btn-lg">
            <i class="bi bi-telephone-fill"></i> CALL NOW
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- Trust Bar -->
  <div class="trust-bar">
    <div class="container">
      <div class="trust-bar-inner">
        <div class="trust-item"><i class="bi bi-house-heart-fill"></i><span>Family Owned Since <?php echo $config['founded']; ?></span></div>
        <div class="trust-item"><i class="bi bi-geo-alt-fill"></i><span><?php echo $config['service_area']; ?></span></div>
        <div class="trust-item"><i class="bi bi-building"></i><span>Residential &amp; Commercial</span></div>
        <div class="trust-item"><i class="bi bi-tools"></i><span>Professional Installation</span></div>
        <div class="trust-item"><i class="bi bi-award-fill"></i><span>Decades of Experience</span></div>
      </div>
    </div>
  </div>
</section>

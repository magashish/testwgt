<!-- =============== LOCATION HERO =============== -->
<section id="location-hero" aria-label="Location Page Hero">
  <div class="container page-hero-content">
    <div class="row justify-content-center text-center fade-up">
      <div class="col-lg-7">
        <p class="hero-eyebrow">
          <i class="bi bi-geo-alt-fill me-1"></i>
          <?php echo strtoupper($location['county'] . ', ' . $location['state']); ?>
        </p>
        <h1 style="color:var(--white);">
          Door &amp; Window Services in <?php echo $location['name']; ?>, OH
        </h1>
        <p class="hero-sub mx-auto"><?php echo $location['tagline']; ?></p>
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

  <!-- Breadcrumb -->
  <div class="service-breadcrumb">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb-list">
          <li><a href="index.php">Home</a></li>
          <li><i class="bi bi-chevron-right"></i></li>
          <li><a href="#">Locations</a></li>
          <li><i class="bi bi-chevron-right"></i></li>
          <li class="active"><?php echo $location['name']; ?>, <?php echo $location['state']; ?></li>
        </ol>
      </nav>
    </div>
  </div>
</section>

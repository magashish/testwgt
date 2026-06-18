<!-- =============== SERVICES =============== -->
<section id="services" aria-labelledby="services-heading">
  <div class="container">

    <div class="text-center mb-5 fade-up">
      <span class="section-label">What We Do</span>
      <div class="section-divider mx-auto"></div>
      <h2 id="services-heading">Our Services</h2>
      <p class="mt-3 mx-auto" style="max-width:560px;color:var(--muted);">
        From garage doors to storefront systems, we have the expertise and products to handle
        any residential or commercial project.
      </p>
    </div>

    <!-- Residential -->
    <div class="mb-2 fade-up">
      <span class="services-sub-label residential"><i class="bi bi-house-fill me-1"></i> Residential Services</span>
    </div>
    <div class="row g-3 mb-5">
      <?php foreach ($config['residential_services'] as $s): ?>
        <div class="col-lg-2 col-md-4 col-6 fade-up">
          <div class="service-card">
            <img src="https://placehold.co/400x220/1a2744/ffffff?text=<?php echo urlencode($s['title']); ?>"
                 alt="<?php echo htmlspecialchars($s['title']); ?>">
            <div class="service-card-body">
              <h5><?php echo $s['title']; ?></h5>
              <p><?php echo $s['desc']; ?></p>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <!-- Commercial -->
    <div class="mb-2 fade-up">
      <span class="services-sub-label commercial"><i class="bi bi-building me-1"></i> Commercial Services</span>
    </div>
    <div class="row g-3">
      <?php foreach ($config['commercial_services'] as $s): ?>
        <div class="col-lg-2 col-md-4 col-6 fade-up">
          <div class="service-card">
            <img src="https://placehold.co/400x220/0f1830/ffffff?text=<?php echo urlencode($s['title']); ?>"
                 alt="<?php echo htmlspecialchars($s['title']); ?>">
            <div class="service-card-body">
              <h5><?php echo $s['title']; ?></h5>
              <p><?php echo $s['desc']; ?></p>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <div class="text-center mt-5 fade-up">
      <a href="#quote-form" class="btn-red btn-lg">
        GET A FREE ESTIMATE FOR ANY SERVICE <i class="bi bi-arrow-right ms-1"></i>
      </a>
    </div>

  </div>
</section>

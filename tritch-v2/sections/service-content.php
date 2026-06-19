<!-- =============== SERVICE CONTENT =============== -->
<section id="service-content" aria-labelledby="service-content-heading">
  <div class="container">
    <div class="row align-items-center gy-5">

      <!-- Left: description + benefits -->
      <div class="col-lg-6 fade-up">
        <span class="section-label"><?php echo $service['type'] === 'residential' ? 'Residential' : 'Commercial'; ?> Service</span>
        <div class="section-divider"></div>
        <h2 id="service-content-heading"><?php echo $service['title']; ?> in Northwest Ohio</h2>
        <p class="mt-3"><?php echo $service['full_desc']; ?></p>

        <h5 class="mt-4 mb-3" style="font-size:.95rem;font-weight:800;">What's Included</h5>
        <ul class="service-benefits-list">
          <?php foreach ($service['benefits'] as $b): ?>
            <li><i class="bi bi-check-circle-fill"></i> <?php echo htmlspecialchars($b); ?></li>
          <?php endforeach; ?>
        </ul>

        <div class="d-flex flex-wrap gap-3 mt-4">
          <a href="#quote-form" class="btn-red">
            GET A FREE ESTIMATE <i class="bi bi-arrow-right ms-1"></i>
          </a>
          <a href="<?php echo $config['phone_href']; ?>" class="btn-outline-navy">
            <i class="bi bi-telephone-fill me-1"></i> <?php echo $config['phone']; ?>
          </a>
        </div>
      </div>

      <!-- Right: image + trust badges -->
      <div class="col-lg-6 fade-up" style="transition-delay:.15s;">
        <img src="https://placehold.co/620x440/1a2744/ffffff?text=<?php echo urlencode($service['title']); ?>"
             alt="<?php echo htmlspecialchars($service['title']); ?> by <?php echo $config['business_name']; ?>"
             class="img-fluid rounded mb-4">

        <div class="service-trust-row">
          <div class="service-trust-item">
            <i class="bi bi-award-fill"></i>
            <span>Family Owned Since <?php echo $config['founded']; ?></span>
          </div>
          <div class="service-trust-item">
            <i class="bi bi-clipboard-check-fill"></i>
            <span>Free Estimates</span>
          </div>
          <div class="service-trust-item">
            <i class="bi bi-tools"></i>
            <span>Certified Technicians</span>
          </div>
          <div class="service-trust-item">
            <i class="bi bi-geo-alt-fill"></i>
            <span><?php echo $config['service_area']; ?></span>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- =============== RELATED SERVICES =============== -->
<section id="related-services" aria-label="Related Services">
  <div class="container">
    <div class="text-center mb-4 fade-up">
      <span class="section-label">Explore More</span>
      <div class="section-divider mx-auto"></div>
      <h2>Other <?php echo ucfirst($service['type']); ?> Services</h2>
    </div>
    <div class="row g-3">
      <?php
      $related_list = $service['type'] === 'residential'
        ? $config['residential_services']
        : $config['commercial_services'];
      foreach ($related_list as $i => $s):
        if ($s['slug'] === $service['slug']) continue;
      ?>
        <div class="col-lg-2 col-md-4 col-6 fade-up" style="transition-delay:<?php echo $i * 0.06; ?>s;">
          <a href="service.php?s=<?php echo $s['slug']; ?>" class="related-service-card">
            <i class="bi <?php echo $s['icon']; ?>"></i>
            <span><?php echo $s['title']; ?></span>
          </a>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- =============== LOCATION CONTENT =============== -->
<section id="location-content" aria-labelledby="location-heading">
  <div class="container">
    <div class="row align-items-start gy-5">

      <!-- Left: city intro + popular services -->
      <div class="col-lg-7 fade-up">
        <span class="section-label">Serving <?php echo $location['county']; ?></span>
        <div class="section-divider"></div>
        <h2 id="location-heading">
          <?php echo $config['business_name']; ?> in <?php echo $location['name']; ?>, <?php echo $location['state']; ?>
        </h2>
        <p class="mt-3"><?php echo $location['intro']; ?></p>
        <p>
          Our team of certified technicians is always nearby, ready to deliver fast turnarounds,
          honest estimates, and installations done right the first time. We carry top brands
          including Clopay, LiftMaster, Andersen Windows, ProVia, and more.
        </p>

        <h5 class="mt-4 mb-3" style="font-size:.95rem;font-weight:800;">
          Popular Services in <?php echo $location['name']; ?>
        </h5>
        <?php
        $all_services = array_merge($config['residential_services'], $config['commercial_services']);
        $popular = [];
        foreach ($location['popular_services'] as $slug) {
          foreach ($all_services as $svc) {
            if ($svc['slug'] === $slug) { $popular[] = $svc; break; }
          }
        }
        ?>
        <div class="row g-3 mb-4">
          <?php foreach ($popular as $svc): ?>
            <div class="col-sm-6">
              <a href="service.php?s=<?php echo $svc['slug']; ?>" class="loc-service-card">
                <i class="bi <?php echo $svc['icon']; ?>"></i>
                <div>
                  <div class="loc-svc-title"><?php echo $svc['title']; ?></div>
                  <div class="loc-svc-desc"><?php echo $svc['desc']; ?></div>
                </div>
              </a>
            </div>
          <?php endforeach; ?>
        </div>

        <a href="index.php#services" class="btn-outline-navy">
          VIEW ALL SERVICES <i class="bi bi-arrow-right ms-1"></i>
        </a>
      </div>

      <!-- Right: sidebar -->
      <div class="col-lg-5 fade-up" style="transition-delay:.12s;">

        <!-- Contact card -->
        <div class="loc-contact-card mb-4">
          <div class="loc-contact-header">
            <i class="bi bi-geo-alt-fill"></i>
            Serving <?php echo $location['name']; ?> &amp; Surrounding Areas
          </div>
          <div class="loc-contact-body">
            <div class="loc-contact-row">
              <i class="bi bi-telephone-fill"></i>
              <a href="<?php echo $config['phone_href']; ?>"><?php echo $config['phone']; ?></a>
            </div>
            <div class="loc-contact-row">
              <i class="bi bi-envelope-fill"></i>
              <a href="<?php echo $config['email_href']; ?>"><?php echo $config['email']; ?></a>
            </div>
            <div class="loc-contact-row">
              <i class="bi bi-clock-fill"></i>
              <span><?php echo $config['hours']; ?></span>
            </div>
            <div class="loc-contact-row">
              <i class="bi bi-calendar-check"></i>
              <span><?php echo $config['hours_sat']; ?></span>
            </div>
            <a href="#quote-form" class="btn-red w-100 mt-3" style="justify-content:center;">
              REQUEST FREE ESTIMATE <i class="bi bi-arrow-right ms-1"></i>
            </a>
          </div>
        </div>

        <!-- Nearby areas -->
        <div class="loc-nearby-card">
          <h6><i class="bi bi-map-fill me-2"></i>Also Serving Nearby</h6>
          <div class="loc-nearby-tags">
            <?php foreach ($location['nearby'] as $area): ?>
              <span class="city-tag"><?php echo htmlspecialchars($area); ?></span>
            <?php endforeach; ?>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<!-- =============== LOCATION — ALL SERVICES =============== -->
<section id="location-services" aria-label="All Services">
  <div class="container">
    <div class="text-center mb-4 fade-up">
      <span class="section-label">What We Offer</span>
      <div class="section-divider mx-auto"></div>
      <h2>All Services Available in <?php echo $location['name']; ?></h2>
    </div>

    <div class="row g-3">
      <?php
      $grouped = [
        'Residential' => $config['residential_services'],
        'Commercial'  => $config['commercial_services'],
      ];
      foreach ($grouped as $group_label => $group_services):
      ?>
        <div class="col-12 fade-up">
          <span class="services-sub-label <?php echo strtolower($group_label); ?>">
            <i class="bi bi-<?php echo $group_label === 'Residential' ? 'house-fill' : 'building'; ?> me-1"></i>
            <?php echo $group_label; ?> Services
          </span>
        </div>
        <?php foreach ($group_services as $i => $svc): ?>
          <div class="col-lg-2 col-md-4 col-6 fade-up" style="transition-delay:<?php echo $i * 0.05; ?>s;">
            <a href="service.php?s=<?php echo $svc['slug']; ?>" class="related-service-card">
              <i class="bi <?php echo $svc['icon']; ?>"></i>
              <span><?php echo $svc['title']; ?></span>
            </a>
          </div>
        <?php endforeach; ?>
        <div class="col-12 mb-3"></div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- =============== LOCATION — WHY CHOOSE / REVIEWS =============== -->
<section id="location-reviews" aria-label="Customer Reviews">
  <div class="container">
    <div class="text-center mb-4 fade-up">
      <span class="section-label">Testimonials</span>
      <div class="section-divider mx-auto"></div>
      <h2>What <?php echo $location['name']; ?> Customers Say</h2>
    </div>
    <div class="row g-4">
      <?php foreach ($config['reviews'] as $i => $r): ?>
        <div class="col-lg-3 col-md-6 fade-up" style="transition-delay:<?php echo $i * 0.1; ?>s;">
          <div class="review-card">
            <i class="bi bi-google google-badge"></i>
            <div class="review-stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
            </div>
            <p class="review-text">"<?php echo htmlspecialchars($r['text']); ?>"</p>
            <div class="reviewer-name"><?php echo htmlspecialchars($r['name']); ?></div>
            <div class="reviewer-city"><?php echo htmlspecialchars($r['city']); ?></div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

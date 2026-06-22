<!-- =============== SERVICES =============== -->
<section id="services" aria-labelledby="services-heading">
  <div class="container">

    <div class="text-center mb-5 fade-up">
      <span class="section-label dark">What We Do</span>
      <div class="section-divider mx-auto"></div>
      <h2 id="services-heading">Full-Service Digital Agency</h2>
      <p class="mt-3 mx-auto" style="max-width:580px;color:var(--muted);">
        From strategy and design to development and ongoing support — every solution we deliver is
        built for performance, accessibility, and long-term success.
      </p>
    </div>

    <div class="row g-4">
      <?php foreach ($config['services'] as $i => $svc): ?>
        <div class="col-lg-3 col-md-6 fade-up" style="transition-delay:<?php echo ($i % 4) * 0.08; ?>s;">
          <div class="service-card">
            <div class="service-icon">
              <i class="bi <?php echo $svc['icon']; ?>"></i>
            </div>
            <h5><?php echo $svc['title']; ?></h5>
            <p><?php echo $svc['desc']; ?></p>
            <a href="service.php?s=<?php echo $svc['slug']; ?>" class="service-learn-more">
              Learn More <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <div class="text-center mt-5 fade-up">
      <a href="#quote-form" class="btn-gold btn-lg">
        <?php echo $config['cta_label']; ?> <i class="bi bi-arrow-right ms-1"></i>
      </a>
    </div>

  </div>
</section>

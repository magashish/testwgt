<!-- =============== SERVICES =============== -->
<section id="services" aria-labelledby="services-heading">
  <div class="container">

    <div class="text-center mb-5 fade-up">
      <span class="section-label dark">What We Do</span>
      <div class="section-divider mx-auto"></div>
      <h2 id="services-heading">Full-Service Digital Capabilities</h2>
      <p class="mt-3 mx-auto" style="max-width:580px;color:var(--slate);">
        From strategy and design through development, compliance, and long-term support —
        DKI Empire is your single partner for everything digital.
      </p>
    </div>

    <div class="row g-4">
      <?php foreach ($config['services'] as $i => $svc): ?>
        <div class="col-lg-3 col-md-6 fade-up" style="transition-delay:<?php echo ($i % 4) * 0.07; ?>s;">
          <a href="service.php?s=<?php echo $svc['slug']; ?>" class="service-card-dki">
            <div class="svc-icon"><i class="bi <?php echo $svc['icon']; ?>"></i></div>
            <h5><?php echo $svc['title']; ?></h5>
            <p><?php echo $svc['desc']; ?></p>
            <div class="svc-link">Learn More <i class="bi bi-arrow-right"></i></div>
          </a>
        </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>

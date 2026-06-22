<!-- =============== SERVICE CONTENT =============== -->
<section id="service-content" aria-labelledby="service-content-heading">
  <div class="container">
    <div class="row g-5">

      <!-- Description + Benefits -->
      <div class="col-lg-6 fade-up">
        <span class="section-label dark">Overview</span>
        <div class="section-divider"></div>
        <h2 id="service-content-heading"><?php echo $service['title']; ?></h2>
        <p class="mt-3"><?php echo $service['full_desc']; ?></p>

        <h4 class="mt-4 mb-3" style="font-size:1rem;font-weight:800;color:var(--navy);">
          What's Included
        </h4>
        <?php foreach ($service['benefits'] as $benefit): ?>
          <div class="benefit-item">
            <i class="bi bi-check-circle-fill"></i>
            <span><?php echo $benefit; ?></span>
          </div>
        <?php endforeach; ?>

        <div class="mt-4">
          <a href="#quote-form" class="btn-gold">
            <?php echo $config['cta_label']; ?> <i class="bi bi-arrow-right ms-1"></i>
          </a>
        </div>
      </div>

      <!-- Image + Related Services -->
      <div class="col-lg-6 fade-up" style="transition-delay:.12s;">
        <img
          src="https://placehold.co/580x360/0F172A/4FC3F7?text=<?php echo urlencode($service['title']); ?>"
          alt="<?php echo htmlspecialchars($service['title']); ?>"
          class="img-fluid"
          style="border-radius:16px;margin-bottom:2rem;"
        >

        <h4 style="font-size:1rem;font-weight:800;color:var(--navy);margin-bottom:1rem;">
          Related Services
        </h4>
        <div class="row g-2">
          <?php
          $related = array_filter($config['services'], fn($s) => $s['slug'] !== $service['slug']);
          $related = array_slice(array_values($related), 0, 4);
          foreach ($related as $rel):
          ?>
            <div class="col-6">
              <a href="service.php?s=<?php echo $rel['slug']; ?>" class="related-service-card">
                <i class="bi <?php echo $rel['icon']; ?>"></i>
                <span><?php echo $rel['title']; ?></span>
              </a>
            </div>
          <?php endforeach; ?>
        </div>
      </div>

    </div>
  </div>
</section>

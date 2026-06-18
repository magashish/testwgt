<!-- =============== WHY CHOOSE TRITCH =============== -->
<section id="whychoose" aria-labelledby="whychoose-heading">
  <div class="container">

    <div class="text-center mb-5 fade-up">
      <span class="section-label">The Tritch Difference</span>
      <div class="section-divider mx-auto"></div>
      <h2 id="whychoose-heading">Why Choose <?php echo $config['business_name']; ?></h2>
      <p class="mt-3 mx-auto" style="max-width:560px;color:var(--muted);">
        For over 75 years, Northwest Ohio homeowners and businesses have trusted Tritch for
        quality products, expert installation, and outstanding service.
      </p>
    </div>

    <div class="row g-4">
      <?php foreach ($config['features'] as $i => $f): ?>
        <div class="col-lg-4 col-md-6 fade-up" style="transition-delay:<?php echo $i * 0.08; ?>s;">
          <div class="feature-card">
            <div class="feature-icon"><i class="bi <?php echo $f['icon']; ?>"></i></div>
            <h5 style="font-size:1rem;font-weight:800;margin-bottom:.4rem;"><?php echo $f['title']; ?></h5>
            <p style="font-size:.88rem;color:var(--muted);margin:0;"><?php echo $f['text']; ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>

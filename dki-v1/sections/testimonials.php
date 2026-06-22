<!-- =============== TESTIMONIALS =============== -->
<section id="testimonials" aria-labelledby="testimonials-heading">
  <div class="container">

    <div class="text-center mb-5 fade-up">
      <span class="section-label dark">Client Stories</span>
      <div class="section-divider mx-auto"></div>
      <h2 id="testimonials-heading">Trusted by Leaders Across Every Sector</h2>
      <p class="mt-3 mx-auto" style="max-width:520px;color:var(--slate);">
        Don't take our word for it. Here's what our clients say about working with DKI Empire.
      </p>
    </div>

    <div class="row g-4">
      <?php foreach ($config['testimonials'] as $i => $t): ?>
        <div class="col-lg-6 fade-up" style="transition-delay:<?php echo ($i % 2) * 0.12; ?>s;">
          <div class="testimonial-card">
            <div class="testimonial-type-tag"><?php echo htmlspecialchars($t['type']); ?></div>
            <div class="testimonial-stars">
              <?php for ($s = 0; $s < $t['rating']; $s++): ?>
                <i class="bi bi-star-fill"></i>
              <?php endfor; ?>
            </div>
            <blockquote class="testimonial-quote">"<?php echo htmlspecialchars($t['text']); ?>"</blockquote>
            <div class="testimonial-author">
              <div class="testimonial-avatar">
                <?php echo strtoupper(substr($t['name'], 0, 1)); ?>
              </div>
              <div>
                <div class="testimonial-name"><?php echo htmlspecialchars($t['name']); ?></div>
                <div class="testimonial-title"><?php echo htmlspecialchars($t['title']); ?></div>
                <div class="testimonial-org"><?php echo htmlspecialchars($t['org']); ?></div>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <div class="text-center mt-5 fade-up">
      <a href="<?php echo $config['google_reviews']; ?>" target="_blank" rel="noopener noreferrer" class="btn-outline-navy">
        READ MORE REVIEWS <i class="bi bi-arrow-right ms-1"></i>
      </a>
    </div>

  </div>
</section>

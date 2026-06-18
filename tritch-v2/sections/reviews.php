<!-- =============== REVIEWS =============== -->
<section id="reviews" aria-labelledby="reviews-heading">
  <div class="container">

    <div class="text-center mb-5 fade-up">
      <span class="section-label">Testimonials</span>
      <div class="section-divider mx-auto"></div>
      <h2 id="reviews-heading">What Our Customers Say</h2>
      <p class="mt-3 mx-auto" style="max-width:540px;color:var(--muted);">
        Don't just take our word for it. See what our valued customers across Northwest Ohio
        are saying about their Tritch experience.
      </p>
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

    <div class="text-center mt-5 fade-up">
      <a href="<?php echo $config['google_reviews']; ?>" target="_blank" rel="noopener noreferrer" class="btn-outline-navy">
        READ ALL REVIEWS <i class="bi bi-arrow-right ms-1"></i>
      </a>
    </div>

  </div>
</section>

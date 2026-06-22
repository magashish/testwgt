<!-- =============== TESTIMONIALS =============== -->
<section id="testimonials" aria-labelledby="testimonials-heading">
  <div class="container">

    <div class="text-center mb-5 fade-up">
      <span class="section-label dark">Client Testimonials</span>
      <div class="section-divider mx-auto"></div>
      <h2 id="testimonials-heading">What Our Clients Say</h2>
      <p class="mt-3 mx-auto" style="max-width:520px;color:var(--muted);">
        Government leaders, healthcare administrators, and business owners across the country trust
        DKI Empire to deliver.
      </p>
    </div>

    <div class="row g-4">
      <?php foreach ($config['testimonials'] as $i => $t): ?>
        <div class="col-lg-6 fade-up" style="transition-delay:<?php echo ($i % 2) * 0.1; ?>s;">
          <div class="testimonial-card">
            <div class="testimonial-quote-icon">&ldquo;</div>
            <p class="testimonial-text"><?php echo $t['text']; ?></p>
            <div class="testimonial-stars">
              <?php for ($s = 0; $s < $t['rating']; $s++): ?>
                <i class="bi bi-star-fill"></i>
              <?php endfor; ?>
            </div>
            <div class="testimonial-author-name"><?php echo $t['name']; ?></div>
            <div class="testimonial-author-title"><?php echo $t['title']; ?> &mdash; <?php echo $t['org']; ?></div>
            <span class="testimonial-org-tag"><?php echo $t['type']; ?></span>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>

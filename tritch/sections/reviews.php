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

    <?php
    $reviews = [
      ['name'=>'Jason M.',  'city'=>'Fremont, OH',  'text'=>'Tritch Door &amp; Window did an amazing job on our new garage door. The installers were professional, on time, and the quality is outstanding. Highly recommend!'],
      ['name'=>'Mark T.',   'city'=>'Sandusky, OH', 'text'=>'Our commercial overhead door replacement was completed on schedule and within budget. Excellent communication from start to finish.'],
      ['name'=>'Sarah L.',  'city'=>'Tiffin, OH',   'text'=>'Professional service and outstanding workmanship. We\'ve used Tritch for multiple projects and they never disappoint.'],
      ['name'=>'David R.',  'city'=>'Clyde, OH',    'text'=>'Called them on a Monday morning with a broken spring and they had it fixed the same day. Fast, friendly, and fair pricing.'],
    ];
    ?>

    <div class="row g-4">
      <?php foreach ($reviews as $i => $r): ?>
        <div class="col-lg-3 col-md-6 fade-up" style="transition-delay:<?php echo $i * 0.1; ?>s;">
          <div class="review-card">
            <i class="bi bi-google google-badge"></i>
            <div class="review-stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
            </div>
            <p class="review-text">"<?php echo $r['text']; ?>"</p>
            <div class="reviewer-name"><?php echo $r['name']; ?></div>
            <div class="reviewer-city"><?php echo $r['city']; ?></div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <div class="text-center mt-5 fade-up">
      <a href="#" class="btn-outline-navy">READ ALL REVIEWS <i class="bi bi-arrow-right ms-1"></i></a>
    </div>

  </div>
</section>

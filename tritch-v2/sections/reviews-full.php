<!-- =============== REVIEWS FULL =============== -->
<section id="reviews-full" aria-labelledby="reviews-full-heading">
  <div class="container">

    <!-- Rating Summary -->
    <div class="rating-summary fade-up">
      <div class="rating-score">
        <div class="rating-num">5.0</div>
        <div class="rating-stars-lg">
          <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
          <i class="bi bi-star-fill"></i>
        </div>
        <div class="rating-label">Google Rating</div>
      </div>
      <div class="rating-divider"></div>
      <div class="rating-meta">
        <h2 id="reviews-full-heading">Trusted by Northwest Ohio</h2>
        <p>
          <?php echo $config['business_name']; ?> consistently earns 5-star reviews from homeowners
          and businesses across the region. Our customers love our professionalism, quality products,
          and on-time service.
        </p>
        <a href="<?php echo $config['google_reviews']; ?>" target="_blank" rel="noopener noreferrer"
           class="btn-red">
          <i class="bi bi-google me-1"></i> VIEW ALL GOOGLE REVIEWS
        </a>
      </div>
    </div>

    <!-- Reviews Grid -->
    <?php
    $allReviews = array_merge($config['reviews'], [
      ['name' => 'Linda K.',   'city' => 'Findlay, OH',      'text' => 'The team at Tritch was incredibly knowledgeable and helped us pick the perfect garage door for our home. Installation was flawless.'],
      ['name' => 'Tom B.',     'city' => 'Norwalk, OH',       'text' => 'We had three windows replaced and the crew was in and out in one day. Clean, efficient, and the windows look absolutely beautiful.'],
      ['name' => 'Rachel M.',  'city' => 'Port Clinton, OH',  'text' => 'Wonderful experience from start to finish. The estimate was fair and honest, and the installers were polite and professional.'],
      ['name' => 'Greg H.',    'city' => 'Toledo, OH',        'text' => 'Our commercial dock doors were installed on schedule and the quality is exceptional. Will definitely use Tritch for future projects.'],
      ['name' => 'Karen S.',   'city' => 'Bellevue, OH',      'text' => 'I was impressed by how quickly they responded to my inquiry. New entry door looks amazing and really improved our curb appeal.'],
      ['name' => 'Mike P.',    'city' => 'Fostoria, OH',      'text' => 'Top-notch company. The new garage door opener works perfectly and the technician walked me through all the features. Great service!'],
      ['name' => 'Diane W.',   'city' => 'Sandusky, OH',      'text' => 'Had a broken spring emergency and they came out the same day. Reasonable pricing and the technician was friendly and professional.'],
      ['name' => 'Chris F.',   'city' => 'Tiffin, OH',        'text' => 'Family-owned feel with big-company capability. They handled our entire storefront door system professionally and on budget.'],
    ]);
    ?>

    <div class="row g-4 mt-4">
      <?php foreach ($allReviews as $i => $r): ?>
        <div class="col-lg-3 col-md-6 fade-up" style="transition-delay:<?php echo ($i % 4) * 0.1; ?>s;">
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
      <a href="<?php echo $config['google_reviews']; ?>" target="_blank" rel="noopener noreferrer"
         class="btn-outline-navy">
        SEE MORE REVIEWS ON GOOGLE <i class="bi bi-arrow-right ms-1"></i>
      </a>
    </div>

  </div>
</section>

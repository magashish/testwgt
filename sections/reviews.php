<!-- =============== REVIEWS SECTION =============== -->
<section id="reviews" aria-labelledby="reviews-heading">
  <div class="container">

    <div class="text-center mb-5 fade-up">
      <span class="section-label">What Our Customers Say</span>
      <div class="section-divider mx-auto"></div>
      <h2 id="reviews-heading">5 Star Service You Can Count On</h2>
      <p class="mt-3 mx-auto" style="max-width:620px;color:var(--text-muted);">
        We are Central Florida’s top rated dumpster rental service. We provide fast and simple dumpster rental services that leave our customers completely satisfied. Don’t just take our word for it. See what our valued customers are saying about us!
      </p>
      <!-- Aggregate Rating -->
      <div class="d-flex align-items-center justify-content-center gap-2 mt-3">
        <span style="font-size:2rem;font-weight:800;color:var(--primary);">5.0</span>
        <div>
          <div class="stars-row mb-1" style="font-size:1.3rem;">
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
          </div>
          <div style="font-size:.82rem;color:#777;">Based on 50+ Google Reviews</div>
        </div>
        <img src="https://www.gstatic.com/images/branding/googlelogo/svg/googlelogo_clr_74x24px.svg"
             alt="Google" style="height:24px;margin-left:.5rem;">
      </div>
    </div>

    <div class="row g-4 mb-5">

      <?php
      $reviews = [
        [
          'author' => 'Jessica M.',
          'date'   => 'October 2024',
          'text'   => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates facilis amet voluptatem ratione assumenda illum, sequi pariatur esse voluptas dolor molestiae, quo eligendi optio quas dolorum corrupti ipsam. Maiores, minus.',
        ],
        [
          'author' => 'Carlos R.',
          'date'   => 'September 2024',
          'text'   => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates facilis amet voluptatem ratione assumenda illum, sequi pariatur esse voluptas dolor molestiae, quo eligendi optio quas dolorum corrupti ipsam. Maiores, minus.',
        ],
        [
          'author' => 'Linda T.',
          'date'   => 'August 2024',
          'text'   => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates facilis amet voluptatem ratione assumenda illum, sequi pariatur esse voluptas dolor molestiae, quo eligendi optio quas dolorum corrupti ipsam. Maiores, minus.',
        ],
        [
          'author' => 'Mike D.',
          'date'   => 'July 2024',
          'text'   => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates facilis amet voluptatem ratione assumenda illum, sequi pariatur esse voluptas dolor molestiae, quo eligendi optio quas dolorum corrupti ipsam. Maiores, minus.',
        ],
        [
          'author' => 'Sarah K.',
          'date'   => 'June 2024',
          'text'   => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates facilis amet voluptatem ratione assumenda illum, sequi pariatur esse voluptas dolor molestiae, quo eligendi optio quas dolorum corrupti ipsam. Maiores, minus.',
        ],
        [
          'author' => 'David P.',
          'date'   => 'May 2024',
          'text'   => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptates facilis amet voluptatem ratione assumenda illum, sequi pariatur esse voluptas dolor molestiae, quo eligendi optio quas dolorum corrupti ipsam. Maiores, minus.',
        ],
      ];

      foreach ($reviews as $review): ?>
      <div class="col-md-6 col-lg-4 fade-up">
        <div class="review-card">
          <div class="rc-stars">
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
          </div>
          <p class="rc-text">"<?php echo htmlspecialchars($review['text']); ?>"</p>
          <div class="d-flex align-items-center justify-content-between">
            <span class="rc-author"><?php echo htmlspecialchars($review['author']); ?></span>
            <span class="rc-date"><?php echo htmlspecialchars($review['date']); ?></span>
          </div>
        </div>
      </div>
      <?php endforeach; ?>

    </div>

    <div class="text-center fade-up">
      <a href="https://g.co/kgs/PLACEHOLDER" target="_blank" rel="noopener noreferrer"
         class="btn btn-accent btn-lg">
        <i class="bi bi-google me-1"></i> Our Reviews
      </a>
    </div>

  </div>
</section>

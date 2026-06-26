<!-- =============== REVIEWS SECTION =============== -->
<section id="reviews" aria-labelledby="reviews-heading">
  <div class="container">

    <div class="text-center mb-5 fade-up">
      <span class="section-label">What Our Customers Say</span>
      <div class="section-divider mx-auto"></div>
      <h2 id="reviews-heading">5 Star Service You Can Count On</h2>
      <p class="mt-3 mx-auto" style="max-width:620px;color:var(--text-muted);">
        We are Central Florida's top rated dumpster rental service. We provide fast and simple dumpster rental services that leave our customers completely satisfied. Don't just take our word for it. See what our valued customers are saying about us!
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
          <div style="font-size:.82rem;color:#777;">Based on 30+ Google Reviews</div>
        </div>
        <img src="https://www.gstatic.com/images/branding/googlelogo/svg/googlelogo_clr_74x24px.svg"
             alt="Google" style="height:24px;margin-left:.5rem;">
      </div>
    </div>

    <div class="row g-4 mb-5">

      <?php
      $reviews = [
        [
          'author' => 'Bill Garrison',
          'date'   => 'May 2026',
          'text'   => 'Fantastic service. Always prompt. Great to work with.',
        ],
        [
          'author' => 'James C.',
          'date'   => 'April 2026',
          'text'   => 'Following a family loss in DeBary it became evident that we were going to need a 20 yard dumpster to eliminate some waste. It was a tough undertaking, but these guys made this part easy. Scheduling was quick and every step communicated...',
        ],
        [
          'author' => 'Jason Thomas',
          'date'   => 'March 2026',
          'text'   => 'Fast, reliable professional. russ and the team are great to work with . great company. Great rates.',
        ],
        [
          'author' => 'Lea Can',
          'date'   => 'March 2026',
          'text'   => 'Reasonable pricing, punctual friendly knowledgable service, answered all my questions.  I used a 20yd dumster, Equipment in good condition and served my needs perfectly to get the job done on home cleanout. THANK YOU WGT',
        ],
        [
          'author' => 'Brian Reed',
          'date'   => 'March 2026',
          'text'   => "Russ is a great guy! I've had many conversations with him. He's able to get me a dumpster early in the morning. Quick response for pick up too! Highly recommended WGT!",
        ],
        [
          'author' => 'David Watson.',
          'date'   => 'January 2026',
          'text'   => 'What a great company to do business with. Quick-Honest-Reliable',
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
      <a href="https://maps.google.com/?cid=3893073664246710078&g_mp=CiVnb29nbGUubWFwcy5wbGFjZXMudjEuUGxhY2VzLkdldFBsYWNlEAMYASAF&hl=en&gl=US&source=embed" target="_blank" rel="noopener noreferrer"
         class="btn btn-accent btn-lg">
        <i class="bi bi-google me-1"></i> Our Reviews
      </a>
    </div>

  </div>
</section>

<?php
// Extended review set — categories: garage-door | entry-door | windows | commercial
$allReviews = [
  ['name'=>'Jason M.',     'city'=>'Fremont, OH',     'category'=>'garage-door', 'service'=>'Garage Door Installation',
   'text'=>'Tritch did an amazing job on our new garage door. Installers were professional, on time, and the quality is outstanding. Highly recommend to anyone in the area!'],
  ['name'=>'David R.',     'city'=>'Clyde, OH',        'category'=>'garage-door', 'service'=>'Garage Door Repair',
   'text'=>'Called them on a Monday morning with a broken spring and they had it fixed the same day. Fast, friendly, and very fair pricing. Will not hesitate to use them again.'],
  ['name'=>'Karen S.',     'city'=>'Bellevue, OH',     'category'=>'garage-door', 'service'=>'Garage Door Opener',
   'text'=>'Had a new LiftMaster opener installed and the process was seamless. The technician explained everything, cleaned up after himself, and the opener works perfectly.'],
  ['name'=>'Mike P.',      'city'=>'Fostoria, OH',     'category'=>'garage-door', 'service'=>'Garage Door Installation',
   'text'=>'Our old garage door was an eyesore. Tritch helped us pick a new style and the install was flawless. The house looks so much better — neighbors keep commenting on it.'],
  ['name'=>'Sarah L.',     'city'=>'Tiffin, OH',       'category'=>'entry-door',  'service'=>'Entry Door Installation',
   'text'=>"Professional service and outstanding workmanship. We've used Tritch for multiple projects and they never disappoint. The new entry door looks beautiful."],
  ['name'=>'Karen W.',     'city'=>'Port Clinton, OH', 'category'=>'entry-door',  'service'=>'Steel Door Installation',
   'text'=>'Tritch installed a new steel entry door for us and it has made a huge difference in both security and energy efficiency. The crew was courteous and finished on time.'],
  ['name'=>'Diane W.',     'city'=>'Sandusky, OH',     'category'=>'entry-door',  'service'=>'Entry Door Installation',
   'text'=>'From the showroom visit to final installation, every step was handled with care. We love our new front door and have already received compliments from neighbors.'],
  ['name'=>'Tom B.',       'city'=>'Norwalk, OH',      'category'=>'windows',     'service'=>'Window Replacement',
   'text'=>'We had three windows replaced and the crew was in and out in one day. Clean, efficient, and the windows look beautiful. Noticed an immediate difference in comfort.'],
  ['name'=>'Nancy C.',     'city'=>'Fremont, OH',      'category'=>'windows',     'service'=>'Window Replacement',
   'text'=>'Tritch helped us choose the right windows for our older home and installation was done in a single day. Fair pricing, quality product, and a very friendly crew.'],
  ['name'=>'Rachel M.',    'city'=>'Port Clinton, OH', 'category'=>'windows',     'service'=>'Window Replacement',
   'text'=>'Wonderful experience from start to finish. The estimate was fair and honest, and the installers were polite and professional. The new windows have cut our heating bills.'],
  ['name'=>'Mark T.',      'city'=>'Sandusky, OH',     'category'=>'commercial',  'service'=>'Commercial Door Replacement',
   'text'=>'Our commercial overhead door replacement was completed on schedule and within budget. Excellent communication from start to finish. Tritch has earned our business for years to come.'],
  ['name'=>'Greg H.',      'city'=>'Toledo, OH',       'category'=>'commercial',  'service'=>'Dock Equipment Installation',
   'text'=>'Tritch installed dock levelers and seals at our facility. They understood the timeline pressures we had and delivered without issues. True professionals in the commercial space.'],
  ['name'=>'Chris F.',     'city'=>'Tiffin, OH',       'category'=>'commercial',  'service'=>'Storefront Systems',
   'text'=>'Family-owned feel with big-company capability. They handled our entire storefront door system professionally and on budget. Would absolutely recommend for commercial work.'],
];

$filterCategories = [
  'all'         => 'All Reviews',
  'garage-door' => '<i class="bi bi-house-door me-1"></i>Garage Doors',
  'entry-door'  => '<i class="bi bi-door-open me-1"></i>Entry Doors',
  'windows'     => '<i class="bi bi-grid me-1"></i>Windows',
  'commercial'  => '<i class="bi bi-building me-1"></i>Commercial',
];
?>
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
          <?php echo htmlspecialchars($config['business_name']); ?> consistently earns 5-star reviews
          from homeowners and businesses across the region. Our customers love our professionalism,
          quality products, and on-time service.
        </p>
        <div class="d-flex flex-wrap gap-3 align-items-center">
          <a href="<?php echo $config['google_reviews']; ?>" target="_blank" rel="noopener noreferrer"
             class="btn-red">
            <i class="bi bi-google me-1"></i> VIEW ALL GOOGLE REVIEWS
          </a>
          <span style="font-size:.82rem;color:var(--muted);">200+ Google Reviews</span>
        </div>
      </div>
    </div>

    <!-- Category Filters -->
    <div class="gallery-filters fade-up mt-4" role="group" aria-label="Filter by category">
      <?php foreach ($filterCategories as $key => $label): ?>
        <button class="gf-btn <?php echo $key === 'all' ? 'active' : ''; ?>"
                data-filter="<?php echo $key; ?>"
                aria-pressed="<?php echo $key === 'all' ? 'true' : 'false'; ?>">
          <?php echo $label; ?>
        </button>
      <?php endforeach; ?>
    </div>

    <!-- Reviews Grid -->
    <div class="row g-4 mt-1" id="reviews-grid">
      <?php foreach ($allReviews as $i => $r): ?>
        <div class="col-lg-4 col-md-6 fade-up review-filter-item"
             data-cat="<?php echo $r['category']; ?>"
             style="transition-delay:<?php echo ($i % 3) * 0.08; ?>s;">
          <div class="review-card h-100">
            <i class="bi bi-google google-badge" aria-label="Google Review"></i>
            <div class="review-stars" aria-label="5 out of 5 stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              <i class="bi bi-star-fill"></i>
            </div>
            <p class="review-text">"<?php echo htmlspecialchars($r['text']); ?>"</p>
            <div class="reviewer-name"><?php echo htmlspecialchars($r['name']); ?></div>
            <div class="reviewer-city">
              <i class="bi bi-geo-alt-fill me-1" style="color:var(--red);font-size:.7rem;"></i>
              <?php echo htmlspecialchars($r['city']); ?>
              <span style="margin:0 .35rem;color:var(--border);">·</span>
              <span style="color:var(--muted);font-size:.75rem;"><?php echo htmlspecialchars($r['service']); ?></span>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <!-- No results message (hidden by default) -->
    <p id="reviews-no-results" class="text-center mt-4" style="display:none;color:var(--muted);">
      No reviews found for this category yet.
    </p>

    <!-- Bottom CTA -->
    <div class="text-center mt-5 fade-up">
      <p style="color:var(--muted);margin-bottom:1.25rem;">
        Ready to experience the Tritch difference for yourself?
      </p>
      <a href="#quote-form" class="btn-red btn-lg me-2 mb-2">
        <?php echo $config['cta_label']; ?> <i class="bi bi-arrow-right ms-1"></i>
      </a>
      <a href="<?php echo $config['phone_href']; ?>" class="btn-outline-navy btn-lg mb-2">
        <i class="bi bi-telephone-fill me-1"></i> CALL <?php echo $config['phone']; ?>
      </a>
    </div>

  </div>
</section>

<!-- =============== IMAGE SLIDER =============== -->
<section id="photo-slider">
  <div class="container">

    <div id="reviewPhotoCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">

      <div class="carousel-inner rounded overflow-hidden">
        <div class="carousel-item active">
          <img src="/assets/images/slider-1.jpg" class="d-block w-100 photo-slide-img" alt="Tritch project photo 1">
        </div>
        <div class="carousel-item">
          <img src="/assets/images/slider-2.jpg" class="d-block w-100 photo-slide-img" alt="Tritch project photo 2">
        </div>
        <div class="carousel-item">
          <img src="/assets/images/slider-3.jpg" class="d-block w-100 photo-slide-img" alt="Tritch project photo 3">
        </div>
        <div class="carousel-item">
          <img src="/assets/images/slider-4.jpg" class="d-block w-100 photo-slide-img" alt="Tritch project photo 4">
        </div>
        <div class="carousel-item">
          <img src="/assets/images/slider-5.jpg" class="d-block w-100 photo-slide-img" alt="Tritch project photo 5">
        </div>
      </div>

      <button class="carousel-control-prev" type="button" data-bs-target="#reviewPhotoCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#reviewPhotoCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>

      <div class="carousel-indicators">
        <button type="button" data-bs-target="#reviewPhotoCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#reviewPhotoCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#reviewPhotoCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#reviewPhotoCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#reviewPhotoCarousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
      </div>

    </div>

  </div>
</section>

<script>
(function () {
  const btns    = document.querySelectorAll('#reviews-full .gf-btn');
  const items   = document.querySelectorAll('.review-filter-item');
  const noMsg   = document.getElementById('reviews-no-results');

  btns.forEach(btn => {
    btn.addEventListener('click', () => {
      btns.forEach(b => { b.classList.remove('active'); b.setAttribute('aria-pressed', 'false'); });
      btn.classList.add('active');
      btn.setAttribute('aria-pressed', 'true');

      const filter = btn.dataset.filter;
      let visible = 0;
      items.forEach(item => {
        const show = filter === 'all' || item.dataset.cat === filter;
        item.style.display = show ? '' : 'none';
        if (show) visible++;
      });
      noMsg.style.display = visible === 0 ? 'block' : 'none';
    });
  });
})();
</script>

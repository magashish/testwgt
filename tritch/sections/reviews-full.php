<?php
$allReviews = [
  // Garage Doors
  ['name'=>'Jason M.',    'city'=>'Fremont, OH',     'category'=>'garage-door',  'service'=>'Garage Door Installation',
   'text'=>'Tritch Door &amp; Window did an amazing job on our new garage door. The installers were professional, on time, and the quality is outstanding. Highly recommend to anyone in the area!'],
  ['name'=>'David R.',    'city'=>'Clyde, OH',        'category'=>'garage-door',  'service'=>'Garage Door Repair',
   'text'=>'Called them on a Monday morning with a broken spring and they had it fixed the same day. Fast, friendly, and very fair pricing. Will not hesitate to use them again.'],
  ['name'=>'Karen W.',    'city'=>'Sandusky, OH',     'category'=>'garage-door',  'service'=>'Garage Door Opener',
   'text'=>'Had a new LiftMaster opener installed and the whole process was seamless. Technician explained everything, cleaned up after himself, and the opener works perfectly. 5 stars!'],
  ['name'=>'Mike B.',     'city'=>'Bellevue, OH',     'category'=>'garage-door',  'service'=>'Garage Door Installation',
   'text'=>'Our old garage door was an eyesore. Tritch helped us pick a new style that matched our home and the install was flawless. The house looks so much better now.'],

  // Entry Doors
  ['name'=>'Linda H.',    'city'=>'Tiffin, OH',       'category'=>'entry-door',   'service'=>'Entry Door Installation',
   'text'=>'We replaced our front and back entry doors. The craftmanship is excellent and the doors seal perfectly — no more drafts! The crew was courteous and finished ahead of schedule.'],
  ['name'=>'Tom S.',      'city'=>'Norwalk, OH',      'category'=>'entry-door',   'service'=>'Steel Door Installation',
   'text'=>'Professional service and outstanding workmanship. Tritch installed a new steel entry door for us and it has made a huge difference in both security and energy efficiency.'],
  ['name'=>'Beth A.',     'city'=>'Port Clinton, OH', 'category'=>'entry-door',   'service'=>'Entry Door Installation',
   'text'=>'From the showroom visit to final installation, every step was handled with care. We love our new front door and have already received compliments from neighbors.'],

  // Windows
  ['name'=>'Sarah L.',    'city'=>'Tiffin, OH',       'category'=>'windows',      'service'=>'Window Replacement',
   'text'=>'Professional service and outstanding workmanship. We\'ve used Tritch for multiple projects and they never disappoint. The new windows have already lowered our heating bills.'],
  ['name'=>'Greg P.',     'city'=>'Findlay, OH',      'category'=>'windows',      'service'=>'Window Replacement',
   'text'=>'Replaced 12 windows throughout the house. The team was efficient and the cleanup was spotless. We noticed an immediate difference in comfort and noise reduction. Great investment.'],
  ['name'=>'Nancy C.',    'city'=>'Fremont, OH',      'category'=>'windows',      'service'=>'Window Replacement',
   'text'=>'Tritch helped us choose the right windows for our older home and the installation was done in a single day. Fair pricing, quality product, and friendly crew. Couldn\'t ask for more.'],

  // Commercial
  ['name'=>'Mark T.',     'city'=>'Sandusky, OH',     'category'=>'commercial',   'service'=>'Commercial Door Replacement',
   'text'=>'Our commercial overhead door replacement was completed on schedule and within budget. Excellent communication from start to finish. Tritch has earned our business for years to come.'],
  ['name'=>'Ohio Freight', 'city'=>'Fremont, OH',     'category'=>'commercial',   'service'=>'Dock Equipment Installation',
   'text'=>'Tritch installed dock levelers and seals at our facility. They understood the timeline pressures we had and delivered without any issues. True professionals in the commercial space.'],
];

$categories = [
  'all'         => 'All Reviews',
  'garage-door' => 'Garage Doors',
  'entry-door'  => 'Entry Doors',
  'windows'     => 'Windows',
  'commercial'  => 'Commercial',
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
        <div class="rating-label">Average Rating</div>
      </div>
      <div class="rating-divider d-none d-sm-block"></div>
      <div class="rating-meta">
        <h2 id="reviews-full-heading">Trusted by Northwest Ohio Families &amp; Businesses</h2>
        <p>
          With over 75 years of experience, we've built a reputation that speaks for itself.
          Our customers consistently rate us 5 stars for quality, professionalism, and reliability.
        </p>
        <div class="d-flex flex-wrap gap-3 align-items-center">
          <a href="https://g.page/r/PLACEHOLDER/review" target="_blank" rel="noopener noreferrer" class="btn-red">
            <i class="bi bi-google me-1"></i> LEAVE A REVIEW
          </a>
          <span style="font-size:.82rem;color:var(--muted);">200+ Google Reviews</span>
        </div>
      </div>
    </div>

    <!-- Category Filters -->
    <div class="gallery-filters fade-up mt-4" role="group" aria-label="Filter reviews by category">
      <?php foreach ($categories as $key => $label): ?>
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
            <p class="review-text">"<?php echo $r['text']; ?>"</p>
            <div class="reviewer-name"><?php echo $r['name']; ?></div>
            <div class="reviewer-city">
              <i class="bi bi-geo-alt-fill me-1" style="color:var(--red);font-size:.7rem;"></i><?php echo $r['city']; ?>
              <span style="margin:0 .35rem;color:var(--border);">·</span>
              <span style="color:var(--muted);font-size:.75rem;"><?php echo $r['service']; ?></span>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <!-- CTA -->
    <div class="text-center mt-5 fade-up">
      <p style="color:var(--muted);margin-bottom:1.25rem;">
        Ready to experience the Tritch difference for yourself?
      </p>
      <a href="#quote-form" class="btn-red btn-lg me-2 mb-2">
        REQUEST FREE ESTIMATE <i class="bi bi-arrow-right ms-1"></i>
      </a>
      <a href="tel:+14193329554" class="btn-outline-navy btn-lg mb-2">
        <i class="bi bi-telephone-fill me-1"></i> CALL (419) 332-9554
      </a>
    </div>

  </div>
</section>

<script>
(function () {
  const btns  = document.querySelectorAll('#reviews-full .gf-btn');
  const items = document.querySelectorAll('.review-filter-item');
  btns.forEach(btn => {
    btn.addEventListener('click', () => {
      btns.forEach(b => { b.classList.remove('active'); b.setAttribute('aria-pressed','false'); });
      btn.classList.add('active');
      btn.setAttribute('aria-pressed','true');
      const filter = btn.dataset.filter;
      items.forEach(item => {
        const show = filter === 'all' || item.dataset.cat === filter;
        item.style.display = show ? '' : 'none';
      });
    });
  });
})();
</script>

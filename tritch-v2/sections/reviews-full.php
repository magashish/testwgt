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

<!-- =============== TESTIMONIAL IMAGE SLIDER =============== -->
<?php
$sliderReviews = [
  ['photo'=>'/assets/images/reviewer-jason.jpg',  'name'=>'Jason M.',  'city'=>'Fremont, OH',     'service'=>'Garage Door Installation',
   'text'=>'Tritch did an amazing job on our new garage door. The installers were professional, on time, and the quality is outstanding. I couldn\'t be happier — the whole neighborhood has been asking who did the work.'],
  ['photo'=>'/assets/images/reviewer-diane.jpg',  'name'=>'Diane W.',  'city'=>'Sandusky, OH',    'service'=>'Entry Door Installation',
   'text'=>'From the showroom visit to final installation, every step was handled with care. Our new front door looks stunning and the energy savings have been noticeable since day one. True professionals.'],
  ['photo'=>'/assets/images/reviewer-tom.jpg',    'name'=>'Tom B.',    'city'=>'Norwalk, OH',     'service'=>'Window Replacement',
   'text'=>'We had three windows replaced and the crew was in and out in one day. Clean, efficient, and the windows look beautiful. Noticed an immediate difference in comfort and noise reduction.'],
  ['photo'=>'/assets/images/reviewer-mark.jpg',   'name'=>'Mark T.',   'city'=>'Sandusky, OH',    'service'=>'Commercial Doors',
   'text'=>'Our commercial overhead door replacement was completed on schedule and within budget. Excellent communication from start to finish. Tritch has earned our business for years to come.'],
  ['photo'=>'/assets/images/reviewer-sarah.jpg',  'name'=>'Sarah L.',  'city'=>'Tiffin, OH',      'service'=>'Entry Door Installation',
   'text'=>"Professional service and outstanding workmanship. We've used Tritch for multiple projects and they never disappoint. The quality and attention to detail is second to none."],
  ['photo'=>'/assets/images/reviewer-rachel.jpg', 'name'=>'Rachel M.', 'city'=>'Port Clinton, OH','service'=>'Window Replacement',
   'text'=>'Wonderful experience from start to finish. The estimate was fair and honest, and the installers were polite and professional. The new windows have already cut our heating bills.'],
];
?>
<section id="testimonial-slider" aria-labelledby="ts-heading">
  <div class="container">

    <div class="text-center mb-5 fade-up">
      <span class="section-label">Customer Stories</span>
      <div class="section-divider mx-auto"></div>
      <h2 id="ts-heading">Hear It From Our Customers</h2>
      <p style="max-width:480px;margin:.5rem auto 0;color:var(--muted);">
        Real people. Real projects. Across Northwest Ohio since 1947.
      </p>
    </div>

    <div class="ts-slider-wrap fade-up">

      <!-- Prev button -->
      <button class="ts-arrow ts-arrow-prev" id="tsPrev" aria-label="Previous review">
        <i class="bi bi-chevron-left"></i>
      </button>

      <!-- Track -->
      <div class="ts-track-outer">
        <div class="ts-track" id="tsTrack">
          <?php foreach ($sliderReviews as $i => $r): ?>
            <div class="ts-card <?php echo $i === 0 ? 'ts-active' : ''; ?>" role="group" aria-label="Review <?php echo $i+1; ?>">
              <!-- Reviewer photo -->
              <div class="ts-photo-wrap">
                <img src="<?php echo $r['photo']; ?>"
                     alt="<?php echo htmlspecialchars($r['name']); ?>"
                     class="ts-photo"
                     onerror="this.style.display='none';this.nextElementSibling.style.display='flex';">
                <div class="ts-photo-fallback" style="display:none;">
                  <?php echo strtoupper(substr($r['name'], 0, 1)); ?>
                </div>
              </div>
              <!-- Stars -->
              <div class="ts-stars" aria-label="5 stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
              </div>
              <!-- Quote -->
              <p class="ts-text">"<?php echo htmlspecialchars($r['text']); ?>"</p>
              <!-- Author -->
              <div class="ts-name"><?php echo htmlspecialchars($r['name']); ?></div>
              <div class="ts-meta">
                <i class="bi bi-geo-alt-fill me-1" style="color:var(--red);font-size:.7rem;"></i>
                <?php echo htmlspecialchars($r['city']); ?>
                <span class="ts-sep">·</span>
                <?php echo htmlspecialchars($r['service']); ?>
              </div>
              <img src="https://www.gstatic.com/images/branding/googlelogo/svg/googlelogo_clr_74x24px.svg"
                   alt="Google" class="ts-google-logo">
            </div>
          <?php endforeach; ?>
        </div>
      </div>

      <!-- Next button -->
      <button class="ts-arrow ts-arrow-next" id="tsNext" aria-label="Next review">
        <i class="bi bi-chevron-right"></i>
      </button>

    </div>

    <!-- Dot indicators -->
    <div class="ts-dots" id="tsDots" aria-label="Review navigation">
      <?php foreach ($sliderReviews as $i => $r): ?>
        <button class="ts-dot <?php echo $i === 0 ? 'ts-dot-active' : ''; ?>"
                data-idx="<?php echo $i; ?>"
                aria-label="Go to review <?php echo $i+1; ?>"></button>
      <?php endforeach; ?>
    </div>

  </div>
</section>

<script>
(function () {
  const track  = document.getElementById('tsTrack');
  const cards  = track ? Array.from(track.querySelectorAll('.ts-card')) : [];
  const dots   = Array.from(document.querySelectorAll('#tsDots .ts-dot'));
  if (!cards.length) return;

  let current = 0;
  let timer;

  function goTo(idx) {
    cards[current].classList.remove('ts-active');
    dots[current] && dots[current].classList.remove('ts-dot-active');
    current = (idx + cards.length) % cards.length;
    cards[current].classList.add('ts-active');
    dots[current] && dots[current].classList.add('ts-dot-active');
  }

  function startTimer() {
    clearInterval(timer);
    timer = setInterval(() => goTo(current + 1), 6000);
  }

  document.getElementById('tsPrev') && document.getElementById('tsPrev').addEventListener('click', () => { goTo(current - 1); startTimer(); });
  document.getElementById('tsNext') && document.getElementById('tsNext').addEventListener('click', () => { goTo(current + 1); startTimer(); });
  dots.forEach(dot => dot.addEventListener('click', () => { goTo(+dot.dataset.idx); startTimer(); }));

  startTimer();
})();
</script>

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

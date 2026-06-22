<!-- =============== PORTFOLIO FULL =============== -->
<section id="portfolio-full" aria-labelledby="portfolio-full-heading">
  <div class="container">

    <div class="text-center mb-4 fade-up">
      <h2 id="portfolio-full-heading" class="text-navy">All Projects</h2>
    </div>

    <!-- Filter Tabs -->
    <div class="portfolio-filters fade-up">
      <button class="pf-btn active" data-filter="all">All Projects</button>
      <button class="pf-btn" data-filter="Government">Government</button>
      <button class="pf-btn" data-filter="Healthcare">Healthcare</button>
      <button class="pf-btn" data-filter="E-Commerce">E-Commerce</button>
      <button class="pf-btn" data-filter="Custom Software">Custom Software</button>
      <button class="pf-btn" data-filter="Non-Profit">Non-Profit</button>
    </div>

    <div class="row g-4">
      <?php foreach ($config['portfolio_items'] as $i => $item): ?>
        <div class="col-lg-4 col-md-6 portfolio-item fade-up"
             data-cat="<?php echo htmlspecialchars($item['category']); ?>"
             style="transition-delay:<?php echo ($i % 3) * 0.1; ?>s;">
          <div class="portfolio-card">
            <img
              src="https://placehold.co/600x340/<?php echo $item['color']; ?>?text=<?php echo urlencode($item['title']); ?>"
              alt="<?php echo htmlspecialchars($item['title']); ?>"
            >
            <div class="portfolio-card-overlay">
              <h5><?php echo $item['title']; ?></h5>
              <p><?php echo $item['category']; ?> — <?php echo $item['tag']; ?></p>
            </div>
            <div class="portfolio-card-body">
              <span class="portfolio-tag"><?php echo $item['category']; ?></span>
              <h5 class="mt-2"><?php echo $item['title']; ?></h5>
              <p style="font-size:.82rem;color:var(--muted);margin:0;"><?php echo $item['tag']; ?></p>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>

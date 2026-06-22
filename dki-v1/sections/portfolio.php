<!-- =============== PORTFOLIO =============== -->
<section id="portfolio" aria-labelledby="portfolio-heading">
  <div class="container">

    <div class="d-flex flex-wrap justify-content-between align-items-end mb-5 fade-up">
      <div>
        <span class="section-label dark">Our Work</span>
        <div class="section-divider"></div>
        <h2 id="portfolio-heading">Featured Projects</h2>
      </div>
      <a href="portfolio.php" class="btn-outline-navy">VIEW ALL PROJECTS <i class="bi bi-arrow-right ms-1"></i></a>
    </div>

    <div class="row g-4">
      <?php foreach ($config['portfolio_items'] as $i => $item): ?>
        <?php [$bg, $fg] = explode('/', $item['color']); ?>
        <div class="col-lg-4 col-md-6 fade-up" style="transition-delay:<?php echo ($i % 3) * 0.1; ?>s;">
          <div class="portfolio-card-dki">
            <div class="portfolio-img-wrap">
              <img src="https://placehold.co/600x380/<?php echo $bg; ?>/<?php echo $fg; ?>?text=<?php echo urlencode($item['title']); ?>"
                   alt="<?php echo htmlspecialchars($item['title']); ?>">
              <div class="portfolio-overlay">
                <span class="portfolio-overlay-title"><?php echo htmlspecialchars($item['title']); ?></span>
                <span class="portfolio-overlay-cat"><?php echo htmlspecialchars($item['category']); ?></span>
                <a href="portfolio.php" class="portfolio-overlay-btn">View Project <i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
            <div class="portfolio-card-body">
              <div class="portfolio-tags">
                <span class="ptag ptag-cat"><?php echo htmlspecialchars($item['category']); ?></span>
                <span class="ptag ptag-tech"><?php echo htmlspecialchars($item['tag']); ?></span>
              </div>
              <h5><?php echo htmlspecialchars($item['title']); ?></h5>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>

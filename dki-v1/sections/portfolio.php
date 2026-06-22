<!-- =============== PORTFOLIO =============== -->
<section id="portfolio" aria-labelledby="portfolio-heading">
  <div class="container">

    <div class="text-center mb-5 fade-up">
      <span class="section-label dark">Our Work</span>
      <div class="section-divider mx-auto"></div>
      <h2 id="portfolio-heading">Featured Projects</h2>
      <p class="mt-3 mx-auto" style="max-width:520px;color:var(--muted);">
        A selection of recent projects across government, healthcare, e-commerce, and custom software development.
      </p>
    </div>

    <div class="row g-4">
      <?php foreach ($config['portfolio_items'] as $i => $item): ?>
        <div class="col-lg-4 col-md-6 fade-up" style="transition-delay:<?php echo ($i % 3) * 0.1; ?>s;">
          <div class="portfolio-card">
            <img
              src="https://placehold.co/600x320/<?php echo $item['color']; ?>?text=<?php echo urlencode($item['title']); ?>"
              alt="<?php echo htmlspecialchars($item['title']); ?>"
            >
            <div class="portfolio-card-overlay">
              <h5><?php echo $item['title']; ?></h5>
              <p><?php echo $item['category']; ?></p>
              <a href="portfolio.php" class="btn-outline-white mt-2" style="font-size:.75rem;padding:.4rem 1rem;">
                View Case Study
              </a>
            </div>
            <div class="portfolio-card-body">
              <span class="portfolio-tag"><?php echo $item['tag']; ?></span>
              <h5 class="mt-2"><?php echo $item['title']; ?></h5>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <div class="text-center mt-5 fade-up">
      <a href="portfolio.php" class="btn-outline-navy btn-lg">
        View All Projects <i class="bi bi-arrow-right ms-1"></i>
      </a>
    </div>

  </div>
</section>

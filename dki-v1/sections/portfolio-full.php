<!-- =============== PORTFOLIO FULL =============== -->
<section id="portfolio-full" style="background:var(--off-white);padding:var(--section-py) 0;">
  <div class="container">

    <!-- Filter bar -->
    <div class="row justify-content-center mb-5 fade-up">
      <div class="col-auto">
        <div class="pf-filter-bar">
          <button class="pf-btn active" data-filter="all">All Projects</button>
          <button class="pf-btn" data-filter="government">Government</button>
          <button class="pf-btn" data-filter="ecommerce">E-Commerce</button>
          <button class="pf-btn" data-filter="ada">ADA Compliance</button>
          <button class="pf-btn" data-filter="corporate">Corporate</button>
          <button class="pf-btn" data-filter="nonprofit">Nonprofit</button>
        </div>
      </div>
    </div>

    <!-- Portfolio grid -->
    <div class="row g-4" id="portfolio-grid">
      <?php foreach ($config['portfolio_items'] as $item): ?>
        <div class="col-md-6 col-lg-4 portfolio-filter-item fade-up" data-cat="<?php echo $item['category']; ?>">
          <div class="portfolio-card-dki">
            <div class="portfolio-thumb" style="background:<?php echo $item['color']; ?>;">
              <span class="portfolio-initials"><?php echo strtoupper(substr(str_replace(' ','',explode(' ',$item['title'])[0]),0,2)); ?></span>
            </div>
            <div class="portfolio-overlay">
              <div class="portfolio-overlay-content">
                <h4><?php echo $item['title']; ?></h4>
                <div class="ptag-row">
                  <span class="ptag-cat"><?php echo ucfirst($item['category']); ?></span>
                  <span class="ptag-tech"><?php echo $item['tag']; ?></span>
                </div>
                <a href="/contact.php" class="btn-gold btn-sm mt-3" style="font-size:.82rem;padding:.45rem 1rem;">
                  View Case Study <i class="bi bi-arrow-right ms-1"></i>
                </a>
              </div>
            </div>
            <div class="portfolio-info">
              <h5><?php echo $item['title']; ?></h5>
              <div class="ptag-row">
                <span class="ptag-cat"><?php echo ucfirst($item['category']); ?></span>
                <span class="ptag-tech"><?php echo $item['tag']; ?></span>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>

      <!-- Extra portfolio cards to fill the grid -->
      <?php
      $extras = [
        ['title'=>'County Road Department Portal','category'=>'government','tag'=>'WordPress','color'=>'linear-gradient(135deg,#1E293B,#0F172A)'],
        ['title'=>'Regional Food Bank Website','category'=>'nonprofit','tag'=>'WordPress + WooCommerce','color'=>'linear-gradient(135deg,#1a3a2a,#0F172A)'],
        ['title'=>'Specialty Retailer E-Store','category'=>'ecommerce','tag'=>'WooCommerce','color'=>'linear-gradient(135deg,#1a1a3a,#0F172A)'],
        ['title'=>'Law Firm Web Presence','category'=>'corporate','tag'=>'Custom Design','color'=>'linear-gradient(135deg,#2a1a1a,#0F172A)'],
        ['title'=>'School District Parent Portal','category'=>'government','tag'=>'Laravel','color'=>'linear-gradient(135deg,#0d2a2a,#0F172A)'],
        ['title'=>'Healthcare Provider Network','category'=>'ada','tag'=>'WCAG 2.1 AA','color'=>'linear-gradient(135deg,#1a2a1a,#0F172A)'],
      ];
      foreach ($extras as $item):
      ?>
        <div class="col-md-6 col-lg-4 portfolio-filter-item fade-up" data-cat="<?php echo $item['category']; ?>">
          <div class="portfolio-card-dki">
            <div class="portfolio-thumb" style="background:<?php echo $item['color']; ?>;">
              <span class="portfolio-initials"><?php echo strtoupper(substr(str_replace(' ','',explode(' ',$item['title'])[0]),0,2)); ?></span>
            </div>
            <div class="portfolio-overlay">
              <div class="portfolio-overlay-content">
                <h4><?php echo $item['title']; ?></h4>
                <div class="ptag-row">
                  <span class="ptag-cat"><?php echo ucfirst($item['category']); ?></span>
                  <span class="ptag-tech"><?php echo $item['tag']; ?></span>
                </div>
                <a href="/contact.php" class="btn-gold btn-sm mt-3" style="font-size:.82rem;padding:.45rem 1rem;">
                  View Case Study <i class="bi bi-arrow-right ms-1"></i>
                </a>
              </div>
            </div>
            <div class="portfolio-info">
              <h5><?php echo $item['title']; ?></h5>
              <div class="ptag-row">
                <span class="ptag-cat"><?php echo ucfirst($item['category']); ?></span>
                <span class="ptag-tech"><?php echo $item['tag']; ?></span>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <!-- Load more / CTA -->
    <div class="row mt-5 fade-up">
      <div class="col-12 text-center">
        <p style="color:var(--slate);margin-bottom:1.5rem;">
          These are just highlights from 200+ completed projects. Ready to be next?
        </p>
        <a href="/contact.php" class="btn-gold">
          <i class="bi bi-send-fill me-2"></i> Start Your Project
        </a>
      </div>
    </div>

  </div>
</section>

<!-- Stats bar -->
<section style="background:var(--navy);padding:4rem 0;">
  <div class="container">
    <div class="row g-4 text-center">
      <?php foreach ($config['stats'] as $stat): ?>
        <div class="col-6 col-md-3 fade-up">
          <div class="stat-num" data-target="<?php echo $stat['num']; ?>" style="color:var(--gold);font-size:2.5rem;font-weight:800;font-family:var(--font-heading);"><?php echo $stat['num']; ?></div>
          <div style="color:var(--muted);font-size:.9rem;margin-top:.25rem;"><?php echo $stat['label']; ?></div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

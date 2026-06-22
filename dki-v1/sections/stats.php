<!-- =============== STATS =============== -->
<section id="stats" aria-label="Agency Statistics">
  <div class="container">
    <div class="row g-4 justify-content-center">
      <?php foreach ($config['stats'] as $i => $stat): ?>
        <div class="col-lg-3 col-md-6 fade-up" style="transition-delay:<?php echo $i * 0.1; ?>s;">
          <div class="stat-card">
            <div class="stat-num" data-target="<?php echo $stat['num']; ?>"><?php echo $stat['num']; ?></div>
            <div class="stat-label"><?php echo $stat['label']; ?></div>
            <div class="stat-bar"></div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

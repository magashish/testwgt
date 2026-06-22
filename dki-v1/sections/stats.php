<!-- =============== STATS =============== -->
<section id="stats" aria-labelledby="stats-heading">
  <div class="container">

    <div class="text-center mb-5 fade-up">
      <span class="section-label dark">By the Numbers</span>
      <div class="section-divider mx-auto"></div>
      <h2 id="stats-heading" class="text-navy">Results That Speak For Themselves</h2>
      <p class="mt-3 mx-auto" style="max-width:520px;color:var(--muted);">
        Over a decade of delivering measurable outcomes for government, healthcare, and enterprise clients.
      </p>
    </div>

    <div class="row g-4">
      <?php foreach ($config['stats'] as $i => $stat): ?>
        <?php
          $raw = $stat['num'];
          $isPercent = strpos($raw, '%') !== false;
          $isPlus    = strpos($raw, '+') !== false;
          $numOnly   = preg_replace('/[^0-9]/', '', $raw);
        ?>
        <div class="col-lg-3 col-sm-6 fade-up" style="transition-delay:<?php echo $i * 0.1; ?>s;">
          <div class="stat-card">
            <div class="stat-num" data-target="<?php echo $raw; ?>"><?php echo $raw; ?></div>
            <div class="stat-label"><?php echo $stat['label']; ?></div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>

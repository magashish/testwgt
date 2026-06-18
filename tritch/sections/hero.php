<!-- =============== HERO =============== -->
<section id="hero" aria-label="Hero">
  <div class="container hero-content">
    <div class="row">
      <div class="col-lg-7 fade-up">
        <p class="hero-eyebrow"><i class="bi bi-star-fill me-1"></i> FAMILY OWNED SINCE 1947 &nbsp;|&nbsp; NORTHWEST OHIO</p>
        <h1>Northwest Ohio's Trusted Door &amp; Window Experts <span class="text-red">Since 1947</span></h1>
        <p class="hero-sub">
          Garage Doors, Garage Door Repair, Entry Doors, Windows, and Commercial Door Systems.
        </p>
        <div class="hero-ctas">
          <a href="#quote-form" class="btn-red btn-lg">
            REQUEST FREE ESTIMATE <i class="bi bi-arrow-right"></i>
          </a>
          <a href="tel:+14193329554" class="btn-outline-white btn-lg">
            <i class="bi bi-telephone-fill"></i> CALL NOW
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- Trust Bar -->
  <div class="trust-bar">
    <div class="container">
      <div class="trust-bar-inner">
        <?php
        $trustItems = [
          ['icon'=>'bi-house-heart-fill', 'label'=>'Family Owned Since 1947'],
          ['icon'=>'bi-geo-alt-fill',     'label'=>'Serving Northwest Ohio'],
          ['icon'=>'bi-building',         'label'=>'Residential &amp; Commercial'],
          ['icon'=>'bi-tools',            'label'=>'Professional Installation'],
          ['icon'=>'bi-award-fill',       'label'=>'Decades of Experience'],
        ];
        foreach ($trustItems as $item):
        ?>
          <div class="trust-item">
            <i class="bi <?php echo $item['icon']; ?>"></i>
            <span><?php echo $item['label']; ?></span>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

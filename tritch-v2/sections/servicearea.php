<!-- =============== SERVICE AREA =============== -->
<section id="servicearea" aria-labelledby="servicearea-heading">
  <div class="row g-0">

    <!-- Left — dark panel -->
    <div class="col-lg-5">
      <div class="sa-left h-100">
        <div class="ps-lg-5 ps-4">
          <span class="section-label" style="color:rgba(255,255,255,.55);">Where We Work</span>
          <div class="section-divider"></div>
          <h2 id="servicearea-heading">Proudly Serving Northwest Ohio</h2>
          <p class="mt-3">
            We provide expert door and window solutions throughout Northwest Ohio and surrounding
            areas. If you don't see your city, give us a call — we're always expanding our reach.
          </p>

          <div class="mt-3 mb-4">
            <?php foreach ($config['locations'] as $city): ?>
              <span class="city-tag">
                <i class="bi bi-geo-alt-fill me-1" style="font-size:.7rem;color:var(--red);"></i>
                <?php echo htmlspecialchars($city); ?>
              </span>
            <?php endforeach; ?>
          </div>

          <a href="#" class="btn-outline-white">VIEW ALL LOCATIONS <i class="bi bi-arrow-right ms-1"></i></a>
        </div>
      </div>
    </div>

    <!-- Right — map -->
    <div class="col-lg-7 sa-right">
      <img src="https://placehold.co/900x480/e2e8f0/6b7a99?text=Service+Area+Map+-+Northwest+Ohio"
           alt="<?php echo $config['business_name']; ?> Service Area Map">
    </div>

  </div>
</section>

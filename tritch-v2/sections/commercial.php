<!-- =============== COMMERCIAL FEATURE =============== -->
<section id="commercial" aria-labelledby="commercial-heading">
  <div class="container">
    <div class="row align-items-center gy-5">

      <div class="col-lg-6 fade-up">
        <span class="section-label" style="color:rgba(255,255,255,.5);">Commercial Solutions</span>
        <div class="section-divider"></div>
        <h2 id="commercial-heading" style="color:var(--white);">Built for Business. Built to Last.</h2>
        <p class="mt-3">
          While many competitors focus exclusively on residential, <?php echo $config['business_name']; ?>
          has the expertise and equipment to handle large-scale commercial projects. From single
          storefront doors to full-facility dock systems, we deliver on time and on budget.
        </p>

        <ul class="commercial-list mt-4">
          <?php foreach ($config['commercial_services'] as $svc): ?>
            <li><i class="bi bi-check-circle-fill"></i> <?php echo $svc['title']; ?></li>
          <?php endforeach; ?>
        </ul>

        <div class="d-flex flex-wrap gap-3 mt-2">
          <a href="#quote-form" class="btn-red">
            GET A COMMERCIAL QUOTE <i class="bi bi-arrow-right ms-1"></i>
          </a>
          <a href="<?php echo $config['phone_href']; ?>" class="btn-outline-white">
            <i class="bi bi-telephone-fill me-1"></i> <?php echo $config['phone']; ?>
          </a>
        </div>
      </div>

      <div class="col-lg-6 fade-up" style="transition-delay:.15s;">
        <img src="https://placehold.co/620x420/0f1830/ffffff?text=Commercial+Door+Solutions"
             alt="Commercial Door Solutions by <?php echo $config['business_name']; ?>"
             class="img-fluid rounded">
      </div>

    </div>
  </div>
</section>

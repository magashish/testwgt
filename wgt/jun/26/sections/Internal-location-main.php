<!-- =============== LOCATIONS PAGE — MAIN LOCATIONS SECTION =============== -->
<section id="locations" aria-labelledby="locations-page-heading">
  <div class="container">

    <div class="row align-items-start gy-5">

      <div class="col-lg-5 fade-up">
        <span class="section-label">Service Area</span>
        <div class="section-divider"></div>
        <h2 id="locations-page-heading">Top Rated Dumpster Rental In <?php echo $location_info['City']; ?></h2>
        <p class="mt-3">
          The best dumpster rental services in <?php echo $location_info['City']; ?> Florida are right in your backyard! We Got This Dumpster Rental is East Central Florida’s #1 dumpster rental company. When you want simple and straightforward services, we are the company you want to call. We treat all of our local customers the right way and take pride in the work we do for our neighbors. We are the local dumpster rental team you can trust to deliver the best dumpster rental services to all of our local communities.

        </p>

        <?php
        $locations = [
          'Belle Isle', 'Edgewood', 'Maitland', 'Orlando', 'DeLand',
          'Orange City', 'Port Orange', 'New Smyrna Beach', 'Daytona Beach',
          'DeBary', 'Sanford', 'Longwood', 'Altamonte Springs',
        ];
        ?>
        <div class="mb-4">
          <?php foreach ($locations as $city): ?>
            <a href="#contact" class="location-tag">
              <i class="bi bi-geo-alt-fill me-1" style="font-size:.75rem;"></i>
              <?php echo htmlspecialchars($city); ?>
            </a>
          <?php endforeach; ?>
        </div>

        <p style="font-size:.88rem;color:var(--text-muted);font-style:italic;">
          <i class="bi bi-info-circle me-1"></i>
          If you don’t see your city or county on the list feel free to call anyway. We are always expanding.
        </p>

        <div class="d-flex flex-wrap gap-2 mt-3">
          <a href="#contact" class="btn btn-outline-dark-wgt">
            <i class="bi bi-list-check me-1"></i> All Locations
          </a>
          <a href="#contact" class="btn btn-accent">
            <i class="bi bi-envelope-fill me-1"></i> Contact Us
          </a>
        </div>
      </div>

      <div class="col-lg-7 fade-up" style="transition-delay:.15s;">
        <div class="map-wrapper ms-xl-5">
          <iframe
            src="<?php echo $location_info['Map']; ?>"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
            title="We Got This Dumpster Rentals Service Area Map">
          </iframe>
        </div>
      </div>

    </div>
  </div>
</section>

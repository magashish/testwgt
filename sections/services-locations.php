<!-- =============== SERVICES LOCATIONS =============== -->
<section id="locations" aria-labelledby="services-locations-heading">
  <div class="container">

    <div class="row align-items-start gy-5">

      <div class="col-lg-5 fade-up">
        <span class="section-label">Service Area</span>
        <div class="section-divider"></div>
        <h2 id="services-locations-heading">#1 Local Roll Off Dumpster Rental Team</h2>
        <p class="mt-3">
          Being located in Sanford, Florida, We Got This Dumpster Rental has been proud to offer
          top rated dumpster rental services to East Central Florida for years, serving our Sanford,
          Orange, and Volusia Counties! We are the team to call for local dumpster rental services
          you can trust to provide the dumpsters you need to get your project done faster!
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
          If you don't see your city or county on the list feel free to call anyway. We are always expanding.
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
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d224574.5264490849!2d-81.38273!3d28.5383!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88e773d8fecdbc77%3A0xac3b2063ca5bf9e!2sOrlando%2C%20FL!5e0!3m2!1sen!2sus!4v1699999999999!5m2!1sen!2sus"
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

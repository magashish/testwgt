<!-- =============== DUMPSTER SIZE — SERVICE AREA =============== -->
<section id="dumpster-servicearea" aria-labelledby="dumpster-servicearea-heading" style="background:var(--light-bg);">
  <div class="container">

    <div class="row align-items-center gy-5">

      <div class="col-lg-6 fade-up">
        <span class="section-label">Service Area</span>
        <div class="section-divider"></div>
        <h2 id="dumpster-servicearea-heading"><?php echo $dumpster['yards']; ?> Yard Dumpster Rentals Near You</h2>
        <p class="mt-3"><?php echo $dumpster['area_par']; ?></p>

        <p class="mt-3" style="font-weight:700;color:var(--primary);">Our Service Area:</p>

        <?php
        $serviceAreas = [
          'Belle Isle', 'Edgewood', 'Maitland', 'Orlando', 'DeLand',
          'Orange City', 'Port Orange', 'New Smyrna Beach', 'Daytona Beach',
          'DeBary', 'Sanford', 'Longwood', 'Altamonte Springs',
        ];
        ?>
        <div class="mb-4">
          <?php foreach ($serviceAreas as $city): ?>
            <a href="#contact" class="location-tag">
              <i class="bi bi-geo-alt-fill me-1" style="font-size:.75rem;"></i>
              <?php echo htmlspecialchars($city); ?>
            </a>
          <?php endforeach; ?>
        </div>

        <p style="font-size:.88rem;color:var(--text-muted);font-style:italic;">
          <i class="bi bi-info-circle me-1"></i>
          Don't see your city? Call us anyway — we're always expanding our service area.
        </p>

        <div class="d-flex flex-wrap gap-2 mt-4">
          <a href="tel:+13215941204" class="btn btn-accent btn-lg">
            <i class="bi bi-telephone-fill me-1"></i> Call Now
          </a>
          <a href="#contact" class="btn btn-outline-dark-wgt btn-lg">
            <i class="bi bi-clipboard-check me-1"></i> Get A Quote
          </a>
        </div>
      </div>

      <div class="col-lg-6 fade-up" style="transition-delay:.15s;">
        <div class="text-center p-5 rounded"
             style="background:#fff;box-shadow:0 2px 20px rgba(0,0,0,.08);border-top:4px solid var(--accent);">
          <div style="font-size:3rem;color:var(--accent);margin-bottom:1rem;">
            <i class="bi bi-geo-alt-fill"></i>
          </div>
          <h4 style="font-weight:800;color:var(--primary);">Based in Sanford, FL</h4>
          <p style="color:var(--text-muted);margin-top:.5rem;">
            Proudly serving Orange, Seminole, and Volusia Counties.
          </p>
          <div class="mt-3 p-3 rounded" style="background:var(--light-bg);">
            <div style="font-size:1.1rem;font-weight:800;color:var(--primary);">~50 Mile Radius</div>
            <div style="font-size:.85rem;color:var(--text-muted);">Service coverage from our Sanford location</div>
          </div>
          <div class="mt-3">
            <a href="tel:+13215941204"
               style="color:var(--primary);font-size:1.3rem;font-weight:800;text-decoration:none;">
              (321) 594-1204
            </a>
            <div style="font-size:.82rem;color:var(--text-muted);">Call to confirm your area</div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

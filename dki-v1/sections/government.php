<!-- =============== GOVERNMENT =============== -->
<section id="government" aria-labelledby="gov-heading">
  <div class="container" style="position:relative;z-index:1;">

    <div class="row g-5 align-items-center">

      <!-- Left Column -->
      <div class="col-lg-7 fade-up">
        <span class="section-label">Government &amp; Municipal</span>
        <div class="section-divider"></div>
        <h2 id="gov-heading">Built for Government.<br>Compliant by Design.</h2>
        <p class="mt-3" style="max-width:580px;">
          Government entities face unique obligations: mandatory ADA compliance, public transparency,
          multi-department content management, and constituents who depend on accessible, reliable
          digital services. DKI Empire has the expertise to deliver.
        </p>

        <!-- Compliance Badges -->
        <div class="compliance-badges">
          <?php foreach ($config['compliance_badges'] as $badge): ?>
            <span class="compliance-badge">
              <i class="bi bi-patch-check-fill"></i> <?php echo $badge; ?>
            </span>
          <?php endforeach; ?>
        </div>

        <!-- Government Client Types -->
        <p style="font-size:.82rem;font-weight:700;color:rgba(255,255,255,.45);text-transform:uppercase;letter-spacing:.1em;margin-bottom:.75rem;">
          Organizations We Serve
        </p>
        <ul class="gov-client-list">
          <?php foreach ($config['client_types'] as $type): ?>
            <li>
              <i class="bi bi-check-lg"></i>
              <?php echo $type; ?>
            </li>
          <?php endforeach; ?>
        </ul>

        <div class="mt-4 d-flex flex-wrap gap-3">
          <a href="service.php?s=government-municipal" class="btn-ice">
            View Government Services <i class="bi bi-arrow-right ms-1"></i>
          </a>
          <a href="#quote-form" class="btn-outline-white">
            Get a Proposal
          </a>
        </div>
      </div>

      <!-- Right Column -->
      <div class="col-lg-5 fade-up" style="transition-delay:.15s;">
        <div class="gov-highlight-card">
          <div class="gov-big-number">50+</div>
          <div class="gov-big-label">Government &amp; Municipal Clients Served</div>
          <img
            src="https://placehold.co/480x260/1E293B/4FC3F7?text=Government+Portal"
            alt="Government Portal Screenshot"
            class="img-fluid"
            style="border-radius:10px;border:1px solid rgba(79,195,247,.2);"
          >
          <div class="mt-3 d-flex flex-wrap gap-2 justify-content-center">
            <?php foreach ($config['compliance_badges'] as $badge): ?>
              <span style="font-size:.7rem;font-weight:700;padding:.2rem .65rem;border-radius:4px;background:rgba(79,195,247,.1);border:1px solid rgba(79,195,247,.2);color:var(--ice);">
                <?php echo $badge; ?>
              </span>
            <?php endforeach; ?>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

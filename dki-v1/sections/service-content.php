<!-- =============== SERVICE CONTENT =============== -->
<section id="service-content" style="background:var(--off-white);padding:var(--section-py) 0;">
  <div class="container">
    <div class="row g-5">

      <!-- Main content -->
      <div class="col-lg-8">

        <!-- Overview -->
        <div class="fade-up">
          <span class="section-label">Overview</span>
          <div class="section-divider"></div>
          <h2 style="font-size:1.9rem;">What We Deliver</h2>
          <p style="color:var(--slate);font-size:1.05rem;line-height:1.8;">
            <?php echo $svc['full_desc']; ?>
          </p>
        </div>

        <!-- Benefits -->
        <div class="fade-up mt-5" style="transition-delay:.1s;">
          <h3 style="font-size:1.3rem;margin-bottom:1.5rem;">What's Included</h3>
          <div class="svc-benefits-grid">
            <?php foreach ($svc['benefits'] as $benefit): ?>
              <div class="svc-benefit-item">
                <i class="bi bi-check-circle-fill"></i>
                <span><?php echo $benefit; ?></span>
              </div>
            <?php endforeach; ?>
          </div>
        </div>

        <!-- Deliverables -->
        <div class="fade-up mt-5" style="transition-delay:.2s;">
          <h3 style="font-size:1.3rem;margin-bottom:1.5rem;">Project Deliverables</h3>
          <ol class="svc-deliverables-list">
            <?php foreach ($svc['deliverables'] as $i => $d): ?>
              <li>
                <span class="svc-del-num"><?php echo str_pad($i+1,2,'0',STR_PAD_LEFT); ?></span>
                <span><?php echo $d; ?></span>
              </li>
            <?php endforeach; ?>
          </ol>
        </div>

        <!-- Related services -->
        <div class="fade-up mt-5" style="transition-delay:.3s;">
          <h3 style="font-size:1.3rem;margin-bottom:1.5rem;">Often Paired With</h3>
          <div class="d-flex flex-wrap gap-2">
            <?php
            foreach ($config['services'] as $rel):
              if ($rel['slug'] === $svc_slug) continue;
            ?>
              <a href="/service.php?s=<?php echo $rel['slug']; ?>" class="svc-related-chip">
                <i class="bi <?php echo $rel['icon']; ?> me-1"></i>
                <?php echo $rel['title']; ?>
              </a>
            <?php endforeach; ?>
          </div>
        </div>

      </div>

      <!-- Sidebar -->
      <div class="col-lg-4">
        <div class="svc-sidebar sticky-top" style="top:100px;">

          <!-- Quick contact -->
          <div class="svc-sidebar-card fade-up">
            <h4>Ready to Get Started?</h4>
            <p style="color:var(--slate);font-size:.9rem;">Tell us about your project and we'll respond within one business day.</p>
            <a href="#get-started" class="btn-gold w-100 mb-3" style="justify-content:center;">
              <i class="bi bi-send-fill me-2"></i> Free Consultation
            </a>
            <a href="<?php echo $config['phone_href']; ?>" class="btn-ice w-100" style="justify-content:center;">
              <i class="bi bi-telephone-fill me-2"></i> <?php echo $config['phone']; ?>
            </a>
          </div>

          <!-- Trust signals -->
          <div class="svc-sidebar-card fade-up mt-4" style="transition-delay:.15s;">
            <h5 style="font-size:1rem;margin-bottom:1rem;">Why DKI Empire?</h5>
            <ul class="why-dki-list" style="margin:0;">
              <li><i class="bi bi-check-lg"></i> Experts since 2013</li>
              <li><i class="bi bi-check-lg"></i> 200+ projects delivered</li>
              <li><i class="bi bi-check-lg"></i> 50+ government clients</li>
              <li><i class="bi bi-check-lg"></i> 100% ADA compliance rate</li>
              <li><i class="bi bi-check-lg"></i> Transparent, fixed pricing</li>
              <li><i class="bi bi-check-lg"></i> Dedicated project manager</li>
            </ul>
          </div>

          <!-- Compliance badges (for ADA / gov services) -->
          <?php if (in_array($svc_slug, ['ada-accessibility','government-municipal'])): ?>
          <div class="svc-sidebar-card fade-up mt-4" style="transition-delay:.3s;">
            <h5 style="font-size:1rem;margin-bottom:1rem;">Compliance Standards</h5>
            <div class="d-flex flex-wrap gap-2">
              <?php foreach ($config['compliance_badges'] as $badge): ?>
                <span class="comp-chip"><?php echo $badge; ?></span>
              <?php endforeach; ?>
            </div>
          </div>
          <?php endif; ?>

        </div>
      </div>

    </div>
  </div>
</section>

<!-- =============== QUOTE FORM (anchor: get-started) =============== -->
<section id="get-started" aria-label="Request a Quote" style="background:var(--navy);padding:var(--section-py) 0;">
  <div class="hero-grid-overlay" style="opacity:.2;"></div>
  <div class="container" style="position:relative;z-index:1;">
    <div class="row justify-content-center">
      <div class="col-lg-8 fade-up text-center mb-5">
        <span class="section-label">Get Started</span>
        <div class="section-divider mx-auto"></div>
        <h2 style="color:var(--white);">Request a Free <?php echo $svc['title']; ?> Consultation</h2>
        <p style="color:rgba(255,255,255,.6);">Fill out the form below and we'll respond within one business day with a tailored recommendation and transparent quote.</p>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-lg-8 fade-up" style="transition-delay:.1s;">
        <form action="#" method="POST" novalidate>
          <div class="row g-3">
            <div class="col-sm-6">
              <input type="text" class="form-control-dki" name="name" placeholder="Full Name *" required>
            </div>
            <div class="col-sm-6">
              <input type="text" class="form-control-dki" name="org" placeholder="Organization / Company">
            </div>
            <div class="col-sm-6">
              <input type="tel" class="form-control-dki" name="phone" placeholder="Phone Number">
            </div>
            <div class="col-sm-6">
              <input type="email" class="form-control-dki" name="email" placeholder="Email Address *" required>
            </div>
            <div class="col-12">
              <select class="form-control-dki" name="service" required>
                <option value="<?php echo $svc_slug; ?>" selected><?php echo $svc['title']; ?></option>
                <?php foreach ($config['services'] as $s): ?>
                  <?php if ($s['slug'] !== $svc_slug): ?>
                    <option value="<?php echo $s['slug']; ?>"><?php echo $s['title']; ?></option>
                  <?php endif; ?>
                <?php endforeach; ?>
                <option value="other">Other / Not Sure</option>
              </select>
            </div>
            <div class="col-sm-6">
              <select class="form-control-dki" name="budget">
                <option value="" disabled selected>Estimated Budget</option>
                <option>Under $5,000</option>
                <option>$5,000 – $15,000</option>
                <option>$15,000 – $50,000</option>
                <option>$50,000+</option>
                <option>Ongoing / Retainer</option>
              </select>
            </div>
            <div class="col-sm-6">
              <select class="form-control-dki" name="timeline">
                <option value="" disabled selected>Project Timeline</option>
                <option>ASAP / Urgent</option>
                <option>1–3 Months</option>
                <option>3–6 Months</option>
                <option>6+ Months</option>
                <option>Flexible</option>
              </select>
            </div>
            <div class="col-12">
              <textarea class="form-control-dki" name="message" rows="4"
                        placeholder="Tell us about your project, goals, and any compliance requirements..."></textarea>
            </div>
            <div class="col-12">
              <button type="submit" class="btn-gold w-100 btn-lg" style="justify-content:center;">
                <i class="bi bi-send-fill me-2"></i> SEND MY FREE CONSULTATION REQUEST
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- =============== GOVERNMENT & MUNICIPAL =============== -->
<section id="government" aria-labelledby="gov-heading">
  <div class="hero-grid-overlay" style="opacity:.4;"></div>
  <div class="container" style="position:relative;z-index:1;">
    <div class="row align-items-center gy-5">

      <div class="col-lg-6 fade-up">
        <span class="section-label">Government & Municipal</span>
        <div class="section-divider"></div>
        <h2 id="gov-heading" style="color:var(--white);">
          Built for Government.<br>Compliant by Design.
        </h2>
        <p style="color:rgba(255,255,255,.7);" class="mt-3">
          Government websites have a unique set of requirements — accessibility mandates,
          security standards, public accountability, and the need to serve citizens of all
          abilities. We've built these systems for over a decade.
        </p>

        <!-- Compliance badges -->
        <div class="compliance-badges mt-4">
          <?php foreach ($config['compliance_badges'] as $badge): ?>
            <div class="comp-badge">
              <i class="bi bi-shield-fill-check"></i> <?php echo $badge; ?>
            </div>
          <?php endforeach; ?>
        </div>

        <!-- Client types -->
        <ul class="gov-client-list mt-4">
          <?php foreach ($config['client_types'] as $ct): ?>
            <li><i class="bi bi-check-lg"></i> <?php echo htmlspecialchars($ct); ?></li>
          <?php endforeach; ?>
        </ul>

        <a href="service.php?s=government-municipal" class="btn-gold mt-4 d-inline-flex">
          EXPLORE GOVERNMENT SERVICES <i class="bi bi-arrow-right ms-1"></i>
        </a>
      </div>

      <div class="col-lg-6 fade-up" style="transition-delay:.15s;">
        <div class="gov-highlight-wrap">
          <div class="gov-stat-card">
            <div class="gov-big-num">50+</div>
            <div class="gov-big-label">Government Clients Served</div>
            <hr style="border-color:rgba(255,255,255,.1);margin:1.25rem 0;">
            <div class="gov-mini-stats">
              <div class="gov-mini-item">
                <span class="gov-mini-num">100%</span>
                <span class="gov-mini-label">ADA Pass Rate</span>
              </div>
              <div class="gov-mini-item">
                <span class="gov-mini-num">0</span>
                <span class="gov-mini-label">ADA Lawsuits</span>
              </div>
              <div class="gov-mini-item">
                <span class="gov-mini-num">10+</span>
                <span class="gov-mini-label">Yrs Gov't Exp.</span>
              </div>
            </div>
          </div>
          <img src="https://placehold.co/560x320/1E293B/4FC3F7?text=Government+Portal+Project"
               alt="Government Website Project by DKI Empire"
               class="img-fluid rounded mt-4">
        </div>
      </div>

    </div>
  </div>
</section>

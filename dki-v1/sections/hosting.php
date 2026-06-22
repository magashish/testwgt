<!-- =============== HOSTING & MAINTENANCE =============== -->
<section id="hosting" aria-labelledby="hosting-heading">
  <div class="hero-grid-overlay" style="opacity:.3;"></div>
  <div class="container" style="position:relative;z-index:1;">

    <div class="text-center mb-5 fade-up">
      <span class="section-label">Managed Hosting</span>
      <div class="section-divider mx-auto"></div>
      <h2 id="hosting-heading" style="color:var(--white);">Hosting & Support You Can Count On</h2>
      <p class="mt-3 mx-auto" style="max-width:540px;color:rgba(255,255,255,.6);">
        We don't just build websites — we keep them running, secure, and compliant 24/7
        so you can focus on your mission.
      </p>
    </div>

    <div class="row align-items-start gy-5">

      <!-- Feature list -->
      <div class="col-lg-4 fade-up">
        <?php
        $hosting_features = [
          ['icon'=>'bi-lock-fill',          'title'=>'SSL & Security',        'text'=>'SSL certificates, malware scanning, and firewall protection included.'],
          ['icon'=>'bi-arrow-repeat',        'title'=>'Daily Backups',          'text'=>'Automated daily backups with 30-day retention and one-click restore.'],
          ['icon'=>'bi-speedometer2',        'title'=>'99.9% Uptime SLA',       'text'=>'Enterprise-grade infrastructure with guaranteed uptime and CDN.'],
          ['icon'=>'bi-cloud-upload-fill',   'title'=>'CMS Updates',            'text'=>'WordPress core, plugin, and theme updates handled by our team.'],
          ['icon'=>'bi-eye-fill',            'title'=>'24/7 Monitoring',        'text'=>'Round-the-clock monitoring with instant alerts and rapid response.'],
          ['icon'=>'bi-headset',             'title'=>'Priority Support',       'text'=>'Dedicated support with guaranteed response times for all plans.'],
        ];
        foreach ($hosting_features as $i => $f):
        ?>
          <div class="hosting-feature fade-up" style="transition-delay:<?php echo $i * 0.06; ?>s;">
            <div class="hosting-feature-icon"><i class="bi <?php echo $f['icon']; ?>"></i></div>
            <div>
              <div class="hosting-feature-title"><?php echo $f['title']; ?></div>
              <div class="hosting-feature-text"><?php echo $f['text']; ?></div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

      <!-- Plan cards -->
      <div class="col-lg-8 fade-up" style="transition-delay:.1s;">
        <div class="row g-3">

          <div class="col-md-4">
            <div class="hosting-plan-card">
              <div class="plan-name">Starter</div>
              <div class="plan-price">$99<span>/mo</span></div>
              <ul class="plan-features">
                <li><i class="bi bi-check-lg"></i> Managed WordPress Hosting</li>
                <li><i class="bi bi-check-lg"></i> SSL Certificate</li>
                <li><i class="bi bi-check-lg"></i> Daily Backups (7-day)</li>
                <li><i class="bi bi-check-lg"></i> Security Monitoring</li>
                <li><i class="bi bi-check-lg"></i> Monthly CMS Updates</li>
                <li><i class="bi bi-check-lg"></i> Email Support</li>
              </ul>
              <a href="#quote-form" class="btn-outline-white w-100" style="justify-content:center;">GET STARTED</a>
            </div>
          </div>

          <div class="col-md-4">
            <div class="hosting-plan-card hosting-plan-featured">
              <div class="plan-popular-badge"><i class="bi bi-star-fill me-1"></i> Most Popular</div>
              <div class="plan-name">Business</div>
              <div class="plan-price">$249<span>/mo</span></div>
              <ul class="plan-features">
                <li><i class="bi bi-check-lg"></i> Everything in Starter</li>
                <li><i class="bi bi-check-lg"></i> Daily Backups (30-day)</li>
                <li><i class="bi bi-check-lg"></i> CDN Performance Boost</li>
                <li><i class="bi bi-check-lg"></i> Weekly CMS Updates</li>
                <li><i class="bi bi-check-lg"></i> ADA Monitoring</li>
                <li><i class="bi bi-check-lg"></i> Priority Support 8hr SLA</li>
              </ul>
              <a href="#quote-form" class="btn-gold w-100" style="justify-content:center;">GET STARTED</a>
            </div>
          </div>

          <div class="col-md-4">
            <div class="hosting-plan-card">
              <div class="plan-name">Enterprise</div>
              <div class="plan-price">Custom</div>
              <ul class="plan-features">
                <li><i class="bi bi-check-lg"></i> Everything in Business</li>
                <li><i class="bi bi-check-lg"></i> Dedicated Infrastructure</li>
                <li><i class="bi bi-check-lg"></i> 24/7 Phone Support</li>
                <li><i class="bi bi-check-lg"></i> 2hr Emergency SLA</li>
                <li><i class="bi bi-check-lg"></i> Gov't Compliance Monitoring</li>
                <li><i class="bi bi-check-lg"></i> Quarterly ADA Audits</li>
              </ul>
              <a href="#quote-form" class="btn-outline-white w-100" style="justify-content:center;">CONTACT US</a>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>

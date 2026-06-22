<!-- =============== QUOTE FORM =============== -->
<section id="quote-form" aria-labelledby="quote-heading">
  <div class="hero-grid-overlay" style="opacity:.3;"></div>
  <div class="container" style="position:relative;z-index:1;">
    <div class="row g-5">

      <!-- Form -->
      <div class="col-lg-7 fade-up">
        <span class="section-label">Get Started</span>
        <div class="section-divider"></div>
        <h2 id="quote-heading" style="color:var(--white);">Request a Free Consultation</h2>
        <p style="color:rgba(255,255,255,.6);">
          Tell us about your project and we'll respond within one business day with a
          tailored recommendation and transparent quote.
        </p>

        <form action="#" method="POST" novalidate class="mt-4">
          <div class="row g-3">
            <div class="col-sm-6">
              <input type="text"  class="form-control-dki" name="name"  placeholder="Full Name *" required>
            </div>
            <div class="col-sm-6">
              <input type="text"  class="form-control-dki" name="org"   placeholder="Organization / Company">
            </div>
            <div class="col-sm-6">
              <input type="tel"   class="form-control-dki" name="phone" placeholder="Phone Number">
            </div>
            <div class="col-sm-6">
              <input type="email" class="form-control-dki" name="email" placeholder="Email Address *" required>
            </div>
            <div class="col-12">
              <select class="form-control-dki" name="service" required>
                <option value="" disabled selected>Select Service Needed *</option>
                <?php foreach ($config['services'] as $svc): ?>
                  <option value="<?php echo $svc['slug']; ?>"><?php echo $svc['title']; ?></option>
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

      <!-- Contact info + why DKI -->
      <div class="col-lg-5 fade-up" style="transition-delay:.15s;">
        <h3 style="color:var(--white);font-size:1.3rem;margin-bottom:1.5rem;">Get In Touch</h3>

        <div class="contact-info-item">
          <div class="ci-icon"><i class="bi bi-telephone-fill"></i></div>
          <div>
            <div class="ci-label">Call Us</div>
            <a href="<?php echo $config['phone_href']; ?>" class="ci-value"><?php echo $config['phone']; ?></a>
          </div>
        </div>

        <div class="contact-info-item">
          <div class="ci-icon"><i class="bi bi-envelope-fill"></i></div>
          <div>
            <div class="ci-label">Email Us</div>
            <a href="<?php echo $config['email_href']; ?>" class="ci-value"><?php echo $config['email']; ?></a>
          </div>
        </div>

        <div class="contact-info-item">
          <div class="ci-icon"><i class="bi bi-clock-fill"></i></div>
          <div>
            <div class="ci-label">Business Hours</div>
            <div class="ci-value"><?php echo $config['hours']; ?></div>
          </div>
        </div>

        <div class="contact-info-item">
          <div class="ci-icon"><i class="bi bi-geo-alt-fill"></i></div>
          <div>
            <div class="ci-label">Coverage</div>
            <div class="ci-value"><?php echo $config['service_area']; ?></div>
          </div>
        </div>

        <!-- Why DKI -->
        <div class="why-dki-box mt-4">
          <h6><i class="bi bi-patch-check-fill me-2" style="color:var(--gold);"></i>Why DKI Empire?</h6>
          <ul class="why-dki-list">
            <li><i class="bi bi-check-lg"></i> Government & ADA experts since 2013</li>
            <li><i class="bi bi-check-lg"></i> 200+ successful projects delivered</li>
            <li><i class="bi bi-check-lg"></i> 100% ADA compliance pass rate</li>
            <li><i class="bi bi-check-lg"></i> Full-service — design to ongoing support</li>
            <li><i class="bi bi-check-lg"></i> Transparent pricing, no hidden fees</li>
            <li><i class="bi bi-check-lg"></i> Dedicated project manager assigned</li>
          </ul>
        </div>

      </div>

    </div>
  </div>
</section>

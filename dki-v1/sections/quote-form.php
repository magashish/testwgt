<!-- =============== QUOTE FORM =============== -->
<section id="quote-form" aria-labelledby="quote-heading">
  <div class="container" style="position:relative;z-index:1;">
    <div class="row g-5">

      <!-- Form -->
      <div class="col-lg-6 fade-up">
        <span class="section-label">Get Started</span>
        <div class="section-divider"></div>
        <h2 id="quote-heading">Request a Free Consultation</h2>
        <p>Tell us about your project and we will get back to you within one business day. No pressure, no obligation.</p>

        <form action="#" method="POST" novalidate class="mt-4">
          <div class="row g-3">
            <div class="col-sm-6">
              <input type="text" class="form-control-dki" name="name" placeholder="Full Name *" required>
            </div>
            <div class="col-sm-6">
              <input type="text" class="form-control-dki" name="org" placeholder="Organization / Company">
            </div>
            <div class="col-sm-6">
              <input type="tel" class="form-control-dki" name="phone" placeholder="Phone Number *" required>
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
            <div class="col-12">
              <textarea class="form-control-dki" name="message" rows="4"
                        placeholder="Tell us about your project or goals (optional)"></textarea>
            </div>
            <div class="col-12">
              <button type="submit" class="btn-gold w-100" style="justify-content:center;padding:.9rem;">
                <i class="bi bi-send-fill me-2"></i> SEND MY REQUEST
              </button>
            </div>
          </div>
        </form>
      </div>

      <!-- Contact Info + Why Choose -->
      <div class="col-lg-6 fade-up" style="transition-delay:.15s;">
        <h3 style="color:var(--white);font-size:1.3rem;margin-bottom:1.5rem;">Contact Us Directly</h3>

        <div class="contact-info-item">
          <div class="ci-icon"><i class="bi bi-telephone-fill"></i></div>
          <div>
            <div class="ci-label">Call or Text</div>
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
            <div class="ci-label">Based in</div>
            <div class="ci-value"><?php echo $config['city']; ?></div>
            <div style="font-size:.82rem;color:rgba(255,255,255,.45);"><?php echo $config['service_area']; ?></div>
          </div>
        </div>

        <div style="margin-top:2rem;">
          <p style="font-size:.82rem;font-weight:700;color:rgba(255,255,255,.45);text-transform:uppercase;letter-spacing:.1em;margin-bottom:.75rem;">
            Why Choose DKI Empire
          </p>
          <ul class="why-choose-list">
            <li><i class="bi bi-check-lg"></i> Over <?php echo (date('Y') - (int)$config['founded']); ?> years of digital agency experience</li>
            <li><i class="bi bi-check-lg"></i> Specialists in government &amp; ADA compliance</li>
            <li><i class="bi bi-check-lg"></i> 200+ successful projects delivered</li>
            <li><i class="bi bi-check-lg"></i> Dedicated project manager assigned</li>
            <li><i class="bi bi-check-lg"></i> Full transparency — no hidden costs</li>
            <li><i class="bi bi-check-lg"></i> Ongoing support after launch</li>
          </ul>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- =============== QUOTE FORM + CONTACT =============== -->
<section id="quote-form" aria-labelledby="quote-heading">
  <div class="container">
    <div class="row g-5">

      <!-- Form -->
      <div class="col-lg-6 fade-up">
        <span class="section-label" style="color:rgba(255,255,255,.5);">Get Started</span>
        <div class="section-divider"></div>
        <h2 id="quote-heading" style="color:var(--white);">Get Your Free Estimate</h2>
        <p>Fill out the form and we'll get back to you promptly. No pressure, no obligation.</p>

        <form action="#" method="POST" novalidate class="mt-4">
          <div class="row g-3">
            <div class="col-sm-6">
              <input type="text"  class="form-control-tritch" name="name"  placeholder="Full Name *"     required>
            </div>
            <div class="col-sm-6">
              <input type="tel"   class="form-control-tritch" name="phone" placeholder="Phone Number *"  required>
            </div>
            <div class="col-sm-6">
              <input type="email" class="form-control-tritch" name="email" placeholder="Email Address *" required>
            </div>
            <div class="col-sm-6">
              <input type="text"  class="form-control-tritch" name="city"  placeholder="Your City">
            </div>
            <div class="col-12">
              <select class="form-control-tritch" name="service" required>
                <option value="" disabled selected>Select Service Needed *</option>
                <optgroup label="Residential Services">
                  <?php foreach ($config['residential_services'] as $svc): ?>
                    <option value="<?php echo $svc['slug']; ?>"><?php echo $svc['title']; ?></option>
                  <?php endforeach; ?>
                </optgroup>
                <optgroup label="Commercial Services">
                  <?php foreach ($config['commercial_services'] as $svc): ?>
                    <option value="<?php echo $svc['slug']; ?>"><?php echo $svc['title']; ?></option>
                  <?php endforeach; ?>
                </optgroup>
                <option value="other">Other / Not Sure</option>
              </select>
            </div>
            <div class="col-12">
              <textarea class="form-control-tritch" name="message" rows="4"
                        placeholder="Tell us about your project (optional)"></textarea>
            </div>
            <div class="col-12">
              <button type="submit" class="btn-red w-100" style="justify-content:center;padding:.85rem;">
                <i class="bi bi-send-fill me-2"></i> GET MY FREE ESTIMATE
              </button>
            </div>
          </div>
        </form>
      </div>

      <!-- Contact info -->
      <div class="col-lg-6 fade-up" style="transition-delay:.15s;">
        <h3 style="color:var(--white);font-size:1.4rem;margin-bottom:1.5rem;">Contact Us</h3>

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
            <div style="font-size:.82rem;color:rgba(255,255,255,.5);"><?php echo $config['hours_sat']; ?></div>
          </div>
        </div>

        <div class="contact-info-item">
          <div class="ci-icon"><i class="bi bi-geo-alt-fill"></i></div>
          <div>
            <div class="ci-label">Service Area</div>
            <div class="ci-value"><?php echo $config['city'] . ', ' . $config['state']; ?></div>
            <div style="font-size:.82rem;color:rgba(255,255,255,.5);"><?php echo $config['service_area']; ?></div>
          </div>
        </div>

        <div class="mt-4">
          <img src="https://placehold.co/520x240/243258/ffffff?text=Tritch+Service+Vehicle"
               alt="<?php echo $config['business_name']; ?> Service Vehicle"
               class="img-fluid rounded">
        </div>
      </div>

    </div>
  </div>
</section>

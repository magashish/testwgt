<!-- =============== CONTACT INFO + FORM =============== -->
<section id="contact-main" style="background:var(--off-white);padding:var(--section-py) 0;">
  <div class="container">
    <div class="row g-5">

      <!-- Left: contact info -->
      <div class="col-lg-5 fade-up">
        <h2 style="font-size:1.6rem;margin-bottom:2rem;">Get In Touch</h2>

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

        <!-- Social links -->
        <div class="mt-4">
          <h5 style="font-size:1rem;margin-bottom:1rem;color:var(--navy);">Follow Us</h5>
          <div class="d-flex gap-3">
            <a href="<?php echo $config['facebook']; ?>" class="contact-social-link" aria-label="Facebook">
              <i class="bi bi-facebook"></i>
            </a>
            <a href="<?php echo $config['linkedin']; ?>" class="contact-social-link" aria-label="LinkedIn">
              <i class="bi bi-linkedin"></i>
            </a>
            <a href="<?php echo $config['twitter']; ?>" class="contact-social-link" aria-label="Twitter/X">
              <i class="bi bi-twitter-x"></i>
            </a>
            <a href="<?php echo $config['instagram']; ?>" class="contact-social-link" aria-label="Instagram">
              <i class="bi bi-instagram"></i>
            </a>
          </div>
        </div>

        <!-- Response time promise -->
        <div class="contact-promise-box mt-4">
          <i class="bi bi-lightning-charge-fill" style="color:var(--gold);font-size:1.5rem;"></i>
          <div>
            <strong>Fast Response Guarantee</strong>
            <p style="margin:0;color:var(--slate);font-size:.9rem;">Every inquiry receives a personal response within one business day — not an automated reply.</p>
          </div>
        </div>
      </div>

      <!-- Right: form -->
      <div class="col-lg-7 fade-up" style="transition-delay:.1s;">
        <div class="contact-form-card">
          <h3 style="margin-bottom:1.5rem;font-size:1.4rem;">Send Us a Message</h3>
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
                  <option value="" disabled selected>Select Service Needed *</option>
                  <?php foreach ($config['services'] as $svc): ?>
                    <option value="<?php echo $svc['slug']; ?>"><?php echo $svc['title']; ?></option>
                  <?php endforeach; ?>
                  <option value="other">Other / Not Sure</option>
                </select>
              </div>
              <div class="col-12">
                <textarea class="form-control-dki" name="message" rows="5"
                          placeholder="Tell us about your project, goals, and any compliance requirements..."></textarea>
              </div>
              <div class="col-12">
                <button type="submit" class="btn-gold w-100" style="justify-content:center;font-size:1rem;padding:1rem;">
                  <i class="bi bi-send-fill me-2"></i> SEND MESSAGE
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Services quick links -->
<section style="background:var(--white);padding:4rem 0;">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10 fade-up text-center mb-4">
        <h3 style="font-size:1.3rem;">Looking for a specific service?</h3>
        <p style="color:var(--slate);">Browse our services to find exactly what you need — then come back and reach out.</p>
      </div>
    </div>
    <div class="row g-3 justify-content-center">
      <?php foreach ($config['services'] as $svc): ?>
        <div class="col-6 col-sm-4 col-lg-3 fade-up">
          <a href="/service.php?s=<?php echo $svc['slug']; ?>" class="contact-svc-link">
            <i class="bi <?php echo $svc['icon']; ?>"></i>
            <span><?php echo $svc['title']; ?></span>
          </a>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

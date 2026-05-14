



<!-- =============== CONTACT SECTION =============== -->
<section id="contact" aria-labelledby="contact-heading">
  <div class="container">
    <div class="row gy-5 align-items-start">

      <!-- Left: Info -->
      <div class="col-lg-5 fade-up">
        <span class="section-label">Get In Touch</span>
        <div class="section-divider"></div>
        <h2 id="contact-heading"><span class="highlight-ylw-text">Contact Us</span> Today!</h2>
        <p>
          We Got This Dumpster Rentals is ready to provide fast and affordable dumpster rental
          services where you need it most. If you have any questions or are ready to reserve your
          dumpster, call us right now and we would be happy to serve you.
        </p>

        <div class="mt-4">
          <div class="contact-info-item">
            <div class="ci-icon"><i class="bi bi-telephone-fill"></i></div>
            <div>
              <div class="ci-label">Phone / Text</div>
              <a href="tel:+13215941204">(321) 594-1204</a>
            </div>
          </div>
          <div class="contact-info-item">
            <div class="ci-icon"><i class="bi bi-envelope-fill"></i></div>
            <div>
              <div class="ci-label">Email</div>
              <a href="mailto:info@wgthauling.com">info@wgthauling.com</a>
            </div>
          </div>
          <div class="contact-info-item">
            <div class="ci-icon"><i class="bi bi-clock-fill"></i></div>
            <div>
              <div class="ci-label">Business Hours</div>
              <span>Mon – Fri: 7:00am – 5:00pm</span><br>
              <span>Saturday: 8:00am – 1:00pm</span><br>
            </div>
          </div>
          <div class="contact-info-item">
            <div class="ci-icon"><i class="bi bi-geo-alt-fill"></i></div>
            <div>
              <div class="ci-label">Service Area</div>
              <span>Sanford, FL · Orange, Seminole &amp; Volusia Counties</span>
            </div>
          </div>
        </div>

        <div class="d-flex flex-wrap gap-2 mt-4">
          <a href="tel:+13215941204" class="btn btn-accent btn-lg">
            <i class="bi bi-telephone-fill me-1"></i> Call Now
          </a>
          <a href="sms:+13215941204" class="btn btn-outline-white btn-lg">
            <i class="bi bi-chat-dots-fill me-1"></i> Text Now
          </a>
        </div>
      </div>

      <!-- Right: Form -->
      <div class="col-lg-7 fade-up" style="transition-delay:.15s;">
        <div id="contact-form"
             style="background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.1);
                    border-radius:12px;padding:2rem;">
          <h4 style="color:#fff;margin-bottom:1.5rem;">
            <i class="bi bi-clipboard-check me-2 text-accent"></i>Request A Free Quote
          </h4>
          <form method="post" action="contact-handler.php" novalidate class="contact-form">
            <div class="row g-3">
              <div class="col-sm-6">
                <label for="cf-name">Full Name <span class="text-accent">*</span></label>
                <input type="text" class="form-control" id="cf-name" name="name"
                       placeholder="John Smith" required>
              </div>
              <div class="col-sm-6">
                <label for="cf-phone">Phone Number <span class="text-accent">*</span></label>
                <input type="tel" class="form-control" id="cf-phone" name="phone"
                       placeholder="(321) 000-0000" required>
              </div>
              <div class="col-12">
                <label for="cf-email">Email Address</label>
                <input type="email" class="form-control" id="cf-email" name="email"
                       placeholder="you@example.com">
              </div>
              <div class="col-sm-6">
                <label for="cf-size">Dumpster Size Needed</label>
                <select class="form-select" id="cf-size" name="dumpster_size">
                  <option value="">Select a size...</option>
                  <option value="20yard">20 Yard</option>
                  <option value="30yard">30 Yard</option>
                  <option value="40yard">40 Yard</option>
                  <option value="unsure">Not Sure — Help Me Decide</option>
                </select>
              </div>
              <div class="col-sm-6">
                <label for="cf-date">Desired Delivery Date</label>
                <input type="date" class="form-control" id="cf-date" name="delivery_date">
              </div>
              <div class="col-12">
                <label for="cf-location">Service Address / City</label>
                <input type="text" class="form-control" id="cf-location" name="location"
                       placeholder="Orlando, FL">
              </div>
              <div class="col-12">
                <label for="cf-message">Project Details / Additional Notes</label>
                <textarea class="form-control" id="cf-message" name="message" rows="4"
                          placeholder="Tell us about your project..."></textarea>
              </div>
              <div class="col-12">
                <button type="submit" class="btn btn-accent btn-lg w-100">
                  <i class="bi bi-send-fill me-2"></i> Send My Request
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- =============== CONTACT INFO CARDS =============== -->
<section id="contact-info" aria-label="Contact Information">
  <div class="container">

    <div class="row g-4">

      <div class="col-lg-3 col-md-6 fade-up" style="transition-delay:0s;">
        <div class="cinfo-card">
          <div class="cinfo-icon"><i class="bi bi-telephone-fill"></i></div>
          <h5>Call or Text</h5>
          <p>Our team is available during business hours to answer questions and schedule visits.</p>
          <a href="<?php echo $config['phone_href']; ?>"><?php echo $config['phone']; ?></a>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 fade-up" style="transition-delay:.08s;">
        <div class="cinfo-card">
          <div class="cinfo-icon"><i class="bi bi-envelope-fill"></i></div>
          <h5>Email Us</h5>
          <p>Send us a message any time. We typically respond within one business day.</p>
          <a href="<?php echo $config['email_href']; ?>"><?php echo $config['email']; ?></a>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 fade-up" style="transition-delay:.16s;">
        <div class="cinfo-card">
          <div class="cinfo-icon"><i class="bi bi-clock-fill"></i></div>
          <h5>Business Hours</h5>
          <p>We're here to help during regular business hours with Saturday appointments available.</p>
          <span><?php echo $config['hours']; ?></span>
          <span class="d-block mt-1" style="font-size:.82rem;color:var(--muted);"><?php echo $config['hours_sat']; ?></span>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 fade-up" style="transition-delay:.24s;">
        <div class="cinfo-card">
          <div class="cinfo-icon"><i class="bi bi-geo-alt-fill"></i></div>
          <h5>Service Area</h5>
          <p>We proudly serve communities throughout Northwest Ohio and surrounding counties.</p>
          <span><?php echo $config['city'] . ', ' . $config['state']; ?></span>
          <span class="d-block mt-1" style="font-size:.82rem;color:var(--muted);"><?php echo $config['service_area']; ?></span>
        </div>
      </div>

    </div>

  </div>
</section>

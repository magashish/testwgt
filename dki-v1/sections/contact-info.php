<!-- =============== CONTACT INFO CARDS =============== -->
<section id="contact-info" aria-label="Contact Information">
  <div class="container">
    <div class="row g-4">

      <div class="col-lg-3 col-md-6 fade-up">
        <div class="contact-info-card">
          <div class="contact-info-card-icon"><i class="bi bi-telephone-fill"></i></div>
          <h5>Phone</h5>
          <a href="<?php echo $config['phone_href']; ?>"><?php echo $config['phone']; ?></a>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 fade-up" style="transition-delay:.08s;">
        <div class="contact-info-card">
          <div class="contact-info-card-icon"><i class="bi bi-envelope-fill"></i></div>
          <h5>Email</h5>
          <a href="<?php echo $config['email_href']; ?>"><?php echo $config['email']; ?></a>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 fade-up" style="transition-delay:.16s;">
        <div class="contact-info-card">
          <div class="contact-info-card-icon"><i class="bi bi-clock-fill"></i></div>
          <h5>Business Hours</h5>
          <p><?php echo $config['hours']; ?></p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 fade-up" style="transition-delay:.24s;">
        <div class="contact-info-card">
          <div class="contact-info-card-icon"><i class="bi bi-geo-alt-fill"></i></div>
          <h5>Based In</h5>
          <p><?php echo $config['city']; ?> — <?php echo $config['service_area']; ?></p>
        </div>
      </div>

    </div>
  </div>
</section>

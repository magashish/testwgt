<!-- =============== QUOTE FORM + CONTACT =============== -->
<section id="quote-form" aria-labelledby="quote-heading">
  <div class="container">
    <div class="row g-5">

      <!-- Left: Form -->
      <div class="col-lg-6 fade-up">
        <span class="section-label" style="color:rgba(255,255,255,.5);">Get Started</span>
        <div class="section-divider"></div>
        <h2 id="quote-heading" style="color:var(--white);">Get Your Free Estimate</h2>
        <p>Fill out the form and we'll get back to you promptly.</p>

        <form action="#" method="POST" novalidate>
          <div class="row g-3">
            <div class="col-sm-6">
              <input type="text" class="form-control-tritch" name="name" placeholder="Full Name" required>
            </div>
            <div class="col-sm-6">
              <input type="tel" class="form-control-tritch" name="phone" placeholder="Phone Number" required>
            </div>
            <div class="col-sm-6">
              <input type="email" class="form-control-tritch" name="email" placeholder="Email Address" required>
            </div>
            <div class="col-sm-6">
              <input type="text" class="form-control-tritch" name="city" placeholder="City">
            </div>
            <div class="col-12">
              <select class="form-control-tritch" name="service" required>
                <option value="" disabled selected>Select Service Needed</option>
                <optgroup label="Residential">
                  <?php
                  $formServices = [
                    'Garage Doors','Garage Door Openers','Garage Door Repair',
                    'Entry Doors','Windows','Patio Doors',
                  ];
                  foreach ($formServices as $svc): ?>
                    <option value="<?php echo $svc; ?>"><?php echo $svc; ?></option>
                  <?php endforeach; ?>
                </optgroup>
                <optgroup label="Commercial">
                  <?php
                  $formServicesComm = [
                    'Commercial Overhead Doors','Dock Equipment','Storefront Systems',
                    'Steel Doors','Commercial Operators','Service &amp; Repair',
                  ];
                  foreach ($formServicesComm as $svc): ?>
                    <option value="<?php echo strip_tags($svc); ?>"><?php echo $svc; ?></option>
                  <?php endforeach; ?>
                </optgroup>
              </select>
            </div>
            <div class="col-12">
              <textarea class="form-control-tritch" name="message" rows="4" placeholder="Message (optional)"></textarea>
            </div>
            <div class="col-12">
              <button type="submit" class="btn-red w-100" style="justify-content:center;padding:.85rem;">
                GET MY FREE ESTIMATE <i class="bi bi-arrow-right ms-1"></i>
              </button>
            </div>
          </div>
        </form>
      </div>

      <!-- Right: Contact info + image -->
      <div class="col-lg-6 fade-up" style="transition-delay:.15s;">
        <h3 style="color:var(--white);font-size:1.4rem;margin-bottom:1.5rem;">Contact Us</h3>

        <?php
        $contactItems = [
          ['icon'=>'bi-telephone-fill',  'label'=>'Call or Text',      'value'=>'(419) 332-9554',              'href'=>'tel:+14193329554'],
          ['icon'=>'bi-envelope-fill',   'label'=>'Email Us',          'value'=>'info@tritchdoorandwindow.net', 'href'=>'mailto:info@tritchdoorandwindow.net'],
          ['icon'=>'bi-clock-fill',      'label'=>'Business Hours',    'value'=>'Mon–Fri 8:00 AM – 5:00 PM',   'href'=>''],
          ['icon'=>'bi-geo-alt-fill',    'label'=>'Service Area',      'value'=>'Serving Northwest Ohio',       'href'=>''],
        ];
        ?>

        <?php foreach ($contactItems as $ci): ?>
          <div class="contact-info-item">
            <div class="ci-icon"><i class="bi <?php echo $ci['icon']; ?>"></i></div>
            <div>
              <div class="ci-label"><?php echo $ci['label']; ?></div>
              <?php if ($ci['href']): ?>
                <a href="<?php echo $ci['href']; ?>" class="ci-value"><?php echo $ci['value']; ?></a>
              <?php else: ?>
                <div class="ci-value"><?php echo $ci['value']; ?></div>
              <?php endif; ?>
            </div>
          </div>
        <?php endforeach; ?>

        <div class="mt-4">
          <img src="https://placehold.co/520x240/243258/ffffff?text=Tritch+Service+Vehicle"
               alt="Tritch Door &amp; Window Service Vehicle"
               class="img-fluid rounded">
        </div>
      </div>

    </div>
  </div>
</section>

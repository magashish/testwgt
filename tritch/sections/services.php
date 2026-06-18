<!-- =============== SERVICES =============== -->
<section id="services" aria-labelledby="services-heading">
  <div class="container">

    <div class="text-center mb-5 fade-up">
      <span class="section-label">What We Do</span>
      <div class="section-divider mx-auto"></div>
      <h2 id="services-heading">Our Services</h2>
      <p class="mt-3 mx-auto" style="max-width:560px;color:var(--muted);">
        From residential garage doors to large-scale commercial door systems, we have the
        expertise and products to handle any project.
      </p>
    </div>

    <?php
    $residential = [
      ['title'=>'Garage Doors',        'desc'=>'Stylish. Durable. Built to last.',        'img'=>'https://placehold.co/400x220/1a2744/ffffff?text=Garage+Doors'],
      ['title'=>'Garage Door Openers', 'desc'=>'Smart &amp; reliable solutions.',          'img'=>'https://placehold.co/400x220/243258/ffffff?text=Door+Openers'],
      ['title'=>'Garage Door Repair',  'desc'=>'Fast repairs. Same-day service.',          'img'=>'https://placehold.co/400x220/1a2744/ffffff?text=Door+Repair'],
      ['title'=>'Entry Doors',         'desc'=>'Make a lasting first impression.',         'img'=>'https://placehold.co/400x220/243258/ffffff?text=Entry+Doors'],
      ['title'=>'Windows',             'desc'=>'Energy-efficient &amp; beautiful.',        'img'=>'https://placehold.co/400x220/1a2744/ffffff?text=Windows'],
      ['title'=>'Patio Doors',         'desc'=>'Open up your living space.',               'img'=>'https://placehold.co/400x220/243258/ffffff?text=Patio+Doors'],
    ];
    $commercial = [
      ['title'=>'Commercial Overhead Doors', 'desc'=>'Built for performance.',             'img'=>'https://placehold.co/400x220/0f1830/ffffff?text=Overhead+Doors'],
      ['title'=>'Dock Equipment',            'desc'=>'Safe. Reliable. Efficient.',         'img'=>'https://placehold.co/400x220/1a2744/ffffff?text=Dock+Equipment'],
      ['title'=>'Storefront Systems',        'desc'=>'Modern. Secure. Professional.',      'img'=>'https://placehold.co/400x220/0f1830/ffffff?text=Storefront'],
      ['title'=>'Steel Doors',               'desc'=>'Strong. Secure. Reliable.',          'img'=>'https://placehold.co/400x220/1a2744/ffffff?text=Steel+Doors'],
      ['title'=>'Commercial Operators',      'desc'=>'Powerful &amp; dependable.',         'img'=>'https://placehold.co/400x220/0f1830/ffffff?text=Operators'],
      ['title'=>'Service &amp; Repair',      'desc'=>'Keep your business moving.',         'img'=>'https://placehold.co/400x220/1a2744/ffffff?text=Service+Repair'],
    ];
    ?>

    <!-- Residential -->
    <div class="mb-2 fade-up"><span class="services-sub-label residential"><i class="bi bi-house-fill me-1"></i> Residential Services</span></div>
    <div class="row g-3 mb-5">
      <?php foreach ($residential as $s): ?>
        <div class="col-lg-2 col-md-4 col-6 fade-up">
          <div class="service-card">
            <img src="<?php echo $s['img']; ?>" alt="<?php echo strip_tags($s['title']); ?>">
            <div class="service-card-body">
              <h5><?php echo $s['title']; ?></h5>
              <p><?php echo $s['desc']; ?></p>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <!-- Commercial -->
    <div class="mb-2 fade-up"><span class="services-sub-label commercial"><i class="bi bi-building me-1"></i> Commercial Services</span></div>
    <div class="row g-3">
      <?php foreach ($commercial as $s): ?>
        <div class="col-lg-2 col-md-4 col-6 fade-up">
          <div class="service-card">
            <img src="<?php echo $s['img']; ?>" alt="<?php echo strip_tags($s['title']); ?>">
            <div class="service-card-body">
              <h5><?php echo $s['title']; ?></h5>
              <p><?php echo $s['desc']; ?></p>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>

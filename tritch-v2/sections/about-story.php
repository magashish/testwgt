<!-- =============== ABOUT — STORY =============== -->
<section id="about-story" aria-labelledby="about-story-heading">
  <div class="container">

    <!-- Our Story -->
    <div class="row align-items-center gy-5 mb-5">
      <div class="col-lg-6 fade-up">
        <span class="section-label">Our Story</span>
        <div class="section-divider"></div>
        <h2 id="about-story-heading">75+ Years of Trusted Service</h2>
        <p class="mt-3">
          <?php echo $config['business_name']; ?> was founded in <?php echo $config['founded']; ?>
          with a simple mission: provide Northwest Ohio families and businesses with the finest
          door and window products backed by honest, professional service.
        </p>
        <p>
          What started as a small local operation in <?php echo $config['city']; ?> has grown
          into the region's most trusted door and window company — serving thousands of
          satisfied customers across <?php echo $config['service_area']; ?>.
        </p>
        <p>
          Through decades of change in the industry, one thing has remained constant: our
          commitment to quality craftsmanship, reliable installations, and standing behind
          every product we sell.
        </p>

        <div class="about-stats mt-4">
          <div class="about-stat">
            <div class="about-stat-num">75+</div>
            <div class="about-stat-label">Years in Business</div>
          </div>
          <div class="about-stat">
            <div class="about-stat-num">5K+</div>
            <div class="about-stat-label">Projects Completed</div>
          </div>
          <div class="about-stat">
            <div class="about-stat-num">9</div>
            <div class="about-stat-label">Trusted Brands</div>
          </div>
          <div class="about-stat">
            <div class="about-stat-num">10+</div>
            <div class="about-stat-label">Cities Served</div>
          </div>
        </div>
      </div>

      <div class="col-lg-6 fade-up" style="transition-delay:.15s;">
        <img src="https://placehold.co/620x460/1a2744/ffffff?text=Tritch+Story+Photo"
             alt="<?php echo $config['business_name']; ?> — Our Story"
             class="img-fluid rounded">
      </div>
    </div>

    <!-- Mission & Values -->
    <div class="row gy-4 mt-2">
      <div class="col-12 text-center fade-up">
        <span class="section-label">Our Values</span>
        <div class="section-divider mx-auto"></div>
        <h2>What Drives Everything We Do</h2>
      </div>

      <?php
      $values = [
        ['icon' => 'bi-award-fill',       'title' => 'Quality First',        'text' => 'We only carry products from industry-leading manufacturers we trust to perform beautifully for years.'],
        ['icon' => 'bi-people-fill',      'title' => 'Community Roots',      'text' => 'We live and work in Northwest Ohio. When you support Tritch, you\'re supporting a local family and local jobs.'],
        ['icon' => 'bi-handshake-fill',   'title' => 'Honest & Transparent', 'text' => 'No hidden fees, no upsells. We provide straightforward estimates and stand behind our quotes.'],
        ['icon' => 'bi-tools',            'title' => 'Expert Craftsmen',     'text' => 'Our certified technicians take pride in every installation, treating your home or business with care.'],
        ['icon' => 'bi-shield-fill-check','title' => 'Built to Last',        'text' => 'Every product we install is selected for durability, energy efficiency, and long-term performance.'],
        ['icon' => 'bi-headset',          'title' => 'Here After the Sale',  'text' => 'Our relationship doesn\'t end at installation. We\'re here for service, repairs, and future needs.'],
      ];
      ?>

      <?php foreach ($values as $i => $v): ?>
        <div class="col-lg-4 col-md-6 fade-up" style="transition-delay:<?php echo $i * 0.08; ?>s;">
          <div class="feature-card">
            <div class="feature-icon"><i class="bi <?php echo $v['icon']; ?>"></i></div>
            <h5 style="font-size:1rem;font-weight:800;margin-bottom:.4rem;"><?php echo $v['title']; ?></h5>
            <p style="font-size:.88rem;color:var(--muted);margin:0;"><?php echo $v['text']; ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>

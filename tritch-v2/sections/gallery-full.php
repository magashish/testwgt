<!-- =============== GALLERY FULL =============== -->
<section id="gallery-full" aria-labelledby="gallery-full-heading">
  <div class="container">

    <div class="text-center mb-4 fade-up">
      <span class="section-label">Browse Projects</span>
      <div class="section-divider mx-auto"></div>
      <h2 id="gallery-full-heading">Our Completed Projects</h2>
      <p class="mt-2 mx-auto" style="max-width:520px;color:var(--muted);">
        From residential garage doors to large commercial installations — see the quality
        and craftsmanship we bring to every project.
      </p>
    </div>

    <!-- Filter Tabs -->
    <div class="gallery-filters fade-up">
      <button class="gf-btn active" data-filter="all">All Projects</button>
      <button class="gf-btn" data-filter="residential">Residential</button>
      <button class="gf-btn" data-filter="commercial">Commercial</button>
      <button class="gf-btn" data-filter="windows">Doors &amp; Windows</button>
    </div>

    <?php
    $projects = [
      ['label' => 'Garage Door Installation',   'cat' => 'residential', 'color' => '1a2744'],
      ['label' => 'Entry Door Replacement',      'cat' => 'residential', 'color' => '243258'],
      ['label' => 'Window Replacement Project',  'cat' => 'windows',     'color' => '0f1830'],
      ['label' => 'Patio Door Installation',     'cat' => 'residential', 'color' => '1a2744'],
      ['label' => 'Commercial Overhead Door',    'cat' => 'commercial',  'color' => '0f1830'],
      ['label' => 'Storefront Door System',      'cat' => 'commercial',  'color' => '243258'],
      ['label' => 'Steel Entry Door',            'cat' => 'windows',     'color' => '1a2744'],
      ['label' => 'Garage Door Opener Install',  'cat' => 'residential', 'color' => '243258'],
      ['label' => 'Dock Equipment Install',      'cat' => 'commercial',  'color' => '0f1830'],
      ['label' => 'Bay Window Replacement',      'cat' => 'windows',     'color' => '1a2744'],
      ['label' => 'Commercial Steel Door',       'cat' => 'commercial',  'color' => '243258'],
      ['label' => 'Garage Spring Repair',        'cat' => 'residential', 'color' => '0f1830'],
      ['label' => 'Sliding Patio Door',          'cat' => 'windows',     'color' => '243258'],
      ['label' => 'Loading Dock Upgrade',        'cat' => 'commercial',  'color' => '1a2744'],
      ['label' => 'French Door Entry',           'cat' => 'residential', 'color' => '0f1830'],
      ['label' => 'Picture Window Install',      'cat' => 'windows',     'color' => '243258'],
      ['label' => 'Carriage House Door',         'cat' => 'residential', 'color' => '1a2744'],
      ['label' => 'Commercial Roll-Up Door',     'cat' => 'commercial',  'color' => '0f1830'],
    ];
    ?>

    <div class="row g-3 gallery-grid mt-2">
      <?php foreach ($projects as $i => $p): ?>
        <div class="col-lg-2 col-md-4 col-6 fade-up gallery-item"
             data-cat="<?php echo $p['cat']; ?>"
             style="transition-delay:<?php echo ($i % 6) * 0.06; ?>s;">
          <div class="gallery-img-wrap">
            <img src="https://placehold.co/600x400/<?php echo $p['color']; ?>/ffffff?text=<?php echo urlencode('Project ' . ($i + 1)); ?>"
                 alt="<?php echo htmlspecialchars($p['label']); ?>">
            <div class="gallery-overlay">
              <span><?php echo htmlspecialchars($p['label']); ?></span>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <div class="text-center mt-5 fade-up">
      <p style="color:var(--muted);font-size:.9rem;margin-bottom:1rem;">
        Ready to start your own project?
      </p>
      <a href="#quote-form" class="btn-red btn-lg">
        GET A FREE ESTIMATE <i class="bi bi-arrow-right ms-1"></i>
      </a>
    </div>

  </div>
</section>

<!-- =============== GALLERY =============== -->
<section id="gallery" aria-labelledby="gallery-heading">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center mb-4 fade-up">
      <div>
        <span class="section-label" style="color:rgba(255,255,255,.55);">Our Work</span>
        <h2 id="gallery-heading" style="color:var(--white);margin:0;">Featured Projects</h2>
      </div>
      <a href="#" class="gallery-link">VIEW FULL GALLERY <i class="bi bi-arrow-right"></i></a>
    </div>

    <?php
    $galleryImages = [
      'Residential Garage Door Project', 'Commercial Overhead Door',
      'Entry Door Installation',         'Window Replacement',
      'Steel Door Project',              'Storefront System',
      'Patio Door Installation',         'Dock Equipment',
      'Garage Door Opener',              'Commercial Repair',
    ];
    $colors = ['243258','1a2744','0f1830','243258','1a2744','0f1830','1a2744','243258','0f1830','1a2744'];
    ?>
    <div class="row g-2">
      <?php foreach ($galleryImages as $i => $alt): ?>
        <div class="col-lg-2 col-md-4 col-6 fade-up" style="transition-delay:<?php echo ($i % 5) * 0.07; ?>s;">
          <div class="gallery-img-wrap">
            <img src="https://placehold.co/600x360/<?php echo $colors[$i]; ?>/ffffff?text=<?php echo urlencode('Project ' . ($i+1)); ?>"
                 alt="<?php echo htmlspecialchars($alt); ?>">
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <div class="text-center mt-4 fade-up">
      <a href="#" class="btn-outline-white">VIEW ALL PROJECTS <i class="bi bi-arrow-right ms-1"></i></a>
    </div>

  </div>
</section>

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
      ['src'=>'https://placehold.co/600x360/243258/ffffff?text=Project+1',  'alt'=>'Residential Garage Door Project'],
      ['src'=>'https://placehold.co/600x360/1a2744/ffffff?text=Project+2',  'alt'=>'Commercial Overhead Door'],
      ['src'=>'https://placehold.co/600x360/0f1830/ffffff?text=Project+3',  'alt'=>'Entry Door Installation'],
      ['src'=>'https://placehold.co/600x360/243258/ffffff?text=Project+4',  'alt'=>'Window Replacement'],
      ['src'=>'https://placehold.co/600x360/1a2744/ffffff?text=Project+5',  'alt'=>'Steel Door Project'],
      ['src'=>'https://placehold.co/600x360/0f1830/ffffff?text=Project+6',  'alt'=>'Storefront System'],
      ['src'=>'https://placehold.co/600x360/1a2744/ffffff?text=Project+7',  'alt'=>'Patio Door Installation'],
      ['src'=>'https://placehold.co/600x360/243258/ffffff?text=Project+8',  'alt'=>'Dock Equipment'],
      ['src'=>'https://placehold.co/600x360/0f1830/ffffff?text=Project+9',  'alt'=>'Garage Door Opener'],
      ['src'=>'https://placehold.co/600x360/1a2744/ffffff?text=Project+10', 'alt'=>'Commercial Repair'],
    ];
    ?>

    <div class="row g-2">
      <?php foreach ($galleryImages as $i => $img): ?>
        <div class="col-lg-<?php echo ($i < 5) ? '2' : '2'; ?> col-md-4 col-6 fade-up" style="transition-delay:<?php echo ($i % 5) * 0.07; ?>s;">
          <div class="gallery-img-wrap">
            <img src="<?php echo $img['src']; ?>" alt="<?php echo $img['alt']; ?>">
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <div class="text-center mt-4 fade-up">
      <a href="#" class="btn-outline-white">VIEW ALL PROJECTS <i class="bi bi-arrow-right ms-1"></i></a>
    </div>

  </div>
</section>

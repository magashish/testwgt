<!-- =============== ADA COMPLIANCE =============== -->
<section id="ada" aria-labelledby="ada-heading">
  <div class="container">

    <div class="text-center mb-5 fade-up">
      <span class="section-label">Accessibility Compliance</span>
      <div class="section-divider mx-auto"></div>
      <h2 id="ada-heading" style="color:var(--white);">ADA Compliance — Your Legal Shield</h2>
      <p class="mt-3 mx-auto" style="max-width:580px;color:rgba(255,255,255,.6);">
        ADA lawsuits against websites have increased 300% in the past five years. Every
        organization with a public-facing website is at risk. We make you compliant, keep
        you compliant, and provide documentation to protect you legally.
      </p>
    </div>

    <!-- WCAG Level Cards -->
    <div class="row g-4 mb-5">
      <div class="col-lg-4 col-md-12 fade-up" style="transition-delay:0s;">
        <div class="ada-level-card">
          <div class="ada-level-badge">WCAG 2.1</div>
          <div class="ada-level-letter">A</div>
          <div class="ada-level-name">Level A</div>
          <p>Minimum compliance. Covers the most critical accessibility barriers for users with disabilities.</p>
          <ul class="ada-feature-list">
            <li>Alt text for images</li>
            <li>Keyboard navigability</li>
            <li>No seizure-triggering content</li>
            <li>Basic semantic HTML structure</li>
          </ul>
        </div>
      </div>
      <div class="col-lg-4 col-md-12 fade-up" style="transition-delay:.1s;">
        <div class="ada-level-card ada-level-featured">
          <div class="ada-popular-badge"><i class="bi bi-star-fill me-1"></i> Most Required</div>
          <div class="ada-level-badge" style="border-color:var(--gold);color:var(--gold);">WCAG 2.1</div>
          <div class="ada-level-letter" style="color:var(--gold);">AA</div>
          <div class="ada-level-name">Level AA</div>
          <p>Required for government, healthcare, and most federally funded organizations under Section 508.</p>
          <ul class="ada-feature-list">
            <li>Color contrast ratios 4.5:1+</li>
            <li>Consistent navigation patterns</li>
            <li>Error identification & suggestions</li>
            <li>Resize text up to 200%</li>
          </ul>
        </div>
      </div>
      <div class="col-lg-4 col-md-12 fade-up" style="transition-delay:.2s;">
        <div class="ada-level-card">
          <div class="ada-level-badge">WCAG 2.1</div>
          <div class="ada-level-letter">AAA</div>
          <div class="ada-level-name">Level AAA</div>
          <p>Highest level of accessibility. Exceeds all legal requirements and serves the broadest possible audience.</p>
          <ul class="ada-feature-list">
            <li>Color contrast ratios 7:1+</li>
            <li>Sign language for all video</li>
            <li>Reading level guidance</li>
            <li>Enhanced focus indicators</li>
          </ul>
        </div>
      </div>
    </div>

    <!-- ADA service features -->
    <div class="row g-3 fade-up">
      <?php
      $ada_features = [
        ['icon'=>'bi-search',          'title'=>'Automated Auditing',     'text'=>'We run 200+ automated checks across your entire site.'],
        ['icon'=>'bi-person-check',    'title'=>'Manual Testing',          'text'=>'Human testers with assistive technologies validate every page.'],
        ['icon'=>'bi-file-earmark-check','title'=>'Remediation Reports',   'text'=>'Detailed reports with exact code fixes for every issue found.'],
        ['icon'=>'bi-arrow-repeat',    'title'=>'Ongoing Monitoring',      'text'=>'Continuous monitoring ensures new content stays compliant.'],
        ['icon'=>'bi-patch-check-fill','title'=>'Compliance Certificate',  'text'=>'Official documentation of compliance for legal protection.'],
        ['icon'=>'bi-headset',         'title'=>'ADA Support Hotline',     'text'=>'Dedicated support for your team on accessibility questions.'],
      ];
      foreach ($ada_features as $i => $f):
      ?>
        <div class="col-lg-2 col-md-4 col-6 fade-up" style="transition-delay:<?php echo $i * 0.06; ?>s;">
          <div class="ada-feature-tile">
            <i class="bi <?php echo $f['icon']; ?>"></i>
            <div class="ada-tile-title"><?php echo $f['title']; ?></div>
            <div class="ada-tile-text"><?php echo $f['text']; ?></div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <div class="text-center mt-5 fade-up">
      <a href="service.php?s=ada-accessibility" class="btn-gold btn-lg">
        GET YOUR ADA AUDIT <i class="bi bi-arrow-right ms-1"></i>
      </a>
    </div>

  </div>
</section>

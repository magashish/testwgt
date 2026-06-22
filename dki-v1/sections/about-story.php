<!-- =============== ABOUT STORY =============== -->
<section id="our-story" style="background:var(--white);padding:var(--section-py) 0;">
  <div class="container">

    <!-- Mission -->
    <div class="row align-items-center g-5 mb-6 fade-up">
      <div class="col-lg-6">
        <span class="section-label">Our Mission</span>
        <div class="section-divider"></div>
        <h2>We Build Digital Infrastructure That Serves People</h2>
        <p style="color:var(--slate);line-height:1.8;">
          DKI Empire was founded on a simple belief: organizations that serve the public deserve world-class digital tools. Government agencies, nonprofits, and community institutions often struggle with outdated technology and inaccessible websites — and that failure has real consequences for the people they serve.
        </p>
        <p style="color:var(--slate);line-height:1.8;">
          We exist to change that. We bring enterprise-grade design, development, and accessibility expertise to organizations that need it most — at pricing that reflects the public value of the work.
        </p>
      </div>
      <div class="col-lg-6">
        <div class="about-values-grid">
          <div class="about-value-card">
            <i class="bi bi-shield-fill-check"></i>
            <h5>Integrity</h5>
            <p>Transparent pricing, honest timelines, and results we stand behind.</p>
          </div>
          <div class="about-value-card">
            <i class="bi bi-universal-access"></i>
            <h5>Inclusion</h5>
            <p>Accessibility is not a checkbox — it's a commitment to every user.</p>
          </div>
          <div class="about-value-card">
            <i class="bi bi-award-fill"></i>
            <h5>Excellence</h5>
            <p>We measure success by outcomes, not deliverables.</p>
          </div>
          <div class="about-value-card">
            <i class="bi bi-people-fill"></i>
            <h5>Partnership</h5>
            <p>We're a long-term partner, not a one-off vendor.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Timeline -->
    <div class="row mb-5">
      <div class="col-12 fade-up text-center mb-5">
        <span class="section-label">Our Journey</span>
        <div class="section-divider mx-auto"></div>
        <h2>A Decade of Digital Impact</h2>
      </div>
    </div>
    <div class="about-timeline fade-up">
      <div class="timeline-item">
        <div class="tl-year">2013</div>
        <div class="tl-card">
          <h5>Founded in the Southeast</h5>
          <p>DKI Empire opens its doors, initially focused on small business web design and local SEO.</p>
        </div>
      </div>
      <div class="timeline-item">
        <div class="tl-year">2015</div>
        <div class="tl-card">
          <h5>First Government Contract</h5>
          <p>Awarded our first county government website project — launching what would become our core specialty.</p>
        </div>
      </div>
      <div class="timeline-item">
        <div class="tl-year">2018</div>
        <div class="tl-card">
          <h5>ADA Practice Launched</h5>
          <p>Established our dedicated ADA accessibility compliance division after seeing widespread failure across public-sector clients.</p>
        </div>
      </div>
      <div class="timeline-item">
        <div class="tl-year">2021</div>
        <div class="tl-card">
          <h5>100th Project Milestone</h5>
          <p>Delivered our 100th project — a state agency portal serving 2M+ residents — with a 100% ADA pass rate across the portfolio.</p>
        </div>
      </div>
      <div class="timeline-item">
        <div class="tl-year">2024</div>
        <div class="tl-card">
          <h5>National Expansion</h5>
          <p>Expanded services nationwide following the DOJ's finalization of digital accessibility rules under ADA Title II.</p>
        </div>
      </div>
      <div class="timeline-item">
        <div class="tl-year">Today</div>
        <div class="tl-card">
          <h5>200+ Projects &amp; Growing</h5>
          <p>Serving government entities, nonprofits, and businesses across all 50 states with a full-service digital agency model.</p>
        </div>
      </div>
    </div>

    <!-- Team intro -->
    <div class="row mt-6 fade-up">
      <div class="col-12 text-center mb-5">
        <span class="section-label">Our Team</span>
        <div class="section-divider mx-auto"></div>
        <h2>Built by People Who Care About the Work</h2>
        <p class="lead text-muted" style="max-width:600px;margin:0 auto;">
          Our team includes designers, engineers, accessibility specialists, SEO strategists, and project managers — all working under one roof toward your goals.
        </p>
      </div>
    </div>

    <!-- Tech stack -->
    <div class="row mt-4 fade-up">
      <div class="col-12 text-center">
        <h5 style="color:var(--slate);font-weight:600;margin-bottom:1.5rem;">Our Technology Stack</h5>
        <div class="d-flex flex-wrap justify-content-center gap-3">
          <?php foreach ($config['tech_stack'] as $tech): ?>
            <span class="tech-pill"><?php echo $tech; ?></span>
          <?php endforeach; ?>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- Testimonial strip -->
<section style="background:var(--off-white);padding:var(--section-py) 0;">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10 fade-up text-center mb-5">
        <span class="section-label">What Clients Say</span>
        <div class="section-divider mx-auto"></div>
        <h2>Trusted by Government &amp; Business Leaders</h2>
      </div>
    </div>
    <div class="row g-4">
      <?php foreach ($config['testimonials'] as $t): ?>
        <div class="col-md-6 fade-up">
          <div class="testimonial-card">
            <?php if (!empty($t['type'])): ?>
              <span class="testimonial-type-tag"><?php echo $t['type']; ?></span>
            <?php endif; ?>
            <div class="stars mb-3">
              <?php for ($i = 0; $i < 5; $i++): ?>
                <i class="bi bi-star-fill" style="color:var(--gold);font-size:.85rem;"></i>
              <?php endfor; ?>
            </div>
            <blockquote class="testimonial-text">"<?php echo $t['quote']; ?>"</blockquote>
            <div class="testimonial-author">
              <div class="testimonial-avatar"><?php echo strtoupper(substr($t['name'],0,1)); ?></div>
              <div>
                <div class="ta-name"><?php echo $t['name']; ?></div>
                <div class="ta-title"><?php echo $t['role']; ?></div>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

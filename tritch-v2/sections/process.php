<!-- =============== PROCESS =============== -->
<section id="process" aria-labelledby="process-heading">
  <div class="container">

    <div class="text-center mb-5 fade-up">
      <span class="section-label">How It Works</span>
      <div class="section-divider mx-auto"></div>
      <h2 id="process-heading">Our Simple Process</h2>
      <p class="mt-3 mx-auto" style="max-width:500px;color:var(--muted);">
        Getting your doors or windows replaced has never been easier. Four simple steps from
        first call to final installation.
      </p>
    </div>

    <div class="row g-4">
      <?php foreach ($config['process_steps'] as $i => $step): ?>
        <div class="col-lg-3 col-md-6 fade-up" style="transition-delay:<?php echo $i * 0.1; ?>s;">
          <div class="process-step-card">
            <div class="step-circle"><?php echo $step['num']; ?></div>
            <div class="step-icon"><i class="bi <?php echo $step['icon']; ?>"></i></div>
            <h5><?php echo $step['title']; ?></h5>
            <p><?php echo $step['desc']; ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <div class="text-center mt-5 fade-up">
      <a href="#quote-form" class="btn-red btn-lg">
        REQUEST YOUR FREE ESTIMATE <i class="bi bi-arrow-right ms-1"></i>
      </a>
    </div>

  </div>
</section>

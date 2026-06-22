<!-- =============== PROCESS =============== -->
<section id="process" aria-labelledby="process-heading">
  <div class="container">

    <div class="text-center mb-5 fade-up">
      <span class="section-label dark">How We Work</span>
      <div class="section-divider mx-auto"></div>
      <h2 id="process-heading">Our Process</h2>
      <p class="mt-3 mx-auto" style="max-width:520px;color:var(--muted);">
        A clear, structured approach from first conversation to successful launch — with full
        transparency and communication at every stage.
      </p>
    </div>

    <div class="row g-4 process-steps-row">
      <?php foreach ($config['process_steps'] as $i => $step): ?>
        <div class="col-lg-3 col-md-6 fade-up process-col" style="transition-delay:<?php echo $i * 0.12; ?>s;">
          <div class="process-step-card">
            <div class="step-number"><?php echo $step['num']; ?></div>
            <div class="step-icon"><i class="bi <?php echo $step['icon']; ?>"></i></div>
            <h5><?php echo $step['title']; ?></h5>
            <p><?php echo $step['desc']; ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <div class="text-center mt-5 fade-up">
      <a href="#quote-form" class="btn-gold btn-lg">
        Start Your Project Today <i class="bi bi-arrow-right ms-1"></i>
      </a>
    </div>

  </div>
</section>

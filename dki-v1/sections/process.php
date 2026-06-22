<!-- =============== PROCESS =============== -->
<section id="process" aria-labelledby="process-heading">
  <div class="container">

    <div class="text-center mb-5 fade-up">
      <span class="section-label dark">How We Work</span>
      <div class="section-divider mx-auto"></div>
      <h2 id="process-heading">A Proven Process, Every Time</h2>
      <p class="mt-3 mx-auto" style="max-width:520px;color:var(--slate);">
        Our structured four-phase process ensures every project is delivered on time,
        on budget, and above expectations.
      </p>
    </div>

    <div class="process-track">
      <?php foreach ($config['process_steps'] as $i => $step): ?>
        <div class="process-step fade-up" style="transition-delay:<?php echo $i * 0.1; ?>s;">
          <div class="process-num"><?php echo $step['num']; ?></div>
          <div class="process-icon"><i class="bi <?php echo $step['icon']; ?>"></i></div>
          <h5><?php echo $step['title']; ?></h5>
          <p><?php echo $step['desc']; ?></p>
          <?php if ($i < count($config['process_steps']) - 1): ?>
            <div class="process-connector" aria-hidden="true"></div>
          <?php endif; ?>
        </div>
      <?php endforeach; ?>
    </div>

    <div class="text-center mt-5 fade-up">
      <a href="#quote-form" class="btn-gold btn-lg">
        START YOUR PROJECT <i class="bi bi-arrow-right ms-1"></i>
      </a>
    </div>

  </div>
</section>

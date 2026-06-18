<!-- =============== BRANDS / MANUFACTURERS =============== -->
<section id="brands" aria-labelledby="brands-heading">
  <div class="container">

    <div class="text-center mb-4 fade-up">
      <span class="section-label">Our Partners</span>
      <div class="section-divider mx-auto"></div>
      <h2 id="brands-heading">Trusted Products From Industry Leaders</h2>
      <p class="mt-2" style="color:var(--muted);font-size:.9rem;">
        We work with the most respected manufacturers in the industry to bring you the best products available.
      </p>
    </div>

    <?php
    $brands = [
      'Clopay', 'LiftMaster', 'Amarr', 'Wayne Dalton', 'Andersen Windows',
      'ProVia', 'Therma-Tru', 'CHI', 'Haas Door',
    ];
    ?>

    <div class="brands-track fade-up">
      <?php foreach ($brands as $brand): ?>
        <div class="brand-pill"><?php echo $brand; ?></div>
      <?php endforeach; ?>
    </div>

  </div>
</section>

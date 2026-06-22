<!-- =============== CLIENTS BAR =============== -->
<section id="clients-bar" aria-label="Client Types">
  <div class="container">
    <p class="clients-bar-heading">Trusted By Organizations Across Every Sector</p>
    <div class="client-type-grid">
      <?php
      $client_icons = [
        'County Courts'            => 'bi-building-fill',
        'Municipal Governments'    => 'bi-bank2',
        'State Agencies'           => 'bi-flag-fill',
        'Healthcare Organizations' => 'bi-heart-pulse-fill',
        'E-Commerce Businesses'    => 'bi-cart-fill',
        'Non-Profit Organizations' => 'bi-people-fill',
        'School Districts'         => 'bi-mortarboard-fill',
        'Emergency Services'       => 'bi-exclamation-triangle-fill',
      ];
      foreach ($config['client_types'] as $type):
        $icon = $client_icons[$type] ?? 'bi-building';
      ?>
        <div class="client-type-item">
          <i class="bi <?php echo $icon; ?>"></i>
          <span><?php echo $type; ?></span>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

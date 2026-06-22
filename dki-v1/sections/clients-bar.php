<!-- =============== CLIENTS BAR =============== -->
<div id="clients-bar">
  <div class="container">
    <div class="clients-bar-inner">
      <span class="clients-bar-label">Trusted by organizations across every sector</span>
      <div class="clients-bar-icons">
        <?php
        $ct_icons = [
          'County Courts'           => 'bi-hammer',
          'Municipal Governments'   => 'bi-building-fill',
          'State Agencies'          => 'bi-bank2',
          'Healthcare Organizations'=> 'bi-heart-pulse-fill',
          'E-Commerce Businesses'   => 'bi-bag-check-fill',
          'Non-Profit Organizations'=> 'bi-people-fill',
          'School Districts'        => 'bi-mortarboard-fill',
          'Emergency Services'      => 'bi-shield-fill',
        ];
        foreach ($config['client_types'] as $ct):
          $icon = $ct_icons[$ct] ?? 'bi-briefcase-fill';
        ?>
          <div class="client-type-pill">
            <i class="bi <?php echo $icon; ?>"></i>
            <span><?php echo $ct; ?></span>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>

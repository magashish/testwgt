<!-- =============== NAVBAR =============== -->
<nav class="navbar navbar-expand-lg navbar-dki sticky-top" id="mainNav" aria-label="Main Navigation">
  <div class="container">

    <a class="navbar-brand navbar-brand-wrap" href="index.php">
      <div class="brand-name">DKI EMPIRE</div>
      <div class="brand-sub">DIGITAL SOLUTIONS</div>
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
      data-bs-target="#navMenu" aria-controls="navMenu"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navMenu">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-lg-center">

        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>

        <!-- Services dropdown -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Services</a>
          <ul class="dropdown-menu dropdown-menu-dki">
            <?php foreach ($config['services'] as $svc): ?>
              <li>
                <a class="dropdown-item" href="service.php?s=<?php echo $svc['slug']; ?>">
                  <i class="bi <?php echo $svc['icon']; ?> me-2 text-ice"></i>
                  <?php echo $svc['title']; ?>
                </a>
              </li>
            <?php endforeach; ?>
          </ul>
        </li>

        <li class="nav-item"><a class="nav-link" href="index.php#government">Government &amp; ADA</a></li>
        <li class="nav-item"><a class="nav-link" href="portfolio.php">Portfolio</a></li>
        <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>

        <li class="nav-item ms-lg-3">
          <a class="nav-cta-btn" href="#quote-form"><?php echo $config['cta_label']; ?></a>
        </li>

      </ul>
    </div>

  </div>
</nav>

<!-- =============== TOP BAR =============== -->
<div id="top-bar" class="d-none d-lg-block">
  <div class="container">
    <div class="d-flex justify-content-between align-items-center">
      <div class="top-bar-info">
        <a href="<?php echo $config['phone_href']; ?>"><i class="bi bi-telephone-fill"></i> <?php echo $config['phone']; ?></a>
        <a href="<?php echo $config['email_href']; ?>"><i class="bi bi-envelope-fill"></i> <?php echo $config['email']; ?></a>
        <span><i class="bi bi-geo-alt-fill"></i> <?php echo $config['service_area']; ?></span>
      </div>
      <div class="d-flex align-items-center gap-3">
        <a href="<?php echo $config['linkedin']; ?>" aria-label="LinkedIn"><i class="bi bi-linkedin" style="color:rgba(255,255,255,.5);font-size:.9rem;"></i></a>
        <a href="<?php echo $config['twitter']; ?>"  aria-label="Twitter"><i class="bi bi-twitter-x" style="color:rgba(255,255,255,.5);font-size:.9rem;"></i></a>
        <a href="#quote-form" class="btn-gold" style="padding:.35rem 1rem;font-size:.72rem;"><?php echo $config['cta_label']; ?></a>
      </div>
    </div>
  </div>
</div>

<!-- =============== NAVBAR =============== -->
<nav class="navbar navbar-expand-lg navbar-dki sticky-top" id="mainNav" aria-label="Main Navigation">
  <div class="container">

    <a class="navbar-brand" href="index.php">
      <div class="brand-dki">DKI <span class="brand-empire">EMPIRE</span></div>
      <div class="brand-sub">DIGITAL SOLUTIONS</div>
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
      data-bs-target="#navMenu" aria-controls="navMenu"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navMenu">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-lg-center gap-lg-1">
        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Services</a>
          <ul class="dropdown-menu">
            <?php foreach ($config['services'] as $svc): ?>
              <li><a class="dropdown-item" href="service.php?s=<?php echo $svc['slug']; ?>">
                <i class="bi <?php echo $svc['icon']; ?> me-2"></i><?php echo $svc['title']; ?>
              </a></li>
            <?php endforeach; ?>
          </ul>
        </li>

        <li class="nav-item"><a class="nav-link" href="index.php#government">Government &amp; ADA</a></li>
        <li class="nav-item"><a class="nav-link" href="portfolio.php">Portfolio</a></li>
        <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>

        <li class="nav-item ms-lg-2">
          <a class="nav-link nav-cta-btn" href="#quote-form">GET A QUOTE</a>
        </li>
      </ul>
    </div>

  </div>
</nav>

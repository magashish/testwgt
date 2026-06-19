<!-- =============== TOP BAR =============== -->
<div id="top-bar" class="d-none d-lg-block">
  <div class="container">
    <div class="d-flex justify-content-between align-items-center">
      <div class="top-bar-info">
        <a href="<?php echo $config['phone_href']; ?>">
          <i class="bi bi-telephone-fill"></i> <?php echo $config['phone']; ?>
        </a>
        <a href="<?php echo $config['email_href']; ?>">
          <i class="bi bi-envelope-fill"></i> <?php echo $config['email']; ?>
        </a>
        <span><i class="bi bi-geo-alt-fill"></i> <?php echo $config['service_area']; ?></span>
      </div>
      <a href="#quote-form" class="btn-red"><?php echo $config['cta_label']; ?></a>
    </div>
  </div>
</div>

<!-- =============== NAVBAR =============== -->
<nav class="navbar navbar-expand-lg navbar-tritch sticky-top" id="mainNav" aria-label="Main Navigation">
  <div class="container">

    <a class="navbar-brand navbar-brand-wrap" href="index.php">
      <div class="brand-name">TRITCH</div>
      <div class="brand-sub">Door &amp; Window</div>
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
      data-bs-target="#navMenu" aria-controls="navMenu"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navMenu">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-lg-center">
        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>

        <!-- Residential dropdown — built from $config -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Residential</a>
          <ul class="dropdown-menu">
            <?php foreach ($config['residential_services'] as $svc): ?>
              <li><a class="dropdown-item" href="#"><?php echo $svc['title']; ?></a></li>
            <?php endforeach; ?>
          </ul>
        </li>

        <!-- Commercial dropdown -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Commercial</a>
          <ul class="dropdown-menu">
            <?php foreach ($config['commercial_services'] as $svc): ?>
              <li><a class="dropdown-item" href="#"><?php echo $svc['title']; ?></a></li>
            <?php endforeach; ?>
          </ul>
        </li>

        <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
        <li class="nav-item"><a class="nav-link" href="gallery.php">Gallery</a></li>
        <li class="nav-item"><a class="nav-link" href="reviews.php">Reviews</a></li>
        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>

        <!-- Locations dropdown — built from $config -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Locations</a>
          <ul class="dropdown-menu">
            <?php foreach ($config['locations'] as $loc): ?>
              <li><a class="dropdown-item" href="#"><?php echo $loc; ?></a></li>
            <?php endforeach; ?>
          </ul>
        </li>

        <li class="nav-item ms-lg-2">
          <a class="nav-link nav-cta-btn" href="#quote-form"><?php echo $config['cta_label']; ?></a>
        </li>
      </ul>
    </div>

  </div>
</nav>

<!-- =============== TOP BAR =============== -->
<div id="top-bar" class="d-none d-lg-block">
  <div class="container">
    <div class="d-flex justify-content-between align-items-center">
      <div class="top-bar-info">
        <a href="tel:+14193329554"><i class="bi bi-telephone-fill"></i> (419) 332-9554</a>
        <a href="mailto:info@tritchdoorandwindow.net"><i class="bi bi-envelope-fill"></i> info@tritchdoorandwindow.net</a>
        <span><i class="bi bi-geo-alt-fill"></i> Serving Northwest Ohio</span>
      </div>
      <a href="#quote-form" class="btn-red">REQUEST FREE ESTIMATE</a>
    </div>
  </div>
</div>

<!-- =============== NAVBAR =============== -->
<nav class="navbar navbar-expand-lg navbar-tritch sticky-top" id="mainNavTritch" aria-label="Main Navigation">
  <div class="container">

    <!-- Brand -->
    <a class="navbar-brand navbar-brand-wrap" href="index.php">
      <div class="brand-name">TRITCH</div>
      <div class="brand-sub">Door &amp; Window</div>
    </a>

    <!-- Toggler -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
      data-bs-target="#navMenuTritch" aria-controls="navMenuTritch"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Nav Links -->
    <div class="collapse navbar-collapse" id="navMenuTritch">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-lg-center">
        <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Residential</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Garage Doors</a></li>
            <li><a class="dropdown-item" href="#">Garage Door Repair</a></li>
            <li><a class="dropdown-item" href="#">Garage Door Openers</a></li>
            <li><a class="dropdown-item" href="#">Entry Doors</a></li>
            <li><a class="dropdown-item" href="#">Windows</a></li>
            <li><a class="dropdown-item" href="#">Patio Doors</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Commercial</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Commercial Doors</a></li>
            <li><a class="dropdown-item" href="#">Dock Equipment</a></li>
            <li><a class="dropdown-item" href="#">Storefront Systems</a></li>
            <li><a class="dropdown-item" href="#">Steel Doors</a></li>
            <li><a class="dropdown-item" href="#">Service &amp; Repair</a></li>
          </ul>
        </li>

        <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Gallery</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Reviews</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Locations</a>
          <ul class="dropdown-menu">
            <?php
            $navLocations = ['Fremont','Sandusky','Port Clinton','Clyde','Bellevue','Norwalk','Tiffin','Findlay'];
            foreach ($navLocations as $loc):
            ?>
              <li><a class="dropdown-item" href="#"><?php echo $loc; ?></a></li>
            <?php endforeach; ?>
          </ul>
        </li>

        <li class="nav-item ms-lg-2">
          <a class="nav-link nav-cta-btn" href="#quote-form">REQUEST FREE ESTIMATE</a>
        </li>
      </ul>
    </div>

  </div>
</nav>

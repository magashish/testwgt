<!-- =============== FOOTER =============== -->
<footer aria-label="Site Footer">
  <div class="container">
    <div class="row gy-4">

      <!-- Brand -->
      <div class="col-lg-4 col-md-6">
        <div class="footer-brand">TRITCH</div>
        <div class="footer-brand-sub">Door &amp; Window</div>
        <p class="mt-3" style="max-width:280px;">
          Northwest Ohio's trusted door and window experts since <?php echo $config['founded']; ?>.
          Family owned, professionally installed, and built to last.
        </p>
        <div class="footer-social mt-3">
          <a href="<?php echo $config['facebook']; ?>" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
          <a href="<?php echo $config['instagram']; ?>" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
          <a href="<?php echo $config['google_reviews']; ?>" aria-label="Google Business"><i class="bi bi-google"></i></a>
        </div>
      </div>

      <!-- Quick Links -->
      <div class="col-lg-2 col-md-3 col-6">
        <h5>Quick Links</h5>
        <a href="index.php">Home</a>
        <a href="about.php">About Us</a>
        <a href="gallery.php">Gallery</a>
        <a href="reviews.php">Reviews</a>
        <a href="contact.php">Contact</a>
        <a href="#">Locations</a>
      </div>

      <!-- Services — built from $config -->
      <div class="col-lg-3 col-md-3 col-6">
        <h5>Our Services</h5>
        <?php foreach ($config['residential_services'] as $svc): ?>
          <a href="service.php?s=<?php echo $svc['slug']; ?>"><?php echo $svc['title']; ?></a>
        <?php endforeach; ?>
        <a href="service.php?s=commercial-overhead-doors">Commercial Doors</a>
      </div>

      <!-- Contact -->
      <div class="col-lg-3 col-md-6">
        <h5>Contact Us</h5>
        <p>
          <i class="bi bi-telephone-fill me-2" style="color:var(--red);"></i>
          <a href="<?php echo $config['phone_href']; ?>" style="display:inline;"><?php echo $config['phone']; ?></a>
        </p>
        <p>
          <i class="bi bi-envelope-fill me-2" style="color:var(--red);"></i>
          <a href="<?php echo $config['email_href']; ?>" style="display:inline;"><?php echo $config['email']; ?></a>
        </p>
        <p>
          <i class="bi bi-clock-fill me-2" style="color:var(--red);"></i>
          <span style="display:inline;color:rgba(255,255,255,.6);"><?php echo $config['hours']; ?></span>
        </p>
        <p>
          <i class="bi bi-geo-alt-fill me-2" style="color:var(--red);"></i>
          <span style="display:inline;color:rgba(255,255,255,.6);"><?php echo $config['service_area']; ?></span>
        </p>
        <a href="#quote-form" class="btn-red mt-2" style="font-size:.82rem;"><?php echo $config['cta_label']; ?></a>
      </div>

    </div>

    <hr class="footer-divider">

    <div class="footer-bottom">
      <span>&copy; <?php echo date('Y'); ?> <?php echo $config['business_name']; ?>. All rights reserved.</span>
      <span>
        <a href="#">Privacy Policy</a>
        <a href="#">Terms of Service</a>
      </span>
      <a href="#quote-form" class="btn-red" style="font-size:.78rem;padding:.4rem 1rem;"><?php echo $config['cta_label']; ?></a>
    </div>

  </div>
</footer>

<!-- Back to Top -->
<a href="#" id="back-to-top" aria-label="Back to top"><i class="bi bi-chevron-up"></i></a>

<!-- Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Custom JS -->
<script src="assets/js/main.js"></script>

</body>
</html>

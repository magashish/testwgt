<!-- =============== FOOTER =============== -->
<footer id="site-footer" aria-label="Site Footer">
  <div class="container">
    <div class="row gy-5">

      <!-- Brand Column -->
      <div class="col-lg-4 col-md-6">
        <div class="footer-brand">DKI EMPIRE</div>
        <div class="footer-brand-sub">DIGITAL SOLUTIONS</div>
        <p class="mt-3 footer-desc">
          Full-service digital agency delivering custom websites, ADA compliance, and enterprise
          software since <?php echo $config['founded']; ?>. Trusted by government agencies,
          healthcare organizations, and businesses nationwide.
        </p>
        <div class="footer-social mt-3">
          <a href="<?php echo $config['facebook']; ?>" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
          <a href="<?php echo $config['instagram']; ?>" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
          <a href="<?php echo $config['linkedin']; ?>" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
          <a href="<?php echo $config['twitter']; ?>" aria-label="Twitter / X"><i class="bi bi-twitter-x"></i></a>
          <a href="<?php echo $config['google_reviews']; ?>" aria-label="Google Reviews"><i class="bi bi-google"></i></a>
        </div>
      </div>

      <!-- Quick Links -->
      <div class="col-lg-2 col-md-3 col-6">
        <h5 class="footer-heading">Quick Links</h5>
        <nav class="footer-links" aria-label="Footer quick links">
          <a href="index.php">Home</a>
          <a href="about.php">About Us</a>
          <a href="portfolio.php">Portfolio</a>
          <a href="index.php#government">Government &amp; ADA</a>
          <a href="contact.php">Contact</a>
        </nav>
      </div>

      <!-- Services -->
      <div class="col-lg-3 col-md-3 col-6">
        <h5 class="footer-heading">Our Services</h5>
        <nav class="footer-links" aria-label="Footer services links">
          <?php foreach ($config['services'] as $svc): ?>
            <a href="service.php?s=<?php echo $svc['slug']; ?>"><?php echo $svc['title']; ?></a>
          <?php endforeach; ?>
        </nav>
      </div>

      <!-- Contact Info -->
      <div class="col-lg-3 col-md-6">
        <h5 class="footer-heading">Contact Us</h5>
        <div class="footer-contact-list">
          <div class="footer-contact-item">
            <i class="bi bi-telephone-fill"></i>
            <a href="<?php echo $config['phone_href']; ?>"><?php echo $config['phone']; ?></a>
          </div>
          <div class="footer-contact-item">
            <i class="bi bi-envelope-fill"></i>
            <a href="<?php echo $config['email_href']; ?>"><?php echo $config['email']; ?></a>
          </div>
          <div class="footer-contact-item">
            <i class="bi bi-clock-fill"></i>
            <span><?php echo $config['hours']; ?></span>
          </div>
          <div class="footer-contact-item">
            <i class="bi bi-geo-alt-fill"></i>
            <span><?php echo $config['service_area']; ?></span>
          </div>
        </div>
        <a href="#quote-form" class="btn-gold mt-3 d-inline-flex" style="font-size:.8rem;">
          <?php echo $config['cta_label']; ?> <i class="bi bi-arrow-right ms-2"></i>
        </a>
      </div>

    </div>

    <hr class="footer-divider">

    <div class="footer-bottom">
      <span>&copy; <?php echo date('Y'); ?> <?php echo $config['business_name']; ?>. All rights reserved.</span>
      <span class="footer-bottom-badges">
        <?php foreach ($config['compliance_badges'] as $badge): ?>
          <span class="footer-badge"><?php echo $badge; ?></span>
        <?php endforeach; ?>
      </span>
      <span>
        <a href="#">Privacy Policy</a>
        <span class="mx-2">|</span>
        <a href="#">Terms of Service</a>
      </span>
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

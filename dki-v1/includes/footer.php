<!-- =============== FOOTER =============== -->
<footer aria-label="Site Footer">
  <div class="container">
    <div class="row gy-5">

      <!-- Brand -->
      <div class="col-lg-4 col-md-6">
        <div class="footer-brand">DKI <span class="footer-empire">EMPIRE</span></div>
        <div class="footer-brand-sub">DIGITAL SOLUTIONS</div>
        <p class="mt-3" style="max-width:290px;color:rgba(255,255,255,.55);font-size:.9rem;line-height:1.7;">
          Full-service digital agency specializing in government websites, ADA compliance,
          custom web development, and enterprise software solutions since <?php echo $config['founded']; ?>.
        </p>
        <div class="footer-social mt-3">
          <a href="<?php echo $config['facebook']; ?>"  aria-label="Facebook"><i class="bi bi-facebook"></i></a>
          <a href="<?php echo $config['instagram']; ?>" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
          <a href="<?php echo $config['linkedin']; ?>"  aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
          <a href="<?php echo $config['twitter']; ?>"   aria-label="Twitter"><i class="bi bi-twitter-x"></i></a>
        </div>
      </div>

      <!-- Services -->
      <div class="col-lg-3 col-md-3 col-6">
        <h5>Our Services</h5>
        <?php foreach ($config['services'] as $svc): ?>
          <a href="service.php?s=<?php echo $svc['slug']; ?>"><?php echo $svc['title']; ?></a>
        <?php endforeach; ?>
      </div>

      <!-- Quick Links -->
      <div class="col-lg-2 col-md-3 col-6">
        <h5>Company</h5>
        <a href="about.php">About DKI</a>
        <a href="portfolio.php">Portfolio</a>
        <a href="index.php#government">Government &amp; ADA</a>
        <a href="contact.php">Contact Us</a>
        <a href="#">Privacy Policy</a>
        <a href="#">Terms of Service</a>
      </div>

      <!-- Contact -->
      <div class="col-lg-3 col-md-6">
        <h5>Contact Us</h5>
        <p><i class="bi bi-telephone-fill me-2" style="color:var(--ice);"></i>
          <a href="<?php echo $config['phone_href']; ?>" style="display:inline;"><?php echo $config['phone']; ?></a></p>
        <p><i class="bi bi-envelope-fill me-2" style="color:var(--ice);"></i>
          <a href="<?php echo $config['email_href']; ?>" style="display:inline;"><?php echo $config['email']; ?></a></p>
        <p><i class="bi bi-clock-fill me-2" style="color:var(--ice);"></i>
          <span style="display:inline;color:rgba(255,255,255,.55);"><?php echo $config['hours']; ?></span></p>
        <p><i class="bi bi-geo-alt-fill me-2" style="color:var(--ice);"></i>
          <span style="display:inline;color:rgba(255,255,255,.55);"><?php echo $config['service_area']; ?></span></p>

        <!-- Compliance badges -->
        <div class="footer-compliance mt-2">
          <?php foreach ($config['compliance_badges'] as $badge): ?>
            <span class="comp-chip"><?php echo $badge; ?></span>
          <?php endforeach; ?>
        </div>
      </div>

    </div>

    <hr class="footer-divider">

    <div class="footer-bottom">
      <span>&copy; <?php echo date('Y'); ?> <?php echo $config['business_name']; ?>. All rights reserved.</span>
      <span class="footer-bottom-links">
        <a href="#">Privacy Policy</a>
        <a href="#">Terms</a>
        <a href="#">Accessibility</a>
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

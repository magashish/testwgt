<!-- =============== FOOTER =============== -->
<footer aria-label="Site Footer">
  <div class="container">
    <div class="row gy-4">

      <!-- Brand -->
      <div class="col-lg-4 col-md-6">
        <div class="footer-brand">TRITCH</div>
        <div class="footer-brand-sub">Door &amp; Window</div>
        <p class="mt-3" style="max-width:280px;">
          Northwest Ohio's trusted door and window experts since 1947. Family owned,
          professionally installed, and built to last.
        </p>
        <div class="footer-social mt-3">
          <a href="#" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" aria-label="Google Business"><i class="bi bi-google"></i></a>
        </div>
      </div>

      <!-- Quick Links -->
      <div class="col-lg-2 col-md-3 col-6">
        <h5>Quick Links</h5>
        <?php
        $footerLinks = [
          'Home'       => 'index.php',
          'About Us'   => '#',
          'Gallery'    => '#',
          'Reviews'    => '#',
          'Contact'    => '#',
          'Locations'  => '#',
        ];
        foreach ($footerLinks as $label => $href):
        ?>
          <a href="<?php echo $href; ?>"><?php echo $label; ?></a>
        <?php endforeach; ?>
      </div>

      <!-- Services -->
      <div class="col-lg-3 col-md-3 col-6">
        <h5>Our Services</h5>
        <?php
        $footerServices = [
          'Garage Doors', 'Garage Door Repair', 'Garage Door Openers',
          'Entry Doors', 'Windows', 'Commercial Doors', 'Dock Equipment',
        ];
        foreach ($footerServices as $svc):
        ?>
          <a href="#"><?php echo $svc; ?></a>
        <?php endforeach; ?>
      </div>

      <!-- Contact -->
      <div class="col-lg-3 col-md-6">
        <h5>Contact Us</h5>
        <p><i class="bi bi-telephone-fill me-2" style="color:var(--red);"></i>
          <a href="tel:+14193329554" style="display:inline;">(419) 332-9554</a></p>
        <p><i class="bi bi-envelope-fill me-2" style="color:var(--red);"></i>
          <a href="mailto:info@tritchdoorandwindow.net" style="display:inline;">info@tritchdoorandwindow.net</a></p>
        <p><i class="bi bi-clock-fill me-2" style="color:var(--red);"></i>
          <span style="display:inline;color:rgba(255,255,255,.6);">Mon–Fri 8am–5pm</span></p>
        <p><i class="bi bi-geo-alt-fill me-2" style="color:var(--red);"></i>
          <span style="display:inline;color:rgba(255,255,255,.6);">Serving Northwest Ohio</span></p>
        <a href="#quote-form" class="btn-red mt-2" style="font-size:.82rem;">REQUEST FREE ESTIMATE</a>
      </div>

    </div>

    <hr class="footer-divider">

    <div class="footer-bottom">
      <span>&copy; <?php echo date('Y'); ?> Tritch Door &amp; Window. All rights reserved.</span>
      <span>
        <a href="#">Privacy Policy</a>
        <a href="#">Terms of Service</a>
      </span>
      <a href="#quote-form" class="btn-red" style="font-size:.78rem;padding:.4rem 1rem;">REQUEST FREE ESTIMATE</a>
    </div>

  </div>
</footer>

<!-- Back to Top -->
<a href="#" id="back-to-top" aria-label="Back to top"><i class="bi bi-chevron-up"></i></a>

<!-- Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Custom JS -->
<script src="assets/js/main.js"></script>

<!-- =============== CONTACT HERO =============== -->
<section id="contact-hero" aria-label="Contact Page Hero">
  <div class="container page-hero-content">
    <div class="row justify-content-center text-center fade-up">
      <div class="col-lg-7">
        <p class="hero-eyebrow">
          <i class="bi bi-envelope-fill me-1"></i>
          GET IN TOUCH
        </p>
        <h1 style="color:var(--white);">Contact <?php echo $config['business_name']; ?></h1>
        <p class="hero-sub mx-auto">
          Have a question or ready to get started? Reach out by phone, email, or fill out the form
          below — we respond promptly.
        </p>
        <div class="d-flex flex-wrap justify-content-center gap-3 mt-3">
          <a href="<?php echo $config['phone_href']; ?>" class="btn-red btn-lg">
            <i class="bi bi-telephone-fill"></i> <?php echo $config['phone']; ?>
          </a>
          <a href="<?php echo $config['email_href']; ?>" class="btn-outline-white btn-lg">
            <i class="bi bi-envelope-fill"></i> Email Us
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- =============== SERVICE FAQS =============== -->
<section id="service-faqs" aria-labelledby="faqs-heading">
  <div class="container">

    <div class="text-center mb-5 fade-up">
      <span class="section-label dark">Common Questions</span>
      <div class="section-divider mx-auto"></div>
      <h2 id="faqs-heading">Frequently Asked Questions</h2>
      <p class="mt-3 mx-auto" style="max-width:520px;color:var(--muted);">
        Everything you need to know about our <?php echo $service['title']; ?> services.
      </p>
    </div>

    <div class="row justify-content-center">
      <div class="col-lg-8 fade-up">
        <div class="accordion accordion-dki" id="faqAccordion">
          <?php foreach ($service['faqs'] as $i => $faq): ?>
            <div class="accordion-item">
              <h3 class="accordion-header" id="faq-h-<?php echo $i; ?>">
                <button
                  class="accordion-button <?php echo $i > 0 ? 'collapsed' : ''; ?>"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#faq-c-<?php echo $i; ?>"
                  aria-expanded="<?php echo $i === 0 ? 'true' : 'false'; ?>"
                  aria-controls="faq-c-<?php echo $i; ?>"
                >
                  <?php echo $faq['q']; ?>
                </button>
              </h3>
              <div id="faq-c-<?php echo $i; ?>"
                   class="accordion-collapse collapse <?php echo $i === 0 ? 'show' : ''; ?>"
                   aria-labelledby="faq-h-<?php echo $i; ?>"
                   data-bs-parent="#faqAccordion">
                <div class="accordion-body"><?php echo $faq['a']; ?></div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>

    <div class="text-center mt-5 fade-up">
      <p style="color:var(--muted);margin-bottom:1rem;">Have more questions?</p>
      <a href="#quote-form" class="btn-gold btn-lg">
        <?php echo $config['cta_label']; ?> <i class="bi bi-arrow-right ms-1"></i>
      </a>
    </div>

  </div>
</section>

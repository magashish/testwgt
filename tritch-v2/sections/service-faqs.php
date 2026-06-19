<!-- =============== SERVICE FAQS =============== -->
<section id="service-faqs" aria-labelledby="faqs-heading">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">

        <div class="text-center mb-5 fade-up">
          <span class="section-label">FAQ</span>
          <div class="section-divider mx-auto"></div>
          <h2 id="faqs-heading"><?php echo $service['title']; ?> — Common Questions</h2>
        </div>

        <div class="accordion service-accordion fade-up" id="faqAccordion">
          <?php foreach ($service['faqs'] as $i => $faq): ?>
            <?php $id = 'faq-' . $i; ?>
            <div class="accordion-item">
              <h3 class="accordion-header">
                <button class="accordion-button <?php echo $i > 0 ? 'collapsed' : ''; ?>"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#<?php echo $id; ?>"
                        aria-expanded="<?php echo $i === 0 ? 'true' : 'false'; ?>"
                        aria-controls="<?php echo $id; ?>">
                  <?php echo htmlspecialchars($faq['q']); ?>
                </button>
              </h3>
              <div id="<?php echo $id; ?>"
                   class="accordion-collapse collapse <?php echo $i === 0 ? 'show' : ''; ?>"
                   data-bs-parent="#faqAccordion">
                <div class="accordion-body">
                  <?php echo htmlspecialchars($faq['a']); ?>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>

        <div class="text-center mt-5 fade-up">
          <p style="color:var(--muted);font-size:.9rem;">Have a question not answered here?</p>
          <a href="<?php echo $config['phone_href']; ?>" class="btn-red">
            <i class="bi bi-telephone-fill me-1"></i> CALL US — <?php echo $config['phone']; ?>
          </a>
        </div>

      </div>
    </div>
  </div>
</section>

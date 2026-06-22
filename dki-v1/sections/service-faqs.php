<!-- =============== SERVICE FAQs =============== -->
<section id="service-faqs" style="background:var(--off-white);padding:var(--section-py) 0;">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 fade-up text-center mb-5">
        <span class="section-label">FAQ</span>
        <div class="section-divider mx-auto"></div>
        <h2>Common Questions About <?php echo $svc['title']; ?></h2>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="accordion accordion-dki" id="faqAccordion">
          <?php foreach ($svc['faqs'] as $i => $faq): ?>
            <div class="accordion-item-dki fade-up" style="transition-delay:<?php echo $i * 0.08; ?>s;">
              <button class="accordion-btn-dki <?php echo $i === 0 ? '' : 'collapsed'; ?>"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#faq<?php echo $i; ?>"
                      aria-expanded="<?php echo $i === 0 ? 'true' : 'false'; ?>">
                <?php echo $faq['q']; ?>
                <i class="bi bi-chevron-down faq-chevron"></i>
              </button>
              <div id="faq<?php echo $i; ?>" class="accordion-collapse collapse <?php echo $i === 0 ? 'show' : ''; ?>" data-bs-parent="#faqAccordion">
                <div class="accordion-body-dki">
                  <?php echo $faq['a']; ?>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>

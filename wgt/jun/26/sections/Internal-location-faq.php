
<!-- =============== FAQs SECTION =============== -->
<section id="faqs" aria-labelledby="faqs-heading">
  <div class="container">

    <div class="text-center mb-5 fade-up">
      <span class="section-label">Got Questions?</span>
      <div class="section-divider mx-auto"></div>
      <h2 id="faqs-heading">Frequently Asked Questions</h2>
    </div>

    <div class="row justify-content-center">
      <div class="col-lg-8 fade-up">
        <div class="accordion" id="faqAccordion">

          <div class="accordion-item">
            <h3 class="accordion-header">
              <button class="accordion-button" type="button"
                data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="true">
                <?php echo $FAQ['Question1']; ?>
              </button>
            </h3>
            <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                  <?php echo $FAQ['Answer1']; ?>
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h3 class="accordion-header">
              <button class="accordion-button collapsed" type="button"
                data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="false">
                <?php echo $FAQ['Question2']; ?>
              </button>
            </h3>
            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                  <?php echo $FAQ['Answer2']; ?>
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h3 class="accordion-header">
              <button class="accordion-button collapsed" type="button"
                data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false">
                <?php echo $FAQ['Question3']; ?>
              </button>
            </h3>
            <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                  <?php echo $FAQ['Answer3']; ?>
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h3 class="accordion-header">
              <button class="accordion-button collapsed" type="button"
                data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="false">
                <?php echo $FAQ['Question4']; ?>
              </button>
            </h3>
            <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                  <?php echo $FAQ['Answer4']; ?>
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h3 class="accordion-header">
              <button class="accordion-button collapsed" type="button"
                data-bs-toggle="collapse" data-bs-target="#faq5" aria-expanded="false">
                <?php echo $FAQ['Question5']; ?>
              </button>
            </h3>
            <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                  <?php echo $FAQ['Answer5']; ?>
              </div>
            </div>
          </div>

        </div><!-- /accordion -->

        <div class="text-center mt-5 fade-up">
          <a href="tel:+13215941204" class="btn btn-accent btn-lg me-2 mb-2">
            <i class="bi bi-telephone-fill me-1"></i> Call Now
          </a>
          <a href="#contact-form" class="btn btn-outline-dark-wgt btn-lg mb-2">
            <i class="bi bi-clipboard-check me-1"></i> Get A Quote
          </a>
        </div>
      </div>
    </div>

  </div>
</section>



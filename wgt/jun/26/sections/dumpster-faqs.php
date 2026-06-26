<!-- =============== DUMPSTER SIZE — FAQs =============== -->
<section id="dumpster-faqs" class="section-space" aria-labelledby="dumpster-faqs-heading">
  <div class="container">

    <div class="text-center mb-5 fade-up">
      <span class="section-label">Got Questions?</span>
      <div class="section-divider mx-auto"></div>
      <h2 id="dumpster-faqs-heading"><?php echo $dumpster['yards']; ?> Yard Dumpster Rental FAQs</h2>
    </div>

    <div class="row justify-content-center">
      <div class="col-lg-8 fade-up">
        <?php $fid = $dumpster['faq_prefix']; ?>
        <div class="accordion" id="faq<?php echo $fid; ?>Accordion">

          <div class="accordion-item">
            <h3 class="accordion-header">
              <button class="accordion-button" type="button"
                data-bs-toggle="collapse" data-bs-target="#<?php echo $fid; ?>q1" aria-expanded="true">
                How much does a <?php echo $dumpster['yards']; ?> yard dumpster rental cost?
              </button>
            </h3>
            <div id="<?php echo $fid; ?>q1" class="accordion-collapse collapse show" data-bs-parent="#faq<?php echo $fid; ?>Accordion">
              <div class="accordion-body">
                The cost of a <?php echo $dumpster['yards']; ?> yard dumpster rental depends on
                your location, rental duration, and the type of material you're disposing of. We
                keep our pricing fair and transparent with no hidden fees. The quickest way to get
                an exact price is to give us a call at
                <a href="tel:+13215941204" style="color:var(--accent);font-weight:700;">(321) 594-1204</a>
                — we'll have a quote ready for you in minutes.
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h3 class="accordion-header">
              <button class="accordion-button collapsed" type="button"
                data-bs-toggle="collapse" data-bs-target="#<?php echo $fid; ?>q2" aria-expanded="false">
                Will the dumpster damage my driveway?
              </button>
            </h3>
            <div id="<?php echo $fid; ?>q2" class="accordion-collapse collapse" data-bs-parent="#faq<?php echo $fid; ?>Accordion">
              <div class="accordion-body">
                We take your property seriously. Every <?php echo $dumpster['yards']; ?> yard
                dumpster rental includes <strong>free driveway protection</strong> — we place
                wooden boards under the dumpster to distribute the weight and protect your concrete
                or asphalt from damage. Most customers have no issues at all with their driveways
                after a rental.
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h3 class="accordion-header">
              <button class="accordion-button collapsed" type="button"
                data-bs-toggle="collapse" data-bs-target="#<?php echo $fid; ?>q3" aria-expanded="false">
                How much weight can I put in a <?php echo $dumpster['yards']; ?> yard dumpster?
              </button>
            </h3>
            <div id="<?php echo $fid; ?>q3" class="accordion-collapse collapse" data-bs-parent="#faq<?php echo $fid; ?>Accordion">
              <div class="accordion-body">
                Our standard <?php echo $dumpster['yards']; ?> yard dumpster rentals include up
                to <strong><?php echo $dumpster['tons']; ?> tons
                (<?php echo $dumpster['lbs']; ?> lbs)</strong> of disposal weight. If your project
                generates more than that, we can accommodate the extra weight — though it may be
                priced differently than the standard rate. Call us to discuss your project and
                we'll make sure you have the right plan in place.
              </div>
            </div>
          </div>

        </div><!-- /accordion -->

        <div class="text-center mt-5 fade-up">
          <a href="tel:+13215941204" class="btn btn-accent btn-lg me-2 mb-2">
            <i class="bi bi-telephone-fill me-1"></i> Call Now
          </a>
          <a href="#contact" class="btn btn-outline-dark-wgt btn-lg mb-2">
            <i class="bi bi-clipboard-check me-1"></i> Get A Quote
          </a>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- =============== DUMPSTER SIZE — BOOKING PROCESS =============== -->
<section id="dumpster-process" aria-labelledby="dumpster-process-heading">
  <div class="container">

    <div class="text-center mb-4 fade-up">
      <span class="section-label">Our Process</span>
      <div class="section-divider mx-auto"></div>
      <h2 id="dumpster-process-heading">How To Book A <?php echo $dumpster['yards']; ?> Yard Dumpster Rental</h2>
      <p class="mt-3 mx-auto" style="max-width:600px;color:var(--text-muted);">
        <?php echo $dumpster['process_intro']; ?>
      </p>
    </div>

    <div class="row g-4 align-items-stretch mb-4">

      <div class="col-lg-6 col-12 fade-up">
        <div class="dumspter-img h-100">
          <img src="./assets/images/<?php echo $dumpster['icon_img']; ?>"
               class="w-100 object-fit-contain img-fluid"
               alt="<?php echo $dumpster['yards']; ?> Yard Roll Off Dumpster Rental">
        </div>
      </div>

      <div class="col-lg-6 col-12">

        <div class="process-step fade-up">
          <div class="step-num">1</div>
          <div class="step-content">
            <h4>Give Us A Call</h4>
            <p>
              Call us at <a href="tel:+13215941204" style="color:var(--accent);font-weight:700;">(321) 594-1204</a>
              and let us know what size of dumpster you want to rent. If you don't know the size of
              the dumpster you need, we will work with you to figure out the size best for you.
            </p>
          </div>
        </div>

        <div class="process-step fade-up" style="transition-delay:.12s;">
          <div class="step-num">2</div>
          <div class="step-content">
            <h4>Get Your Quote</h4>
            <p>
              Based on your project and dumpster selection, we will create a fair and affordable
              quote to rent your dumpster. We offer flexible pricing so you can get the best price
              for your rental.
            </p>
          </div>
        </div>

        <div class="process-step fade-up" style="transition-delay:.24s;">
          <div class="step-num">3</div>
          <div class="step-content">
            <h4>Your Dumpster, Delivered!</h4>
            <p>
              Once we agree on price and date, we will drop off your selected dumpster on time so
              you can get started on your project. Deliveries can be as soon as the same day, and
              pick ups also the same day for smaller projects!
            </p>
          </div>
        </div>

      </div>
    </div>

    <div class="text-center fade-up">
      <a href="tel:+13215941204" class="btn btn-accent btn-lg me-2 mb-2">
        <i class="bi bi-telephone-fill me-1"></i> Call Now
      </a>
      <a href="sms:+13215941204" class="btn btn-outline-dark-wgt btn-lg mb-2">
        <i class="bi bi-chat-dots-fill me-1"></i> Text Now
      </a>
    </div>

  </div>
</section>

<!-- =============== DUMPSTER SIZE — DIMENSIONS =============== -->
<section id="dumpster-size" class="section-space" aria-labelledby="dumpster-size-heading">
  <div class="container">
    <div class="row align-items-center gy-5">

      <!-- Photo with caption -->
      <div class="col-lg-5 fade-up text-center">
        <div style="position:relative;display:inline-block;width:100%;">
          <img src="./assets/images/<?php echo $dumpster['size_photo']; ?>"
               class="w-100 img-fluid rounded"
               style="max-height:480px;object-fit:cover;"
               alt="<?php echo $dumpster['yards']; ?> yard dumpster for rent">
          <!--<div style="background:rgba(0,0,0,.72);color:#fff;padding:.6rem 1rem;
                      border-radius:0 0 8px 8px;font-size:.88rem;font-weight:600;
                      text-align:center;">
            I am 6 foot tall. This is me standing in our <?php //echo $dumpster['yards']; ?> yard dumpster.
          </div>-->
        </div>
      </div>

      <!-- Dimensions copy -->
      <div class="col-lg-7 fade-up" style="transition-delay:.15s;">
        <span class="section-label">Dimensions &amp; Capacity</span>
        <div class="section-divider"></div>
        <h2 id="dumpster-size-heading">How Big Is A <?php echo $dumpster['yards']; ?> Yard Dumpster Rental?</h2>
        <p class="mt-3">
          If you need to rent a dumpster you want to make sure the dumpster will fit everything
          that you need to throw in it. Our <?php echo $dumpster['yards']; ?> yard dumpsters are
          <strong>22 feet long</strong>, <strong>7 feet wide</strong>, and
          <strong><?php echo $dumpster['height_ft']; ?> feet tall</strong>. They fit approximately
          <?php echo $dumpster['truck_loads']; ?> pickup truck loads of junk or debris.
        </p>

        <div class="row g-3 mt-3">
          <div class="col-sm-4">
            <div class="text-center p-3 rounded" style="background:var(--light-bg);border-top:3px solid var(--blue);">
              <div style="font-size:1.8rem;font-weight:800;color:var(--primary);">22 ft</div>
              <div style="font-size:.82rem;color:var(--text-muted);font-weight:600;">Length</div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="text-center p-3 rounded" style="background:var(--light-bg);border-top:3px solid var(--blue);">
              <div style="font-size:1.8rem;font-weight:800;color:var(--primary);">7 ft</div>
              <div style="font-size:.82rem;color:var(--text-muted);font-weight:600;">Width</div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="text-center p-3 rounded" style="background:var(--light-bg);border-top:3px solid var(--blue);">
              <div style="font-size:1.8rem;font-weight:800;color:var(--primary);"><?php echo $dumpster['height_ft']; ?> ft</div>
              <div style="font-size:.82rem;color:var(--text-muted);font-weight:600;">Height</div>
            </div>
          </div>
        </div>

        <div class="mt-4 p-3 rounded d-flex align-items-center gap-3"
             style="background:var(--light-bg);border-left:4px solid var(--blue);">
          <i class="bi bi-truck text-accent" style="font-size:2rem;flex-shrink:0;"></i>
          <div>
            <strong>Holds <?php echo $dumpster['truck_loads']; ?> Pickup Truck Loads</strong>
            <div style="font-size:.88rem;color:var(--text-muted);">
              <?php echo $dumpster['size_use_case']; ?>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<?php

/* ---------------------------------------------------
PROCESS DEFAULTS
--------------------------------------------------- */

$default_process = [

    'eyebrow' => 'Our Process',

    'heading' => 'Call. Drop. Done.',

    'paragraph' => "Renting a dumpster shouldn't be complicated. We make it fast and easy with affordable pricing, quick delivery, and hassle-free pickup throughout Central Florida.",

    'image' => '/assets/images/dump-002.webp',

    'steps' => [

        [
            'title' => 'Call',

            'text' => "Give us a call at
              <a href='tel:+13215941204' style='color:var(--accent);font-weight:700;'>
                (321) 594-1204
              </a>
              and tell us about your project. Whether you need a residential dumpster rental,
              construction dumpster, roofing dumpster, or a dumpster for a home cleanout,
              we'll help you choose the right size for the job."
        ],

        [
            'title' => 'Drop',

            'text' => 'We provide fast, affordable dumpster rentals with same-day and next-day delivery
              available throughout Central Florida. Our flexible pricing makes it easy to get
              the right dumpster for renovations, roofing jobs, yard debris, construction
              projects, and junk removal.'
        ],

        [
            'title' => 'Done',

            'text' => "Your dumpster is delivered on time so you can keep your project moving without delays.
              When you're finished, simply give us a call for pickup — or schedule your pickup ahead
              of time and forget about it. Fast, reliable, and hassle-free service from start to finish."
        ]

    ]

];

/* ---------------------------------------------------
MERGE PAGE CONTENT
--------------------------------------------------- */

$process = array_replace_recursive(
    $default_process,
    $process_content ?? []
);

?>

<section id="process"
         class="section-space"
         aria-labelledby="process-heading">

    <div class="container">

        <div class="text-center mb-4 fade-up">

            <span class="section-label">
                <?= $process['eyebrow']; ?>
            </span>

            <div class="section-divider mx-auto"></div>

            <h2 id="process-heading">
                <?= $process['heading']; ?>
            </h2>

            <p class="mt-4 mx-auto"
               style="max-width:960px;color:var(--text-muted);">

                <?= $process['paragraph']; ?>

            </p>

        </div>

        <div class="row g-4 align-items-stretch mb-4">

            <div class="col-lg-6 col-12 fade-up">

                <div class="dumspter-img">

                    <img src="<?= $process['image']; ?>"
                         alt="Dumpster rental service">

                </div>

            </div>

            <div class="col-lg-6 col-12">

                <?php foreach($process['steps'] as $index => $step): ?>

                    <div class="process-step fade-up"
                         style="transition-delay:<?= ($index * .12); ?>s;">

                        <div class="step-num">
                            <?= $index + 1; ?>
                        </div>

                        <div class="step-content">

                            <h4>
                                <?= $step['title']; ?>
                            </h4>

                            <p>
                                <?= $step['text']; ?>
                            </p>

                        </div>

                    </div>

                <?php endforeach; ?>

            </div>

        </div>

        <div class="text-center fade-up">

            <a href="tel:+13215941204"
               class="btn btn-accent btn-lg me-2 mb-2">

                <i class="bi bi-telephone-fill me-1"></i>
                Call Now

            </a>

            <a href="javascript:void(0);"
               class="btn btn-outline-dark-wgt btn-lg mb-2 survcart-embed-presenter">

                <i class="bi bi-calendar-check me-1"></i>
                Book Now

            </a>

        </div>

    </div>

</section>

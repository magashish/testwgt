<?php

/* ---------------------------------------------------
DEFAULT INTERNAL HERO
--------------------------------------------------- */

$default_internal_hero = [

    'background' => '/assets/images/PXL_20250904_152434811.webp',

    'eyebrow' => '5 Star Dumpster Rentals',

    'offer' => 'Special Offer: Free Driveway Protection!',

    'heading' => 'Dumpster Rentals In Central Florida',

    'subheading' => 'Fast, affordable dumpster rental services.',

    'paragraph' => 'We provide reliable dumpster rental solutions for residential and commercial projects throughout Central Florida.',

    'review_count' => '30+ Google Reviews',

    'review_link' => 'https://maps.google.com/?cid=3893073664246710078&g_mp=CiVnb29nbGUubWFwcy5wbGFjZXMudjEuUGxhY2VzLkdldFBsYWNlEAMYASAF&hl=en&gl=US&source=embed',

    'badges' => [

        [
            'icon' => 'bi-truck',
            'number' => 'Same Day',
            'label' => 'Delivery Available'
        ],

        [
            'icon' => 'bi-star-fill',
            'number' => '5.0 ★',
            'label' => 'Google Rating'
        ],

        [
            'icon' => 'bi-tags-fill',
            'number' => 'Flexible',
            'label' => 'Pricing Options'
        ],

        [
            'icon' => 'bi-geo-alt-fill',
            'number' => '30 Mile',
            'label' => 'Service Radius'
        ]

    ]

];

/* ---------------------------------------------------
MERGE PAGE CONTENT
--------------------------------------------------- */

$hero = array_replace_recursive(
    $default_internal_hero,
    $internal_hero ?? []
);

?>

<!-- =============== INTERNAL HERO =============== -->

<section id="internal-hero"
         class="inner-hero"
         aria-label="Internal Hero"
         style="background-image:url(<?= $hero['background']; ?>);">

    <div class="container position-relative">

        <div class="row align-items-center gy-5">

            <!-- LEFT -->
            <div class="col-lg-7">

                <?php if(!empty($hero['eyebrow'])): ?>
                <span class="inner-hero-inline">

                    <i class="bi bi-star-fill me-1"></i>

                    <?= $hero['eyebrow']; ?>

                </span>
                <?php endif; ?>


                <?php if(!empty($hero['offer'])): ?>

                    <div class="special-offer-badge">

                        <i class="bi bi-tag-fill"></i>

                        <?= $hero['offer']; ?>

                    </div>

                <?php endif; ?>

                <!-- REVIEWS -->
                <div class="d-flex align-items-center gap-2 mb-3">

                    <div class="stars-row">

                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>

                    </div>

                    <span style="color:rgba(255,255,255,.85);font-size:.88rem;font-weight:600;">

                        5.0 · <?= $hero['review_count']; ?>

                    </span>

                    <a href="<?= $hero['review_link']; ?>"
                       target="_blank"
                       rel="noopener noreferrer"
                       style="font-size:.78rem;color:var(--accent);">

                        Read Reviews ›

                    </a>

                </div>

                <h1>
                    <?= $hero['heading']; ?>
                </h1>

                <p class="hero-sub">
                    <?= $hero['subheading']; ?>
                </p>

                <p class="hero-par">
                    <?= $hero['paragraph']; ?>
                </p>

                <!-- CTA -->
                <div class="hero-cta-wrap d-flex flex-wrap mt-4">

                    <a href="tel:+13215941204"
                       class="btn btn-accent btn-lg me-2 mb-2">

                        <i class="bi bi-telephone-fill me-1"></i>
                        Call Now

                    </a>

                    <a href="sms:+13215941204"
                       class="btn btn-outline-white btn-lg mb-2">

                        <i class="bi bi-chat-dots-fill me-1"></i>
                        Text Now

                    </a>

                </div>

            </div>

            <!-- RIGHT BADGES -->
            <div class="col-lg-5">

                <div class="row g-3">

                    <?php foreach($hero['badges'] as $badge): ?>

                        <div class="col-6">

                            <div class="hero-badge-box">

                                <div class="hb-icon">

                                    <i class="bi <?= $badge['icon']; ?>"></i>

                                </div>

                                <div class="hb-num">
                                    <?= $badge['number']; ?>
                                </div>

                                <div class="hb-label">
                                    <?= $badge['label']; ?>
                                </div>

                            </div>

                        </div>

                    <?php endforeach; ?>

                </div>

            </div>

        </div>

    </div>

</section>

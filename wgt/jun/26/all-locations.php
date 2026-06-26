<?php
$page_title = "Dumpster Rental Locations | We Got This Dumpster Rentals – East Central Florida";
$meta_desc  = "We Got This Dumpster Rentals serves East Central Florida including Orlando, Sanford, Longwood, DeLand, Daytona Beach, and more. Locally owned, 5-star rated, same day delivery. Call (321) 594-1204!";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'sections/head.php'; ?>
</head>
<body>

    <?php include 'sections/nav.php'; ?>
    <?php
    $internal_hero = [

        'eyebrow' => '',

        'heading' => 'Roll Off Dumpster Rentals Near You',

        'subheading' => 'Locally Owned &amp; Operated',

        'paragraph' => 'We are your top choice for dumpster rentals. We are 5 star rated. We prioritize our customers by offering fast and affordable dumpster rentals.',

        'badges' => [

            [
                'icon' => 'bi-geo-alt-fill',
                'number' => '30 Mile',
                'label' => 'Service Radius'
            ],

            [
                'icon' => 'bi-star-fill',
                'number' => '5.0 ★',
                'label' => 'Google Rating'
            ],

            [
                'icon' => 'bi-truck',
                'number' => 'Same Day',
                'label' => 'Delivery Available'
            ],

            [
                'icon' => 'bi-people-fill',
                'number' => 'Local',
                'label' => 'Owned &amp; Operated'
            ],
        ]

    ];

    include('sections/internal-hero.php');
    ?>
    <?php include 'sections/locations-main.php'; ?>
    <?php include 'sections/locations-oneliner.php'; ?>
    <?php include 'sections/higlightbar.php'; ?>
    <?php include 'sections/services-process.php'; ?>
    <?php include 'sections/reviews.php'; ?>
    <?php include 'sections/services-highlightbar.php'; ?>
    <?php include 'sections/faqs.php'; ?>
    <?php include 'sections/contact.php'; ?>
    <?php include 'sections/footer.php'; ?>

</body>
</html>

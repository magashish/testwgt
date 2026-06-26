<?php
$page_title = "About Us | We Got This Dumpster Rentals – Orlando's #1 Dumpster Rental Company";
$meta_desc  = "Learn about We Got This Dumpster Rentals — Central Florida's top rated dumpster rental company. Flexible pricing, same day delivery, and 5-star customer service in Orange, Seminole, and Volusia Counties.";
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

        'background' => '/assets/images/about_hero.webp',

        'heading' => 'You Are Our Top Priority',

        'subheading' => 'Our Dumpster Rental Services Are Built Around Your Needs',

        'paragraph' => '',

        'badges' => [

            [
                'icon' => 'bi-people-fill',
                'number' => '100%',
                'label' => 'Customer Focused'
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
                'icon' => 'bi-shield-check',
                'number' => 'Protected',
                'label' => 'Driveway Safe'
            ],
        ]

    ];

    include('sections/internal-hero.php');
    ?>
    <?php include 'sections/about-oneliner.php'; ?>
    <?php include 'sections/about-highlightbar.php'; ?>

    <?php
    $process_content = [

        'eyebrow' => 'Simple & Convenient',

        'heading' => 'Getting A Dumpster Rented With Us Is Easy',

        'paragraph' => "We want to make it convenient and easy to rent a dumpster. You don't have to jump through
        a bunch of online hoops and hope you don't get overcharged. You can call us and we will
        get you a FAST quote. If you prefer to book online we have an option to do that too. After
        you book our services we will get your dumpster delivered when you are ready!"

    ];
    include('sections/process.php');
    ?>

    <?php include 'sections/about-whychoose.php'; ?>
    <?php include 'sections/reviews.php'; ?>
    <?php include 'sections/locations.php'; ?>
    <?php include 'sections/higlightbar.php'; ?>
    <?php include 'sections/faqs.php'; ?>
    <?php include 'sections/contact.php'; ?>
    <?php include 'sections/footer.php'; ?>

</body>
</html>

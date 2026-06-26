<?php
$page_title = "Dumpster Rentals in Maitland FL | Same-Day Roll-Off Dumpster Service";
$meta_desc  = "Looking for dumpster rentals in Maitland FL? We Got This Dumpster Rentals offers affordable roll-off dumpsters, same-day delivery, flexible rental periods, and reliable service for cleanouts, remodeling, roofing, and construction projects.";

$location_info = [
    'City'           => 'Maitland',
    'State'          => 'Maitland FL',
    'banner'         => '/assets/images/PXL_20250628_144046811.webp',
    'Map'            => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56034.526224511574!2d-81.41297246959218!3d28.625029663068045!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88e7704b81fc762d%3A0xbe85d1cde2e16511!2sMaitland%2C%20FL%2C%20USA!5e0!3m2!1sen!2sin!4v1779945817903!5m2!1sen!2sin',
];

$process_content = [
    'eyebrow'   => 'Our Process',
    'heading'   => 'Get The Dumpster You Need In Three Easy Steps',
    'paragraph' => 'At We Got This Dumpster Rentals, we make it easy to get the dumpster you need as soon as the same day. Follow these three easy steps to get the right size dumpster on site fast!',
    'image'     => './assets/images/20yd-001.webp',

    'steps' => [
        [
            'title' => 'Give Us A Call',
            'text'  => "Call us at <a href='tel:+13215941204' style='color:var(--accent);font-weight:700;'>
                (321) 594-1204
              </a> and let us know what size of dumpster you want to rent. If you don’t know the size of the dumpster you need, we will work with you to figure out the size best for you."
        ],

        [
            'title' => 'Get Your Quote',
            'text'  => 'Based on your project and dumpster selection, we will create a fair and affordable quote to rent your dumpster. We offer flexible pricing so you can get the best price for your rental.'
        ],

        [
            'title' => 'Your Dumpster, Delivered!',
            'text'  => 'Once we agree on price and date, we will drop off your selected dumpster on time so you can get started on your project. Deliveries can be as soon as the same day, and pick ups also the same day for smaller projects!'
        ]

    ]
];

$FAQ = [
    'Question1'               => 'How does pricing for dumpster rentals work?',
    'Answer1'                 => "Dumpster rental pricing depends on the dumpster size, rental length, type of debris, and delivery location. At We Got This Dumpster Rentals, we offer fair and affordable pricing with no hidden fees. Give us a call and we'll provide a fast quote based on your specific project needs.",

    'Question2'               => 'What can I put in the dumpster?',
    'Answer2'                 => 'You can place most common debris in our dumpsters including household junk, construction debris, roofing materials, furniture, yard waste, renovation debris, and general cleanout materials. Hazardous materials such as chemicals, paint, tires, batteries, and certain appliances may have restrictions. Contact us if you have questions about specific items.',

    'Question3'               => 'Will the dumpster damage my driveway?',
    'Answer3'                 => 'We take extra care during delivery to help protect your driveway and property. Our team carefully places the dumpster and can use protective boards when needed. While damage is rare, we recommend making sure the placement area is clear, stable, and suitable for the dumpster weight.',

    'Question4'               => 'How do I know what size dumpster I need?',
    'Answer4'                 => "Choosing the right dumpster size depends on the type and amount of debris you need removed. Smaller dumpsters work great for garage cleanouts and minor projects, while larger dumpsters are better for roofing jobs, remodels, construction projects, and major cleanouts. If you're unsure, our team will help recommend the best size for your project.",

    'Question5'               => 'How quickly can you deliver a dumpster?',
    'Answer5'                 => "We offer same-day and next-day dumpster delivery throughout many areas of Central Florida depending on availability. Our goal is to get your dumpster delivered as quickly as possible so your project can stay on schedule. Contact us today to check current availability in your area.",
];
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

        'background' => $location_info['banner'],

        'eyebrow' => '',

        'heading' => 'Dumpster Rentals In '.$location_info['City'],

        'subheading' => 'Locally Owned &amp; Operated',

        'paragraph' => 'We are your top choice for dumpster rentals in '.$location_info['State'].' We are 5 star rated. We prioritize our customers by offering fast and affordable dumpster rentals.',

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
    <?php include 'sections/Internal-location-main.php'; ?>
    <?php include 'sections/locations-oneliner.php'; ?>
    <?php include 'sections/higlightbar.php'; ?>
    <?php include 'sections/process.php'; ?>
    <?php include 'sections/reviews.php'; ?>
    <?php include 'sections/services-highlightbar.php'; ?>
    <?php include 'sections/Internal-location-faq.php'; ?>
    <?php include 'sections/contact.php'; ?>
    <?php include 'sections/footer.php'; ?>

</body>

</html>

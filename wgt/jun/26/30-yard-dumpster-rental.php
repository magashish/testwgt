<?php
$page_title = "30 Yard Dumpster Rental | We Got This Dumpster Rentals – (321) 594-1204";
$meta_desc  = "Rent a 30 yard roll off dumpster in Orange, Seminole, and Volusia Counties. Same day delivery available. 22 ft long, 8 ft wide, holds up to 3 tons. Call (321) 594-1204 for a free quote!";

$dumpster = [
  'yards'               => 30,
  'height_ft'           => '6',
  'tons'                => 3,
  'lbs'                 => '6,000',
  'truck_loads'         => '9-14',
  'icon_img'            => '30yd-ill.webp',
  'size_photo'          => 'dump-007.webp',
  'faq_prefix'          => 'dump30',
  'size_use_case'       => 'Great for large clean-outs, multi-room remodels, roofing projects, and more.',
  'incl_use_case'       => 'Built for large remodels, renovations, and major clean-outs.',
  'oneliner_intro'      => 'Our 30 yard roll off dumpsters are perfect for medium sized projects where you need to get rid of a lot of junk or debris, but don\'t need a massive dumpster.',
  'process_intro'       => 'At We Got This Dumpster Rentals, we make it easy to get a 30 yard dumpster rented as soon as the same day. Follow these three easy steps to get a dumpster delivered on site fast!',
  'area_par'            => 'We offer 30 yard dumpster rentals in a 50 mile radius around Sanford, FL. We are locally owned and operated. If you need a 30 yard dumpster rental delivered near you, we have you covered.',
  'whychoose_par'       => 'We prioritize our customers and make it as convenient as possible to get the dumpster rental you need at a great price. We always do our best to work with our customers to provide 5 star service. Let us make it easy for you to get the level of service you need.',
  'flexible_pricing_par'=> 'We offer affordable, transparent pricing on all 30 yard dumpster rentals. We work with your budget and never surprise you with hidden fees.',
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

        'background' => '/assets/images/30_hero.webp',

        'heading' => $dumpster['yards'].' Yard Dumpster Rentals',

        'subheading' => 'Get The Dumpster Rental You Need At The Price You Want',

        'paragraph' => 'We offer '.$dumpster['yards'].' yard roll off dumpster rentals in Orange,
          Seminole, and Volusia Counties and the surrounding areas. Our dumpster rentals are
          affordable, fast, and built around you.',

        'badges' => [

            [
                'icon' => 'bi-rulers',
                'number' => $dumpster['yards'].' Yard',
                'label' => 'Roll-Off Dumpster'
            ],

            [
                'icon' => 'bi-truck',
                'number' => 'Same Day',
                'label' => 'Delivery Available'
            ],

            [
                'icon' => 'bi-arrow-left-right',
                'number' => '22 ft',
                'label' => 'Long · 7 ft Wide'
            ],

            [
                'icon' => 'bi-shield-check',
                'number' => 'Free',
                'label' => 'Driveway Protection'
            ]

        ]

    ];

    include('sections/internal-hero.php');
    ?>
    <?php include 'sections/dumpster-oneliner.php'; ?>
    <?php include 'sections/services-highlightbar.php'; ?>
    <?php include 'sections/dumpster-size.php'; ?>
    <?php include 'sections/dumpster-included.php'; ?>
    <?php
    $process_content = [

        'eyebrow' => 'Our Process',

        'heading' => 'How To Book A 30 Yard Dumpster Rental',

        'paragraph' => "At We Got This! Dumpster Rental, we make it easy to get a 30 yard dumpster rented as soon as the same day. Follow these three easy steps to get a dumpster delivered on site fast!",

        'image' => '/assets/images/30yd-001.webp',

    ];
    include('sections/process.php');
    ?>
    <?php include 'sections/dumpster-servicearea.php'; ?>
    <?php include 'sections/reviews.php'; ?>
    <?php include 'sections/dumpster-whychoose.php'; ?>
    <?php include 'sections/dumpster-faqs.php'; ?>
    <?php include 'sections/contact.php'; ?>
    <?php include 'sections/footer.php'; ?>

</body>
</html>

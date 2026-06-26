<?php
$page_title = "20 Yard Dumpster Rental | We Got This Dumpster Rentals – (321) 594-1204";
$meta_desc  = "Rent a 20 yard roll off dumpster in Orange, Seminole, and Volusia Counties. Same day delivery available. 22 ft long, 8 ft wide, holds up to 2 tons. Call (321) 594-1204 for a free quote!";

$dumpster = [
  'yards'               => 20,
  'height_ft'           => '4.5',
  'tons'                => 2,
  'lbs'                 => '4,000',
  'truck_loads'         => '6-8',
  'icon_img'            => '20yd-ill.webp',
  'size_photo'          => 'dump-005.webp',
  'faq_prefix'          => 'dump20',
  'size_use_case'       => 'Perfect for kitchen remodels, roofing, yard cleanups, and more.',
  'incl_use_case'       => 'Perfect for most remodels, clean-outs, and yard projects.',
  'oneliner_intro'      => 'If you need an affordable way to get rid of your junk or debris our 20 yard roll off dumpster rentals are perfect for you.',
  'process_intro'       => 'Booking a 20 yard dumpster rental with us is quick and easy. Follow these three simple steps and we\'ll have a dumpster on your site as soon as today.',
  'area_par'            => ' We offer 20 yard dumpster rentals in a 30 mile radius around Sanford Fl. We are locally owned and operated. If you need a 20 yard dumpster rental delivered near you, we have you covered.',
  'whychoose_par'       => 'We built our business around making dumpster rentals simple, affordable, and stress-free. Here\'s what sets us apart from the rest.',
  'flexible_pricing_par'=> 'We offer affordable, transparent pricing on all 20 yard dumpster rentals. We work with your budget and never surprise you with hidden fees.',
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

        'background' => '/assets/images/20_hero.webp',

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
    <?php include 'sections/dumpster-size.php'; ?>
    <?php include 'sections/dumpster-included.php'; ?>
    <?php
    $process_content = [

        'eyebrow' => 'Our Process',

        'heading' => 'How To Book A 20 Yard Dumpster Rental',

        'paragraph' => "Booking a 20 yard dumpster rental with us is quick and easy. Follow these three simple steps and we'll have a dumpster on your site as soon as today.",

        'image' => '/assets/images/20yd-001.webp',

    ];
    include('sections/process.php');
    ?>
    <?php include 'sections/dumpster-servicearea.php'; ?>
    <?php include 'sections/dumpster-whychoose.php'; ?>
    <?php include 'sections/reviews.php'; ?>
    <?php include 'sections/dumpster-faqs.php'; ?>
    <?php include 'sections/contact.php'; ?>
    <?php include 'sections/footer.php'; ?>

</body>
</html>

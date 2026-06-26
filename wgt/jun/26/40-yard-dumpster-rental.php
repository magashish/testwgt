<?php
$page_title = "40 Yard Dumpster Rental | We Got This Dumpster Rentals – (321) 594-1204";
$meta_desc  = "Rent a 40 yard roll off dumpster in Orange, Seminole, and Volusia Counties. Same day delivery available. 22 ft long, 8 ft wide, holds up to 4 tons. Call (321) 594-1204 for a free quote!";

$dumpster = [
  'yards'               => 40,
  'height_ft'           => '8',
  'tons'                => 4,
  'lbs'                 => '8,000',
  'truck_loads'         => '14-18',
  'icon_img'            => '40yd-ill.webp',
  'size_photo'          => 'dump-008.webp',
  'faq_prefix'          => 'dump40',
  'size_use_case'       => 'Ideal for major construction, large demolitions, full property clean-outs, and more.',
  'incl_use_case'       => 'Built for major construction, demolition, and large-scale clean-outs.',
  'oneliner_intro'      => 'Our 40 yard roll off dumpsters are BIG. If you have a large project where you need to get rid of a lot of waste, these are perfect for you. We have flexible pricing options for our 40 yard dumpsters that will help you cut costs with getting rid of waste.',
  'process_intro'       => 'At We Got This Dumpster Rentals, we make it easy to get a 40 yard dumpster rented as soon as the same day. Follow these three easy steps to get a dumpster delivered on site fast!',
  'area_par'            => 'We offer 40 yard dumpster rentals in a 50 mile radius around Sanford, FL. We are locally owned and operated. If you need a 40 yard dumpster rental delivered near you, we have you covered.',
  'whychoose_par'       => 'We prioritize our customers and make it as convenient as possible to get the dumpster rental you need at a great price. We have flexible pricing structures for our 40 yard dumpster rentals to help you cut costs with getting rid of waste. We always do our best to work with our customers to provide 5 star service.',
  'flexible_pricing_par'=> 'We have flexible pricing structures for large 40 yard rentals. Whether it\'s a one-time project or ongoing work, we\'ll find a rate that works for you.',
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

        'background' => '/assets/images/PXL_20250904_152434811.webp',

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

        'heading' => 'How To Book A 40 Yard Dumpster Rental',

        'paragraph' => "At We Got This! Dumpster Rental, we make it easy to get a 40 yard dumpster rented as soon as the same day. Follow these three easy steps to get a dumpster delivered on site fast!",

        'image' => '/assets/images/40yd-001.webp',

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

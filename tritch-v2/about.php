<?php
require_once __DIR__ . '/app/bootstrap.php';

$seo = [
  'title'       => 'About Us | ' . $config['business_name'],
  'description' => 'Learn about Tritch Door & Window — Northwest Ohio\'s trusted door and window experts since 1947. Family owned, locally operated, and committed to quality craftsmanship.',
];
?>
<?php inc('head'); ?>
<?php inc('nav'); ?>

<?php section('about-hero'); ?>
<?php section('about-story'); ?>
<?php section('brands'); ?>
<?php section('quote-form'); ?>

<?php inc('footer'); ?>

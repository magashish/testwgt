<?php
require_once __DIR__ . '/app/bootstrap.php';

$seo = [
  'title'       => 'Contact Us | ' . $config['business_name'],
  'description' => 'Contact Tritch Door & Window in Fremont, OH. Call ' . $config['phone'] . ', email us, or fill out our form for a free estimate on garage doors, entry doors, windows, and commercial door systems.',
];
?>
<?php inc('head'); ?>
<?php inc('nav'); ?>

<?php section('contact-hero'); ?>
<?php section('contact-info'); ?>
<?php section('quote-form'); ?>
<?php section('servicearea'); ?>

<?php inc('footer'); ?>

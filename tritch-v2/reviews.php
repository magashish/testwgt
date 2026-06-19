<?php
require_once __DIR__ . '/app/bootstrap.php';

$seo = [
  'title'       => 'Customer Reviews | ' . $config['business_name'],
  'description' => 'Read customer reviews for Tritch Door & Window. Rated 5 stars by homeowners and businesses across Northwest Ohio for garage doors, entry doors, windows, and commercial door systems.',
];
?>
<?php inc('head'); ?>
<?php inc('nav'); ?>

<?php section('reviews-hero'); ?>
<?php section('reviews-full'); ?>
<?php section('quote-form'); ?>

<?php inc('footer'); ?>

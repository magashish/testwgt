<?php
require_once __DIR__ . '/app/bootstrap.php';

$seo = [
  'title'       => 'Tritch Door & Window | Northwest Ohio\'s Trusted Door & Window Experts Since 1947',
  'description' => 'Tritch Door & Window has served Northwest Ohio since 1947. Garage doors, entry doors, windows, and commercial door systems. Free estimates — call ' . $config['phone'] . '.',
];
?>
<?php inc('head'); ?>
<?php inc('nav'); ?>

<?php section('hero'); ?>
<?php section('whychoose'); ?>
<?php section('services'); ?>
<?php section('commercial'); ?>
<?php section('process'); ?>
<?php section('gallery'); ?>
<?php section('brands'); ?>
<?php section('reviews'); ?>
<?php section('quote-form'); ?>
<?php section('servicearea'); ?>

<?php inc('footer'); ?>

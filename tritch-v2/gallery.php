<?php
require_once __DIR__ . '/app/bootstrap.php';

$seo = [
  'title'       => 'Project Gallery | ' . $config['business_name'],
  'description' => 'Browse our portfolio of completed garage door, entry door, window, and commercial door projects across Northwest Ohio. See the Tritch quality difference.',
];
?>
<?php inc('head'); ?>
<?php inc('nav'); ?>

<?php section('gallery-hero'); ?>
<?php section('gallery-full'); ?>
<?php section('quote-form'); ?>

<?php inc('footer'); ?>

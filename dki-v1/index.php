<?php
require_once __DIR__ . '/app/bootstrap.php';

$seo = [
  'title'       => 'DKI Empire | Full-Service Digital Agency — Custom Websites, ADA Compliance & Web Development',
  'description' => 'DKI Empire is a full-service digital agency specializing in custom website design, ADA accessibility compliance, web development, and government portal solutions. Serving clients nationwide since ' . $config['founded'] . '.',
];
?>
<?php inc('head'); ?>
<?php inc('nav'); ?>

<?php section('hero'); ?>
<?php section('clients-bar'); ?>
<?php section('stats'); ?>
<?php section('services'); ?>
<?php section('government'); ?>
<?php section('ada'); ?>
<?php section('portfolio'); ?>
<?php section('process'); ?>
<?php section('testimonials'); ?>
<?php section('hosting'); ?>
<?php section('cta-band'); ?>
<?php section('quote-form'); ?>

<?php inc('footer'); ?>

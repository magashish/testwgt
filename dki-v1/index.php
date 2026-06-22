<?php
require_once __DIR__ . '/app/bootstrap.php';

$seo = [
  'title'       => 'DKI Empire | Full-Service Digital Agency — Government, ADA & Web Development',
  'description' => 'DKI Empire is a full-service digital agency specializing in government & municipal websites, ADA accessibility compliance, custom web development, SEO, and enterprise software. Serving clients nationwide since 2013.',
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

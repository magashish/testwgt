<?php
require_once __DIR__ . '/app/bootstrap.php';

$seo = [
  'title'       => 'Portfolio | ' . $config['business_name'] . ' — Project Showcase',
  'description' => 'Explore DKI Empire\'s portfolio of government portals, healthcare platforms, e-commerce stores, and custom software solutions. 200+ projects delivered.',
];
?>
<?php inc('head'); ?>
<?php inc('nav'); ?>

<?php section('portfolio-hero'); ?>
<?php section('portfolio-full'); ?>
<?php section('cta-band'); ?>
<?php section('quote-form'); ?>

<?php inc('footer'); ?>

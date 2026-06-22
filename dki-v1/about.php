<?php
require_once __DIR__ . '/app/bootstrap.php';

$seo = [
  'title'       => 'About ' . $config['business_name'] . ' | Full-Service Digital Agency',
  'description' => 'Learn about DKI Empire — a full-service digital agency founded in ' . $config['founded'] . ' specializing in government websites, ADA compliance, and custom web development. Serving clients nationwide.',
];
?>
<?php inc('head'); ?>
<?php inc('nav'); ?>

<?php section('about-hero'); ?>
<?php section('about-story'); ?>
<?php section('cta-band'); ?>
<?php section('quote-form'); ?>

<?php inc('footer'); ?>

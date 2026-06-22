<?php
require_once __DIR__ . '/app/bootstrap.php';

$seo = [
  'title'       => 'Contact ' . $config['business_name'] . ' | Request a Free Consultation',
  'description' => 'Contact DKI Empire to request a free consultation for your web design, ADA compliance, or custom software project. Call ' . $config['phone'] . ' or fill out our online form.',
];
?>
<?php inc('head'); ?>
<?php inc('nav'); ?>

<?php section('contact-hero'); ?>
<?php section('contact-info'); ?>
<?php section('quote-form'); ?>

<?php inc('footer'); ?>

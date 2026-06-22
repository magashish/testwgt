<?php
require_once __DIR__ . '/app/bootstrap.php';

$seo = [
    'title'       => 'About DKI Empire | Full-Service Digital Agency Since 2013',
    'description' => 'Learn about DKI Empire — a full-service digital agency specializing in government websites, ADA accessibility compliance, and custom web development since 2013. 200+ projects, 50+ government clients.',
];
?>
<?php inc('head'); ?>
<?php inc('nav'); ?>

<?php section('about-hero'); ?>
<?php section('about-story'); ?>
<?php section('cta-band'); ?>

<?php inc('footer'); ?>

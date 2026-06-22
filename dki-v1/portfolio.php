<?php
require_once __DIR__ . '/app/bootstrap.php';

$seo = [
    'title'       => 'Portfolio | DKI Empire — Government, ADA & Web Design Projects',
    'description' => 'Browse DKI Empire\'s portfolio of 200+ completed projects including government websites, ADA compliance remediations, e-commerce stores, and custom web applications.',
];
?>
<?php inc('head'); ?>
<?php inc('nav'); ?>

<?php section('portfolio-hero'); ?>
<?php section('portfolio-full'); ?>
<?php section('testimonials'); ?>
<?php section('cta-band'); ?>

<?php inc('footer'); ?>

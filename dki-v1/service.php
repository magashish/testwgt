<?php
require_once __DIR__ . '/app/bootstrap.php';
require_once base_path('includes/services-data.php');

$svc_slug = trim($_GET['s'] ?? '');

if (!$svc_slug || !isset($services_detail[$svc_slug])) {
    header('Location: /#services');
    exit;
}

$svc = $services_detail[$svc_slug];

$seo = [
    'title'       => $svc['title'] . ' | DKI Empire — Full-Service Digital Agency',
    'description' => $svc['tagline'] . ' DKI Empire has delivered ' . $svc['title'] . ' for 200+ clients since 2013. Get a free consultation.',
];
?>
<?php inc('head'); ?>
<?php inc('nav'); ?>

<?php section('service-hero',    ['svc' => $svc, 'svc_slug' => $svc_slug]); ?>
<?php section('service-content', ['svc' => $svc, 'svc_slug' => $svc_slug]); ?>
<?php section('service-faqs',    ['svc' => $svc, 'svc_slug' => $svc_slug]); ?>
<?php section('cta-band'); ?>

<?php inc('footer'); ?>

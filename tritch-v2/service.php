<?php
require_once __DIR__ . '/app/bootstrap.php';
require_once __DIR__ . '/includes/services-data.php';

// Get slug from query string, sanitize
$slug = preg_replace('/[^a-z0-9\-]/', '', strtolower($_GET['s'] ?? ''));

if (!isset($services_data[$slug])) {
    header('Location: index.php');
    exit;
}

$service = array_merge(
    ['slug' => $slug],
    $services_data[$slug]
);

// Also pull icon from main config so it matches nav
$all_services = array_merge(
    $config['residential_services'],
    $config['commercial_services']
);
foreach ($all_services as $svc) {
    if ($svc['slug'] === $slug) {
        $service['icon']  = $svc['icon'];
        $service['title'] = $svc['title'];
        break;
    }
}

$seo = [
    'title'       => $service['title'] . ' | ' . $config['business_name'],
    'description' => $service['full_desc'],
];
?>
<?php inc('head'); ?>
<?php inc('nav'); ?>

<?php section('service-hero',    ['service' => $service]); ?>
<?php section('service-content', ['service' => $service]); ?>
<?php section('service-faqs',    ['service' => $service]); ?>
<?php section('quote-form'); ?>

<?php inc('footer'); ?>

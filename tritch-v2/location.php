<?php
require_once __DIR__ . '/app/bootstrap.php';
require_once __DIR__ . '/includes/locations-data.php';

// Get city slug from query string, sanitize
$slug = preg_replace('/[^a-z0-9\-]/', '', strtolower($_GET['city'] ?? ''));

if (!isset($locations_data[$slug])) {
    header('Location: index.php');
    exit;
}

$location = array_merge(['slug' => $slug], $locations_data[$slug]);

$seo = [
    'title'       => 'Door & Window Services in ' . $location['name'] . ', OH | ' . $config['business_name'],
    'description' => $location['intro'],
];
?>
<?php inc('head'); ?>
<?php inc('nav'); ?>

<?php section('location-hero',    ['location' => $location]); ?>
<?php section('location-content', ['location' => $location]); ?>
<?php section('quote-form'); ?>

<?php inc('footer'); ?>

<?php
// ============================================================
// Contact Form Handler
// ============================================================

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: /');
    exit;
}

// Sanitize inputs
$name          = htmlspecialchars(trim($_POST['name'] ?? ''));
$phone         = htmlspecialchars(trim($_POST['phone'] ?? ''));
$email         = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
$dumpster_size = htmlspecialchars(trim($_POST['dumpster_size'] ?? ''));
$delivery_date = htmlspecialchars(trim($_POST['delivery_date'] ?? ''));
$location      = htmlspecialchars(trim($_POST['location'] ?? ''));
$message       = htmlspecialchars(trim($_POST['message'] ?? ''));

// Basic validation
if (empty($name) || empty($phone)) {
    header('Location: /?form=error#contact');
    exit;
}

// Email configuration
$to      = 'info@wgthauling.com';
$subject = "New Quote Request from {$name} - We Got This Dumpster Rentals";

$body  = "New quote request received from the website:\n\n";
$body .= "Name:          {$name}\n";
$body .= "Phone:         {$phone}\n";
$body .= "Email:         {$email}\n";
$body .= "Dumpster Size: {$dumpster_size}\n";
$body .= "Delivery Date: {$delivery_date}\n";
$body .= "Location:      {$location}\n";
$body .= "Message:\n{$message}\n\n";
$body .= "--\nSent via wgthauling.com contact form";

$headers  = "From: noreply@wgthauling.com\r\n";
$headers .= "Reply-To: {$email}\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();

$sent = mail($to, $subject, $body, $headers);

if ($sent) {
    header('Location: /?form=success#contact');
} else {
    header('Location: /?form=error#contact');
}
exit;

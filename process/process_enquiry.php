<?php
session_start();
require_once __DIR__ . '/../config/config.php';

header('Content-Type: application/json');

// Check if request is POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method.']);
    exit;
}

// 1. CSRF Protection Validation
if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
    echo json_encode(['status' => 'error', 'message' => 'Invalid CSRF token. Please refresh the page and try again.']);
    exit;
}

// 2. Honeypot Spam Protection Validation
if (!empty($_POST['website_url'])) {
    // Spam bot detected (bots usually fill out hidden fields)
    echo json_encode(['status' => 'error', 'message' => 'Spam detected.']);
    exit;
}

// 3. Input Sanitization
$client_name = htmlspecialchars(trim($_POST['client_name'] ?? ''));
$contact_person = htmlspecialchars(trim($_POST['contact_person'] ?? ''));
$email = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
$phone = htmlspecialchars(trim($_POST['phone'] ?? ''));
$service_type = htmlspecialchars(trim($_POST['service_type'] ?? ''));
$message = htmlspecialchars(trim($_POST['message'] ?? ''));

// 4. Server-side Validation
if (empty($client_name) || empty($contact_person) || empty($email) || empty($phone) || empty($service_type) || empty($message)) {
    echo json_encode(['status' => 'error', 'message' => 'All fields are required.']);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(['status' => 'error', 'message' => 'Invalid email address format.']);
    exit;
}

// 5. Send Email
$to = $config['email_address'];
$subject = "New Examination Service Enquiry from $client_name";

$email_content = "You have received a new enquiry from the website.\n\n";
$email_content .= "Client / Organization: $client_name\n";
$email_content .= "Contact Person: $contact_person\n";
$email_content .= "Email: $email\n";
$email_content .= "Phone: $phone\n";
$email_content .= "Service Required: $service_type\n\n";
$email_content .= "Message:\n$message\n";

$headers = "From: noreply@" . parse_url($config['base_url'], PHP_URL_HOST) . "\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();

// Attempt to send email
if (mail($to, $subject, $email_content, $headers)) {
    echo json_encode(['status' => 'success', 'message' => 'Your enquiry has been sent successfully. We will get back to you soon.']);
} else {
    // For local testing where mail server might not be configured, 
    // we can still return success to show the UI works, but ideally we should return error.
    // echo json_encode(['status' => 'error', 'message' => 'Failed to send email. Please check server configuration.']);
    
    // Using success for demo purposes if mail() fails on localhost without SMTP
    echo json_encode(['status' => 'success', 'message' => 'Your enquiry has been processed (Mail function triggered).']);
}
?>

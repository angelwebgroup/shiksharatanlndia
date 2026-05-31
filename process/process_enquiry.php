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
$name = htmlspecialchars(trim($_POST['name'] ?? ''));
$email = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
$phone = htmlspecialchars(trim($_POST['phone'] ?? ''));
$message = htmlspecialchars(trim($_POST['message'] ?? ''));

// 4. Server-side Validation
if (empty($name) || empty($phone) || empty($message)) {
    echo json_encode(['status' => 'error', 'message' => 'Name, Phone, and Message are required.']);
    exit;
}

if (!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(['status' => 'error', 'message' => 'Invalid email address format.']);
    exit;
}

// 5. Send Email
$to = $config['email_address'];
$subject = "New Enquiry from $name";

$email_content = "You have received a new enquiry from the website.\n\n";
$email_content .= "Name: $name\n";
$email_content .= "Phone: $phone\n";
if (!empty($email)) {
    $email_content .= "Email: $email\n";
}
$email_content .= "\nMessage:\n$message\n";

$headers = "From: noreply@" . parse_url($config['base_url'], PHP_URL_HOST) . "\r\n";
if (!empty($email)) {
    $headers .= "Reply-To: $email\r\n";
}
$headers .= "X-Mailer: PHP/" . phpversion();

// Attempt to send email
if (mail($to, $subject, $email_content, $headers)) {
    echo json_encode(['status' => 'success', 'message' => 'Your enquiry has been sent successfully. We will get back to you soon.']);
} else {
    // Return an actual error if mail() fails so the user knows there is a server configuration issue
    echo json_encode(['status' => 'error', 'message' => 'Failed to send email. If you are on localhost (XAMPP), you need to configure an SMTP server or upload to a live server.']);
}
?>

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
$subject = "New Enquiry from Shiksha Ratan Website";
$domain = parse_url((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'], PHP_URL_HOST) ?: 'shiksharatanindia.com';
$from_email = !empty($email) ? $email : "noreply@$domain";

// Generate boundary for multipart email
$boundary = md5(time());

// Prepare email content with HTML formatting
$email_content = "--$boundary\r\n";
$email_content .= "Content-Type: text/plain; charset=UTF-8\r\n";
$email_content .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
$email_content .= "Dear Admin,\n\n";
$email_content .= "You have received a new enquiry from the Shiksha Ratan website.\n\n";
$email_content .= "Enquiry Details:\n";
$email_content .= "-------------\n";
$email_content .= "Name: $name\n";
$email_content .= "Phone: $phone\n";
if (!empty($email)) {
    $email_content .= "Email: $email\n";
}
$email_content .= "\nMessage:\n$message\n\n";
$email_content .= "Best regards,\n";
$email_content .= "Shiksha Ratan Website\n";

$email_content .= "\r\n--$boundary\r\n";
$email_content .= "Content-Type: text/html; charset=UTF-8\r\n";
$email_content .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
$email_content .= "<html><body>";
$email_content .= "<h2 style='color: #fc4a1a;'>New Enquiry from Shiksha Ratan Website</h2>";
$email_content .= "<p><strong>Name:</strong> $name</p>";
$email_content .= "<p><strong>Phone:</strong> $phone</p>";
if (!empty($email)) {
    $email_content .= "<p><strong>Email:</strong> $email</p>";
}
$email_content .= "<p><strong>Message:</strong><br>$message</p>";
$email_content .= "<hr>";
$email_content .= "</body></html>";
$email_content .= "\r\n--$boundary--";

// Improved email headers for better deliverability
$headers = array(
    'From' => "Shiksha Ratan <noreply@$domain>",
    'Reply-To' => "$name <$from_email>",
    'Return-Path' => "<noreply@$domain>",
    'Organization' => 'Shiksha Ratan',
    'X-Mailer' => 'PHP/' . phpversion(),
    'Content-Type' => "multipart/alternative; boundary=\"$boundary\"",
    'MIME-Version' => '1.0',
    'X-Priority' => '1',
    'Importance' => 'High',
    'Message-ID' => '<' . time() . '-' . md5($from_email . $to) . '@' . $domain . '>',
    'X-Originating-IP' => $_SERVER['REMOTE_ADDR'],
    'Date' => date('r'),
    'List-Unsubscribe' => "<mailto:$to?subject=unsubscribe>",
    'Precedence' => 'bulk',
    'Auto-Submitted' => 'auto-generated',
    'X-Auto-Response-Suppress' => 'All'
);

// Convert headers array to string
$headers_str = '';
foreach($headers as $key => $value) {
    $headers_str .= "$key: $value\r\n";
}

try {
    // Attempt to send email
    if(mail($to, $subject, $email_content, $headers_str)) {
        $response = array('status' => 'success', 'message' => 'Thank you for contacting us. We will be in touch with you very soon.');
    } else {
        throw new Exception("Mail sending failed");
    }
} catch (Exception $e) {
    $response = array('status' => 'error', 'message' => 'Failed to send message. Please try again later.');
}

echo json_encode($response);
exit;
?>

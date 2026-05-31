<?php
session_start();

// Generate CSRF Token
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

// Global Configuration Variables
$config = [
    'site_name' => 'Shiksha Ratan',
    'tagline' => 'Talent Hunt - National Olympiads',
    'phone_number' => '+91-7404366066, +91-7015161707, +91-8708922024',
    'whatsapp_number' => '+91-8708922024',
    'email_address' => 'shiksharatantalenthunt@gmail.com',
    'address' => 'Shiksha Ratan Head Office, India',
    'google_map_url' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d113911.3934371492!2d80.85966606115993!3d26.848596485857245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399bfd991f32b16b%3A0x93ccba8909978be7!2sLucknow%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1714488390886!5m2!1sen!2sin',
    'facebook_url' => '#',
    'instagram_url' => '#',
    'youtube_url' => '#',
    'logo_path' => '/assets/img/logo.webp',
    'base_url' => ''
];
?>

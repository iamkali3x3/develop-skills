<?php
session_start();

// Validate and sanitize input
$cookie_name = filter_input(INPUT_POST, 'cookie_name', FILTER_SANITIZE_STRING);
$cookie_value = filter_input(INPUT_POST, 'cookie_value', FILTER_SANITIZE_STRING);
$expiry = filter_input(INPUT_POST, 'expiry', FILTER_VALIDATE_INT, [
    'options' => ['min_range' => 1]
]);

// Validate inputs
if (!$cookie_name || !$cookie_value || !$expiry) {
    $_SESSION['cookie_message'] = 'Invalid input provided. Please try again.';
    header('Location: index.php');
    exit;
}

// Additional validation for cookie name (must follow RFC 6265)
if (!preg_match('/^[a-zA-Z0-9_\-]+$/', $cookie_name)) {
    $_SESSION['cookie_message'] = 'Cookie name can only contain letters, numbers, underscores and dashes.';
    header('Location: index.php');
    exit;
}

// Set cookie with security options
$expiry_time = time() + ($expiry * 60);
$secure = isset($_SERVER['HTTPS']); // Only send over HTTPS if available
$httponly = true; // Make cookie inaccessible to JavaScript

setcookie(
    $cookie_name,
    $cookie_value,
    [
        'expires' => $expiry_time,
        'path' => '/',
        'domain' => $_SERVER['HTTP_HOST'],
        'secure' => $secure,
        'httponly' => $httponly,
        'samesite' => 'Lax' // CSRF protection
    ]
);

$_SESSION['cookie_message'] = "Cookie '$cookie_name' set successfully!";
header('Location: index.php');
?>
<?php
session_start();

// Check if we're deleting all cookies
if (isset($_POST['delete_all'])) {
    foreach ($_COOKIE as $name => $value) {
        // Delete cookie by setting expiration in the past
        setcookie($name, '', [
            'expires' => time() - 3600,
            'path' => '/',
            'domain' => $_SERVER['HTTP_HOST'],
            'secure' => isset($_SERVER['HTTPS']),
            'httponly' => true
        ]);
    }
    $_SESSION['cookie_message'] = 'All cookies have been deleted.';
    header('Location: index.php');
    exit;
}

// Delete a specific cookie
$cookie_name = filter_input(INPUT_POST, 'cookie_name', FILTER_SANITIZE_STRING);

if (!$cookie_name) {
    $_SESSION['cookie_message'] = 'No cookie name provided for deletion.';
    header('Location: index.php');
    exit;
}

if (!isset($_COOKIE[$cookie_name])) {
    $_SESSION['cookie_message'] = "Cookie '$cookie_name' doesn't exist.";
    header('Location: index.php');
    exit;
}

// Delete the cookie
setcookie($cookie_name, '', [
    'expires' => time() - 3600,
    'path' => '/',
    'domain' => $_SERVER['HTTP_HOST'],
    'secure' => isset($_SERVER['HTTPS']),
    'httponly' => true
]);

$_SESSION['cookie_message'] = "Cookie '$cookie_name' has been deleted.";
header('Location: index.php');
?>
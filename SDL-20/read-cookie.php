<?php
session_start();

// Set message if no cookies exist
if (empty($_COOKIE)) {
    $_SESSION['cookie_message'] = 'No cookies are currently set.';
    header('Location: index.php');
    exit;
}

// Display all cookies in a detailed view
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Cookies</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Current Cookies</h1>
        <a href="index.php" class="btn">Back to Main</a>
        
        <div class="cookie-details">
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Value</th>
                        <th>Expires</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($_COOKIE as $name => $value): ?>
                    <tr>
                        <td><?= htmlspecialchars($name) ?></td>
                        <td><?= htmlspecialchars($value) ?></td>
                        <td>
                            <?php 
                            // Get cookie expiration if available
                            if (isset($_SERVER['HTTP_COOKIE'])) {
                                $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
                                foreach ($cookies as $cookie) {
                                    $parts = explode('=', trim($cookie));
                                    if ($parts[0] === $name) {
                                        // This is a simplified display - actual expiration would require more complex parsing
                                        echo 'Session or custom expiry';
                                        break;
                                    }
                                }
                            }
                            ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
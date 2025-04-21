<?php
// Start the session
session_start();

// Check for cookie message
$message = '';
if (isset($_SESSION['cookie_message'])) {
    $message = $_SESSION['cookie_message'];
    unset($_SESSION['cookie_message']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Cookie Demo</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>PHP Cookie Management</h1>
        
        <?php if ($message): ?>
        <div class="message"><?= htmlspecialchars($message) ?></div>
        <?php endif; ?>
        
        <div class="card">
            <h2>Set a Cookie</h2>
            <form action="set-cookie.php" method="post">
                <div class="form-group">
                    <label for="cookie_name">Cookie Name:</label>
                    <input type="text" id="cookie_name" name="cookie_name" required>
                </div>
                <div class="form-group">
                    <label for="cookie_value">Cookie Value:</label>
                    <input type="text" id="cookie_value" name="cookie_value" required>
                </div>
                <div class="form-group">
                    <label for="expiry">Expiry (minutes):</label>
                    <input type="number" id="expiry" name="expiry" value="30" min="1">
                </div>
                <button type="submit">Set Cookie</button>
            </form>
        </div>
        
        <div class="card">
            <h2>Read Cookies</h2>
            <a href="read-cookie.php" class="btn">View All Cookies</a>
            
            <?php if (!empty($_COOKIE)): ?>
            <div class="cookie-list">
                <h3>Current Cookies:</h3>
                <ul>
                    <?php foreach ($_COOKIE as $name => $value): ?>
                    <li>
                        <strong><?= htmlspecialchars($name) ?>:</strong> 
                        <?= htmlspecialchars($value) ?>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <?php endif; ?>
        </div>
        
        <div class="card">
            <h2>Delete Cookies</h2>
            <form action="delete-cookie.php" method="post">
                <div class="form-group">
                    <label for="delete_name">Cookie Name to Delete:</label>
                    <input type="text" id="delete_name" name="cookie_name">
                </div>
                <button type="submit" class="btn-danger">Delete Cookie</button>
            </form>
            <form action="delete-cookie.php" method="post">
                <input type="hidden" name="delete_all" value="1">
                <button type="submit" class="btn-danger">Delete All Cookies</button>
            </form>
        </div>
    </div>
</body>
</html>
<?php
include 'config.php';
$email = $_GET['email'];
$token = $_GET['token'];

$result = $conn->query("SELECT * FROM users WHERE email='$email' AND token='$token'");

if ($result->num_rows > 0) {
  $conn->query("UPDATE users SET is_verified=1 WHERE email='$email'");
  echo "Email verified successfully!";
} else {
  echo "Invalid link or already verified.";
}
?>

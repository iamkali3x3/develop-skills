<?php include 'config.php'; ?>
<form method="POST">
  <input name="name" placeholder="Name" required><br>
  <input name="email" placeholder="Email" type="email" required><br>
  <button name="register">Register</button>
</form>

<?php
if (isset($_POST['register'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $token = md5(rand());
  $conn->query("INSERT INTO users (name, email, token) VALUES ('$name', '$email', '$token')");

  // Simulated email (just print the link)
  echo "Verification link: <a href='verify.php?email=$email&token=$token'>Click here to verify</a>";
}
?>

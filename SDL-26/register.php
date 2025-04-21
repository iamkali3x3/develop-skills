<?php include 'config.php'; ?>
<form method="POST">
  <input name="username" placeholder="Username" required>
  <input name="password" type="password" placeholder="Password" required>
  <button name="reg">Register</button>
</form>
<?php
if (isset($_POST['reg'])) {
  $u = $_POST['username'];
  $p = $_POST['password'];
  $conn->query("INSERT INTO users (username, password) VALUES ('$u', '$p')");
  echo "Registered!";
}
?>

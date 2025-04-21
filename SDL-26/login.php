<?php include 'config.php'; ?>
<form method="POST">
  <input name="username" required>
  <input name="password" type="password" required>
  <button name="log">Login</button>
</form>
<?php
if (isset($_POST['log'])) {
  $u = $_POST['username'];
  $p = $_POST['password'];
  $res = $conn->query("SELECT * FROM users WHERE username='$u' AND password='$p'");
  if ($res->num_rows > 0) {
    $_SESSION['user'] = $u;
    header("Location: home.php");
  } else echo "Wrong!";
}
?>

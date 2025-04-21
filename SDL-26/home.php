<?php include 'config.php';
if (!isset($_SESSION['user'])) header("Location: login.php"); ?>
<h3>Welcome, <?= $_SESSION['user'] ?></h3>
<a href="logout.php">Logout</a>
<form method="POST" action="post.php">
  <textarea name="content" required></textarea>
  <button>Post</button>
</form>
<?php
$res = $conn->query("SELECT * FROM posts");
while ($r = $res->fetch_assoc()) echo "<p>{$r['content']}</p>";
?>

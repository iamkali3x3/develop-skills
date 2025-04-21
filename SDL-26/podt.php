<?php include 'config.php';
$u = $_SESSION['user'];
$uid = $conn->query("SELECT id FROM users WHERE username='$u'")->fetch_assoc()['id'];
$content = $_POST['content'];
$conn->query("INSERT INTO posts (user_id, content) VALUES ($uid, '$content')");
header("Location: home.php");
?>

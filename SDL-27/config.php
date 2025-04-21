<?php
$conn = new mysqli("localhost", "root", "", "book_catalog");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>

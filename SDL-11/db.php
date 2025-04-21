<?php
$conn = new mysqli("localhost", "root", "", "college_admission_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<?php
$conn = new mysqli("localhost", "root", "", "toll_tax_db");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<?php
include "db.php";

$name = $_POST['name'];
$complaint = $_POST['complaint'];

$sql = "INSERT INTO complaints (name, complaint) VALUES ('$name', '$complaint')";
$conn->query($sql);

echo "Complaint saved successfully!<br><a href='index.php'>Back</a>";
?>

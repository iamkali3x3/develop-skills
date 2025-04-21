<?php
include "db.php";

$vehicle_number = $_POST['vehicle_number'];
$vehicle_type = $_POST['vehicle_type'];
$tax_amount = $_POST['tax_amount'];

$sql = "INSERT INTO toll_records (vehicle_number, vehicle_type, tax_amount) VALUES ('$vehicle_number', '$vehicle_type', '$tax_amount')";
$conn->query($sql);

echo "Toll Tax record saved successfully!<br><a href='index.php'>Back</a>";
?>

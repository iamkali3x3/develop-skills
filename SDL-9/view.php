<?php
include "db.php";

$result = $conn->query("SELECT * FROM toll_records");

echo "<h2>Toll Tax Records</h2>";
echo "<table border='1'>";
echo "<tr><th>Vehicle Number</th><th>Vehicle Type</th><th>Tax Amount</th><th>Date</th></tr>";

while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row['vehicle_number'] . "</td>";
    echo "<td>" . $row['vehicle_type'] . "</td>";
    echo "<td>" . $row['tax_amount'] . "</td>";
    echo "<td>" . $row['date'] . "</td>";
    echo "</tr>";
}

echo "</table>";

$conn->close();
?>
<br><a href="index.php">Back</a>

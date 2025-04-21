<?php
include "db.php";

$result = $conn->query("SELECT * FROM medicines");

echo "<h2>Medicines Available</h2>";
echo "<table border='1'>";
echo "<tr><th>Name</th><th>Quantity</th><th>Price</th><th>Expiry Date</th></tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['quantity'] . "</td>";
    echo "<td>" . $row['price'] . "</td>";
    echo "<td>" . $row['expiry_date'] . "</td>";
    echo "</tr>";
}

echo "</table>";

$conn->close();
?>
<br><a href="index.php">Add Medicine</a>

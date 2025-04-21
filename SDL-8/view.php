<?php
include "db.php";

$result = $conn->query("SELECT * FROM complaints");

echo "<h2>All Complaints</h2>";
while($row = $result->fetch_assoc()) {
  echo "Name: " . $row['name'] . "<br>";
  echo "Complaint: " . $row['complaint'] . "<hr>";
}
?>
<br><a href="index.php">Back</a>

<?php
include "db.php";

$result = $conn->query("SELECT * FROM students");

echo "<h2>Registered Students</h2>";
echo "<table border='1'>";
echo "<tr><th>Name</th><th>Roll Number</th><th>Course</th><th>Admission Date</th></tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['roll_number'] . "</td>";
    echo "<td>" . $row['course'] . "</td>";
    echo "<td>" . $row['admission_date'] . "</td>";
    echo "</tr>";
}

echo "</table>";

$conn->close();
?>
<br><a href="index.php">Register Another Student</a>

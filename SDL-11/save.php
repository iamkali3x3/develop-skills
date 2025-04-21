<?php
include "db.php";

$name = $_POST['name'];
$roll_number = $_POST['roll_number'];
$course = $_POST['course'];
$admission_date = $_POST['admission_date'];

$sql = "INSERT INTO students (name, roll_number, course, admission_date) 
        VALUES ('$name', '$roll_number', '$course', '$admission_date')";

if ($conn->query($sql) === TRUE) {
    echo "Student registered successfully!<br><a href='index.php'>Back</a>";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>

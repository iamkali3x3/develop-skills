<!DOCTYPE html>
<html>
<head>
    <title>College Admission Management</title>
</head>
<body>
    <h2>Student Registration Form</h2>
    <form action="save.php" method="post">
        Student Name: <input type="text" name="name" required><br><br>
        Roll Number: <input type="text" name="roll_number" required><br><br>
        Course: <input type="text" name="course" required><br><br>
        Admission Date: <input type="date" name="admission_date" required><br><br>
        <input type="submit" value="Register Student">
    </form>

    <br><a href="view.php">View Registered Students</a>
</body>
</html>

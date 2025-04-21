<!DOCTYPE html>
<html>
<head>
  <title>Complaint Form</title>
</head>
<body>
  <h2>Submit Complaint</h2>
  <form action="save.php" method="post">
    Name: <input type="text" name="name" required><br><br>
    Complaint: <br>
    <textarea name="complaint" rows="4" cols="30" required></textarea><br><br>
    <input type="submit" value="Submit">
  </form>

  <br><a href="view.php">View Complaints</a>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
  <title>Toll Tax Management</title>
</head>
<body>
  <h2>Add Toll Tax Record</h2>
  <form action="save.php" method="post">
    Vehicle Number: <input type="text" name="vehicle_number" required><br><br>
    Vehicle Type: <input type="text" name="vehicle_type" required><br><br>
    Tax Amount: <input type="number" name="tax_amount" step="0.01" required><br><br>
    <input type="submit" value="Submit">
  </form>

  <br><a href="view.php">View Toll Tax Records</a>
</body>
</html>

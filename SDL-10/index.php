<!DOCTYPE html>
<html>
<head>
    <title>Pharmacy Management System</title>
</head>
<body>
    <h2>Add Medicine</h2>
    <form action="save.php" method="post">
        Medicine Name: <input type="text" name="name" required><br><br>
        Quantity: <input type="number" name="quantity" required><br><br>
        Price: <input type="number" name="price" step="0.01" required><br><br>
        Expiry Date: <input type="date" name="expiry_date" required><br><br>
        <input type="submit" value="Add Medicine">
    </form>

    <br><a href="view.php">View Medicines</a>
</body>
</html>

<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Grocery Store</title>
    <style>
        .product { border: 1px solid #ccc; padding: 10px; width: 200px; margin: 10px; float: left; }
        img { width: 100px; height: 100px; }
        .cart-link { clear: both; display: block; margin-top: 30px; }
    </style>
</head>
<body>

<h2>🛒 Grocery Store</h2>

<?php
$result = $conn->query("SELECT * FROM products");

while($row = $result->fetch_assoc()) {
    echo "<div class='product'>
        <img src='images/{$row['image']}' alt='{$row['name']}'><br>
        <strong>{$row['name']}</strong><br>
        ₹{$row['price']}<br>
        <form action='add_to_cart.php' method='POST'>
            <input type='hidden' name='id' value='{$row['id']}'>
            <input type='submit' value='Add to Cart'>
        </form>
    </div>";
}
?>

<a href="cart.php" class="cart-link">🛒 View Cart</a>

</body>
</html>

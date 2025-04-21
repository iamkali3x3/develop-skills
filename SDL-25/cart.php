<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Your Cart</title>
</head>
<body>
<h2>🛒 Your Shopping Cart</h2>

<?php
if (!empty($_SESSION['cart'])) {
    $total = 0;
    echo "<ul>";
    foreach ($_SESSION['cart'] as $item) {
        echo "<li>{$item['name']} - ₹{$item['price']}</li>";
        $total += $item['price'];
    }
    echo "</ul>";
    echo "<strong>Total: ₹$total</strong>";
} else {
    echo "Your cart is empty.";
}
?>

<br><br>
<a href="index.php">⬅️ Back to Shop</a>

</body>
</html>

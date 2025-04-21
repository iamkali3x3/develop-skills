<?php
session_start();
include 'config.php';

$id = $_POST['id'];

// Fetch product
$sql = "SELECT * FROM products WHERE id=$id";
$result = $conn->query($sql);
$product = $result->fetch_assoc();

// Add to session cart
$_SESSION['cart'][] = $product;

header("Location: index.php");
exit();

<?php
session_start();
include "../Client/header.php";
include '../db_conn.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: Login.php");
    exit;
}
$userid=$_SESSION['user_id'];
$id = $_POST['p_id'];
$title = $_POST['title'];
$price = $_POST['price'];
$image = $_POST['image'];
$qty = $_POST['qty'];
$size = $_POST['size'];
$total = $qty * $price;

$qry = "INSERT INTO cart (user_id,p_id, images, title, size, price, qty, total, Name) VALUES ('$userid','$id', '$image', '$title', '$size', '$price', '$qty', '$total', '{$_SESSION['username']}')";

if (mysqli_query($con, $qry)) {
    echo '<script>alert("Product Added to Cart");
    window.location.href="../Client/test.php";
    </script>';
} else {
    echo '<script>alert("Not add in cart ' . mysqli_error($con) . '");</script>';
}
?>

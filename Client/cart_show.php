<?php
session_start();
include '../db_conn.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: Login.php");
    exit;
}

$user_id = $_SESSION['user_id'];

$qry = "SELECT * FROM cart WHERE user_id = '$user_id'";
$result = mysqli_query($con, $qry);

// Check if the query was successful and if it returned any rows
if (mysqli_num_rows($result) == 0) {
    echo "<h1>No items found in the cart.</h1>";
    echo "<a href='../client/test.php' style='padding:10px 20px; background-color:red; text-decoration:none; color:white;'>
        <img src='../img/cart.svg' class='cart_img'> Continue Shopping..
    </a>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation</title>
    <style type="text/css">
        * {
            margin: 0;
            padding: 0;
        }
        table {
            text-align: center;
            width: 100%;
            border-collapse: collapse;
        }
        th, tr, td {
            padding: 10px;
            margin: 10px;
            border: 1px solid black;
        }
        img {
            width: 100px;
            height: 100px;
        }
        a {
            text-decoration: none;
            border: 1px solid black;
            background: red;
            color: white;
            padding: 10px;
        }
        .BUY {
            background: blue;
        }
        .cart_img {
            height: 30px;
            width: 30px;
        }
    </style>
</head>
<body>
    
    <center><h3>Thank you for your order!</h3></center>
    <h3>Order Details</h3>
    <table>
        <tr>
            <th>Image</th>
            <th>Product Name</th>
            <th>Size</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total</th>
            <th>Action</th>
        </tr>
        <?php
        
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                <td><img src='../uploads/{$row['images']}' alt='Product Image'></td>
                <td>{$row['title']}</td>
                <td>{$row['size']}</td>
                <td>₹{$row['price']}</td>
                <td>{$row['qty']}</td>
                <td>₹{$row['total']}</td>
                <td>
                    <a href='cart_delete.php?table=cart&id={$row['p_id']}'>Delete</a>
                    <a href='check_out.php?table=cart&id={$row['p_id']}' class='BUY'>BUY NOW</a>
                </td>
            </tr>";
        }
        ?>
    </table>
    <br>
    <a href="../client/test.php" style="padding:10px 20px;">
        <img src="../img/cart.svg" class="cart_img"> Continue Shopping..
    </a>
</body>
</html>

<style type="text/css">
    *
    {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    form
    {
        text-align: center;
        height: auto;
        width: 45%;
        background: skyblue;
        margin-left: 2vw;
        margin-top: 10px;
    }

    h2
    {
        text-align: center;
        text-decoration: underline;
    }
    input[type=submit]
    {
        padding:10px 20px;
        font-size: 15px;
        margin-bottom: 10px;
        border: 1px solid black;
        color: white;
        background: blue;
        border-radius: 10px;
        opacity: 0.7;
    }
    input[type=submit]:hover
    {
        opacity: 1;
        box-shadow: 1px 1px 2px black;
    }
    table
    {
        text-align: center;
    }
</style>
<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: Login.php");
    exit;
}

include '../db_conn.php';
include "../Client/header.php";
$user_id = $_SESSION['user_id'];

$query = "SELECT * FROM cart WHERE user_id = '$user_id'";
$result = mysqli_query($con, $query);
?>

<center><h2>Conform Your Order</h2>
<center><ul><h1>Checkout</h1></center></ul>

<form action="cart1.php" method="post">
    <center><table border="1" cellpadding="10">
        <tr>
            <th>Image</th>
            <th>Title</th>
            <th>Size</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><img src="../uploads/<?= $row['images']; ?>" width="100" height="100"></td>
                <td><?= $row['title']; ?></td>
                <td><?= $row['size']; ?></td>
                <td>₹<?= $row['price']; ?></td>
                <td><?= $row['qty']; ?></td>
                <td>₹<?= $row['total']; ?></td>
            </tr>
        <?php } ?>
    </table></center>

    <h3>Shipping Address:</h3>
    <textarea name="address" required></textarea><br><br>

    <h3>Payment Method:</h3>
    <select name="payment_method" required>
        <option value="Credit Card">Credit Card</option>
        <option value="Debit Card">Debit Card</option>
        <option value="Cash on Delivery">Cash on Delivery</option>
    </select><br><br>

    <input type="submit" value="Place Order">
</form>

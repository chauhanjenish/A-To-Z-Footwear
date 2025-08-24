<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: Login.php");
    exit;
}

include '../Client/header.php';
include '../db_conn.php';

$title = $_GET['title'];
$price = $_GET['price'];
$image = $_GET['image'];
$p_id = $_GET['p_id'];
?>
<style>
    h1
   {
    text-align: center;
   } 
   table,td
    {
    border: 1px solid white;
    text-align: center;
    color: whitesmoke;
    background: skyblue;
   }
    td
    {
        padding: 20px;
    }
    form
    {
        text-align: center;
        background: skyblue;
        border: 1px solid black;
    }
    lable
    {
        font-size: 20px;
    }
    #qty:hover
    {
        opacity: 0.7;
    }
    #total
    {
        font-size: 20px;
        font-weight: 100;
    }
    .buy
    {
        padding:10px 25px;
        border-radius: 5px;
        background: blue;
        color: white;
        border: none;
    }
    .buy:hover
    {
        box-shadow: 1px 1px 1px 2px black;
        border: 1px solid black;
        border-radius: 5px;
    }
</style>
<h1>Add To Cart</h1>
<div class="cart-item">
    <center>
        <table cellpadding="30" cellspacing="20">
            <tr>
                <th>Image</th>
                <th>Title</th>
                <th>Price</th>
            </tr>
            <tr>
                <td><img src="../uploads/<?=$image; ?>" alt="Product Image" style="width: 100px; height: 100px;"></td>
                <td><h3><?= $title; ?></h3></td>
                <td><p>₹<?= $price; ?></p></td>
            </tr>
        </table>
    </center>
    <form action="cart1.php" method="post">
        <input type="hidden" name="title" value="<?=$title; ?>">
        <input type="hidden" name="price" value="<?= $price; ?>">
        <input type="hidden" name="image" value="<?= $image; ?>">
        <input type="hidden" name="p_id" value="<?= $p_id; ?>">

        <label for="qty">Quantity:</label>
        <input type="number" id="qty" name="qty" value="1" min="1" onchange="updateTotal()" required><br>

        <label for="size">Size:</label>
        <select name="size" required>
            <option value="S">S</option>
            <option value="M">M</option>
            <option value="L">L</option>
            <option value="XL">XL</option>
        </select>

        <p id="total">Total: ₹<?=$price;?></p>

        <button type="submit" name="buy_now" class="buy">ADD TO CART</button>
    </form>
</div>

<script>
function updateTotal() {
    let qty = document.getElementById('qty').value;
    let price = <?= $price; ?>;
    document.getElementById('total').innerText = "Total: ₹" + (qty * price);
}
</script>

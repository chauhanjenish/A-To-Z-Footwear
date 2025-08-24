<?php 
session_start();
include "../db_conn.php";

if (isset($_POST['submit'])) {
    $userid=$_SESSION['user_id'];
    $pimages = $_POST['images'];
    $pname = $_POST['title'];
    $size = $_POST['size'];
    $price = $_POST['price'];
    $qty = $_POST['qty'];
    $total = $_POST['total'];
    $method = $_POST['payment_method'];
    $address=$_POST['address'];

    $qry = "INSERT INTO check_out (user_id,images, p_name, size, price, qty,address, total, payment_method) 
            VALUES ('$userid','$pimages', '$pname', '$size', '$price', '$qty','$address', '$total', '$method')";
    $product="SELECT * FROM ()"
    $result = mysqli_query($con, $qry);

    if ($result) 
    {
        echo "<script>alert('Your Order Success placed');</script>";
        header("Location:../Client/cart_show.php");
        exit();
    } 
    else 
    {
        echo "<script>alert('Your Order Not placed');</script>";
        header("Location:../Client/check_out.php");
        exit();
    }
}
?>

<?php
session_start();
include '../db_conn.php';

$username = $_POST['username'];
$password = $_POST['password'];

$qry = "SELECT * FROM login WHERE Name='$username' AND Password='$password'";
$result = mysqli_query($con, $qry);

if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['user_id'] = $row['user_id'];
    $_SESSION['username'] = $row['Name'];

    echo "<script>alert('Login success');</script>";
    echo "<script>window.location = '../client/test.php';</script>";
} else {
    echo "<script>alert('Invalid username or password');</script>";
    echo "<script>window.location = '../client/test.php';</script>";
}
?>

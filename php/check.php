<?php 
include '../db_conn.php';
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$qry = "SELECT * FROM login WHERE Name='$username' AND Password='$password'";
$result = mysqli_query($con, $qry);

if (mysqli_num_rows($result) == 1) {
    // Set session variables
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    header("Location: ../Admin/AdminPanel.php");
    exit();
} else {
    echo "<div style='color:red;'>Invalid Username and password</div>";
    header("Location:../Admin/login.php");
    exit();
}
?>

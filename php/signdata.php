<?php
session_start();
include '../db_conn.php';

$name = $_POST['name'];
$password = $_POST['password'];
$address = $_POST['address'];
$number = $_POST['mobileno'];
$email = $_POST['email'];
$gender = $_POST['gender'];

if (strlen($number) !== 10) {
    echo "<script>alert('Mobile number must be exactly 10 digits.'); window.location.href='../Client/Signin.php';</script>";
    exit;
} elseif (strlen($password) < 6) {
    echo "<script>alert('Password must be at least 6 characters.'); window.location.href='../Client/Signin.php';</script>";
    exit;
} else {
    $qry = mysqli_query($con, "INSERT INTO signin(Name, Password, Address, Mobile_No, Email, Gender) VALUES('$name', '$password', '$address', '$number', '$email', '$gender')");
    $qry1 = mysqli_query($con, "INSERT INTO login(Name, Password) VALUES('$name', '$password')");

    if ($qry && $qry1) {
        $result = mysqli_query($con, "SELECT user_id FROM signin WHERE Name='$name' AND Email='$email' LIMIT 1");
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['username']=$row['Name'];
        }
        echo "<script>alert('Sign in Successfully'); window.location.href='../Client/test.php';</script>";
    } else {
        echo "<script>alert('Data not inserted.'); window.location.href='../Client/test.php';</script>";
    }
}
?>

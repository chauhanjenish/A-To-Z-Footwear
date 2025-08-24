<?php
session_start();
include "../db_conn.php";
$userid=$_SESSION['user_id'];
$name=$_POST['name'];
$email=$_POST['email'];
$mo=$_POST['mob'];

$qry="insert into contact(user_id,Name,Email,Mobile_No)values('$userid','$name','$email','$mo')";
$result=mysqli_query($con,$qry);
if (isset($result))
{
	echo "<script>alert('Thank You For Contact');</script>";
	header("Location:../client/test.php");

}
?>
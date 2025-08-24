<?php
session_start();
include '../db_conn.php';
if ($_POST['submit'])
{
	$userid=$_SESSION['user_id'];
	$name=$_POST['nm'];
	$mo=$_POST['no'];
	$email=$_POST['em'];
	$msg=$_POST['msg'];
	$star=$_POST['review'];

	$qry=mysqli_query($con,"INSERT INTO review_data(user_id,Name,Mobile_No,Email,Message,Review) VALUES ('$userid','$name','$mo','$email','$msg','$star')");
	if($qry)
	{
		echo "<script>alert('Thank You For Review Given');
		window.location.href='../Client/About.php';
		</script>";
	?>
	<?php }
	else
	{
		echo "Data Insert Not Success";
	}
}
else
{
	echo "Connection Problem";
}
?>
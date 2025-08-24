<?php 
session_start();
include 'AdminHeader.php';
include '../db_conn.php';
$qry="SELECT * FROM review_data";	
$result=mysqli_query($con,$qry);
if (isset($_SESSION['username']) && $_SESSION['password']) 
{
?>
<center><h2>Review</h2><br>
	<table border="1" cellspacing="10">
		<tr>
			<th>Name</th>
			<th>Mobile</th>
			<th>Email</th>
			<th>Message</th>
			<th>Star</th>
		</tr>
	
<?php
while ($row=mysqli_fetch_assoc($result))
{?>
		<tr>
			<td><?php echo $row['Name'];?></td>
			<td><?php echo $row['Mobile_No'];?></td>
			<td><?php echo $row['Email'];?></td>
			<td><?php echo $row['Message'];?></td>
			<td><?php echo $row['Review'];?></td>
		</tr>
</center>
<?php
}
}
else
{
	include 'login.php';
}
?>

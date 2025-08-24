<?php
session_start();
include "../db_conn.php";
$result=mysqli_query($con,"SELECT * FROM contact");
?>
<center>
	<u><h2>Contact Details..</h2></u>
	<table border="1" cellspacing="1" cellpadding="10">
		<tr style="border:none;">
			<th>Name</th>
			<th>Email</th>
			<th>Mobile_No</th>
			<th>Action</th>
		</tr>
		<?php 
		if (isset($_SESSION['username']) && isset($_SESSION['password'])) 
		{
			
				while ($row=mysqli_fetch_assoc($result))
				{
					echo 
					"<tr style='border:none;'>
						<td>{$row['Name']}</td>
						<td>{$row['Email']}</td>
						<td>{$row['Mobile_No']}</td>
						<td><a href='delc.php'?id={$row['id']} style='text-decoration:none; color:red; '>DELETE</a></td>
					</tr>";
				}
		}
			else
			{
				echo "<tr><td colspan='7'>No Contact Availble</td></tr>";
			}
		?>
	</table>
</center>
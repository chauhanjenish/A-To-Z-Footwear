<?php 
include 'AdminHeader.php';
include '../db_conn.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>A To Z Footwear</title>
</head>
<style type="text/css">
	table
	{
		width: 100%;
	}
	th,td
	{
		padding: 5px;
		border: 1px solid black;
	}
	img
	{
		height: 100px;
		width: 100px;
	}
	a
	{
		text-decoration: none;
	}
</style>
<body>
	<center><b><u><h2>All Product</h2></u></b>
		<b><u><h2>Men Product</center>
	<table>
		<tr>
			<th>Id</th><th>Image</th><th>Name</th><th>Size</th><th>Price</th><th>Qty</th><th>Total</th><th>Action</th>
		</tr>
		<?php
$qry = mysqli_query($con, "SELECT * FROM cart");

while ($row = mysqli_fetch_assoc($qry)) {
    echo "<tr>
            <td>{$row['p_id']}</td>
            <td><img src='../uploads/{$row['images']}' alt='Product Image'></td>
            <td>{$row['title']}</td>
            <td>{$row['size']}</td>
            <td>{$row['price']}</td>
            <td>{$row['qty']}</td>
            <td>{$row['total']}</td>
 			<td>           
                <a href='update1.php?table=male_product&id={$row['p_id']}'>Update</a>
                <a href='delete.php?table=male_product&id={$row['p_id']}'>Delete</a>
            </td>
          </tr>";
}
?>
</table>
<div style="color:white; text-align:center;background:black; font-size:20px;margin-top: 230px;">
 <h4>Made By: Chauhan Jenish, Kathiriya Dhruvit</h4><br>
            © 2025 Copyright: <h5>A To Z Footwear</h5>

</div>
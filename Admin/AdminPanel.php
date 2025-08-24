<?php 
session_start();
if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
    include 'AdminHeader.php';
    include '../db_conn.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>A To Z Footwear</title>
	<style type="text/css">
		table {
			width: 100%;
		}
		th, td {
			padding: 5px;
			border: 1px solid black;
		}
		img {
			height: 100px;
			width: 100px;
		}
		a {
			text-decoration: none;
		}
	</style>
</head>
<body>
	<center><b><u><h2>All Product</h2></u></b>
		<b><u><h2>Trending Product</h2></u></b>
	</center>
	<table>
		<tr>
			<th>Id</th><th>Name</th><th>Category</th><th>Description</th><th>Price</th><th>Images</th><th>Action</th>
		</tr>
		<?php
		$qry = mysqli_query($con, "SELECT * FROM treading_product");

		while ($row = mysqli_fetch_assoc($qry)) {
		    echo "<tr>
		            <td>{$row['p_id']}</td>
		            <td>{$row['title']}</td>
		            <td>{$row['category']}</td>
		            <td>{$row['description']}</td>
		            <td>{$row['price']}</td>
		            <td><img src='../uploads/{$row['images']}' alt='Product Image'></td>
		            <td>
		                <a href='update.php?table=treading_product&id={$row['p_id']}'>Update</a>
		                <a href='delete.php?table=treading_product&id={$row['p_id']}'>Delete</a>
		            </td>
		          </tr>";
		}
		?>
	</table>

	<center><b><u><h2>Men Product</h2></u></b></center>
	<table>
		<tr>
			<th>Id</th><th>Name</th><th>Category</th><th>Description</th><th>Price</th><th>Images</th><th>Action</th>
		</tr>
		<?php
		$qry = mysqli_query($con, "SELECT * FROM male_product");

		while ($row = mysqli_fetch_assoc($qry)) {
		    echo "<tr>
		            <td>{$row['p_id']}</td>
		            <td>{$row['title']}</td>
		            <td>{$row['category']}</td>
		            <td>{$row['description']}</td>
		            <td>{$row['price']}</td>
		            <td><img src='../uploads/{$row['images']}' alt='Product Image'></td>
		            <td>
		                <a href='update.php?table=male_product&id={$row['p_id']}'>Update</a>
		                <a href='delete.php?table=male_product&id={$row['p_id']}'>Delete</a>
		            </td>
		          </tr>";
		}
		?>
	</table>

	<center><b><u><h2>Female Product</h2></u></b></center>
	<table>
		<tr>
			<th>Id</th><th>Name</th><th>Category</th><th>Description</th><th>Price</th><th>Images</th><th>Action</th>
		</tr>
		<?php
		$qry = mysqli_query($con, "SELECT * FROM female_product");

		while ($row = mysqli_fetch_assoc($qry)) {
		    echo "<tr>
		            <td>{$row['p_id']}</td>
		            <td>{$row['title']}</td>
		            <td>{$row['category']}</td>
		            <td>{$row['description']}</td>
		            <td>{$row['price']}</td>
		            <td><img src='../uploads/{$row['images']}' alt='Product Image'></td>
		            <td>
		                <a href='update.php?table=female_product&id={$row['p_id']}'>Update</a>
		                <a href='delete.php?table=female_product&id={$row['p_id']}'>Delete</a>
		            </td>
		          </tr>";
		}
		?>
	</table>

	<center><b><u><h2>Kids Product</h2></u></b></center>
	<table>
		<tr>
			<th>Id</th><th>Name</th><th>Category</th><th>Description</th><th>Price</th><th>Images</th><th>Action</th>
		</tr>
		<?php
		$qry = mysqli_query($con, "SELECT * FROM kids_product");

		while ($row = mysqli_fetch_assoc($qry)) {
		    echo "<tr>
		            <td>{$row['p_id']}</td>
		            <td>{$row['title']}</td>
		            <td>{$row['category']}</td>
		            <td>{$row['description']}</td>
		            <td>{$row['price']}</td>
		            <td><img src='../uploads/{$row['images']}' alt='Product Image'></td>
		            <td>
		                <a href='update.php?table=kids_product&id={$row['p_id']}'>Update</a>
		                <a href='delete.php?table=kids_product&id={$row['p_id']}'>Delete</a>
		            </td>
		          </tr>";
		}
		?>
	</table>

	<div style="color:white; text-align:center;background:black; font-size:20px;">
		<h4>Made By: Chauhan Jenish, Kathiriya Dhruvit</h4><br>
        © 2025 Copyright: <h5>A To Z Footwear</h5>
	</div>
</body>
</html>

<?php
}
else 
{
    include 'login.php';
}
?>

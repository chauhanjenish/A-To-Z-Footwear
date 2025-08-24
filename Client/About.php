<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>A To Z Footwear</title>
</head>
<body>

			<!-- bootstrap link -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
		<!-- bootstrap link -->
		<!-- external css -->
		<link rel="stylesheet" type="text/css" href="../Css/about.css">
		<!-- external css -->


<div class="container">
	<nav class="navbar navbar-expand-lg fixed-top">
		  <a href="test.php"><h2 class="navbar-brand fs-3 mx-3">A To Z <span class="fs-5 text-dark">Footwear</span></h2></a>
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="test.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="contact.php">Contact</a>
      </li>
      <li class="nav-item active" id="menuactive">
        <a class="nav-link " href="About.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="product.php">Product</a>
      </li>
        </div>
      </li>
    </ul>
  </div>
</nav>

		<!-- page start -->
		<div>
			<img src="../img/about.jfif" class="banner">
		</div>
		<section>
		<div class="about">
		<p>
			Welcome To <strong>A TO Z Footwear </strong>Your one-step destination for stylish,comfortable,and affordable footwear.
					We are vision to bring fashion-forward shoes to every step you take.
		</p>
	</div>

		<div class="mission">

			<h2>Our Mission</h2>
			<p>
				To Provide quality footwear that combines style,comfort,and durability.
				Our mission is to serve every customer with a wide range of option,from casual wear to party styles-all under one roof.
			</p>
						<img src="../img/mission.jpg" width="100%" height="200px" class="mimg">
		</div>

		<div class="why">
			<img src="../img/why.webp" width="35%" height="30%">
			<h2>Why Choose Us?</h2>
		<ul>
			<li>Trendy and affordable footwear collection.</li>
			<li>Customer-first approach</li>
			<li>Easy and secure onlion shopping</li>
		</ul>
		</div>
		</section>
		<?php 
		session_start();
		if (!isset($_SESSION['user_id'])) 
		{
			echo "<script>alert('please Login');</script>";
			header("Location:Login.php");
		?>
		<?php }
		else{
		?>
		<div class="review">
			<table>
			<form method="post" action="../php/about_data.php">
				<h1>Review Now</h1>
				<tr>
					<td>
						<lable for="name"> Name:</lable>
						<input type="text" name="nm" placeholder="Enter Name" required><br>
					</td>
				</tr>
				<tr>
					<td>
						<lable for="mobile">Contact No:</lable>
						<input type="number" name="no" placeholder="Enter Mobile No" required><br>
					</td>
				</tr>
				<tr>
					<td>
						<lable for="email">Email:</lable>
						<input type="email" name="em" placeholder="Enter Email Address" required><br>
					</td>
				</tr>
				<tr>
					<td>
						<lable for="msg">Message:</lable>
						<input type="text" name="msg" placeholder="Enter Review Message" required><br>
					</td>
				</tr>
				<tr>
					<td>
						<select name="review" required>
					<option>Select Review in Star </option>
					<option value="1"><img src="../img/star-fill.svg" />⭐</option>
					<option value="2"><img src="../img/star-fill.svg" />⭐⭐</option>
					<option value="3"><img src="../img/star-fill.svg" />⭐⭐⭐</option>
					<option value="4"><img src="../img/star-fill.svg" />⭐⭐⭐⭐</option>
					<option value="5"><img src="../img/star-fill.svg" />⭐⭐⭐⭐⭐</option>
				</select><br><br>		
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" name="submit" value="submit" style="background: blue;color: white;border-radius: 5px; padding: 10px 30px; border-radius: 10px; font-weight: 100;">		
					</td>
				</tr>
				
			</form>
		</table>
		</div>
	<?php }?>
		<div class="logo">
			<center><p style="opacity: 0.8; margin-top: 15px; text-decoration: underline;">Available Brand:</p></center>
			<marquee direction="right">
				<img src="../img/nikelogo.jpg" width="100px" height="100px">&nbsp;&nbsp;&nbsp;&nbsp;
				<img src="../img/adidaslogo.jpg" width="100px" height="100px">&nbsp;&nbsp;&nbsp;&nbsp;
				<img src="../img/campuslogo.jpg" width="100px" height="100px">&nbsp;&nbsp;&nbsp;&nbsp;
				<img src="../img/batalogo.jpg" width="100px" height="100px">&nbsp;&nbsp;&nbsp;&nbsp;
				<img src="../img/pumalogo.jpg" width="100px" height="100px">&nbsp;&nbsp;&nbsp;&nbsp;
			</marquee>
		</div>
		<!-- page end -->
</div>


<!-- script -->
<script type="text/javascript">

	document.querySelector('.mission').addEventListener('mouseover',function (e){
		document.querySelector('.mission').style.width="40%";
		document.querySelector('.mission').style.height="400px";
		document.querySelector('.why').style.width="40%";
		document.querySelector('.mimg').style.display="block";
	})	

	document.querySelector('.mission').addEventListener('mouseout',function (e){
		document.querySelector('.mission').style.width="20%";
		document.querySelector('.mission').style.height="400px";
		document.querySelector('.why').style.width="20%";
		document.querySelector('.mimg').style.display="none";
	})
</script>
<!-- script -->
<?php include 'footer.php';?>
</body>
</html>
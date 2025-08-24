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
        <link rel="stylesheet" type="text/css" href="../Css/contact.css">
        <!-- external css -->


<div class="container">
   <nav class="navbar navbar-expand-lg fixed-top">
    <a href="Project/Home.php"><h2 class="navbar-brand fs-3 mx-3">A To Z <span class="fs-5 text-dark">Footwear</span></h2></a>
   <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="test.php">Home</a>
      </li>
      <li class="nav-item active" id="menuactive">
        <a class="nav-link" href="product.php">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
   </ul>
  </div>
</nav>
<!-- banner -->
<div class="banner">
  <img src="../img/contact.jpg" class="bannerimg">
</div>
<!-- banner end-->

<!-- containt -->
<div class="containt" id="containt">
  <h1 style="text-align:center;">Get In Touch</h1>

<!-- infocard -->
<div class="containtcard">
  <h1 class="info">Contact Information</h1>
  <p class="info">We'll Sell high-qulity Product</p>
  <br>
  <div class="cardinfo">
    <img src="../img/phone-fill.svg">
    <p>+91 2390897609</p>
    <img src="../img/envelope.svg">
    <p>&nbsp;&nbsp;info@atozfootwear.com</p>
    <img src="../img/geo-alt.svg">
    <p>&nbsp;&nbsp;Junagadh,india</p>
  </div>
</div>
</div>
<!-- infocard -->
<!-- contact form -->
<?php 
session_start();
if (!isset($_SESSION['user_id'])) 
{
  echo "<script>alert('Please Login');</script>";
  header("Location:Login.php");
  exit;
}else{
?>
<div class="contact_form" id="contact_form">
  <h2>Contact Form</h2>
  <form action="contact_data.php" method="post">
    <lable for="name"><img src="../img/person.svg"></lable>
    <input type="text" name="name" placeholder="Enter Your Name"><br>
    <label for="email"><img src="../img/envelope.svg"></label>
    <input type="email" name="email" placeholder="Enter Email"><br>
    <label for="mob"><img src="../img/phone-fill.svg"></label>
    <input type="number" name="mob" placeholder="Enter Contact Number"><br>
    <button id="btn"type="submit" class="btn">Submit</button>
  </form>
</div>
<?php }?>
<!-- contact form -->
</div>
<script>
  document.querySelector("#containt").addEventListener('mouseover',function(e){
  e.preventDefault();
  document.querySelector("#contact_form").style.display="block";
  document.querySelector("#contact_form").style.left="600px";
  document.querySelector("#containt").style.left="20px"
})
document.querySelector("#containt").addEventListener('click',function(e){
  e.preventDefault();
  document.querySelector("#contact_form").style.display="none";
  document.querySelector("#containt").style.left="350px";
})
</script>
<?php include 'footer.php';?>
</body>
</html>
<?php session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>A To Z Footwear</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../Css/header.css">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg fixed-top">
  <a href="test.php">
    <h2 class="navbar-brand fs-3 mx-3">A To Z <span class="fs-5 text-dark">Footwear</span></h2>
  </a>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active" id="menuactive">
        <a class="nav-link" href="test.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="product.php">Product</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="About.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cart_show.php">
          <img src="../img/cart.svg" class="cart">
        </a>
      </li>

      <?php if (isset($_SESSION['user_id'])) { ?>
        <!-- Logout -->
          <li class="nav-item">
              <a href="../php/sign_logout.php" class="btn btn-outline-danger text-dark">Logout</a>
          </li>
          <li class="nav-item">
              <span class="navbar-text mx-2"><?php echo $_SESSION['username'];?></span>
          </li> 
      <?php } else { ?>
      <!-- Login -->
          <li class="nav-item">
              <button type="button" class="btn btn-outline-success text-dark" 
                      onclick="window.location.href='Signin.php'">Signin</button>
          </li>
          <li class="nav-item">
              <button type="button" class="btn btn-outline-success text-dark" 
                      onclick="window.location.href='Login.php'">Login</button>
          </li>
      <?php } ?>
    </ul>
  </div>
</nav>

<!-- Slider -->
<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="1000">
      <img src="../img/1750680005824.jpg" class="d-block" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="../img/women.webp" class="d-block" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

</body>
</html>
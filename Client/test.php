<?php
$con=mysqli_connect("localhost","root","","atozfootwear");
if (!$con)
{
    echo "Connection Problem!!";
}
$qry="select * from treading_product";
$result=mysqli_query($con,$qry);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>A To Z Footware</title>
    <link rel="stylesheet" type="text/css" href="../Css/style.css">
</head>
<body>
	<!-- header -->
    <?php include 'header.php';?>
    <!-- header heading -->
                <h2 class="Item_Heading" id="head">TRENDING PRODUCT</h2>
                <div class="item">
                    <div class="item_1">
                </div>

                
<!-- admin side product -->
  <div class="products">
        <?php while($row = mysqli_fetch_assoc($result)) { ?>
            <div class="product">
                <img src="../uploads/<?= $row['images']; ?>" alt="Product image">
                <h3><?= $row['title']; ?></h3>
                <p><?= $row['description']; ?></p>
                <p>₹<?= $row['price']; ?></p>
                <a href="cart.php?p_id=<?= $row['p_id']; ?>&title=<?= $row['title']; ?>&price=<?= $row['price']; ?>&image=<?= $row['images']; ?>">
                    <button class="btn">ADD TO CART</button>
                </a>
            </div>
        <?php } ?>
    </div>

    </div>
    <div class="video">
        <video src="../img/slide/video1.mp4" autoplay>
    </div>
    <!-- footer start -->
    <?php include "./Footer.php" ; ?>
    <!-- footer end -->
	<script src="script.js"></script>
</body>
</html>
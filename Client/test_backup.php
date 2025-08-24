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

                    <!-- product _1 start -->
                     <!--  <div class="product_1">
                        <img src="../img/Athleisure/mens_2.webp" alt="product_1" class="Product_img">
                        <h4>Title</h4>
                        <p>Description</p>
                        <span>oldPrice</span><span>NewPrice</span><br>
                        <a href="cart.php" id="btn">ADD TO CART</a>
                    </div>
 -->
                    <!-- product _2 start -->
                    <!-- <div class="product_2">
                            <img src="../img/Athleisure/mens_3.webp" alt="product_1" class="Product_img">
                            <h4>Title</h4>
                            <p>Description</p>
                            <span>oldPrice</span><span>NewPrice</span><br>
                            <button class="btn" id="btn">ADD TO CART&nbsp;<img src="../img/cart.svg" width="20px" height="20px"></button>
                    </div>
                     -->
                    <!-- product_3 start -->
                   <!--   <div class="product_3">
                            <img src="../img/Athleisure/mens_4.webp" alt="product_2" class="Product_img">
                            <h4>Title</h4>
                            <p>Description</p>
                            <span>oldPrice</span><span>NewPrice</span><br>
                            <button class="btn" id="btn">ADD TO CART&nbsp;<img src="../img/cart.svg" width="20px" height="20px"></button>
                    </div> -->

                    <!-- product_4 start -->

                   <!--  <div class="product_4">
                            <img src="../img/Athleisure/mens_5.webp" alt="product_3" class="Product_img">
                            <h4>Title</h4>
                            <p>Description</p>
                            <span>oldPrice</span><span>NewPrice</span><br>
                            <button class="btn" id="btn">ADD TO CART&nbsp;<img src="../img/cart.svg" width="20px" height="20px"></button>
                    </div> -->
                </div>

                
<!-- admin side product -->
  <div class="products">
    <?php while($row = mysqli_fetch_assoc($result)) { ?>
        <div class="product">
            <img src="../uploads/<?= $row['images']; ?>" alt="Product image">
            <h3><?= $row['title']; ?></h3>
            <p><?= $row['description']; ?></p>
            <p>₹<?= $row['price']; ?></p>
            <a href="cart.php?p_id=<?= $row['p_id']; ?>&title=<?=($row['title']); ?>&price=<?= $row['price']; ?>&image=<?= $row['images']; ?>">
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
<?php
session_start();
include 'AdminHeader.php';
if (isset($_SESSION['username']) && isset($_SESSION['password'])){
?>
    <link rel="stylesheet" type="text/css" href="Add_product.css">
<body>
<div class="main">
    <form action="./Addproduct.php" method="post" enctype="multipart/form-data">
        <h2>Add Product</h2>
        <table>
            <tr>
                <td><label class="label">Product Title:</label></td>
                <td><input type="text" name="title" placeholder="Product Title" required><br></td>
            </tr>

            <tr>
                <td><label class="label">Product Category:</label></td>
                <td>
                    <select name="category" required>
                        <option value="">Select Category</option>
                        <option value="Trending">Trending Product</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="kids">Kids</option>
                    </select><br>
                </td>
            </tr>

            <tr>
                <td><label class="label">Sub-category:</label></td>
                <td>
                    <select name="category1" required>
                        <option value="">Select Product Sub-category</option>
                        <option value="Athleisure">Athleisure</option>
                        <option value="Casuals">Casuals</option>
                        <option value="Running">Running</option>
                        <option value="Sandal">Sandal</option>
                        <option value="Lofer">Lofer</option>
                        <option value="Sliper">Sliper</option>
                    </select><br>
                </td>
            </tr>

            <tr>
                <td><label class="label">Product Description:</label></td>
                <td><input type="text" name="Description" placeholder="Product Description" required><br></td>
            </tr>

            <tr>
                <td><label class="label">Product Price (INR):</label></td>
                <td><input type="number" name="Price" placeholder="Product Price in INR" required><br></td>
            </tr>

            <tr>
                <td><label class="label">Upload Product Image:</label></td>
                <td><input type="file" name="img" required><br></td>
            </tr>

            <tr>
                <td colspan="2" style="text-align: center;">
                    <button type="submit" class="uploadbtn">Upload</button>
                </td>
            </tr>
        </table>
    </form>
</div>
    <div style="color:white; text-align:center;background:black; font-size:20px;">
        <h4>Made By: Chauhan Jenish, Kathiriya Dhruvit</h4><br>
        © 2025 Copyright: <h5>A To Z Footwear</h5>
    </div>
</body>
<?php
}
else 
{
    header("Location: login.php");
    exit;
}
?>

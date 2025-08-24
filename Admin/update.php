<?php
include 'AdminHeader.php';
include '../db_conn.php';

$table = $_GET['table'];
$p_id = $_GET['id'];


$query = "SELECT * FROM $table WHERE p_id = $p_id";
$result = mysqli_query($con, $query);
$product = mysqli_fetch_assoc($result);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $title = $_POST['title'];
    $category = $_POST['category'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    if ($_FILES['img']['name']) {
        $photo_name = $_FILES['img']['name'];
        $temp_name = $_FILES['img']['tmp_name'];
        $upload_directory = "../uploads/";
        $upload_path = $upload_directory . $photo_name;
        move_uploaded_file($temp_name, $upload_path);
    } 

    $query = "UPDATE $table SET title='$title', category='$category', description='$description', price='$price', images='$photo_name' WHERE p_id='$p_id'";
    
    if (mysqli_query($con, $query)) {
        echo '<script>alert("Product updated successfully!");</script>';
        header("Location: AdminPanel.php");
    } else {
        echo "Error updating product: " ;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Product</title>
</head>
<style type="text/css">
    *
    {
        margin: 0;
        padding: 0;
        border-size:border-box;
    }
    html,body
    {
        height: 100%;
        width: 100%;
        background:url('../img/formbk.jfif');
    }
    .heading
    {
        text-align:center;
        color:white;
        text-decoration:underline;
        margin-bottom:2vh;
    }
    form
    {
        width:40%;
        position: relative;
        left:30vw;
        border-radius:20px;
        padding:10px 20px;
        height:auto;
        text-align:center;
        background-color: skyblue;
    }
    
</style>
<body>
    <h2 class="heading">Update Product</h2>
    <form method="POST" enctype="multipart/form-data">
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" value="<?= $product['title'] ?>"><br><br>

        <label for="category">Category:</label>
        <select name="category" id="category">
            <option value="male" <?= ($product['category'] == 'male') ? 'selected' : ''; ?>>Male</option>
            <option value="female" <?= ($product['category'] == 'female') ? 'selected' : ''; ?>>Female</option>
            <option value="kids" <?= ($product['category'] == 'kids') ? 'selected' : ''; ?>>Kids</option>
        </select><br><br>

        <label for="description">Description:</label>
        <textarea name="description" id="description"><?= $product['description'] ?></textarea><br><br>

        <label for="price">Price:</label>
        <input type="text" name="price" id="price" value="<?= $product['price'] ?>"><br><br>

        <label for="img">Image:</label>
        <input type="file" name="img" id="img"><br><br>

        <input type="submit" value="Update Product">
    </form>
</body>
</html>

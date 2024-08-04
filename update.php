<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE</title>
    <link rel="stylesheet" href="add_prdct.css">
</head>
<body>
    <div class="container">
        <div class="form-container">
            <h2>Edite products </h2>
            <form action="insert.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Product Name</label>
                    <input type="text" id="name" name="name" placeholder="Enter product name" required>
                </div>
                <div class="form-group">
                    <label for="id">Product id</label>
                    <input type="text" id="id" name="id" placeholder="Enter product id" required>
                </div>
                <div class="form-group">
                    <label for="price">Product Price</label>
                    <input type="text" id="price" name="price" placeholder="Enter product price" required>
                </div>
                <div class="form-group">
                    <input type="file" id="file" name="image" class="file-input">
                    <label for="file" class="file-label">update Image</label>
                </div>
                <button type="submit" name="upload" class="submit-btn">update It</button>
                <br><br>
            </form>
            <p class="footer">Developed by yurei.devs@gmail.com</p>
        </div>
    </div>
</body>
</html>


<?php

    include('config.php');
    $ID  = $_GET['id'];

    mysqli_query($connect , "DELETE FROM products WHERE id=$ID");
    header('location: add_prdct.php');



?>
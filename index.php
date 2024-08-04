<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Shop</title>
    <link rel="stylesheet" href="add_prdct.css">
</head>
<body>
    <div class="container">
        <div class="form-container">
            <h2>Online Shop</h2>
            <img src="logo.png" alt="Shop Logo" class="logo"  >
            <form action="insert.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Product Name</label>
                    <input type="text" id="name" name="name" placeholder="Enter product name" required>
                </div>
                <div class="form-group">
                    <label for="price">Product Price</label>
                    <input type="text" id="price" name="price" placeholder="Enter product price" required>
                </div>
                <div class="form-group">
                    <input type="file" id="file" name="image" class="file-input">
                    <label for="file" class="file-label">Add Image</label>
                </div>
                <button type="submit" name="upload" class="submit-btn">Upload It</button>
                <br><br>
                <a href="products.php" class="view-products">Show All Products</a>
            </form>
            <p class="footer">Developed by yurei.devs@gmail.com</p>
        </div>
    </div>
</body>
</html>

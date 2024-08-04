<?php
include('config.php');

if (isset($_POST['upload'])) {
    $Name = $_POST['name'];
    $Price = $_POST['price'];
    $Image = $_FILES['image'];

    // Sanitize input values
    $Name = mysqli_real_escape_string($connect, $Name);
    $Price = mysqli_real_escape_string($connect, $Price);

    // Handle image upload
    $image_location = $_FILES['image']['tmp_name'];
    $image_name = $_FILES['image']['name'];
    $image_up = "imgs/" . basename($image_name);

    // Prepare SQL statement to prevent SQL injection
    $stmt = $connect->prepare("INSERT INTO products (name, price, imgsrc) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $Name, $Price, $image_up);

    if ($stmt->execute()) {
        if (move_uploaded_file($image_location, $image_up)) {
            echo "<script>alert('Image uploaded successfully');</script>";
        } else {
            echo "<script>alert('Error: Image did not upload');</script>";
        }
    } else {
        echo "<script>alert('Error: Could not insert data');</script>";
    }

    // Close the prepared statement
    $stmt->close();

    // Redirect to add_prdct.php
    header("Location: add_prdct.php");
    exit();
}
?>

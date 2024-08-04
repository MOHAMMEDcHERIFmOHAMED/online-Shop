<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>products</title>
    <link rel="stylesheet" href="add_prdct.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>

        .card img{
            height:350px;
            width:350px;
        }
    </style>
</head>
<body>
   <center>
       <h3> ALL PRODUCTS </h3>
   </center>
<?php
    include('config.php');
    $result = mysqli_query($connect , "SELECT * FROM products");
    
    while($row = mysqli_fetch_array($result)){
        echo"
            <center>
                <main>
                    <div class='card' style='width: 18rem;'>
                      <img src='$row[imgsrc]' class='card-img-top' alt='NOT FOUND'>
                      <div class='card-body'>
                          <h5 class='card-title'>$row[name]</h5>
                          <p class='card-text'>$row[price]</p>
                          <a href='delete.php> id=$row[id]' class='btn btn-danger'>remove product</a>
                          <a href='update.php> id=$row[id]' class='btn btn-primary'>Edit product</a>
                      </div>
                    <div>
                </main>
            </center>
        ";
    }







?>
   
</body>
</html>

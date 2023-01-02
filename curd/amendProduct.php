<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel='stylesheet' href='curd.css'>
</head>
<body>


<?php

    if(isset($_GET['id']) && isset($_GET['action']))
    {
        $eid = $_GET['id'];
        $sql = "SELECT * FROM products WHERE ProductID=$eid";  
       
        include("connection.php");

        $qry = mysqli_query($conn,$sql) or die(mysqli_error($conn));

        // extracting the data and changing the data
        while($rows = mysqli_fetch_assoc($qry)){
            $eid = $rows['ProductID'];
            $productName = $rows['ProductName'];
            $productPrice = $rows['ProductPrice'];
            $imageName = $rows['ProductImageName'];
        }

        echo "<div class='container'>";
        echo "<div class='form'>";
        echo "<h2>Edit Product $productName</h2>";
        
        echo "<form method='POST' action='updateProduct.php' >";
        
        echo "<input type='hidden' name='uid' value='$eid' />";

        echo "<div class='form-data'>";
        echo "<label>Product Name </label>";
        echo "<input type='text' name='pname' value='$productName' ><br>";
        echo "</div>";

        echo "<div class='form-data'>";
        echo "<label>Price </label>";
        echo "<input type='text' name='pprice' value='$productPrice' ><br>";
        echo "</div>";

        echo "<div class='form-data'>";
        echo "<label>Image Name </label>";
        echo "<input type='text' name='imageName' value='$imageName' ><br>";
        echo "</div>";

        echo "<div class='btns'>";
        echo "<input type='submit' name='update' value='Update...' />";
        echo "<input type='submit' name='back' value='Back' >";
        echo "</div>";

        echo "</form>";
        echo "</div>";
        echo "</div>";
    }
    else{
        header('location:displayProducts.php');
    }
?>

</body>
</html>

<?php
    include('../../init.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel='stylesheet' href='../style5.css' >   
</head>
<body>

<?php

if(isset($_GET['id']) && isset($_GET['action'])){
    $eid = $_GET['id'];

    $sql = "SELECT * FROM items WHERE ID=$eid";

    $qry = mysqli_query($connection,$sql) or die(mysqli_error($connection));

    while($row = mysqli_fetch_assoc($qry)){
        $eid = $row['ID'];
        $ePname = $row['Name'];
        $ePrice = $row['Price'];
        $eCategory = $row['Category'];
        $eImage = $row['Image'];
    }

    echo "<div class='container'>";
    
    echo "<div class='edit-form'>";

    echo "<form method='POST' action='updateProduct.php' enctype='multipart/form-data'>";

    echo "<h3>Edit Product <span>$ePname</span></h3>";
    
    echo "<input type='hidden' name='uid' value='$eid'>";

    echo "<div class='form-data'>";
    echo "<label>Product Name</label>";
    echo "<input type='text' name='name' value='$ePname' />";
    echo "</div>";

    echo "<div class='form-data'>";
    echo "<label>Price: </label>";
    echo "<input type='text' name='price' value='$ePrice'/>";
     echo "</div>";

    echo "<div class='form-data'>";
    echo "<label>Category : </label>";
    echo "<input type='text' name='category' value='$eCategory' />";
    
    echo "</div>";

    // <!-- Image uploading  -->
    echo "<input type='hidden' name='previous' value='$eImage' />";

    echo "<div class='form-data'>";
    echo "<label>Image : </label>";
    echo "<input type='file' name='image' value='$eImage' class='imagefile'/>";
    echo "</div>";

    echo "<div class='btns'>";
    echo "<input type='submit' name='editId' value='Update'>";
    echo "<input type='submit' name='cancle' value='Back'>";
    echo "</div>";

    echo "</form>";

    echo "</div>";
    echo "</div>";
}
else{
    header("location:displayProduct.php");
}

?>

</body>
</html>

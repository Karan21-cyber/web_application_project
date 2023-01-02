<?php

    if(isset($_POST['submit'])){

        $pname = $_POST['name'];
        $pprice = (float)$_POST['price'];
        $uimage  = strtolower($_POST['upload']);
        $price = number_format($pprice,2);

        $sql = "INSERT INTO products (ProductName,ProductPrice,ProductImageName)
                VALUE('$pname','$price','$uimage')";
            include("connection.php");
            
        $qry = mysqli_query($conn,$sql) or die(mysqli_error($conn));
            if($qry){
                header("location:curd.php");
            }
    }
    if(isset($_POST['back'])){
        header('location:../activities.php');
    }

?>
<?php

    if(isset($_POST['update'])){
        $pid = $_POST['uid'];
        $ppname = $_POST['pname'];
        $pprice = (float)$_POST['pprice'];
        $pImage = strtolower($_POST['imageName']);

        $price = number_format($pprice,2);


        $sql = "UPDATE products SET ProductName='$ppname',ProductPrice='$price',ProductImageName='$pImage' WHERE ProductID='$pid'";

        include('connection.php');

        $qry = mysqli_query($conn,$sql) or die(mysqli_error($conn));
        if($qry){
            header('location:curd.php');
        }
    }

    if(isset($_POST['back'])){
        header("location:curd.php");
    }

?>
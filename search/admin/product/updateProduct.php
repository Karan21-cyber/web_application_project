<?php
    include('../../init.php');

    if(isset($_POST['editId'])){
        $uid = $_POST['uid'];
        $name = $_POST['name'];
        $price = $_POST['price'];
        $category = $_POST['category'];
        $previous = $_POST['previous'];
        $image = $_FILES["image"]["name"];
    
        $utmpname=$_FILES['image']['tmp_name'];
        $ulocation ="uploads/".$image;

        if(!empty($image)){
            $sql = "UPDATE items set Name='$name',Price='$price', Category='$category',
            Image='$image' WHERE ID = $uid ";
            
            $qry = mysqli_query($connection,$sql) or die(mysqli_error($connection));

            if(unlink("uploads/".$previous)){
                if(move_uploaded_file($utmpname,$ulocation)){
                    if($qry){
                        header('location:displayProduct.php');
                    }
                }
            }  
        }
        else{
            $sql = "UPDATE items set Name='$name',Price='$price', Category='$category',
            Image='$previous' WHERE ID = $uid ";

            $qry = mysqli_query($connection,$sql) or die(mysqli_error($connection));

            if($qry){
                    header('location:displayProduct.php');
                }
        }
    }

    if(isset($_POST['cancle'])){
        header('location:displayProduct.php');
    }

?>
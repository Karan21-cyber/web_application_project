<?php

    if(isset($_GET['id']) &&  isset($_GET['action'])){
        $did = $_GET['id'];

        $sql = "DELETE FROM products WHERE ProductID = '$did'";
        include_once('connection.php');
        
        $qry = mysqli_query($conn,$sql) or die(mysqli_error($conn));

        if($qry){
            header("location:curd.php");
        }

    }

?>
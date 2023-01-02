<?php
    include_once("../../init.php");

    if(isset($_GET['id']) && isset($_GET['action'])){
        $delid = $_GET['id'];

        $sql = "DELETE FROM items WHERE ID=$delid";

        $qry = mysqli_query($connection, $sql) or die(mysqli_error($connection));

        if($qry){
            header("location:displayProduct.php");
        }

    }
?>
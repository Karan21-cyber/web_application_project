<?php
    include_once('../../init.php');
    //checking id and action is set or not
    if(isset($_GET['id']) && isset($_GET['action'])){
        
        $delid = $_GET['id'];

        // SQL Statement for Delete
    
        $sql = "DELETE FROM  user WHERE id=$delid";
        
        $qry = mysqli_query($connection,$sql) or die(mysqli_error($connection));
        if($qry){
            header("location:displayUser.php");
        }
    }

?>
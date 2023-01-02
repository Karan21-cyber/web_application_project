<?php
    include('../../init.php');
    
    if(isset($_POST['edituser'])){
        $uid = $_POST['uid'];
        $user = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $isValidity = $_POST['isValidity'];
        $role  = $_POST['role'];
        
        if(!empty($password))
        {
            $sql = "UPDATE user set username='$user',password=md5('$password'), email='$email',
            role='$role', isValidity = '$isValidity' WHERE id = $uid ";
        }
        else{
            $sql = "UPDATE user set username='$user',password=md5('$password'), email='$email',
            role='$role', isValidity = '$isValidity' WHERE id = $uid ";
        }
        
        
  
      $qry = mysqli_query($connection,$sql) or die(mysqli_error($connection));
        
        if($qry){
            
            header("location:displayUser.php");
            
        }
    }

    if(isset($_POST['cancle'])){
        header("location:displayUser.php");
    }

?>
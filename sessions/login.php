<?php
    include('init.php');

    if(isset($_POST['subLogin'])){
        $user = $_POST['txtUser'];
        $password = $_POST['txtPass'];
        
        $query = "SELECT *  FROM users WHERE username='$user' AND password = '$password'";
        
        $result = mysqli_query($connection,$query) or die(mysqli_error($connection));

        if($row = mysqli_fetch_assoc($result)){
            // echo 'you are recognised';
            $_SESSION['user'] = $row['username'];
            header('location:sessions.php');
        }
        else{
            // echo 'you are not recognised';
            $_SESSION['error']= 'User not recognised';
            header('location:sessions.php');
        }
    }
?>
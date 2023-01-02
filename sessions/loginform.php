<?php
    include('init.php');

    if($_SESSION['user']){
        echo "Welcome to the session <br>" . $_SESSION['user'] . "<br>";
        echo "<a href='logout.php'>logout</a>   |   <a href='protected.php'>protected.php</a>";
    }
    else{
        include('loginform.php');
        echo $_SESSION['error'];
    }
?>
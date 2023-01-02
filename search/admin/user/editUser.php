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
    <link rel="stylesheet" href="../style5.css">
</head>
<body>
    
<?php

    //checking is and action is set or not
    if(isset($_GET['id']) && isset($_GET['action']))
    {
        $editid=$_GET['id'];
        
        $sql = "SELECT * from user where id=$editid";
       
        
        $qry=mysqli_query($connection, $sql) or die(mysqli_error($connection));
        
        while($row=mysqli_fetch_assoc($qry))
        {
            $eid=$row['id'];
            $eusername=$row['username'];
            $eemail=$row['email'];
            $erole=$row['role'];
            $eisValidity=$row['isValidity'];
        }
        //creating edit form
        echo "<div class='container'>";
        
        echo "<div class='edit-form'>";
        echo "<form method=post action='updateUser.php'>";

        echo "<h3>Edit <span>$eusername</span></h3>";

        echo "<input type='hidden' name='uid' value='$eid'><br>";

        echo "<div class='form-data'>";
        echo "<label>Username </label>";
        echo "<input type='text' name='username' value='$eusername'>";
        echo "</div>";

        echo "<div class='form-data'>";
        echo "<label>Password </label>";
        echo "<input type='password' name='password'>";
        echo "</div>";

        echo "<div class='form-data'>";
        echo "<label>Email </label>";
        echo "<input type='email' name='email' value='$eemail'>";
        echo "</div>";

        echo "<div class='form-data'>";
        echo "<label>Role </label>";
        echo "<input type='text' name='role' value='$erole'>";
        echo "</div>";
        
        echo "<div class='form-data'>";
        echo "<label>isVerified </label>";
        echo "<input type='text' name='isValidity' value='$eisValidity'>";
        echo "</div>";
        
        echo "<div class='btns'>";
        echo "<input type='submit' name='edituser' value='Update'> ";
        echo "<input type='submit' name='cancle' value='Back' class='cancle-btn'> ";
        echo "</div>";

        echo "</form>";

        echo "</div>";
        echo "</div>";
    }
    else
    {
        header("location:displayUser.php");
    }
?>

</body>
</html>
<?php

if(isset($_POST['submit'])){
    $fname = $_POST['firstName'];
    $sname = $_POST['surname'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $gender = strtoupper($_POST['gender']);
    $age = (int)$_POST['age'];
    
  if(filter_var($email,FILTER_VALIDATE_EMAIL)){
        // inserting the data in database
        if($age > 0 || $age < 120){
            $sql = "INSERT INTO customer (FirstName,LastName,Email,Password,Gender,Age) 
                VALUE('$fname','$sname','$email','$password','$gender','$age')";

            require("connection.php");

            $qry = mysqli_query($connection,$sql) or die(mysqli_error($connection));
            if($qry){
                echo "Data inserted Successfully";
                header("location:mysql.php");
            }
            else{
                echo "Unable to connect to database";
            }

        }else{
            echo "Invalid age";                }
    }
    else{
        echo "Invalid email";
    }
}

?>
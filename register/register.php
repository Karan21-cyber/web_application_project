<?php
    // Assigning variables 
    $errname = $erremail = $errpassword = $errage =$errCpassword =  $errchecked = '';
    
    if(isset($_POST['sublogin'])){
        // checking the fields are empty or not while posting 
        if(empty($_POST['Uname'])){
            $errname = "Name is required";
        }

        if(empty($_POST['Uemail'])){
            $erremail = "Email is required";
        }

        if(empty($_POST['Upassword'])){
            $errpassword = "Password is required";
        }

        if(empty($_POST['cpassword'])){
            $errCpassword = "Confirm Password is required";
        }

        if(empty($_POST['age'])){
            $errage = "Age is required";
        }

        if(empty($_POST['confirm'])){
            $errchecked = "Term and Conditions is required";
        }

        else {
            $uname =  trim($_POST['Uname']);
            $uemail = trim($_POST['Uemail']);
            $upassword = $_POST['Upassword'];
            $cpassword = $_POST['cpassword'];
            $uage = $_POST['age'];
            $confirm = $_POST['confirm'];
           
            $email = filter_var($uemail, FILTER_SANITIZE_EMAIL);
            $pattern ='/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{7,12}$/';
            
            if(!filter_var($email,FILTER_VALIDATE_EMAIL))
            {
                $erremail = "Email you entered is invalid";
            }
            
            if($upassword == $cpassword)
            {
                if(preg_match($pattern,$upassword) == false){
                    $errpassword = 'Password is not strong!';
                }
                else{
                    $password = md5($upassword);
                    $sql = "INSERT INTO user (username,email,password,age)
                    VALUES('$uname','$email','$password','$uage')";
            
                    include('init.php');
            
                    $qry = mysqli_query($connection,$sql) or die(mysqli_error($connection));
            
                    if($qry){
                        // echo "Data inserted successfully";
                        header("location:../search/login.php");
                    }
                }    
            }  
            else{
                $errCpassword = 'Password Doesnot match';
            }   
        } 
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">  
</head>
<body>

<header>
        <a href="../watindex.html"><img src="../logo.png" class="logo"></a>
        <nav class="navbar">
            <a href="../activities.php">Activities</a>
            <a href="register.php">Register</a>
            <a href="../search/login.php">Search</a>
        </nav>
</header>

<div class='container'>
    <form method='POST' action=''>
        <h1 class='title'>Registration Form</h1>

        <div class='form-data'>
            <label>UserName <span class='error'> * <?php echo $errname ; ?> </span> </label>
            <input type='text' name='Uname' />
        </div>
        
        <div class='form-data'>
            <label>Email  <span class='error'> * <?php echo $erremail ;  ?> </span> </label>
            <input type='email' name='Uemail' />
        </div>

        <div class='form-data'>
            <label>Password <span class='error'> * <?php echo $errpassword ; ?> </span> </label>
            <input type='password' name='Upassword' />
        </div>

        <div class='form-data'>
            <label>Confirm Password <span class='error'> * <?php echo $errCpassword ; ?> </span> </label>
            <input type='password' name='cpassword' />
        </div>
        
        <div class='form-data'>
            <label>Age <span class='error'> * <?php echo $errage ; ?> </span></label>
            <select name='age' > 
                <option value='' >select Age </option>
                <option value='0 - 15'>0 to 15</option>
                <option value='16 - 25'>16 to 25</option>
                <option value='26 - 45'>26 to 45</option>
                <option value='46 - 59'>46 to 59</option>
                <option value='60 - above'>60 to above</option>
            </select>
        </div>      
           
        <input type='checkbox' name='confirm' class='check-box'/> <label class='condition'>Terms and Conditions</label> 
        <span class='error'> * <?php echo $errchecked ; ?> </span>
        
        <div class='login'>
            <span >Already have an account <a href="../search/login.php">Login.</a></span>
        </div>

        <div class='btns'>
            <input type='submit' name='sublogin' value='Register' />
            <input type='reset' name='reset' value='Clear' />
        </div>
    </form>
</div>    

</body>
</html>
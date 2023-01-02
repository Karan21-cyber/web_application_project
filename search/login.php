<?php
    include('init.php');

    $errname = $errpassword = $errrole = '';
    
    if(isset($_POST['subLogin'])){
        if(empty($_POST['uname'])){
            $errname ='User name is required';
        }
        if(empty($_POST['upassword'])){
            $errpassword = 'Password is required';
        }
        if(empty($_POST['role'])){
            $errrole = 'Role is required';
        }

        else{
            $username = trim($_POST['uname']);
            $password = md5($_POST['upassword']);
            $roles = $_POST['role'];
            $remember = $_POST['remember'];

            // setting the cookie if remember is clicked 
            if(!empty($remember)){
                setcookie("username", $username , time() + 60*60*24*15 , "/");
                setcookie("password", $_POST['upassword'] , time() + 60*60*24*15 , "/");
                setcookie("role", $roles , time() + 60*60*24*15 , "/");
            }

            $sql = "SELECT * FROM user WHERE username = '$username' AND password ='$password' AND role = '$roles' ";
        
            $qry = mysqli_query($connection,$sql) or die(mysqli_error($connection));

            if($data = mysqli_fetch_assoc($qry)){

                $_SESSION['username'] = $data['username'];
                $_SESSION['stime'] = date("Ymdhisu");  // capturing the time when session start
                if($roles == 'admin'){
                    $_SESSION['role'] = $data['role'];
                    header('location:admin/dashboard.php');
                }
                else{
                    $_SESSION['role'] = $data['role'];
                    header('location:user/dashboard.php');
                }
            }
            else{
                $_SESSION['error'] = 'User not recognised';
                header('location:login.php');
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
    <title>login</title>
    <link rel="stylesheet" href="stylees.css">
</head>
<body>
<header>
        <a href="../watindex.html"><img src="../logo.png" class="logo"></a>
        <nav class="navbar">
            <a href="../activities.php">Activities</a>
            <a href="../register/register.php">Register</a>
            <a href="login.php">Search</a>
        </nav>
</header>

<div class='container'>
    <form method='POST' action=''>
        <h1>Login Form</h1>
       
        <div class='form-data'>
            <label>UserName <span class='error'> * <?php echo $errname ; ?> </span></label>
            <input type='text' name='uname' />
        </div>

        <div class='form-data'>
            <label>Password   <span class='error'> * <?php echo $errpassword ; ?> </span> </label>
            <input type='password' name='upassword' />
        </div>
        
        
       <div class='form-data'>
            <label> Role  <span class='error'> * <?php echo $errrole ; ?> </span></label>
            <select name='role' >
                    <option value=''>Select Role</option>
                    <option value='user' >User</option>
                    <option value='admin' >Admin</option>
            </select>
        </div>

        <input type='checkbox' name='remember' class='check-box' /> <label class='condition'>Remember me </label>
        
        <div class='register'>
            <span>Didn't have an account <a href="../register/register.php">Register.</a></span>
        </div>

        <input type='submit' name='subLogin' value='Login'  class='btns'/>
        
    </form>
</div>

</body>
</html>
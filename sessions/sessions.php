<?php
    include('init.php');

    if(isset($_SESSION['user']))
    {  
        header('location:loginform.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h3>Login Session</h3>
<form method="post" action="./login.php">
    <input type="text" name="txtUser" value=''/>
    <input type="password" name="txtPass" />
    <input type="submit" name="subLogin" value="submit" />
</form>

</body>
</html>
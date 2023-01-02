<?php
    include("../init.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">   
</head>
<body>
    
<nav class="nav-bar">
    <a href="dashboard.php"><img src="admin.png" width='50px' height='50px'/></a>

    <div class="nav-list">
        <a href="dashboard.php">Home</a>
        <a href="user/displayUser.php">Users</a>
        <a href="product/displayProduct.php">Products</a>
        <a href="product/product.php">Add Products</a>
        <a href="logout.php">LogOut</a>
    <div>
</nav>

<div class='title'>
    <h1>Welcome to Admin Dashboard!</h1>
</div>


</body>
</html>
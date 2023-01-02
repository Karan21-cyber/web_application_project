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
    <link rel='stylesheet' href='displayuser.css' >   
</head>
<body>
    
<nav class="nav-bar">
    <a href="../dashboard.php"><img src="../admin.png" width='50px' height='50px'/></a>

    <div class="nav-list">
        <a href="../dashboard.php">Home</a>
        <a href="displayUser.php">Users</a>
        <a href="../product/displayProduct.php">Products</a>
        <a href="../product/product.php">Add Products</a>
        <a href="../logout.php">LogOut</a>
    <div>
</nav>

    <h2 class='header'>Welcome to User List</h2>
    <?php
        //writing the sql query
        $sql = "SELECT * FROM user"; // selecting the all data from the user

        // exeucuting the query

        $qry = mysqli_query($connection,$sql) or die(mysqli_error($connection));

        //counting tehe recods
        $count = mysqli_num_rows($qry);

        //printing the records

        echo "<div class='container'>";
        echo "<table>";
        echo "<tr>
        <th>Id</th>
        <th>Username</th>
        <th>Password</th>
        <th>Email</th>
        <th>Role</th>
        <th>IsVerified</th>
        <th>Edit</th>
        <th>Delete</th>
        </tr>";
        while($row = mysqli_fetch_array($qry)){
            if($row['role'] == 'user'){
                $id = $row['id'];
                echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['username']."</td>";
                echo "<td>".$row['password'] ."</td>";
                echo "<td>".$row['email'] ."</td>";
                echo "<td>".$row['role'] ."</td>";
                echo "<td>".$row['isValidity'] ."</td>";
                echo "<td>". "<a href=editUser.php?id=$id&action=edit> Edit </a>"."</td>";
                echo "<td>". "<a href=deleteUser.php?id=$id&action=delete> Delete</a>"."</td>";
                echo "</tr>";
            }
        }
        echo "</table>";

        echo "</div>";
    ?>
</body>
</html>
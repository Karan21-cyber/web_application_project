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
    <link rel='stylesheet' href='displayproducts.css' >
   
</head>
<body>
    
<nav class="nav-bar">
    <a href="../dashboard.php"><img src="../admin.png" width='50px' height='50px'/></a>

    <div class="nav-list">
        <a href="../dashboard.php">Home</a>
        <a href="../user/displayUser.php">Users</a>
        <a href="displayProduct.php">Products</a>
        <a href="product.php">Add Products</a>
        <a href="../logout.php">LogOut</a>
    <div>
</nav>

    <h2 class='header'>Welcome to Product List</h2>
    <?php
        //writing the sql query
        $sql = "SELECT * FROM items"; // selecting the all data from the user

        // exeucuting the query

        $qry = mysqli_query($connection,$sql) or die(mysqli_error($connection));

        //counting tehe recods
        $count = mysqli_num_rows($qry);

        echo "<div class='container'>";
            while($row = mysqli_fetch_array($qry)){
                $id = $row['ID'];
            
                echo "<div class='card'>";
                    echo "<div class='card-info'>";
                        echo "<div class='card-details'>";
                            echo "<label>ID :  ".$row['ID']."</label>";
                            echo "<label>Name:  ".$row['Name']."</label>";
                            echo "<label>Category:  ".$row['Category'] ."</label>";
                            echo "<label>Price:  <span>".$row['Price'] ."<span></label>";
                        echo "</div>";
                        
                        echo "<div class='image'>";
                            echo "<img src=\"uploads/".$row['Image']."\" alt=".$row['Name']." >";
                        echo "</div>";
                    echo "</div>"; 

                    echo "<div class='btns'>";
                        echo "<a href='editProduct.php?id=$id&action=edit'  class='btn' > Edit </a>";
                        echo "<a href='deleteProduct.php?id=$id&action=delete' class='btn'> Delete</a>";
                    echo "</div>";
            
                echo "</div>";
            }
        echo "</div>";

    ?>
</body>
</html>
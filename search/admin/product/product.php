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
    <link rel='stylesheet' href="products.css">  
</head>
<body>

<?php

    $errname = $errprice = $errcategory = $errimage = '';
    
    if(isset($_POST['subproduct']))
    {
        if(empty($_POST['name'])){
            $errname ="Name is required";
        }
        
        if(empty($_POST['price'])){
            $errprice ="Price is required";
        }
        
        if(empty($_POST['category'])){
            $errcategory ="Category is required";
        }
        
        if(empty($_FILES["image"]["name"])){
            $errimage ="Image is required";
        }
        
        else{
            $name = $_POST['name'];
            $price = $_POST['price'];
            $category = $_POST['category'];
            $image = $_FILES["image"]["name"];

            $utype = $_FILES['image']['type'];
            $utmpname = $_FILES['image']['tmp_name'];
            $usize = $_FILES['image']['size'];
            $ulocation = "uploads/".$image;
            

            
            if($usize <= 50000){
                if($utype=="image/jpeg" || $utype=="image/jpg" || $utype=="image/png" || $utype=="image/gif" || $utype=="image/webp")
                {
                    $sql = "INSERT INTO items (Name,Price,Category,Image) 
                        VALUES ('$name','$price','$category','$image')";

                    $qry = mysqli_query($connection,$sql) or die(mysqli_error($connection));

                    if($qry){
                        if(move_uploaded_file($utmpname,$ulocation)){
                            echo "<script>window.alert('Data Inserted Successfully!')</script>";
                            header("location:product.php");
                        } 
                        else{
                            echo "Unable to insert file";
                        }     
                    }
                }
                else{
                    $errimage ="Image type doesnot match";
                }
            }else{
                $errimage ="Image size should be less than 50kb";
            }
        }
    }
?>
    
<nav class="nav-bar">
    <a href="../dashboard.php"><img src="../admin.png" width='50px' height='50px'/></a>

    <div class="nav-list">
        <a href="../dashboard.php">Home</a>
        <a href="../user/displayUser.php">Users</a>
        <a href="displayProduct.php">Products</a>
        <a href="product.php">Add Products</a>
        <a href="../logout.php">LogOut</a>
    </div>
</nav>    

<div class='container'>
    <form method='POST' action='' enctype='multipart/form-data'>
    
        <h1 class="title">Add Products</h1>
        <br>
        
        <div class='form-data'>
            <label>Name <span class="error"> * <?php echo $errname; ?> </span> </label> 
            <input type='text' name='name' > 
        </div>

        <div class='form-data'>
            <label>Price <span class="error"> * <?php echo $errprice; ?> </span></label> 
            <input type='text' name='price' > 
        </div>

        <div class='form-data'>
            <label>Category <span class="error"> * <?php echo $errcategory; ?> </span></label> 
            <select name="category">
                        <option value=''>Filter</option>
                        <option value='Food'>Food</option>
                        <option value='Electronic'>Electronic</option>
                        <option value='Fashion'>Fashion</option>
                        <option value='Sport'>Sports & Outdoor</option>
                        <option value='Education'>Education</option>
            </select> 
        </div>

        <div class="form-data">
            <label>Image <span class="error"> * <?php echo $errimage; ?> </span></label> 
            <div>
                <input type='file' name='image' class="imagefile" > 
            </div>
        </div>
        
        <div class='btns'>
            <input type='submit' name='subproduct' value='submit' >
            <input type='reset' name='reset' value='Clear' > <br><br>
        </div>
    </form>
</div>    


</body>
</html>
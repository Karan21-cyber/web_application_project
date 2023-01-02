<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="curd.css">
</head>
<body>
    
<div class='container'>

    <div class='form'>
        <h2>Add New Products</h2>

        <form method="POST" action="insertProduct.php" enctype="multipart/form-data">
            <div class="form-data">
                <label>Product Name </label>
                <input type="text" name="name" />
            </div>
            
            <div class="form-data">
                <label>Price </label>
                <input type="text" name="price" />
            </div>
            
            <div class="form-data">
                <label>Image Filename </label>
                <input type="text" name="upload" />
            </div>
            <div class='btns'>
                <input type="submit" name="submit" value="Submit" >
                <input type="reset" name="reset" value="Clear" >
                <input type="submit" name="back" value="Back" >
            </div>
        </form> 
        
    </div>
</div>

<div class='displayProducts'>
    <div>
        <?php
            include("displayProducts.php");
        ?>
    </div>    
</div>

</body>
</html>
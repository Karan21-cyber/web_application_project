<!-- Display all products  -->
<?php
        //writing the sql query
        if(isset($_POST['subFilter']))
        {
            $category = $_POST['category'];
            if(empty($category)){
                $sql = "SELECT * FROM items"; 
            }
            else{
                $sql = "SELECT * FROM items WHERE Category = '$category'"; 
            }
           
        }
        else  if(isset($_POST['subSearch']))
        {
            $name = $_POST['name'];
            if(empty($name)){
                $sql = "SELECT * FROM items"; 
            }
            else{
                $sql = "SELECT * FROM items WHERE Name = '$name'";    
            }
            
        }
        else  if(isset($_POST['subPrice']))
        {
            $price = $_POST['price'];
            if(empty($price)){
                header('location:dashboard.php');
            }
            else{
                if($price == 'high'){
                    $sql = "SELECT * FROM items ORDER BY Price DESC "; 
    
                }
                else if($price == 'low'){
                    $sql = "SELECT * FROM items ORDER BY Price ASC "; 
                }
            }
        }    
        else{
                $sql = "SELECT * FROM items"; 
        }

        $qry = mysqli_query($connection,$sql) or die(mysqli_error($connection));

        echo "<div class='product'>";
        while($row = mysqli_fetch_array($qry)){
               
                echo "<div class='product-details'>";
                   
                    echo "<div class='product-info'>";
                        echo "<label>Product Name :<span>".$row['Name']."</span></label>";
                        echo "<label>Category :<span>".$row['Category']."</span></label>";
                        echo "<label>Price :<span>".$row['Price']."</span></label>";
                    echo "</div>";

                    echo "<img src=\"../admin/product/uploads/".$row['Image']."\" alt=".$row['Name']." width='100px' >";
                echo "</div>";

                if($row['Name']){
                    
                } 
        }
        echo "</div>";
       

    ?>

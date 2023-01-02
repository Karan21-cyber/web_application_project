<?php
    include('../init.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel='stylesheet' href='style2.css' >   
</head>
<body>
 

<header class="nav-info">
    <a href="dashboard.php" ><label> Welcome ,<span> <?php echo strtoupper($_SESSION['username']) ; ?> <span></label></a>
    <form method='POST' action=''>
        <input type='text' name='name' placeholder='Search.....' class="search-box">
        <input type='submit' name='subSearch' value="Search" class="search-btn">
    </form>
    <a href="logout.php">LogOut </a>
</header>

<div class='container'>

    <div class='filter-section'>  
        <h3>Filter Products</h3>   
            <form method='POST' action=''>
                <select name="category">
                    <option value=''>Filter</option>
                    <option value='Food'>Food</option>
                    <option value='Electronic'>Electronic</option>
                    <option value='Fashion'>Fashion</option>
                    <option value='Sport'>Sports & Outdoor</option>
                    <option value='Education'>Education</option>
                </select>

                <input type='submit' name='subFilter' value="Filter" class="filterbtn">
            </form>


            <form method='POST' action=''>
                <label>Low Price </label> <input type='radio' name='price' value='low' class='selection' >
                <label>High Price </label> <input type='radio' name='price' value='high' class='selection' >
                <input type='submit' name='subPrice' value="Go" class='gobtn'>
            </form>
    </div>
    <hr>
    <div class="products">
        <h3>Products Details</h3>
        <div class="product-items">
            <?php
                include("displayProducts.php");
            ?>
        </div>
    </div> 

</div>

</body>
</html>
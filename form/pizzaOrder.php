<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Order Form</h1>
    Please fill out this form to place your order
    <form method="POST" action="">
        <fieldset>
            <legend>Enter your login details</legend>
            User Name: <input type="text" name="username" />
            Email: <input type="email" name="useremail" />
        </fieldset>

        <fieldset>
            <legend>Pizza Selection</legend>
            Size: <input type="radio" name="size" value="small" />small
                <input type="radio" name="size" value="medium" />medium
                <input type="radio" name="size" value="large" />large
        
        <br>
        <br>
        Topping: 
        <?php
            echo "<select name='topping'>";
            $topping = array('Please Select','Seafood','Mushroom','Chicken','Cheesy');
            for($i = 0; $i < count($topping) ; $i++){
                echo "<option value='$topping[$i]'>$topping[$i]</option>";
            }
            echo "</select>";
            
        ?>
        <br>
        <br>
        Extra: <input type="checkbox" name='extra[]' value='Parmesan' />Parmesan
                <input type="checkbox" name='extra[]' value='Olives' />Olives
                <input type="checkbox" name='extra[]' value='Capers' />Capers
        </fieldset>
        <input type="submit" name='submit' value="submit" />
        <input type="reset" name='clear' value="clear" />
    </form>

    <?php

        if(isset($_POST['submit'])){
            $username = $_POST['username'];
            $email = $_POST['useremail'];
            $size = $_POST['size'];
            $topping = $_POST['topping'];
            
            if(filter_var($email,FILTER_VALIDATE_EMAIL)){
                    echo "Thank you for your order: <br>";
                    echo "<br>Customer ID: " . $username ;
                    echo "<br>Email: " . $email ;
                    echo "<br>Your Order: ". $size . " ". $topping;
                    echo "<br>Extra Toppings: ";
    
                    foreach($_POST['extra'] as $extra){
                        echo $extra ."&nbsp;"; 
                    }
                }  
            } 
        

    ?>

    <footer>
            <b>Click here to go to home: </b>
            <a href="../activities.php">Home</a>
    </footer>


</body>
</html>
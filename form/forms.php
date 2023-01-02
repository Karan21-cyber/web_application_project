<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        ini_set('display_errors',1);
        ini_set('display_startup_errors',1);
        error_reporting(E_ALL);
    ?>

    <h1>Processing Input from HTML forms</h1>
    <h2>Login Form using GET</h2>
    <form method="POST" action="">
        <fieldset>
            <legend>Login</legend>
            <label for="email">Email: </label>
            <input type="text" name="txtEmail" /> <br /><br />
            
            <label for="passwd">Password: </label>
            <input type="password" name="txtPass" /> <br /><br />
            <input type="submit" value="Submit" name="loginSubmit"/>
            <input type="reset" value="Clear" name="reset" />
    
        </fieldset>
    </form>

    <?php
        if(empty($_POST['txtEmail']) || empty($_POST['txtPass'])){
            echo "ALL field is required<br>";
        }
        else{
            if(isset($_POST['loginSubmit'])){
                $email = $_POST['txtEmail'];
                $password = $_POST['txtPass'];
                
                if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                    echo "Form submitted successfully<br>";
                    echo "Email: $email<br>";
                    echo "Password : $password<br>";
                }
                else{
                    echo "Email you entered is Invalid Please Try again<br>";
                }  
            }
        }
    ?>
    
    <br><br><br><br>
    <form method="POST" action="">
        <fieldset>
            <legend>Comments</legend>
            <label for="">Email: </label>
            <input type="text" name="txtEmail" value="<?php
                if(isset($_POST['txtEmail'])){
                    echo $_POST['txtEmail'];
                }
            ?>" /> <br /><br />
            
            <textarea rows="4" cols="50" name="txtComment"></textarea> <br ><br/>
            <label for="">Click to Confirm: </label>
            <input type="checkbox" name="chkConfirm" value="agree" /> <br /><br />

            <input type="submit" name="Submit" value="Submit" /> 
            <input type="reset" name="" value="Clear" /> 

        </fieldset>
    </form>

    <?php
        if(isset($_POST['chkConfirm'])){
            if(isset($_POST['Submit'])){
                $confirm = 'Agreed<br>';
                $email = $_POST['txtEmail'];
                $comment = $_POST['txtComment'];
                
                if(!empty($email)){
                    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                        echo "Email : $email<br>";
                        echo "Comments: $comment<br>";
                        echo "Confirm : $confirm<br>";
                    }
                    else{
                        echo "Email is Invalid<br>";
                    }
                }
                else{
                    echo "Email must not be empty<br>";
                }
                
            }
            
        }
        else{
            $confirm = "Not Agreed<br>";
            echo "Please fill the checkBox<br>";
        }
    ?>
    <br /><br /><br />
    
    <h1>Tax Calculator</h1>

    <form method="POST" action="">
        <fieldset><legend>Without Tax Calculator</legend>
        
            After tax Price: <input type="text" name="price" >
            Tax Rate: <input type="text" name="rate" >
            <input type="submit" name="submit" value="submit">
            <input type="reset" name="clear" value="clear" >
        </fieldset>
    </form>

    <?php

        if(isset($_POST['submit'])){

            if(empty($_POST['price']) || empty($_POST['rate'])){
                echo "Please fill the require field<br>";
            }
            else{
                WithoutTax();
            }
                   
        }
        else if(isset($_POST['clear'])){
            $_POST['price'] = "";
            $_POST['rate']= "";
            header("Location:taxCalculator.php");
        }

        function WithoutTax(){
            if( !is_numeric($_POST['price']) || !is_numeric($_POST['rate'])){
                echo "Invalid data";
            }
            else{
                $price = (int) $_POST['price'];
                $rate = (int) $_POST['rate'];
                $priceWithoutTax =  (100 * $price) / (100 + $rate);
                echo "<h3>Price before tax = &pound". number_format($priceWithoutTax,2) ."</h3>";
            }
        }
    ?>
    
    <br/><br/><br/>

<h1>Passing Data Appended to an URL</h1>
<h2>Pick a category</h2>
<a href="forms.php?cat=Films">Films</a>
<a href="forms.php?cat=Books">Books</a>
<a href="forms.php?cat=Music">Music</a>

<?php
    if(isset($_GET['cat'])){
        $category = $_GET['cat'];
        echo "<h3>The category choosen is $category</h3><br>";
    }
?>
    
    <footer>
        <h3>Click to go to Extension Exercise</h3>
        <a href="pizzaOrder.php">Click Here</a>
    </footer>
</body>
</html>

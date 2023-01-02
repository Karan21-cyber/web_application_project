<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Web Applications and Technologies</title>
      <link type="text/css" rel="stylesheet" href="main.css" />
   </head>
   <body>
      <header>
         <h1>Paul Doney C123457</h1> 
      </header>
      
      <section id="container">
         <h1>Fundamentals of PHP</h1>
         <?php
            echo "<h3>Selection</h3><br>";

            $day = date('l');  // that is a lower case L
            // $day = 'Sunday';
            echo 'it\'s ' . $day . "<br>";

            if($day == "Wednesday"){
                echo "It's midweek<br>";
            }
            else{
                echo "It's not midweek";
            }

            // getting the current date
            $currentDate = date("y/m/d");
            echo "<h3>The current date is : $currentDate</h3>";
            
            // getting the current time
            date_default_timezone_set("Asia/Kathmandu");
            $currentTime = date("h:i:sa");
            echo "<h3>The current time of Asia/Kathmandu is : $currentTime </h3>";
		?>

       <?php
            echo "<h3>Find the time of day<br></h3>";
            // setting the timezone 
            date_default_timezone_set("Asia/Kathmandu");
           
            $time = date("H");

            if($time < 12){
                echo "Good Morning<br>";
            }
            else if($time >= 12 && $time < 18){
                echo "Good Afternoon<br>";
            }
            else  
            {
                echo "Good Night<br>";
            }



            echo "<h3>Password Checker</h3>";
            $password = 'username';

            if(strlen($password) > 4 && strlen($password) <= 10){
                echo "<b>Password length is Valid</b><br>";
                if($password == "password" || $password == "username"){
                    echo "Password is invalid<br>";
                }
                else{
                    echo "Password is valid<br>";
                }
            }
            else{
                echo "<b>Password length is invalid</b><br>";
            }


            echo "<h3>Ticket Company</h3>";
            $price = 25;
            $age = 15;
            $membership = "No";
            $ticketprice = 0;
            
            if($age > 0 && $age < 120){

                if ($age == 15){
                    $membership = "Yes";
                    $membershipDiscount = 0.1;
                }
                
                if($age < 12 ){
                    $discount = 0.5;
                    $ticketprice = number_format($price - ($price * $discount) ,2);

                }
                else if($age < 18 ){
                    if($age === 15){
                        $discount = 0.25 + $membershipDiscount;
                        $ticketprice = number_format($price - ($price * $discount) ,2);
                    }
                    else{
                        $discount = 0.25;
                        $ticketprice = number_format($price - ($price * $discount) ,2);
                    }
                }
                else{
                    $discount = 0.25;
                    $ticketprice = number_format($price - ($price * $discount) ,2);

                }
                echo "Initial Ticket Price: " . $price . "<br>";
                echo "Age : " . $age. "<br>";
                echo "Member : $membership<br>";
                echo "Final Ticket Price: $ticketprice<br>";  
        }
        else{
            echo "Age you entered is invalid<br>";
        }

           
       ?>

        
        <?php

            echo "<h1>Array</h1>";
            echo "<h3>Simple Array </h3>";
            
            $products = array('t-shirt','cap','mug');
            print_r($products);
            echo "<br>";
            // inserting an element in indexing
            $products[1] = 'shirt';
            print_r($products);
            echo "<br>";

            // adding new element in array;
            array_push($products, "skirt");
           
            print_r($products);
 
            echo "<h3>Items in my products array</h3>";
            echo "<h4>The items at index[2] is: ". $products[2]."</h4>";
            echo "<h4>The items at index[3 is: ". $products[3]."</h4>";
        ?>

        <?php
            echo "<h3>Associative Arrays</h3>";
            $customer = array('custID' => 12,'custName'=>'Sarah','custAge' => 23, 'custGender' => 'F');
            print_r($customer);

            // adding items in array
            $customer['custEmail'] = 'sarah@gmail.com';
            echo "<br>";
            print_r($customer);

            echo "<h3>Items in my customer array</h3>";
            echo "<h4>The item at index [custName] is : " . $customer['custName'] ."</h4>";
            echo "<h4>The item at index [custEmail] is : ". $customer['custEmail'] ."</h4>";
        ?>

    <?php
        echo "<h3>Multidimensional Array</h3>";
        $stock = array(
            'id1' => array("desc" => 't-shirt','price' => 9.99,'stock' =>100,'color' => array('blue','green','red')),
            'id2' => array("desc" => 'cap','price' => 4.99,'stock' =>50,'color' => array('blue','black','gray')),
            'id3' => array("desc" => 'mug','price' => 6.99,'stock' =>30,'color' => array('yellow','green','pink'))
        );

        echo "This is my order: <br>";
        foreach($stock as $product => $p_values){
            echo $p_values['color'][1] ." ". $p_values['desc'] ."<br>";
            echo "Price: &pound" . $p_values['price']. "<br><br>";
        }


        echo "<h1>Loops</h1>";
        echo "<h3>While Loops</h3>";
        
        $counter = 1;
        while($counter < 6){
            echo 'Count :' . $counter . '<br>';
            $counter++; 
        }
        
        echo "<h3>Price of tshirt cost from 1 to 10.</h3>";
        $shirtPrice = 9.99;
        $counter = 1;
        echo "<table border='1' cellpadding='5' cellspacing='1'>";
        echo "<tr>
                <th>Quantity</th>
                <th>Price</th>
            <tr>";
       
        while($counter <= 10){
            $totalPrice = number_format($counter * $shirtPrice,2);
            
            echo "<tr>
                <td>$counter</td>
                <td>&pound $totalPrice</td>
                </tr>";
            $counter++;
        }
        echo "</table>";
    ?>

    <?php
        echo "<h3>For Loop</h3>";
        $names = array('Karan','Mukesh','Diwash','Britney','Bhawana','Anisha');
        for($i = 0; $i < count($names); $i++){
            echo $names[$i]."<br>";
        }
    ?>

    <?php
        echo "<h3>ForEach Loop</h3>";
        $names = array('Karan' => 'c7297911','Mukesh' =>'c7297912','Diwash'=>'c7297910','Britney' =>'c7297909','Bhawana' =>'c7297914','Anisha'=>'c7297915');
        foreach($names as $name => $names_value){
            echo "Name: ". $name. "   ID: " . $names_value."<br>";
        }
    ?>

    <?php
        echo "<br>";
        echo "<br><b>For each Loop: </b><br>";
        $city=array('Peter'=>'LEEDS','Kat'=>'bradford','Laura'=>'wakeFIeld');
        foreach($city as $place => $place_value){
            $loc = strtolower($place_value);
            echo ucfirst($loc);
            echo "<br>";
        }   
    ?>
        
    <?php
        echo "<h3> Fundamentals Extension Exercise</h3>";
        echo "<h3> Some Useful Functions </h3>";
        // writing javascript code inside the php
        // $password = null;
        // $password = " ";
        $password = array(null, "",'','pass',1234567,'passwords','passwd','passwords','password',' password ');

        foreach($password as $psw){
            $password = trim($psw);
             
            // echo "Passoword is : $password <br>";
        
            if(empty($password) && $password == null){
                echo "Please enter a password<br>";
            }
            else
            {
                if(strlen($password) >6 && strlen($password) <=8 ){
                    if(is_numeric($password)){
                        echo "Password cannot be a number<br>";
                    }
                    else{
                        echo "Password is OK <br>";
                        // echo "encryted password : ". sha1($password) ."<br>";
                    }  
                }
                else{
                    echo "Your password must be between 6 to 8 characters in length<br>";
                }  
            }
            echo "<br>";
        }

        $password = '<script>alert("You are beign hacked")</script>';
        if(htmlentities($password)){
            echo "Script cannot run<br>";
        }
  
    ?>

      </section>
      <footer>
        <br><br>
        Click to go back to home : 
            <small> <a href="../activities.php"><b>Home</b></a></small><br><br>
      </footer>

   </body>
</html>
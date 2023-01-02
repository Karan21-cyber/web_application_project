<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My first Php page</title>
</head>
<body>
    <h3>Variables</h3>
    <?php
        // My first Php

        $firstname = "Karan";
        $surname = "Chaudhary";
        $studentId = "77297911";
        $age = 21;

        //  the use of "." symbol is concatation
        echo "with the use of concatiation". "<br>";
        echo "Hi my name is " . $firstname . $surname . "<br>";
        echo "Student Id number is : $studentId<br>";
        echo "I am " . $age . " years old. <br><br>" ;
        echo " without the use of concatation <br>";
        // without the use of concatation
        echo "Hi my name is $firstname $surname and I am $age years old. Student Id number is : $studentId <br><br>";
    ?>
    
    <h3>Functions</h3>
    <?php

        //gettype()returns..
        echo "Data type of string: " . gettype($firstname);
        echo '<br />';
        //strlen() returns..
        echo "Length of string :" . strlen($firstname);
        echo '<br />';
        //strtoUpper()returns..
        echo "String to upperCase : " .strtoUpper($firstname);
    ?>

    <h3>Arithmetic</h3>
    <?php
        $num1 = 9;
        $num2 = 12;

        echo "num1 = " . $num1 . "<br>";
        echo "num2 = " . $num2 . "<br>";
        echo "num1 x num2 = " . ($num1 * $num2) . "<br>";
        echo "num1 as a percentage of num2 = " . number_format($num1/$num2 * 100,0)."%" . "<br>";
        $divide = number_format($num2 / $num1 , 0);
        $remainder = $num2 % $num1; 
        echo "num2 divided by num1 = " . $divide ." remainder " . $remainder . "<br>" ;
    ?>

    <h3>Floor function</h3>
    <?php
        $heightMeter = 1.8;
        $heightInches = ($heightMeter * 100) / 2.54 ;
        $heightft = floor($heightInches / 12);
        $inches = floor($heightInches - ($heightft * 12)) ;
        echo "Name: " . $firstname ."<br>";
        echo "Age: " . $age ."<br>";
        echo "Height in Meters: " . $heightMeter ."<br>";
        echo "Height in Feet and inches : " . $heightft ."ft  " . $inches ."inc"."<br>";
        
    ?>

</body>
</html>
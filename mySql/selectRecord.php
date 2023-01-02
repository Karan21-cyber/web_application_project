<?php
    //making the connection with database
    include("connection.php");

    // run query to select all records from customer table

    $sql = "SELECT * FROM customer";

    //store the result of the sql in variable called qry

    $qry = mysqli_query($connection,$sql) or die(mysqli_error($connection));

    //Display heading
    echo "<h2>Select ALL from the Customer Table</h2>";

    //use a while loop to iterate through your qry array and display in table;
    echo "<table cellspacing='5' cellpadding='5' border='1'>";
    echo "<tr>
            <th>CustomerID</th>
            <th>FirstName</th>
            <th>LastName</th>
            <th>Email</th>
            <th>Password</th>
            <th>Gender</th>
            <th>Age</th>
        </tr>";

    while($row = mysqli_fetch_assoc($qry)){
        echo "<tr>";
        echo "<td>".$row['CustomerID']."</td>";
        echo "<td>".$row['FirstName']."</td>";
        echo "<td>".$row['LastName']."</td>";
        echo "<td>".$row['Email']."</td>";
        echo "<td>".$row['Password']."</td>";
        echo "<td>".$row['Gender']."</td>";
        echo "<td>".$row['Age']."</td>";
        echo "</tr>";
    }
    echo "</table>";
?>

<?php
        // run query to select all records from customer table
    
        $sql = "SELECT * FROM customer WHERE Age > 22";
    
        //store the result of the sql in variable called qry
    
        $qry = mysqli_query($connection,$sql) or die(mysqli_error($connection));
    
        //Display heading
        echo "<h2>Select ALL from the Customer Table with Age > 22</h2>";
    
        //use a while loop to iterate through your qry array and display in table;
        echo "<table cellspacing='5' cellpadding='5' border='1'>";
        echo "<tr>
                <th>CustomerID</th>
                <th>FirstName</th>
                <th>LastName</th>
                <th>Email</th>
                <th>Password</th>
                <th>Gender</th>
                <th>Age</th>
            </tr>";
    
        while($row = mysqli_fetch_assoc($qry)){
            echo "<tr>";
            echo "<td>".$row['CustomerID']."</td>";
            echo "<td>".$row['FirstName']."</td>";
            echo "<td>".$row['LastName']."</td>";
            echo "<td>".$row['Email']."</td>";
            echo "<td>".$row['Password']."</td>";
            echo "<td>".$row['Gender']."</td>";
            echo "<td>".$row['Age']."</td>";
            echo "</tr>";
        }
        echo "</table>";
?>

<?php
        // run query to select all records from customer table
    
        $sql = "SELECT * FROM customer WHERE Age >= 22";
    
        //store the result of the sql in variable called qry
    
        $qry = mysqli_query($connection,$sql) or die(mysqli_error($connection));
    
        //Display heading
        echo "<h2>Select ALL from the Customer Table with Age >= 22</h2>";
    
        //use a while loop to iterate through your qry array and display in table;
        echo "<table cellspacing='5' cellpadding='5' border='1'>";
        echo "<tr>
                <th>CustomerID</th>
                <th>FirstName</th>
                <th>LastName</th>
                <th>Email</th>
                <th>Password</th>
                <th>Gender</th>
                <th>Age</th>
            </tr>";
    
        while($row = mysqli_fetch_assoc($qry)){
            echo "<tr>";
            echo "<td>".$row['CustomerID']."</td>";
            echo "<td>".$row['FirstName']."</td>";
            echo "<td>".$row['LastName']."</td>";
            echo "<td>".$row['Email']."</td>";
            echo "<td>".$row['Password']."</td>";
            echo "<td>".$row['Gender']."</td>";
            echo "<td>".$row['Age']."</td>";
            echo "</tr>";
        }
        echo "</table>";
?>

<?php
        // run query to select all records from customer table
        $sql = "SELECT * FROM customer WHERE Gender= 'M'  ORDER BY Age DESC";
    
        //store the result of the sql in variable called qry
    
        $qry = mysqli_query($connection,$sql) or die(mysqli_error($connection));
    
        //Display heading
        echo "<h2>Select ALL from the Customer Table with Age Descending</h2>";
    
        //use a while loop to iterate through your qry array and display in table;
        echo "<table cellspacing='5' cellpadding='5' border='1'>";
        echo "<tr>
                <th>CustomerID</th>
                <th>FirstName</th>
                <th>LastName</th>
                <th>Email</th>
                <th>Password</th>
                <th>Gender</th>
                <th>Age</th>
            </tr>";
    
        while($row = mysqli_fetch_assoc($qry)){
            echo "<tr>";
            echo "<td>".$row['CustomerID']."</td>";
            echo "<td>".$row['FirstName']."</td>";
            echo "<td>".$row['LastName']."</td>";
            echo "<td>".$row['Email']."</td>";
            echo "<td>".$row['Password']."</td>";
            echo "<td>".$row['Gender']."</td>";
            echo "<td>".$row['Age']."</td>";
            echo "</tr>";
        }
        echo "</table>";
?>

<?php

        // run query to select all records from customer table    
        $sql = "SELECT * FROM customer WHERE firstName Like '%a%' ";
    
        //store the result of the sql in variable called qry
    
        $qry = mysqli_query($connection,$sql) or die(mysqli_error($connection));
    
        //Display heading
        echo "<h2>Select ALL from the Customer Table with 'a' in the first name</h2>";
    
        //use a while loop to iterate through your qry array and display in table;
        echo "<table cellspacing='5' cellpadding='5' border='1'>";
        echo "<tr>
                <th>CustomerID</th>
                <th>FirstName</th>
                <th>LastName</th>
                <th>Email</th>
                <th>Password</th>
                <th>Gender</th>
                <th>Age</th>
            </tr>";
    
        while($row = mysqli_fetch_assoc($qry)){
            echo "<tr>";
            echo "<td>".$row['CustomerID']."</td>";
            echo "<td>".$row['FirstName']."</td>";
            echo "<td>".$row['LastName']."</td>";
            echo "<td>".$row['Email']."</td>";
            echo "<td>".$row['Password']."</td>";
            echo "<td>".$row['Gender']."</td>";
            echo "<td>".$row['Age']."</td>";
            echo "</tr>";
        }
        echo "</table>";
?>
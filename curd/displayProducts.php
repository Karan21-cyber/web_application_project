<?php

$sql = "SELECT * FROM products ";

require("connection.php");

$qry = mysqli_query($conn,$sql) or die(mysqli_error($conn));

$count = mysqli_num_rows($qry);

echo "<h2>We have $count Products </h2>";

echo "<table>";
echo "<tr>
        <th>Id</th>
        <th>Product Name</th>
        <th>Price</th>
        <th>Image</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>";

while($rows = mysqli_fetch_assoc($qry)){
    $id = $rows['ProductID'];
    echo "<tr>";
    echo "<td>". $rows['ProductID'] ."</td>";
    echo "<td>". $rows['ProductName'] ."</td>";
    echo "<td>". $rows['ProductPrice'] ."</td>";
    echo "<td>". "<img src=\"images/".$rows['ProductImageName']."\" alt=".$rows['ProductName']." width='100px'>" ."</td>";
    echo "<td>"."<a href=amendProduct.php?id=$id&action=amend>Amend</a>"."</td>"; 
    echo "<td>"."<a href=deleteProduct.php?id=$id&action=delete>Delete</a>"."</td>";
    echo "</tr>";
}
echo "</table>";

?>
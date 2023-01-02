<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="insertRecord.php">
        <fieldset>
            <legend>Enter Customer Details</legend>

            FirstName : <input type="text" name="firstName" /><br><br>
            Surname : <input type="text" name="surname" /><br><br>
            Email : <input type="email" name="email" /><br><br>
            Password : <input type="password" name="password" /> <br><br>
            Gender : <Select name="gender" >
                        <Option name="gender" vlaue="M" >Male</Option>
                        <Option name="gender" value="F" >Female</Option>
                    </Select><br><br>
            Age : <input type="text" name="age" /> <br><br>
        </fieldset>
        <input type="submit" name="submit" vlaue="submit" /><br>
    </form>
   
    <?php
        include 'selectRecord.php';
    ?>

</body>
</html>
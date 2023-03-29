<?php
include("connection.php");
include("insert.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="signin.css">
</head>
<body>
    <fieldset>
        
        <form action="" method="POST">
        <h1>REGISTER HERE</h1> <br>
            <label >Full Names</label>
            <input type="text" name="fullnames" required> <br> <br>

               <label >User Names</label>
            <input type="text" name="username" required> <br> <br>

               <label >Email</label>
            <input type="text" name="email" required> <br> <br>

               <label >Address</label>
            <input type="text" name="address" required> <br> <br>

               <label >Password</label>
            <input type="password" name="password" required> <br> <br>

            <input type="submit" name="save" value="SIGN UP" class="btn">
        </form>
    </fieldset>
</body>
</html>
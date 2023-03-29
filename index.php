<?php
include("connection.php");

?>

<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <script src="https://cdn.tailwindcss.com"></script> -->
  <link rel="stylesheet" href="input.css">
</head>
<body class="bg-slate-300 mx-auto">


<fieldset class="py-6 my-px my-3">
 
    <form action="index.php" class="py-6 " method="POST">
      <h1>LOGIN</h1> <br> 
        <label for="">User Name</label>
    <input type="text" class="rounded text-pink-500" name="username"  required/> <br> <br>

    <!-- <label for="" >Email</label>
    <input type="text" class="rounded text-pink-500"  name="email"/> <br> <br> -->

    <label for="" >Password</label>
    <input type="password" class="rounded text-pink-500" name="password" required/> <br> <br>
    <label for=""><input type="radio" value="checked">Remember me</label>        <span><a href="forgot.php">forgot password?</a> </span><br> <br>

    <input type="submit" name="submit" class="btn" value="LOGIN"> <br>  <br>

    
     <label for="">Don't have an account?</label><a href="signin.php">sign up</a>


    </form>
</fieldset>

<?php

if(isset($_POST['submit'])){

  $USERNAME = $_POST['username'];
  $PASSWORD = $_POST['password'];

  $select ="SELECT * FROM account WHERE username= '".$USERNAME."' AND password= '".$PASSWORD."' LIMIT 1";
  $runselect =  Mysqli_query($connect,$select);

  if(mysqli_num_rows($runselect)==1)
  {
      echo "<script>alert('logged successfully')</script>";
      header("location:game.php");

  }

  else{
      echo "<script>alert('logged unsuccessfully')</script>".MYsqli_error($connect);

  }

}

?> 
    
 
</body>
</html>
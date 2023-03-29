<?php

if(isset($_POST['save'])){
    $FULLNAMES = $_POST['fullnames'];
    $USERNAME = $_POST['username'];
    $EMAIL = $_POST['email'];
    $ADDRESS = $_POST['address'];
    $PASSWORD = $_POST['password'];

    $insert = "INSERT INTO account(fullnames,username,email,address,password) VALUES('$FULLNAMES','$USERNAME','$EMAIL','$ADDRESS','$PASSWORD')";
    $runinsert = mysqli_query($connect,$insert);

    if($runinsert){
        echo "<script>alert('Thanks For Signin')</script>";
        header("location:index.php");
    }

    else{
        die("Failed to signin". MySQLi_error($connect));
    }
}

?>
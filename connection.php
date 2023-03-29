<?php


$host = "localhost";
$user = "root";
$password = "";
$db ="volvis";

$connect = mysqli_connect( $host,$user,$password,$db);
if($connect){
    //  echo "<script>alert('connected successfull')</script>";
}

else{
    // die("not coonected".Mysqli_connect_error());
}

?>
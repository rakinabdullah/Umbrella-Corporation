<?php

$server="localhost";  //name of the server
$username="root"; //username of the server
$password=""; //the password of the server
$name="travel"; //name of the database


$con=mysqli_connect($server, $username, $password, $name);

if($con){
    //echo "Database connection was successful" ;
   // echo "<br><br><br>";
} else {
    echo "connection wasn't successful".mysqli_error($con);
    die($con);
}



?>
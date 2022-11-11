<?php
//session_start();
include("dbconnection.php");
$i = $_SESSION['id'];   
$query= "INSERT INTO `user_selection` (`id`, `u_id`, `place_id`, `hotel_id`, `trasport_id`, `package_code`, `payment_code`) VALUES (NULL, '$i', NULL, NULL, NULL, NULL, NULL)";

$run_query  = mysqli_query($con, $query);
 

mysqli_close($con);

?>
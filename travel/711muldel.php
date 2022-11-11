<?php
//session_start();
include("dbconnection.php");
$i=$_SESSION['id1'];   

//echo $i;
$query1="DELETE FROM `multiplaces` WHERE `multiplaces`.`id` = $i"; 
$run1  = mysqli_query($con, $query1);
 

mysqli_close($con);

?>


 
<?php
//session_start();
include("dbconnection.php");
$i=$_SESSION['id'];   


$query1="SELECT * FROM `user_selection` WHERE `u_id` = $i";

$run_query1  = mysqli_query($con, $query1);

$i2=000;

 while($row=mysqli_fetch_array($run_query1)){  $i2=$row['id'];      }      
 

$query2= "DELETE FROM `user_selection`  WHERE `id` = $i2 AND `u_id` = $i"; 
 

$run_query2  = mysqli_query($con, $query2);


mysqli_close($con);

?>


 
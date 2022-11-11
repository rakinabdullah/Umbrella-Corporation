<?php session_start();  include("dbconnection.php"); echo $_SESSION['Full_name']; ?> 
 <a href="70logout1.php">logout  </a> 
 
<?php
 if(!empty($_POST['hotel'])) {  
     
$hotel= $_POST['hotel'];
     include ("dbconnection.php");
     
     $i2=$_SESSION['id2'];  // echo $i2;
     
       $sql= "UPDATE `user_selection` SET `hotel_id` = $hotel WHERE `user_selection`.`id` = $i2"; 
     
     $run_query2  = mysqli_query($con, $sql);
              
        include("72transport.php");
    
    } 
     
 
else echo("<p><strong>You didn't select any any hotel.</strong></p>\n");
      
 
    ?>
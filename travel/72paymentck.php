<?php session_start();  include("dbconnection.php"); echo $_SESSION['Full_name']; ?> 
 <a href="70logout.php">logout  </a> 
            
   
<?php
 if(!empty($_POST['ps'])) {  
     
$ps= $_POST['ps'];
     include ("dbconnection.php");
     
     $i2=$_SESSION['id2'];  // echo $i2;
     
       $sql= "UPDATE `user_selection` SET `payment_code` = $ps WHERE `user_selection`.`id` = $i2"; 
     
     $run_query2  = mysqli_query($con, $sql);
     
     
     
    $j2= $_SESSION['id'];
     
     $sql1="UPDATE `users` SET `selected-id` = $i2 WHERE `users`.`id` = $j2";
     
      $run_query3  = mysqli_query($con, $sql1);
     
     
       
        include("73receipt.php");
    
    } 
     
 
else {  
     
    
    echo("<p><strong>You didn't select any any payment system.</strong></p>\n");}
      
 
    ?>
<?php session_start();  include("dbconnection.php"); echo $_SESSION['Full_name']; ?> 
 <a href="70logout1.php">logout  </a> 
 
<?php
 if(!empty($_POST['transport'])) {  
     
$transport= $_POST['transport'];
     include ("dbconnection.php");
     
     $i2=$_SESSION['id2'];  // echo $i2;
     
       $sql= "UPDATE `user_selection` SET `trasport_id` = $transport WHERE `user_selection`.`id` = $i2"; 
     
     $run_query2  = mysqli_query($con, $sql);
     
     
     echo "Do you want to take any packages?";
     
     ?>
             
           <form  method="post" action ="72payment.php">   
        <button  >Skip</button>
        </form>  
             
             <?php
              
        include("72package.php");
    
    } 
     
 
else echo("<p><strong>You didn't select any any transport system.</strong></p>\n");

?>
      
 
    
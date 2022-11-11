 

 <form action="72paymentck.php" method="post"> 
   
 

<?php   

include("dbconnection.php");

$query_s= "SELECT * FROM `payment_system`";

$run_query  = mysqli_query($con, $query_s);    //value="<?php echo $mm; 
 
    
while($result=mysqli_fetch_assoc($run_query)){    ?>
 
   <input type="radio" name="ps" value="<?php echo $result['Code']; ?>">   <?php echo $result['Type']; ?> <br><br> 
 
   
 <?php  // echo"<br>";
}

mysqli_close($con);

?>  <input type="submit" name="submit" value="Submit" />    
<input type="reset" name="reset" value="reset" />

 </form>
 
   
    
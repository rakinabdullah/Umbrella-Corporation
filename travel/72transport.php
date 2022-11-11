<!--<input type="checkbox" value="">  -->
 <form action="72transportck.php" method="post"> 
   
 

<?php   

include("dbconnection.php");

$query_s= "SELECT * FROM `transports`";

$run_query  = mysqli_query($con, $query_s);    //value="<?php echo $mm; 
 
    
while($r=mysqli_fetch_assoc($run_query)){    ?>
 
   <input type="radio" name="transport" value="<?php echo $r['id']; ?>">   <html>
<head>
<style>
div {   
  background-color: lightgrey;
  width: 300px;
  border: 10px solid Black;
  padding: 10px;
  margin: 20px;
}
</style>
</head>
<body>


 
         
<div align="center">  <?php
    
  
     echo "Type: ".$r['Type'] ;  echo "<br>"; 
                echo  "Fare: ".$r['fare'] ; echo "<br>";  
                echo   "Location: ".$r['Location'] ; echo "<br>";
     
    
    
    ?> </div>
     </body> </html>
    
 
   
 <?php  // echo"<br>";
}

mysqli_close($con);

?>  <input type="submit" name="submit" value="Submit" />    
<input type="reset" name="reset" value="reset" />

 </form>
 
   
    
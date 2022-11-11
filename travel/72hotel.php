<!--<input type="checkbox" value="">  -->
 <html>
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

 <form action="72hotelck.php" method="post"> 
   
 

<?php   

include("dbconnection.php");

$query_s= "SELECT * FROM `hotels`";

$run_query  = mysqli_query($con, $query_s);    //value="<?php echo $mm; 
 
    
while($r=mysqli_fetch_assoc($run_query)){    ?>
 
   <input type="radio" name="hotel" value="<?php echo $r['id']; ?>">  

 
         
<div align="center">  <?php
    
  
     echo "Name: ".$r['Name'] ;  echo "<br>"; 
                echo  "Road: ".$r['Road'] ; echo "<br>";
                echo   "Area: ".$r['Area'] ; echo "<br>";
                echo   "City: ".$r['City'] ; echo "<br>";
                echo   "Telephone Number: ".$r['Telephone_number'] ; echo "<br>";
                                    echo   "Expense: ".$r['Expense'] ; echo "<br>";     
     
    
    
    ?> </div>
      <br><br> 
 
   
 <?php  // echo"<br>";
}
 

?>  <input type="submit" name="submit" value="Submit" />    
<input type="reset" name="reset" value="reset" />

 </form>
 </body> </html>
   
    
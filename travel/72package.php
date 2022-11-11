<!--<input type="checkbox" value="">  -->
 <form action="72packageck.php" method="post"> 
   
 

<?php   

include("dbconnection.php");

$query_s= "SELECT * FROM `packages`";

$run_query  = mysqli_query($con, $query_s);    //value="<?php echo $mm; 
 
    
while($r=mysqli_fetch_assoc($run_query)){    ?>
 
   <input type="radio" name="package" value="<?php echo $r['Code']; ?>">   <html>
<head>
<style>
div {   
  background-color: lightgrey;
  width: 300px;
  border: 10px solid Black;
  padding: 50px;
  margin: 20px;
}
</style>
</head>
<body>


 
         
<div align="center">  <?php
    
  
     echo "Name: ".$r['Name'] ;  echo "<br>";
    echo  "Duration: ".$r['Duration(Days)']." Days" ;  echo "<br>";
                echo  "Offered place no 1 : ".$r['place1'] ; echo "<br>";
                echo   "Offered place no 2 : ".$r['place2'] ; echo "<br>";
                echo   "Offered place no 3 : ".$r['place3'] ; echo "<br>";
                echo   "Price : ".$r['price'] ; echo "<br>";
    
    echo "<br><br>" ;
    
    
    ?> </div>
     </body> </html>
    
 
 
   
 <?php  // echo"<br>";
}

mysqli_close($con);

?>  <input type="submit" name="submit" value="Submit" />    
<input type="reset" name="reset" value="reset" />

 </form>
 
   
    
<!--<input type="checkbox" value="">  -->
<?php session_start();  include("dbconnection.php"); echo $_SESSION['Full_name']; ?> 
 <a href="70logout1.php">logout  </a> 
<form  method="post" action ="7allcity.php">   
        <button  >back</button>
        </form>
 <form action="72check.php" method="post"> 
   
 

<?php

include("dbconnection.php");

$query_s= "SELECT * FROM `tourist_places` WHERE `City` = 'Rajshahi' "; 

$run_query  = mysqli_query($con, $query_s);    //value="<?php echo $mm; 
 
    
while($r=mysqli_fetch_assoc($run_query)){    ?>
 
   <input type="checkbox" name="places[]" value="<?php echo $r['Name']; ?>">   <head>
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
    
  
     echo "Name: ".$r['Name'] ;  echo "<br>";   
                echo   "Area: ".$r['Area'] ; echo "<br>";
                echo   "City: ".$r['City'] ; echo "<br>"; 
                                    echo   "Price: ".$r['Price'] ; echo "<br>";     
     
    
    
    ?> </div>
     </body> </html> <br><br> 
 
   
 <?php  // echo"<br>";
}

mysqli_close($con);

?>
   <input type="submit" name="submit" value="Submit" />
<input type="reset" name="reset" value="reset" />

 </form>
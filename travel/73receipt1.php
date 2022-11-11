 <br><br>  <?php  session_start();  include("dbconnection.php");   
echo "<Strong>Your Selection Code: </strong>"; echo $_SESSION['id2']; echo "<br><br>";
echo "Name: "; echo $_SESSION['Full_name']; echo "<br>";
echo "Email: "; echo $_SESSION['Email']; echo "<br>";  $em=$_SESSION['Email'];

 $sqlu="SELECT * FROM users WHERE users.email = '$em'";
       $runu  = mysqli_query($con, $sqlu);
 

while($re=mysqli_fetch_assoc($runu)){ 
 echo "Building no: "; echo $re['Building_no']; echo "<br>";
echo "Road: "; echo $re['Road']; echo "<br>";
echo "Area: "; echo $re['Area']; echo "<br>";
echo "City: "; echo $re['City']; echo "<br>";
echo "Mobile No: "; echo $re['Mobile_number']; echo "<br>";
echo "Phone No: "; echo $re['Phone_number']; echo "<br>";
echo "Card Name: "; echo $re['Card_name']; echo "<br>";
}
 
?>  <br><br>

<?php     include("dbconnection.php"); 
 
 $t=0;

   $i2=$_SESSION['id2'];


  //tourist_places.price
      $sql31="SELECT * FROM user_selection, multiplaces, tourist_places WHERE user_selection.place_id = multiplaces.id AND multiplaces.pid1=tourist_places.Name AND user_selection.id = $i2";
       $run31  = mysqli_query($con, $sql31);      
  
while($re=mysqli_fetch_assoc($run31)){ 

echo "Selected place-1: ";echo "<br>"; 
   echo $re['Name'];  echo " ----------> "; echo $re['Price'];  echo "<br>";  //echo 3;
    $t=$t+$re['Price'];
}
    

      $sql32="SELECT * FROM user_selection, multiplaces, tourist_places WHERE user_selection.place_id = multiplaces.id AND multiplaces.pid2=tourist_places.Name AND user_selection.id = $i2";
       $run32  = mysqli_query($con, $sql32);      
  
while($re=mysqli_fetch_assoc($run32)){ 

echo "Selected place-2: ";echo "<br>"; 
   echo $re['Name'];  echo " ----------> "; echo $re['Price'];  echo "<br>";  //echo 3;
     $t=$t+$re['Price'];
}
     
      $sql33="SELECT * FROM user_selection, multiplaces, tourist_places WHERE user_selection.place_id = multiplaces.id AND multiplaces.pid3=tourist_places.Name AND user_selection.id = $i2";
       $run33  = mysqli_query($con, $sql33);      
  
while($re=mysqli_fetch_assoc($run33)){ 

echo "Selected place-3: ";echo "<br>"; 
   echo $re['Name'];  echo " ----------> "; echo $re['Price'];  echo "<br>";  //echo 3;
     $t=$t+$re['Price'];
}
     
      $sql34="SELECT * FROM user_selection, multiplaces, tourist_places WHERE user_selection.place_id = multiplaces.id AND multiplaces.pid4=tourist_places.Name AND user_selection.id = $i2";
       $run34  = mysqli_query($con, $sql34);      
  
while($re=mysqli_fetch_assoc($run34)){ 

echo "Selected place-4: ";echo "<br>"; 
   echo $re['Name'];  echo " ----------> "; echo $re['Price'];  echo "<br>";  //echo 3;
     $t=$t+$re['Price'];
}
      $sql35="SELECT * FROM user_selection, multiplaces, tourist_places WHERE user_selection.place_id = multiplaces.id AND multiplaces.pid5=tourist_places.Name AND user_selection.id = $i2";
       $run35  = mysqli_query($con, $sql35);      
  
while($re=mysqli_fetch_assoc($run35)){ 

echo "Selected place-5: ";echo "<br>"; 
   echo $re['Name'];  echo " ----------> "; echo $re['Price'];  echo "<br>";  //echo 3;
     $t=$t+$re['Price'];
}
     
     



 $sql="SELECT * FROM user_selection, transports WHERE user_selection.trasport_id = transports.id AND user_selection.id = $i2";
       $run  = mysqli_query($con, $sql);
 

while($re=mysqli_fetch_assoc($run)){ 

 echo "Transport: ";echo "<br>"; 
   echo $re['Type'];  echo " ----------> "; echo $re['fare'];  echo "<br>";  //echo 3; 
     $t=$t+$re['fare'];
}
     
     $sql1="SELECT * FROM user_selection, hotels WHERE user_selection.hotel_id = hotels.id AND user_selection.id = $i2";
       $run1  = mysqli_query($con, $sql1);
 

while($re=mysqli_fetch_assoc($run1)){ 

echo "Hotel: ";echo "<br>"; 
   echo $re['Name'];  echo " ----------> "; echo $re['Expense'];  echo "<br>";  //echo 3;
     $t=$t+$re['Expense'];
}   
       
     
   $sql2="SELECT * FROM user_selection, packages WHERE user_selection.package_code = packages.code AND user_selection.id = $i2";
       $run2  = mysqli_query($con, $sql2);     
  
while($re=mysqli_fetch_assoc($run2)){ 

echo "Package: ";echo "<br>"; 
   echo $re['Name'];  echo " ----------> "; echo $re['price'];  echo "<br>";  //echo 3;
     $t=$t+$re['price'];
}
  echo "<br><br>";
     
 echo "Total: " ; echo " ----------> "; echo $t;   
     

?>  

<form action="2userlog.php">
  <input type="submit" value="cancel">
</form>



 
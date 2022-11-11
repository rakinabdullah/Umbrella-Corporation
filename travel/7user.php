<?php   include("dbconnection.php"); echo $_SESSION['Full_name']; ?> 
<a href="70logout2.php">logout  </a>  
<?php // echo  $_SESSION['Full_name'];
//session_start();
if ($_SESSION['Email']==true){   $_SESSION['id'];
//include ("70useredit.php"); ?>
     
   
     <form id="ff" method="post" action = "70useredit.php">
     <button>Update my profile</button>
     <button form="ff2">Show my receipt</button> 
</form>

<form id="ff2" method="post" action = "73receipt1.php"> 
</form>
   
   <?php
     
} else {
   
include("70logout2.php");
}
 
?>
 
 
 
 
 <html>
     <head>
         
     </head>
     <body>  <?php     include_once("711u_id.php"); ?>
     <tr>
    <td>       <a href="71dhaka.php"><img src="pic/Dhaka.jpg"  height="250" width="300"   hspace="20" /></a> </td>   
    <td>   <a href="71chittagong.php"><img src="pic/Chittagong.jpg"  height="250" width="300"   hspace="20" /></a> </td>   
    <td>   <a href="71rajshahi.php"><img src="pic/Rajshahi.jpg"  height="250" width="300"  hspace="20"/></a>  </td> 
    <td>  <a href="71sylhet.php"><img src="pic/Sylhet.jpg"  height="250" width="300"  hspace="20"/></a> </td> 
    <td>  <a href="71khulna.php"><img src="pic/Khulna.jpg"  height="250" width="300"  hspace="20" /></a> </td> 
 <td>  <a href="71comilla.php"><img src="pic/Comilla.jpg"  height="250" width="300"   hspace="20"/></a>  </td>  
      </tr>  
      
      
     </body>
     
 </html>

 

 <!--<form  method="post" action = "logout.php">
     <button>logout</button> 
</form>  -->


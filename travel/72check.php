<?php session_start();  include("dbconnection.php"); echo $_SESSION['Full_name']; ?> 
 <a href="70logout1.php">logout  </a> 
  
<?php
 if(!empty($_POST['places'])) {  
     
$place= $_POST['places'];
       $N = count($place);
        echo("<p>You selected $N places(s): ");  
         include ("dbconnection.php");
        
      if($N==5) {  $sql= "INSERT INTO `multiplaces` (`id`, `pid1`, `pid2`, `pid3`, `pid4`, `pid5`) VALUES (NULL, '$place[0]', '$place[1]', '$place[2]', '$place[3]', '$place[4]')";
               $sql1="SELECT * FROM `multiplaces` WHERE `pid1` = '$place[0]' AND `pid2` = '$place[1]' AND `pid3` = '$place[2]' AND `pid4` = '$place[3]' AND `pid5` = '$place[4]' ";
                }
        
        else if($N==4) {   $sql= "INSERT INTO `multiplaces` (`id`, `pid1`, `pid2`, `pid3`, `pid4`, `pid5`) VALUES (NULL, '$place[0]', '$place[1]', '$place[2]', '$place[3]', NULL)";
                        
               $sql1="SELECT * FROM `multiplaces` WHERE `pid1` = '$place[0]' AND `pid2` = '$place[1]' AND `pid3` = '$place[2]' AND `pid4` = '$place[3]'   ";
                       }
        
         else if($N==3)  {  $sql= "INSERT INTO `multiplaces` (`id`, `pid1`, `pid2`, `pid3`, `pid4`, `pid5`) VALUES (NULL, '$place[0]', '$place[1]', '$place[2]', NULL , NULL)";
                          
               $sql1="SELECT * FROM `multiplaces` WHERE `pid1` = '$place[0]' AND `pid2` = '$place[1]' AND `pid3` = '$place[2]'   ";
                         }
        
           else if($N==2)  { $sql= "INSERT INTO `multiplaces` (`id`, `pid1`, `pid2`, `pid3`, `pid4`, `pid5`) VALUES (NULL, '$place[0]', '$place[1]', NULL, NULL , NULL)";
                            
               $sql1="SELECT * FROM `multiplaces` WHERE `pid1` = '$place[0]' AND `pid2` = '$place[1]'   ";
                           }
    
         else if($N==1)   {$sql= "INSERT INTO `multiplaces` (`id`, `pid1`, `pid2`, `pid3`, `pid4`, `pid5`) VALUES (NULL, '$place[0]', NULL, NULL, NULL , NULL)";
                          
                           
               $sql1="SELECT * FROM `multiplaces` WHERE `pid1` = '$place[0]' ";
                          }
        
        else{    
            echo "Sorry! we currently offer atmost 5 places at a time. Thank you!";
            }
         
    if($N<6) {     $run_query= mysqli_query($con, $sql);
       echo "successfully uploaded!.."; 
              
              $run_query  = mysqli_query($con, $sql1);

$m=000;
$result= mysqli_num_rows($run_query);
    // $_SESSION['Email']=$email; 
    while($row=mysqli_fetch_array($run_query)){  
         $m=$row['id'];
    }    
             // session_start();
              $i=$_SESSION['id'];   


$query1="SELECT * FROM `user_selection` WHERE `u_id` = $i";

$run_query1  = mysqli_query($con, $query1);

$i2=000;

 while($row=mysqli_fetch_array($run_query1)){  $i2=$row['id'];      }      
  
  
              
              $sql3= "UPDATE `user_selection` SET `place_id` = $m WHERE `user_selection`.`id` = $i2"; 
 
$_SESSION['id1']=$m; //echo $_SESSION['id1'];
              $_SESSION['id2']=$i2;
              
$run_query2  = mysqli_query($con, $sql3);
              
        include("72hotel.php");
    
    } 
     
 }
else echo("<p><strong>You didn't select any any place.</strong></p>\n");
      
 ?>     
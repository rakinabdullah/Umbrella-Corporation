
<br>
<br>
<?php

$search = $_GET['search'];
echo "<h2>You searched $search </h2>"; 

require_once('dbconnection.php');
$sql = "SELECT * FROM tourist_places WHERE city = '$search';";
$stm = mysqli_prepare($con, $sql);


if($search=="Dhaka")
{
    echo "<h2>Yes, Travel to $search available </h2>";
    echo "<h2>Please register to use our service </h2>";
                         
}           
else
{
    if($search=="Chittagong")

    {
        echo "<h2>Yes, Travel to $search available </h2>";
        echo "<h2>Please register to use our service </h2>";
    }
    
    else
    {
        if($search=="Rajshahi")
        {
            echo "<h2>Yes, Travel to $search available </h2>";
            echo "<h2>Please register to use our service </h2>";
        }

        else
        {
            if($search=="Sylhet")
            {
            echo "<h2>Yes, Travel to $search available </h2>";
            echo "<h2>Please register to use our service </h2>";
            }
            else
            {
                if($search=="Khulna")
                {
                echo "<h2>Yes, Travel to $search available </h2>";
                echo "<h2>Please register to use our service </h2>";
                }
                else
                {
                    if($search=="Comilla")
                    {
                    echo "<h2>Yes, Travel to $search available </h2>";
                    echo "<h2>Please register to use our service </h2>";
                    }
                    else
                    {
                    echo "<h2>Travel service to $search does not exist </h2>";
                    }
                }
            }
        }
    }
}

include("z.html");

?>
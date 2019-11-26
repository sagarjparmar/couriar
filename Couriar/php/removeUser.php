<?php
 include_once "db_config.php";
 if(isset($_POST['id']))
 {
     $query = "DELETE FROM `adminlogin` WHERE `adminlogin`.`aid` = ".$_POST['id'];
     if(mysqli_query($conn,$query))
     {
         echo "data successfully deleted";
     }
     else
     {
         echo mysqli_error($conn);
     }
 }
mysqli_close($conn);
?>
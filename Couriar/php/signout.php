<?php
    setcookie("id","", time() + 3600,"/");
    /*echo "<script>";
    echo "alert('Warning : signout success');";
    echo "</script>";*/
    header ("location: http://localhost/Project/login.php"); //set location
?>
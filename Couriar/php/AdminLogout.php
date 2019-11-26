<?php
session_unset(); 

// destroy the session 
session_destroy(); 
setcookie("aid","", time() + 3600,"/");
header ("location: http://localhost/Project/adminLogin.php"); //set location
finish();
?>
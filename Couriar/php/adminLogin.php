<?php
    include_once "db_config.php";
    session_start();
    if(isset($_POST['uid'])&&isset($_POST['pass']))
    {   
        $sql = "SELECT * FROM `adminlogin` WHERE `email` = '".$_POST['uid']."' AND  `password` = '".$_POST['pass']."'";
        $query = mysqli_query($conn,$sql);
        if(mysqli_num_rows($query))
        {
            while($row = mysqli_fetch_assoc($query))
            {
                // If result matched $myusername and $mypassword, table row must be 1 row
                $_SESSION['aid']=$row['aid'];   
            }
         
            $cookie_name = "aid";
		   $cookie_value = $_SESSION['aid'];
           setcookie($cookie_name, $cookie_value, time() + (1000), "/"); // 86400 = 1 day
           header("location:http://localhost/Project/OrdersManagement.php");

        }else {
           $error = "Your Login Name or Password is invalid";
           header("location:http://localhost/Project/adminLogin.php");
        }
        
    }
?>
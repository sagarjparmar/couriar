<?php
     include_once "db_config.php";
     if(isset($_POST['name']) || isset($_POST['email']) ||isset($_POST['password']) || isset($_POST['permission']))
     {
        $temp = $_POST['name'];
        $name = replace($temp);
        $data = $name." ".$_POST['email']." ".$_POST['password']." ".$_POST['permission'];
        $sql =" INSERT INTO `adminlogin` (`aid`, `adminname`, `email`, `password`, `permission`, `date`, `time`) VALUES (NULL, '$name', '".$_POST['email']."', '".$_POST['password']."', '".$_POST['permission']."', curdate(), curtime());";
        //echo $sql;
        if (mysqli_query($conn, $sql))
        {
            echo true;
        }else {
            echo false;
        }

     }  
     function replace($string)
     {   
         return str_replace("_"," ",$string);
     }
?>
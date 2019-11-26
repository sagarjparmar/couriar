<?php
    include_once "db_config.php";
    if(isset($_POST['name'])&&isset($_POST['phone'])&&isset($_POST['email'])&&isset($_POST['address'])&&isset($_POST['land'])&&isset($_POST['state'])&&isset($_POST['city'])&&isset($_POST['villege'])&&isset($_POST['pincode'])&&isset($_POST['uid']))
    {
        $nname = $_POST['name'];
        $name = replace($nname);//
        $phone = $_POST['phone']; 
        $email = $_POST['email'];
        $naddress = $_POST['address'];
        $address = replace($naddress);//
        $nland = $_POST['land'];
        $land = replace($nland);//
        $nstate = $_POST['state'];
        $state = replace($nstate);//
        $nvillege = $_POST['villege'];
        $villege = replace($nvillege);//
        $ncity = $_POST['city'];
        $city = replace($ncity);//
        $pincode = $_POST['pincode'];
        $uid = $_POST['uid'];
        $sql = "INSERT INTO `address_book` (`name`, `email`, `mobile`, `address`, `landmark`,`state`, `city`, `villege`, `pin_code`, `active`,`uid`) VALUES('$name', '$email', '$phone', '$address','$land', '$state', '$city', '$villege','$pincode', NULL,$uid)";
       // echo $sql;
          $s = mysqli_query($conn,$sql);
        if($s)
        {
            echo true;
        }
        else
        {
            echo false;
        }
    }
    function replace($string)
    {   
        return str_replace("_"," ",$string);
    }
?>
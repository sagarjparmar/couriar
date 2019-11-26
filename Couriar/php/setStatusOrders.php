<?php
    include "db_config.php";
    if(isset($_POST['id'])&&isset($_POST['status']))
    {
        $ccode = "null";
        if(isset($_POST['ccode']))
        {
            $ccode = $_POST['ccode'];
        }
        if(isset($_POST['aid']))
        {
            $aid = $_POST['aid'];
        }
        $status = getQuery($_POST['status']);
        $id = $_POST['id'];
        $sql  =  getSql($status,$id,$ccode);
        $result = mysqli_query($conn,$sql);
        if($result)
        {
            if((mysqli_affected_rows($conn) == 0) && $status == 242)
            {
                echo "incorrect confirmation code...! Request cannot be accepted";
            }
            else if((mysqli_affected_rows($conn) > 0) && $status == 242)
            {
                if(addShipment($id,$aid))
                {
                    echo "Order status changed to".getTrackName($status);
                    echo "And order has been shipped";
                    
                }
            }
            else{
                echo "Order status changed to".getTrackName($status);
            }
        }
        else
        {
            echo mysqli_error($conn);
        }
        
    }
    function getSql($status,$id,$code)
    {
        if($status == 242)
        {
            return  "UPDATE `orders` SET `status` = '$status' WHERE `orders`.`o_id` = $id and `orders`.`ccode`= '$code'";
        }
        else
        {
            return  "UPDATE `orders` SET `status` = '$status' WHERE `orders`.`o_id` = $id";
        }
    }
    function getQuery($t)
    {
        if($t == 241)
        {
            return $t;
        }
        else if($t == 242)
        {
            return $t;
        }else if($t == 243)
        {
            return $t;
        }else if($t == 244)
        {
            return $t;
        }else if($t == 245)
        {
            return $t;
        }
        
    }
    function getTrackName($t)
    {
        if($t == 241)
        {
            return "Requested";
        }
        else if($t == 242)
        {
            return "accepted";
        }else if($t == 243)
        {
            return "cancled";
        }else if($t == 244)
        {
            return "success";
        }else if($t == 245)
        {
            return "Failed";
        }
      
    }
    function addShipment($oid,$aid)
    {
        include "db_config.php";
        $sql = "INSERT INTO `shipment` (`sid`, `oid`, `aid`, `date`, `status`) VALUES (NULL, '$oid', '$aid',curdate(), '501')";
        $result = mysqli_query($conn,$sql);
        if($result)
        { mysqli_close($conn);
                return true;}
        else
        { mysqli_close($conn);
            return false;}
       
    }
?>
<?php
    include_once "db_config.php";
    if(isset($_POST['uid']) && isset($_POST['oid']))
    {
        $sql = "UPDATE `orders` SET `status` = '243', `track` = '257' WHERE `orders`.`o_id` =".$_POST['oid']." AND  `orders`.`uid` = ".$_POST['uid'];
        $query = mysqli_query($conn,$sql);
        if($query)
        {
            echo "your order successfully cancled";
        }
    }
    else
    {
        echo  "your order can't cancled";
    }
?>
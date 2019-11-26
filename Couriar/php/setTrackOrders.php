<?php
    include_once "db_config.php";
    if(isset($_POST['id'])&&isset($_POST['track']))
    {
        $track = getQuery($_POST['track']);
        $id = $_POST['id'];
        $sql  = "UPDATE `orders` SET `track` = '$track' WHERE `orders`.`o_id` = $id";
        if(mysqli_query($conn,$sql))
        {
            echo "tracking ".getTrackName($track)." is seted succesfully.";
        }
        
    }
    function getQuery($t)
    {
        if($t == 251)
        {
            return $t;
        }
        else if($t == 252)
        {
            return $t;
        }else if($t == 253)
        {
            return $t;
        }else if($t == 254)
        {
            return $t;
        }else if($t == 255)
        {
            return $t;
        }
        else if($t == 256)
        {
            return $t;
        }else if($t == 257)
        {
            return $t;
        }
    }
    function getTrackName($t)
    {
        if($t == 251)
        {
            return "waytopick";
        }
        else if($t == 252)
        {
            return "pick";
        }else if($t == 253)
        {
            return "onTheWay";
        }else if($t == 254)
        {
            return "atDestination";
        }else if($t == 255)
        {
            return "Delivered";
        }
        else if($t == 256)
        {
            return "unableToFind";
        }else if($t == 257)
        {
            return "returned";
        }
    }
?>
<?php
    include_once "db_config.php";
    if(isset($_POST['uid'])&&isset($_POST['oid']))
    {
        if($_POST['oid'] ==  null)
        {
            if($_POST['uid'] == 0)
            {
                if($_POST['oid'])
                {
                    $sql = "SELECT * FROM `orders` where `o_id` = ".$_POST['oid'];
                }
                else
                {
                    $sql = "SELECT * FROM `orders` where `o_id` = 0";
                }
            }
            else{
                $sql = "SELECT * FROM `orders` where `uid`=".$_POST['uid'];
            }
        }
        else
        {
            if($_POST['uid'] == 0)
            {
                $sql = "SELECT * FROM `orders` where `o_id` = ".$_POST['oid'];
            }
            else
            {
                $sql = "SELECT * FROM `orders` where `o_id`=".$_POST['oid']." AND `uid`=".$_POST['uid'];
            }
        }
        $query = mysqli_query($conn,$sql);
        if(mysqli_num_rows($query))
        {
            while($row = mysqli_fetch_assoc($query))
            {
                echo "<div class='orderDetailbox'>";
                echo "<div class='upperdiv'>";
                echo "<div class='orderidlbl'>";
                echo "<label class='orderLabel'>Order Id:</label>";
                echo "<span>";
                echo $row['o_id'];
                echo "</span>";
                echo "</div><div class='orderdatebox'><label class='orderLabel'>Date :</label><span>";
                echo $row['date'];
                echo "</span></div><div class='orderstatebox ";
                echo getStatus($row['status']);
                echo "'>";
                echo "<label class='orderLabel ";
                echo "'>Order status :</label><span ";
                echo ">";
                echo getStatus($row['status']);
                echo "</span></div><div class='trackstatebox'><label class='orderLabel'>";
                echo "Track status :";
                echo "</label>";
                echo "<span>";
                getTracking($row['track']);
                echo "</span></div>";
                echo "<div class='trackstatebox'>";
                echo "<label class='orderLabel red'";
                getCanclebtn($row['status'],$row['o_id']);
                echo "</label></div></div><div class='orderdis'><div class='discriptiondiv'><label class='orderLabel'>";
                echo $row['rname'];
                echo "</label></div><div class='discriptiondiv'><label class='orderLabel'>";
                echo $row['rphone'];
                echo "</label></div><div class='discriptiondiv'><label class='orderLabel'>";
                echo $row['remail'];
                echo "</label></div><div class='optiondiv'><a class='viewOrdera' href='http://localhost/Project/ViewOrderDetails.php?oid=";
                echo $row['o_id'];
                echo "'>View Order</a></div></div></div>";
            }
        }
        else
        {
            echo "Search Order Id";
        }
        

        

    }
    mysqli_close($conn);
        function getCanclebtn($orderstatus,$oid)
        {
            if($orderstatus<243)
            {
                echo "onclick='cancleorder($oid)'>";
                echo "Cancel";
            }
            else
            {
                echo ">";
                echo "";
            }
        }
        function getTracking($track)
        {
            if($track == 251)
            {
                echo "Way to pick";
            }else if($track == 252)
            {
                echo "Picked";
            }else if($track == 253)
            {
                echo "On The Way";
            }else if($track == 254)
            {   
                echo "At Destination";
            }else if($track == 255)
            {
                echo "Delivered";
            }else if($track == 256)
            {  
                echo "Not Found";
            }else if($track == 257)
            {
                echo "Returned";
            }
        }
        function getStatus($state)
        {
            if($state == 241)
            {
                return "Requested";
            }else if($state == 242)
            {
                return "Accepted";
            }else if($state == 243)
            {
                return "Cancel";
            }else if($state == 244)
            {
                return "Success";
            }else if($state == 245)
            {
                return "Failed";
            }
        }
    
?>
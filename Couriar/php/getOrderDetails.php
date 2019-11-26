<?php
    include_once "db_config.php";
    if(isset($_POST['id']) && isset($conn))
    {
        $id = $_POST['id'];
        $sql = "SELECT `orders`.*, `login`.`uname` FROM `orders` INNER JOIN `login` ON `login`.`id` = `orders`.`uid` where orders.o_id = $id";
        if($result = mysqli_query($conn,$sql))
        {
            if(mysqli_num_rows($result))
            {
                while($row = mysqli_fetch_assoc($result))
                {
                    $data['oid']=$row['o_id'];
                    $data['uid']=$row['uid'];
                    $data['uname']=$row['uname'];
                    $data['sadd']=$row['sname'].", ".$row['sphone'].", ".$row['semail'].", ".$row['saddress'].", ".$row['sland'].", ".$row['sstate'].", ".$row['scity'].", ".$row['svillege'].", ".$row['spincode'];
                    $data['radd']=$row['rname'].", ".$row['rphone'].", ".$row['remail'].", ".$row['raddress'].", ".$row['rland'].", ".$row['rstate'].", ".$row['rcity'].", ".$row['rvillege'].", ".$row['rpincode'];
                    $data['dtype']=getDeliveryType($row['dtypet']);
                    $data['dcharge'] = $row['dtype'];
                    $data['stype']=$row['psizet'];
                    $data['scharge']=$row['psize'];
                    $data['wtype']=$row['pweightt'];
                    $data['wcharge']=$row['pweight'];
                    $data['protact']=$row['protact'];
                    $data['gift']=$row['gift'];
                    $data['discount']=$row['discount'];
                    $data['tax']=$row['tax'];
                    $data['tcharge']=$row['total'];
                    $data['status']=$row['status'];
                    $data['track']=$row['track'];    
                    $data['date']=$row['date'];
                }
            }
        }
        echo json_encode($data);
    }
    function getDeliveryType($data)
    {
        if($data == 'A')
        {
            return "NORMAL";
        }
        else if($data == 'B')
        {
            return "FAST";
        }
        else if($data == 'C')
        {
            return "SUPER FAST";
        }
        else if($data == 'D')
        {
            return "QUICK";
        }
    }
?>
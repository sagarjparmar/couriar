<?php
    include_once "db_config.php";
    if(isset($_POST['id']))
    {
        $sql = "SELECT * FROM `adminlogin` WHERE aid = ".$_POST['id'];
        $query = mysqli_query($conn,$sql);
        if(mysqli_num_rows($query))
        {
            while($row = mysqli_fetch_assoc($query))
            {
                $data['id'] = $row['aid'];
                $data['name'] = $row['adminname'];
                $data['email'] = $row['email'];
                $data['permission']=$row['permission'];
            }
        }
        echo json_encode($data);
    }
?>
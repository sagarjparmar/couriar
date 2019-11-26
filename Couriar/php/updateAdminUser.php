<?php
    include_once "db_config.php";
    if(isset($_POST['id']))
    {
        $query = getSql();
        if(mysqli_query($conn,$query))
        {
            echo "data successfully updated";
        }
        else
        {
            echo mysqli_error($conn);
        }
    }
    mysqli_close($conn);
    function getSql()
    {
        $sql = "";
        if(isset($_POST['password']) && isset($_POST['permission']))
        {
            if($_POST['password'] != "" && $_POST['permission'] == "")
            {
                $sql = "UPDATE `adminlogin` SET `password` = '".$_POST['password']."' WHERE `adminlogin`.`aid` = ".$_POST['id'];
            }
            else if($_POST['permission'] != "" && $_POST['password'] == "")
            {
                $sql = "UPDATE `adminlogin` SET `permission` = '".$_POST['permission']."' WHERE `adminlogin`.`aid` = ".$_POST['id'];
            }else if($_POST['password'] != "" && $_POST['permission'] != "")
            {
                $sql = "UPDATE `adminlogin` SET `password` = ".$_POST['password']."', `permission` = '".$_POST['permission']."' WHERE `adminlogin`.`aid` =".$_POST['id'];
            }
        }
        return $sql;
    }
?>
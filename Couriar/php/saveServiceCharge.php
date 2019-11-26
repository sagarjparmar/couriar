<?php
    include_once "db_config.php";
    if(isset($_POST['dn'])&&isset($_POST['df'])&& isset($_POST['ds'])&&isset($_POST['dq'])&&isset($_POST['sn'])&&isset($_POST['sm'])&&isset($_POST['sb'])&&isset($_POST['wl'])&&isset($_POST['wm'])&&isset($_POST['wb'])&&isset($_POST['wh'])&&isset($_POST['p'])&&isset($_POST['g'])&&isset($_POST['t'])&&isset($_POST['d']))
    {
        echo $_POST['dn']." ".$_POST['df']." ".$_POST['ds']." ".$_POST['dq']." ".$_POST['sn']." ".$_POST['sm']." ".$_POST['sb']." ".$_POST['wl']." ".$_POST['wl']." ".$_POST['wm']." ".$_POST['wb']." ".$_POST['wh']." ".$_POST['p']." ".$_POST['g']." ".$_POST['t']." ".$_POST['d'];
        $sql = "UPDATE `servicecharge` SET `dTypeNormal` = '".$_POST['dn']."', `dTypeFast` = '".$_POST['df']."', `dTypeSuper` = '".$_POST['ds']."', `dTypeQuick` = '".$_POST['dq']."', `pSizeNormal` = '".$_POST['sn']."', `pSizeMedium` = '".$_POST['sm']."', `pSizeBig` = '".$_POST['sb']."', `pWeightLow` = '".$_POST['wl']."', `pWeightMedium` = '".$_POST['wm']."', `pWeightBig` = '".$_POST['wb']."', `pweightHavy` = '".$_POST['wh']."', `pProtect` = '".$_POST['p']."', `pGift` = '".$_POST['g']."', `tax` = '".$_POST['t']."', `Discount` = '".$_POST['d']."' WHERE `servicecharge`.`p_id` = 1;";
        $query = mysqli_query($conn,$sql);
        if($query)
        {
            header("location: http://localhost/Project/setCharges.php");
        }
        else
        {
            echo mysqli_error($conn);
        }
    }
    else
    {
        echo "hello";
    }
?>
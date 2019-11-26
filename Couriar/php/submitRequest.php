<?php
    include_once "db_config.php";
    if(isset($_POST['sName'])&&
    isset($_POST['sPhone'])&&
    isset($_POST['sEmail'])&&
    isset($_POST['sAddress'])&&
    isset($_POST['sLand'])&&
    isset($_POST['sState'])&&
    isset($_POST['sCity'])&&
    isset($_POST['sVillege'])&&
    isset($_POST['sPincode'])&&
    isset($_POST['rName'])&&
    isset($_POST['rPhone'])&&
    isset($_POST['rEmail'])&&
    isset($_POST['rAddress'])&&
    isset($_POST['rLand'])&&
    isset($_POST['rState'])&&
    isset($_POST['rCity'])&&
    isset($_POST['rVillege'])&&
    isset($_POST['rPincode'])&&
    isset($_POST['dType'])&&
    isset($_POST['pSize'])&&
    isset($_POST['pWeight'])&&
    isset($_POST['sf'])&&
    isset($_POST['gbox'])
    )
    {
        //get price details
        $sql = "SELECT * FROM `servicecharge`";
        $query = mysqli_query($conn,$sql);
        if(mysqli_num_rows($query))
        {
             while($row = mysqli_fetch_assoc($query))
            {
                $result['dA'] = $row['dTypeNormal'];
                $result['dB'] = $row['dTypeFast'];
                $result['dC'] = $row['dTypeSuper'];
                $result['dD'] = $row['dTypeQuick'];
                $result['sA'] = $row['pSizeNormal'];
                $result['sB'] = $row['pSizeMedium'];
                $result['sC'] = $row['pSizeBig'];
                $result['wA'] = $row['pWeightLow'];
                $result['wB'] = $row['pWeightMedium'];
                $result['wC'] = $row['pWeightBig'];
                $result['wD'] = $row['pweightHavy'];
                $result['protact'] = $row['pProtect'];
                $result['gift'] = $row['pGift'];
                $result['tax'] = $row['tax'];
                $result['discount'] = $row['Discount'];    
            }
        }

        $dTypeCharge = "00.00";
        $pSizeCharge = "00.00";
        $pWeightCharge = "00.00";
        $pPro="00.00";
        $pGift = "00.00";
        $Discount = "0";
        $Tax = "0";
        if($_POST['dType'] == 'A')
        {$dTypeCharge  =   $result['dA'];}
        else if($_POST['dType'] == 'B')
        {$dTypeCharge  =   $result['dB'];}
        else if($_POST['dType'] == 'C')
        {$dTypeCharge  =   $result['dC'];}
        else if($_POST['dType'] == 'D')
        {$dTypeCharge  =   $result['dD'];}

        if($_POST['pSize'] == 'A')
        {$pSizeCharge  =   $result['sA'];}
        else if($_POST['pSize'] == 'B')
        {$pSizeCharge  =   $result['sB'];}
        else if($_POST['pSize'] == 'C')
        {$pSizeCharge  =   $result['sC'];}
        
        if($_POST['pWeight'] == 'A')
        {$pWeightCharge  =   $result['wA'];}
        else if($_POST['pWeight'] == 'B')
        {$pWeightCharge  =   $result['wB'];}
        else if($_POST['pWeight'] == 'C')
        {$pWeightCharge  =   $result['wC'];}
        else if($_POST['pWeight'] == 'D')
        {$pWeightCharge  =   $result['wD'];}

        if($_POST['sf'] == '1')
        {
            $pPro= $result['protact'];
        }
        else
        {
            $pPro = 0;
        }

        if($_POST['gbox'] == '1')
        {
            $pGift= $result['gift'];
        }
        else
        {
            $pGift = 0;
        }
        $CCode =generateRandomString();
        $total = $dTypeCharge + $pSizeCharge + $pWeightCharge + $pPro + $pGift;
        $tax = ($total* $result['tax'])/100;
        $discount = (($total+$tax)* $result['discount'])/100;
        $gTotal = $total+$tax-$discount;
        if(isset($_COOKIE['id']))
        {
            $uid = $_COOKIE['id'];
        }
        else
        {
            $uid = 0;
        }
        //echo $gTotal;
        $sql2 = "INSERT INTO `orders` (`o_id`, `time`, `date`, `uid`, `sname`, `sphone`, `semail`, `saddress`, `sland`, `sstate`, `scity`, `svillege`, `spincode`, `rname`, `rphone`, `remail`, `raddress`, `rland`, `rstate`, `rcity`, `rvillege`, `rpincode`,`dtypet`,`dtype`,`psizet`, `psize`,`pweightt`, `pweight`, `protact`, `gift`, `discount`, `tax`, `total`, `status`, `track`, `ccode`) VALUES (NULL, curtime(), curdate(), '$uid', '".$_POST['sName']."', '".$_POST['sPhone']."', '".$_POST['sEmail']."', '".$_POST['sAddress']."', '".$_POST['sLand']."', '".$_POST['sState']."', '".$_POST['sCity']."', '".$_POST['sVillege']."', '".$_POST['sPincode']."', '".$_POST['rName']."', '".$_POST['rPhone']."', '".$_POST['rEmail']."', '".$_POST['rAddress']."', '".$_POST['rLand']."', '".$_POST['rState']."', '".$_POST['rCity']."', '".$_POST['rVillege']."', '".$_POST['rPincode']."','".$_POST['dType']."','$dTypeCharge','".$_POST['pSize']."','$pSizeCharge','".$_POST['pWeight']."','$pWeightCharge ', '$pPro', '$pGift', '$discount', '$tax', '$gTotal', 241, 251, '$CCode');";
        
        if (mysqli_query($conn, $sql2)) {
            $last_id = mysqli_insert_id($conn);
            echo "New record created successfully. Last inserted ID is: " . $last_id;
            session_start();
            $_SESSION['oid']=$last_id;
           // echo $_SESSION['oid'];
            header("location:http://localhost/Project/submitOrder.php");
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            header("location:http://localhost/Project/fillCouriarDetails.php");
        }
    }
    else
    {
        header("location:http://localhost/Project/reuest.php");
    }
    function testData()
    {
        echo"<hr>";
        echo $_POST['sName'];
        echo $_POST['sPhone'];
        echo $_POST['sEmail'];
        echo $_POST['sAddress'];
        echo $_POST['sLand'];
        echo $_POST['sState'];
        echo $_POST['sCity'];
        echo $_POST['sVillege'];
        echo $_POST['sPincode'];
        echo "<hr>";
        echo $_POST['rName'];
        echo $_POST['rPhone'];
        echo $_POST['rEmail'];
        echo $_POST['rAddress'];
        echo $_POST['rLand'];
        echo $_POST['rState'];
        echo $_POST['rCity'];
        echo $_POST['rVillege'];
        echo $_POST['rPincode'];
        echo "<hr>";
        echo $_POST['dType'];
        echo $_POST['pSize'];
        echo $_POST['pWeight'];
        echo $_POST['sf'];
        echo $_POST['gbox'];
    }
    function generateRandomString($length = 5) {
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
?>
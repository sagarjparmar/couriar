<?php
    include "db_config.php";
    if(isset($_POST['size']) && isset($_POST['weight']) && isset($_POST['ostate']) && isset($_POST['tstate']) &&isset($_POST['oid']))
    {
        $size = getSizePrice($_POST['size']);
        $weight = getWeightPrice($_POST['weight']);
        $delivery = getDeliveryCharges($_POST['oid']);
        $discount =  getDiscount();
        $tax = getTax();
        $protact = getProtactCharges($_POST['oid']);
        $gift = getGiftCharges($_POST['oid']);
        $total = $size + $weight + $delivery + $protact + $gift;
        $taxCharge = ($total*$tax) / 100;
        $discountCharge = (($total+$tax)*$discount)/100;
        $subtotal = $total + $tax - $discount;
      //  echo "$size  $weight $delivery $discount $tax $protact $gift $total $taxCharge $discountCharge $subtotal";
        $sql = "UPDATE `orders` SET `psizet` = '".$_POST['size']."', `psize` = '$size', `pweightt` = '".$_POST['weight']."', `pweight` = '$weight',`discount` = '$discountCharge', `tax` = '$taxCharge',`total`='$subtotal',`status`='".$_POST['ostate']."',`track`='".$_POST['tstate']."' WHERE `orders`.`o_id` = ".$_POST['oid'].";";
        $query = mysqli_query($conn,$sql);
        if($query)
        {echo true;}
        else
        {echo false;}
        mysqli_close($conn);
    }
    else{
        echo "not working";
    }

    function getSizePrice($size)
    {
        $sizecharge = "";
        include "db_config.php";
        if($size == 'A'){ $sizecharge = "pSizeNormal";}
        else if($size == 'B'){ $sizecharge = "pSizeMedium"; }
        else if($size == 'C'){ $sizecharge = "pSizeBig"; }
        $sql = "SELECT `$sizecharge` FROM `servicecharge`";
        $query = mysqli_query($conn,$sql);
        if(mysqli_num_rows($query))
        {
            while($row = mysqli_fetch_assoc($query))
            {
                mysqli_close($conn);
                return $row[$sizecharge];
            }
        }
       
    }
    function getWeightPrice($weight)
    {
        include "db_config.php";
        if($weight == 'A'){ $weightcharge = "pWeightLow";}
        else if($weight == 'B'){ $weightcharge = "pWeightMedium"; }
        else if($weight == 'C'){ $weightcharge = "pWeightBig"; }
        else if($weight == 'D'){ $weightcharge = "pweightHavy"; }
        $sql = "SELECT `$weightcharge` FROM `servicecharge`";
        $query = mysqli_query($conn,$sql);
        if(mysqli_num_rows($query))
        {
            while($row = mysqli_fetch_assoc($query))
            {
                mysqli_close($conn);
                return $row[$weightcharge];
            }
        }
    }
    function getDeliveryCharges($oid)
    {
        include "db_config.php";
        $sql = "SELECT dtype FROM `orders` WHERE o_id = $oid";
        $query = mysqli_query($conn,$sql);
        if(mysqli_num_rows($query))
        {
            while($row = mysqli_fetch_assoc($query))
            {
                mysqli_close($conn);
                return $row['dtype'];
            }
        }
    }
    function getDiscount()
    {
        include "db_config.php";
        $sql = "SELECT Discount FROM `servicecharge`";
        $query = mysqli_query($conn,$sql);
        if(mysqli_num_rows($query))
        {
            while($row = mysqli_fetch_assoc($query))
            {
                mysqli_close($conn);
                return $row['Discount'];
            }
        }
    }
    function getTax()
    {
        include "db_config.php";
        $sql = "SELECT tax FROM `servicecharge`";
        $query = mysqli_query($conn,$sql);
        if(mysqli_num_rows($query))
        {
            while($row = mysqli_fetch_assoc($query))
            {
                mysqli_close($conn);
                return $row['tax'];
            }
        }
    }
    function getProtactCharges($oid)
    {
        include "db_config.php";
        $sql = "SELECT protact FROM `orders` WHERE o_id = $oid";
        $query = mysqli_query($conn,$sql);
        if(mysqli_num_rows($query))
        {
            while($row = mysqli_fetch_assoc($query))
            {
                mysqli_close($conn);
                return $row['protact'];
            }
        }
    }
    function getGiftCharges($oid)
    {
        include "db_config.php";
        $sql = "SELECT gift FROM `orders` WHERE o_id = $oid";
        $query = mysqli_query($conn,$sql);
        if(mysqli_num_rows($query))
        {
            while($row = mysqli_fetch_assoc($query))
            {
                mysqli_close($conn);
                return $row['gift'];
            }
        }
    }
?>
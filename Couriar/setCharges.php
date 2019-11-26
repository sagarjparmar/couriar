<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>CouriarAdmin - Service Charges</title>
        <link rel="icon" href="src/icon.png">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content ="width=device-width,initial-scale=1,user-scalable=yes" />
        <link rel="stylesheet" type="text/css" media="screen" href="css/scrollbar.css" />
        <link rel="stylesheet" type="text/css" media="screen" href="css/ServiceCharges.css" />
        <link rel="stylesheet" type="text/css" media="screen" href="css/AdminHeader.css" />

    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCeIfa3R8iFKwnctfQo-3WZkGkmJyJE878&libraries=places"></script> 
    <script src="js/account.js"></script>
    </head>
    <?php include_once "AdminHeader.php"; ?>
    <?php 
        include_once "php/db_config.php";
        $sql  = "SELECT * FROM `servicecharge`";
        $query = mysqli_query($conn,$sql);
        if(mysqli_num_rows($query))
        {
            while($row = mysqli_fetch_assoc($query))
            {
                $dNormal = $row['dTypeNormal'];
                $dFast = $row['dTypeFast'];
                $dSFast = $row['dTypeSuper'];
                $dQuick =$row['dTypeQuick'];
                $sSmall = $row['pSizeNormal'];
                $sMedium = $row['pSizeMedium'];
                $sBig =$row['pSizeBig'];
                $wLow = $row['pWeightLow'];
                $wMedium = $row['pWeightMedium'];
                $wBig = $row['pWeightBig'];
                $wHeavy = $row['pweightHavy'];
                $Protact = $row['pProtect'];
                $gift = $row['pGift'];
                $tax= $row['tax'];
                $discount = $row['Discount'];
            }
        }
    ?>
    <body>
        <form method="POST" action="php/saveServiceCharge.php">
        <div class="chargemaincontainer">
            
              <div class="chargecontainer">
                    <div class="chargeheader">
                        <h1>Service Charges</h1>
                    </div>
                    <div class="deliverytypecontainer">
                        <div class="headtitle">
                            <label>Delivery Charges:</label>
                        </div>
                        <div class="optionscontainer">
                            <div class="optiontitlecontainer">
                                <label>Normal Delivery(Rs)</label>
                            </div>
                            <div class="inputcontainer">
                                <input type="number" name="dn" value="<?php echo $dNormal; ?>" required>
                            </div>
                        </div>
                        <div class="optionscontainer">
                            <div class="optiontitlecontainer">
                                <label>FAST Delivery(Rs)</label>
                            </div>
                            <div class="inputcontainer">
                                <input type="number" name="df" value="<?php echo $dFast; ?>" required>
                            </div>
                        </div>
                        <div class="optionscontainer">
                            <div class="optiontitlecontainer">
                                <label>SUPER-F  Delivery(Rs)</label>
                            </div>
                            <div class="inputcontainer">
                                <input type="number" name="ds" value="<?php echo $dSFast; ?>" required>
                            </div>
                        </div>
                        <div class="optionscontainer">
                            <div class="optiontitlecontainer">
                                <label>QUICK Delivery(Rs)</label>
                            </div>
                            <div class="inputcontainer">
                                <input type="number" name="dq" value="<?php echo $dQuick; ?>" required>
                            </div>
                        </div>
                    </div>
                    <div class="deliverytypecontainer topspace">
                        <div class="headtitle">
                            <label>Size Charges:</label>
                        </div>
                        <div class="optionscontainer1">
                            <div class="optiontitlecontainer">
                                <label>NORMAL size(Rs)</label>
                            </div>
                            <div class="inputcontainer">
                                <input type="number" name="sn" value="<?php echo $sSmall; ?>" required>
                            </div>
                        </div>
                        <div class="optionscontainer1">
                            <div class="optiontitlecontainer">
                                <label>MEDIUM size(Rs)</label>
                            </div>
                            <div class="inputcontainer">
                                <input type="number" name="sm" value="<?php echo $sMedium; ?>" required>
                            </div>
                        </div>
                        <div class="optionscontainer1">
                            <div class="optiontitlecontainer">
                                <label>SMALL size(Rs)</label>
                            </div>
                            <div class="inputcontainer">
                                <input type="number" name="sb" value="<?php echo $sBig; ?>" required>
                            </div>
                        </div>
                    </div>
                    <div class="deliverytypecontainer topspace">
                        <div class="headtitle">
                            <label>Weight Charges:</label>
                        </div>
                        <div class="optionscontainer">
                            <div class="optiontitlecontainer">
                                <label>LOW weight(Rs)</label>
                            </div>
                            <div class="inputcontainer">
                                <input type="number" name="wl" value="<?php echo $wLow; ?>" required>
                            </div>
                        </div>
                        <div class="optionscontainer">
                            <div class="optiontitlecontainer">
                                <label>MEDIUM weight(Rs)</label>
                            </div>
                            <div class="inputcontainer">
                                <input type="number" name="wm" value="<?php echo $wMedium; ?>" required>
                            </div>
                        </div>
                        <div class="optionscontainer">
                            <div class="optiontitlecontainer">
                                <label>BIG weight(Rs)</label>
                            </div>
                            <div class="inputcontainer">
                                <input type="number" name="wb" value="<?php echo $wBig; ?>" required>
                            </div>
                        </div>
                        <div class="optionscontainer">
                            <div class="optiontitlecontainer">
                                <label>HEAVY weight(Rs)</label>
                            </div>
                            <div class="inputcontainer">
                                <input type="number" name="wh" value="<?php echo $wHeavy; ?>" required>
                            </div>
                        </div>
                    </div>
                    <div class="deliverytypecontainer topspace">
                        <div class="headtitle">
                            <label>Extra Service:</label>
                        </div>
                        <div class="optionscontainer">
                            <div class="optiontitlecontainer">
                                <label>Protaction(Rs)</label>
                            </div>
                            <div class="inputcontainer">
                                <input type="number" name="p" value="<?php echo $Protact; ?>" required>
                            </div>
                        </div>
                        <div class="optionscontainer">
                            <div class="optiontitlecontainer">
                                <label>Gift Service(Rs)</label>
                            </div>
                            <div class="inputcontainer">
                                <input type="number" name="g" value="<?php echo $gift; ?>" required>
                            </div>
                        </div>
                        <div class="optionscontainer">
                            <div class="optiontitlecontainer">
                                <label>tax(%)</label>
                            </div>
                            <div class="inputcontainer">
                                <input type="number" name="t" value="<?php echo $tax; ?>" required>
                            </div>
                        </div>
                        <div class="optionscontainer">
                            <div class="optiontitlecontainer">
                                <label>Discount(%)</label>
                            </div>
                            <div class="inputcontainer">
                                <input type="number" name="d" value="<?php echo $discount; ?>" required>
                            </div>
                        </div>
                    </div>
                    <div class="submitContainer topspace">
                        <input type="submit" value="Update">
                    </div>
                </div>
                  
        </div>
</form>
    </body>
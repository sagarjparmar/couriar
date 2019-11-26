<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Couriar -View Order Details</title>
    <link rel="icon" href="src/icon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content ="width=device-width,initial-scale=1,user-scalable=yes" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/newRequest.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/scrollbar.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/footer.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/account.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/CouriarDetails.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/ordersuccess.css" />
    <link rel="stylesheet" type="text/css" media="print" href="css/ordersuccess.css" />
    <link rel="stylesheet" type="text/css" media="print" href="css/CouriarDetails.css" />

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCeIfa3R8iFKwnctfQo-3WZkGkmJyJE878&libraries=places"></script> 
    <script src="js/account.js"></script>
</head>
<body>
<?php include_once 'header.php'; ?>
    <?php
        include_once "php/db_config.php";
        if(isset($_GET['oid']))
        {
            $sql ="SELECT * FROM `orders` where o_id = ".$_GET['oid'];
            //echo $sql;
            $result = mysqli_query($conn,$sql);
            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    $sname = $row['sname'];
                    $sphone =$row['sphone'];
                    $semail =$row['semail'];
                    $saddress = $row['saddress'];
                    $sland = $row['sland'];
                    $sstate = $row['sstate'];
                    $scity = $row['scity'];
                    $svillege = $row['svillege'];
                    $spincode = $row['spincode'];
                    $rname = $row['rname'];
                    $rphone =$row['rphone'];
                    $remail =$row['remail'];
                    $raddress = $row['raddress'];
                    $rland = $row['rland'];
                    $rstate = $row['rstate'];
                    $rcity = $row['rcity'];
                    $rvillege = $row['rvillege'];
                    $rpincode = $row['rpincode'];
                    $dtype = $row['dtype'];
                    $psize = $row['psize'];
                    $pweight = $row['pweight'];
                    $ppro = $row['protact'];
                    $pgift = $row['gift'];
                    $tax = $row['tax'];
                    $discount = $row['discount'];
                    $total = $row['total'];
                    $oid = $row['o_id'];
                    $status = $row['status'];
                    $uid = $row['uid'];
                    $date = $row['date'];
                    $time = $row['time'];
                    $track = $row['track'];
                    $ccode = $row['ccode'];
                    $dTypet = $row['dtypet'];
                    $psizet =$row['psizet'];
                    $pweightt = $row['pweightt'];
                }
            } else {
                
            }
            $type = setDType($dTypet);
            $size = setSize($psizet,$pweightt); 
            
        }
        function setSize($psizet,$pweightt)
        {
            if($psizet == 'A')
            {$s = "SMALL";}
            else if($psizet == 'B')
            {$s = "NORMAL";}
            else if($psizet == 'C')
            {$s = "BIG";}

            if($pweightt == 'A')
            {$w = "LOW";}
            else if($pweightt == 'B')
            {$w = "MEDIUM";}
            else if($pweightt == 'C')
            {$w = "HEAVY";}
            else if($pweightt == 'D')
            {$w = "TOHEAVY";}
            return $s."/".$w;
        }
        function setDType($dTypet)
        {
            if($dTypet == 'A')
            {return("NORMAL");}
            else if($dTypet == 'B')
            {return("FAST");}
            else if($dTypet == 'C')
            {return("SUPER FAST");}
            else if($dTypet == 'D')
            {return("QUICK");}
        }
        function trackDis($track)
        {
            if($track == 251)
            {
                $dis = "Our couriar boy are on the way to pick your parcel";
            }
            else if($track == 252)
            {
                $dis = "we are picked your parcel";
                
            }else if($track == 253)
            {
                $dis = "your parcel are on the way";
            }else if($track == 254)
            {   
                $dis = "your parcel are near resivers address";
            }else if($track == 255)
            {
                $dis ="your parcel successfully delivered";
            }else if($track == 257)
            {
                $dis = "your parcel are cancled or returned to you";
            }
            else if($track == "notfound")
            {
                $dis = "we cant locate recievers address,we are trying to contact from mobile number and email";
            }
            return $dis;
        }
        function statusDis($status)
        {
            if($status == 241)
            {
                $dis = "Please pay couriar bill to our couriar boy after Confirm Confirmation Id from Couriar boy.";
                
            }else if($status ==243)
            {   
                $dis = "Your Couriar has been cancled."; //fill canclation time
            }else if($status == 243)
            {
                $dis = "Your couriar has been returned"; //fill retrned time
            }else if($status == 244)
            {
                $dis = "your parcel delivered successfully";        ///fill delivery date and time
            }
        }
        
    ?>
    <div class="main-container">
        <div class="detail-fill-container">
            <div class="couriar_discription_container" id="bill">
                <div class="couriar_description_title">
                        <h2 class="couriar_descrition_title">Order Details</h2>
                </div>
               <div class="Order_instruction">
                    <li class="OInstruct"><?php echo trackDis($track); ?></li>
                    <li class="OInstruct">Please pay couriar bill to our couriar boy after Confirm Confirmation Id from Couriar boy.</li>
                </div>
                <div class="Order_details">
                    <div class="Order_IDdiv">
                        <li class="disOId">Order Id : <label><?php echo $oid; ?></label></li>                
                    </div>
                    <div class="Order_TimeDiv">
                        <li class="disOId">Order Time : <label><?php echo "$date, $time"; ?></label></li>                
                    </div>
                </div>
                <div class="Address_display">
                    <div class="AddressDiv">
                        <div class="AddressToFromDiv">
                            <div class="AddressTitle">
                                <label>Sender Address</label>                
                            </div>
                            <div class="AddressDis">
                                <label class="lblAdd" id="rname"><?php echo $sname; ?></label>
                                <label class="lblAdd" id="rphone"><?php echo $sphone; ?></label>
                                <label class="lblAdd" id="radd"><?php echo "$semail,<br>$saddress, $sland, $svillege, $scity, $sstate, $spincode"//882,rohitvas, khutyamaba, pipalgabhan, chikhli, gujrat, 396521 ?></label>
                            </div>
                        </div>
                        <div class="AddressToFromDiv">
                            <div class="AddressTitle">
                                <label>Receiver Address</label>                
                            </div>
                            <div class="AddressDis">
                                <label class="lblAdd" id="rname"><?php echo $rname; ?></label>
                                <label class="lblAdd" id="rphone"><?php echo $rphone;?></label>
                                <label class="lblAdd" id="radd"><?php echo "$remail,<br>$raddress, $rland, $rvillege, $rcity, $rstate, $rpincode"//882,rohitvas, khutyamaba, pipalgabhan, chikhli, gujrat, 396521 ?></label>
                            </div>
                        </div>
                    </div>
                    <div class="ChargesDiv">
                        <div class="ChargeTitle">
                            <label>Charges</label>                
                        </div>
                        <div class="ChargesDetail">
                        <div class="display_charges_div"><div class="charges_taga"><label id="dtypelbl">Service Type <?php echo $type; ?></label></div><div class="pricetaga"><label id="setSerCh"><?php echo $dtype; ?></label><label>.Rs</label></div></div><!-- delivery type charges -->
                                    <div class="display_charges_div"><div class="charges_taga"><label id="psizelbl">Size <?php echo $size;?></label></div><div class="pricetaga"><label id="setSzCh"><?php echo $psize+$pweight; ?></label><label>.Rs</label></div></div><!-- parcel size and weight charges -->
                                    <div class="display_charges_div"><div class="charges_taga"><label id="pproclbl">Protact/gift Charge</label></div><div class="pricetaga"><label id="setProCh"><?php echo $ppro+$pgift; ?></label><label>.Rs</label></div></div> <!-- parcel protection charges -->
                                    <div class="display_charges_div"><div class="charges_taga"><label id="taxdislbl">Extra Services Charges</label></div><div class="pricetaga"><label id="setTaxCh"><?php echo $tax; ?></label>.Rs<label></label></div></div> <!-- extra services -->
                                    <div class="display_charges_div"><div class="charges_taga"><label id="extralbl"> Discount </label></div><div class="pricetaga"><label id="setDisTaxCh"><?php echo $discount; ?></label>.Rs<label></label></div></div> <!-- tax and discounts -->
                                    <hr color="black">
                                    <div class="display_total_charges_div"><div class="charges_taga"><label id="ttlchlbl">Approximate Total Charges</label></div><div class="pricetaga"><label id="totallbl"><?php echo $total; ?></label><label>.Rs</label></div></div>
                        </div>
                    </div>        
                </div>
                <div class="btnCanceldiv">
                    <div class="div_confirm_order"> <li class="disOId">Confirmation Id : <label><?php echo $ccode; ?></label></li>    </div>
                    <div class="div_confirm_order"><button type=""  class="btnPrint" id="" onclick="javascript:window.print()" title="Print Order" style="background: #fff url('src/print.svg') no-repeat; padding:5px; background-size:20%; background-position: 5%">Print</button>
        
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<?php
    include_once "footer.php";
?>
</html>
<script>

</script>
<?php

?>
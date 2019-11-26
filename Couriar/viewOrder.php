<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>CouriarAdmin - Orders managment</title>
        <link rel="icon" href="src/icon.png">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content ="width=device-width,initial-scale=1,user-scalable=yes" />
        <link rel="stylesheet" type="text/css" media="screen" href="css/scrollbar.css" />
        <link rel="stylesheet" type="text/css" media="screen" href="css/viewOrder.css" />
        <link rel="stylesheet" type="text/css" media="screen" href="css/AdminHeader.css" />
        <link rel="stylesheet" type="text/css" media="print" href="css/viewOrder.css" />
        <link rel="stylesheet" type="text/css" media="print" href="css/CouriarDetails.css" />

    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCeIfa3R8iFKwnctfQo-3WZkGkmJyJE878&libraries=places"></script> 
    <script src="js/account.js"></script>
    </head>
    <?php include_once "AdminHeader.php"; ?>
    <?php include_once "php/db_config.php"; 
        if(isset($_GET['oid']))
        {
            $sql = "SELECT `orders`.*, `login`.`uname` FROM `orders` INNER JOIN `login` ON `login`.`id` = `orders`.`uid` where orders.o_id = ".$_GET['oid']."";
            if($result = mysqli_query($conn,$sql))
            {
                if(mysqli_num_rows($result))
                {
                    while($row = mysqli_fetch_assoc($result))
                    {
                        $oid = $row['o_id'];
                        $uname = $row['uname'];
                        $dType = getDeliveryType($row['dtypet']);
                        $time = $row['date'];
                        $ostate = getDeliveryStatus($row['status']);
                        $sender = $row['sname'].",<br>".$row['sphone'].",<br>".$row['semail'].",<br> ".$row['saddress'].", ".$row['sland'].", ".$row['sstate'].", ".$row['scity'].", ".$row['svillege'].", ".$row['spincode'];
                        $reciver = $row['rname'].",<br>".$row['rphone'].",<br>".$row['remail'].",<br> ".$row['raddress'].", ".$row['rland'].", ".$row['rstate'].", ".$row['rcity'].", ".$row['rvillege'].", ".$row['rpincode'];
                        $dcharge = $row['dtype'];
                        $scharge = $row['psize'];
                        $wcharge = $row['pweight'];
                        $protact = $row['protact'];
                        $gift = $row['gift'];
                        $tax = $row['tax'];
                        $discount = $row['discount'];
                        $ccode = $row['ccode'];
                        $total = $row['total'];
                        $size = $row['psizet'];
                        $weight = $row['pweightt'];
                        

                    }
                }
            }
        }    
        function setGift($data)
        {
            if($data > 0)
            {
                return "YES";
            }
            else 
            {
                return "NO";
            }
        }
        function setSafty($data)
        {
            if($data > 0)
            {
                return "YES";
            }
            else 
            {
                return "NO";
            }
        }
        function setParcelSize($size)
        {
            if($size == 'A')
            { return "SMALL";}
            else if($size == 'B')
            { return "MEDIUM";}
            else if($size == 'C')
            { return "BIG";}
        }
        function setParcelWeight($weight)
        {
            if($weight == 'A')
            {
                return "LOW";
            }   
            else if($weight == 'B')
            {
                return "MEDIUM";
            }else if($weight == 'C')
            {
                return "BIG";
            }else if($weight == 'D')
            {
                return "HEAVY";
            }
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
        function getDeliveryStatus($data)
        {
            if($data == 241)
            {
                return "Requested";
            }
            else if($data == 242)
            {
                return "Accepted";
            }
            else if($data == 243)
            {
                return "Cancled";
            }
            else if($data == 244)
            {
                return "Success";
            }
            else if($data == 245)
            {
                return "Failed";
            }
        }
    ?>
    <body>
        <div class="main-box">
            <div class="OrderViewContainer">
                <div class="orderHeader">
                    <div class="orderLbldiv"><label>Order Id:<span><?php echo $oid; ?></span></label></div>
                    <div class="orderLbldiv"><label>User Name:<span><?php echo $uname; ?></span></label></div>
                    <div class="orderLbldiv"><label>Delivery Type:<span><?php echo $dType; ?></span></label></div>
                    <div class="orderLbldiv"><label>Order Time:<span><?php echo $time; ?></span></label></div>
                    <div class="orderLbldiv"><label>Order State:<span><?php echo $ostate; ?></span></label></div>
                </div>

                <div class="orderAddress">
                    <div class="divder">
                        <div class="addresstitle"><label>Sender's Address</label></div>
                        <div class="details"><?php echo $sender; ?></div>
                    </div>
                    <div class="divder">
                        <div class="addresstitle"><label>Reciver's Address</label></div>
                        <div class="details"><?php echo $reciver; ?></div>
                    </div>
                    <div class="divder">
                        <div class="addresstitle"><label>Total Charges</label></div>
                        <div class="details">
                            <div class="ChargesDetails">
                                <div class="Chargeslbl ChargesTitle"><label>Delivery Charges : </label></div>
                                <div class="Chargeslbl Charges"><label><?php echo $dcharge; ?>.Rs</label></div>
                            </div>
                            <div class="ChargesDetails">
                                <div class="Chargeslbl ChargesTitle"><label>Size Charges : </label></div>
                                <div class="Chargeslbl Charges"><label><?php echo $scharge+$wcharge; ?>.Rs</label></div>
                            </div>
                            <div class="ChargesDetails">
                                <div class="Chargeslbl ChargesTitle"><label>Extra Service Charges : </label></div>
                                <div class="Chargeslbl Charges"><label><?php echo $protact+$gift; ?>.Rs</label></div>
                            </div>
                            <div class="ChargesDetails">
                                <div class="Chargeslbl ChargesTitle"><label>Tax And Discount: </label></div>
                                <div class="Chargeslbl Charges"><label><?php echo $tax - $discount; ?>.Rs</label></div>
                            </div>
                            <hr>
                            <div class="ChargesDetails">
                                <div class="Chargeslbl ChargesTitle"><label>Total Charges : </label></div>
                                <div class="Chargeslbl Charges"><label><?php echo $total; ?>.Rs</label></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="BillOpt">
                    <div class="parcelDetailsDiv">
                        <label>Parcel Size:<span><?php echo setParcelSize($size); ?></span></label>
                    </div>
                    <div class="parcelDetailsDiv">
                        <label>Parcel Weight:<span><?php echo setParcelWeight($weight); ?></span></label>
                    </div>
                    <div class="parcelDetailsDiv">
                        <label>Safty:<span><?php echo setSafty($protact); ?></span></label>
                    </div>
                    <div class="parcelDetailsDiv">
                        <label>Gift Wrap:<span><?php echo setGift($gift); ?></span></label>
                    </div>
                    <div class="GenrateBill">
                        <div class="genratebillDivder">
                            <label>Conformation Code : <span><?php echo $ccode; ?></span></label>
                        </div>
                        <div class="genratebillDivder">
                            <input type="button" class="Ordersbtn" onclick="javascript:window.print()" id="print" value="Print" style="background: #fff url('src/print.svg') no-repeat; padding:5px; background-size:15%; background-position: 15%">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
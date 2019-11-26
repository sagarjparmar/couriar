
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Couriar - Fill Details</title>
    <link rel="icon" href="src/icon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content ="width=device-width,initial-scale=1,user-scalable=yes" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/newRequest.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/scrollbar.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/footer.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/account.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/CouriarDetails.css" />

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCeIfa3R8iFKwnctfQo-3WZkGkmJyJE878&libraries=places"></script> 
    <script src="js/account.js"></script>
</head>
<body>
    <?php include_once 'header.php'; 
     
    ?>
    <?php
    session_start();
    $name = "";
    $phone = "";
    $address ="";
    if(isset($_SESSION['fname'])&&isset($_SESSION['fphone'])&&isset($_SESSION['femail'])&&isset($_SESSION['faddress'])&&isset($_SESSION['fland'])&&isset($_SESSION['fstate'])&&isset($_SESSION['fcity'])&&isset($_SESSION['fvillege'])&&isset($_SESSION['fpincode'])&&isset($_SESSION['tname'])&&isset($_SESSION['tphone'])&&isset($_SESSION['temail'])&&isset($_SESSION['taddress'])&&isset($_SESSION['tland'])&&isset($_SESSION['tstate'])&&isset($_SESSION['tcity'])&&isset($_SESSION['tvillege'])&&isset($_SESSION['tpincode']))
    {
        
    
       /* echo "<script>";
        echo "alert('";
        echo    $_SESSION['fname'];
        echo    $_SESSION['fphone'];
        echo    $_SESSION['femail'];
        echo    $_SESSION['faddress'];
        echo    $_SESSION['fland'];
        echo    $_SESSION['fstate'];
        echo    $_SESSION['fcity'];
        echo    $_SESSION['fvillege'];
        echo    $_SESSION['fpincode'];
        echo    $_SESSION['tname'];
        echo    $_SESSION['tphone'];
        echo    $_SESSION['temail'];
        echo    $_SESSION['taddress'];
        echo    $_SESSION['tland'];
        echo    $_SESSION['tstate'];
        echo    $_SESSION['tcity'];
        echo    $_SESSION['tvillege'];
        echo    $_SESSION['tpincode'];
        echo "');";
        echo "</script>";*/
        $name = $_SESSION['tname'];
        $phone = $_SESSION['tphone'];
        //$email = $_SESSION['temail']; 
        $address = $_SESSION['temail'].", ".$_SESSION['taddress'].", ".$_SESSION['tland'].", ".$_SESSION['tstate'].", ".$_SESSION['tcity'].", ".$_SESSION['tvillege'].", ".$_SESSION['tpincode'];
        //session_destroy();
    }
    else
    {
     //   header("location:reuest.php");
    }

   ?>
    <div class="main-container">
        <div class="detail-fill-container">
            <div class="couriar_discription_container">
                <form method="POST" action="php/submitRequest.php">
                    <input type="hidden" name="sName" value="<?php if(isset($_SESSION['fname'])){echo  str_replace("_"," ",$_SESSION['fname']);}?>" >
                    <input type="hidden" name="sPhone" value="<?php if(isset($_SESSION['fphone'])){echo str_replace("_"," ",$_SESSION['fphone']);}?>" >
                    <input type="hidden" name="sEmail" value="<?php if(isset($_SESSION['femail'])){echo str_replace("_"," ",$_SESSION['femail']);}?>" >
                    <input type="hidden" name="sAddress" value="<?php if(isset($_SESSION['faddress'])){echo str_replace("_"," ",$_SESSION['faddress']);}?>" >
                    <input type="hidden" name="sLand" value="<?php if(isset($_SESSION['fland'])){echo str_replace("_"," ",$_SESSION['fland']);}?>" >
                    <input type="hidden" name="sState" value="<?php if(isset($_SESSION['fstate'])){echo str_replace("_"," ",$_SESSION['fstate']);}?>" >
                    <input type="hidden" name="sCity" value="<?php if(isset($_SESSION['fcity'])){echo str_replace("_"," ",$_SESSION['fcity']);}?>" >
                    <input type="hidden" name="sVillege" value="<?php if(isset($_SESSION['fvillege'])){echo str_replace("_"," ",$_SESSION['fvillege']);}?>" >
                    <input type="hidden" name="sPincode" value="<?php if(isset($_SESSION['fpincode'])){echo str_replace("_"," ",$_SESSION['fpincode']);}?>" >
                    <input type="hidden" name="rName" value="<?php if(isset($_SESSION['tname'])){echo str_replace("_"," ",$_SESSION['tname']);}?>" >
                    <input type="hidden" name="rPhone" value="<?php if(isset($_SESSION['tphone'])){echo str_replace("_"," ",$_SESSION['tphone']);}?>" >
                    <input type="hidden" name="rEmail" value="<?php if(isset($_SESSION['temail'])){echo str_replace("_"," ",$_SESSION['temail']);}?>" >
                    <input type="hidden" name="rAddress" value="<?php if(isset($_SESSION['taddress'])){echo str_replace("_"," ",$_SESSION['taddress']);}?>" >
                    <input type="hidden" name="rLand" value="<?php if(isset($_SESSION['tland'])){echo str_replace("_"," ",$_SESSION['tland']);}?>" >
                    <input type="hidden" name="rState" value="<?php if(isset($_SESSION['tstate'])){echo str_replace("_"," ",$_SESSION['tstate']);}?>" >
                    <input type="hidden" name="rCity" value="<?php if(isset($_SESSION['tcity'])){echo str_replace("_"," ",$_SESSION['tcity']);}?>" >
                    <input type="hidden" name="rVillege" value="<?php if(isset($_SESSION['tvillege'])){echo str_replace("_"," ",$_SESSION['tvillege']);}?>" >
                    <input type="hidden" name="rPincode" value="<?php if(isset($_SESSION['tpincode'])){echo str_replace("_"," ",$_SESSION['tpincode']);}?>" >
                    
                <div class="couriar_description_title">
                    <h2 class="couriar_descrition_title">Fill Couriar Description</h2>
                </div>
                <div class="couriar_description_form">
                    <div class="description_box_div">
                        <div>
                            <label>Delivery Type :</label>
                        </div>
                        <div class="input-full-box">
                            <select id="dtype" class="input_couriar_description" name="dType">
                                <option  value="A" selected>NORMAL(2 to 3 days)</option>
                                <option  value="B">FAST(24hours in 250km distance)</option>
                                <option  value="C">SUPER FAST(6hour in 250km distance)</option>
                                <option value="D">QUICK (limited distance)</option>
                            </select>
                            <img src="src/deliveryTruck.svg" class="input_couriar_description_icon">
                        </div>
                    </div>
                    <div class="description_box_div">
                        <div>
                            <label>Parcel Size (Approx) :</label>
                        </div>
                        <div class="input-full-box">
                            <select id="psize" class="input_couriar_description" name="pSize">
                                <option  value="A" selected>NORMAL(latters,documents)</option>
                                <option  value="B">MEDIUM(toys,laptops..etc)</option>
                                <option  value="C">BIG(chair,tv,..etc)</option>
                            </select>
                            <img src="src/package.svg" class="input_couriar_description_icon">
                        </div>
                    </div>
                    <div class="description_box_div">
                        <div>
                            <label>Parcel weight (Approx) :</label>
                        </div>
                        <div class="input-full-box">
                            <select id="pweight" class="input_couriar_description" name="pWeight">
                                <option  value="A" selected>LOW(0gm to 500gm)</option>
                                <option  value="B">NORMAL(500gm to 3kg)</option>
                                <option  value="C">MEDIUM(3kg to 15kg)</option>
                                <option  value="D">HEAVY(morthen 15kg)</option>
                            </select>
                            <img src="src/scale.svg" class="input_couriar_description_icon">
                        </div>
                    </div>
                    <div class="description_box_div2">
                        <div class="radiobtn-input-box">
                            <label>Require Parcel Safety ?(for glass and sansitive stuffs) </label>
                            <div class="btn-radio-form">
                                <label>YES</label><input type="radio" value="1" name="sf">
                                <label>NO</label><input type="radio" value="0" checked name="sf">
                            </div>
                        </div>
                        <div class="radiobtn-input-box">
                            <label style="display:block;">Do you want to send in Couriar Gift Box? </label>
                            <div class="btn-radio-form">
                                <label>YES</label><input type="radio" value="1" name="gbox">
                                <label>NO</label><input type="radio" value="0" checked name="gbox">
                            </div>
                        </div>
                    </div>
                    <div class="div-couriar-details">
                        <div class="reciever_locations_div">
                            <div class="title-div" >
                                <label>
                                    Receivers Contacts and Address:
                                </label>
                            </div>
                            <div class="display-addressInCD">
                                <div class="Addressaa">
                                    <label id="rname"><?php echo str_replace("_"," ",$name); ?></label><br>
                                    <label id="rphone"><?php echo $phone;?></label><br>
                                    <label id="radd"><?php //882,rohitvas,amadhra road, khutyamba,pipalgabhan,chikhli,gujrat,396521, sagarparmarsjp@gmail.com 
                                        echo str_replace("_"," ",$address);
                                    ?></label>
                                </div>
                            </div>  
                        </div>
                        <div class="reciever_locations_div">
                            <div class="title-div">
                                <label>Approx charges on our service:
                                </label>
                            </div>
                            <div class="display-addressInCD">
                                <div class="Addressaa">
                                    <div class="display_charges_div"><div class="charges_tag"><label id="dtypelbl">Service Type Charge</label></div><div class="pricetag"><label id="setSerCh">00.00</label><label>.Rs</label></div></div><!-- delivery type charges -->
                                    <div class="display_charges_div"><div class="charges_tag"><label id="psizelbl">Size Charge</label></div><div class="pricetag"><label id="setSzCh">00.00</label><label>.Rs</label></div></div><!-- parcel size and weight charges -->
                                    <div class="display_charges_div"><div class="charges_tag"><label id="pproclbl">Protact/gift Charge</label></div><div class="pricetag"><label id="setProCh">00.00</label><label>.Rs</label></div></div> <!-- parcel protection charges -->
                                    <div class="display_charges_div"><div class="charges_tag"><label id="taxdislbl">Extra Services Charges</label></div><div class="pricetag"><label id="setTaxCh">00.00</label>.Rs<label></label></div></div> <!-- extra services -->
                                    <div class="display_charges_div"><div class="charges_tag"><label id="extralbl"> Discount </label></div><div class="pricetag"><label id="setDisTaxCh">-00.00</label>.Rs<label></label></div></div> <!-- tax and discounts -->
                                    <hr color="black">
                                    <div class="display_total_charges_div"><div class="charges_tag"><label id="ttlchlbl">Approximate Total Charges</label></div><div class="pricetag"><label id="totallbl">00.00</label><label>.Rs</label></div></div>
                                </div>
                            </div>  
                        </div>
                    </div>
                    <div class="btn-done-div">
                        <button type="submit" class="btnNextStep3" id="sendRequest" title="Go to next step" style="background: #fff url('src/go.svg') no-repeat; padding:5px; background-size:20%; background-position: 5%">Send Request</button>
                    </div>
                </div>
                <div class="display-address-form">
                </div>
                </form>
            </div>    
        </div>
        <!--<div class="popup" id="displayBill">

        </div>-->
    <div>
</body>
<?php include_once "footer.php"; ?>
</html>
<script>  
    $(document).ready(function()
    {
        var dCharge = {A:"",B:"",C:"",D:""};
        var sCharge = {A:"",B:"",C:""};
        var wCharge = {A:"",B:"",C:"",D:""};
        var eCharge = {P:"0",G:"0",T:"0",D:"0"};
        var choice ={DT:"0",PS:"0",PW:"0",PP:"0",PG:"0"};
        function setTotal()
        {
            var A = JSON.stringify(choice);
            var Aobj = JSON.parse(A);
            var total = parseInt(Aobj['DT'])+parseInt(Aobj['PS'])+parseInt(Aobj['PW'])+parseInt(Aobj['PP'])+parseInt(Aobj['PG']);
            var P = JSON.stringify(eCharge);
            var Pobj = JSON.parse(P);
            var tax = parseInt(Pobj['T']);
            var dis = parseInt(Pobj['D']);
            var taxCharge = (total*tax)/100;
            var disCharge = ((total+tax)*dis)/100;
            //alert(disCharge);
            var grandTotal = total+taxCharge-disCharge;
            $("#setTaxCh").text(accounting.formatMoney(taxCharge));
            $("#setDisTaxCh").text(accounting.formatMoney(disCharge));
            $("#totallbl").text(accounting.formatMoney(grandTotal));
            //alert (taxCharge);
        };
        function setExtra()
        {
            var A = JSON.stringify(choice);
            var Aobj = JSON.parse(A);
            var total = parseInt(Aobj['PP'])+parseInt(Aobj['PG']);
            $("#setProCh").text(accounting.formatMoney(total));
        }
        function setSize()
        {   
            var A = JSON.stringify(choice);
            var Aobj = JSON.parse(A);
            //alert(A);
            var total = parseInt(Aobj['PS'])+parseInt(Aobj['PW']);
            $("#setSzCh").text(accounting.formatMoney(total));
        }
        function setPrice()
        {
            $.ajax({
                    type: "POST",
                    url: "php/getPriceList.php",
                    cache: false,
                    success: function(result){
                            if(result)
                            {
                               //alert (result);
                               var obj = JSON.parse(result);
                               dCharge.A = obj.dA;
                               dCharge.B = obj.dB;
                               dCharge.C = obj.dC;
                               dCharge.D = obj.dD;
                               sCharge.A = obj.sA;
                               sCharge.B = obj.sB;
                               sCharge.C = obj.sC;
                               wCharge.A = obj.wA;
                               wCharge.B = obj.wB;
                               wCharge.C = obj.wC;
                               wCharge.D = obj.wD;
                               eCharge.P = obj.protact;     
                               eCharge.G = obj.gift;
                               eCharge.T = obj.tax;
                               eCharge.D = obj.discount;  

                               choice.DT = dCharge.A;
                                choice.PS = sCharge.A;
                                choice.PW = wCharge.A;
                                setTotal();
                                $("#setSerCh").text(accounting.formatMoney(choice.DT));
                                setSize();
                                
                            }
                        }
                });
                
        }
        setPrice();
       
        
        $("#dtype").change(function(){
            dtype = $("#dtype").val();
           if(dtype == 'A')
           {
               choice.DT = dCharge.A;
           }
           else if(dtype == 'B')
           {
                choice.DT = dCharge.B;
           }
           else if(dtype == 'C')
           {
                choice.DT = dCharge.C;
           }
           else if(dtype == 'D')
           {
                choice.DT = dCharge.D;
           }
           else
           {
            choice.DT=0;
           }
           $("#setSerCh").text(accounting.formatMoney(choice.DT));
           setTotal();
        });
        $("#psize").change(function(){
            Psize = $("#psize").val();
            if(Psize == 'A')
            {   
                choice.PS = sCharge.A;
            }else if(Psize == 'B')
            {
                choice.PS = sCharge.B;
            }else if(Psize == 'C')
            {
                choice.PS = sCharge.C;
            }
            else{
                choice.PS=0;
            }
           
            setSize();
            setTotal();
            //$("#setSzCh").text(accounting.formatMoney(choice.DT));
        });
        $("#pweight").change(function(){
            weight = $("#pweight").val();
            if(weight == 'A')
            {   
                choice.PW = wCharge.A;
            }else if(weight == 'B')
            {
                choice.PW = wCharge.B;
            }else if(weight == 'C')
            {
                choice.PW = wCharge.C;
            }else if(weight == 'D')
            {
                choice.PW = wCharge.D;
            }else{
                choice.PW=0;
            }

            setSize();
            setTotal();
            //$("#setSzCh").text(accounting.formatMoney(choice.DT));
        });
        $("input[name='sf']").change(function(){
            var isProtact = $("input[name='sf']:checked").val();
            if(isProtact == "1")
            {
                choice.PP = eCharge.P;
                //alert('gjhg');
            }
            else
            {
                choice.PP = 0;
            }
            setExtra();
            setTotal();
        });
        $("input[name='gbox']").change(function(){
            var isProtact = $("input[name='gbox']:checked").val();
            if(isProtact == "1")
            {
                choice.PG = eCharge.P;
                //alert('sajk');
            }
            else
            {
                choice.PG = 0;
            }
            setExtra();
            setTotal();
        });
        $("#sendRequest").click(function(){
            
        });

    });
</script>
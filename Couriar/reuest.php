
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Couriar - Request New Order</title>
    <link rel="icon" href="src/icon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content ="width=device-width,initial-scale=1,user-scalable=yes" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/newRequest.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/scrollbar.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/footer.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/account.css" />

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCeIfa3R8iFKwnctfQo-3WZkGkmJyJE878&libraries=places"></script> 

</head>
<body>
    <?php include_once 'header.php'; 
   
    ?>
    <div class="main-container">
        <div class="letsdiv">
            <label class="letslbl">Lets start to send your Courier with fill below details.</label>
        </div>
        <div class="detail-fill-container">  
            <div class="fill-container">
                <div class="doc-box">
                    <!-- from addresss container -->
                    <div class="add-container">
                        <div class="input-container">
                            <label class="main-lbl">Pick-up Location:</label>
                        </div>
                        <div class="input-container">
                            <div class="input-label">
                                <span class="input-label-span">Name :</span>
                            </div>
                            <div class="input-div" id="name-form-from">
                                <input type="text" id="input-name-p" title="Enter Your Full Name." class="input-box" autocomplete="on" name="i">
                                <input type="image" title="Pick Address From Your Contacts Book" class="loc-btn" src="src/name.svg"></button>
                            </div>
                        </div>
                        <div class="input-container">
                            <div class="input-label">
                                <span class="input-label-span">Mobile No :</span>
                            </div>
                            <div class="input-div" id = "mob-form-from">
                                <input type="digit" id="input-mob-p" title="Enter Your Mobile Number." class="input-box">
                                <input type="image" class="loc-btn" src="src/phone.svg"></button>
                            </div>
                        </div>
                        <div class="input-container">
                            <div class="input-label">
                                <span class="input-label-span">Address :</span>
                            </div>
                            <div class="input-div" id="add-form-from">
                                <input type="text" id="input-add-p" title="Enter Your Address" class="input-box">
                                <input type="image" title="Set Location From Map" id="btn-map" class="loc-btn" src="src/loc.png"></button>
                            </div>
                        </div>
                        <div class="input-container">
                            <div class="or-option">
                                <label>Or Select Address Using</label>
                            </div>
                            <div class="opt-btn">
                                <button class="btn1" id="create-p-add" title="Create New Contact And Address" style="background: #fff url('src/pencil.svg') no-repeat; padding:5px; background-size:20%; background-position: 5%">Create</button>  
                                <button class="btn2" id="btn-done-p" title="Set Your Entered Pick-up Point" style="background: #fff url('src/go.svg') no-repeat; padding:5px; background-size:20%; background-position: 5%">Done</button>  
                            </div>
                        </div>
                        <div class="address-display">
                            <button class="edit-btn" id="btn-add-pp" title="Edit Address" style="background: #fff url('src/writing.svg') no-repeat; background-size:100%;"></button>
                            <button class="edit-btn" title="Locate or Set address in Map" id="map-btn-p" style="background: #fff url('src/loc.svg') no-repeat; background-size:100%;"></button>
                            <div class="address-div">
                                <span id="dis_name_from">Enter Your Couriar Pickup Location</span><br/>
                                <span id="dis_num_from"></span><br/>
                                <span id="dis_add_from"></span>
                            </div>
                    </div>
                    </div>
                </div>
                <div class="container-div">
                    <!-- form controll -->

                </div>
                <div class="doc-box">
                    <!-- To addresss container -->
                    <div class="add-container">
                            <div class="input-container">
                                    <label class="main-lbl">Destination Location:</label>
                            </div>
                        <div class="input-container">
                            <div class="input-label">
                                <span class="input-label-span">Name :</span>
                            </div>
                            <div class="input-div" id="name-form-to">
                                <input type="text" id="input-name-to" title="Enter Your Full Name." class="input-box">
                                <input type="image" title="Pick Address From Your Contacts Book" class="loc-btn" src="src/name.svg"></button>
                            </div>
                        </div>
                        <div class="input-container">
                            <div class="input-label">
                                <span class="input-label-span">Mobile No :</span>
                            </div>
                            <div class="input-div" id="mob-form-to">
                                <input type="text" id="input-mob-to" title="Enter Your Mobile Number." class="input-box">
                                <input type="image" class="loc-btn" src="src/phone.svg"></button>
                            </div>
                        </div>
                        <div class="input-container">
                            <div class="input-label">
                                <span class="input-label-span">Address :</span>
                            </div>
                            <div class="input-div" id="add-form-to">
                                <input type="text" id="input-add-to" title="Enter Address where the couriar send." class="input-box">
                                <input type="image" class="loc-btn" id="btn-map-d" title="Set Location From Map" src="src/loc.png"></button>
                            </div>
                        </div>
                        <div class="input-container">
                            <div class="or-option">
                                <label>Or Select Address Using</label>
                            </div>
                            <div class="opt-btn">
                                <button class="btn1" id="btn-add-d" title="Create New Contact And Address" style="background: #fff url('src/pencil.svg') no-repeat; padding:5px; background-size:20%; background-position: 5%">Create</button>  
                                <button class="btn2" id="btn-done-d" title="Set Your Entered Destination" style="background: #fff url('src/go.svg') no-repeat; padding:5px; background-size:20%; background-position: 5%">Done</button>  
                            </div>
                        </div>
                        <div class="address-display">
                            <button class="edit-btn" id="btn-add-dd" title="Edit Address" style="background: #fff url('src/writing.svg') no-repeat; background-size:100%;"></button>
                            <button class="edit-btn" id="btn-map-dd" title="Locate or Set address in Map" style="background: #fff url('src/loc.svg') no-repeat; background-size:100%;"></button>
                            <div class="address-div">
                                <span id="dis_name_to">Enter Your Couriar Pickup Location</span><br/>
                                <span id="dis_num_to"></span><br/>
                                <span id="dis_add_to"></span>
                            </div>
                        </div>
                    </div>
                    <button class="btn" id="btnNextStep2" title="Go to next step" style="background: #fff url('src/go.svg') no-repeat; padding:5px; background-size:20%; background-position: 5%">Next</button>
                </div>
            </div>
        </div>
    </div>
    <!-- address fill up container---------------------------------------------------------------------------- -->
    <div class="DisplayAddressList" id="contactPopup">
        <div class="divForAddFillCon">
            <div class="divForAddConInPart" style="background-image: url('src/couriar_cover.png');">
                <button class="edit-btn" id="add-popup-close" title="Edit Address" style="background: url('src/cancel-black.svg') no-repeat; background-size:100%;"></button>
                <div class="divForAdd">
                    <div class="divForAddlbl">
                        <label class="lblForAddTitle">Address :</label>
                    </div>
                    <div class="divForAddContainer">
                        <div class="divForLblInputContainer">
                            <label class="lblForInputAdd">
                                Name :
                            </label>
                            <div class="divForAddInput" id="form-name-box">
                                <img src="src/name.svg" class="imgForAddInput">
                                <input type="text" id="form-name" class="inputForAdd">
                            </div>
                        </div>
                    </div>
                    <div class="divForAddContainer">
                            <div class="divForLblInputContainer">
                                <label class="lblForInputAdd">
                                    Mobile No :
                                </label>
                            <div class="divForAddInput" id="form-phone-box">
                                <img src="src/phone.svg" class="imgForAddInput">
                                <input type="text" id="form-phone" class="inputForAdd">
                            </div>
                        </div>
                    </div>
                    <div class="divForAddContainer">
                            <div class="divForLblInputContainer">
                                <label class="lblForInputAdd">
                                    E Mail :
                                </label>
                            <div class="divForAddInput" id="form-email-box">
                                <img src="src/at.svg" class="imgForAddInput">
                                <input type="text" id="form-email" class="inputForAdd">
                            </div>
                        </div>
                    </div>
                    <div class="divForAddContainer">
                            <div class="divForLblInputContainer">
                                <label class="lblForInputAdd">
                                    Home Address :
                                </label>
                            <div class="divForAddInput" id="form-home-box">
                                <img src="src/home.svg" class="imgForAddInput">
                                <input type="text" id="form-home" class="inputForAdd">
                            </div>
                        </div>
                    </div>
                    <div class="divForAddContainer">
                            <div class="divForLblInputContainer">
                                <label class="lblForInputAdd">
                                    Landmark :
                                </label>
                            <div class="divForAddInput" id="form-land-box">
                                <img src="src/LandMark.svg" class="imgForAddInput">
                                <input type="text" id="form-land" class="inputForAdd">
                            </div>
                        </div>
                    </div>
                    <div class="divForAddContainer">
                            <div class="divForLblInputContainer">
                                <label class="lblForInputAdd">
                                   State :
                                </label>
                            <div class="divForAddInput" id="form-state-box">
                                <img src="src/state.svg"  class="imgForAddInput">
                                <input type="text" name="state" id="form-state" class="inputForAdd" autocomplete="on">
                            </div>
                        </div>
                    </div>
                    <div class="divForAddContainer">
                            <div class="divForLblInputContainer">
                                <label class="lblForInputAdd">
                                    City :
                                </label>
                            <div class="divForAddInput" id="form-city-box">
                                <img src="src/town.svg" class="imgForAddInput">
                                <input type="text" id="form-city" class="inputForAdd">
                            </div>
                        </div>
                    </div>
                    <div class="divForAddContainer">
                            <div class="divForLblInputContainer">
                                <label class="lblForInputAdd">
                                    Town/Villege :
                                </label>
                            <div class="divForAddInput" id="form-vill-box">
                                <img src="src/villege.svg" class="imgForAddInput">
                                <input type="text" id="form-vill" class="inputForAdd">
                            </div>
                        </div>
                    </div>
                    <div class="divForAddContainer">
                            <div class="divForLblInputContainer">
                                <label class="lblForInputAdd">
                                    Postal Code:
                                </label>
                            <div class="divForAddInput" id="form-pin-box">
                                <img src="src/mailbox.svg" class="imgForAddInput">
                                <input type="text" id="form-pin" class="inputForAdd">
                            </div>
                        </div>
                    </div>
                    <div class="divForAddContainer">
                        <div class="divForLblInputContainer">
                            <div class="divForConSaveCheck">
                                <input type="checkbox" id="form-save" class="checkboxForSaveCon" >
                                <label class="lblForSaveContact">Save in your Contact Book.</label>
                            </div>
                            <div class="divForAddCont">
                                <button class="btn2" id="setadd" title="Set Your Entered Destination" style="background: #fff url('src/go.svg') no-repeat; padding:5px; background-size:20%; background-position: 5%">Continue</button>  
                            </div> 
                            <div class="divForAddCont">
                                <button class="btn2" id="btnContacts" title="Set Your Entered Destination" style="background: #fff url('src/contctsdis.svg') no-repeat; padding:5px; background-size:20%; background-position: 5%">Contacts</button>  
                            </div>       
                        </div>
                    </div>                    
                </div>           
            </div>
        </div>
    </div>
    <div class="popup" id="contacts">
        <button class="edit-btn" id="contacts-popup-close" style="background: url('src/cancel-black.svg') no-repeat; background-size:100%;"></button>
        <div class="contacts_form">
            <div class="contacts_search">
                <input type="text" class="search_box" placeholder="Search Contacts" id="contacts_name_search">
                <img src="src/search1.svg" class="search_icon" autocomplete="on">
            </div>
            <div class="search_list" id="texthint">
                <div class="contact_display" id="Aa" onclick="setAddressinForm()">
                    <div class="name_title">
                        <span class="name_span">sagar parmar</span>
                        <span class="add_span">Pipalgabhan</span>
                    </div>
                    <div class="contact_title">
                        <span class="phone_span">+919898171703</span>
                        <span class="email_span">sagarparmarsjp@gmail.com</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="popup" id="add-map">
        <button class="close-btn" id="map-popup-close" title="Edit Address" style="background: url('src/cancel-black.svg') no-repeat; background-size:100%;"></button>
        <input id="pac-input" class="controls" type="text" placeholder="Search Box">
        <div id="map" class="map">
        </div>
    </div>
    <div class="indicator" id="indicator">
      
    </div>
</body>
<?php include_once "footer.php" ;?>
</html>
<script>
    $('#contactPopup').hide();
    $('#contacts').hide();
    $('#add-map').hide();
    $('#indicator').hide();
    var addressSetFlag,fromName,fromPhone,fromEmail,fromAddress,fromLand,fromState,fromCity,fromVillege,fromPincode,toName,toPhone,toEmail,toAddress,toLand,toState,toCity,toVillege,toPincode;
    svalue = $('#svalue').val();
            if(svalue == 0)
            {
                $('#form-save').prop("disabled","disabled");
                $('#btnContacts').prop("disabled","disabled");
            }
            
    function getContactsList()
    {
        var cname = $("#contacts_name_search").val();
            var uid = $("#svalue").val();
            var data = "name="+cname+"&uid="+uid;
                            $.ajax({
                                type: "POST",
                                url: "php/contactsLists.php",
                                data: data,
                                cache: false,
                                success: function(result){
                                        if(result)
                                        {
                                            $("#texthint").html(result);
                                        }
                                    }
                            });
    }
    getContactsList();
    function setAddressinForm(id)
        {
           //alert('button worlk');
           var data = "id="+id;
                              $.ajax({
                                type: "POST",
                                url: "php/contactDetails.php",
                                data: data,
                                cache: false,
                                success: function(result){
                                        if(result)
                                        {
                                            var obj = JSON.parse(result);
                                            document.getElementById("form-name").value = obj.name; 
                                            document.getElementById("form-phone").value = obj.phone; 
                                            document.getElementById("form-email").value = obj.email; 
                                            document.getElementById("form-home").value = obj.address; 
                                            document.getElementById("form-land").value = obj.land; 
                                            document.getElementById("form-state").value = obj.state; 
                                            document.getElementById("form-city").value = obj.city;
                                            document.getElementById("form-vill").value = obj.villege; 
                                            document.getElementById("form-pin").value = obj.pin_code;
                                            $('#contacts').hide();
                                            $("#form-save").prop("checked", false);
                                            return;
                                        }
                                    }
                            });
        }
    $(document).ready(function()
    {
        $("#btnNextStep2").click(function(){
           //alert("working");
            from_name = $("#input-name-p").val();
            from_phone =$("#input-mob-p").val();
            from_address =$("#input-add-p").val();
            to_name = $("#input-name-to").val();
            to_phone =$("#input-mob-to").val();
            to_address =$("#input-add-to").val();
            if(from_name == "" || from_phone == "" || from_address==""||to_name == ""||to_phone==""||to_address=="")
            {
                // alert("btnnnnn");
                //$("#btnNextStep2").prop('disabled', true);
                emptyFillError = "<span>seems like some fields are empty...,please fill it...!!</span>";
                $('#indicator').show();
                $('#indicator').html(emptyFillError);
            }
            else
            {
                var fName = fromName.replace(/ /g,"_");
                var fPhone = fromPhone;
                var fEmail = fromEmail;
                var fAddress = fromAddress.replace(/ /g,"_"); 
                var fLand = fromLand.replace(/ /g,"_"); 
                var fState = fromState.replace(/ /g,"_");
                var fCity = fromCity.replace(/ /g,"_"); 
                var fVillege = fromVillege.replace(/ /g,"_");
                var fPincode = fromPincode;
                var tName = toName.replace(/ /g,"_");
                var tPhone = toPhone;
                var tEmail = toEmail;
                var tAddress = toAddress.replace(/ /g,"_"); 
                var tLand = toLand.replace(/ /g,"_"); 
                var tState = toState.replace(/ /g,"_");
                var tCity = toCity.replace(/ /g,"_"); 
                var tVillege = toVillege.replace(/ /g,"_");
                var tPincode = toPincode;
                var post_address = "fname="+fName+"&fphone="+fPhone+"&femail="+fEmail+"&faddress="+fAddress+"&fland="+fLand+"&fstate="+fState+"&fcity="+fCity+"&fvillege="+fVillege+"&fpincode="+fPincode+"&tname="+tName+"&tphone="+tPhone+"&temail="+tEmail+"&taddress="+tAddress+"&tland="+tLand+"&tstate="+tState+"&tcity="+tCity+"&tvillege="+tVillege+"&tpincode="+tPincode;
                //alert (post_address);
                //go to next step to fill couriar details and bill payments
                $.ajax({
                                type: "POST",
                                url: "php/storeSessionFill.php",
                                data: post_address,
                                cache: false,
                                success: function(result){
                                        if(result)
                                        {
                                           // alert(result);
                                            //alert("stored in session");
                                            window.location ="fillCouriarDetails.php";
                                            return;
                                        }
                                        else
                                        {
                                            alert("something is wrong");
                                        }
                                       
                                    }
                            });
                
            }
        });
        function addressFormReset()
        {
            document.getElementById("form-name").value = ""; 
            document.getElementById("form-phone").value = ""; 
            document.getElementById("form-email").value = ""; 
            document.getElementById("form-home").value = ""; 
            document.getElementById("form-land").value = ""; 
            document.getElementById("form-state").value = ""; 
            document.getElementById("form-city").value = "";
            document.getElementById("form-vill").value = ""; 
            document.getElementById("form-pin").value = "";
        }
        $('#form-state').autocomplete({
          minLength: 5,
          source: "php/states.php"
        });
        //indicator show and hide
        $("#indicator").click(function(){
            $('#indicator').hide();
        });
        $('#add-popup-close').click(function()
        {
            $('#contactPopup').hide();
        });
        //to fill address for buttons
        $('#create-p-add').click(function()
        {
            addressFormReset();
            $('#contactPopup').show();
            addressSetFlag = 'FROM';
        });
        $('#btn-add-pp').click(function()
        {
            //addressFormReset();
            $('#contactPopup').show();
            addressSetFlag = 'FROM';
        });
        $('#name-form-from').click(function()
        {
            //addressFormReset();
            $('#contactPopup').show();
            addressSetFlag = 'FROM';
        });
        $('#mob-form-from').click(function()
        {
            //addressFormReset();
            $('#contactPopup').show();
            addressSetFlag = 'FROM';
        });
        $('#add-form-from').click(function()
        {
            //addressFormReset();
            $('#contactPopup').show();
            addressSetFlag = 'FROM';
        });

        $('#map-popup-close').click(function(){
            $('#add-map').hide();
        });
        $('#btn-map').click(function()
        {
            $("#add-map").show();
        });
        $('#map-btn-p').click(function()
        {
            $("#add-map").show();
        });
        $('#btn-map-d').click(function()
        {
            $("#add-map").show();
        });
        $('#btn-map-dd').click(function(){
            $('#add-map').show();
        })
        $('#btn-add-dd').click(function(){
            $('#contactPopup').show();
        });
        //to fill address for buttons
        $('#btn-add-d').click(function(){
            addressFormReset();
            $('#contactPopup').show();
            addressSetFlag = 'TO';
        });
        $('#btn-add-dd').click(function(){
            addressFormReset();
            $('#contactPopup').show();
            addressSetFlag = 'TO';
        });
        //////////////////////
        $('#name-form-to').click(function(){
            addressFormReset();
            $('#contactPopup').show();
            addressSetFlag = 'TO';
        });
        $('#mob-form-to').click(function(){
            addressFormReset();
            $('#contactPopup').show();
            addressSetFlag = 'TO';
        });
        $('#add-form-to').click(function(){
            addressFormReset();
            $('#contactPopup').show();
            addressSetFlag = 'TO';
        });
        /////////////////////
        $('#btn-add-pp').click(function()
        {
            $('#contactPopup').show();
        });
       /* $('#btn-done-p').click(function(){
            var name = $('#input-name-p').val();
            var phone = $('#input-mob-p').val();
            var address =  $('#input-add-p').val();
        });*/

        //contacts list display and hide functions
       
        $('#btnContacts').click(function(){
            $('#contacts').show();
        });
        $('#contacts-popup-close').click(function(){
            $('#contacts').hide();
        });
        $('#contacts_name_search').keyup(function(){
            //$("#contacts_lists").html(no_contacts_list);
            var cname = $("#contacts_name_search").val();
            var uid = $("#svalue").val();
            var data = "name="+cname+"&uid="+uid;
                            $.ajax({
                                type: "POST",
                                url: "php/contactsLists.php",
                                data: data,
                                cache: false,
                                success: function(result){
                                        if(result)
                                        {
                                            $("#texthint").html(result);
                                        }
                                    }
                            });
        });
        
     


        //-----------------------------------------------------------------
            function formColerElert()
            {
                $("#form-name-box").css("border-color","black");
                $("#form-phone-box").css("border-color","black");
                $("#form-email-box").css("border-color","black");
                $("#form-home-box").css("border-color","black");
                $("#form-land-box").css("border-color","black");
                $("#form-state-box").css("border-color","black");
                $("#form-city-box").css("border-color","black");
                $("#form-vill-box").css("border-color","black");
                $("#form-pin-box").css("border-color","black");                
            }
            function mainNameFrom()
            {
                name = $("#input-name-p").val();
                if(name=="" || name==null){
                    $("#name-form-from").css("border-color","red");
                }else{$("#name-form-from").css("border-color","black");} 
            }
            function mainNameTo()
            {
                name = $("#input-name-to").val();
                if(name=="" || name==null){
                    $("#name-form-to").css("border-color","red");
                }else{$("#name-form-to").css("border-color","black");} 
            }
            function mainAddFrom()
            {
                add = $("#input-add-p").val();
                if(add=="" || add==null){
                    $("#add-form-from").css("border-color","red");
                }else{$("#add-form-from").css("border-color","black");} 
            }
            function mainAddTo()
            {
                add = $("#input-add-to").val();
                if(add=="" || add==null){
                    $("#add-form-to").css("border-color","red");
                }else{$("#add-form-to").css("border-color","black");} 
            }
            function validateName()
            {
                name = $("#form-name").val();
                if(name=="" || name==null){
                    $("#form-name-box").css("border-color","red");
                }else{$("#form-name-box").css("border-color","black");}
            }
            function validatePhone()
            {
                phone = $("#form-phone").val();
                if(phone=="" || phone==null){
                    $("#form-phone-box").css("border-color","red");
                }
                else if(!validatePhoneNumber(phone))
                {$("#form-phone-box").css("border-color","red");}
                else{$("#form-phone-box").css("border-color","black");}
            }
            function validateEmail()
            {
                email = $("#form-email").val();
                if(email=="" || email==null){
                    $("#form-email-box").css("border-color","red");
                }
                else if(!validateEmailId(email))
                {$("#form-email-box").css("border-color","red");}
                else{$("#form-email-box").css("border-color","black");}
            }
            function validateHomeAddress()
            {
                home = $("#form-home").val();
                if(home=="" || home==null){
                    $("#form-home-box").css("border-color","red");
                }else{$("#form-home-box").css("border-color","black");}
            }
            function validateLandAddress()
            {
                land = $("#form-land").val();
                if(land=="" || land==null){
                    $("#form-land-box").css("border-color","red");
                }else{$("#form-land-box").css("border-color","black");}
            }
            function validateState()
            {
                state = $("#form-state").val();
                if(state=="" || state==null){
                    $("#form-state-box").css("border-color","red");
                }else{$("#form-state-box").css("border-color","black");}
            }
            function validateCity()
            {
                city = $("#form-city").val();
                if(city=="" || city==null){
                    $("#form-city-box").css("border-color","red");
                }else{$("#form-city-box").css("border-color","black");}
            }
            function validateVillege()
            {
                villege = $("#form-vill").val();
                if(villege=="" || villege==null){
                    $("#form-vill-box").css("border-color","red");
                }else{$("#form-vill-box").css("border-color","black");}
            }
            function validatePincode() {
                pincode = $("#form-pin").val();
                if(pincode=="" || pincode==null){
                    $("#form-pin-box").css("border-color","red");
                }else{$("#form-pin-box").css("border-color","black");}
            }
            function validateFormPhone()
            {
                phoneFrom = $("#input-mob-p").val();
                if(phoneFrom=="" || phoneFrom==null){
                    $("#mob-form-from").css("border-color","red");
                }
                else if(!validatePhoneNumber(phoneFrom))
                {$("#mob-form-from").css("border-color","red");}
                else{$("#mob-form-from").css("border-color","black");}
            }
            function validateFormtoPhone()
            {
                phone = $("#input-mob-to").val();
                if(phone=="" || phone==null){
                    $("#mob-form-to").css("border-color","red");
                }
                else if(!validatePhoneNumber(phone))
                {$("#mob-form-to").css("border-color","red");}
                else{$("#mob-form-to").css("border-color","black");}
            }
           function validateForm()
            {
                
                var flag=true;
                name = $('#form-name').val();
                phone= $('#form-phone').val();
                email= $('#form-email').val();
                home = $('#form-home').val();
                land = $('#form-land').val();
                state = $('#form-state').val();
                city = $('#form-city').val();
                villege = $('#form-vill').val();
                pincode = $('#form-pin').val();
                if(name==""||name==null){
                    $("#form-name-box").css("border-color","red");
                    flag = false;
                }
                if(phone==""||phone==null){
                    $("#form-phone-box").css("border-color","red");
                    flag = false;
                }
                if(email==""||email==null){
                    $("#form-email-box").css("border-color","red");
                    flag = false;
                }
                if(home ==""||home==null){
                    $("#form-home-box").css("border-color","red");
                    flag = false;
                }
                if(land==""||land==null){
                    $("#form-land-box").css("border-color","red");
                    flag = false;
                }
                if(state =="" || state == null){
                    $("#form-state-box").css("border-color","red");
                    flag = false;
                }
                if(city == ""||city==null){
                    $("#form-city-box").css("border-color","red");
                    flag = false;
                }
                if(villege =="" || villege == null){
                    $("#form-vill-box").css("border-color","red");
                    flag = false;
                }
                if(pincode==""||pincode==null){
                    $("#form-pin-box").css("border-color","red");
                    flag = false;
                }
                return flag;
            }
            //to set address details in main details filling indicator
            function setAddressBox(name,num,address,position)
            {   
            //  alert("setaddress ="+name+" "+num+" "+address+" "+position);
                if(position == 'FROM')
                {
                    document.getElementById("input-mob-p").value = num; 
                    document.getElementById("input-add-p").value = address;
                    document.getElementById("input-name-p").value = name;
                }
                else if(position == 'TO')
                {   
                    document.getElementById("input-mob-to").value = num; 
                    document.getElementById("input-add-to").value = address;
                    document.getElementById("input-name-to").value = name;
                }
                
            }
            function setInHiddenBox(name,num,email,address,land,state,city,villege,pincode,position)
            {
                if(position == 'FROM')
                {
                    fromName = name;
                    fromPhone = num;
                    fromEmail = email;
                    fromAddress = address;
                    fromLand = land;
                    fromState = state;
                    fromCity = city;
                    fromVillege = villege;
                    fromPincode = pincode;
                }
                else if(position == 'TO')
                {
                    toName = name;
                    toPhone = num;
                    toEmail = email;
                    toAddress = address;
                    toLand = land;
                    toState = state;
                    toCity = city;
                    toVillege = villege;
                    toPincode = pincode;
                }
            }
           
            function validateEmailId(e)
			{
				var eMailRGEX = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
				var eMailResult = eMailRGEX.test(e);
				return eMailResult;
			}
			function validatePhoneNumber(p)
			{
				var phoneRGEX = /^[(]{0,1}[0-9]{3}[)]{0,1}[-\s\.]{0,1}[0-9]{3}[-\s\.]{0,1}[0-9]{4}$/;
				var phoneResult = phoneRGEX.test(p);
				return phoneResult;
			}
            $('#input-name-to').keyup(mainNameTo);
            $('#input-name-p').keyup(mainNameFrom);
            $('#input-add-p').keyup(mainAddFrom);
            $('#input-add-to').keyup(mainAddTo);
            $('#input-mob-p').keyup(validateFormPhone);
            $('#input-mob-to').keyup(validateFormtoPhone);
            $('#form-name').keyup(validateName); //here
            $('#form-phone').keyup(validatePhone);
            $('#form-email').keyup(validateEmail);
            $('#form-home').keyup(validateHomeAddress);
            $('#form-land').keyup(validateLandAddress);
            $("#form-state").keyup(validateState);
            $("#form-city").keyup(validateCity);
            $("#form-vill").keyup(validateVillege);
            $("#form-pin").keyup(validatePincode); 
            $('#btn-done-p').click(function(){
                //alert('btn_done');
                tempmob = $('#input-mob-p').val();
                tempname = $('#input-name-p').val();
                tempadd = $('#input-add-p').val();
                if((!tempmob == "")&&(!tempname == "")&&(!tempadd == "")){
                 // alert('btn_done');
                    var data_name_from = $('#input-name-p').val();
                    var data_mob_from = $('#input-mob-p').val();
                    var data_add_from = $('#input-add-p').val();
                // alert(data_name_from+' '+data_mob_from+' '+data_add_from);
                    document.getElementById('dis_name_from').innerHTML = data_name_from; 
                    document.getElementById('dis_num_from').innerHTML = data_mob_from; 
                    document.getElementById('dis_add_from').innerHTML = data_add_from; 
                }  
            });
            $('#btn-done-d').click(function(){
                var data_name_to = $('#input-name-to').val();
                var data_mob_to = $('#input-mob-to').val();
                var data_add_to = $('#input-add-to').val();
            //  alert(data_name_to+' '+data_mob_to+' '+data_add_to);
                document.getElementById('dis_name_to').innerHTML = data_name_to; 
                document.getElementById('dis_num_to').innerHTML = data_mob_to; 
                document.getElementById('dis_add_to').innerHTML = data_add_to; 
            });
            $("#setadd").click(function(){
                if(validateForm())
                {
                    // alert('function worked');
                        fname = $('#form-name').val();//"vijay patel";
                        fphone = $('#form-phone').val();//"9898151515";//
                        femail= $('#form-email').val();//"vijay@mail.com";//
                        faddress =$('#form-home').val(); //"882,vijay nagar";//
                        fland = $('#form-land').val();//"khutyamba";//
                        fstate = $('#form-state').val();//"gujrat";//
                        fcity = $('#form-city').val();//"chikhli";//
                        fvillege = $('#form-vill').val();//"pipalgabhan";//
                        fpincode = $('#form-pin').val();
                        uid = $('#svalue').val();
                    if($('#form-save').prop("checked"))
                    {
                        var data = 'name='+fname+'&phone='+fphone+'&email='+femail+'&address='+faddress+'&land='+fland+'&state='+fstate+'&city='+fcity+"&villege="+fvillege+"&pincode="+fpincode+"&uid="+uid;
                        var res = data.replace(/ /g,"_");
                      // alert(res);
                        $.ajax({
                            type: "POST",
                            url: "php/contactsStore.php",
                            data: res,
                            cache: false,
                            success: function(result){
                                    if(result==true)
                                    {
                                        alert("contact saved successfully");
                                    }
                                }
                        });
                        address = faddress+","+fland+","+fvillege+","+fcity+","+fstate+","+fpincode+","+femail;
                        setAddressBox(fname,fphone,address,addressSetFlag);       
                        setInHiddenBox(fname,fphone,femail,faddress,fland,fstate,fcity,fvillege,fpincode,addressSetFlag);
                        $('#contactPopup').hide();
                    }
                    else
                    {
                        address = faddress+","+fland+","+fvillege+","+fcity+","+fstate+","+fpincode+","+femail;
                        //alert(addressSetFlag);
                        setAddressBox(fname,fphone,address,addressSetFlag);
                        setInHiddenBox(fname,fphone,femail,faddress,fland,fstate,fcity,fvillege,fpincode,addressSetFlag);
                    // alert(address);
                    $('#contactPopup').hide();
                    }
                }
                $('#contactPopup').hide();
            });


            //contacts list search
            function showUser(str) {
                if (str == "") {
                    document.getElementById("txtHint").innerHTML = "";
                    return;
                } else { 
                if (window.XMLHttpRequest) {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp = new XMLHttpRequest();
                } else {
                    // code for IE6, IE5
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }   
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("txthint").innerHTML = this.responseText;
                    }
                };
            xmlhttp.open("GET","contacts.php?q="+str,true);
            xmlhttp.send();
            }
        }
    });
</script>
<script>
        // This example adds a search box to a map, using the Google Place Autocomplete
        // feature. People can enter geographical searches. The search box will return a
        // pick list containing a mix of places and predicted search terms.
  
        // This example requires the Places library. Include the libraries=places
        // parameter when you first load the API. For example:
        //
  
        function initAutocomplete() {
          var map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: 23.023027, lng: 72.570997},
            zoom: 13,
            mapTypeId: 'roadmap'
          });
  
          // Create the search box and link it to the UI element.
          var input = document.getElementById('pac-input');
          var searchBox = new google.maps.places.SearchBox(input);
          map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
  
          // Bias the SearchBox results towards current map's viewport.
          map.addListener('bounds_changed', function() {
            searchBox.setBounds(map.getBounds());
          });
  
          var markers = [];
          // Listen for the event fired when the user selects a prediction and retrieve
          // more details for that place.
          searchBox.addListener('places_changed', function() {
            var places = searchBox.getPlaces();
  
            if (places.length == 0) {
              return;
            }
  
            // Clear out the old markers.
            markers.forEach(function(marker) {
              marker.setMap(null);
            });
            markers = [];
  
            // For each place, get the icon, name and location.
            var bounds = new google.maps.LatLngBounds();
            places.forEach(function(place) {
              if (!place.geometry) {
                console.log("Returned place contains no geometry");
                return;
              }
              var icon = {
                url: place.icon,
                size: new google.maps.Size(71, 71),
                origin: new google.maps.Point(0, 0),
                anchor: new google.maps.Point(17, 34),
                scaledSize: new google.maps.Size(25, 25)
              };
  
              // Create a marker for each place.
              markers.push(new google.maps.Marker({
                map: map,
                icon: icon,
                title: place.name,
                position: place.geometry.location
              }));
  
              if (place.geometry.viewport) {
                // Only geocodes have viewport.
                bounds.union(place.geometry.viewport);
              } else {
                bounds.extend(place.geometry.location);
              }
            });
            map.fitBounds(bounds);
          });
        }
        
      </script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCeIfa3R8iFKwnctfQo-3WZkGkmJyJE878&libraries=places&callback=initAutocomplete"
async defer></script>
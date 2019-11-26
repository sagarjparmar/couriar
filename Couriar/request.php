<!DOCTYPE html>
<?php 
    session_start();
    $_SESSION['uname']="sagar";
    session_destroy();
?>
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
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCeIfa3R8iFKwnctfQo-3WZkGkmJyJE878&libraries=places"></script> 

</head>
<body>
    <?php include_once 'header.php'; ?>
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
                            <div class="input-div">
                                <input type="text" id="input-name-p" title="Enter Your Full Name." class="input-box" autocomplete="on" name="i">
                                <input type="image" title="Pick Address From Your Contacts Book" class="loc-btn" src="src/name.svg"></button>
                            </div>
                        </div>
                        <div class="input-container">
                            <div class="input-label">
                                <span class="input-label-span">Mobile No :</span>
                            </div>
                            <div class="input-div">
                                <input type="number" id="input-mob-p" title="Enter Your Mobile Number." class="input-box">
                                <input type="image" class="loc-btn" src="src/phone.svg"></button>
                            </div>
                        </div>
                        <div class="input-container">
                            <div class="input-label">
                                <span class="input-label-span">Address :</span>
                            </div>
                            <div class="input-div">
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
                                <span id="dis-name">Enter Your Couriar Pickup Location</span><br/>
                                <span id="dis-num"></span><br/>
                                <span id="dis-add"></span>
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
                            <div class="input-div">
                                <input type="text" title="Enter Your Full Name." class="input-box">
                                <input type="image" title="Pick Address From Your Contacts Book" class="loc-btn" src="src/name.svg"></button>
                            </div>
                        </div>
                        <div class="input-container">
                            <div class="input-label">
                                <span class="input-label-span">Mobile No :</span>
                            </div>
                            <div class="input-div">
                                <input type="text" title="Enter Your Mobile Number." class="input-box">
                                <input type="image" class="loc-btn" src="src/phone.svg"></button>
                            </div>
                        </div>
                        <div class="input-container">
                            <div class="input-label">
                                <span class="input-label-span">Address :</span>
                            </div>
                            <div class="input-div">
                                <input type="text" title="Enter Address where the couriar send." class="input-box">
                                <input type="image" class="loc-btn" id="btn-map-d" title="Set Location From Map" src="src/loc.png"></button>
                            </div>
                        </div>
                        <div class="input-container">
                            <div class="or-option">
                                <label>Or Select Address Using</label>
                            </div>
                            <div class="opt-btn">
                                <button class="btn1" id="btn-add-d" title="Create New Contact And Address" style="background: #fff url('src/pencil.svg') no-repeat; padding:5px; background-size:20%; background-position: 5%">Create</button>  
                                <button class="btn2" id="" title="Set Your Entered Destination" style="background: #fff url('src/go.svg') no-repeat; padding:5px; background-size:20%; background-position: 5%">Done</button>  
                            </div>
                        </div>
                        <div class="address-display">
                            <button class="edit-btn" id="btn-add-dd" title="Edit Address" style="background: #fff url('src/writing.svg') no-repeat; background-size:100%;"></button>
                            <button class="edit-btn" id="btn-map-dd" title="Locate or Set address in Map" style="background: #fff url('src/loc.svg') no-repeat; background-size:100%;"></button>
                            <div class="address-div">
                                Enter Destination Location
                            </div>
                        </div>
                    </div>
                    <button class="btn" title="Go to next step" style="background: #fff url('src/go.svg') no-repeat; padding:5px; background-size:20%; background-position: 5%">Next</button>
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
                                <input type="checkbox" id="form-save" class="checkboxForSaveCon">
                                <label class="lblForSaveContact">Save in your Contact Book.</label>
                            </div>
                            <div class="divForAddCont">
                                <button class="btn2" id="setadd" title="Set Your Entered Destination" style="background: #fff url('src/go.svg') no-repeat; padding:5px; background-size:20%; background-position: 5%">Continue</button>  
                            </div>       
                        </div>
                    </div>                    
                </div>           
            </div>
        </div>
    </div>
    <div class="popup" id="contacts">

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
<?php include_once "footer.php" ?>
</html>
<script>
    $('#contactPopup').hide();
    $('#contacts').hide();
    $('#add-map').hide();
    $('#indicator').show();
    $(document).ready(function()
    {
        $('#form-state').autocomplete({
          minLength: 1,
          source: "php/states.php"
        });
        $("#indicator").click(function(){
            $('#indicator').hide();
        });
        $('#add-popup-close').click(function()
        {
            $('#contactPopup').hide();
        });
        $('#create-p-add').click(function()
        {
            $('#contactPopup').show();
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
        $('#btn-add-d').click(function(){
            $('#contactPopup').show();
        });
        $('#btn-add-pp').click(function()
        {
            $('#contactPopup').show();
        });
        $('#btn-done-p').click(function(){
            var name = $('#input-name-p').val();
            var phone = $('#input-mob-p').val();
            var address =  $('#input-add-p').val();
            var add = "address:"+name+"<br/>mobile no- "+phone+"<br/>"+address;
            $("#dis-name").text(name);
            $("#dis-num").text(phone);
            $("#dis-add").text(address);
        });
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
            
           /* function validateForm()
            {
                formColerElert();
                var flag=false;
                
                phone= $('#form-phone').val();
                email= $('#form-email').val();
                home = $('#form-home').val();
                land = $('#form-land').val();
                state = $('#form-state').val();
                city = $('#form-city').val();
                villege = $('#form-vill').val();
                pincode = $('#form-pin').val();
                
                if(phone==""||name==null){
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
            $("#setadd").click(function(){
                validateForm();
            });*/
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
            $('#form-name').keyup(validateName); //here
            $('#form-phone').keyup(validatePhone);
            $('#form-email').keyup(validateEmail);
            $('#form-home').keyup(validateHomeAddress);
            $('#form-land').keyup(validateLandAddress);
           

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
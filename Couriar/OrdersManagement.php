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
        <link rel="stylesheet" type="text/css" media="screen" href="css/ordersmanage.css" />
        <link rel="stylesheet" type="text/css" media="screen" href="css/AdminHeader.css" />
        <link rel="stylesheet" type="text/css" media="print" href="css/ordersmanage.css" />
        <link rel="stylesheet" type="text/css" media="print" href="css/CouriarDetails.css" />

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    </head>
    <?php include_once "AdminHeader.php" ?>
    <body>
        <div class="OrdersMainContainer">
            <div class="fill-container">
                <div class="SearchContainer">
                    <div class="inputsDivider">
                        <div class="selectBox">
                            <div class="inputslbl">
                                <label class="lbltext">Filter by</label>
                            </div>
                            <div class="inputSelectDiv">
                                <select class="filterselect" name="filter" id="Orderfilter" placeholder="">
                                    <option value="200">From New</option>
                                    <option value="201" selected>OId</option>
                                    <option value="202">UId</option>
                                    <option value="203">User Name</option>
                                    <option value="204">Sender's Name</option>
                                    <option value="205">Sender's Contact</option>
                                    <option value="206">Order Date</option>
                                    <option value="207">Order Status</option>
                                    <option value="208">Track Status</option>
                                    <option value="209">Delivery Type</option>
                                    <option value="210">Parcel Size</option>
                                    <option value="211">Parcel Weight</option>
                                    <option value="212">Senders Address</option>
                                    <option value="213">Recivers Address</option>
                                </select>
                                <input type="button" class="filtericon" style="background: #fff url('src/filter.svg') no-repeat; padding:5px; background-size:40%; background-position: 50%">    
                            </div>
                        </div>
                    </div>
                    <div class="inputsDivider">
                        <div class="selectBox">
                            <div class="inputslbl">
                                <label id="subfilterlbl "  class="lbltext">Sub Filter:</label>
                            </div>
                            <div class="inputSelectDiv">
                                <select class="filterselect" name="filter" id="subfilter" placeholder="">
                                    <option value='225'>Ascending</option>
                                    <option value='226' selected>Descending</option>
                                </select>
                                <input type="button" class="filtericon" style="background: #fff url('src/divide.svg') no-repeat; padding:5px; background-size:40%; background-position: 50%">    
                            </div>
                        </div>
                    </div>
                    <div class="inputsDivider">
                        <div class="selectBox">
                            <div class="inputslbl">
                                <label id="seachlbl"   class="lbltext">Search :</label>
                            </div>
                            <div class="inputBoxDiv">
                                   <input type="text" id="search" class="searchBox" >
                                   <input type="button" class="searchbtn" value="Search" style="background: #fff url('src/search.svg') no-repeat; padding:5px; background-size:15%; background-position: 5%">
                            </div>        
                        </div>
                    </div>
                </div>
                <div class="orderslistContainer">
                    <div class="ordersTitle">
                        <div class="headId"><label>OId</label></div>
                        <div class="headUname"><label>UId</label></div>
                        <div class="headSname"><label>User Name</label></div>
                        <div class="headSname"><label>Sender Name</label></div>
                        <div class="headSname"><label>Sender Contact</label></div>
                        <div class="headSname"><label>Order date</label></div>
                        <div class="headSname"><label>Delivery Type</label></div>
                        <div class="headSname"><label>Set Track</label></div>
                        <div class="headSname"><label>Set Status</label></div> 
                        <div class="EditOpt"><label>Edit/View</label></div> 
                    </div>
                    <div class="ordersList" id="ordersList">
                        <div class="orderDetailsContainer">
                            <div class="idContainer"><label class="lblset">001</label></div>
                            <div class="uidContainer"><label class="lblset">002</label></div>
                            <div class="RNameContainer"><label class="lblset">User's Name</label></div>
                            <div class="RNameContainer"><label class="lblset">Sender's Name</label></div>
                            <div class="RNameContainer"><label class="lblset">Sender's Contact</label></div>
                            <div class="RNameContainer"><label class="lblset">Orders's Date</label></div>
                            <div class="RNameContainer"><label class="lblset">Delivery Type</label></div>
                            <div class="RNameContainer"><label class="lblset">Track's Action</label></div>
                            <div class="RNameContainer"><label  class="lblset">Order Action</label></div>
                            <div class="RButtonContainer"><button class="editviewbtn" id="" title="Edit and View" style="background: url('src/editview.svg') no-repeat; background-size:100%;"></button></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="OrdersdetailsModifyContainer" id="View">
             
            <div class="ModifyDetailsContainer" id="md">
            <button class="canclebtn" id="closeView" title="Edit Address" style="background: url('src/cancel-black.svg') no-repeat; background-size:100%;"></button>
                <div class="OrdersDetailsPart">
                    <div class="OrdersIdDiv">
                        <label class="ttllbl">Order id:</label><label id="oid" class="ttllbl">1</label>
                    </div>
                    <div class="OrdersIdDiv">
                        <label class="ttllbl">User id:</label><label  id="uid" class="ttllbl">2</label>
                    </div>
                    <div class="OrdersIdDiv">
                        <label class="ttllbl" id="uname">User Name:</label>
                    </div>
                    <div class="OrdersIdDiv">
                        <label class="ttllbl" id="odate">Order date</label>
                    </div>
                    <div class="OrdersIdDiv">
                        <label class="ttllbl" id="dtype">Delivery type</label>
                    </div>
                    <div class="OrdersIdDiv">
                        <label class="ttllbl" id="tcharge">
                            Total Charges
                        </label>
                    </div>
                    <div class="OrdersIdDivsmall">
                        <label class="ttllbl" id="status">
                            Status
                        </label>
                    </div>
                </div>
                <div class="OrderAddressDetails">
                    <div class="threeDevider">
                        <div class="AddressTitle"><label class="ATlbl">From Send</label></div>
                        <div class="AddressContainer">
                            <div class="DisplayAddress">
                                <label class="addresslbl" id="saddress">Sagar Parmar, 9898171703, khutyamab Rohitvas chikhli, navsari, gujrat, 396521</label>
                            </div>
                        </div>
                    </div>
                    <div class="threeDevider">
                        <div class="AddressTitle"><label class="ATlbl">To Send</label></div>
                        <div class="AddressContainer">
                            <div class="DisplayAddress">
                                <label class="addresslbl" id="raddress">Sagar Parmar, 9898171703, khutyamab Rohitvas chikhli, navsari, gujrat, 396521</label>
                            </div>
                        </div>
                    </div>
                    <div class="threeDevider">
                        <div class="AddressTitle"><label class="ATlbl">Service Charges</label></div>
                        <div class="ChargesContainer">
                            <div class="DisplayCharges">
                                <div class="chargeTitle">
                                    <div class="ServiceTag">
                                        <label class="setlbl" id="dtypeTag">Delivery Type:</label>
                                    </div>
                                    <div class="ChargesTag"><label class="setlbl"  id="dCharge">40Rs:</label></div>
                                </div>
                                <div class="chargeTitle">
                                    <div class="ServiceTag">
                                        <label class="setlbl">Size Charge:</label>
                                    </div>
                                    <div class="ChargesTag"><label class="setlbl"  id="sizeCharge">40Rs:</label></div>
                                </div>
                                <div class="chargeTitle">
                                    <div class="ServiceTag">
                                        <label class="setlbl">Extra Services Charge:</label>
                                    </div>
                                    <div class="ChargesTag"><label class="setlbl" id="xtraCharge">40Rs:</label></div>
                                </div>
                                <div class="chargeTitle">
                                    <div class="ServiceTag">
                                        <label class="setlbl">Tax And Discount:</label>
                                    </div>
                                    <div class="ChargesTag"><label class="setlbl" id="txDis">40Rs:</label></div>
                                </div>
                                <div class="chargeTitle totalCharge">
                                    <div class="ServiceTag">
                                        <label class="setlbl">Total Charges:</label>
                                    </div>
                                    <div class="ChargesTag"><label class="setlbl" id="totalCharge">40Rs:</label></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="OrderActionDetails">
               
                    <div class="ParcelSizeContainer">
                        <div class="SizeInputDiv">
                            <div class="SizeLbl">
                                <label class="sizetitlelbl">Change Parcel Size</label>
                            </div>
                            <div class="SizeInputBox">
                                <select class="selectOption" id="psizetype">
                                <option  value="A" selected>NORMAL(latters,documents)</option>
                                <option  value="B">MEDIUM(toys,laptops..etc)</option>
                                <option  value="C">BIG(chair,tv,..etc)</option> 
                                </select>
                            </div>
                        </div>
                        <div class="SizeInputDiv">
                            <div class="SizeLbl">
                                <label class="sizetitlelbl">Change Parcel Weight</label>
                            </div>
                            <div class="SizeInputBox">
                                <select class="selectOption" id="pweightype">
                                <option  value="A" selected>LOW(0gm to 500gm)</option>
                                <option  value="B">MEDIUM(500gm to 3kg)</option>
                                <option  value="C">BIG(3kg to 15kg)</option>
                                <option  value="D">HEAVY(morthen 15kg)</option>
                          
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="ParcelSizeContainer">
                        <div class="SizeInputDiv">
                            <div class="SizeLbl">
                                <label class="sizetitlelbl">Change Order Status</label>
                            </div>
                            <div class="SizeInputBox">
                                <select class="selectOption" id="orderstate">
                                <option value='241'>Requsted</option>
                                <option value='242'>Accept</option>
                                <option value='243'>Cancle</option>
                                <option value='244'>Success</option>
                                <option value='245'>Fail</option>
                                </select>
                            </div>
                        </div>
                        <div class="SizeInputDiv">
                            <div class="SizeLbl">
                                <label class="sizetitlelbl">Change Tracking State</label>
                            </div>
                            <div class="SizeInputBox">
                                <select class="selectOption"  id="trackstate">
                                <option value='251'>Way to Pick</option>
                                <option value='252'>Picked</option>
                                <option value='253'>On the Way</option>
                                <option value='254'>at Destination</option>
                                <option value='255'>Delivered</option>
                                <option value='257'>Returned</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="ParcelSizeContainer btns">
                        <div class="SizeInputDiv">
                            <div class="buttonDiv">
                                <input type="button" id="save" onclick="save()" class="Ordersbtn save" value="Save" style="background: #fff url('src/file.svg') no-repeat; padding:5px; background-size:15%; background-position: 15%">
                             </div>
                        </div>
                        <div class="SizeInputDiv">
                            <div class="buttonDiv">
                                <input type="button" class="Ordersbtn" onclick="genrateBill()" id="print" value="Print Bill" style="background: #fff url('src/print.svg') no-repeat; padding:5px; background-size:15%; background-position: 15%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
<script>
   var scharge={'sA':'','sB':'','sC':''};
   var wcharge={'wA':'','wB':'','wC':'','wD':''};
   var echarge = {'T':'0','D':'0'};
   var tempId = {'O':'0'};
   var dcharge = null;
   var extraCharge = null;
   getPrice();
    $('#View').hide();
    getOrdersLists();
    $('#Orderfilter').change(orderFilter);
    $('#subfilter').change(orderSubFilter);
    $('#search').change(getOrdersLists);
   // $('#save').click(save);
    $('#closeView').click(function(){
        $('#View').hide();
    });
    function orderSubFilter()
    {
        lbl = $('#subfilter :selected').text();
        $('#seachlbl').text(lbl);
        getOrdersLists();
    }
    $('#psizetype').change(function(){
       setBill();
    });
    $('#pweightype').change(function(){
       setBill();
    });

    function orderFilter()
    {
        
        lbl = $('#Orderfilter :selected').text();
        $('#subfilterlbl').text(lbl);
        temp = $('#Orderfilter').val(); 
        //alert(temp);
        data = "filter="+temp;
        $.ajax({
						type: "POST",
						url: "php/orderGetSubFilter.php",
						data: data,
						cache: false,
						async: false,
						success: function(msg){
								if(msg)
								{
                                   //alert(msg); 
                                   $('#subfilter').html(msg);
								}
								else
								{
                                    alert("something was wrong");
								}
							}
                    }); 
                    getOrdersLists();
    }
    function getOrdersLists()
    {
        filter = $('#Orderfilter').val(); 
        sfilter = $('#subfilter').val();
        temp = $('#search').val();
        search = temp.replace(" ","_");
        data = "filter="+filter+"&sfilter="+sfilter+"&search="+search;
        $.ajax({
						type: "POST",
						url: "php/getOrdersLists.php",
						data: data,
						cache: false,
						async: false,
						success: function(msg){
								if(msg)
								{
                                   //alert(msg); 
                                   $('#ordersList').html(msg);
								}
								else
								{
                                    alert("something was wrong");
								}
							}
                    }); 
                   
    }
    function Pick(id)
    {
            data = "id="+id+"&track="+252;
            $.ajax({
						type: "POST",
						url: "php/setTrackOrders.php",
						data: data,
						cache: false,
						async: false,
						success: function(msg){
								if(msg)
								{
                                   alert(msg);
								}
								else
								{
                                    alert("sorry,cannot update");
								}
							}
                    }); 
                   
                    getOrdersLists();
        
    }
    function ontheway(id)
    {
        data = "id="+id+"&track="+253;
        $.ajax({
						type: "POST",
						url: "php/setTrackOrders.php",
						data: data,
						cache: false,
						async: false,
						success: function(msg){
								if(msg)
								{
                                   alert(msg);
								}
								else
								{
                                    alert("sorry,cannot update");
								}
							}
                    }); 
                    getOrdersLists();
    }
    function destination(id)
    {
        data = "id="+id+"&track="+254;
        $.ajax({
						type: "POST",
						url: "php/setTrackOrders.php",
						data: data,
						cache: false,
						async: false,
						success: function(msg){
								if(msg)
								{
                                   alert(msg);
								}
								else
								{
                                    alert("sorry,cannot update");
								}
							}
                    }); 
                    getOrdersLists(); 
    }
    function delivered(id)
    {
        data = "id="+id+"&track="+255;
        $.ajax({
						type: "POST",
						url: "php/setTrackOrders.php",
						data: data,
						cache: false,
						async: false,
						success: function(msg){
								if(msg)
								{
                                   alert(msg);
								}
								else
								{
                                    alert("sorry,cannot update");
								}
							}
                    }); 
                    success(id);
                    getOrdersLists(); 
    }
    function accept(id)
    {
        if(ccode = prompt("Enter Confirmation code to accept Order Request:"))
        {
            aid = $('#aid').val();
            data = "id="+id+"&status="+242+"&ccode="+ccode+"&aid="+aid;
            $.ajax({
						type: "POST",
						url: "php/setStatusOrders.php",
						data: data,
						cache: false,
						async: false,
						success: function(msg){
								if(msg)
								{
                                   alert (msg);
								}
								else
								{
                                   return false;
								}
							}
                    }); 
                    getOrdersLists();
        }
    }
    function success(id)
    {
        data = "id="+id+"&status="+244;
        $.ajax({
						type: "POST",
						url: "php/setStatusOrders.php",
						data: data,
						cache: false,
						async: false,
						success: function(msg){
								if(msg)
								{
                                   alert(msg);
								}
								else
								{
                                    alert("sorry,cannot update");
								}
							}
                    }); 
                    getOrdersLists();
    }
    function viewOrder(id)
    {
        //alert("hi00");
        
        $("#View").show();
       // $('#save').attr("disabled",true);
        data = "id="+id;
        $.ajax({
						type: "POST",
						url: "php/getOrderDetails.php",
						data: data,
						cache: false,
						async: false,
						success: function(msg){
								if(msg)
								{
                                    data = JSON.parse(msg);
                                    $('#oid').text(data.oid);
                                    tempId.O = data.oid;
                                    $('#uid').text(data.uid);
                                    $('#uname').text(data.uname);
                                    $('#odate').text(data.date);
                                    $('#dtype').text(data.dtype);
                                    $('#tcharge').text(data.tcharge);
                                    status = setStatus(data.status);
                                    $('#status').text(status);
                                    $('#saddress').text(data.sadd);
                                    $('#raddress').text(data.radd);
                                    $('#dtypeTag').text("Delivery "+data.dtype);
                                    $('#dCharge').text(data.dcharge+"Rs.");
                                    sizeCharge = parseInt(data.scharge) + parseInt(data.wcharge);
                                    extraCharge = parseInt(data.gift)+parseInt(data.protact);
                                    $('#xtraCharge').text(extraCharge+"Rs.");
                                    $('#sizeCharge').text(sizeCharge+"Rs.");
                                    tax = parseInt(data.tax);
                                    total = parseInt(data.dcharge)+sizeCharge+extraCharge;
                                    taxCharge = (total*tax)/100;
                                    dis = ((total+taxCharge)*parseInt(data.discount))/100;
                                    charge = taxCharge-dis;
                                    $('#txDis').text(charge+"Rs.");
                                    subtotal = (total+taxCharge)-dis;
                                    $("#totalCharge").text(subtotal+"Rs.");
                                    $('#psizetype').val(data.stype);
                                    $('#pweightype').val(data.wtype);
                                    echarge['D']=parseInt(data.discount);
                                    echarge['T']=tax;
                                    dcharge = parseInt(data.dcharge);
								}
								else
								{
                                    alert("sorry,cannot update");
								}
							}
                    }); 
                    getOrdersLists();
       
    }
function setStatus(statusCode)
{
    if(statusCode == 241)
    {
        return "Requested";
    }else if(statusCode == 242)
    {
        return "Accepted";
    }else if(statusCode == 243)
    {   
        return "Cancled";
    }else if(statusCode == 244)
    {
        return "Success";
    }else if(statusCode == 245)
    {
        return "Failed";
    }
}
function getPrice()
{
    $.ajax({
            type: "POST",
            url: "php/getPriceList.php",
            cache: false,
            async: false,
            success: function(result){
                    if(result)
                    {
                      var obj = JSON.parse(result);
                        scharge['sA'] = obj.sA;
                        scharge['sB'] = obj.sB;
                        scharge['sC'] = obj.sC;
                        wcharge['wA'] = obj.wA;
                        wcharge['wB'] = obj.wB;
                        wcharge['wC'] = obj.wC;
                        wcharge['wD'] = obj.wD;
                    }
                }
        });
   
}
function getSizerate()
{
    size = $('#psizetype').val();
    if(size == 'A')
    {
        return parseInt(scharge['sA']);
    }else if(size == 'B')
    {
        return parseInt(scharge['sB']);

    }else if(size == 'C')
    {
        return parseInt(scharge['sC']);
    }
}
function getWeightrate()
{
    weight = $('#pweightype').val();
    if(weight == 'A')
    {
        return parseInt(wcharge['wA']);
    }
    else if(weight == 'B')
    {
        return parseInt(wcharge['wB']);
    }
    else if(weight == 'C')
    {
        return parseInt(wcharge['wC']);
    }
    else if(weight == 'D')
    {
        return parseInt(wcharge['wD']);
    }
}
function setBill()
{
    sizerate = getSizerate();
    weightrate = getWeightrate();
    drate = dcharge;
    erate = extraCharge;
    total = sizerate + weightrate + drate + erate;
    tax =  parseInt(echarge['T']);
    taxrate = (total*tax)/100;
    totaltx = total+taxrate;
    discount = parseFloat(echarge['D']);
    disrate = (totaltx*discount)/100;
    
    subtotal = totaltx - discount;
    $('#dCharge').text(drate+"Rs.");
    sizers =sizerate+weightrate;
    $('#sizeCharge').text(sizers+"Rs.");
    $('#xtraCharge').text(erate+"Rs.");
    $('#txDis').text(taxrate-discount);
    $('#totalCharge').text(subtotal+"Rs.");
} 
function save()
{
    //alert("save"+tempId.O);
    size = $('#psizetype').val();
    weight = $('#pweightype').val();
    ostate = $('#orderstate').val();
    tstate = $('#trackstate').val();
    data = "size="+size+"&weight="+weight+"&ostate="+ostate+"&tstate="+tstate+"&oid="+tempId.O;
    //alert(data);
        $.ajax({
						type: "POST",
						url: "php/updateOrders.php",
						data: data,
						cache: false,
						async: false,
						success: function(msg){
								if(msg)
								{
                                   alert(msg);
                                   $('#View').hide();
								}
								else
								{
                                    alert("sorry,cannot update");
								}
							}
                    }); 
                    getOrdersLists();
}
function genrateBill()
{   
    id = $('#oid').text();
    url = "http://localhost/Project/viewOrder.php?oid="+id;

    window.open(url);
}

   
</script>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Couriar - Orders</title>
        <link rel="icon" href="src/icon.png">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content ="width=device-width,initial-scale=1,user-scalable=yes" />
        <link rel="stylesheet" type="text/css" media="screen" href="css/scrollbar.css" />
        <link rel="stylesheet" type="text/css" media="print" href="css/CouriarDetails.css" />
        <link rel="stylesheet" type="text/css" media="screen" href="css/footer.css" />
        <link rel="stylesheet" type="text/css" media="screen" href="css/CouriarDetails.css" />
        <link rel="stylesheet" type="text/css" media="screen" href="css/newRequest.css" />
        <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
        <link rel="stylesheet" type="text/css" media="screen" href="css/orders.css" />

    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCeIfa3R8iFKwnctfQo-3WZkGkmJyJE878&libraries=places"></script> 
    <script src="js/account.js"></script>
    </head>
    <?php  include_once "header.php";?>
    <body>
        <div class="ordersmaincontainer">
            <div class="orderstitle">
                <label>Track all your orders and parcels. Simple and easy!</label>
            </div>
            <div class="orderscontaimer">
                <div class="serchcontainer">
                    <div class="ordersearchfiller">
                        <input type="number" placeholder="Enter Order Id" id="orderSearch" class="searchinput">
                        <button type="image" onclick="displayOrderList()" class="orderSearchimgbtn">
                    </div>
                </div>
                <div class="orderscontainer" id="orderslist">
                    <div class="orderDetailbox">
                        <div class="upperdiv">
                            <div class="orderidlbl">
                                <label class="orderLabel">Order Id:</label>
                                <span>025</span>
                            </div>
                            <div class="orderdatebox">
                                <label class="orderLabel">Date :</label>    
                                <span>05-05-2018</span>    
                            </div>
                            <div class="orderstatebox">
                                <label class="orderLabel">Order status :</label>    
                                <span>Requested</span>    
                            </div>
                            <div class="trackstatebox">
                                <label class="orderLabel">Track status :</label>    
                                <span>On the way</span>    
                            </div>
                            <div class="trackstatebox">
                                <label class="orderLabel red">Cancle</label>    
                            </div>
                        </div>
                        <div class="orderdis">
                            <div class="discriptiondiv">
                                <label class="orderLabel">Sagar parmar</label>    
                            </div>
                            <div class="discriptiondiv">
                                <label class="orderLabel">9898171703</label>    
                            </div>
                            <div class="discriptiondiv">
                                <label class="orderLabel">sagarparmarsjp@gmail.com</label>    
                            </div>
                            <div class="optiondiv">
                                <a class="viewOrdera" href="">View Order</a>    
                            </div>
                        </div>
                    </div>
                    <div class="orderDetailbox">
                        <div class="upperdiv">
                            <div class="orderidlbl">
                                <label class="orderLabel">Order Id:</label>
                                <span>025</span>
                            </div>
                            <div class="orderdatebox">
                                <label class="orderLabel">Date :</label>    
                                <span>05-05-2018</span>    
                            </div>
                            <div class="orderstatebox">
                                <label class="orderLabel">Order status :</label>    
                                <span>Requested</span>    
                            </div>
                            <div class="trackstatebox">
                                <label class="orderLabel">Track status :</label>    
                                <span>On the way</span>    
                            </div>
                            <div class="trackstatebox">
                                <label class="orderLabel red">Cancle</label>    
                            </div>
                        </div>
                        <div class="orderdis">
                            <div class="discriptiondiv">
                                <label class="orderLabel">Sagar parmar</label>    
                            </div>
                            <div class="discriptiondiv">
                                <label class="orderLabel">9898171703</label>    
                            </div>
                            <div class="discriptiondiv">
                                <label class="orderLabel">sagarparmarsjp@gmail.com</label>    
                            </div>
                            <div class="optiondiv">
                                <a class="viewOrdera" href="">View Order</a>    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <?php include_once "footer.php"; ?>
</html>
<script>
    displayOrderList();
    function displayOrderList()
    {
        uid = $('#svalue').val();
        oid = $('#orderSearch').val();
        data = "oid="+oid+"&uid="+uid;
        $.ajax({
						type: "POST",
						url: "php/getOrderList.php",
						data: data,
						cache: false,
						async: false,
						success: function(msg){
								if(msg)
								{
                                   //alert(msg); 
                                   $('#orderslist').html(msg);
								}
								else
								{
                                    alert("something was wrong");
								}
							}
                    }); 
    }
    function cancleorder(oid)
    {
        uid = $('#svalue').val();
        data = "uid="+uid+"&oid="+oid;
        if(confirm("do you really want to cancle this order with order id = "+oid))
        {
            $.ajax({
                            type: "POST",
                            url: "php/CancleOrder.php",
                            data: data,
                            cache: false,
                            async: false,
                            success: function(msg){
                                    if(msg)
                                    {
                                        alert(msg);
                                        displayOrderList();
                                    }
                                    else
                                    {
                                        alert("this order can't be cancled");
                                    }
                                }
                        }); 
        }
    }
</script>
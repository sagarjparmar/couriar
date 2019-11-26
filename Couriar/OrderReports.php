<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>CouriarAdmin - Orders Report</title>
        <link rel="icon" href="src/icon.png">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content ="width=device-width,initial-scale=1,user-scalable=yes" />
        <link rel="stylesheet" type="text/css" media="screen" href="css/scrollbar.css" />
        <link rel="stylesheet" type="text/css" media="screen" href="css/orderreport.css" />
        <link rel="stylesheet" type="text/css" media="screen" href="css/AdminHeader.css" />
        <link rel="stylesheet" type="text/css" media="print" href="css/orderreport.css" />
        <link rel="stylesheet" type="text/css" media="print" href="css/CouriarDetails.css" />

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    </head>
    <?php include_once "AdminHeader.php" ?>
    <body>
        <div class="maindiv">
            <div class="reportmaincontainer">
                <div class="headtitlecontainer">
                    <h1>Report</h1>
                </div>
                <form method="post" action="genratereport.php">
                    <div class="searchcontainer">
                        <div class="inputcontainer">
                            <div class="inputtitlecontainer">
                                <label class="inputtitlelbl">Filter By:</label>
                            </div>
                            <div class="inputboxcontainer">
                                <div class="inputbox">
                                    <select id="mainfilter" class="selectopt" name="fil">
                                    <!--<option value=21>Shipping Id</option>
                                    <option value=22>Order Id</option>
                                    <option value=23>Admin Id</option>-->
                                    <option value=24>Date</option>
                                    </select>
                                    <input type="button" class="filtericon" style="background: #fff url('src/filter.svg') no-repeat; padding:5px; background-size:40%; background-position: 50%">    
                                </div>
                            </div>
                        </div>
                        <div class="inputcontainer">
                            <div class="inputtitlecontainer">
                                <label class="inputtitlelbl" >sub filter:</label>
                            </div>  
                            <div class="inputboxcontainer">
                                <div class="inputbox">
                                    <select id="subfilter" name="sfil" class="selectopt">

                                    </select>
                                    <input type="button" class="filtericon" style="background: #fff url('src/divide.svg') no-repeat; padding:5px; background-size:40%; background-position: 50%">    
                                </div>
                            </div>
                        </div>
                        <div class="inputcontainer">
                            <div class="inputtitlecontainer">
                                <label class="inputtitlelbl" id="serchinput">Search:</label>
                            </div>
                            <div class="inputboxcontainer">
                                <div class="inputbox">
                                    <input type="text" name="find" id="search" class="selectopt">
                                    <input type="button" class="filtericon" style="background: #fff url('src/search.svg') no-repeat; padding:5px; background-size:40%; background-position: 50%">    
                                </div>
                            </div>
                        </div>
                        <div class="inputcontainer input">
                            <div class="inputtitlecontainer">
                                <label class="inputtitlelbl"></label>
                            </div>
                            <div class="inputboxcontainer">
                                    <input type="submit" value="genrate report" class="submiticon" style="background: #fff url('src/report.svg') no-repeat; padding:5px; background-size:15%; background-position: 5%">    
                            </div>
                        </div>
                    </div>
                    </form>
                    <div class="listviewcontainer" id="list">
                        <div class="listcontainer">
                            <div class="shippingiddiv">
                                <div class="titlelbl">
                                    Shipping Id
                                </div>
                                <div class="titlevalue">
                                    1
                                </div>
                            </div>
                            <div class="shippingiddiv">
                                <div class="titlelbl">
                                    Admin Id
                                </div>
                                <div class="titlevalue">
                                    1
                                </div>
                            </div>
                            <div class="shippingiddiva">
                                <div class="titlelbl">
                                    Admin Name
                                </div>
                                <div class="titlevalue">
                                    sagar parmar
                                </div>
                            </div>
                            <div class="shippingiddiv">
                                <div class="titlelbl">
                                    order Id
                                </div>
                                <div class="titlevalue">
                                    1
                                </div>
                            </div>
                            <div class="shippingiddiv">
                                <div class="titlelbl">
                                    User Id
                                </div>
                                <div class="titlevalue">
                                    1
                                </div>
                            </div>
                            <div class="shippingiddiva">
                                <div class="titlelbl">
                                    Admin contacts
                                </div>
                                <div class="titlevalue">
                                    9898171703
                                </div>
                            </div>
                            <div class="shippingiddiv">
                                <div class="titlelbl">
                                    Shipping Date
                                </div>
                                <div class="titlevalue">
                                    15-04-2019
                                </div>
                            </div>
                            <div class="shippingiddiva">
                                <div class="titlelbl">
                                    Shipping Charges
                                </div>
                                <div class="titlevalue">
                                    28Rs.
                                </div>
                            </div>
                        </div>
                        <div class="listcontainer">
                            <div class="shippingiddiv">
                                <div class="titlelbl">
                                    Shipping Id
                                </div>
                                <div class="titlevalue">
                                    1
                                </div>
                            </div>
                            <div class="shippingiddiv">
                                <div class="titlelbl">
                                    Admin Id
                                </div>
                                <div class="titlevalue">
                                    1
                                </div>
                            </div>
                            <div class="shippingiddiva">
                                <div class="titlelbl">
                                    Admin Name
                                </div>
                                <div class="titlevalue">
                                    sagar parmar
                                </div>
                            </div>
                            <div class="shippingiddiv">
                                <div class="titlelbl">
                                    order Id
                                </div>
                                <div class="titlevalue">
                                    1
                                </div>
                            </div>
                            <div class="shippingiddiv">
                                <div class="titlelbl">
                                    User Id
                                </div>
                                <div class="titlevalue">
                                    1
                                </div>
                            </div>
                            <div class="shippingiddiva">
                                <div class="titlelbl">
                                    Admin contacts
                                </div>
                                <div class="titlevalue">
                                    9898171703
                                </div>
                            </div>
                            <div class="shippingiddiv">
                                <div class="titlelbl">
                                    Shipping Date
                                </div>
                                <div class="titlevalue">
                                    15-04-2019
                                </div>
                            </div>
                            <div class="shippingiddiva">
                                <div class="titlelbl">
                                    Shipping Charges
                                </div>
                                <div class="titlevalue">
                                    28Rs.
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </body>
</html>
<script>
    getSubFilter();
    $('#mainfilter').change(getSubFilter);
    $('#subfilter').change(getShippingLists);
    function getSubFilter()
    {
        filter = $('#mainfilter').val();
       // alert(filter);
        data = "filter="+filter;
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
                    getShippingLists();
    }
    function getShippingLists()
    {
        fill = $('#mainfilter').val();
        subfilter = $('#subfilter').val();
        search = $('#search').val();
        sdata =  search.replace(" ","_");
        data = "fil="+fill+"&sfil="+subfilter+"&find="+sdata;
       // alert(data);
        $.ajax({
						type: "POST",
						url: "php/getShippinglists.php",
						data: data,
						cache: false,
						async: false,
						success: function(msg){
								if(msg)
								{
                                   //alert(msg); 
                                   $('#list').html(msg);
								}
								else
								{
                                    alert("something was wrong");
								}
							}
                    }); 

    }
</script>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>CouriarAdmin - user managment</title>
        <link rel="icon" href="src/icon.png">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content ="width=device-width,initial-scale=1,user-scalable=yes" />
        <link rel="stylesheet" type="text/css" media="screen" href="css/scrollbar.css" />
        <link rel="stylesheet" type="text/css" media="screen" href="css/usermanage.css" />
        <link rel="stylesheet" type="text/css" media="screen" href="css/AdminHeader.css" />

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    </head>
    <?php include_once "AdminHeader.php" ?>
    <body>
        <div class="body-container">
            <div class="subcontainer">
                <div class="display-title-container">
                    <div class="filteroptioncontainer">
                        <div class="input-title">
                            <span>Filter Lists</span>
                        </div>
                        <div class="inputs">
                            <select class="filterselect" name="filter" id="selefilter" placeholder="">
                                <option value="11">all</option>
                                <option value="12">name</option>
                                <option value="13">id</option>
                                <option value="14">email</option>
                                <option value="15">created date</option>
                                <option value="16">permissions</option>        
                            </select>
                            <input type="button" class="filtericon" style="background: #fff url('src/filter.svg') no-repeat; padding:5px; background-size:40%; background-position: 50%">    
                        </div>
                    </div>
                    <div class="subfiltercontainer">
                        <div class="input-title">
                                <span>Sub Filter</span>
                        </div>
                        <div class="inputs">
                            <select class="filterselect" name="subfilter" id="subfilter" placeholder="flter">
                                <option value="ALL">all</option>
                                <option value="name">name</option>
                                <option value="id">id</option>
                                <option value="email">email</option>
                                <option value="date">created date</option>
                                <option value="time">created time</option>
                                <option value="title">permissions</option>        
                            </select>
                            <input type="button" class="filtericon" style="background: #fff url('src/divide.svg') no-repeat; padding:5px; background-size:40%; background-position: 50%">    
                        </div>
                    </div>
                    <div class="inputboxContainer">
                        <div class="input-title">
                            <span>Search User</span>
                        </div>
                        <div class="inputs">
                            <input type="text" name="searchuser" id="inputSrcUser" placeholder="Search User by id or Email">
                            <input type="button" class="searchbtn" value="Search" style="background: #fff url('src/search.svg') no-repeat; padding:5px; background-size:15%; background-position: 5%">
                        </div>
                    </div>
                    <div class="CreateNewContainer">
                        <div class="input-title">
                            <span>for new User</span>
                        </div>
                        <button class="addnewbtn" id="btnaddnewuser" value="New User" style="background: #fff url('src/add-user.svg') no-repeat; padding:5px; background-size:10%; background-position: 5%">
                        Add New </button>
                    </div>
                </div>
                <div class="userslist">
                    <div class="listsContainer" id="userListDisplay">
                        <!-- user lists -->
                    </div>
                </div>
            </div>
            <div class="UpdateUserDetails" id="updateWindow">
                <input type="hidden" id="userid">
                <div class="Updatewindow_container">
                    <button class="canclebtn" id="closeUpdate" title="Edit Address" style="background: url('src/cancel-black.svg') no-repeat; background-size:100%;"></button>    
                    <div class="userinputdiv">
                        <div class="inputboxs">
                            <div class="inputlbl">
                                <label>User Name</label>
                            </div>
                            <div class="inputdis" >
                                <div class="inputcontainers" id="UpdateUserNameDiv">
                                    <input type="text" name="updatename" id="UpdateUserName" class="inputele" disabled>
                                    <input type="button" class="inputicon" style="background: #fff url('src/user.svg') no-repeat; padding:5px; background-size:25%; background-position: 80%">        
                                </div>  
                            </div>      
                        </div>
                        <div class="inputboxs">
                            <div class="inputlbl">
                                <label>Email</label>
                            </div>
                            <div class="inputdis">
                                <div class="inputcontainers" id="UpdateUserEmailDiv">
                                    <input type="text" class="inputele" id="UpdateUserEmail" disabled>
                                    <input type="button" class="inputicon" style="background: #fff url('src/at.svg') no-repeat; padding:5px; background-size:25%; background-position: 80%">        
                                </div>  
                            </div>          
                        </div>
                        <div class="inputboxs">
                            <div class="inputlbl">
                                <label>Resat Password</label>
                            </div>
                            <div class="inputdis">
                                <div class="inputcontainers" id="UpdateUserPasswordDiv">
                                    <input type="password" class="inputele1" id="UpdateUserPassword">
                                    <input type="button" class="inputicon" style="background: #fff url('src/lock.svg') no-repeat; padding:5px; background-size:25%; background-position: 80%">        
                                </div>  
                            </div>          
                        </div>
                        <div class="permissiondiv">
                            <div class="inputboxs">
                                <div class="inputlbl">
                                    <label> ChangePermissions</label>
                                </div>
                                <div class="inputdis">
                                    <div class="selectcontainers">
                                        <select class="selectpermission" id="UpdatePermission">
                                            <option value="101">Delivery Boy</option>
                                            <option value="102">local center</option>
                                            <option value="103">Full</option>
                                        </select>
                                        <input type="button" class="pericon" style="background: #fff url('src/permission.svg') no-repeat; padding:5px; background-size:40%; background-position: 70%">        
                                    </div>  
                                </div>          
                            </div>
                            <div class="submitbtndiv">
                                <button class="addnewbtn saveuser" id="updateuser" value="New User" style="background: #fff url('src/add-user.svg') no-repeat; padding:5px; background-size:10%; background-position: 5%">Update</button>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
            <div class="createnewdiv" id="userwindow">
                <div class="userwindow_container">
                    <button class="canclebtn" id="Userclose" title="Edit Address" style="background: url('src/cancel-black.svg') no-repeat; background-size:100%;"></button>
                    <div class="userinputdiv">
                        <div class="inputboxs">
                            <div class="inputlbl">
                                <label>User Name</label>
                            </div>
                            <div class="inputdis" >
                                <div class="inputcontainers" id="newUserNameDiv">
                                    <input type="text" name="username" id="newUserName" class="inputele">
                                    <input type="button" class="inputicon" style="background: #fff url('src/user.svg') no-repeat; padding:5px; background-size:25%; background-position: 80%">        
                                </div>  
                            </div>          
                        </div>  
                        <div class="inputboxs">
                            <div class="inputlbl">
                                <label>Email</label>
                            </div>
                            <div class="inputdis">
                                <div class="inputcontainers" id="newUserEmailDiv">
                                    <input type="text" class="inputele" id="newUserEmail">
                                    <input type="button" class="inputicon" style="background: #fff url('src/at.svg') no-repeat; padding:5px; background-size:25%; background-position: 80%">        
                                </div>  
                            </div>          
                        </div>  
                        <div class="inputboxs">
                            <div class="inputlbl">
                                <label>Password</label>
                            </div>
                            <div class="inputdis">
                                <div class="inputcontainers" id="newUserPasswordDiv">
                                    <input type="password" class="inputele1" id="newUserPassword">
                                    <input type="button" class="inputicon" style="background: #fff url('src/lock.svg') no-repeat; padding:5px; background-size:25%; background-position: 80%">        
                                </div>  
                            </div>          
                        </div>  
                    <div>
                        <div class="permissiondiv">
                            <div class="inputboxs">
                                <div class="inputlbl">
                                    <label>Permissions</label>
                                </div>
                                <div class="inputdis">
                                    <div class="selectcontainers">
                                        <select class="selectpermission" id="userPermission">
                                            <option value="101">Delivery Boy</option>
                                            <option value="102">local center</option>
                                            <option value="103">Full</option>
                                        </select>
                                        <input type="button" class="pericon" style="background: #fff url('src/permission.svg') no-repeat; padding:5px; background-size:40%; background-position: 70%">        
                                    </div>  
                                </div>          
                            </div>
                            <div class="submitbtndiv">
                                <button class="addnewbtn saveuser" id="adduser" value="New User" style="background: #fff url('src/add-user.svg') no-repeat; padding:5px; background-size:10%; background-position: 5%">Add</button>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
            <!-- -->
            <!-- -->
        </div>
    </body>
</html>
<script>
    $('#updateWindow').hide();
    $('#userwindow').hide();
     $(document).ready(function(){
        displayUserLists();
         AddbtnState = {"name":false,"email":false,"password":false};
         UpdatebtnState = {"password":false};
        $("#Userclose").click(function(){
            $("#userwindow").hide();
        })
        
        $("#btnaddnewuser").click(function(){
            $("#userwindow").show();
            $('#newUserName').val("");    
            $('#newUserPassword').val("");
            $('#newUserEmail').val("");
        });
        $("#UserDisclose").click(function(){
            $("#userwindow").show();
            $('#newUserName').val("");    
            $('#newUserPassword').val("");
            $('#newUserEmail').val("");
        });
        function checkNewUserName()
        {
            name = $('#newUserName').val();    
            //alert(name);
            if(name == "" || name == NaN)
            {
                $("#newUserNameDiv").css("border-color","red");
                AddbtnState.name = false;
            }
            else
            {
                $("#newUserNameDiv").css("border-color","black");
                AddbtnState.name = true;
            }
            addButtonStatus();
        }
        function validateEmailId(e)
        {
            var eMailRGEX = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            var eMailResult = eMailRGEX.test(e);
            return eMailResult;
        }
        function validatePass(pass)
        {
            var passRGEX=/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[#$^+=!*()@%&]).{8,10}$/;
            var passResult=passRGEX.test(pass);
            return passResult;
        }
        function addButtonStatus()
        {
            if(AddbtnState.name==false || AddbtnState.email==false || AddbtnState.password==false)
            {
                $('#adduser').attr("disabled", "disabled");
            }
            else
            {
                $('#adduser').removeAttr("disabled");     
            }
        }
        function updateButtonStatus()
        {
            if(UpdatebtnState.password==false)
            {
                $('#updateuser').attr("disabled", "disabled");
            }
            else
            {
                $('#updateuser').removeAttr("disabled");     
            }
        }
        function validateEmail()
        {
            email = $('#newUserEmail').val();
            if(validateEmailId(email))
            {
                $('#newUserEmailDiv').css("border-color","black");
                AddbtnState.email = true;
            }else if(email == "" || email == NaN)
            {
                $('#newUserEmailDiv').css("border-color","red");
                AddbtnState.email = false;
            }
            else
            {
                $('#newUserEmailDiv').css("border-color","red");
                AddbtnState.email = false;
            }
            addButtonStatus();
        }
        function validatePassword()
        {
            password = $('#newUserPassword').val();
            if(validatePass(password))
            {
                $('#newUserPasswordDiv').css("border-color","black");
                AddbtnState.password = true;
            }
            else if(password == "" || password == NaN)
            {
                $('#newUserPasswordDiv').css("border-color","red");
                AddbtnState.password = false;
            }
            else
            {
                $('#newUserPasswordDiv').css("border-color","red");
                AddbtnState.password = false;
            }
            addButtonStatus();
        }
        
        function UpdateValidatePassword()
        {

            password = $('#UpdateUserPassword').val();
            if(validatePass(password))
            {
                $('#UpdateUserPasswordDiv').css("border-color","black");
                UpdatebtnState.password = true;
            }
            else if(password == "" || password == NaN)
            {
                $('#UpdateUserPasswordDiv').css("border-color","red");
                UpdatebtnState.password = false;
            }
            else
            {
                $('#UpdateUserPasswordDiv').css("border-color","red");
                UpdatebtnState.password = false;
            }
            updateButtonStatus();
        }
        $("#newUserName").keyup(checkNewUserName);
        $("#newUserEmail").keyup(validateEmail);
        $('#newUserPassword').keyup(validatePassword);
        $('#UpdateUserPassword').keyup(UpdateValidatePassword);
        $('#closeUpdate').click(function(){
            $('#updateWindow').hide();
        });
        $('#adduser').click(function(){
            name = $('#newUserName').val();    
            password = $('#newUserPassword').val();
            email = $('#newUserEmail').val();
            permission = $('#userPermission').val();
            if(AddbtnState.name==true && AddbtnState.email==true && AddbtnState.password==true)
            {
                Name = name.replace(" ","_");
                data = "name="+Name+"&email="+email+"&password="+password+"&permission="+permission;
                //alert(data);
                $.ajax({
						type: "POST",
						url: "php/Addadmin.php",
						data: data,
						cache: false,
						async: false,
						success: function(msg){
								if(msg)
								{
                                    $("#userwindow").hide();
									alert("saved username");
								}
								else
								{
                                    alert("user email are allready exist");
								}
							}
					});  
                    displayUserLists();        
            }
        });
        $('#subfilter').change(displayUserLists);
        $('#inputSrcUser').keyup(displayUserLists);
        $('#selefilter').change(function(){ 
            fil = $('#selefilter').val();
            data = "filter="+fil;
            $.ajax({
						type: "POST",
						url: "php/subfilter.php",
						data: data,
						cache: false,
						async: false,
						success: function(msg){
								if(msg)
								{
                                    $('#subfilter').html(msg);
								}
								else
								{
                                    alert("something is wrong");
								}
							}
					}); 
                    displayUserLists();      
        });
        function displayUserLists()
        {
            filter = $('#selefilter').val();
            subfilter = $('#subfilter').val();
            search = $('#inputSrcUser').val();
            searchkey = search.replace(" ","_");
            data = "filter="+filter+"&subfilter="+subfilter+"&search="+searchkey;
            $.ajax({
						type: "POST",
						url: "php/adminUserList.php",
						data: data,
						cache: false,
						async: false,
						success: function(msg){
								if(msg)
								{
                                  $('#userListDisplay').html(msg);
								}
								else
								{
                                    alert("something was wrong");
								}
							}
					}); 
            }
            $('#updateuser').click(function(){
                permission = $('#UpdatePermission').val();
                id = $('#userid').val();
                password = $('#UpdateUserPassword').val();
                data = "id="+id+"&password="+password+"&permission="+permission;
                $.ajax({
						type: "POST",
						url: "php/updateAdminUser.php",
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
                                    alert("something was wrong");
								}
							}
                    }); 
                    displayUserLists();      
            });
           
     });
    function editUserDetails(id)
    {
        //alert ("edit user "+id);
        $('#updateWindow').show();
        data = "id="+id;
        $.ajax({
						type: "POST",
						url: "php/getAdminUser.php",
						data: data,
						cache: false,
						async: false,
						success: function(msg){
								if(msg)
								{
                                result = JSON.parse(msg);
                                $('#UpdateUserName').val(result.name);
                                $('#UpdateUserEmail').val(result.email);
                                $('#UpdatePermission').val(result.permission);
                                $('#userid').val(result.id);
								}
								else
								{
                                    alert("something was wrong");
								}
							}
					}); 
    }
    function RemoveUser(id)
    {
       // alert("remove user"+id);
       if(confirm("Are your sure to delete this user with id = "+id))
       {
            data = "id="+id;
            $.ajax({
						type: "POST",
						url: "php/removeUser.php",
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
                                    alert("something was wrong");
								}
							}
                    }); 
        }
       
            filter = $('#selefilter').val();
            subfilter = $('#subfilter').val();
            search = $('#inputSrcUser').val();
            searchkey = search.replace(" ","_");
            data = "filter="+filter+"&subfilter="+subfilter+"&search="+searchkey;
            $.ajax({
						type: "POST",
						url: "php/adminUserList.php",
						data: data,
						cache: false,
						async: false,
						success: function(msg){
								if(msg)
								{
                                  $('#userListDisplay').html(msg);
								}
								else
								{
                                    alert("something was wrong");
								}
							}
					}); 
            
    }
</script>             
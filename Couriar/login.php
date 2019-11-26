<html>
	<head>
		<title>Couriar Login</title>
		<link rel="stylesheet" href="css/styles.css">
		<link rel="stylesheet" href="css/scrollbar.css">
		<link rel="stylesheet" href="css/signup.css">
		<link rel="icon" href="src/icon.png">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
		
	</head>
	<body>
		<div class="modal" style="display:block;"> 			
				<div class="modal-content animate" style="background-image:url('src/couriar_cover.png')">
					<div class="benifit">
						<div class="login-features">
							<div class="login-features-logo">
								<object data="src/tracking.svg" type="image/svg+xml" class="path"></object>
							</div>
							<div class="login-feature">
								<h4>MANAGE YOUR ORDERS</h4>
								<p>Track orders, manage cancellations & returns.</p>
							</div>
						</div>
						<div class="login-features">
							<div class="login-features-logo">
								<object data="src/agenda.svg" type="image/svg+xml" class="path"></object>
							</div>
							<div class="login-feature">
								<h4>MANAGE YOUR CONTACTS</h4>
								<p>save your contacts and search from contacts book.</p>
							</div>
						</div>
						<div class="login-features">
							<div class="login-features-logo">
								<object data="src/bellring.svg" type="image/svg+xml" class="path"></object>
							</div>
							<div class="login-feature">
								<h4>AWESOME OFFERS UPDATES FOR YOU</h4>
								<p>Be first to know about great offers and save.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="login">
				<form id="signin" method="POST" action="php/log.php">
					<div class="login-content" id="login_step1">
						<header class="login-header"><h2>Login or sign up on couriar</h2></header>
						<p class="login-intro">Please provide your Email or Mobile number to Login or sign up on Couriar.</p>
						
							<input type="text" id="sign" name="signid" placeholder="Email or Mobile Number" class="login-uid-input" height='40px' required>
							<button id="next" name="next" class="btn-next" >CONTINUE</button>
							<span class="login-opt">or Login Using</span>
							<button type="button" class="google-button ">
								<span class="google-button__icon">
									<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 224 224" style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,224v-224h224v224z" fill="none"></path><g fill="#ffffff"><path d="M117.08667,95.564v35.66267h50.82c-6.64533,21.60667 -24.70533,37.072 -50.82,37.072c-31.09867,0 -56.308,-25.20933 -56.308,-56.29867c0,-31.08933 25.20933,-56.29867 56.308,-56.29867c13.98133,0 26.74933,5.124 36.596,13.56133l26.264,-26.264c-16.58533,-15.11067 -38.64933,-24.332 -62.86,-24.332c-51.55733,0 -93.352,41.78533 -93.352,93.33333c0,51.548 41.79467,93.33333 93.352,93.33333c78.36267,0 95.65733,-73.26667 87.976,-109.648z"></path></g></g></svg>
								</span>
								<span class="google-button__text">Google</span>
							</button>
							<button type="button" class="facebook-button">
								<span class="facebook-button__icon">
									<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 58 58"><defs><style>.cls-1{fill:#fff;}</style></defs><title>flogo-HexRBG-Wht-58</title><path class="cls-1" d="M53.85,0H3.15A3.15,3.15,0,0,0,0,3.15v50.7A3.15,3.15,0,0,0,3.15,57h27.3V35H23V26.33h7.41V20c0-7.37,4.49-11.38,11.06-11.38A62.15,62.15,0,0,1,48.15,9v7.69H43.61c-3.57,0-4.26,1.69-4.26,4.18v5.5H47.9L46.79,35H39.35V57h14.5A3.15,3.15,0,0,0,57,53.85V3.15A3.15,3.15,0,0,0,53.85,0Z"/></svg>
								</span>
								<span class="facebook-button__text">facebook</span>
							</button>
					
					</div>
					<div class="login-content" id="login_step2">
						<header class="login-header"><h2>Login on couriar</h2></header>
						<p class="login-intro">Please provide your Password to SignIn on Couriar.</p>
						
							<p class="display-id-intro" name="uid" id="uid"></p>
							<input type="Password" id="pass1" name="signpass" placeholder="Password" class="login-uid-input" height='40px'>
							<button id="chkpass" name="next" class="btn-next">SIGN IN</button>
							<span class="login-opt">or Login Using</span>
							<button type="button" class="google-button ">
								<span class="google-button__icon">
									<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 224 224" style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,224v-224h224v224z" fill="none"></path><g fill="#ffffff"><path d="M117.08667,95.564v35.66267h50.82c-6.64533,21.60667 -24.70533,37.072 -50.82,37.072c-31.09867,0 -56.308,-25.20933 -56.308,-56.29867c0,-31.08933 25.20933,-56.29867 56.308,-56.29867c13.98133,0 26.74933,5.124 36.596,13.56133l26.264,-26.264c-16.58533,-15.11067 -38.64933,-24.332 -62.86,-24.332c-51.55733,0 -93.352,41.78533 -93.352,93.33333c0,51.548 41.79467,93.33333 93.352,93.33333c78.36267,0 95.65733,-73.26667 87.976,-109.648z"></path></g></g></svg>
								</span>
								<span class="google-button__text">Google</span>
							</button>
							<button type="button" class="facebook-button">
								<span class="facebook-button__icon">
									<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 58 58"><defs><style>.cls-1{fill:#fff;}</style></defs><title>flogo-HexRBG-Wht-58</title><path class="cls-1" d="M53.85,0H3.15A3.15,3.15,0,0,0,0,3.15v50.7A3.15,3.15,0,0,0,3.15,57h27.3V35H23V26.33h7.41V20c0-7.37,4.49-11.38,11.06-11.38A62.15,62.15,0,0,1,48.15,9v7.69H43.61c-3.57,0-4.26,1.69-4.26,4.18v5.5H47.9L46.79,35H39.35V57h14.5A3.15,3.15,0,0,0,57,53.85V3.15A3.15,3.15,0,0,0,53.85,0Z"/></svg>
								</span>
								<span class="facebook-button__text">facebook</span>
							</button>
					</div>
				</form>
					<div class="signin" id="signup">
						<header class="login-header"><h2>Signup on Couriar</h2></header>
						<input type="tel" id="supmob" name="mob" placeholder="mobile number" autocomplete="off" class="signup-box" style="padding:15px;" required>
						<input type="email" id="supemail" name="email" placeholder="E-mail" autocomplete="off" class="signup-box" style="padding:15px;" required>
						<input type="text" id="supname" name="name" placeholder="Username" autocomplete="off" class="signup-box" style="padding:15px;" required>
						<input type="text" id="supdob" name="dob" placeholder="Date of Birth" class="signup-box" autocomplete="off" style="padding:15px;" required>
						<input type="password" id="suppass" name="password" placeholder="Password" class="signup-box" autocomplete="off" style="padding:15px;" required>
						<p class="pass-intro">Password should have a minimum of 6 characters, at least 1 numeric and 1 alphabet</p>
						<div style="float:left; margin:10px;">
							<label style="signed-in">
								<input type="checkbox" class="login-checkbox" checked="true"><span class="keep-login-span">Keep me logged in</span>
							</label>
						</div>
						<button id="sup" name="next" class="btn-next-login">CONTINUE</button>
						<div>
							<p class="term-intro">By registering, I agree to <a class="term-intro">Terms and Conditions</a>.</p>
						</div>
					</div>
				</div>
			</div>
	</body>
</html>
<script>
	$('#signup').hide();
	$('#login_step2').hide();
	$('#login_step1').show();
	$(document).ready(function(){
		$( "#supdob" ).datepicker({dateFormat: 'dd-mm-yy'});
		$("#next").click(function(){
				var UserId = $("#sign").val();
				if(validateEmail(UserId) || validatePhone(UserId))
				{
					var dataString = 'userId='+UserId;
					$.ajax({
						type: "POST",
						url: "php/checkId.php",
						data: dataString,
						cache: false,
						success: function(result){
								if(result==true)
								{
									$('#login_step1').hide();
									$('#login_step2').show();
									$("#uid").text(UserId);
								}
								else if(result==false)
								{
									$('#login_step1').hide();
									$('#signup').show();
									if(validateEmail(UserId))
									{
										$("#supemail").val(UserId);
									}
									else if(validatePhone(UserId))
									{
										$("#supmob").val(UserId);
									}
								}
							}
					});
					return false;
				}
				else if(UserId==null)	
				{
					alert('somethings gone wrong!!!');
				}
			
		});
		$("#chkpass").click(function(){
			var uId = $('#sign').val();
			var pass = $("#pass1").val();
			if(!(uId == "") && !(pass == ""))
			{
				var ds = 'uId='+uId+'&pass='+pass;
					$.ajax({
						type: "POST",
						url: "php/checkPass.php",
						data: ds,
						cache: false,
						success: function(result){
								if(result>0)
								{
									alert(result);
									document.getElementById("signin").submit();
								}
								else if(result==false)
								{
									alert('login failed');
								}
							}
					});
					return false;
			}
		}); 
		$("#sup").click(function(){
			if(signUpValidate())
			{
				var sEmail = $('#supemail').val();
				var sMob = $("#supmob").val();
				var sUname = $("#supname").val();
				var sDob = $("#supdob").val();
				var sPass = $("#suppass").val();
				var subString = 'email='+sEmail+'&mob='+sMob+'&uname='+sUname+'&dob='+sDob+'&pass='+sPass;
				var isEmail = checkId(sEmail);
				var isMob = checkId(sMob);
				alert(subString);
				if(checkError('#supemail',isEmail)==true&&checkError('#supmob',isMob)==true)
				{
					$.ajax({
						type: "POST",
						url: "php/addData.php",
						data: subString,
						cache: false,
						async: false,
						success: function(msg){
								if(msg == true){alert("data saved .....!");}else{alert("data not saved...!!");}
							}
					});
				}
				return false;
			}
			else
			{
				alert("data not saved....!");
				return false;
			}
		}); 
			function checkError(htmlId,isTrue)
			{
				if(isTrue == true){$(htmlId).css("border-color","red"); return false;}else{$(htmlId).css("border-color",""); return true;}
			}
			function checkId(id)
			{
				var rat = {a:false};
				$.ajax({
						type: "POST",
						url: "php/checkId.php",
						data: 'userId='+id,
						cache: false,
						async: false,
						success: function(msg){
								if(msg)
								{
									rat.a = true;
								}
								else
								{
									rat.a = false;
								}
							}
					});
					return rat.a;
			}
			function signUpValidate()
			{
				var emailFlag,mobFlag,unmFlag,dobFlag,passFlag = false;
				var vEmail = $('#supemail').val();
				var vMob = $("#supmob").val();
				var vUname = $("#supname").val();
				var vDob = $("#supdob").val();
				var vPass = $("#suppass").val();
				if(isEmpty(vMob)){$("#supmob").css("border-color","red"); mobFlag=false;}else if(validatePhone(vMob)){$("#supmob").css("border-color",""); mobFlag=true;}else{$("#supmob").css("border-color","red"); mobFlag=false;}
				if(isEmpty(vEmail)){$("#supemail").css("border-color","red"); emailFlag=false;}else if(validateEmail(vEmail)){$("#supemail").css("border-color",""); emailFlag=true;}else{$("#supemail").css("border-color","red"); emailFlag=false;}
				if(isEmpty(vDob)){$("#supdob").css("border-color","red"); dobFlag=false;}else if(validateDate(vDob)){$("#supdob").css("border-color",""); dobFlag=true;}else{$("#supdob").css("border-color","red"); dobFlag=false;}
				if(isEmpty(vPass)){$("#suppass").css("border-color","red"); passFlag=false;}else if(validatePass(vPass)){$("#suppass").css("border-color",""); passFlag=true;}else{$("#suppass").css("border-color","red"); passFlag=false;}
				if(isEmpty(vUname)){$("#supname").css("border-color","red"); unmFlag=false;}else if(validateUname(vUname)){$("#supname").css("border-color",""); unmFlag=true;}else{$("#supname").css("border-color","red"); unmFlag=false;}
				if(emailFlag==true&&mobFlag==true&&unmFlag==true&&dobFlag==true&&passFlag==true){return true;}else{return false;}
			}
			function isEmpty(p)
			{
				if(p=="" || p==null)
				{
					return true;
				}
				else
				{
					return false;
				}
			}
			function validateEmail(email)
			{
				var eMailRGEX = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
				var eMailResult = eMailRGEX.test(email);
				return eMailResult;
			}
			function validatePhone(phone)
			{
				var phoneRGEX = /^[(]{0,1}[0-9]{3}[)]{0,1}[-\s\.]{0,1}[0-9]{3}[-\s\.]{0,1}[0-9]{4}$/;
				var phoneResult = phoneRGEX.test(phone);
				return phoneResult;
			}	
			function validateDate(dob)
			{
				var dobRGEX= /^\s*(3[01]|[12][0-9]|0?[1-9])\-(1[012]|0?[1-9])\-((?:19|20)\d{2})\s*$/;
				var dobResult = dobRGEX.test(dob);
				return dobResult;
			}
			function validatePass(pass)
			{
				var passRGEX=/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[#$^+=!*()@%&]).{8,10}$/;
				var passResult=passRGEX.test(pass);
				return passResult;
			}
			function validateUname(un)
			{
				var unameRGEX=/([a-zA-Z]{1}[a-zA-Z]*[\s]{0,1}[a-zA-Z])([\s]{0,1}[a-zA-Z]+)/;
				var unameResult=unameRGEX.test(un);
				return unameResult;
			}
	});
</script>
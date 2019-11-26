<html>
	<head>
		<title>Admin Login</title>
		<link rel="stylesheet" href="css/scrollbar.css">
        <link rel="stylesheet" href="css/adminlogin.css">

		<link rel="icon" href="src/icon.png">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	</head>
    <body>
            <div class="container">
                <div class="couriaricon_container">
                    <object data="src/icon.svg" type="image/svg+xml" class="icon"></object>
                </div>
                <div class="title_container">
                    <label>Couriar Admin Panel</label>
                </div>
                <div class="loginInputcontainers">
                    <form method="POST" action="php/adminLogin.php">
                        <div class="input_box">
                            <div class="inputlbl">
                                    <label>User Id</label>
                            </div>
                            <div class="inputer">
                                <object data="src/user.svg" type="image/svg+xml" class="inputicon"></object>
                                <input type="text" name="uid" class="inputs">
                            </div>
                        </div>
                        <div class="input_box">
                            <div class="inputlbl">
                                    <label>Password</label>
                            </div>
                            <div class="inputer">
                                <object data="src/lock.svg" type="image/svg+xml" class="inputicon"></object>
                                <input type="password" name="pass" class="inputs">
                            </div>
                        </div>
                        <div class="input_box inputbtndiv">
                            <input type="submit" class="submitbtn" style="background: #fff url('src/login.svg') no-repeat; padding:5px; background-size:15%; background-position: 5%">
                        </div>
                    <form>
                </div>
            </div>
    </body>
</html>
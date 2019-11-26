<header class="header" style="z-index:1;">
    <div class="HeaderLogoContainer">
        <object data="src/logo.svg" type="image/svg+xml" class="Headerlogo"></object>
    </div>
    <div class="optionsContainer">
        <div class="optContainer" id="user">
            <div class="userShow">
                <span class="username"><?php
                session_start();
				if(isset($_COOKIE['aid']))
				{
					include_once 'php/db_config.php';	
					$sql = "SELECT * FROM `adminlogin` WHERE aid=".$_COOKIE['aid'];
					$result = mysqli_query($conn,$sql);
					if(($row=mysqli_num_rows($result)>0))
					{
						if($data = mysqli_fetch_assoc($result))
						{
							echo "<input type='hidden' id='aid' value=".$data['aid'].">";
							echo "Hello, ";
							$a = $data['adminname'];
							$unm = explode(" ",$a);
							echo $unm[0];
						}
					}
					else
					{
						header("location:http://localhost/Project/adminLogin.php");
					}
				}
				else
				{
					header("location:http://localhost/Project/adminLogin.php");
				}
				?></span>
            </div>
            <div class="userOption" id="useropt">
                <a href="http://localhost/Project/php/AdminLogout.php">logout</a>
            </div>
        </div>
        <div class="optContainer" id="options">
            <div class="optionbtn_container">
                <span class="menutitle">Menu</span>
            </div>
            <div class="menuOptions" id="menu">
                <a href="http://localhost/Project/userManagment.php">User Manage</a>
                <a href="http://localhost/Project/OrdersManagement.php">Orders Manage</a>
                <a href="http://localhost/Project/setCharges.php">Service Charges</a>
                <a href="http://localhost/Project/OrderReports.php">Orders Report</a>
            </div>
        </div>
    </div>
</header>
    <script>
	 $(document).ready(function(){
		 function showHide()
		 {
			/*$("#dropAccOpt").show();*/
			if($("#useropt").is(":visible")){
				$("#useropt").hide();
            } else{
				$("#useropt").show();
            }
		 }
		 function showHidemenu()
		 {
			/*$("#dropAccOpt").show();*/
			if($("#menu").is(":visible")){
				$("#menu").hide();
            } else{
				$("#menu").show();
            }
		 }
		$("#useropt").hide();
        $("#menu").hide();
		$("#user").hover(showHide);
        $("#options").hover(showHidemenu);

	 });
	</script>

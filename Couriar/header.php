<?php include_once "php/checkCookie.php" ?>
<header class="header" style="z-index:1;">
<style>
	.account_option
{
    height:100px;
    width:125px;
    margin-top: 20px;
    display: block;
    background-color: #abcdef;
    position: absolute;
    right: 0%;
}
.account_option a {
    color: black;
    text-decoration: none;
    display: block;
    padding: 5px;
    text-align: left;
    font-family: Arial, Helvetica, sans-serif;
    font-size: 12px;
    font-weight: 100;
  }
  a:hover
  {
      background-color:#0c71d6;
      color: white;
  }
</style>
	<object data="src/logo.svg" type="image/svg+xml" class="logo"></object>
	
	<div class="header-links">
		<div class="header-link" id="btnAcc">
			
				<?php
				if(isset($_COOKIE['id']))
				{
					include_once 'php/db_config.php';	
					$sql = "SELECT * FROM `login` WHERE id=".$_COOKIE['id'];
					$result = mysqli_query($conn,$sql);
					if(($row=mysqli_num_rows($result)>0))
					{
						if($data = mysqli_fetch_assoc($result))
						{
							echo "<span class='header-link-text' id='username'>";
							echo "Hello, ";
							$a = $data['uname'];
							$unm = explode(" ",$a);
							echo $unm[0];
							echo "<input type='hidden' id='svalue' value='".$_COOKIE['id']."'>";
							echo "</span>";
							
						}
					}
					else
					{
						echo "<span class='header-link-text' id='username'>";
						echo "<input type='hidden' id='svalue' value='0'>";
						echo 'login';
						echo "</span>";
						
					}
				}
				else
				{
					echo "<span class='header-link-text' id='username'>";
					echo "<input type='hidden' id='svalue' value='0'>";
					echo "login";
					echo "</span>";
					
				}
				?>
			
			<div id="dropAccOpt" class="account_option">
				<?php
						if(isset($_COOKIE['id']))
						{
							echo "<a href='home.php'>home</a>";
							echo "<a href='orders.php'>Manage Orders</a>";
							echo "<a href='offers.php'>Offers</a>";
							echo "<a href='php/signout.php'>SignOut</a>";
							//echo "<a href='signout.php'>".$_COOKIE['id']."</a>";
						}
						else
						{
							echo "<a href='home.php'>home</a>";

							echo "<a href='login.php'>Login</a>";
							//echo "<a href='signout.php'>".$_COOKIE['id']."</a>";
						}
				?>
				
			</div>
		</div>
	</div>
	<div class="orderlink">
		<a class="orderlinka" href="orders.php">Find your Order</a>
	</div>
	<script>
	 $(document).ready(function(){
		 function showHide()
		 {
			/*$("#dropAccOpt").show();*/
			if($("#dropAccOpt").is(":visible")){
				$("#dropAccOpt").hide();
            } else{
				$("#dropAccOpt").show();
            }
		 }
		$("#dropAccOpt").hide();
		$("#btnAcc").click(showHide);

	 });
	</script>
</header>
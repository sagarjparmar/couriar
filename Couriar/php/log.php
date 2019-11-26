<?php
    session_start();
	$Id =  $_POST["signid"]; //"sagarparmarsjp@gmail.com";
    $Pass = $_POST["signpass"];//"sagar123@";
	$conn = mysqli_connect("localhost","root","123","test");
	$sql = "SELECT * FROM `login` WHERE (email = '$Id' or mobile='$Id') and password = '$Pass'";
	$result = mysqli_query($conn,$sql);
	$row = mysqli_num_rows($result);
	if($row>0)
	{
		while($data = mysqli_fetch_assoc($result))
		{
		//	$_SESSION['user_name']= $data['uname'];
			$_SESSION['uid']=$data['id'];    
		}
		$cookie_name = "id";
		$cookie_value = $_SESSION['uid'];
		setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
        header("location: http://localhost/Project/reuest.php");
	}
	else
	{
        $_SESSION['user_id']=null;
	}

	mysqli_close($conn);
?>
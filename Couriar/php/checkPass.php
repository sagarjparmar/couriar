<?php
	$Id =  $_POST["uId"]; //"sagarparmarsjp@gmail.com";
	$Pass = $_POST["pass"];//"sagar123@";
	$conn = mysqli_connect("localhost","root","123","test");
	$sql = "SELECT * FROM `login` WHERE (email = '$Id' or mobile='$Id') and password = '$Pass'";
	$result = mysqli_query($conn,$sql);
	$row = mysqli_num_rows($result);
	if($row>0)
	{
		while($data = mysqli_fetch_assoc($result))
		{
			echo $data['id'];
		}
	}
	else
	{
		echo false;
	}
	mysqli_close($conn);
?>
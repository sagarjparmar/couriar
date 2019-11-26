<?php
	$Id = $_POST["userId"];
	$conn = mysqli_connect("localhost","root","123","test");
	$sql = "SELECT * FROM `login` WHERE email = '$Id' or mobile='$Id'";
	$result = mysqli_query($conn,$sql);
	$row = mysqli_num_rows($result);
	if($row>0)
	{
		echo true;
	}
	else
	{
		echo false;
	}
	mysqli_close($conn);
?>
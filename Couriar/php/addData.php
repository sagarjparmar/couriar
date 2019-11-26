<?php
	$email = $_POST["email"];
	$mobile = $_POST["mob"];
	$password =$_POST["pass"];
	$uname = $_POST["uname"];
	$d = $_POST["dob"];
	$dob = convertDate($d);
	$conn = mysqli_connect("localhost","root","123","test");
	$sql ="INSERT INTO `login`(`email`, `mobile`, `password`, `uname`, `dob`) VALUES ('$email','$mobile','$password','$uname','$dob')";
	$result = mysqli_query($conn,$sql);
	if($result)
	{echo true;}
	else
	{echo false;}
	mysqli_close($conn);
	function convertDate($dt)
	{
		$date = explode('-',$dt);
		$year=$date[2];
		$month = $date[1];
		$day = $date[0];
		$result = "$year-$month-$day";
		return $result;
	}
?>
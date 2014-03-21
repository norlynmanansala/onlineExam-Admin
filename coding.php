<?php 
	include 'config.php';

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	$sql = mysql_query("INSERT INTO examinee(fname,lname,email,password) VALUES ('$fname', '$lname','$email','$password')");
	if (!empty($sql)) {
		echo "<script>alert('Successfully register'); window.location.href='middle.php';</script>";
	} else {
		echo "<script>alert('Can't Register'); window.location.href='front.php';</script>";
	}

 ?>
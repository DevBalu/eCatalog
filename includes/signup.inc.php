<?php 
	include_once('../dbh.php');

	$uid = $_POST['username'];
	$upsw = $_POST['password'];

	$sql = ("INSERT INTO user (username ,password) VALUES ('$uid', '$upsw')");
	$result = $conn->query($sql);

	if ($result) {
		header("Location: ../login.php");
	} else {
		echo "Registration failed";
	}
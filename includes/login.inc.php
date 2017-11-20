<?php 
	require_once '../dbh.php'; 
	session_start();

	$uid = $_POST['username'];
	$upsw = $_POST['password'];

	$sql = ("SELECT * FROM profesori WHERE login='$uid' AND password='$upsw'");
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();

	if (empty($row)) {
		header("Location: ../login.php");
	} else {
		$_SESSION['lvl'] = $row['acces_lvl'];
		$_SESSION['user'] = $row['nume'] . " " .$row['prenume'];
		$_SESSION['u_id'] = $row['id'];
		$_SESSION['u_idg'] = $row['idg'];
		header("Location: ../index.php");
	}
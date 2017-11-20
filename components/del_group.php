<?php 
	require_once("../dbh.php");

	if ($conn) {
		if (!empty($_GET['idg'])) {
			$idg = $_GET['idg'];
		}

		$sql = "DELETE FROM `grupe` WHERE `grupe`.`id` = $idg";
		$conn->query($sql);
		header("Location: ../grupe.php");
	}else{
		print "Connection failed!";
	}
 ?>
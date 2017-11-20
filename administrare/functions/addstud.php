<?php 

	require './dbconnect.php';
	if (!empty($_POST['stud1']) && !empty($_POST['stud2']) && !empty($_POST['stud3'])) {
		$studName = $_POST['stud1'];
		$studLname = $_POST['stud2'];
		$studGrup = $_POST['stud3'];
		if ($con) {
			$query = "INSERT INTO `studenti` VALUES (NULL, '$studGrup', '$studName', '$studLname')";

			$res = $con->query($query) === true;

			if (!$res) {
				die('Err to add stud!');
			}
		}
	}else {
		print "cimpurile nu sunt indeplenite";die;
	}


	header('Location: ../addstudent.php');
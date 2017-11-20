<?php

	require './dbconnect.php';
	if (!empty($_POST['prof1']) && !empty($_POST['prof2']) && !empty($_POST['prof3']) && !empty($_POST['prof4']) && !empty($_POST['prof5']) && !empty($_POST['prof6']) && !empty($_POST['prof7'])) {

		$lvl = $_POST['prof4'];

		$profGrId = $_POST['prof5'];
		$profName = $_POST['prof1'];
		$profLname = $_POST['prof2'];
		$profFunctie = $_POST['prof3'];
		$profLogin = $_POST['prof6'];
		$profPass = $_POST['prof7'];


	}else {
		print "nu toate cimpurile sunt indeplenite";
	}
	if ($con) {
		$query = "INSERT INTO profesori VALUES (NULL, '$profGrId', '$profName', '$profLname', '$profFunctie', '$profLogin', '$profPass', '$lvl')";

		$res = $con->query($query) === true;

		if (!$res) {
			die('Err to add prof!');
		}
	}

	header('Location: ../addprof.php');
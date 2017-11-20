<?php 

	require './dbconnect.php';

	if (!empty($_POST['grup1']) && $_POST['grup2']) {
		$grupNume = $_POST['grup1'];
		$grupAbrev = $_POST['grup2'];
	}

	if ($con) {
		$query = "INSERT INTO `grupe` (`id`, `nume`, `abreviere`) VALUES ('', '$grupNume', '$grupAbrev')";
		$res = $con->query($query);

		if (!$res) {
			die('Err to add grupa!');
		}
	}


	header('Location: ../addgrupa.php');
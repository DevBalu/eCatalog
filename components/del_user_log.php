<?php
	require_once("../dbh.php");

	if ($conn) {
		// function that remove profesori
		if(!empty($_GET['prof'] )){
			$table = "profesori";
			$id = $_GET['prof'];
		}

		// function that remove studenti
		if(!empty($_GET['std'])){
			$table = "studenti";
			$id = $_GET['std'];
		}

		// function that remove obiecte
		if (!empty($_GET['id_obj'])) {
			$id = $_GET['id_obj'];
			$table = "studenti";
		}

		if (!empty($_GET['idg']) && !empty($_GET['ng'])) {
			$idg = $_GET['idg'];
			$ng = $_GET['ng'];
		}


		$sql = "DELETE FROM `$table` WHERE `$table`.`id` = $id";
		$conn->query($sql);

	}else {
		print "connection is failed";
	}
	header("Location: ../group_res.php?idg=" . $idg . "&ng=" . $ng);


 ?>
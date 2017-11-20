<?php 
	require_once("../dbh.php");

	if ($conn) {
		// function that remove obiecte
		if (!empty($_GET['std']) && !empty($_GET['id_obj'])) {
			$id_nota = $_GET['id_nota'];
			$id_std = $_GET['std'];
			$id_obj = $_GET['id_obj'];
			$nm = $_GET['nm'];

			$sql = "DELETE FROM `note` WHERE `note`.`id` = $id_nota";

			$conn->query($sql);
			header("Location: ../obiecte.php?std=" . $id_std . "&nm=" . $nm . "&id_obj=" . $id_obj);
		}else {
			print "nota nu poate fi ștearsă";die;
		}

	}else{
		print "Connection failed!";
	}
 ?>
<?php 
	require_once("../dbh.php");
	if ($conn) {
		// function that add nota
		if (!empty($_GET['std']) && !empty($_GET['id_obj'])) {
			$id_std = $_GET['std'];
			$id_obj = $_GET['id_obj'];
			$nm = $_GET['nm'];
			$nota = $_POST['nota'];

			$sql = "INSERT INTO `note` (`id`, `id_st`, `id_ob`, `nota`, `data`) VALUES (NULL, '$id_std', '$id_obj', '$nota', CURRENT_TIMESTAMP)";

			$conn->query($sql);
			header("Location: ../obiecte.php?std=" . $id_std . "&nm=" . $nm . "&id_obj=" . $id_obj);
		}else {
			print "nota nu poate fi adaugată";die;
		}

	}else{
		print "Connection failed!";
	}
 ?>
<?php 
	session_start();
	require_once("../dbh.php");

	if (!empty($_POST['search'])) {
		$search_word = $_POST['search'];
	}else{
		header("Location: ../index.php");
	}


	$tags_array = explode(' ', $search_word);
	$i = 0;
	$sql = 'SELECT p.* FROM profesori p WHERE p.nume';
	foreach($tags_array as $row){
		if ($i == 0) {
			$sql .= " " . "LIKE" . " " . "'%" . $row . "%'";
		}
		else {
			$sql .= " " . "OR p.teg LIKE" . " " . "'%" . '' . $row . "%'" . ' ';
		}
		$i++;
	}
		//request from table post , in order to compare filedt tags with value from input user
	$reqteg = mysqli_query($conn, "$sql");
	$res = "";
	while($row = $reqteg->fetch_object()){
		print"<pre>";
		print_r($row);
		print"</pre>";

	}

 ?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Catalog Online</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="../images/logo1.png">
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../css/profesori.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	</head>

	<body>
		<div class="row header">
			<a href="../index.php"><img src="../images/logo1.png"></img></a>
			<div id="logout"><a href="includes/logout.inc.php">Logout</a></div>
		</div>

		<?php require_once("leftbar.php") ?>

		<div class="col-sm-9">

			 <div class="page-header">
				<h1>Catedra Tehnologii  Informationale</h1>
				<h2><?php //print $anons; ?></h2>
			</div>
				
			<table class="table table-hover">
				<thead>
					<tr>
						<th>Nume</th>
						<th>Prenume</th>
						<th>Functie</th>
					</tr>
				</thead>
				<tbody>
					<?php  print $res; ?>
				</tbody>
			</table>

		</div>

	</body>
</html>
<?php 
	require_once("functions/dbconnect.php");

	$sql_groups = "SELECT * FROM `grupe`";
	$result_groups = $con->query($sql_groups);

	$all_group = "";
	while($res_gr = $result_groups->fetch_object()){
		$all_group .= '<option class="dropdown-item" value="' . $res_gr->id .'">' . $res_gr->abreviere .'</option>';
	}
 ?>
<!DOCTYPE html>
<html lang="en">
	<?php require "./includes/head.php"; ?>
	<body>
		<div class="container">
			<?php require "./includes/navbar.php"; ?>

			<div class="row justify-content-md-center justify-content-lg-center">
				<div class="col-lg-8 col-md-10 col-sm-12">
					<form action="./functions/addstud.php" method="post">
						<div class="input-group" style="padding: 20px 0">
							<span class="input-group-addon" id="student-name">@</span>
							<input name="stud1" type="text" class="form-control" placeholder="Nume" aria-describedby="student-name">
						</div>
						<div class="input-group" style="padding: 20px 0">
							<span class="input-group-addon" id="student-lname">@</span>
							<input name="stud2" type="text" class="form-control" placeholder="Prenume" aria-describedby="student-lname">
						</div>
						<!-- all group -->
						<div class="input-group">
							<span class="input-group-addon" id="prof-grupaid1">@</span>
							<select name="stud3" class="btn-block form-control" aria-describedby="prof-grupaid1" placeholder="Alegeti Grupa">
								<?php print $all_group; ?>
							</select>
						</div>
						<!--END  all group -->
						<div class="input-group" style="padding: 20px 0">
							<input type="submit" class="btn btn-block btn-lg" value="Salveaza Student" style="background: #93bcff">
						</div>
					</form>
				</div>
			</div>
		</div>

		<?php require "./includes/scripts.php"; ?>
	</body>
</html>
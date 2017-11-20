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
			<?php require './includes/navbar.php'; ?>

			<div class="row justify-content-md-center justify-content-lg-center">
				<div class="col-lg-8 col-md-10 col-sm-12">
					<form action="./functions/addpro.php" method="post">
						<div class="input-group" style="padding: 20px 0">
							<span class="input-group-addon" id="prof-name">@</span>
							<input name="prof1" type="text" class="form-control" placeholder="Nume" aria-describedby="prof-name">
						</div>
						<div class="input-group" style="padding: 20px 0">
							<span class="input-group-addon" id="prof-lname">@</span>
							<input name="prof2" type="text" class="form-control" placeholder="Prenume" aria-describedby="prof-lname">
						</div>
						<div class="input-group" style="padding: 20px 0">
							<span class="input-group-addon" id="prof-func">@</span>
							<input name="prof3" type="text" class="form-control" placeholder="Functie" aria-describedby="prof-func">
						</div>

						<div class="input-group" style="padding: 20px 0">
							<span class="input-group-addon" id="prof-grupaid1">@</span>
							<select class="btn-block form-control" aria-describedby="prof-grupaid1" name="prof4">
								<option class="dropdown-item" value="1">1
								<option class="dropdown-item" value="2">2
								<option class="dropdown-item" value="3">3
							</select>
						</div>
						<!-- all group -->
						<div class="input-group" style="padding: 20px 0">
							<span class="input-group-addon" id="prof-grupaid1">@</span>
							<select class="btn-block form-control" aria-describedby="prof-grupaid1" name="prof5">
								<?php print $all_group; ?>
							</select>
						</div>
						<!--END  all group -->
						<div class="input-group" style="padding: 20px 0">
							<span class="input-group-addon" id="prof-login">@</span>
							<input name="prof6" type="text" class="form-control" placeholder="Login" aria-describedby="prof-login">
						</div>
						<div class="input-group" style="padding: 20px 0">
							<span class="input-group-addon" id="prof-password">@</span>
							<input name="prof7" type="password" class="form-control" placeholder="Password" aria-describedby="prof-password">
						</div>
						<div class="input-group" style="padding: 20px 0">
							<input type="submit" class="btn btn-block btn-lg" value="Salveaza Profesor" style="background: #93bcff">
						</div>
					</form>
				</div>
			</div>

		</div>

		<?php require "./includes/scripts.php"; ?>
	</body>
</html>
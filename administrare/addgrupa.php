<!DOCTYPE html>
<html lang="en">
	<?php require "./includes/head.php"; ?>
	<body>
		<div class="container">
			<?php require "./includes/navbar.php"; ?>

			<div class="row justify-content-md-center justify-content-lg-center">
				<div class="col-lg-8 col-md-10 col-sm-12">
					<form action="./functions/addgr.php" method="post">
						<div class="input-group" style="padding: 20px 0">
							<span class="input-group-addon" id="grupa-name">@</span>
							<input name="grup1" type="text" class="form-control" placeholder="Nume" aria-describedby="grupa-name">
						</div>
						<div class="input-group" style="padding: 20px 0">
							<span class="input-group-addon" id="grupa-lname">@</span>
							<input name="grup2" type="text" class="form-control" placeholder="Abreviere" aria-describedby="grupa-lname">
						</div>
						<div class="input-group" style="padding: 20px 0">
							<input type="submit" class="btn btn-block btn-lg" value="Salveaza Grupa" style="background: #93bcff">
						</div>
					</form>
				</div>
			</div>
		</div>

		<?php require "./includes/scripts.php"; ?>
	</body>
</html>
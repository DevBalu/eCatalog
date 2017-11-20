<div class="col-sm-3 sidenav">
	<h4>eCatalog</h4>
	<ul class="nav nav-pills nav-stacked">
		<li><a href="grupe.php">Grupe</a></li>
		<li><a href="profesori.php">Profesori</a></li>
		<li><a href="#section3">Despre</a></li>
		<li><a href="#section3">FAQ</a></li>
		<?php 
			if ($_SESSION['lvl'] == 1) {
				$btn_adauga = "";
			}elseif($_SESSION['lvl'] == 2){
				$btn_adauga = "";
			}elseif($_SESSION['lvl'] == 3){
				$btn_adauga = '<li><a href="administrare/addprof.php">Adauga</a></li>';
			}
			print $btn_adauga;
		 ?>
	</ul><br>

	<!-- <div class="input-group"> -->
		<form action="search.php" method="post" class=" row">
			<div class="col-sm-4">
				<select class="btn-block form-control" aria-describedby="prof-grupaid1" name="table">
					<option class="dropdown-item" value="profesori">profesori
					<option class="dropdown-item" value="studenti">studenti
				</select>
			</div>

			<input class="col-sm-4" style="height: 35px;" type="text" class="form-control" placeholder="Cautare.." name="search">

			<span class=" col-sm-2" style="height: 35px;">
				<button class="btn btn-default" type="submit" style="height: 35px;">
					<span class="glyphicon glyphicon-search"></span>
				</button>
			</span>
		</form>
	<!-- </div> -->
</div>
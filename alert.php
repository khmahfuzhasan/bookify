<?php 

$title = "Bookify Alerts";

require_once("components/header.php");

 ?>

<div class="model-container">
	<div class="model">
		<div class="model-header">
			<h3 class="heading">Add Data</h3>
			</div>
		<form action="" method="POST">
			<div class="group">
				<input type="text"  id="" class="control" placeholder="Fruit Name...">
			</div>
			<!-- Close group -->
			<div class="group">
				<input type="number"  id="" class="control" placeholder="Fruit Price...">
			</div>
			<!-- Close group -->
			<div class="group">
				<input type="text"  id="" class="control" placeholder="Fruit Name...">
			</div>
			<!-- Close group -->
			<div class="group">
				<input type="submit"  id="" class="btn btn-sweet" value="Add fruit &rarr;">
			</div>
			<!-- Close group -->
		</form>
		<!-- Close form -->
	</div>
	<!-- Close model -->
</div>
<!-- Close model-container -->


<?php require_once("components/menu.main.php") ?>

	<!-- Close nav -->

	<div class="container">
	<div class="content-section">
	
	<div class="alert success">
		<div class="alert-icon"><div class="alertIcon">&check;</div></div>
		<p> <strong>Success!</strong> Your account created successfully.</p>
	</div>
	<!-- Close alert -->
    <br><br>
	<div class="alert danger">
		<div class="alert-icon"><div class="alertIcon">&times;</div></div>
		<p> <strong>Error!</strong> Sorry this email is already exist.</p>
	</div>
	<!-- Close alert -->

</div>
<!-- Close content-section -->

</div>
<!-- Close container  -->

<?php require_once("components/footer.php"); ?>
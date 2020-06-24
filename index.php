<?php

$publicMenu = 'register';

$title = "Create user account";

require_once("components/header.php");
require_once("components/menu.register.php");

if (isset($_SESSION['user'])){
	header("Location:http://localhost/learnphp/bookify/login.php");header("Location:http://localhost/learnphp/bookify/login.php");
}


?>


	<div class="account-split">

		<div class="messageSection"></div>
		<!-- Close messageSection -->
		<div class="formSection">
			<div class="formSectionParent">
           <div class="formSectionContainer">
		   <?php require_once("components/registerForm.php"); ?>
		   </div>
		   <!-- Close formSectionContainer -->
		   </div>
		   <!-- Close formSectionParent  -->
		</div>
		<!-- Close formSection -->

	</div>
	<!-- Close account-split -->
	
<?php 

require_once("components/jslinks.php");
echo '<script src="assets/js/register.js"></script>';
require_once("components/footer.php");

 ?>


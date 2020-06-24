<?php 

$title = "Visitor Movements";
require_once("components/header.php");
require_once("components/menu.main.php");

?>


	<div class="account-split" style="text-align:center;margin-top:100px;">

<h1 style="display: block;flex: unset;width: 100%;color: #00000082;font-size: 47px;">	
<?php 
	if(isset($_SESSION['hits'])){
		$_SESSION['hits']++;
		echo   "you have visited that page <span style='color: #3cff2c'>". $_SESSION['hits'] . "</span> times!";
	}else{
		$_SESSION['hits'] = 1;
		echo "Welcome to Visit our Page First time!";
	} 
?>

</h1>
	</div>
	<!-- Close account-split -->
	
<?php 

require_once("components/jslinks.php");
echo '<script src="assets/js/validations.js"></script><script src="assets/js/register.js"></script>';
require_once("components/footer.php");

 ?>


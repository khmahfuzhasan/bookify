<?php 

$title = "Visitor Movements";
require_once("components/header.php");

?>

<?php 
	if(isset($_SESSION['hits'])){
		$_SESSION['hits']++;
		echo   "you have visited that page ". $_SESSION['hits'] . " times!";
	}else{
		$_SESSION['hits'] = 1;
		echo "Welcome to Visit our Page First time!";
	} 

require_once("components/jslinks.php");
echo '<script src="assets/js/validations.js"></script><script src="assets/js/register.js"></script>';
require_once("components/footer.php");
<?php 
 include 'includes/class-autoload.inc.php';
 session_start();


 
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?php echo $title; ?></title>
	<?php require_once('components/css.links.php'); ?>
</head>

<?php 

if (isset($_SESSION['bodyClass'])) {
	echo "<body class =". $_SESSION["bodyClass"] . ">";
}else{
	echo '<body id="">';
}

 ?>


	<?php require_once 'components/chatbox.php' ?>
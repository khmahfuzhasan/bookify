<?php 

session_start();


if (isset($_POST['darkmode']) && isset($_POST['bodyClass'])) {
	if($_SESSION['darkmode']){
		$_SESSION['darkmode'] = false;
	}
	echo $_SESSION['darkmode'] = $_POST['darkmode'];
	echo " ";
	echo $_SESSION['bodyClass'] = $_POST['bodyClass'];

}



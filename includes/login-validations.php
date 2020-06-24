<?php require_once("config.php");
if (isset($_POST['email'])) {
	$email = $_POST['email'];
	$sql = "SELECT * FROM users WHERE userEmail ='$email';";
	$query = mysqli_query($conn,$sql);
	$data  = mysqli_fetch_assoc($query);
	if (mysqli_num_rows($query)>0) {
		echo $email." is already exist!";
	}else{
		echo $email . " Successfully added!";
	}

}else{
	header("location:http://localhost/learnphp/bookify/");
}
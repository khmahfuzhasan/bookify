<?php 

if (isset($_POST['activeusers'])) {
		if($_POST['activeusers']){
		require_once 'dbh.class.php';
		class Users extends Dbh{
			public function activeUsers(){
				$sql  = "SELECT * from users";
				$stmt = $this->connect()->prepare($sql);
					$stmt->execute();
				$rows = $stmt->fetchAll();
				echo json_encode(["status"=>true, "data"=> $rows, "message"=> "data Fetched successfully!"]);	
			}
		}///close class #Users

	$ativeuser_object = NEW Users();
	$ativeuser_object->activeUsers();

	}else{
		echo json_encode(["status"=>false, "message"=> "data Fetched fail"]);
	}

	//echo json_encode(["status"=>"checked", "message"=> "ok", "cheker"=>$_POST['activeusers']]);

}else{
	header("Location:http://localhost/learnphp/bookify/login.php");
}


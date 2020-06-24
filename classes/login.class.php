<?php 

if(isset($_POST['user']) && isset($_POST['password'])){
	 $user =$_POST['user'];
	 $password =$_POST['password'];

	//  $user = "khmahfuz";
	// $password = "12345";

	if(empty($user) || empty($password)){
		echo json_encode(["user"=>$user,"password"=>$password, "status"=> false, "message"=> " Fields must not be emoty!"]);
	}else{

		try{
			$pdo = NEW PDO("mysql:host=localhost;dbname=bookify;", "root", "");
			$stmt = $pdo->prepare("SELECT * FROM users WHERE userEmail =?  && userPassword =? || userName=?  && userPassword =?");
			$stmt->execute([$user,$password,$user,$password]);
			if ($stmt->rowCount()>0) {
				$data = $stmt->fetch(PDO::FETCH_ASSOC);
	
				echo json_encode(["user"=>$user,"password"=>$password, "status"=> true, "message"=> " login success"]);
					session_start();
					  $_SESSION['accountNotice'] = "You have logged successfully.";
					  $_SESSION['name'] = $data['userFulName'];
					  $_SESSION['user'] = $data['userName'];
					  $_SESSION['email'] = $data['userEmail'];
					  $_SESSION['status'] = $data['userStatus'];
					  $_SESSION['role'] = $data['userRole'];
					  $_SESSION['loader'] = true;
					  $_SESSION['admin']= true;
					  $_SESSION['logged']= true;
					//echo $_SESSION['password'] = $data['userPassword'];

			}else{
				echo json_encode(["user"=>$user,"password"=>$password, "status"=> false, "message"=> " user or password is incorrect!"]);
			}
		}catch(PDOException $e){
			echo json_encode(["user"=>$user,"password"=>$password,"status"=> false, "message"=> "PDO Connect Error: ".$e]);
		}
	}
}else{
	echo json_encode(["user"=>$user, "status"=> false, "message"=> " Faild"]);
	header("location: http://localhost/learnphp/bookify/login.php?status=failed");
}
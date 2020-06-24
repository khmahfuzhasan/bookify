<?php
if($_POST['name'] && $_POST['userName'] && $_POST['email'] && $_POST['password']){
	$name = $_POST['name'];
	$username = $_POST['userName'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$status = "active";
	$role = "subscriber";
	//echo json_encode(["name"=>$email,"username"=>$username, "email"=>$email,"password"=>$password, "status"=>true,"role"=>$role]);

	try{
		$db = NEW PDO("mysql:host=localhost;dbname=bookify","root",""); 
		//echo "success";
	}catch(PDOException $e) {
		echo "Connection failed: " . $e->getMessage();
	}
	//Email Validation check
	$Emailvalidation = $db->prepare("SELECT userEmail FROM users WHERE userEmail =?");
	$Emailvalidation->execute(array($email));
	 if($Emailvalidation->rowCount()>0){
	 	echo json_encode(["input"=>$email, "errorClass" =>"emailError", "status"=> false, "message"=> " Email already Taken!"]);
	 }else{
	 	//User Validation check
	 	$UserNamevalidation = $db->prepare("SELECT userName FROM users WHERE userName=?");
		$UserNamevalidation->execute(array($username));
		if($UserNamevalidation->rowCount()>0){
			echo json_encode(["UserName"=>$username,"errorClass" =>"usernameError", "status"=> false, "message"=> " Username already Taken!"]);
		}else{
			// SET USERS
			$stmt = $db->prepare("INSERT INTO users(userFulName,userName,userEmail,userPassword,userStatus,userRole) VALUES(?,?,?,?,?,?)");
			$stmt->execute(array($name,$username,$email,$password,$status,$role));
			if($stmt){
					echo json_encode(["UserName"=>$username, "Email" =>$email, "status"=> true, "message"=> " Successfully Registered!"]);
					session_start();
					$_SESSION['accountNotice'] = "Your account created successfully.";
					$_SESSION['name'] = $name;
					$_SESSION['user'] = $username;
					$_SESSION['email'] = $email;
					$_SESSION['status'] = $status;
					$_SESSION['role'] = $role;
					$_SESSION['loader'] = true;
					$_SESSION['logged'] = true;
					
				//echo $_SESSION['password'] = $data['userPassword'];			
			}else{
					echo json_encode(["status"=> false, "message"=> " failed to register!"]);
			}
		}
	}

}


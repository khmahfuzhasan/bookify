<?php


if (isset($_POST['chatbox'])) {
		if($_POST['chatbox']){
		$receiver = $_POST['receiverName'];
		$sender = $_POST['senderName'];
		//$conversationbTW = 
		require_once 'dbh.class.php';
		class Users extends Dbh{
			public function __construct($sender,$receiver){
				$conversationbtn = $sender . "." . $receiver;
				$conversationbtnReverse =  $receiver . "." . $sender ;
				$view = true;
				$sql  = "SELECT * from chatbox WHERE conversationBTW=? OR conversationBTW=?";
				$stmt = $this->connect()->prepare($sql);
				$stmt->execute([$conversationbtn,$conversationbtnReverse]);
				$data = $stmt->fetchAll();
				if($stmt->rowCount()>0){
					echo json_encode(["status"=>true, "data"=> $data, "message"=> "data Fetched successfully!"]);
					$sql  = "UPDATE chatbox SET view=? WHERE conversationBTW=? AND view=? OR conversationBTW=? AND view=?";
					$stmt = $this->connect()->prepare($sql);
					$stmt->execute([false,$conversationbtn,$view,$conversationbtnReverse,$view]);	
				}else{
					echo json_encode(["status"=>false, "message"=> "No conversation yet!"]);
				}
			}
		}///close class #Users

	$ativeuser_object = NEW Users($sender,$receiver);

	}else{
		echo json_encode(["status"=>false, "message"=> "data Fetched fail"]);
	}
}else{
	header("Location:http://localhost/learnphp/bookify/login.php");
}
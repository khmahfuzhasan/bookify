<?php 

if (isset($_POST['chat'])){if($_POST['chat']){

	
	$sender 	= $_POST['sender'];
	$receiver 	= $_POST['receiver'];
	$message 	= $_POST['message'];
	$storeddata 	= $_POST['storeddata'];


	if(empty($sender) || empty($receiver) || empty($message)){
		echo json_encode(["status"=>false, "message"=> "Empty Message"]);
	}
	else{
		require_once 'dbh.class.php';
		class Chat extends Dbh{
			public function __construct($sender,$receiver,$message){
				$send 	= $sender;
				$receive= $receiver;
				$text 	= $message;
				$conversationbtn = $send . "." . $receive;
				$conversationbtnReverse =  $receive . "." . $send ;
				$view = true;
				$sql  	= "INSERT INTO chatbox(senderName,receiveName,message,conversationBTW,view) VALUES(?,?,?,?,?)";
				$stmt 	= $this->connect()->prepare($sql);
				if($stmt->execute([$send,$receive,$text,$conversationbtn,$view])){
					$get_sq 	= "SELECT * from chatbox WHERE conversationBTW=? OR conversationBTW=?";
					$stmt_get 	= $this->connect()->prepare($get_sq);
					$stmt_get->execute([$conversationbtn,$conversationbtnReverse]);
					$data 		= $stmt_get->fetchAll();
					$newDasta = array_diff_assoc($data, $StoreData);
					$StoreData = $data;
					echo json_encode(["status"=>true, "message"=> "Message sent", "data"=> $newDasta]);
				}else{
					echo json_encode(["status"=>false, "message"=> "Message has not sent"]);	
				}
			}
		}///close class #Chat
		$chat_object = NEW Chat($sender,$receiver,$message);
	}
	
}}// exist





/*
				if($stmt->execute([$send,$receive,$text,$conversationbtn,$view])){
					$query  = "SELECT * from chatbox WHERE conversationBTW=? OR conversationBTW=? AND view=?";
					$stmt2  = $this->connect()->prepare($query);
					$stmt2->execute([$conversationbtn,$conversationbtnReverse,$view]);
					$data 	= $stmt2->fetchAll();	
					echo json_encode(["status"=>true, "message"=> "Message sent", "data"=>$data]);
				}else{
					echo json_encode(["status"=>false, "message"=> "Message has not sent"]);	
				}


*/
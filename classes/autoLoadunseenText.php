<?php

if (isset($_POST['autoload'])) {
		if($_POST['autoload']){
		$sender = $_POST['sender'];
		$receiver = $_POST['receiver'];
		//$conversationbTW = 
		require_once 'dbh.class.php';
		class AutoloadText extends Dbh{
			public function __construct($sender,$receiver){
				$conversationbtn = $sender . "." . $receiver;
				$conversationbtnReverse =  $receiver . "." . $sender ;
				$view = true;
				$sql  = "SELECT * from chatbox WHERE conversationBTW=? AND view=? OR conversationBTW=? AND view=?";
				$stmt = $this->connect()->prepare($sql);
				$stmt->execute([$conversationbtn,$view,$conversationbtnReverse,$view]);
				$data = $stmt->fetchAll();
				if($stmt->rowCount()>0){
					echo json_encode(["status"=>true, "data"=> $data, "message"=> "has new text"]);
					$sql  = "UPDATE chatbox SET view=? WHERE conversationBTW=? AND view=? OR conversationBTW=? AND view=?";
					$stmt = $this->connect()->prepare($sql);
					$stmt->execute([false,$conversationbtn,$view,$conversationbtnReverse,$view]);
				}else{
					echo json_encode(["status"=>false, "message"=> "No New text!"]);	
				}
			}
		}///close class #AutoloadText

	$ativeuser_object = NEW AutoloadText($sender,$receiver);

	}else{
		echo json_encode(["status"=>false, "message"=> "data Fetched fail"]);
	}
}else{
	header("Location:http://localhost/learnphp/bookify/login.php");
}
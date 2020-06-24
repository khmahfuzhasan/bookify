<?php
if($_GET['trigered'] === 'FetchBooks'){
	require_once('dbh.class.php');
	class FetchBooks extends Dbh{
		public function getBooks(){
			$sql ="SELECT * FROM books";
			$stmt = $this->connect()->query($sql);
			if($stmt->rowCount()>0){
			$rows = $stmt->fetchAll();
			echo json_encode(["status"=>true,"data"=>$rows,"message"=>"success!"]);
			}else{
				echo json_encode(["status"=>false,"message"=>"no results found!"]);
			}
		}
	}
	$fetobj = NEW FetchBooks();
	$fetobj->getBooks();

}else{
header('location: http://localhost/learnphp/bookify/login.php');
}


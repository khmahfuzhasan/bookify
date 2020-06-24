<?php 

if(isset($_POST['delete'])){
	if($_POST['delete']){
		require_once('dbh.class.php');
		class updateBook extends Dbh{
			public function __construct($id){
					$sql ="DELETE FROM books WHERE id=?";
					$stmt = $this->connect()->prepare($sql);
					$stmt->execute([$id]);
					echo json_encode(["status"=>true,"message"=>"DELETED Successfully!"]);
			}
		}
		if(isset($_POST['id'])){
			$id = $_POST['id']; 
				$book_obj = NEW updateBook($id);
		}
	}
}else{
	header('location: http://localhost/learnphp/bookify/login.php');
}
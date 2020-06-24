<?php 

if(isset($_POST['update'])){
	if($_POST['update']){
		require_once('dbh.class.php');
		class updateBook extends Dbh{
			public function __construct($id,$name,$auth,$price,$bookPosterId){
					$sql ="UPDATE books SET book_name=?,auth_name=?,book_price=?,poster_id=? WHERE id=?";
					$stmt = $this->connect()->prepare($sql);
					$stmt->execute([$name,$auth,$price,$bookPosterId,$id]);
					echo json_encode(["status"=>true,"message"=>"Updated Successfully!"]);
			}
		}
		if(isset($_POST['id']) && isset($_POST['name']) && isset($_POST['auth']) && isset($_POST['price'])){
			$id 	= $_POST['id']; 
			$name 	= $_POST['name'];
			$auth 	= $_POST['auth'];
			$price 	= $_POST['price'];
			$bookPosterId 	= "3";
				 $book_obj = NEW updateBook($id,$name,$auth,$price,$bookPosterId);
		}
	}
}else{
	header('location: http://localhost/learnphp/bookify/login.php');
}

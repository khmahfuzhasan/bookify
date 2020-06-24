<?php 
require_once 'dbh.class.php';

class Books extends Dbh{
	public function addBook($bookname,$bookauth,$bookprice,$bookPosterId ){
		$sql  = "INSERT INTO books(book_name,auth_name,book_price,poster_id) VALUES(?,?,?,?)";
		$stmt = $this->connect()->prepare($sql);
		$stmt->execute([$bookname,$bookauth,$bookprice,$bookPosterId]);
			echo json_encode(["message"=> "successfully added!","status"=> true]);
	}
}///close class #Books


if(isset($_POST['bookName']) && isset($_POST['bookAtuth']) && isset($_POST['bookPrice'])){
	$bookname 	= $_POST['bookName'];
	$bookauth 	= $_POST['bookAtuth'];
	$bookprice 	= $_POST['bookPrice'];
	// $bookname 	= "PHP";
	// $bookauth 	= "John";
	// $bookprice 	= "99";
	$bookPosterId 	= "3";
	 $book_obj = NEW Books($bookname);
	$book_obj->addBook($bookname,$bookauth,$bookprice,$bookPosterId);
}

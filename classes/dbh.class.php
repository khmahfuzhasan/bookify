<?php 
session_start();

class Dbh{
	private $host 	= "localhost";
	private $user 	= "root";
	private $pw 	= "";
	private $dbName	= "bookify";
	protected function connect(){
		try{
			//set dsn
			$dsn = "mysql:host=".$this->host.";dbname=".$this->dbName;
			//CREATE NEW PDO
			$pdo = NEW PDO($dsn, $this->user, $this->pw); 
			$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
			return $pdo;
		}catch(PDOException $e) {
  			echo "Connection failed: " . $e->getMessage();
		}
	}
}


<?php
	if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}

	require_once "db_config.php";
	
	$url = "http://localhost/cv/";

	class USER
	{
		private $conn;

		public function __construct()
		{
			$db = new Database();
			$this->conn = $db->dbConnection();
		}

		public function runQuery($sql)
		{
			$pdo = $this->conn->prepare($sql);
			return $pdo;
		}

		public function getLanguages(){
			$pdo = $this->runQuery("SELECT name, knowledge FROM computer_languages");
			$pdo->setFetchMode(PDO::FETCH_OBJ);
			$pdo->execute();
			$result = $pdo->fetchAll();

			return $result;
		}
	}

?>
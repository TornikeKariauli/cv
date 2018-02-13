<?php
	class Database
	{
		private $host = "localhost";
		private $db_name = "cv_db";
		private $username = "root";
		private $password = "";
		public $conn;

		public function dbConnection()
		{

			$this->conn = null;
			try
			{
				$this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
				$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$this->conn->query("SET NAMES 'utf8'");
				date_default_timezone_set("Asia/Tbilisi");
				$this->conn->exec("SET time_zone = '+4:00'");
			}
			catch(PDOException $exception)
			{
				echo "Connection error: " . $exception->getMessage();
			}

			return $this->conn;
		}
	}
?>
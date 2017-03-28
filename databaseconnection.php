<?php
		class dbconn{
		public $host="localhost";
		public $user="root";
		public $pass="";
		public $dbname="100";
		public $conn;

		public function __construct()
		{
			$this->conn= new mysqli($this->host,$this->user,$this->pass,$this->dbname);
			if ($this->conn->connect_error)
		 	{
    		die("Connection failed: " . $conn->connect_error);
			}
			else
			return $this->conn;
		}
}

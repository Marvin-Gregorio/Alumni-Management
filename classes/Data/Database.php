<?php
	
	namespace Classes\Data;

	class Database{

		protected function connect(){
			$hostname = 'root';
			$servername = 'localhost';
			$dbname = 'server';
			$password ='';
			$con; 
			
			try{
				$con = new \PDO("mysql:host=$servername;dbname=$dbname", $hostname, $password);
				$con->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
				$con->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);
			}catch(PDOException $e){
				echo "ERROR: ".  $e->getMessage();
			}

			return $con;
		}
	}

?>
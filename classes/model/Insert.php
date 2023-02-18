<?php
	
	namespace Classes\Model;

	use Classes\Data\Database;

	class Insert extends Database{
		protected function insertUser($fname,$mname,$lname,$email,$cp,$bday,$username,$password,$gender,$status){
			$sql = 'insert into user_info(first_name,middle_name,last_name,email,cp_number,birth_date,username,password,gender,status,type) values(?,?,?,?,?,?,?,?,?,?,?)';
			$stmt = $this->connect()->prepare($sql);

			try{
				$stmt->execute([$fname,$mname,$lname,$email,$cp,$bday,$username,$password,$gender,$status,'ALUMNI']);
			}catch(PDOException $e){
				echo "ERROR : " . $e->getMessage();
			}

			return $stmt;
		}

		protected function insertLogs($id,$date){
			$sql = 'insert into session(user_id, log_date) values(?,?)';
			$stmt = $this->connect()->prepare($sql);

			try{
				$stmt->execute([$id,$date]);
			}catch(PDOException $e){
				echo "ERROR : " . $e->getMessage();
			}

			return $stmt;
		}

	}

?>
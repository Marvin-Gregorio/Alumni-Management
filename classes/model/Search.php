<?php
	
	namespace Classes\Model;

	use Classes\Data\Database;

	class Search extends Database{
		protected function searchUser($username){
			$sql = 'select * from user_info where username = ? ';
			$stmt = $this->connect()->prepare($sql);
			try{
				$stmt->execute([$username]);
			}catch(PDOException $e){
				echo "ERROR : " . $e->getMessage();
			}
			return $stmt;
		}

		protected function searchUserId($username){
			$sql = 'select * from user_info where user_id = ? ';
			$stmt = $this->connect()->prepare($sql);
			try{
				$stmt->execute([$username]);
			}catch(PDOException $e){
				echo "ERROR : " . $e->getMessage();
			}
			return $stmt;
		}

	}

?>
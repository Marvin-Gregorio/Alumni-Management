<?php
	
	namespace Classes\Model;

	use Classes\Data\Database;

	class Update extends Database{

		protected function updateImg($img,$id){
			$sql = 'update user_info set pic = ? where user_id = ?';
			$stmt = $this->connect()->prepare($sql);

			try{
				$stmt->execute([$img,$id]);
			}catch(PDOException $e){
				echo "ERROR : " . $e->getMessage();
			}

			return $stmt;
		}



	}

?>
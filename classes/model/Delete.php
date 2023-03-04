<?php

	namespace Classes\Model;

	use Classes\Data\Database;

	class Delete extends Database{
		protected function deleteUser($id){
			$sql = 'delete from user_info where user_id = ? ';
			$stmt = $this->connect()->prepare($sql);

			try{
				$stmt->execute([$id]);
			}catch(PDOException $e){
				echo "ERROR : " . $e->getMessage();
			}

			return $stmt;
		}

		protected function deleteJobPost($id){
			$sql = 'delete from jobs_list where job_id = ? ';
			$stmt = $this->connect()->prepare($sql);

			try{
				$stmt->execute([$id]);
			}catch(PDOException $e){
				echo "ERROR : " . $e->getMessage();
			}

			return $stmt;
		}

		protected function deleteAppointment($id){
			$sql = 'delete from user_appointment where appointment_id = ? ';
			$stmt = $this->connect()->prepare($sql);

			try{
				$stmt->execute([$id]);
			}catch(PDOException $e){
				echo "ERROR : " . $e->getMessage();
			}

			return $stmt;
		}
	}

?>
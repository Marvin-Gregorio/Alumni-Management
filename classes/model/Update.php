<?php
	
	namespace Classes\Model;

	use Classes\Data\Database;

	class Update extends Database{
		protected function updateProfile($id,$fname,$lname,$cp,$email,$dept,$date,$user_id){
			$sql = 'update user_info set first_name = ?,last_name = ?,cp_number = ?,email = ?,username = ?,id_number = ?,department = ?,last_updated = ? where user_id = ?';
			$stmt = $this->connect()->prepare($sql);

			try{
				$stmt->execute([$fname,$lname,$cp,$email,$id,$id,$dept,$date,$user_id]);
			}catch(PDOException $e){
				echo "ERROR : " . $e->getMessage();
			}

			return $stmt;
		}

		protected function updateCounselor($id,$fname,$lname,$dept,$userid,$date){
			$sql = 'update user_info set id_number = ?, first_name = ?, last_name = ?, department = ?, last_updated = ? where user_id = ?';
			$stmt = $this->connect()->prepare($sql);

			try{
				$stmt->execute([$id,$fname,$lname,$dept,$date,$userid]);
			}catch(PDOException $e){
				echo "ERROR : " . $e->getMessage();
			}

			return $stmt;
		}

		protected function updateAppointment($case_id,$appointment_date,$date){
			$sql = 'update user_appointment set appointment_date = ?, last_updated = ? where appointment_id = ? ';
			$stmt = $this->connect()->prepare($sql);

			try{
				$stmt->execute([$appointment_date,$date,$case_id]);
			}catch(PDOException $e){
				echo "ERROR : " . $e->getMessage();
			}

			return $stmt;
		}

		protected function updatePassword($pass,$id){
			$sql = 'update user_info set password = ? where user_id = ?';
			$stmt = $this->connect()->prepare($sql);

			try{
				$stmt->execute([$pass,$id]);
			}catch(PDOException $e){
				echo "ERROR : " . $e->getMessage();
			}

			return $stmt;
		}

		protected function updateCase($id,$counselor){
			$sql = 'update study_case set shared_to = ?, status = ? where case_id = ?';
			$stmt = $this->connect()->prepare($sql);

			try{
				$stmt->execute([$counselor,"ONGOING",$id]);
			}catch(PDOException $e){
				echo "ERROR : " . $e->getMessage();
			}

			return $stmt;
		}

		protected function case_appointment($id){
			$sql = 'update study_case set appointment = ? where case_id = ?';
			$stmt = $this->connect()->prepare($sql);

			try{
				$stmt->execute(['CREATED',$id]);
			}catch(PDOException $e){
				echo "ERROR : " . $e->getMessage();
			}

			return $stmt;
		}

		protected function updateImg($img,$id){
			$sql = 'update user_info set profile = ? where user_id = ?';
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
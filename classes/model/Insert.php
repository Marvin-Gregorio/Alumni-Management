<?php
	
	namespace Classes\Model;

	use Classes\Data\Database;

	class Insert extends Database{
		protected function insertStudent($fname,$lname,$username,$date){
			$sql = 'insert into user_info(first_name,last_name,username,date_created,type) values(?,?,?,?,?)';
			$stmt = $this->connect()->prepare($sql);

			try{
				$stmt->execute([$fname,$lname,$username,$date,"STUDENT"]);
			}catch(PDOException $e){
				echo "ERROR : " . $e->getMessage();
			}

			return $stmt;
		}

		protected function insertAppointment($info,$student_id,$date_created,$counselor_id){
			$sql = 'insert into user_appointment(appointment_date,student_id,date_created,counselor_id) values(?,?,?,?)';
			$stmt = $this->connect()->prepare($sql);

			try{
				$stmt->execute([$info,$student_id,$date_created,$counselor_id]);
			}catch(PDOException $e){
				echo "ERROR : " . $e->getMessage();
			}

			return $stmt;
		}

		protected function insertReply($date,$text,$user_id,$post_id){
			$sql = 'insert into case_response(case_id,message,date_created,user_id) values(?,?,?,?)';
			$stmt = $this->connect()->prepare($sql);

			try{
				$stmt->execute([$post_id,$text,$date,$user_id]);
			}catch(PDOException $e){
				echo "ERROR : " . $e->getMessage();
			}

			return $stmt;
		}

		protected function insertPost($date,$text,$id){
			$sql = 'insert into study_case(message,date_created,last_updated,status,student_id) values(?,?,?,?,?)';
			$stmt = $this->connect()->prepare($sql);

			try{
				$stmt->execute([$text,$date,$date,'OPEN',$id]);
			}catch(PDOException $e){
				echo "ERROR : " . $e->getMessage();
			}

			return $stmt;
		}

		protected function insertCounselor($fname,$lname,$username,$date,$department,$position,$password){
			$sql = 'insert into user_info(first_name,last_name,username,date_created,type,id_number,department,password) values(?,?,?,?,?,?,?,?)';
			$stmt = $this->connect()->prepare($sql);

			try{
				$stmt->execute([$fname,$lname,$username,$date,$position,$username,$department,$password]);
			}catch(PDOException $e){
				echo "ERROR : " . $e->getMessage();
			}

			return $stmt;
		}

		protected function insertSignLogs($user_id,$date){

			$sql = 'insert into sign_in_logs(user_id,log_date) values(?,?)';
			$stmt = $this->connect()->prepare($sql);

			try{
				$stmt->execute([$user_id,$date]);
			}catch(PDOException $e){
				echo "ERROR : " . $e->getMessage();
			}

			return $stmt;
		}
	}

?>
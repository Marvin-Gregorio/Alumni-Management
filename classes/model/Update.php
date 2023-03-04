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

		protected function updateJobDetails($name,$category,$title,$salary,$description,$qualification,$type,$id){
			$sql = 'update jobs_list set name = ?, category = ?, title = ?, salary = ?, description = ?, qualification = ?, type = ? where job_id = ?';
			$stmt = $this->connect()->prepare($sql);

			try{
				$stmt->execute([$name,$category,$title,$salary,$description,$qualification,$type,$id]);
			}catch(PDOException $e){
				echo "ERROR : " . $e->getMessage();
			}

			return $stmt;
		}

		protected function updateUserDetails($fname,$mname,$lname,$email,$cp,$birth,$uname,$gender,$id){
			$sql = 'update user_info set first_name = ?, middle_name = ?, last_name = ?, email = ?, cp_number = ?, birth_date = ?, username = ?, gender = ? where user_id = ?';
			$stmt = $this->connect()->prepare($sql);

			try{
				$stmt->execute([$fname,$mname,$lname,$email,$cp,$birth,$uname,$gender,$id]);
			}catch(PDOException $e){
				echo "ERROR : " . $e->getMessage();
			}

			return $stmt;
		}

		protected function updateEventDetails($name,$place,$description,$date,$time,$id){
			$sql = 'update events set name = ?, place = ?, description = ?, set_date = ?, set_time = ? where event_id = ?';
			$stmt = $this->connect()->prepare($sql);

			try{
				$stmt->execute([$name,$place,$description,$date,$time,$id]);
			}catch(PDOException $e){
				echo "ERROR : " . $e->getMessage();
			}

			return $stmt;
		}

		protected function updatePassword($id,$pass){
			$sql = 'update user_info set password = ? where user_id = ?';
			$stmt = $this->connect()->prepare($sql);

			try{
				$stmt->execute([$pass,$id]);
			}catch(PDOException $e){
				echo "ERROR : " . $e->getMessage();
			}

			return $stmt;
		}

		protected function updateEmploymentInfo($id,$name,$email,$address,$number){
			$sql = 'update employment_info set company_name = ?, company_email = ?, company_address = ?, company_number = ? where user_id = ?';
			$stmt = $this->connect()->prepare($sql);

			try{
				$stmt->execute([$name,$email,$address,$number,$id]);
			}catch(PDOException $e){
				echo "ERROR : " . $e->getMessage();
			}

			return $stmt;
		}

		protected function updateEducationalInfo($id,$elem_school,$elem_year,$junior_school,$junior_year,$senior_school,$senior_year,$senior_course,$college_school,$college_year,$college_course,$master_school,$master_year,$master_course,$doctor_school,$doctor_year,$doctor_course){
			$sql = 'update educational_info set elem_school = ?, elem_year = ?, junior_school = ?, junior_year = ?, senior_school = ?, senior_year = ?, senior_course = ?, college_school = ?, college_year = ?, college_course = ?, master_school = ?, master_year = ?, master_course = ?, doctor_school = ?, doctor_year = ?, doctor_course = ? where user_id = ?';
			$stmt = $this->connect()->prepare($sql);

			try{
				$stmt->execute([$elem_school,$elem_year,$junior_school,$junior_year,$senior_school,$senior_year,$senior_course,$college_school,$college_year,$college_course,$master_school,$master_year,$master_course,$doctor_school,$doctor_year,$doctor_course,$id]);
			}catch(PDOException $e){
				echo "ERROR : " . $e->getMessage();
			}

			return $stmt;
		}

		protected function updatePersonalInfo($id,$fname,$mname,$lname,$email,$cp,$b_date,$uname,$gender,$status){
			$sql = 'update user_info set first_name = ?, middle_name = ?, last_name = ?, email = ?, cp_number = ?, birth_date = ?, username = ?, gender = ?, status = ? where user_id = ?';
			$stmt = $this->connect()->prepare($sql);

			try{
				$stmt->execute([$fname,$mname,$lname,$email,$cp,$b_date,$uname,$gender,$status,$id]);
			}catch(PDOException $e){
				echo "ERROR : " . $e->getMessage();
			}

			return $stmt;
		}



	}

?>
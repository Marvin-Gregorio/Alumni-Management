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

		protected function insertEmploymentInfo($id,$name,$email,$address,$number){
			$sql = 'insert into employment_info(company_name,company_email,company_address,company_number,user_id) values(?,?,?,?,?)';
			$stmt = $this->connect()->prepare($sql);

			try{
				$stmt->execute([$name,$email,$address,$number,$id]);
			}catch(PDOException $e){
				echo "ERROR : " . $e->getMessage();
			}

			return $stmt;
		}

		protected function insertEducationalInfo($id,$elem_school,$elem_year,$junior_school,$junior_year,$senior_school,$senior_year,$senior_course,$college_school,$college_year,$college_course,$master_school,$master_year,$master_course,$doctor_school,$doctor_year,$doctor_course){
			$sql = 'insert into educational_info(elem_school, elem_year, junior_school, junior_year, senior_school, senior_year, senior_course, college_school, college_year, college_course, master_school, master_year, master_course, doctor_school, doctor_year, doctor_course, user_id) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
			$stmt = $this->connect()->prepare($sql);

			try{
				$stmt->execute([$elem_school,$elem_year,$junior_school,$junior_year,$senior_school,$senior_year,$senior_course,$college_school,$college_year,$college_course,$master_school,$master_year,$master_course,$doctor_school,$doctor_year,$doctor_course,$id]);
			}catch(PDOException $e){
				echo "ERROR : " . $e->getMessage();
			}

			return $stmt;
		}

	}

?>
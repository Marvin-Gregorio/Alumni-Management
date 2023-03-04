<?php
	
	namespace Classes\Model;

	use Classes\Data\Database;

	class Insert extends Database{
		protected function insertUser($fname,$mname,$lname,$email,$cp,$bday,$username,$password,$gender,$status,$dept){
			$sql = 'insert into user_info(first_name,middle_name,last_name,email,cp_number,birth_date,username,password,gender,status,type,department) values(?,?,?,?,?,?,?,?,?,?,?,?)';
			$stmt = $this->connect()->prepare($sql);

			try{
				$stmt->execute([$fname,$mname,$lname,$email,$cp,$bday,$username,$password,$gender,$status,'ALUMNI',$dept]);
			}catch(PDOException $e){
				echo "ERROR : " . $e->getMessage();
			}

			return $stmt;
		}

		protected function insertStaff($fname,$mname,$lname,$email,$cp,$birth,$uname,$gender,$password){
			$sql = 'insert into user_info(first_name,middle_name,last_name,email,cp_number,birth_date,username,gender,password,type) values(?,?,?,?,?,?,?,?,?,?)';
			$stmt = $this->connect()->prepare($sql);

			try{
				$stmt->execute([$fname,$mname,$lname,$email,$cp,$birth,$uname,$gender,$password,"STAFF"]);
			}catch(PDOException $e){
				echo "ERROR : " . $e->getMessage();
			}

			return $stmt;
		}

		protected function insertJob($name,$category,$title,$salary,$description,$qualification,$type,$date){
			$sql = 'insert into jobs_list(name,category,title,salary,description,qualification,type,date_created) values(?,?,?,?,?,?,?,?)';
			$stmt = $this->connect()->prepare($sql);

			try{
				$stmt->execute([$name,$category,$title,$salary,$description,$qualification,$type,$date]);
			}catch(PDOException $e){
				echo "ERROR : " . $e->getMessage();
			}

			return $stmt;
		}

		protected function insertBlast($title,$text,$to,$date){
			$sql = 'insert into email_blast(title,body,send_to,date_created) values(?,?,?,?)';
			$stmt = $this->connect()->prepare($sql);

			try{
				$stmt->execute([$title,$text,$to,$date]);
			}catch(PDOException $e){
				echo "ERROR : " . $e->getMessage();
			}

			return $stmt;
		}

		protected function insertEvent($name,$place,$description,$date,$time){
			$sql = 'insert into events(name,place,description,set_date,set_time) values(?,?,?,?,?)';
			$stmt = $this->connect()->prepare($sql);

			try{
				$stmt->execute([$name,$place,$description,$date,$time]);
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

		protected function insertMessage($text,$date){
			$sql = 'insert into forum(text, date_created) values(?,?)';
			$stmt = $this->connect()->prepare($sql);

			try{
				$stmt->execute([$text,$date]);
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
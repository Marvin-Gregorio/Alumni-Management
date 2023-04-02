<?php
	
	namespace Classes\Model;

	use Classes\Data\Database;

	class Search extends Database{

		protected function searchUserDept($dept){
			$sql = 'select count(*) as total from user_info where department = ? ';
			$stmt = $this->connect()->prepare($sql);
			try{
				$stmt->execute([$dept]);
			}catch(PDOException $e){
				echo "ERROR : " . $e->getMessage();
			}
			return $stmt;
		}

		protected function searchEmailBlast($dept){
			$sql = 'select count(*) as total from email_blast where send_to = ? ';
			$stmt = $this->connect()->prepare($sql);
			try{
				$stmt->execute([$dept]);
			}catch(PDOException $e){
				echo "ERROR : " . $e->getMessage();
			}
			return $stmt;
		}

		protected function searchUserSession($dept,$date){
			$sql = 'select count(*) as total from user_info inner join session on session.user_id = user_info.user_id where department = ? and log_date > ?';
			$stmt = $this->connect()->prepare($sql);
			try{
				$stmt->execute([$dept,$date]);
			}catch(PDOException $e){
				echo "ERROR : " . $e->getMessage();
			}
			return $stmt;
		}

		protected function searchUserBetweenSession($dept,$start,$end){
			$sql = 'select count(*) as total from user_info inner join session on session.user_id = user_info.user_id where department = ? and log_date >= ? and log_date <= ?';
			$stmt = $this->connect()->prepare($sql);
			try{
				$stmt->execute([$dept,$start,$end]);
			}catch(PDOException $e){
				echo "ERROR : " . $e->getMessage();
			}
			return $stmt;
		}

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

		protected function searchUserInterested($eventid,$userid){
			$sql = 'select * from interested where event_id = ? and user_id = ? ';
			$stmt = $this->connect()->prepare($sql);
			try{
				$stmt->execute([$eventid,$userid]);
			}catch(PDOException $e){
				echo "ERROR : " . $e->getMessage();
			}
			return $stmt;
		}

		protected function searchInterested($eventid){
			$sql = 'select count(*) as total from interested where event_id = ?';
			$stmt = $this->connect()->prepare($sql);
			try{
				$stmt->execute([$eventid]);
			}catch(PDOException $e){
				echo "ERROR : " . $e->getMessage();
			}
			return $stmt;
		}

		protected function searchForum(){
			$sql = 'select * from forum order by forum_id desc';
			$stmt = $this->connect()->prepare($sql);
			try{
				$stmt->execute();
			}catch(PDOException $e){
				echo "ERROR : " . $e->getMessage();
			}
			return $stmt;
		}

		protected function searchJobList(){
			$sql = 'select * from jobs_list';
			$stmt = $this->connect()->prepare($sql);
			try{
				$stmt->execute();
			}catch(PDOException $e){
				echo "ERROR : " . $e->getMessage();
			}
			return $stmt;
		}

		protected function searchNewUser(){
			$sql = 'SELECT * FROM user_info WHERE date_created BETWEEN DATE_SUB(NOW(), INTERVAL 1 year) AND now()';
			$stmt = $this->connect()->prepare($sql);
			try{
				$stmt->execute();
			}catch(PDOException $e){
				echo "ERROR : " . $e->getMessage();
			}
			return $stmt;
		}

		protected function searchStaffList(){
			$sql = 'select * from user_info where type = ?';
			$stmt = $this->connect()->prepare($sql);
			try{
				$stmt->execute(["STAFF"]);
			}catch(PDOException $e){
				echo "ERROR : " . $e->getMessage();
			}
			return $stmt;
		}

		protected function searchEventList(){
			$sql = 'select * from events';
			$stmt = $this->connect()->prepare($sql);
			try{
				$stmt->execute();
			}catch(PDOException $e){
				echo "ERROR : " . $e->getMessage();
			}
			return $stmt;
		}

		protected function searchBlastList(){
			$sql = 'select * from email_blast';
			$stmt = $this->connect()->prepare($sql);
			try{
				$stmt->execute();
			}catch(PDOException $e){
				echo "ERROR : " . $e->getMessage();
			}
			return $stmt;
		}

		protected function searchSpecificJobList($id){
			$sql = 'select * from jobs_list where job_id = ?';
			$stmt = $this->connect()->prepare($sql);
			try{
				$stmt->execute([$id]);
			}catch(PDOException $e){
				echo "ERROR : " . $e->getMessage();
			}
			return $stmt;
		}

		protected function searchSpecificUserList($id){
			$sql = 'select * from user_info where user_id = ?';
			$stmt = $this->connect()->prepare($sql);
			try{
				$stmt->execute([$id]);
			}catch(PDOException $e){
				echo "ERROR : " . $e->getMessage();
			}
			return $stmt;
		}

		protected function searchUserByUsername($username){
			$sql = 'select * from user_info where username = ?';
			$stmt = $this->connect()->prepare($sql);
			try{
				$stmt->execute([$username]);
			}catch(PDOException $e){
				echo "ERROR : " . $e->getMessage();
			}
			return $stmt;
		}

		protected function searchSpecificEventList($id){
			$sql = 'select * from events where event_id = ?';
			$stmt = $this->connect()->prepare($sql);
			try{
				$stmt->execute([$id]);
			}catch(PDOException $e){
				echo "ERROR : " . $e->getMessage();
			}
			return $stmt;
		}

		protected function searchTypeJobList($data){
			$sql = 'select * from jobs_list where type = ?';
			$stmt = $this->connect()->prepare($sql);
			try{
				$stmt->execute([$data]);
			}catch(PDOException $e){
				echo "ERROR : " . $e->getMessage();
			}
			return $stmt;
		}

		protected function searchJoinedTablev1($dept,$start,$end){
			$sql = 'select user_info.user_id from user_info inner join educational_info on user_info.user_id = educational_info.user_id where (elem_year >= ? and elem_year <= ?) or (junior_year >= ? and junior_year <= ?) or (senior_year >= ? and senior_year <= ?) or (college_year >= ? and college_year <= ?) or (master_year >= ? and master_year <= ?) or (doctor_year >= ? and doctor_year <= ?)';
			$stmt = $this->connect()->prepare($sql);
			try{
				$stmt->execute([$start,$end,$start,$end,$start,$end,$start,$end,$start,$end,$start,$end]);
			}catch(PDOException $e){
				echo "ERROR : " . $e->getMessage();
			}
			return $stmt;
		}

		protected function searchJoinedTablev2($dept,$start,$end){
			$sql = 'select user_info.user_id from user_info inner join educational_info on user_info.user_id = educational_info.user_id where user_info.department = ? and  ((elem_year >= ? and elem_year <= ?) or (junior_year >= ? and junior_year <= ?) or (senior_year >= ? and senior_year <= ?) or (college_year >= ? and college_year <= ?) or (master_year >= ? and master_year <= ?) or (doctor_year >= ? and doctor_year <= ?))';
			$stmt = $this->connect()->prepare($sql);
			try{
				$stmt->execute([$dept,$start,$end,$start,$end,$start,$end,$start,$end,$start,$end,$start,$end]);
			}catch(PDOException $e){
				echo "ERROR : " . $e->getMessage();
			}
			return $stmt;
		}		

		protected function searchCategoryJobList($data){
			$sql = 'select * from jobs_list where category = ?';
			$stmt = $this->connect()->prepare($sql);
			try{
				$stmt->execute([$data]);
			}catch(PDOException $e){
				echo "ERROR : " . $e->getMessage();
			}
			return $stmt;
		}

		protected function searchSession($id){
			$sql = 'select * from session where user_id = ? ';
			$stmt = $this->connect()->prepare($sql);
			try{
				$stmt->execute([$id]);
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

		protected function searchUserByType($username){
			$sql = 'select * from user_info where type = ? ';
			$stmt = $this->connect()->prepare($sql);
			try{
				$stmt->execute([$username]);
			}catch(PDOException $e){
				echo "ERROR : " . $e->getMessage();
			}
			return $stmt;
		}

		protected function searchVerifiedUser($type,$data){
			$sql = 'select * from user_info where type = ? and account_status = ? ';
			$stmt = $this->connect()->prepare($sql);
			try{
				$stmt->execute([$type,$data]);
			}catch(PDOException $e){
				echo "ERROR : " . $e->getMessage();
			}
			return $stmt;
		}

		protected function countUserByType($username){
			$sql = 'select count(*) as total from user_info where type = ? ';
			$stmt = $this->connect()->prepare($sql);
			try{
				$stmt->execute([$username]);
			}catch(PDOException $e){
				echo "ERROR : " . $e->getMessage();
			}
			return $stmt;
		}

		protected function searchUserByTypeAndDept($username,$dept){
			$sql = 'select * from user_info where type = ? and department = ?';
			$stmt = $this->connect()->prepare($sql);
			try{
				$stmt->execute([$username,$dept]);
			}catch(PDOException $e){
				echo "ERROR : " . $e->getMessage();
			}
			return $stmt;
		}

		protected function searchUserEmploymentById($id){
			$sql = 'select * from employment_info where user_id = ? ';
			$stmt = $this->connect()->prepare($sql);
			try{
				$stmt->execute([$id]);
			}catch(PDOException $e){
				echo "ERROR : " . $e->getMessage();
			}
			return $stmt;
		}

		protected function searchUserEducationById($id){
			$sql = 'select * from educational_info where user_id = ? ';
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
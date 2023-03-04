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
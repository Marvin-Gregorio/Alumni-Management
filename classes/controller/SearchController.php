<?php

	namespace Classes\Controller;
	use Classes\Model\Search;

	class SearchController extends Search{
		

		function getUserId($username){
			$result = $this->searchUser($username);
			if ($result->rowCount() > 0) {
				$data;
				while($row = $result->fetch()){
					$data = $row['user_id'];
				}
				return $data;
			}

			return false;
		}

		function getName($username){
			$result = $this->searchUserId($username);
			if ($result->rowCount() > 0) {
				$data[] = array();
				while($row = $result->fetch()){
					$data[] = $row['first_name'];
					$data[] = $row['middle_name'];
					$data[] = $row['last_name'];
				}
				return $data;
			}

			return false;
		}

		function getUserType($username){
			$result = $this->searchUserId($username);
			if ($result->rowCount() > 0) {
				$data; 
				while($row = $result->fetch()){
					$data = $row['type'];
				}
				return $data;
			}

			return false;
		}

		function getPassword($username){
			$result = $this->searchUserId($username);
			if ($result->rowCount() > 0) {
				$data; 
				while($row = $result->fetch()){
					$data = $row['password'];
				}
				return $data;
			}

			return false;
		}

		function getProfileDetails($id){
			$result = $this->searchUserId($id);
			if ($result->rowCount() > 0) {
				$data[] = array(); 
				while($row = $result->fetch()){
					$data[] = $row['first_name'];
					$data[] = $row['middle_name'];
					$data[] = $row['last_name'];
					$data[] = $row['email'];
					$data[] = $row['cp_number'];
					$data[] = $row['birth_date'];
					$data[] = $row['username'];
					$data[] = $row['gender'];
					$data[] = $row['status'];
					$data[] = $row['pic'];
					
				}
				return $data;
			}

			return false;
		}

	}

?>
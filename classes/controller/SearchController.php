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

	}

?>
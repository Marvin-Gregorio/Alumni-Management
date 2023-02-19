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

		function getForum(){
			$result = $this->searchForum();
			return $result;
		}

		function getAllUserByType($type){
			$result = $this->searchUserByType($type);
			return $result;
		}

		function getAllUser(){
			$result = $this->searchUserByType('ALUMNI');
			if($result){
				$data[] = array();

				while($row = $result->fetch()){
					$sub[] = array();
					$sub[] = $row['first_name'];
					$sub[] = $row['last_name'];
					$sub[] = $row['email'];
					$data[] = $sub;

					unset($sub);
				}
				return $data;
			}
		}

		function hasEmployment($id){
			$result = $this->searchUserEmploymentById($id);
			if ($result->rowCount() > 0) {
				return true;
			}

			return false;
		}

		function hasEducation($id){
			$result = $this->searchUserEducationById($id);
			if ($result->rowCount() > 0) {
				return true;
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

		function getSession($id){
			$result = $this->searchSession($id);
			if ($result->rowCount() > 0) {
				$data[] = array();
				while($row = $result->fetch()){
					$data[] = $row['log_date'];
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

		function getEmploymentDetails($id){
			$result = $this->searchUserEmploymentById($id);
			if ($result->rowCount() > 0) {
				$data[] = array(); 
				while($row = $result->fetch()){
					$data[] = $row['company_name'];
					$data[] = $row['company_number'];
					$data[] = $row['company_email'];
					$data[] = $row['company_address'];
				}
				return $data;
			}

			return false;
		}

		function getEducationalDetails($id){
			$result = $this->searchUserEducationById($id);
			if ($result->rowCount() > 0) {
				$data[] = array(); 
				while($row = $result->fetch()){
					$data[] = $row['elem_school'];
					$data[] = $row['elem_year'];
					$data[] = $row['junior_school'];
					$data[] = $row['junior_year'];
					$data[] = $row['senior_school'];
					$data[] = $row['senior_year'];
					$data[] = $row['senior_course'];
					$data[] = $row['college_school'];
					$data[] = $row['college_year'];
					$data[] = $row['college_course'];
					$data[] = $row['master_school'];
					$data[] = $row['master_year'];
					$data[] = $row['master_course'];
					$data[] = $row['doctor_school'];
					$data[] = $row['doctor_year'];
					$data[] = $row['doctor_course'];
				}
				return $data;
			}

			return false;
		}

	}

?>
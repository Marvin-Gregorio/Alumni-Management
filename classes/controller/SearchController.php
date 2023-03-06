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

		function likeEvent($eventid,$userid){
			$result = $this->searchUserInterested($eventid,$userid);
			if ($result->rowCount() > 0) {
				return true;
			}else{
				return false;
			}
		}

		function totalInterested($eventid){
			$result = $this->searchInterested($eventid);
			if ($result->rowCount() > 0) {
				while($row = $result->fetch()){
					$data = $row['total'];
				}

				return $data;
			}
		}

		function getJobList(){
			$result = $this->searchJobList();
			return $result;
		}

		function getStaffList(){
			$result = $this->searchStaffList();
			return $result;
		}

		function getEventList(){
			$result = $this->searchEventList();
			return $result;
		}

		function getBlastList(){
			$result = $this->searchBlastList();
			return $result;
		}

		function getCategoryJobList($data){
			$result = $this->searchCategoryJobList($data);
			return $result;
		}

		function getTypeJobList($data){
			$result = $this->searchTypeJobList($data);
			return $result;
		}

		function getJobDetails($id){
			$result = $this->searchSpecificJobList($id);
			if ($result->rowCount() > 0) {
				$data[] = array();
				while($row = $result->fetch()){
					$data[] = $row['job_id'];
					$data[] = $row['name'];
					$data[] = $row['category'];
					$data[] = $row['title'];
					$data[] = $row['salary'];
					$data[] = $row['description'];
					$data[] = $row['qualification'];
					$data[] = $row['type'];
				}
				return $data;
			}

			return false;
		}

		function getUserDetails($id){
			$result = $this->searchSpecificUserList($id);
			if ($result->rowCount() > 0) {
				$data[] = array();
				while($row = $result->fetch()){
					$data[] = $row['user_id'];
					$data[] = $row['first_name'];
					$data[] = $row['middle_name'];
					$data[] = $row['last_name'];
					$data[] = $row['email'];
					$data[] = $row['cp_number'];
					$data[] = $row['birth_date'];
					$data[] = $row['username'];
					$data[] = $row['gender'];
				}
				return $data;
			}

			return false;
		}

		function getUserDetailsByUsername($username){
			$result = $this->searchUserByUsername($username);
			if ($result->rowCount() > 0) {
				$data[] = array();
				while($row = $result->fetch()){

					$data[] = $row['first_name'];
					$data[] = $row['last_name'];
					$data[] = $row['email'];
					$data[] = $row['password'];
					$data[] = $row['user_id'];
				}
				return $data;
			}

			return false;
		}

		function getEventDetails($id){
			$result = $this->searchSpecificEventList($id);
			if ($result->rowCount() > 0) {
				$data[] = array();
				while($row = $result->fetch()){
					$data[] = $row['event_id'];
					$data[] = $row['name'];
					$data[] = $row['place'];
					$data[] = $row['description'];
					$data[] = $row['set_date'];
					$data[] = $row['set_time'];
				}
				return $data;
			}

			return false;
		}

		function getAllUserByType($type){
			$result = $this->searchUserByType($type);
			return $result;
		}

		function countAllUserByType($type){
			$result = $this->countUserByType($type);
			while($row=$result->fetch()){
				$data = $row['total'];
			}
			return $data;
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

		function getEmailBySpecificDept($dept){
			$result = $this->searchUserByTypeAndDept('ALUMNI',$dept);
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

		function getDeptCount($dept){
			$result = $this->searchUserDept($dept);
			if ($result->rowCount() > 0) {
				$data = 0;
				while($row = $result->fetch()){
					$data = $row['total'];
				}
				return $data;
			}

			return false;
		}

		function getEmailCount($dept){
			$result = $this->searchEmailBlast($dept);
			if ($result->rowCount() > 0) {
				$data = 0;
				while($row = $result->fetch()){
					$data = $row['total'];
				}
				return $data;
			}

			return false;
		}

		function getJobCount(){
			$result = $this->searchJobList();
			
			return $result->rowCount();
		}

		function getNewUsersCount(){
			$result = $this->searchNewUser();
			
			return $result->rowCount();
		}

		function getEventCount(){
			$result = $this->searchEventList();
			
			return $result->rowCount();
		}

		function getDailyCount($dept,$date){

			$result = $this->searchUserSession($dept,$date);
			if ($result->rowCount() > 0) {
				$data = 0;
				while($row = $result->fetch()){
					$data = $row['total'];
				}
				return $data;
			}

			return false;
		}

		function getMonthlyCount($dept,$start,$end){

			$result = $this->searchUserBetweenSession($dept,$start,$end);
			if ($result->rowCount() > 0) {
				$data = 0;
				while($row = $result->fetch()){
					$data = $row['total'];
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
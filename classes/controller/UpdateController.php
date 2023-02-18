<?php

	namespace Classes\Controller;
	use Classes\Model\Update;

	class UpdateController extends Update{

		function profilePic($img, $id){
			try{
				$this->updateImg($img, $id);
			}catch(Exception $e){
				echo "caught exception: ". $e->getMessage(). "\n";
			}
			
		}

		function password($id, $pass){
			try{
				$this->updatePassword($id, $pass);
			}catch(Exception $e){
				echo "caught exception: ". $e->getMessage(). "\n";
			}
			
		}

		function personalInfo($id,$fname,$mname,$lname,$email,$cp,$b_date,$uname,$gender,$status){
			try{
				$this->updatePersonalInfo($id,$fname,$mname,$lname,$email,$cp,$b_date,$uname,$gender,$status);
			}catch(Exception $e){
				echo "caught exception: ". $e->getMessage(). "\n";
			}
			
		}

		function employmentDetails($id,$name,$email,$address,$number){
			try{
				$this->updateEmploymentInfo($id,$name,$email,$address,$number);
			}catch(Exception $e){
				echo "caught exception: ". $e->getMessage(). "\n";
			}
			
		}

		function educationalDetails($id,$elem_school,$elem_year,$junior_school,$junior_year,$senior_school,$senior_year,$senior_course,$college_school,$college_year,$college_course,$master_school,$master_year,$master_course,$doctor_school,$doctor_year,$doctor_course){
			try{
				$this->updateEducationalInfo($id,$elem_school,$elem_year,$junior_school,$junior_year,$senior_school,$senior_year,$senior_course,$college_school,$college_year,$college_course,$master_school,$master_year,$master_course,$doctor_school,$doctor_year,$doctor_course);
			}catch(Exception $e){
				echo "caught exception: ". $e->getMessage(). "\n";
			}
			
		}

	}

?>
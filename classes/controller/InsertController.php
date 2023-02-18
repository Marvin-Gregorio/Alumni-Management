<?php
	
	namespace Classes\Controller;
	use Classes\Model\Insert;

	class InsertController extends Insert{
		
		function new_user($fname,$mname,$lname,$email,$cp,$bday,$username,$password,$gender,$status){
			try{
				$this->insertUser($fname,$mname,$lname,$email,$cp,$bday,$username,$password,$gender,$status);
			}catch(Exception $e){
				echo "caught exception: ". $e->getMessage(). "\n";
			}
			
		}

		function logs($id,$date){
			try{
				$this->insertLogs($id,$date);
			}catch(Exception $e){
				echo "caught exception: ". $e->getMessage(). "\n";
			}
			
		}

		function employmentDetails($id,$name,$email,$address,$number){
			try{
				$this->insertEmploymentInfo($id,$name,$email,$address,$number);
			}catch(Exception $e){
				echo "caught exception: ". $e->getMessage(). "\n";
			}
			
		}

		function educationalDetails($id,$elem_school,$elem_year,$junior_school,$junior_year,$senior_school,$senior_year,$senior_course,$college_school,$college_year,$college_course,$master_school,$master_year,$master_course,$doctor_school,$doctor_year,$doctor_course){
			try{
				$this->insertEducationalInfo($id,$elem_school,$elem_year,$junior_school,$junior_year,$senior_school,$senior_year,$senior_course,$college_school,$college_year,$college_course,$master_school,$master_year,$master_course,$doctor_school,$doctor_year,$doctor_course);
			}catch(Exception $e){
				echo "caught exception: ". $e->getMessage(). "\n";
			}
			
		}
	}

?>
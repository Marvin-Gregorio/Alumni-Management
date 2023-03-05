<?php
	
	namespace Classes\Controller;
	use Classes\Model\Insert;

	class InsertController extends Insert{
		
		function new_staff($fname,$mname,$lname,$email,$cp,$birth,$uname,$gender,$password,$date){
			try{
				$this->insertStaff($fname,$mname,$lname,$email,$cp,$birth,$uname,$gender,$password,$date);
			}catch(Exception $e){
				echo "caught exception: ". $e->getMessage(). "\n";
			}
			
		}

		function event_like($userid,$eventid){
			try{
				$this->insertEventLike($userid,$eventid);
			}catch(Exception $e){
				echo "caught exception: ". $e->getMessage(). "\n";
			}
			
		}

		function new_user($fname,$mname,$lname,$email,$cp,$bday,$username,$password,$gender,$status,$dept,$date){
			try{
				$this->insertUser($fname,$mname,$lname,$email,$cp,$bday,$username,$password,$gender,$status,$dept,$date);
			}catch(Exception $e){
				echo "caught exception: ". $e->getMessage(). "\n";
			}
			
		}

		function new_job($name,$category,$title,$salary,$description,$qualification,$type,$date){
			try{
				$this->insertJob($name,$category,$title,$salary,$description,$qualification,$type,$date);
			}catch(Exception $e){
				echo "caught exception: ". $e->getMessage(). "\n";
			}
			
		}

		function new_blast($title,$text,$to,$date){
			try{
				$this->insertBlast($title,$text,$to,$date);
			}catch(Exception $e){
				echo "caught exception: ". $e->getMessage(). "\n";
			}
			
		}

		function new_event($name,$place,$description,$date,$time){
			try{
				$this->insertEvent($name,$place,$description,$date,$time);
			}catch(Exception $e){
				echo "caught exception: ". $e->getMessage(). "\n";
			}
			
		}

		function new_message($text,$date){
			try{
				$this->insertMessage($text,$date);
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
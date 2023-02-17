<?php

	namespace Classes\Controller;
	use Classes\Model\Update;

	class UpdateController extends Update{
		
		
		function profileInfo($id,$fname,$lname,$cp,$email,$dept,$date,$user_id){
			try{
				$this->updateProfile($id,$fname,$lname,$cp,$email,$dept,$date,$user_id);
			}catch(Exception $e){
				echo "caught exception: ". $e->getMessage(). "\n";
			}
			
		}

		function user_post_appointment($id){
			try{
				$this->case_appointment($id);
			}catch(Exception $e){
				echo "caught exception: ". $e->getMessage(). "\n";
			}
			
		}

		function counselor($id,$fname,$lname,$dept,$userid,$date){
			try{
				$this->updateCounselor($id,$fname,$lname,$dept,$userid,$date);
			}catch(Exception $e){
				echo "caught exception: ". $e->getMessage(). "\n";
			}
		}

		function appointment($case_id,$appointment_date,$date){
			try{
				$this->updateAppointment($case_id,$appointment_date,$date);
			}catch(Exception $e){
				echo "caught exception: ". $e->getMessage(). "\n";
			}
		}

		function userPass($pass, $id){
			try{
				$this->updatePassword($pass, $id);
			}catch(Exception $e){
				echo "caught exception: ". $e->getMessage(). "\n";
			}
			
		}

		function study_case($pass, $id){
			try{
				$this->updateCase($pass, $id);
			}catch(Exception $e){
				echo "caught exception: ". $e->getMessage(). "\n";
			}
			
		}

		function profilePic($img, $id){
			try{
				$this->updateImg($img, $id);
			}catch(Exception $e){
				echo "caught exception: ". $e->getMessage(). "\n";
			}
			
		}

	}

?>
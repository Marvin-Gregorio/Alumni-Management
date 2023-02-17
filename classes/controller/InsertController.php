<?php
	
	namespace Classes\Controller;
	use Classes\Model\Insert;

	class InsertController extends Insert{
		
		function addNewStudent($fname,$lname,$username,$date){
			try{
				$this->insertStudent($fname,$lname,$username,$date);
			}catch(Exception $e){
				echo "caught exception: ". $e->getMessage(). "\n";
			}
			
		}

		function user_appointment($info,$student_id,$date_created,$counselor_id){
			try{
				$this->insertAppointment($info,$student_id,$date_created,$counselor_id);
			}catch(Exception $e){
				echo "caught exception: ". $e->getMessage(). "\n";
			}
		}

		function replyPost($date,$text,$user_id,$post_id){
			try{
				$this->insertReply($date,$text,$user_id,$post_id);
			}catch(Exception $e){
				echo "caught exception: ". $e->getMessage(). "\n";
			}
			
		}

		function post($date,$text,$id){
			try{
				$this->insertPost($date,$text,$id);
			}catch(Exception $e){
				echo "caught exception: ". $e->getMessage(). "\n";
			}
			
		}

		function newCounselor($fname,$lname,$username,$position,$department,$date){
			$password = "P@ssw0rd";
			$options = [
			    'cost' => 12,
			];
			$hashedPassword = password_hash($password, PASSWORD_BCRYPT, $options);
			try{
				$this->insertCounselor($fname,$lname,$username,$date,$department,$position,$hashedPassword);
			}catch(Exception $e){
				echo "caught exception: ". $e->getMessage(). "\n";
			}
			
		}

		function addNewLogs($user_id, $date){
			try{
				$this->insertSignLogs($user_id, $date);
			}catch(Exception $e){
				echo "caught exception: ". $e->getMessage(). "\n";
			}
			
		}
	}

?>
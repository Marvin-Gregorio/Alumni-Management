<?php
	
	namespace Classes\Controller;
	use Classes\Model\Delete;

	class DeleteController extends Delete{
		
		function user($user_id){
			try{
				$this->deleteUser($user_id);
			}catch(Exception $e){
				echo "caught exception: ". $e->getMessage(). "\n";
			}
			
		}

		function job_post($id){
			try{
				$this->deleteJobPost($id);
			}catch(Exception $e){
				echo "caught exception: ". $e->getMessage(). "\n";
			}
			
		}

		function appointment($user_id){
			try{
				$this->deleteAppointment($user_id);
			}catch(Exception $e){
				echo "caught exception: ". $e->getMessage(). "\n";
			}
			
		}

	}

?>
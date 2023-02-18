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
	}

?>
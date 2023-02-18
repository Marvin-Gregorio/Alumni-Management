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

	}

?>
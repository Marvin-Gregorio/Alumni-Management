<?php
include 'server.php';
if(isset($_POST["Import"])){
		

		echo $filename=$_FILES["file"]["tmp_name"];
		

		 if($_FILES["file"]["size"] > 0)
		 {

		  	$file = fopen($filename, "r");
	         while (($emapData = fgetcsv($file, 10000, ",")) !== FALSE)
	         {
	    
	          //It wiil insert a row to our subject table from our csv file`
              $sql = "INSERT INTO alumni (lastname, firstname, middlename, permanetaddr, presentaddr, emailaddr, birthdate, contact, gender, civilstats, basiced, college, gradschool, course, yeargrad, norg, norgcontact, org, orgemail) 
              VALUES ('$lastname','$firstname','$middlename','$permanetaddr','$presentaddr','$emailaddr','$birthdate','$contact','$gender','$civilstats','$basiced','$college','$gradschool','$course','$yeargrad','$norg','$norgcontact','$org','$orgemail')";
	         //we are using mysql_query function. it returns a resource on true else False on error
	          $result = mysqli_query( $conn, $sql );
				if(! $result )
				{
					echo "<script type=\"text/javascript\">
							alert(\"Invalid File:Please Upload CSV File.\");
							window.location = \"index.php?page=alumni-list\"
						</script>";
				
				}

	         }
	         fclose($file);
	         //throws a message if data successfully imported to mysql database from excel file
	         echo "<script type=\"text/javascript\">
						alert(\"CSV File has been successfully Imported.\");
						window.location = \"index.php?page=alumni-list\"
					</script>";
	        
			 

			 //close of connection
			mysqli_close($conn); 
				
		 	
			
		 }
	}	 
?>		 
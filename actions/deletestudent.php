<?php
		
	
	include_once "../assets/config/database.php";
	
	if(isset($_GET["id"])){
		$DB = new Database();
		
		if($_GET["action"] == "ALL"){
			$result = $DB->query('
				DELETE FROM tblStudents 
				WHERE 
					StudID="' . $_GET["id"] . '";
			');
		} else {
			$result = $DB->query('
				DELETE FROM tblEnrolledStudents 
				WHERE 
					StudID="' . $_GET["id"] . '" AND STermID="' . $_GET["STermID"] . '";
			');
		}
		
		if($result["STATUS"] == "OK"){
			header("location:	../students.php?action=success&message=Student has been successfully deleted from " .  $_GET["action"]. " SCHOOL TERM/S!");
		} else {
			header("location:	../students.php?action=error&message=Deleting Student failed!");
		}
		//echo $result[""]
	} else {
		print_r($_GET);
		echo "No POST data received!";
	}
	
	
?>
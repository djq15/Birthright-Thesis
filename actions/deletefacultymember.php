<?php
		
	
	include_once "../assets/config/database.php";
	
	if(isset($_GET["id"])){
		$DB = new Database();
		if($_GET["action"] == "ALL"){
			$result = $DB->query('
				DELETE FROM tblFacultyMembers 
				WHERE 
					FacultyID="' . $_GET["id"] . '";
			');
		} else {
			$result = $DB->query('
				DELETE FROM tblHiredFacultyMembers 
				WHERE 
					FacultyID="' . $_GET["id"] . '" AND STermID="' . $_GET["STermID"] . '";
			');
		}
		if($result["STATUS"] == "OK"){
			header("location:	../facultymembers.php?action=success&message=Faculty Member has been successfully deleted from " .  $_GET["action"]. " SCHOOL TERM/S!");
		} else {
			header("location:	../facultymembers.php?action=error&message=Deleting Faculty Member failed!");
		}
		//echo $result[""]
	} else {
		print_r($_GET);
		echo "No POST data received!";
	}
	
	
?>
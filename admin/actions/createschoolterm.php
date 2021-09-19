<?php
		
	
	include_once "../assets/config/database.php";
	
	if(isset($_POST["SchoolYear"])){
		$DB = new Database();
		
		$result = $DB->query('
			INSERT INTO tblSchoolTerms VALUES (
				NULL, 	"' . $_POST["Semester"] . '", "' . $_POST["SchoolYear"] . '", 
						"' . $_POST["DateOfStart"] . '", "' . $_POST["DateOfEnd"] . '"
			);
		');
		if($result["STATUS"] == "OK"){
			header("location:	../schoolterms.php?action=success&message=School Term successfully added!");
		} else {
			header("location:	../schoolterms.php?action=error&message=Adding School Term failed!");
		}
	} else {
		print_r($_POST);
		echo "No POST data received!";
	}
	
	
?>
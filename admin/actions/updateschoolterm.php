<?php
		
	
	include_once "../assets/config/database.php";
	
	if(isset($_POST["SchoolYear"])){
		$DB = new Database();
		
		$result = $DB->query('
			UPDATE tblSchoolTerms SET 
						SemesterID	="' . $_POST["Semester"] . '",
						SchoolYear	="' . $_POST["SchoolYear"] . '", 
						DateOfStart	="' . $_POST["DateOfStart"] . '",
						DateOfEnd	="' . $_POST["DateOfEnd"] . '"
			WHERE 
				STermID="' . $_POST["STermID"] . '";
		');
		if($result["STATUS"] == "OK"){
			header("location:	../schoolterms.php?action=success&message=School Term successfully updated!");
		} else {
			header("location:	../schoolterms.php?action=error&message=Updating School Term failed!");
		}
	} else {
		print_r($_POST);
		echo "No POST data received!";
	}
	
	
?>
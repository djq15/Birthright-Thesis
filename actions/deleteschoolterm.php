<?php
		
	
	include_once "../assets/config/database.php";
	
	if(isset($_GET["id"])){
		$DB = new Database();
		
		$result = $DB->query('
			DELETE FROM tblSchoolTerms 
			WHERE 
				STermID="' . $_GET["id"] . '";
		');
		if($result["STATUS"] == "OK"){
			header("location:	../schoolterms.php?action=success&message=School Term successfully deleted!");
		} else {
			header("location:	../schoolterms.php?action=error&message=Deleting School Term failed!");
		}
		//echo $result[""]
	} else {
		print_r($_GET);
		echo "No POST data received!";
	}
	
	
?>
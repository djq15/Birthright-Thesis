<?php
		
	
	include_once "../assets/config/database.php";
	
	if(isset($_GET["id"])){
		$DB = new Database();
		
		$result = $DB->query('
			DELETE FROM tblClasses 
			WHERE 
				ClassID="' . $_GET["id"] . '";
		');
		if($result["STATUS"] == "OK"){
			header("location:	../courses.php?action=success&message=Class successfully deleted!");
		} else {
			header("location:	../courses.php?action=error&message=Deleting Class failed!");
		}
		//echo $result[""]
	} else {
		print_r($_GET);
		echo "No POST data received!";
	}
	
	
?>
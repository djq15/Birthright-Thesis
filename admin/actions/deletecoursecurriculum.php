<?php
		
	
	include_once "../assets/config/database.php";
	
	if(isset($_GET["id"])){
		$DB = new Database();
		
		$result = $DB->query('
			DELETE FROM tblCourses 
			WHERE 
				CourseID="' . $_GET["id"] . '";
		');
		if($result["STATUS"] == "OK"){
			header("location:	../courses.php?action=success&message=Course Curriculum successfully deleted!");
		} else {
			header("location:	../courses.php?action=error&message=Deleting Course Curriculum failed!");
		}
		//echo $result[""]
	} else {
		print_r($_GET);
		echo "No POST data received!";
	}
	
	
?>
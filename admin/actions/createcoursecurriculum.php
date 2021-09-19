<?php
		
	
	include_once "../assets/config/database.php";
	include_once "../assets/objects/References.php";
	
	if(isset($_POST["CourseDescription"])){
		$DB = new Database();
		
		$result = $DB->query('
			INSERT INTO tblCourses VALUES (
				NULL, 	"' . $_POST["CourseDescription"] . '", "' . $_POST["Acronym"] . '", 
						"' . $_POST["TotalYears"] . '", "' . $_POST["CurriculumYear"] . '"
			);
		');
		if($result["STATUS"] == "OK"){
			$CourseID = $DB->get_query_result("SELECT MAX(CourseID) AS CourseID FROM tblCourses;")[0]["CourseID"];
			if(isset($_POST["SubjectCode"])){
				$totalSubjs = count($_POST["SubjectCode"]);
				if($totalSubjs > 0){
					$sqlWE = "INSERT INTO tblCourseSubjects VALUES ";
					
					for($i = 0; $i < $totalSubjs; $i++){
						$sqlWE .= "(NULL, '" . $CourseID . "',
									'" . GetSemesterID($_POST["Semester"][$i]) . "',
									'" . GetYearLevelID($_POST["YearLevel"][$i]) . "',
									'" . $_POST["SubjectCode"][$i] . "',
									'" . str_replace("'","''",$_POST["Description"][$i]) . "',
									'" . $_POST["Units"][$i] . "',
									'" . $_POST["LecHrs"][$i] . "',
									'" . $_POST["LabHrs"][$i] . "')";
						
						if($i+1< $totalSubjs)
							$sqlWE .= ",";
						else
							$sqlWE .= ";";
					}
					
					$resultSubjs = $DB->query($sqlWE);
					print_r($resultSubjs);
					if($resultSubjs){
						header("location:	../courses.php?action=success&message=Course Curriculum successfully added!");
					} else {
						header("location:	../courses.php?action=error&message=Adding Course Curriculum failed!");
					}
				} else {
					eader("location:	../courses.php?action=error&message=Adding Course Curriculum failed! No Subjects!");
				}
			}
			//header("location:	../courses.php?action=success&message=Course Curriculum successfully added!");
		} else {
			header("location:	../courses.php?action=error&message=Adding Course Curriculum failed!");
		}
	} else {
		print_r($_POST);
		echo "No POST data received!";
	}
	
	
?>
<?php

	//$PARENT_SCRIPT = basename($_SERVER["SCRIPT_FILENAME"],".php");

	header('Content-Type: text/javascript');
	require_once("../config/database.php");
	
	$DB = new Database();
	$curStatistics = $DB->get_query_result("
		SELECT 
			A.STermID,
			A.SemesterID,
			(SELECT B.Description FROM tblSemesters AS B WHERE B.SemesterID=A.SemesterID) AS Semester,
			(SELECT COUNT(C.EStudID) FROM tblEnrolledStudents AS C WHERE C.STermID=A.STermID) AS TotalStudents,
			(SELECT COUNT(D.HFacultyID) FROM tblHiredFacultyMembers AS D WHERE D.STermID=A.STermID) AS TotalFacultyMembers,
			A.SchoolYear,
			A.DateOfStart,
			A.DateOfEnd
		FROM
			tblSchoolTerms AS A
		WHERE 
			A.DateOfStart<CURRENT_DATE
		ORDER BY 
			A.DateOfStart DESC,
			A.SemesterID DESC
		LIMIT 1;
	");
	//print_r($curStatistics);
	
	
	if(count($curStatistics) > 0){
	
		$genderStats = $DB->get_query_result("
		
			SELECT 
				B.Sex, COUNT(B.Sex) AS Total
			FROM
				tblStudents AS A
			LEFT JOIN tblPersons AS B ON B.PersonID=A.PersonID
			WHERE
				A.StudID IN (SELECT C.StudID FROM tblEnrolledStudents AS C WHERE C.STermID='" . $curStatistics[0]["STermID"] . "')
			GROUP BY
				B.Sex;
				
		");
		
		$enrolledStats = $DB->get_query_result("
		
			SELECT 
				 C.Acronym, F.Description AS YearLevel, COUNT(A.StudID) AS Total
			FROM
				tblStudents AS A
			LEFT JOIN tblPersons AS B ON B.PersonID=A.PersonID
			LEFT JOIN tblEnrolledStudents AS D ON D.StudID=A.StudID
			LEFT JOIN tblCourses AS C ON C.CourseID=A.CourseID
			LEFT JOIN tblYearLevels AS F ON F.YearLevelID=D.YearLevelID
			WHERE
				D.STermID='" . $curStatistics[0]["STermID"] . "'
			GROUP BY
				C.Acronym, D.YearLevelID;
		");
		
		echo "var curStatistics = " . json_encode($curStatistics[0]) . ";\n";
		echo "var enrolledStats = " . json_encode($enrolledStats) . ";\n";
		echo "var genderStats = " . json_encode($genderStats) . ";\n";
		//echo "console.log(" . json_encode($curStatistics[0]) . ");\n";
		//echo "console.log(" . json_encode($enrolledStats) . ");\n";
		//echo "console.log(" . json_encode($genderStats) . ");\n";
	}
?>

$(document).ready(function(){
	
	<?php
		echo file_get_contents("../js/custom/GenderDistribution.js");
		echo file_get_contents("../js/custom/EnrolledStudentsChart.js");
	
	?>
	
	if($('#'+"ChartEnrolledStudents").length){
		ShowEnrolledStudents("ChartEnrolledStudents", enrolledStats, "ChartLegends");
		ShowGenderDistribution("ChartGenderDistribution",[genderStats[1]["Total"],genderStats[0]["Total"]]);
	}
	
	$(".current-semester").html(curStatistics["Semester"]);
	$(".current-school-year").html(curStatistics["SchoolYear"]);
	$(".current-total-students").html(curStatistics["TotalStudents"]);
	$(".current-total-faculty").html(curStatistics["TotalFacultyMembers"]);
	
	
});
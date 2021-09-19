<?php

	class CourseCurriculum {
		public $CourseDetails = Array();
		public $CourseSubjects = Array();
		
		public function __construct($CourseID, $DB){			
			$Course = $DB->get_query_result("SELECT * FROM tblCourses WHERE CourseID='" . $CourseID . "'")[0];
			$Subjects = $DB->get_query_result("SELECT * FROM tblCourseSubjects WHERE CourseID='" . $CourseID . "' ORDER BY YearLevelID, SemesterID");
			$SubjPrereq = $DB->get_query_result("
				SELECT 
					A.PrerequisiteID, 
					A.SubjectID, 
					B.CourseID,
					A.PSubjectID, 
					(SELECT C.SubjectCode FROM tblCourseSubjects AS C WHERE C.SubjectID=A.PSubjectID) As SubjectCode,
					(SELECT C.Description FROM tblCourseSubjects AS C WHERE C.SubjectID=A.PSubjectID) As Description,
					(SELECT C.Units FROM tblCourseSubjects AS C WHERE C.SubjectID=A.PSubjectID) As Units,
					(SELECT C.LecHrs FROM tblCourseSubjects AS C WHERE C.SubjectID=A.PSubjectID) As LecHrs,
					(SELECT C.LabHrs FROM tblCourseSubjects AS C WHERE C.SubjectID=A.PSubjectID) As LabHrs,
					(SELECT CONCAT(C.Description,' Standing') FROM tblYearLevels AS C WHERE C.YearLevelID=A.YearLevelID) As YearLevel
				FROM
					tblSubjectPrerequisites AS A
				LEFT JOIN tblCourseSubjects AS B ON A.SubjectID=B.SubjectID
				WHERE CourseID='" . $CourseID . "'
			
			");
			
			//print_r($Subjects);
		
			array_push($this->CourseDetails, Array(
				"CourseID"			=>	$Course["CourseID"],
				"Description"		=>	$Course["Description"],
				"Acronym"			=>	$Course["Acronym"],
				"TotalYears"		=>	$Course["TotalYrs"],
				"CurriculumYear"	=>	$Course["CurriculumYear"]
			));
			//echo count($SubjPrereq);
			
			$curSem = 1;
			$curYrLevel = 1;
			$CSubjs = Array();
			$totalUnits = 0;
			
			for($i = 0; $i < count($Subjects); $i++){
				
				$SubjPrereqs = Array();
				for($j = 0; $j < count($SubjPrereq); $j++){
					if($Subjects[$i]["SubjectID"] == $SubjPrereq[$j]["SubjectID"]){
						array_push($SubjPrereqs, Array(
							"PrerequisiteID"	=> $SubjPrereq[$j]["PrerequisiteID"],
							"PSubjectID"		=> $SubjPrereq[$j]["PSubjectID"],
							"SubjectCode"		=> $SubjPrereq[$j]["SubjectCode"],
							"Description"		=> $SubjPrereq[$j]["Description"],
							"Units"				=> $SubjPrereq[$j]["Units"],
							"LecHrs"			=> $SubjPrereq[$j]["LecHrs"],
							"LabHrs"			=> $SubjPrereq[$j]["LabHrs"],
							"YearLevelStanding"	=> $SubjPrereq[$j]["YearLevel"]
						));
					}
				}
				
				array_push($CSubjs, Array(
					"SubjectID"		=> $Subjects[$i]["SubjectID"],
					"SubjectCode"		=> $Subjects[$i]["SubjectCode"],
					"Description"		=> $Subjects[$i]["Description"],
					"Units"				=> $Subjects[$i]["Units"],
					"LectureHours"		=> $Subjects[$i]["LecHrs"],
					"LaboratoryHours"	=> $Subjects[$i]["LabHrs"],
					"SubjectPrerequisites"		=> $SubjPrereqs
				));
				
				$totalUnits += intval($Subjects[$i]["Units"]);
				
				if(($i+1) < count($Subjects)){
					if($curYrLevel != $Subjects[$i+1]["YearLevelID"] || $curSem != $Subjects[$i+1]["SemesterID"]){
						array_push($this->CourseSubjects, Array(
							"YearLevel"			=>	GetYearLevel($curYrLevel),
							"Semester"			=>	GetSemester($curSem),
							"TotalUnits"		=>	$totalUnits,
							"Subjects"			=> 	$CSubjs
						));
						
						$CSubjs 	= Array();
						$curYrLevel = $Subjects[$i+1]["YearLevelID"];
						$curSem 	= $Subjects[$i+1]["SemesterID"];
						$totalUnits = 0;
					}
				} else {
					array_push($this->CourseSubjects, Array(
						"YearLevel"			=>	GetYearLevel($curYrLevel),
						"Semester"			=>	GetSemester($curSem),
						"TotalUnits"		=>	$totalUnits,
						"Subjects"			=> 	$CSubjs
					));
				}
			}
		}		
	}
	
	
?>
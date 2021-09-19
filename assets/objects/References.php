<?php

	const REF_DEGREES = Array(
		'Elementary',
		'Junior High School',
		'Senior High School', 
		'Vocational Degree', 
		'Associate Degree', 
		'Baccalaureate Degree', 
		'Masteral Degree', 
		'Doctoral Degree'
	);
		
	const REF_USER_ROLES = Array(
		'Administrator',
		'Faculty Member',
		'Student'
	);
	
	const REF_USER_STATUS = Array(
		'Activated',
		'Deactivated'
	);
	
	const REF_YEAR_LEVELS = Array(
		'1st Year',
		'2nd Year',
		'3rd Year',
		'4th Year',
		'5th Year'
	);
	 
	
	const REF_SEMESTER = Array(
		'1st Semester',
		'2nd Semester',
		'Summer'
	);
	
	const REF_ADMISSION_STATUS = Array(
		'New',
		'Transferee',
		'Old'
	);
	
	const REF_SCHOLASTIC_STATUS = Array(
		'Regular',
		'Irregular'
	);
	
	const REF_PREREQUISITE_TYPE = Array(
		'Subject',
		'Year Level Standing'
	);
	
	const REF_CLASS_TYPE = Array(
		'Regular',
		'Merged',
		'Tutorial'
	);
	
	const REF_DAYS = Array(
		'Monday',
		'Tuesday',
		'Wednesday',
		'Thursday',
		'Friday',
		'Saturday',
		'Sunday'
	);

	/* IF VALUE IS KNOWN */
	
	function GetDegreeID($Degree){ return intval(array_search($Degree, REF_DEGREES)) + 1; }
	function GetUserRoleID($UserRole){ return intval(array_search($UserRole, REF_USER_ROLES)) + 1; }
	function GetUserStatusID($UserStatus){ return intval(array_search($UserStatus, REF_USER_STATUS)) + 1; }
	function GetYearLevelID($YearLevel){ return intval(array_search($YearLevel, REF_YEAR_LEVELS)) + 1; }
	function GetSemesterID($Semester){ return intval(array_search($Semester, REF_SEMESTER)) + 1; }
	function GetAdmissionStatusID($AdmissionStatus){ return intval(array_search($AdmissionStatus, REF_ADMISSION_STATUS)) + 1; }
	function GetScholasticStatusID($ScholasticStatus){ return intval(array_search($ScholasticStatus, REF_SCHOLASTIC_STATUS)) + 1; }
	function GetPrerequisiteTypeID($PrerequisiteType){ return intval(array_search($PrerequisiteType, REF_PREREQUISITE_TYPE)) + 1; }
	function GetClassTypeID($ClassType){ return intval(array_search($ClassType, REF_CLASS_TYPE)) + 1; }
	function GetDayID($Day){ return intval(array_search($Day, REF_DAYS)) + 1; }

	
	function GetDegree($DegreeID){ return REF_DEGREES[$DegreeID - 1]; }
	function GetUserRole($UserRoleID){ return REF_USER_ROLES[$UserRoleID - 1]; }
	function GetUserStatus($UserStatusID){ return REF_USER_STATUS[$UserStatusID - 1]; }
	function GetYearLevel($YearLevelID){ return REF_YEAR_LEVELS[$YearLevelID - 1]; }
	function GetSemester($SemesterID){ return REF_SEMESTER[$SemesterID - 1]; }
	function GetAdmissionStatus($AdmissionStatusID){ return REF_ADMISSION_STATUS[$AdmissionStatusID - 1]; }
	function GetScholasticStatus($ScholasticStatusID){ return REF_SCHOLASTIC_STATUS[$ScholasticStatusID - 1]; }
	function GetPrerequisiteType($PrerequisiteTypeID){ return REF_PREREQUISITE_TYPE[$PrerequisiteTypeID - 1]; }
	function GetClassType($ClassTypeID){ return REF_CLASS_TYPE[$ClassTypeID - 1]; }
	function GetDay($DayID){ return REF_DAYS[$DayID - 1]; }

?>
DROP DATABASE IF EXISTS IETI_DB;

CREATE DATABASE IETI_DB;

USE IETI_DB;

/**************************************************************
	REFERENCE TABLES:
    


**************************************************************/

DROP TABLE IF EXISTS tblDegrees;
CREATE TABLE tblDegrees (
	DegreeID INT AUTO_INCREMENT PRIMARY KEY,
    Description varchar(50)
);

INSERT tblDegrees VALUES 
	(NULL, 'Elementary'),
    (NULL, 'Junior High School'),
    (NULL, 'Senior High School'),
    (NULL, 'Vocational Degree'),
    (NULL, 'Associate Degree'),
    (NULL, 'Baccalaureate Degree'),
    (NULL, 'Masteral Degree'),
    (NULL, 'Doctoral Degree');

DROP TABLE IF EXISTS tblUserRoles;
CREATE TABLE tblUserRoles (
	RoleID INT AUTO_INCREMENT PRIMARY KEY,
    Description varchar(100)
);

INSERT INTO tblUserRoles VALUES
	(NULL, 'Administrator'),
	(NULL, 'Faculty Member'),
	(NULL, 'Student');
    
DROP TABLE IF EXISTS tblUserStatus;
CREATE TABLE tblUserStatus (
	StatusID INT AUTO_INCREMENT PRIMARY KEY,
    Description varchar(50)
);

INSERT INTO tblUserStatus VALUES
	(NULL, 'Activated'),
	(NULL, 'Deactivated');

DROP TABLE IF EXISTS tblYearLevels;
CREATE TABLE tblYearLevels(
	YearLevelID INT AUTO_INCREMENT PRIMARY KEY,
    Description varchar(100)
);

INSERT INTO tblYearLevels VALUES
	(NULL, '1st Year'),
	(NULL, '2nd Year'),
	(NULL, '3rd Year'),
	(NULL, '4th Year'),
	(NULL, '5th Year');

DROP TABLE IF EXISTS tblSemesters;
CREATE TABLE tblSemesters(
	SemesterID INT AUTO_INCREMENT PRIMARY KEY,
    Description varchar(100)
);

INSERT INTO tblSemesters VALUES
	(NULL, '1st Semester'),
	(NULL, '2nd Semester'),
	(NULL, 'Summer');

DROP TABLE IF EXISTS tblAdmissionStatus;
CREATE TABLE tblAdmissionStatus (
	AdmissionStatusID INT AUTO_INCREMENT PRIMARY KEY,
    Description varchar(100)
);

INSERT INTO tblAdmissionStatus VALUES 
	(NULL, "New"),
	(NULL, "Transferee"),
	(NULL, "Old");

DROP TABLE IF EXISTS tblScholasticStatus;
CREATE TABLE tblScholasticStatus (
	ScholasticStatusID INT AUTO_INCREMENT PRIMARY KEY,
    Description varchar(100)
);

INSERT INTO tblScholasticStatus VALUES 
	(NULL, "Regular"),
	(NULL, "Irregular");

DROP TABLE IF EXISTS tblPrerequisiteType;
CREATE TABLE tblPrerequisiteType(
	TypeID INT AUTO_INCREMENT PRIMARY KEY,
    Description varchar(50)
);

INSERT INTO tblPrerequisiteType VALUES
	(NULL, 'Subject'),
	(NULL, 'Year Level Standing');

DROP TABLE IF EXISTS tblClassTypes;
CREATE TABLE tblClassTypes (
	TypeID INT AUTO_INCREMENT PRIMARY KEY,
    Description varchar(100)
);

INSERT INTO tblClassTypes VALUES 
	(NULL, 'Regular'),
	(NULL, 'Merged'),
	(NULL, 'Tutorial');

DROP TABLE IF EXISTS tblDays;
CREATE TABLE tblDays (
	DayID INT AUTO_INCREMENT PRIMARY KEY,
    Description varchar(25)
);

INSERT INTO tblDays VALUES 
	(NULL, 'Monday'),
	(NULL, 'Tuesday'),
	(NULL, 'Wednesday'),
	(NULL, 'Thursday'),
	(NULL, 'Friday'),
	(NULL, 'Saturday'),
	(NULL, 'Sunday');

/**************************************************************
	CORE TABLES:
    


**************************************************************/

DROP TABLE IF EXISTS tblPersons;
CREATE TABLE tblPersons (
	PersonID INT AUTO_INCREMENT PRIMARY KEY,
	Title varchar(10),
    LastName varchar(50),
    FirstName varchar(50),
    MiddleName varchar(50),
    Sex varchar(10),
    DateOfBirth DATE,
    PlaceOfBirth varchar(50),
    AddLine1 varchar(100),
    AddLine2 varchar(100),
    MunicipalityCity varchar(100),
    Province varchar(100),
    PostalCode INT(10),
    Email varchar(50),
    ContactNo varchar(20)
);

DROP TABLE IF EXISTS tblEducation;
CREATE TABLE tblEducation (
	EducationID INT AUTO_INCREMENT PRIMARY KEY,
    PersonID INT,
    DegreeID INT,
    Institution varchar(100),
    Address varchar(255),
    DegreeEarned varchar(255),
    DateStarted DATE,
    DateEnded DATE,
    FOREIGN KEY (PersonID) REFERENCES tblPersons(PersonID) ON DELETE CASCADE,
    FOREIGN KEY (DegreeID) REFERENCES tblDegrees(DegreeID) ON DELETE CASCADE
);

DROP TABLE IF EXISTS tblUsers;
CREATE TABLE tblUsers (
	UserID INT AUTO_INCREMENT PRIMARY KEY,
    RoleID INT,
    StatusID INT,
    Username varchar(50),
    Password varchar(50),
    ProfilePic varchar(100),
    FOREIGN KEY (RoleID) REFERENCES tblUserRoles(RoleID) ON DELETE CASCADE,
    FOREIGN KEY (StatusID) REFERENCES tblUserStatus(StatusID) ON DELETE CASCADE
);

DROP TABLE IF EXISTS tblCourses;
CREATE TABLE tblCourses(
	CourseID INT AUTO_INCREMENT PRIMARY KEY,
    Description varchar(255),
    Acronym varchar(50),
    TotalYrs INT(5),
    CurriculumYear varchar(50)
);

DROP TABLE IF EXISTS tblCourseSubjects;
CREATE TABLE tblCourseSubjects(
	SubjectID INT AUTO_INCREMENT PRIMARY KEY,
    CourseID INT,
    SemesterID INT,
    YearLevelID INT,
    SubjectCode varchar(20),
    Description varchar(255),
    Units INT,
    LecHrs INT,
    LabHrs INT,
    FOREIGN KEY (CourseID) REFERENCES tblCourses(CourseID) ON DELETE CASCADE,
    FOREIGN KEY (SemesterID) REFERENCES tblSemesters(SemesterID) ON DELETE CASCADE,
    FOREIGN KEY (YearLevelID) REFERENCES tblYearLevels(YearLevelID) ON DELETE CASCADE
);

DROP TABLE IF EXISTS tblSubjectPrerequisites;
CREATE TABLE tblSubjectPrerequisites(
	PrerequisiteID INT AUTO_INCREMENT PRIMARY KEY,
    SubjectID INT,
    TypeID INT,
    PSubjectID INT,
    YearLevelID INT,
    FOREIGN KEY (SubjectID) REFERENCES tblCourseSubjects(SubjectID) ON DELETE CASCADE,
    FOREIGN KEY (TypeID) REFERENCES tblPrerequisiteType(TypeID) ON DELETE CASCADE,
    FOREIGN KEY (PSubjectID) REFERENCES tblCourseSubjects(SubjectID) ON DELETE CASCADE,
    FOREIGN KEY (YearLevelID) REFERENCES tblYearLevels(YearLevelID) ON DELETE CASCADE
);

DROP TABLE IF EXISTS tblSchoolTerms;
CREATE TABLE tblSchoolTerms (
	STermID INT AUTO_INCREMENT PRIMARY KEY,
    SemesterID INT,
    SchoolYear varchar(50),
    DateOfStart DATE,
    DateOfEnd DATE,
    FOREIGN KEY (SemesterID) REFERENCES tblSemesters(SemesterID) ON DELETE CASCADE
);

DROP TABLE IF EXISTS tblStudents;
CREATE TABLE tblStudents (
	StudID INT AUTO_INCREMENT PRIMARY KEY,
    SchoolIDNo varchar(50),
    UserID INT,
    PersonID INT,
    CourseID INT,
    FOREIGN KEY (UserID) REFERENCES tblUsers(UserID) ON DELETE CASCADE,
    FOREIGN KEY (PersonID) REFERENCES tblPersons(PersonID) ON DELETE CASCADE,
    FOREIGN KEY (CourseID) REFERENCES tblCourses(CourseID) ON DELETE CASCADE
);

DROP TABLE IF EXISTS tblFacultyMembers;
CREATE TABLE tblFacultyMembers (
	FacultyID INT AUTO_INCREMENT PRIMARY KEY,
    SchoolIDNo varchar(50),
    UserID INT,
    PersonID INT,
    FOREIGN KEY (UserID) REFERENCES tblUsers(UserID) ON DELETE CASCADE,
    FOREIGN KEY (PersonID) REFERENCES tblPersons(PersonID) ON DELETE CASCADE
);

DROP TABLE IF EXISTS tblEnrolledStudents;
CREATE TABLE tblEnrolledStudents (
	EStudID INT AUTO_INCREMENT PRIMARY KEY,
    DateEnrolled DATE,
    STermID INT,
    StudID INT,
    YearLevelID INT,
    AdmissionStatusID INT,
    ScholasticStatusID INT,
    FOREIGN KEY (STermID) REFERENCES tblSchoolTerms(STermID) ON DELETE CASCADE,
    FOREIGN KEY (StudID) REFERENCES tblStudents(StudID) ON DELETE CASCADE,
    FOREIGN KEY (YearLevelID) REFERENCES tblYearLevels(YearLevelID) ON DELETE CASCADE,
    FOREIGN KEY (AdmissionStatusID) REFERENCES tblAdmissionStatus(AdmissionStatusID) ON DELETE CASCADE,
    FOREIGN KEY (ScholasticStatusID) REFERENCES tblScholasticStatus(ScholasticStatusID) ON DELETE CASCADE
);

DROP TABLE IF EXISTS tblHiredFacultyMembers;
CREATE TABLE tblHiredFacultyMembers (
	HFacultyID INT AUTO_INCREMENT PRIMARY KEY,
    STermID INT,
    FacultyID INT,
    FOREIGN KEY (STermID) REFERENCES tblSchoolTerms(STermID) ON DELETE CASCADE,
    FOREIGN KEY (FacultyID) REFERENCES tblFacultyMembers(FacultyID) ON DELETE CASCADE
);

DROP TABLE IF EXISTS tblClasses;
CREATE TABLE tblClasses (
	ClassID INT AUTO_INCREMENT PRIMARY KEY,
    STermID INT,
    HFacultyID INT,
    TypeID INT,
    Description varchar(255),
    FOREIGN KEY (STermID) REFERENCES tblSchoolTerms(STermID) ON DELETE CASCADE,
    FOREIGN KEY (HFacultyID) REFERENCES tblHiredFacultyMembers(HFacultyID) ON DELETE CASCADE,
    FOREIGN KEY (TypeID) REFERENCES tblClassTypes(TypeID) ON DELETE CASCADE
);

DROP TABLE IF EXISTS tblClassSchedules;
CREATE TABLE tblClassSchedules (
	CSchedID INT AUTO_INCREMENT PRIMARY KEY,
    ClassID INT,
    DayID INT,
    TimeOfStart TIME,
    TimeOfEnd TIME,
    FOREIGN KEY (ClassID) REFERENCES tblClasses(ClassID) ON DELETE CASCADE,
    FOREIGN KEY (DayID) REFERENCES tblDays(DayID) ON DELETE CASCADE
);

DROP TABLE IF EXISTS tblClassSubjects;
CREATE TABLE tblClassSubjects (
	CSubjID INT AUTO_INCREMENT PRIMARY KEY,
    ClassID INT,
    SubjectID INT,
    FOREIGN KEY (ClassID) REFERENCES tblClasses(ClassID) ON DELETE CASCADE,
    FOREIGN KEY (SubjectID) REFERENCES tblCourseSubjects(SubjectID) ON DELETE CASCADE
);

DROP TABLE IF EXISTS tblEnrolledSubjects;
CREATE TABLE tblEnrolledSubjects (
	ESubjID INT AUTO_INCREMENT PRIMARY KEY,
    CSubjID INT,
    EStudID INT,
    FOREIGN KEY (CSubjID) REFERENCES tblClassSubjects(CSubjID) ON DELETE CASCADE,
    FOREIGN KEY (EStudID) REFERENCES tblEnrolledStudents(EStudID) ON DELETE CASCADE
);
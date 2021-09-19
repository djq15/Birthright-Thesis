<?php

session_start();
$studentid = 0;
$firstname = "";
$lastname = "";
$grade = 0;
$edit_state = false;

$db = mysqli_connect('localhost', 'root', 'ieti19', 'ieti_db');

if (isset($_POST['save'])) {
	$studentid = $_POST['studentid'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$grade = $_POST['grade'];	

	$query = "INSERT INTO grades (student_id, first_name, last_name, grade) VALUES ('$studentid', '$firstname', '$lastname', '$grade')";
	mysqli_query($db, $query);
	//mysqli_query($db, "INSERT INTO grades (student_id, first_name, last_name, grade) VALUES ('$studentid', '$firstname', '$lastname', '$grade')");
	$_SESSION['msg'] = "Details saved";
	header('location: gradesubmission.php');
}

	if (isset($_POST['update'])) {

	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];	
	$studentid = $_POST['studentid'];
	$prelim = $_POST['prelim'];
	$midterm = $_POST['midterm'];	
	$final = $_POST['final'];
	$grade = $_POST['grade'];
	
	

	mysqli_query($db, "UPDATE grades SET prelim='$prelim', midterm='$midterm', final='$final' WHERE student_id = $studentid");
	$_SESSION['msg'] = "Details updated";	
	header('location: gradesubmission.php');	
	}	


	if (isset($_GET['del'])) {
	$studentid = $_GET['del'];
	
	mysqli_query($db, "DELETE FROM grades WHERE student_id = $studentid");
	$_SESSION['msg'] = "Details deleted";
	header('location: gradesubmission.php');	
	}	


	
	
			$results = mysqli_query($db, "SELECT student_id, first_name, last_name, grade, prelim, midterm, final FROM ieti_db.grades, ieti_db.login where username=first_name and tag='2'");



?>
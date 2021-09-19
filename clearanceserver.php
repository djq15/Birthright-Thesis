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

	if (isset($_POST['clearance_update'])) {

	//$studentid = $_POST['studentid'];
	//$firstname = $_POST['firstname'];
	//$lastname = $_POST['lastname'];
	//$grade = $_POST['grade'];	
	
	$username = $currentUser;
	//mysqli_query($db, "UPDATE login SET clearance_approve='$decision' WHERE student_id = $studentid");
	mysqli_query($db, "UPDATE ieti_db.login SET evaluation_submit='Y' WHERE username='$currentUser'");


	$_SESSION['msg'] = "Details saved";
	header('location: clearanceactivation.php');
	}


	if (isset($_GET['del'])) {
	$studentid = $_GET['del'];
	
	mysqli_query($db, "DELETE FROM grades WHERE student_id = $studentid");
	$_SESSION['msg'] = "Details deleted";
	header('location: gradesubmission.php');	
	}	


	
	
	$results = mysqli_query($db, "SELECT * FROM login");



?>
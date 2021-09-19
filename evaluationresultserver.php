<?php


session_start();
$studentid = 0;
$firstname = "";
$lastname = "";
$grade = 0;
$edit_state = false;

$currentUser = $_SESSION['User'];
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
	$grade = $_POST['grade'];	
	$studentid = $_POST['studentid'];

	mysqli_query($db, "UPDATE grades SET first_name='$firstname', last_name='$lastname', grade='$grade' WHERE student_id = $studentid");
	$_SESSION['msg'] = "Details updated";	
	header('location: gradesubmission.php');	
	}	


	if (isset($_GET['del'])) {
	$studentid = $_GET['del'];
	
	mysqli_query($db, "DELETE FROM grades WHERE student_id = $studentid");
	$_SESSION['msg'] = "Details deleted";
	header('location: gradesubmission.php');	
	}	
	
	if (isset($_POST['evaluation_submit'])) {
	//$studentid = $_POST['studentid'];
	//$firstname = $_POST['firstname'];
	//$lastname = $_POST['lastname'];
	//$grade = $_POST['grade'];	
	$evaluation_grade = $_POST['evaluation_grade'];
	
	$username = $currentUser;
	mysqli_query($db, "UPDATE ieti_db.login SET evaluation_submit='Y' WHERE username='$currentUser'");
	mysqli_query($db, "UPDATE ieti_db.login SET evaluation='$evaluation_grade' WHERE username='$currentUser'");

	$_SESSION['msg'] = "Evaluation submitted";
	header('location: evaluationactivation.php');

	}


	//$results = mysqli_query($db, "SELECT * FROM grades");
	//$results = mysqli_query($db, "SELECT * FROM login");

	$results = mysqli_query($db, "SELECT * FROM login where username='$currentUser'");

		if ($row=mysqli_fetch_array($results)) {
			if ($row['tag'] == '2'){



			$results = mysqli_query($db, "SELECT username,password, evaluation_submit, evaluation FROM login where username='$currentUser'");

			}


				
			
		}
		


?>
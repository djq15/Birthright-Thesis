<?php

session_start();
$studentid = 0;
$firstname = "";
$lastname = "";
$grade = 0;
$username = "";
$clearance_approve = "";
$edit_state = false;

$db = mysqli_connect('localhost', 'root', 'ieti19', 'birthright_db');

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

//testing
	if (isset($_POST['update']) and ($_POST['clearance_approve']) == "Y") {

	$username = $_POST['username'];
	$clearance_approve = $_POST['clearance_approve'];

	mysqli_query($db, "UPDATE login SET `clearance_approve`='$clearance_approve' WHERE `username` = '$username'");
	//$results = mysqli_query($db, "SELECT * FROM login where username='$currentUser'");
	//if ($row=mysqli_fetch_array($results)) {
	//if ($row['tag'] == '1'){



	//}
	//}
	$_SESSION['msg'] = "Details updated";	
	header('location: clearanceactivation.php');	
	//mysqli_query($db, "UPDATE grades, login SET `grade`='4.0' WHERE `username` = '$username' and `username` = `first_name`");
	//echo "bitch";

	}	
//testing





	if (isset($_POST['update']) and ($_POST['clearance_approve']) == "N") {

	$username = $_POST['username'];
	$clearance_approve = $_POST['clearance_approve'];

	mysqli_query($db, "UPDATE login SET `clearance_approve`='$clearance_approve' WHERE `username` = '$username'");
	//$results = mysqli_query($db, "SELECT * FROM login where username='$currentUser'");
	//if ($row=mysqli_fetch_array($results)) {
	//if ($row['tag'] == '1'){

	//mysqli_query($db, "UPDATE grades, login SET `grade`='4' WHERE `username` = '$username' and `username` = `first_name`");
	mysqli_query($db, "UPDATE grades, login SET `prelim`='4', `midterm`='4', `final`='4' WHERE `username` = '$username' and `username` = `first_name`");
	//}
	//}
	$_SESSION['msg'] = "Details updated";	
	header('location: clearanceactivation.php');	
	//mysqli_query($db, "UPDATE grades, login SET `grade`='4.0' WHERE `username` = '$username' and `username` = `first_name`");
	//echo "bitch";

	}	
		

	if (isset($_GET['del'])) {
	$studentid = $_GET['del'];
	
	mysqli_query($db, "DELETE FROM grades WHERE student_id = $studentid");
	$_SESSION['msg'] = "Details deleted";
	header('location: gradesubmission.php');	
	}	

	//if (isset($_POST['upload'])) {

	if (isset($_POST['upload']) and ($_POST['username']) == "Dexer") {
	//echo $_POST["username"];
	header('location: uploads/dex/dexupload1.php');	
 


	}
	
	else if (isset($_POST['upload']) and ($_POST['username']) == "Danil") {
	
	header('location: uploads/danil/danilupload1.php');	
	
	}
	
	else if (isset($_POST['upload']) and ($_POST['username']) == "Manny") {
	
	header('location: uploads/manny/mannyupload1.php');	
	
	}

	else if (isset($_POST['upload']) and ($_POST['username']) == "") {
	
	header('location: clearanceactivation.php');	
	
	}	
	//$results = mysqli_query($db, "SELECT * FROM login WHERE tag='2'");
	$results = mysqli_query($db, "SELECT * FROM login, masterlist WHERE user_id=Student_No and verified='1' and tag='2'");
	



?>



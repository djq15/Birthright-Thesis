<?php
	session_start(); if ( $_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ) && $_SESSION['tag'] !="1") {
	session_start();session_destroy();die( header( 'location: ../LogIn.php?Empty= Action Denied. Log in again' ) );}
?>
<link rel="stylesheet" type = "text/css" href = "../gradestyle.css">
<link href="./assets/css/sb-admin-2.min.css" rel="stylesheet" type="text/css" />
<?php 
include("topbar.php");
?>

<a href="dash.php">Back</a>

<p align="center">Delete User from accounts database (students only)</p>

<?php

	//include('gradeserveredit.php'); 

session_start();
$edit_state = false;

$db = mysqli_connect('localhost', 'root', 'ieti19', 'ieti_db');

if (isset($_POST['save'])) {
	$studentid = $_POST['studentid'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$grade = $_POST['grade'];	

	$query = "INSERT INTO ieti_db.it101 (student_id, first_name, last_name, grade) VALUES ('$studentid', '$firstname', '$lastname', '$grade')"; //hit
	mysqli_query($db, $query);
	//mysqli_query($db, "INSERT INTO grades (student_id, first_name, last_name, grade) VALUES ('$studentid', '$firstname', '$lastname', '$grade')");
	$_SESSION['msg'] = "Details saved";
	header('location: gradesubmissionit101.php'); //hit
}

	if (isset($_POST['update'])) {

	$username = $_POST['username'];
	$password = $_POST['password'];	
	$tag = $_POST['tag'];
	$approval = $_POST['approval'];
	$email = $_POST['email'];
	$folder = $_POST['folder'];	
	$verified = $_POST['verified'];
	

	mysqli_query($db, "UPDATE birthright_db.login SET username='$username', password='$password', tag='$tag', clearance_approve='$approval', email='$email', existing_folder='$folder', verified='$verified' WHERE username = '$username'"); //hit
	$_SESSION['msg'] = "Details updated";	
	header('location: edit.php');	//hit
	}	


	if (isset($_GET['del'])) {
	$studentid = $_GET['del'];
	
	mysqli_query($db, "DELETE FROM birthright_db.login WHERE username='$username'"); //hit
	$_SESSION['msg'] = "Details deleted";
	header('location: edit.php');	//hit
	}	
	
	/*
	if (isset($_POST['del'])) {
	$username = $_POST['username'];
	
	mysqli_query($db, "DELETE FROM birthright_db.login WHERE username='$username'"); //hit
	$_SESSION['msg'] = "Details deleted";
	header('location: edit.php');	//hit
	}	
	*/
	
	
	//$results = mysqli_query($db, "SELECT student_id, first_name, last_name, prelim, midterm, final FROM ieti_db.it101, ieti_db.login where username=first_name and tag='2'");
	$results = mysqli_query($db, "SELECT * from birthright_db.accounts");
	
	
	
	if (isset($_GET['edit'])) {
	$username = $_GET['edit'];
	$edit_state = true;
	
	$rec = mysqli_query($db, "SELECT * FROM birthright_db.login WHERE username='$username'");	 //hit
	$record = mysqli_fetch_array($rec);
	$password = $record['password'];
	$tag = $record['tag'];
	$approval = $record['clearance_approve'];		
	$email = $record['email'];
	$folder = $record['existing_folder'];	
	$verified = $record['verified'];	
	
	}	

?>
<!DOCTYPE html>

<html>
<head>
	<link rel="stylesheet" type = "text/css" href = "gradestyle.css">
	
	<script src="351min.js"></script>
	<script src="336bootstrap.js"></script>	
</head>

<body>

<?php if (isset($_SESSION['msg'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		?>
	</div>

<?php endif ?>


<table>

	<thead>
		<tr>
			<th>Student ID</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th colspan="2">Action</th>
		</tr>
	</thead>

	<tbody>
		<?php //while ($row = mysqli_fetch_array($results)) { ?>
		<?php while ($row = $results->fetch_assoc()) { ?>
		<tr>
			<td><?php echo $row['student_id']; ?> </td>
			<td><?php echo $row['first_name']; ?> </td>
			<td><?php echo $row['last_name']; ?> </td>
			

			<td>
				<a class = "edit_btn" href="javascript:deleteme('<?php echo $row['student_id']; ?>')" name="delete">Delete</a> <!-- hit -->
			</td>



		</tr>
<script>
function deleteme(delid)
{
	if (confirm('Do you want to delete student id "'+delid+'" ?')){
			window.location.href='deleteaccounts.php?del_id=' +delid+'';
			return true;
	}
}
</script>

	
		<?php } ?> 
	</tbody>
</table>
</body>

</html>

<?php
if (isset($_POST["yes"])) {

	$studentid = $_POST['student_id'];
	
	mysqli_query($db, "DELETE FROM birthright_db.login WHERE student_id='$studentid'"); //hit
	$_SESSION['msg'] = "Details deleted";
	header('location: editaccounts.php');	//hit

}

?>

<?php	
	include_once("../web-page-parts/footer.php");
?>
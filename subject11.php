<?php
	session_start(); if ( $_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ) && $_SESSION['tag'] !="1" && $_SESSION['tag'] !="3") {
	session_start();session_destroy();die( header( 'location: LogIn.php?Empty= Action Denied. Log in again' ) );}
?>


<?php 
	include_once("./web-page-parts/header2.php");
	include_once("./web-page-parts/sidebar.php");
	include_once("./web-page-parts/topbar.php");
	//include('filtercheck.php');
?>

<a href="dash2.php"> Back to dashboard</a>



<?php 


	//include('gradeserveredit.php'); //hit 

session_start();
$studentno = 0;
$firstname = "";
$lastname = "";
$grade = 0;
$edit_state = false;

$db = mysqli_connect('localhost', 'root', 'ieti19', 'birthright_db');

if (isset($_POST['save'])) {
	$studentid = $_POST['studentid'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$grade = $_POST['grade'];	

	$query = "INSERT INTO birthright_db.subject1 (student_id, first_name, last_name, grade) VALUES ('$studentid', '$firstname', '$lastname', '$grade')"; //hit
	mysqli_query($db, $query);
	//mysqli_query($db, "INSERT INTO grades (student_id, first_name, last_name, grade) VALUES ('$studentid', '$firstname', '$lastname', '$grade')");
	$_SESSION['msg'] = "Details saved";
	header('location: subject1.php'); //hit
}

	if (isset($_POST['update'])) {
		
	$studentno = $_POST['studentno'];
	$status = $_POST['status'];
	$lastname = $_POST['lastname'];	
	$firstname = $_POST['firstname'];
	$middleinitial = $_POST['middleinitial'];
	$nickname = $_POST['nickname'];	
	$province = $_POST['province'];
	
	//$grade = $_POST['grade'];
	
	

	mysqli_query($db, "UPDATE birthright_db.masterlist SET Status='$status', Last_name='$lastname', First_name='$firstname', Middle_initial='$middleinitial', Nickname='$nickname', Province='$province' WHERE Student_No = $studentno"); //hit
	$_SESSION['msg'] = "Details updated";	
	header('location: subject11.php');	//hit
	}	


	if (isset($_GET['del'])) {
	$studentid = $_GET['del'];
	
	mysqli_query($db, "DELETE FROM birthright_db.subject1 WHERE student_id = $studentid"); //hit
	$_SESSION['msg'] = "Details deleted";
	header('location: subject1.php');	//hit
	}	


	
	
		//$results = mysqli_query($db, "SELECT student_id, first_name, last_name, prelim, midterm, final FROM ieti_db.subject1, ieti_db.login where username=first_name and tag='2'");
		//hit

	
	if (isset($_GET['edit'])) {
	$studentno = $_GET['edit'];
	$edit_state = true;
	//echo $_GET['edit'];
	$rec = mysqli_query($db, "SELECT * FROM birthright_db.masterlist WHERE Student_No=$studentno");	 //hit
	$record = mysqli_fetch_array($rec);
	$status = $record['Status'];
	$lastname = $record['Last_name'];
	$firstname = $record['First_name'];
	$middleinitial = $record['Middle_initial'];
	$nickname = $record['Nickname'];
	$province = $record['Province'];
	$grade = $record['grade'];		
	}	

?>
<!DOCTYPE html>

<html>
<head>

		<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->
		<script src="351min.js"></script>
		
		<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> -->
		<script src="336bootstrap.js"></script>	
		
	<link rel="stylesheet" type = "text/css" href = "gradestyle.css">
	
	<script>
		$(document).ready(function() {
			//$("form").submit(function(event){	
			//$("#mail-name").change(function(event){ //experiment
			//$("form").submit(function(event){	
			//$("#mail-name").on('change', function(event){ //experiment
			$("form").change(function(event){ //experiment
				//this.form.submit(); //experiment
				//$("#mail-name").on('change', function(event){ //experiment
				//$(this).closest('form').submit(); //experiment
				event.preventDefault();
				var name = $("#mail-name").val();
				var email = $("#mail-email").val();
				var gender = $("#mail-gender").val();
				var message = $("#mail-message").val();
				var submit = $("#mail-submit").val();
				$(".form-message").load("keyupfilter.php", {
					filter: name, 
					email: email,
					gender: gender,
					message: message, 
					submit: submit
				});
			});
		});
	</script>
	<!-- secondz -->
	<script>/*
		$(document).ready(function() {
			//$("form").submit(function(event){	
			//$("#mail-name").change(function(event){ //experiment
			//$("form").submit(function(event){	
			//$("#mail-name").on('change', function(event){ //experiment
			$("form").change(function(event){ //experiment
				//this.form.submit(); //experiment
				//$("#mail-name").on('change', function(event){ //experiment
				//$(this).closest('form').submit(); //experiment
				event.preventDefault();
				var namez = $("#mail-namez").val();
				var emailz = $("#mail-emailz").val();
				var gender = $("#mail-gender").val();
				var message = $("#mail-message").val();
				var submit = $("#mail-submit").val();
				$(".form-message").load("keyupfilter2.php", {
					filter: namez, 
					email: emailz,
					gender: gender,
					message: message, 
					submit: submit
				});
			});
		});*/
	</script>
	<!-- secondz -->
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



<!-- <table> this is troubling the filter -->  
	<!-- search bar -->
	
	<!--
	<div class="input-group">
		<span class="input-group-addon">Search</span>
		<input type="text" name="search_text" id="search_text" autocomplete="off" class="form-control" />
	</div> 
	-->

	<!-- search bar -->	
	
	<!-- search bar -->
<style>
.container {


}

.table-row {

  margin-right: 130px;
  margin-left: 100px;
 //display: table-row;
 

 margin-left: 20%;
 
  height: 100px;
}
.table-cell {
  margin: auto;
  display: table-cell;
}

	.search-tag {

    border:none;
	box-shadow: none;

	}
	
	.search-tag {
	margin-bottom: 15px;
	margin-top: 15px;
	}
</style>

	<!-- search bar -->	
  <div class="container">
    <div class="table-row">
	<div class="table-cell">
	
<span class="input-group-addon">Search</span>
<input type="search" name="search_text" id="search_text" autocomplete="off" class="form-control" />
</div>
<!-- <form method = "post"  = "fetch-class2"> -->
<!-- <form method = "post" action = ""> -->
<div class="table-cell">

<form class="search-tag">

	<div class = "input-group">
	
			<!--
			<span class="input-group-addon">Search</span>
			<input type="text" name="search_text" id="search_text" autocomplete="off" class="form-control" />
			-->

			<label>Filter</label>
				<select id="mail-name" name="DoesNotMatter2">
				<option value="N">Choose</option>
				<option value="student_no">Student No</option>
				<option value="first_name">First Name</option>
				<option value="last_name">Last Name</option>
				
				<option value="gender">Gender</option>
				<option value="dob">Date of Birth</option>
				<option value="province">Province</option>
				</select>
				<a style="white-space:nowrap;font-size: 15px;" href="generateenrolled.php?generate">Enrolled students PDF</a>

				<!-- <a href="generate.php?generate"> generate pdf </a> -->
			    <!-- <button id="mail-submit" type="submit" name="submit">Send e-mail</button> -->
				<div class="form-message"></div>
				<!-- <button type = "submit" name = "update" class = "btn">Update</button> -->
				
	</div>
	
</form>
</div>
</div>
</div>

<div id="result" class="result"></div> <!-- table display -->




</body>

</html>
<?php // this is for keyup filter AJAX
	include('keyupfilter.php'); 
?>



<?php	
	include_once("./web-page-parts/footer.php");
	include('filterclass.php');

?>


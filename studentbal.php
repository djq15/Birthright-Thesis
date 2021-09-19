<?php
	session_start(); if ( $_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ) && $_SESSION['tag'] !="1" && $_SESSION['tag'] !="4") {
	session_start();session_destroy();die( header( 'location: LogIn.php?Empty= Action Denied. Log in again' ) );}
?>

<?php 
	include_once("./web-page-parts/header2.php");
	include_once("./web-page-parts/sidebar.php");
	include_once("./web-page-parts/topbar.php");
	//include('filtercheck.php');
	
?>

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
	/*
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
				$(".form-message").load("keyupbal.php", {
					filter: name, 
					email: email,
					gender: gender,
					message: message, 
					submit: submit
				});
			});
		});
	*/
	</script>

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


<form method = "post" action="" class="form1">
<!-- <table> this is troubling the filter -->  
	<!-- search bar -->
	<a href="dash2.php"> Back to dashboard</a><div class="input-group">
		<span class="input-group-addon">Search</span>
		<input type="text" name="search_text" id="search_text" 	class="form-control" autocomplete="off" />
		
		
			<label>Filter</label>
		
				<select id="mail-name" name="DoesNotMatter1" >
				<option value="N">Choose</option>
				<option value="student_id">Student ID</option>
				<option value="first_name">First Name</option>
				<option value="last_name">Last Name</option>
				</select>
			    <!-- <button id="mail-submit" type="submit" name="submit">Send e-mail</button> -->
				<div class="form-message"></div>
	</div>

	<!-- <div class = "input-group">
	<label>Filter</label>
		
				<select id="mail-name" name="DoesNotMatter1" >
				<option value="N">Choose</option>
				<option value="student_id">Student ID</option>
				<option value="first_name">First Name</option>
				<option value="last_name">Last Name</option>
				</select>
			   
				<div class="form-message"></div>
				
				
	</div> -->
	<!-- search bar -->	
	
	<!-- search bar -->
	<!-- <div class="input-group">
		<span class="input-group-addon">Amount From</span>
		<input type="text" name="search_textz" id="search_textz" class="form-control" autocomplete="off"/>
		<span class="input-group-addon">Amount To</span>
		<input type="text" name="search_textx" id="search_textx" class="form-control" autocomplete="off"/>
	</div> -->
	
	
	<!-- <div class="input-group">
		<span class="input-group-addon">Amount To</span>
		<input type="text" name="search_textx" id="search_textx" class="form-control" autocomplete="off"/>
	</div> -->
	
	<!-- search bar -->	

<!-- <form method = "post"  = "fetch-class2"> -->
<!-- <form method = "post" action = ""> -->


	
	<div class = "input-group">
	<label>Payment</label>
		
				<select id="mail-email" name="DoesNotMatter2" >
				<option value="N">Choose</option>
				<option value="tuition">Tuition</option>
				<option value="downpayment">Downpayment</option>
				<option value="month1">Month1</option>
				<option value="month2">Month2</option>
				<option value="month3">Month3</option>
				<option value="month4">Month4</option>
				<option value="month5">Month5</option>
				<option value="month6">Month6</option>
				<option value="month7">Month7</option>
				<option value="month8">Month8</option>
				<option value="month9">Month9</option>
				<option value="balance">Balance</option>
				<option value="monthlypayment">Monthly Payment</option>
				</select>
			    <!-- <button id="mail-submit" type="submit" name="submit">Send e-mail</button> -->
				<div class="form-message"></div>
				<!-- <button type = "submit" name = "update" class = "btn">Update</button> -->
		<span class="input-group-addon">Amount From</span>
		<input type="text" name="search_textz" id="search_textz" class="form-control" autocomplete="off"/>
		<span class="input-group-addon">Amount To</span>
		<input  type="text" name="search_textx" id="search_textx" class="form-control" autocomplete="off"/>
				
	</div>
	

	
	<button id="mail-submit" type="submit" name="submit">Search</button> 
	<button id="mail-refresh" name="refresh">Refresh</button> 
	
	<div style="float: right;">
	<select name="option">
				<option value="full_report">Full Report</option>
				<option value="month1">Paid for month1</option>
				<option value="month2">Paid for month2</option>
				<option value="month3">Paid for month3</option>
				<option value="month4">Paid for month4</option>
				<option value="month5">Paid for month5</option>
				<option value="month6">Paid for month6</option>
				<option value="month7">Paid for month7</option>
				<option value="month8">Paid for month8</option>
				<option value="month9">Paid for month9</option>
	
	</select>
	<button  name="generate" id="mail-refresh"> generate pdf </button>
	</div>
	
	<?php
	if (isset($_POST['generate']) and $_POST["option"] == "full_report") {
		header('location: generate.php?generate');
	}
	else if (isset($_POST['generate']) and $_POST["option"] == "month1") {
		header('location: generate2.php?generate');
	}
	else if (isset($_POST['generate']) and $_POST["option"] == "month2") {
		header('location: generate3.php?generate');
	}
	else if (isset($_POST['generate']) and $_POST["option"] == "month3") {
		header('location: generate4.php?generate');
	}
	else if (isset($_POST['generate']) and $_POST["option"] == "month4") {
		header('location: generate5.php?generate');
	}
	else if (isset($_POST['generate']) and $_POST["option"] == "month5") {
		header('location: generate6.php?generate');
	}
	else if (isset($_POST['generate']) and $_POST["option"] == "month6") {
		header('location: generate7.php?generate');
	}
	else if (isset($_POST['generate']) and $_POST["option"] == "month7") {
		header('location: generate8.php?generate');
	}
	else if (isset($_POST['generate']) and $_POST["option"] == "month8") {
		header('location: generate9.php?generate');
	}
	else if (isset($_POST['generate']) and $_POST["option"] == "month9") {
		header('location: generate10.php?generate');
	}
	?>
<!-- cut to fetch.php (part 1) -->	

<!-- cut to fetch.php (part 2) -->	
<!-- </table> this is troubling the filter -->

</form>
<style>
	.form1 {
		font-size: 16px;
		width: 620px;
		height: 180px;
	}
</style>

<div id="result" class="result"></div> <!-- table display -->

<?php
	include('keyupbal.php'); 
?>

</body>

</html>
<?php // this is for keyup filter AJAX
	//include('keyupbal.php'); 
?>


<?php	
	include_once("./web-page-parts/footer.php");
	include('filterclass.php');

?>


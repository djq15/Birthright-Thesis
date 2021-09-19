<?php
	session_start(); if ( $_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ) && $_SESSION['tag'] !="1" && $_SESSION['tag'] !="4") {
	session_start();session_destroy();die( header( 'location: LogIn.php?Empty= Action Denied. Log in again' ) );}
?>

<?php 
	//include("filter.php");
	include_once("./web-page-parts/header.php");
	include_once("./web-page-parts/sidebar.php");
	include_once("./web-page-parts/topbar.php");
	//include('filtercheck.php');
	
	$db = mysqli_connect('localhost', 'root', 'ieti19', 'birthright_db');
?>

<a href="studentbalexp.php">Back</a>

<?php 
	
	$studentid = $_GET['edit'];
	$edit_state = true;
	$rec = mysqli_query($db, "SELECT * FROM birthright_db.accounts WHERE student_id=$studentid");	 //hit
	$record = mysqli_fetch_array($rec);
	//calculation
	$net = ($record['total_tuition'] - $record['downpayment'] - $record['month1'] - $record['month2'] - $record['month3'] - $record['month4'] - $record['month5'] - $record['month6'] - $record['month7'] - $record['month8'] - $record['month9']); 
	
			if ($record['month1'] == 0 and $record['month2'] == 0 and $record['month3'] == 0 and $record['month4'] == 0 and $record['month5'] == 0 and $record['month6'] == 0 and $record['month7'] == 0 and $record['month8'] == 0 and $record['month9'] == 0){
			$bal = $net / 9;
			}
			else if ($record['month2'] == 0 and $record['month3'] == 0 and $record['month4'] == 0 and $record['month5'] == 0 and $record['month6'] == 0 and $record['month7'] == 0 and $record['month8'] == 0 and $record['month9'] == 0){
			$bal = $net / 8;
			}
			
			else if ($record['month3'] == 0 and $record['month4'] == 0 and $record['month5'] == 0 and $record['month6'] == 0 and $record['month7'] == 0 and $record['month8'] == 0 and $record['month9'] == 0){		
			$bal = $net / 7;
			}
			
			else if ($record['month4'] == 0 and $record['month5'] == 0 and $record['month6'] == 0 and $record['month7'] == 0 and $record['month8'] == 0 and $record['month9'] == 0){		
			$bal = $net / 6;
			}
			
			else if ($record['month5'] == 0 and $record['month6'] == 0 and $record['month7'] == 0 and $record['month8'] == 0 and $record['month9'] == 0){		
			$bal = $net / 5;
			}			
			
			else if ($record['month6'] == 0 and $record['month7'] == 0 and $record['month8'] == 0 and $record['month9'] == 0){		
			$bal = $net / 4;
			}			

			else if ($record['month7'] == 0 and $record['month8'] == 0 and $record['month9'] == 0){		
			$bal = $net / 3;
			}				
			
			else if ($record['month8'] == 0 and $record['month9'] == 0){		
			$bal = $net / 2;
			}
			
			else {
			$bal = $net;	
			}
	
	//calculation
	$firstname = $record['first_name'];
	$lastname = $record['last_name'];
	$tuition = $record['total_tuition'];
	$downpayment = $record['downpayment'];
	$late_payment1 = $record['late_payment1'];
	$late_payment2 = $record['late_payment2'];
	$late_payment3 = $record['late_payment3'];
	$late_payment4 = $record['late_payment4'];
	$late_payment5 = $record['late_payment5'];
	$fully_paid = $record['fully_paid'];
	$month5 = $record['month5'];
	$month6 = $record['month6'];
	$month7 = $record['month7'];
	$month8 = $record['month8'];
	$month9 = $record['month9'];	
	$balance = $record['balance'];	
	$total_payment = $record['total_payment'];
	$monthlypayment = $record['monthly_payment'];	
	//$balance = $net;
	//$monthlypayment = $bal;

?>
<?php
	if (isset($_POST['update'])) {

	$studentid = $_POST['studentid'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];	
	$tuition = $_POST['tuition'];	
	$downpayment = $_POST['downpayment'];
	$late_payment1 = $_POST['late_payment1'];
	$late_payment2 = $_POST['late_payment2'];
	$late_payment3 = $_POST['late_payment3'];
	$late_payment4 = $_POST['late_payment4'];
	$late_payment5 = $_POST['late_payment5'];
	$month6 = $_POST['month6'];
	$month7 = $_POST['month7'];
	$month8 = $_POST['month8'];
	$month9 = $_POST['month9'];
	
	//$balance = $net;
	//$monthlypayment = $bal;
	//$balance = $_POST['balance'];
	//$monthlypayment = $_POST['monthlypayment'];
	
	if ($_POST['tuition'] == ""){
		$tuition = 0;
	}
	if ($_POST['downpayment'] == ""){
		$downpayment = 0;
	}
	if ($_POST['month1'] == ""){
		$month1 = 0;
	}
	if ($_POST['month2'] == ""){
		$month2 = 0;
	}
	if ($_POST['month3'] == ""){
		$month3 = 0;
	}
	if ($_POST['month4'] == ""){
		$month4 = 0;
	}
	if ($_POST['month5'] == ""){
		$month5 = 0;
	}
	if ($_POST['month6'] == ""){
		$month6 = 0;
	}
	if ($_POST['month7'] == ""){
		$month7 = 0;
	}
	if ($_POST['month8'] == ""){
		$month8 = 0;
	}
	if ($_POST['month9'] == ""){
		$month9 = 0;
	}
	
	//$grade = $_POST['grade'];
	

	//mysqli_query($db, "UPDATE birthright_db.accounts SET total_tuition='$tuition', downpayment='$downpayment', month1='$month1', month2='$month2', month3='$month3', month4='$month4', month5='$month5', month6='$month6', month7='$month7', month8='$month8', month9='$month9' WHERE student_id = '$studentid'"); 
	mysqli_query($db, "UPDATE birthright_db.accounts SET total_tuition='$tuition', downpayment='$downpayment', month1='$month1', month2='$month2', month3='$month3', month4='$month4', month5='$month5', month6='$month6', month7='$month7', month8='$month8', month9='$month9', balance='$balance', monthly_payment='$monthlypayment' WHERE student_id = '$studentid'"); 

	//$_SESSION['msg'] = "Details updated";	
	header('location: studentbalprofile.php');	//hit
	//header('location: studentbalprofile.php?edit='.$record['student_id'].'');	testing1
	
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
				$(".form-message").load("keyupfilter.php", {
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



<!-- <table> this is troubling the filter -->  


<!-- <form method = "post"  = "fetch-class2"> -->
<!-- <form method = "post" action = ""> -->


<form method = "post" action = "studentbalprofileconfirmexp.php?edit=<?php echo $studentid; ?>"> 
<input type = "hidden" name = "studentid" value = "<?php echo $studentid; ?>">


	<div class = "input-group">
		<label>Student ID</label>
		<input type = "number" name = "studentid" value = "<?php echo $studentid; ?>" readonly disabled>
	</div>
	<div class = "input-group">
		<label>First name</label>
		<input type = "text" name = "firstname" value = "<?php echo $firstname; ?>" readonly disabled>
	</div>
	<div class = "input-group">
		<label>Last name</label>
		<input type = "text" name = "lastname" value = "<?php echo $lastname; ?>" readonly disabled>
	</div>
	<div class = "input-group">
		<label>Balance</label>
		<input type = "number" name = "balance" value = "<?php echo $balance; ?>" readonly>
	</div>	
	<div class = "input-group">
		<label>Total Payment</label>
		<input type = "number" name = "total_payment" value = "<?php echo $total_payment; ?>" readonly>
	</div>		
	<div class = "input-group">
		<label>Late Payment 1</label>
		<input type = "number" name = "late_payment1" value = "<?php echo $late_payment1; ?>" autocomplete="off">
	</div>
		<div class = "input-group">
		<label>Late Payment 2</label>
		<input type = "number" name = "late_payment2" value = "<?php echo $late_payment2; ?>" autocomplete="off">
	</div>
		<div class = "input-group">
		<label>Late Payment 3</label>
		<input type = "number" name = "late_payment3" value = "<?php echo $late_payment3; ?>" autocomplete="off">
	</div>
		<div class = "input-group">
		<label>Late Payment 4</label>
		<input type = "number" name = "late_payment4" value = "<?php echo $late_payment4; ?>" autocomplete="off">
	</div>
		<div class = "input-group">
		<label>Late Payment 5</label>
		<input type = "number" name = "late_payment5" value = "<?php echo $late_payment5; ?>" autocomplete="off">
	</div>
	<div class = "input-group">
		<label>Fully Paid</label>
		<input type = "text" name = "fully_paid" value = "<?php echo $fully_paid; ?>" readonly disabled>
	</div>	

	
	<div class = "input-group">

			<!--<button type = "submit" name = "update" class = "btn">Update</button>-->
			<button type = "submit" name = "update" class = "btn">Update</button>
			
			<link rel="stylesheet" type="text/css" href="./print.css" media="print">
			<!-- <button onclick="window.print();" class="btn btn-primary" id="print-btn">Print</button> -->
			<a href="printsoaexp.php?edit=<?php echo $record['student_id'];?>&print" class="btn btn-primary" id="print-btn">Print SOA</a>
			
	</div>	
</form>


</body>

</html>

<?php 
	
	//testing1
	if (isset($_GET['edit'])) {
	$studentid = $_GET['edit'];
	$edit_state = true;
	$rec = mysqli_query($db, "SELECT * FROM birthright_db.accounts WHERE student_id=$studentid");	 //hit
	$record = mysqli_fetch_array($rec);
	//calculation
	$net = ($record['total_tuition'] - $record['downpayment'] - $record['month1'] - $record['month2'] - $record['month3'] - $record['month4'] - $record['month5'] - $record['month6'] - $record['month7'] - $record['month8'] - $record['month9']); 
	
			if ($record['month1'] == 0 and $record['month2'] == 0 and $record['month3'] == 0 and $record['month4'] == 0 and $record['month5'] == 0 and $record['month6'] == 0 and $record['month7'] == 0 and $record['month8'] == 0 and $record['month9'] == 0){
			$bal = $net / 9;
			}
			else if ($record['month2'] == 0 and $record['month3'] == 0 and $record['month4'] == 0 and $record['month5'] == 0 and $record['month6'] == 0 and $record['month7'] == 0 and $record['month8'] == 0 and $record['month9'] == 0){
			$bal = $net / 8;
			}
			
			else if ($record['month3'] == 0 and $record['month4'] == 0 and $record['month5'] == 0 and $record['month6'] == 0 and $record['month7'] == 0 and $record['month8'] == 0 and $record['month9'] == 0){		
			$bal = $net / 7;
			}
			
			else if ($record['month4'] == 0 and $record['month5'] == 0 and $record['month6'] == 0 and $record['month7'] == 0 and $record['month8'] == 0 and $record['month9'] == 0){		
			$bal = $net / 6;
			}
			
			else if ($record['month5'] == 0 and $record['month6'] == 0 and $record['month7'] == 0 and $record['month8'] == 0 and $record['month9'] == 0){		
			$bal = $net / 5;
			}			
			
			else if ($record['month6'] == 0 and $record['month7'] == 0 and $record['month8'] == 0 and $record['month9'] == 0){		
			$bal = $net / 4;
			}			

			else if ($record['month7'] == 0 and $record['month8'] == 0 and $record['month9'] == 0){		
			$bal = $net / 3;
			}				
			
			else if ($record['month8'] == 0 and $record['month9'] == 0){		
			$bal = $net / 2;
			}
			
			else {
			$bal = $net;	
			}
	
	//calculation
	$firstname = $record['first_name'];
	$lastname = $record['last_name'];
	$tuition = $record['total_tuition'];
	$downpayment = $record['downpayment'];
	$month1 = $record['month1'];
	$month2 = $record['month2'];
	$month3 = $record['month3'];
	$month4 = $record['month4'];
	$month5 = $record['month5'];
	$month6 = $record['month6'];
	$month7 = $record['month7'];
	$month8 = $record['month8'];
	$month9 = $record['month9'];	
	$balance = $record['balance'];	
	$monthlypayment = $record['monthly_payment'];	
	$balance = $net;
	$monthlypayment = $bal;

	
	}	
?>
<?php
	
	if (isset($_POST['update'])) {

	$studentid = $_POST['studentid'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];	
	$tuition = $_POST['tuition'];	
	$downpayment = $_POST['downpayment'];
	$month1 = $_POST['month1'];
	$month2 = $_POST['month2'];
	$month3 = $_POST['month3'];
	$month4 = $_POST['month4'];
	$month5 = $_POST['month5'];
	$month6 = $_POST['month6'];
	$month7 = $_POST['month7'];
	$month8 = $_POST['month8'];
	$month9 = $_POST['month9'];
	
	//$balance = $net;
	//$monthlypayment = $bal;
	//$balance = $_POST['balance'];
	//$monthlypayment = $_POST['monthlypayment'];
	
	if ($_POST['tuition'] == ""){
		$tuition = 0;
	}
	if ($_POST['downpayment'] == ""){
		$downpayment = 0;
	}
	if ($_POST['month1'] == ""){
		$month1 = 0;
	}
	if ($_POST['month2'] == ""){
		$month2 = 0;
	}
	if ($_POST['month3'] == ""){
		$month3 = 0;
	}
	if ($_POST['month4'] == ""){
		$month4 = 0;
	}
	if ($_POST['month5'] == ""){
		$month5 = 0;
	}
	if ($_POST['month6'] == ""){
		$month6 = 0;
	}
	if ($_POST['month7'] == ""){
		$month7 = 0;
	}
	if ($_POST['month8'] == ""){
		$month8 = 0;
	}
	if ($_POST['month9'] == ""){
		$month9 = 0;
	}
	
	//$grade = $_POST['grade'];
	

	//mysqli_query($db, "UPDATE birthright_db.accounts SET total_tuition='$tuition', downpayment='$downpayment', month1='$month1', month2='$month2', month3='$month3', month4='$month4', month5='$month5', month6='$month6', month7='$month7', month8='$month8', month9='$month9' WHERE student_id = '$studentid'"); 
	mysqli_query($db, "UPDATE birthright_db.accounts SET total_tuition='$tuition', downpayment='$downpayment', month1='$month1', month2='$month2', month3='$month3', month4='$month4', month5='$month5', month6='$month6', month7='$month7', month8='$month8', month9='$month9', balance='$balance', monthly_payment='$monthlypayment' WHERE student_id = '$studentid'"); 

	//$_SESSION['msg'] = "Details updated";	
	header('location: studentbalprofile.php');	//hit
	//header('location: studentbalprofile.php?edit='.$record['student_id'].'');	testing1
	
	}
	//testing1
?>


<?php // this is for keyup filter AJAX
	include('keyupfilter.php'); 
?>


<?php	
	include_once("./web-page-parts/footer.php");
?>


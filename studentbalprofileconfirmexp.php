<?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', 'ieti19', 'birthright_db');
	
	$studentid = $_GET['edit'];
	$edit_state = true;
	$rec = mysqli_query($db, "SELECT * FROM birthright_db.accounts WHERE student_id=$studentid");	 //hit
	$record = mysqli_fetch_array($rec);
	
	$oldtotal = ($record['downpayment'] + $record['month1'] + $record['month2'] + $record['month3'] + $record['month4'] + $record['month5'] + $record['month6'] + $record['month7'] + $record['month8'] + $record['month9']); 
	$total = $oldtotal + $_POST['late_payment1'] + $_POST['late_payment2'] + $_POST['late_payment3'] + $_POST['late_payment4'] + $_POST['late_payment5'];
	
	$oldnet = ($record['total_tuition'] - $record['downpayment'] - $record['month1'] - $record['month2'] - $record['month3'] - $record['month4'] - $record['month5'] - $record['month6'] - $record['month7'] - $record['month8'] - $record['month9']); 
	$net = $oldnet - $_POST['late_payment1'] - $_POST['late_payment2'] - $_POST['late_payment3'] - $_POST['late_payment4'] - $_POST['late_payment5'];
			
	$balance = $net;



	if (isset($_POST['update'])) {
	
	//session_start();
	echo '<br>';
	echo '<br>';
	
	
	$studentid = $_POST['studentid'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];	
	$tuition = $_POST['tuition'];	
	$downpayment = $_POST['downpayment'];
	//$balance = $_POST['balance'];	
	$late_payment1 = $_POST['late_payment1'];
	$late_payment2 = $_POST['late_payment2'];
	$late_payment3 = $_POST['late_payment3'];
	$late_payment4 = $_POST['late_payment4'];
	$late_payment5 = $_POST['late_payment5'];
	$month6 = $_POST['month6'];
	$month7 = $_POST['month7'];
	$month8 = $_POST['month8'];
	$month9 = $_POST['month9'];
	$late_payment = $_POST['late_payment'];


	
	if ($_POST['late_payment1'] == ""){
		$late_payment1 = 0;
	}
	if ($_POST['late_payment2'] == ""){
		$late_payment2 = 0;
	}
	if ($_POST['late_payment3'] == ""){
		$late_payment3 = 0;
	}
	if ($_POST['late_payment4'] == ""){
		$late_payment4 = 0;
	}
	if ($_POST['late_payment5'] == ""){
		$late_payment5 = 0;
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
	//mysqli_query($db, "UPDATE birthright_db.accounts SET total_tuition='$tuition', downpayment='$downpayment', month1='$month1', month2='$month2', month3='$month3', month4='$month4', month5='$month5', month6='$month6', month7='$month7', month8='$month8', month9='$month9', balance='$balance', monthly_payment='$monthlypayment', late_payer='Y' WHERE student_id = '$studentid'"); 
	mysqli_query($db, "UPDATE birthright_db.accounts SET late_payment1='$late_payment1', late_payment2='$late_payment2', late_payment3='$late_payment3', late_payment4='$late_payment4', late_payment5='$late_payment5', balance='$balance', total_payment='$total' WHERE student_id = '$studentid'"); 
	//mysqli_query($db, "UPDATE birthright_db.accounts SET total_tuition='$tuition', downpayment='$downpayment', month1='$month1', month2='$month2', month3='$month3', month4='$month4', month5='$month5', month6='$month6', month7='$month7', month8='$month8', month9='$month9' WHERE student_id='$studentid'");
	//mysqli_query($db, "UPDATE birthright_db.accounts SET total_tuition='69' WHERE student_id='212935'"); 
	//$_SESSION['msg'] = "Details updated";	
	
	if ($balance <='0'){
	mysqli_query($db, "UPDATE birthright_db.accounts SET fully_paid='Y'  WHERE student_id = '$studentid'"); 
	}
	else{
	mysqli_query($db, "UPDATE birthright_db.accounts SET fully_paid='N'  WHERE student_id = '$studentid'"); 	
	}
	
	header('location: studentbalprofileexp.php?edit='.$record['student_id'].'');	
		
	}
	//testing1

	
		
	

?>


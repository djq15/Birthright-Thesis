<?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', 'ieti19', 'birthright_db');
	
	$studentid = $_GET['edit'];
	$edit_state = true;
	$rec = mysqli_query($db, "SELECT * FROM birthright_db.accounts WHERE student_id=$studentid");	 //hit
	$record = mysqli_fetch_array($rec);

	if ($record['late_payer'] == 'N') {
	$total = ($_POST['downpayment'] + $_POST['month1'] + $_POST['month2'] + $_POST['month3'] + $_POST['month4'] + $_POST['month5'] + $_POST['month6'] + $_POST['month7'] + $_POST['month8'] + $_POST['month9']);	
	$net = ($_POST['tuition'] - $_POST['downpayment'] - $_POST['month1'] - $_POST['month2'] - $_POST['month3'] - $_POST['month4'] - $_POST['month5'] - $_POST['month6'] - $_POST['month7'] - $_POST['month8'] - $_POST['month9']); 
	

			if ($_POST['month1'] == 0 and $_POST['month2'] == 0 and $_POST['month3'] == 0 and $_POST['month4'] == 0 and $_POST['month5'] == 0 and $_POST['month6'] == 0 and $_POST['month7'] == 0 and $_POST['month8'] == 0 and $_POST['month9'] == 0){
			$bal = $net / 9;
			}
			else if ($_POST['month2'] == 0 and $_POST['month3'] == 0 and $_POST['month4'] == 0 and $_POST['month5'] == 0 and $_POST['month6'] == 0 and $_POST['month7'] == 0 and $_POST['month8'] == 0 and $_POST['month9'] == 0){
			$bal = $net / 8;
			}
			
			else if ($_POST['month3'] == 0 and $_POST['month4'] == 0 and $_POST['month5'] == 0 and $_POST['month6'] == 0 and $_POST['month7'] == 0 and $_POST['month8'] == 0 and $_POST['month9'] == 0){		
			$bal = $net / 7;
			}
			
			else if ($_POST['month4'] == 0 and $_POST['month5'] == 0 and $_POST['month6'] == 0 and $_POST['month7'] == 0 and $_POST['month8'] == 0 and $_POST['month9'] == 0){		
			$bal = $net / 6;
			}
			
			else if ($_POST['month5'] == 0 and $_POST['month6'] == 0 and $_POST['month7'] == 0 and $_POST['month8'] == 0 and $_POST['month9'] == 0){		
			$bal = $net / 5;
			}			
			
			else if ($_POST['month6'] == 0 and $_POST['month7'] == 0 and $_POST['month8'] == 0 and $_POST['month9'] == 0){		
			$bal = $net / 4;
			}			

			else if ($_POST['month7'] == 0 and $_POST['month8'] == 0 and $_POST['month9'] == 0){		
			$bal = $net / 3;
			}				
			
			else if ($_POST['month8'] == 0 and $_POST['month9'] == 0){		
			$bal = $net / 2;
			}
			
			else {
			$bal = $net;	
			}	
		
	$balance = $net;
	$monthlypayment = $bal;
	}
	else {
		$balance = $record['balance'];
		$monthlypayment = $record['monthly_payment'];
		header('location: studentbalprofile.php?edit='.$record['student_id'].'');	
	}
	if (isset($_POST['update'])) {
	
	//session_start();

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
	$late_payment = $_POST['late_payment'];


	
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

	if ($_POST['late_payer'] == "Y") {
	//mysqli_query($db, "UPDATE birthright_db.accounts SET total_tuition='$tuition', downpayment='$downpayment', month1='$month1', month2='$month2', month3='$month3', month4='$month4', month5='$month5', month6='$month6', month7='$month7', month8='$month8', month9='$month9' WHERE student_id = '$studentid'"); 
	mysqli_query($db, "UPDATE birthright_db.accounts SET total_tuition='$tuition', downpayment='$downpayment', month1='$month1', month2='$month2', month3='$month3', month4='$month4', month5='$month5', month6='$month6', month7='$month7', month8='$month8', month9='$month9', balance='$balance', total_payment='$total', monthly_payment='0', late_payer='Y' WHERE student_id = '$studentid'"); 
	//mysqli_query($db, "UPDATE birthright_db.accounts SET total_tuition='$tuition', downpayment='$downpayment', month1='$month1', month2='$month2', month3='$month3', month4='$month4', month5='$month5', month6='$month6', month7='$month7', month8='$month8', month9='$month9' WHERE student_id='$studentid'");
	//mysqli_query($db, "UPDATE birthright_db.accounts SET total_tuition='69' WHERE student_id='212935'"); 
	//$_SESSION['msg'] = "Details updated";	
	}
	else if ($_POST['late_payer'] == "N"){
	mysqli_query($db, "UPDATE birthright_db.accounts SET total_tuition='$tuition', downpayment='$downpayment', month1='$month1', month2='$month2', month3='$month3', month4='$month4', month5='$month5', month6='$month6', month7='$month7', month8='$month8', month9='$month9', balance='$balance', total_payment='$total', monthly_payment='$monthlypayment', late_payer='N' WHERE student_id = '$studentid'"); 
	mysqli_query($db, "UPDATE birthright_db.accounts SET late_payer='N' WHERE student_id = '$studentid'"); 

	}
	
	else if ($_POST['late_payer'] == "default"){
	
	mysqli_query($db, "UPDATE birthright_db.accounts SET total_tuition='$tuition', downpayment='$downpayment', month1='$month1', month2='$month2', month3='$month3', month4='$month4', month5='$month5', month6='$month6', month7='$month7', month8='$month8', month9='$month9', balance='$balance', total_payment='$total', monthly_payment='$monthlypayment' WHERE student_id = '$studentid'"); 

	}
	
	if ($balance <='0'){
	mysqli_query($db, "UPDATE birthright_db.accounts SET fully_paid='Y'  WHERE student_id = '$studentid'"); 
	}
	else{
	mysqli_query($db, "UPDATE birthright_db.accounts SET fully_paid='N'  WHERE student_id = '$studentid'"); 	
	}
	
	//header('location: studentbalprofile.php');	//hit
	header('location: studentbalprofile.php?edit='.$record['student_id'].'');	
	//header('location: studentbalprofile.php?edit=212935');	
	}
	//testing1


?>


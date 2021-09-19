<?php

		$db = mysqli_connect('localhost', 'root', 'ieti19', 'birthright_db');
		
		
		class Sub1 {
			
		public function Subject1() {
			
		
		session_start();
		$studentid = 0;
		$firstname = "";
		$lastname = "";
		$grade = 0;
		$edit_state = false;
	

		$currentUser = $_SESSION['User'];
		$db = mysqli_connect('localhost', 'root', 'ieti19', 'birthright_db');

		
		//$results = mysqli_query($db, "SELECT * FROM ieti_db.subject1 WHERE first_name='Dexer'");
		//$results = mysqli_query($db, "SELECT student_id, first_name, last_name, prelim, midterm, final FROM birthright_db.subject1, birthright_db.login where username = first_name and username='$currentUser'");
		$results = mysqli_query($db, "SELECT student_id, first_name, last_name, prelim, midterm, final, total_tuition, downpayment FROM birthright_db.accounts, birthright_db.login where username = first_name and tag = '2'");
		return $results;

		}
		}
		

		
		
		
		
		//testing
		class gradeCalculation {
		
		public function Calculate() {
		
		$currentUser = $_SESSION['User'];
		$db = mysqli_connect('localhost', 'root', 'ieti19', 'birthright_db');
		//$results = mysqli_query($db, "SELECT student_id, first_name, last_name, prelim, midterm, final FROM birthright_db.subject1, birthright_db.login where username = first_name and username='$currentUser'");
		$results = mysqli_query($db, "SELECT student_id, first_name, last_name, prelim, midterm, final, total_tuition, downpayment FROM birthright_db.accounts, birthright_db.login where username = first_name and tag = '2'");
		if ($row=mysqli_fetch_array($results)) {
		//while($row = $Link1->fetch_assoc()){
		
		//echo "<td>"; $net = ($row['prelim'] +  $row['midterm']) / 3;  
		
		

			
		//echo "<td>"; $net = ($row['total_tuition'] - $row['downpayment']) / 3; 		
		//echo "<td>"; $net = ($row['final']); 
		//echo "<td>"; $net = ($row['final']); 
		echo $net;	
		echo "</td>";		
	

			
			


		}
		
		}
		}	
		
				
	if (isset($_POST['update'])) {

	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];	
	$studentid = $_POST['studentid'];
	$tuition = $_POST['tuition'];
	$downpayment = $_POST['downpayment'];
	$prelim = $_POST['prelim'];
	$midterm = $_POST['midterm'];	
	$final = $_POST['final'];
	$grade = $_POST['grade'];
	
	

	mysqli_query($db, "UPDATE accounts SET prelim='$prelim', midterm='$midterm', final='$final', total_tuition=$tuition, downpayment=$downpayment WHERE student_id = $studentid");
	$_SESSION['msg'] = "Details updated";	
	header('location: studentacc.php');	
	}
		//testing
		//testing
?>





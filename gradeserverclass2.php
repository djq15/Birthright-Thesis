<?php

		
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
		//$results = mysqli_query($db, "SELECT student_id, first_name, last_name, total_tuition, downpayment, month1, month2, month3, month4, month5, month6, month7, month8, month9, balance, monthly_payment FROM birthright_db.accounts, birthright_db.login where username = first_name and username='$currentUser'");
		$results = mysqli_query($db, "SELECT username, student_id, first_name, last_name, total_tuition, downpayment, month1, month2, month3, month4, month5, month6, month7, month8, month9, balance, monthly_payment FROM birthright_db.accounts, birthright_db.login where user_id = student_id and username='$currentUser'");
		
		return $results;

		}
		}
		

		
		
		
		
		//testing
		class gradeCalculation {
		
		public function Calculate() {
		
		$currentUser = $_SESSION['User'];
		$db = mysqli_connect('localhost', 'root', 'ieti19', 'birthright_db');
		//$results = mysqli_query($db, "SELECT student_id, first_name, last_name, prelim, midterm, final FROM birthright_db.subject1, birthright_db.login where username = first_name and username='$currentUser'");
		//$results = mysqli_query($db, "SELECT student_id, first_name, last_name, prelim, midterm, final, total_tuition, downpayment FROM birthright_db.accounts, birthright_db.login where username = first_name and username='$currentUser'");
		if ($row=mysqli_fetch_array($results)) {
		
		
		//echo "<td>"; $net = ($row['prelim'] +  $row['midterm']) / 3;  
		
		
		echo "<td>";	
		echo 110;	
		echo "</td>";
			
		echo "<td>"; $net = ($row['total_tuition'] -  $row['downpayment']) / 3; 	
		echo $net;	
		echo "</td>";		
	

			
			


			}
		
		}
		}	

		
?>





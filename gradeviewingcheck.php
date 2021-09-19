

<?php
session_start();

$currentUser = $_SESSION['User'];
$db = mysqli_connect('localhost', 'root', 'ieti19', 'ieti_db');


	//echo '<a class="collapse-item" href="./gradesubmission.php">Grade Submissions</a>';
		//$results = mysqli_query($db, "SELECT student_id, first_name, last_name, prelim, midterm, final FROM ieti_db.grades, ieti_db.login where username = first_name and username='$currentUser'");
		//$results = mysqli_query($db, "SELECT username, password, tag, first_name FROM ieti_db.login, ieti_db.eng101 where username = first_name and username='$currentUser'");
		$results = mysqli_query($db, "SELECT * FROM ieti_db.login");
		
		if ($row=mysqli_fetch_array($results)) {
			if ($row['tag'] == '2' and $_SESSION['User'] == 'Dexer'){	
			header('location: gradeviewingdex.php');
			}
			
			else if ($row['tag'] == '2' and $_SESSION['User'] == 'Manny'){	
			header('location: gradeviewingmanny.php');
			}

			else if ($row['tag'] == '2' and $_SESSION['User'] == 'Danil'){	
			header('location: gradeviewingdanil.php');
			}
			
		}

?>


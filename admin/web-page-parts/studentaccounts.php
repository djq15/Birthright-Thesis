<?php



$currentUser = $_SESSION['User'];
$db = mysqli_connect('localhost', 'root', 'ieti19', 'ieti_db');


	//echo '<a class="collapse-item" href="./gradesubmission.php">Grade Submissions</a>';
		$results = mysqli_query($db, "SELECT * FROM login where username='$currentUser'");
		
		
		
		if ($row=mysqli_fetch_array($results)) {
			if ($row['tag'] == '1'){


			// (restore if needed) echo '<a class="collapse-item" href="./gradesubmission.php">Grade Submissions</a>';
			echo '<a class="collapse-item" href="./studentacc.php">Student Balances</a>';
			}
			
			
			
			//else if ($row['tag'] == '2') {
			//else if ($row['tag'] == '2' and $row['evaluation_submit'] == 'Y') {
			//echo "tag 2 bitches";
			//}

		}

?>
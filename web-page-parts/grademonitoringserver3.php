<?php



$currentUser = $_SESSION['User'];
$db = mysqli_connect('localhost', 'root', 'ieti19', 'birthright_db');


	//echo '<a class="collapse-item" href="./gradesubmission.php">Grade Submissions</a>';
		$results = mysqli_query($db, "SELECT * FROM login where username='$currentUser'");
		
		
		
		if ($row=mysqli_fetch_array($results)) {
			if ($row['tag'] == '1' or $row['tag'] == '3') {


			// (restore if needed) echo '<a class="collapse-item" href="./gradesubmission.php">Grade Submissions</a>';
			echo '<a class="collapse-item" href="./subject11.php">Students Information</a>';
			}
			
			
			
			//else if ($row['tag'] == '2') {
			//else if ($row['tag'] == '2' and $row['evaluation_submit'] == 'Y') {
			//echo "tag 2 bitches";
			//}

		}

?>
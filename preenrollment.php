<?php


$currentUser = $_SESSION['User'];
$db = mysqli_connect('localhost', 'root', 'ieti19', 'birthright_db');


	//echo '<a class="collapse-item" href="./gradesubmission.php">Grade Submissions</a>';
		$results = mysqli_query($db, "SELECT * FROM login where username='$currentUser'");

		if ($row=mysqli_fetch_array($results)) {
			if ($row['tag'] == '1' or $row['tag'] == '4'){
			
			echo '<a class="collapse-item" href="preenrollment2.php">Pre-enrollment Files</a>';

			}
		}

?>
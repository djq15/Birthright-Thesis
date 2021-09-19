<?php



$currentUser = $_SESSION['User'];
$db = mysqli_connect('localhost', 'root', 'ieti19', 'birthright_db');


	//echo '<a class="collapse-item" href="./gradesubmission.php">Grade Submissions</a>';
		$results = mysqli_query($db, "SELECT * FROM login where username='$currentUser'");

		if ($row=mysqli_fetch_array($results)) {
			if ($row['tag'] == '2'){


			//echo '<a class="collapse-item" href="./gradeviewing.php">Grade Viewing</a>';
			// (restore if needed) echo '<a class="collapse-item" href="./gradeviewingstudent.php">Grade Viewing 2</a>';
			echo '<a class="collapse-item" href="./gradeviewingstudent2.php">Accounts</a>';

			}



			//else if ($row['tag'] == '2') {
			//else if ($row['tag'] == '2' and $row['evaluation_submit'] == 'Y') {
			//echo "tag 2 bitches";
			//}

		}

?>
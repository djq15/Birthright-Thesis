<?php


$currentUser = $_SESSION['User'];
$db = mysqli_connect('localhost', 'root', 'ieti19', 'birthright_db');


	//echo '<a class="collapse-item" href="./gradesubmission.php">Grade Submissions</a>';
		$results = mysqli_query($db, "SELECT * FROM login where username='$currentUser'");

		if ($row=mysqli_fetch_array($results)) {
			if ($row['tag'] == '1'){


			echo '<a class="collapse-item" href="clearanceactivation.php">Student Files</a>';

			}
			else if ($row['tag'] == '3'){


			echo '<a class="collapse-item" href="clearanceactivation3.php">Student Files</a>';

			}
			
			else if ($row['tag'] == '4'){


			echo '<a class="collapse-item" href="clearanceactivation4.php">Student Files</a>';

			}

			//else if ($row['tag'] == '2') {
			//else if ($row['tag'] == '2' and $row['evaluation_submit'] == 'Y') {
			//echo "tag 2 bitches";
			//}

		}

?>
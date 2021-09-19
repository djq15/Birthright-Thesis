<?php


$currentUser = $_SESSION['User'];
$db = mysqli_connect('localhost', 'root', 'ieti19', 'birthright_db');


	//echo '<a class="collapse-item" href="./gradesubmission.php">Grade Submissions</a>';
		$results = mysqli_query($db, "SELECT * FROM login where username='$currentUser'");

		if ($row=mysqli_fetch_array($results)) {
			if ($row['tag'] == '1'){

			echo '<a class="dropdown-item" href="admin/dashedit.php">';
			echo '<i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>';
			echo " Edit Dashboard";

			}
		}




?>
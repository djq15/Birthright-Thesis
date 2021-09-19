<?php



//$currentUser = $_SESSION['User'];
//$db = mysqli_connect('localhost', 'root', 'ieti19', 'birthright_db');
// restore the above 2 if necessary

	//echo '<a class="collapse-item" href="./gradesubmission.php">Grade Submissions</a>';
		//$results = mysqli_query($db, "SELECT * FROM login where username='$currentUser'");
		//$results = mysqli_query($db, "SELECT * FROM login, masterlist where username='$currentUser' and First_name='$currentUser'");	
		$results = mysqli_query($db, "SELECT * FROM login, masterlist where username='$currentUser' and Student_No=user_id");		
		//$results = mysqli_query($db, "SELECT *, `Student_No` FROM birthright_db.login, birthright_db.accounts where username='$currentUser'");

		
		if ($row=mysqli_fetch_array($results)) {
			if ($row['tag'] == '2'){
			

			//echo '<a class="collapse-item" href="./gradeviewing.php">Grade Viewing</a>';
			//echo '<a class="collapse-item" href="./gradeviewingcheck.php">Basic info</a>';
			//echo '<a class="collapse-item" href="./gradeviewingdex.php">Basic info</a>';
			?>
			<!-- <a class="collapse-item" href="./gradeviewingdex.php?edit=<?php echo $row['Student_No']; ?>">Basic Info</a> -->
			<a class="collapse-item" href="./gradeviewingdex.php">Basic Info</a>
			<?php
			}



			//else if ($row['tag'] == '2') {
			//else if ($row['tag'] == '2' and $row['evaluation_submit'] == 'Y') {
			//echo "tag 2 bitches";
			//}

		}

?>
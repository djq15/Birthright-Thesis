<?php 
	include_once("./web-page-parts/header.php");
	include_once("./web-page-parts/sidebar.php");
	include_once("./web-page-parts/topbar.php");
?>

<p> Subject list </p>

<?php
/*


$currentUser = $_SESSION['User'];
$db = mysqli_connect('localhost', 'root', 'ieti19', 'ieti_db');


	//echo '<a class="collapse-item" href="./gradesubmission.php">Grade Submissions</a>';
		$results = mysqli_query($db, "SELECT * FROM login where username='$currentUser'");

		if ($row=mysqli_fetch_array($results)) {
			if ($row['tag'] == '2'){


			echo '<a class="collapse-item" href="./gradeviewing.php">Grade Viewing</a>';

			}

			else if ($row['tag'] == '1'){


			echo '<a class="collapse-item" href="./gradeviewing2.php">Grade Viewing</a>';

			}

			//else if ($row['tag'] == '2') {
			//else if ($row['tag'] == '2' and $row['evaluation_submit'] == 'Y') {
			//echo "tag 2 bitches";
			//}

		}
*/
?>



<?php
//eng101


$currentUser = $_SESSION['User'];
$db = mysqli_connect('localhost', 'root', 'ieti19', 'ieti_db');


	//echo '<a class="collapse-item" href="./gradesubmission.php">Grade Submissions</a>';
		//$results = mysqli_query($db, "SELECT student_id, first_name, last_name, prelim, midterm, final FROM ieti_db.grades, ieti_db.login where username = first_name and username='$currentUser'");
		$results = mysqli_query($db, "SELECT username, password, tag, first_name FROM ieti_db.login, ieti_db.subject1 where username = first_name and username='$currentUser'");
		
		if ($row=mysqli_fetch_array($results)) {
			if ($row['tag'] == '1' and $row['first_name'] == $_SESSION['User']){

			
			//echo '<a class="collapse-item" href="./subject11.php">ENG 101</a>';

			$results = mysqli_query($db, "SELECT * FROM ieti_db.subjectname WHERE subject='subject1'");
			if ($row=mysqli_fetch_array($results)) {
			//echo $row['description'];
			//echo '<a class="collapse-item" href="./subject11.php">ENG 101</a>';
			//echo "<a href=\"#\" >".$row['description']."</a>";
			echo "<a href=\"./subject11.php\" >".$row['description']."</a>";
			

			
			}

			echo '<br>';
			
			}

			//else if ($row['tag'] == '1'){
			//else if ($row['tag'] == '1' and $row['first_name'] == 'ProfessorZ'){

			//else if ($row['tag'] == '2') {
			//else if ($row['tag'] == '2' and $row['evaluation_submit'] == 'Y') {
			//echo "tag 2 bitches";
			//}

		}

?>

<?php
//math101


$currentUser = $_SESSION['User'];
$db = mysqli_connect('localhost', 'root', 'ieti19', 'ieti_db');


	//echo '<a class="collapse-item" href="./gradesubmission.php">Grade Submissions</a>';
		//$results = mysqli_query($db, "SELECT student_id, first_name, last_name, prelim, midterm, final FROM ieti_db.grades, ieti_db.login where username = first_name and username='$currentUser'");
		$results = mysqli_query($db, "SELECT username, password, tag, first_name FROM ieti_db.login, ieti_db.math101 where username = first_name and username='$currentUser'");
		
		if ($row=mysqli_fetch_array($results)) {
			if ($row['tag'] == '1' and $row['first_name'] == $_SESSION['User']){
				
			echo '<a class="collapse-item" href="./gradesubmissionmath101.php">MATH101</a>';
			echo '<br>';
			
			}

			//else if ($row['tag'] == '1'){
			//else if ($row['tag'] == '1' and $row['first_name'] == 'ProfessorZ'){


		}

?>

<?php
//it101


$currentUser = $_SESSION['User'];
$db = mysqli_connect('localhost', 'root', 'ieti19', 'ieti_db');


	//echo '<a class="collapse-item" href="./gradesubmission.php">Grade Submissions</a>';
		//$results = mysqli_query($db, "SELECT student_id, first_name, last_name, prelim, midterm, final FROM ieti_db.grades, ieti_db.login where username = first_name and username='$currentUser'");
		$results = mysqli_query($db, "SELECT username, password, tag, first_name FROM ieti_db.login, ieti_db.it101 where username = first_name and username='$currentUser'");
		
		if ($row=mysqli_fetch_array($results)) {
			if ($row['tag'] == '1' and $row['first_name'] == $_SESSION['User']){
				
			echo '<a class="collapse-item" href="./gradesubmissionit101.php">IT101</a>';
			echo '<br>';
			
			}

			//else if ($row['tag'] == '1'){
			//else if ($row['tag'] == '1' and $row['first_name'] == 'ProfessorZ'){


		}

?>

<?php
//it201


$currentUser = $_SESSION['User'];
$db = mysqli_connect('localhost', 'root', 'ieti19', 'ieti_db');


	//echo '<a class="collapse-item" href="./gradesubmission.php">Grade Submissions</a>';
		//$results = mysqli_query($db, "SELECT student_id, first_name, last_name, prelim, midterm, final FROM ieti_db.grades, ieti_db.login where username = first_name and username='$currentUser'");
		$results = mysqli_query($db, "SELECT username, password, tag, first_name FROM ieti_db.login, ieti_db.it201 where username = first_name and username='$currentUser'");
		
		if ($row=mysqli_fetch_array($results)) {
			if ($row['tag'] == '1' and $row['first_name'] == $_SESSION['User']){
				
			echo '<a class="collapse-item" href="./gradesubmissionit201.php">IT201</a>';
			echo '<br>';
			
			}

			//else if ($row['tag'] == '1'){
			//else if ($row['tag'] == '1' and $row['first_name'] == 'ProfessorZ'){


		}

?>













<?php
	include_once("./web-page-parts/footer.php");
?>
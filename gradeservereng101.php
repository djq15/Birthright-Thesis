
<?php


session_start();
$studentid = 0;
$firstname = "";
$lastname = "";
$grade = 0;
$edit_state = false;

$currentUser = $_SESSION['User'];
$db = mysqli_connect('localhost', 'root', 'ieti19', 'birthright_db');

if (isset($_POST['save'])) {
	$studentid = $_POST['studentid'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$grade = $_POST['grade'];	


	$query = "INSERT INTO grades (student_id, first_name, last_name, grade) VALUES ('$studentid', '$firstname', '$lastname', '$grade')";
	mysqli_query($db, $query);

	$_SESSION['msg'] = "Details saved";
	header('location: gradesubmission.php');
}

	if (isset($_POST['update'])) {
	
	$studentno = $_POST['studentno'];
	$status = $_POST['status'];
	$lastname = addslashes($_POST['lastname']);	
	$firstname = addslashes($_POST['firstname']);
	$middleinitial = addslashes($_POST['middleinitial']);
	$nickname = addslashes($_POST['nickname']);	
	$province = addslashes($_POST['province']);
	
	$gender = $_POST['gender'];
	$contact_no = $_POST['contact_no'];
	$dob = $_POST['dob'];
	$street = addslashes($_POST['street']);
	$fathers_name = addslashes($_POST['fathers_name']);
	$mothers_name = addslashes($_POST['mothers_name']);
	
	//mysqli_query($db, "UPDATE birthright_db.masterlist SET Status='$status', Last_name='$lastname', First_name='$firstname', Middle_initial='$middleinitial', Nickname='$nickname', Province='$province' WHERE Student_No = $studentno"); //hit
	mysqli_query($db, "UPDATE birthright_db.masterlist SET Last_name='$lastname', First_name='$firstname', Middle_initial='$middleinitial', Nickname='$nickname', Province='$province', Gender='$gender', Contact_No='$contact_no', Date_of_birth='$dob', Street='$street', Fathers_name='$fathers_name', Mothers_name='$mothers_name' WHERE Student_No = $studentno"); //hit	
	$_SESSION['msg'] = "Details updated";
	
	//header('location: gradeviewingdex.php?edit='.$studentno.'');	
	echo '<form action="gradeviewingdex.php" method="POST" id="myForm">';
	//$test = "testing feedback";
	//echo '<input type = "hidden" name = "test1" value="'.$test.'">';
	echo '</form>';
	?> 
	<script>
	window.onload=function() { 
	document.getElementById("myForm").submit(); 
	}
	</script>
	<?php
	}	
	
	
	if (isset($_GET['del'])) {
	$studentid = $_GET['del'];
	
	mysqli_query($db, "DELETE FROM grades WHERE student_id = $studentid");
	$_SESSION['msg'] = "Details deleted";
	header('location: gradesubmission.php');	
	}	
	
	if (isset($_POST['evaluation_submit'])) {

	$evaluation_grade = $_POST['evaluation_grade'];
	
	$username = $currentUser;
	mysqli_query($db, "UPDATE birthright_db.login SET evaluation_submit='Y' WHERE username='$currentUser'");
	mysqli_query($db, "UPDATE birthright_db.login SET evaluation='$evaluation_grade' WHERE username='$currentUser'");



	header('location: evaluationactivation.php');
	}



	$results = mysqli_query($db, "SELECT username, password, tag, evaluation_submit, clearance_approve, evaluation, first_name FROM birthright_db.login, birthright_db.eng101 where username = first_name and username='$currentUser'");
	//$results = mysqli_query($db, "SELECT * FROM login where username='$currentUser'");
	
		if ($row=mysqli_fetch_array($results)) {

			if ($row['tag'] == '2' and $row['evaluation_submit'] == 'Y' and $row['clearance_approve'] == 'Y' and $row['first_name'] == $_SESSION['User']){
			//if ($row['tag'] == '2' and $row['evaluation_submit'] == 'Y' and $row['clearance_approve'] == 'Y' ) {
			//$results = mysqli_query($db, "SELECT student_id, first_name, last_name, prelim, midterm, final FROM ieti_db.grades, ieti_db.login where username = first_name and username='$currentUser'");
			//$results = mysqli_query($db, "SELECT student_id, first_name, last_name, prelim, midterm, final FROM ieti_db.eng101, ieti_db.login where username = first_name and username='$currentUser'");
			$results = mysqli_query($db, "SELECT Student_No, first_name, Status, Last_name, First_name, Middle_initial, Nickname, Province FROM birthright_db.masterlist, birthright_db.login where username = first_name and username='$currentUser'");
			

			}
			else {
				//$results = mysqli_query($db, "SELECT * FROM login where username='$currentUser'");
				header('location: notice1.php');
			}
			
		}

				


?>
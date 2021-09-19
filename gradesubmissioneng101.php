<?php 
	include_once("./web-page-parts/header.php");
	include_once("./web-page-parts/sidebar.php");
	include_once("./web-page-parts/topbar.php");
?>

<?php 


	//include('gradeserveredit.php'); //hit 

session_start();
$studentid = 0;
$firstname = "";
$lastname = "";
$grade = 0;
$edit_state = false;

$db = mysqli_connect('localhost', 'root', 'ieti19', 'ieti_db');

if (isset($_POST['save'])) {
	$studentid = $_POST['studentid'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$grade = $_POST['grade'];	

	$query = "INSERT INTO ieti_db.gradesubmissioneng101 (student_id, first_name, last_name, grade) VALUES ('$studentid', '$firstname', '$lastname', '$grade')"; //hit
	mysqli_query($db, $query);
	//mysqli_query($db, "INSERT INTO grades (student_id, first_name, last_name, grade) VALUES ('$studentid', '$firstname', '$lastname', '$grade')");
	$_SESSION['msg'] = "Details saved";
	header('location: gradesubmissioneng101.php'); //hit
}

	if (isset($_POST['update'])) {

	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];	
	$studentid = $_POST['studentid'];
	$prelim = $_POST['prelim'];
	$midterm = $_POST['midterm'];	
	$final = $_POST['final'];
	$grade = $_POST['grade'];
	
	

	mysqli_query($db, "UPDATE ieti_db.gradesubmissioneng101 SET prelim='$prelim', midterm='$midterm', final='$final' WHERE student_id = $studentid"); //hit
	$_SESSION['msg'] = "Details updated";	
	header('location: gradesubmissioneng101.php');	//hit
	}	


	if (isset($_GET['del'])) {
	$studentid = $_GET['del'];
	
	mysqli_query($db, "DELETE FROM ieti_db.gradesubmissioneng101 WHERE student_id = $studentid"); //hit
	$_SESSION['msg'] = "Details deleted";
	header('location: gradesubmissioneng101.php');	//hit
	}	


	
	
		$results = mysqli_query($db, "SELECT student_id, first_name, last_name, prelim, midterm, final FROM ieti_db.gradesubmissioneng101, ieti_db.login where username=first_name and tag='2'");
		//hit

	
	if (isset($_GET['edit'])) {
	$studentid = $_GET['edit'];
	$edit_state = true;
	
	$rec = mysqli_query($db, "SELECT * FROM ieti_db.gradesubmissioneng101 WHERE student_id=$studentid");	 //hit
	$record = mysqli_fetch_array($rec);
	$firstname = $record['first_name'];
	$lastname = $record['last_name'];
	$grade = $record['grade'];		
	}	

?>
<!DOCTYPE html>

<html>
<head>
	<link rel="stylesheet" type = "text/css" href = "gradestyle.css">
</head>

<body>

<?php if (isset($_SESSION['msg'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		?>
	</div>

<?php endif ?>


<table>

	<thead>
		<tr>
			<th>Student ID</th>
			<th>First name</th>
			<th>Last name</th>
			<th>Prelim</th>		
			<th>Midterm</th>	
			<th>Final</th>	
			<th>Grade</th>	
			<th colspan="2">Action</th>
		</tr>
	</thead>
	<tbody>
		<?php while ($row = mysqli_fetch_array($results)) { ?>
		<tr>
			<td><?php echo $row['student_id']; ?> </td>
			<td><?php echo $row['first_name']; ?> </td>
			<td><?php echo $row['last_name']; ?> </td>
			<td><?php echo $row['prelim']; ?> </td>
			<td><?php echo $row['midterm']; ?> </td>
			<td><?php echo $row['final']; ?> </td>

			
			<!-- test -->
			<td><?php $final_grade = ($row['prelim'] +  $row['midterm'] + $row['final']) / 3;  
			

			
			if ($final_grade == 4) {
			$final_grade = 'INC';
			}
			
			else if ($final_grade >= 99) { 
			$final_grade = '1.0';
			}
			else if ($final_grade >= 96) {
			$final_grade = '1.25';
			}	
			else if ($final_grade >= 93) {
			$final_grade = '1.5';
			}	
			else if ($final_grade >= 90) {
			$final_grade = '1.75';
			}				
			else if ($final_grade >= 87) {
			$final_grade = '2.0';
			}	
			else if ($final_grade >= 84) {
			$final_grade = '2.25';
			}	
			else if ($final_grade >= 81) {
			$final_grade = '2.5';
			}	
			else if ($final_grade >= 78) {
			$final_grade = '2.75';
			}	
			else if ($final_grade >= 75) {
			$final_grade = '3.0';
			}	
			
			else
			$final_grade = '5.0';
		
			echo $final_grade;	

			?> </td>
			
			<!-- test -->
			
			<td>
				<a class = "edit_btn" href="gradesubmissioneng101.php?edit=<?php echo $row['student_id']; ?>">Edit</a> <!-- hit -->
			</td>

		</tr>
	
		<?php } ?> 
	</tbody>
</table>
	
<form method = "post" action = ""> 
<input type = "hidden" name = "studentid" value = "<?php echo $studentid; ?>">


	<div class = "input-group">
		<label>Student ID</label>
		<input type = "number" name = "studentid" value = "<?php echo $studentid; ?>" readonly disabled>
	</div>
	<div class = "input-group">
		<label>First name</label>
		<input type = "text" name = "firstname" value = "<?php echo $firstname; ?>" readonly disabled>
	</div>
	<div class = "input-group">
		<label>Last name</label>
		<input type = "text" name = "lastname" value = "<?php echo $lastname; ?>" disabled>
	</div>
	<div class = "input-group">
		<label>Prelim</label>
		<input type = "number" step = "0.1" name = "prelim" value = "<?php echo $prelim; ?>">
	</div>	
		<div class = "input-group">
		<label>Midterm</label>
		<input type = "number" step = "0.1" name = "midterm" value = "<?php echo $midterm; ?>">
	</div>	
	<div class = "input-group">
		<label>Final</label>
		<input type = "number" step = "0.1" name = "final" value = "<?php echo $final; ?>">
	</div>	
	
	<div class = "input-group">

			<!--<button type = "submit" name = "update" class = "btn">Update</button>-->
			<button type = "submit" name = "update" class = "btn">Update</button>
	

	</div>	
</form>

</body>

</html>







<?php
	include_once("./web-page-parts/footer.php");
?>
<?php 


?>

<?php 
//session_start();


//$currentUser = $_SESSION['User'];
//$db = mysqli_connect('localhost', 'root', 'ieti19', 'ieti_db');
	//$results = mysqli_query($db, "SELECT * FROM login where username='$currentUser'");
		//if ($row=mysqli_fetch_array($results)) {
			//if ($row['tag'] == '1'){
			//include('gradeserver1.php'); 

			//}

			//else if ($row['tag'] == '2'){
			//include('gradeserver2.php'); 

			//}

		//}

include('gradeserver.php'); 

	if (isset($_GET['edit'])) {
	$studentid = $_GET['edit'];
	$edit_state = true;
	
	$rec = mysqli_query($db, "SELECT * FROM grades WHERE student_id=$studentid");		
	$record = mysqli_fetch_array($rec);
	$firstname = $record['first_name'];
	$lastname = $record['last_name'];
	$grade = $record['grade'];		
	}	

?>
<!DOCTYPE html>

<html>
<head>
	<link rel="stylesheet" type = "text/css" href ="gradestyle.css">
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

<tr>
<img class="pic" src="./report card.jpg" /> 

<style>
	.pic {
		
	width: 1000px;

	
	}
</style>

</tr> 

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

		</tr>
	</thead>
	<tbody>
		<?php 

		while ($row = mysqli_fetch_array($results)) { ?>
		<tr>

			<td><?php echo $row['student_id']; ?> </td>
			<td><?php echo $row['first_name']; ?> </td>
			<td><?php echo $row['last_name']; ?> </td>
			<!--<td><?php echo $row['grade']; ?> </td>-->
			<td><?php echo $row['prelim']; ?> </td>
			<td><?php echo $row['midterm']; ?> </td>
			<td><?php echo $row['final']; ?> </td>
			
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

			<!-- REFER to "testvar.php" for the "sharing" of variables between php files -->
			<td><?php echo '<button onclick="window.print();" class="btn btn-primary" id="print-btn">Print</button>'; ?> </td>
			<td><?php echo '<link rel="stylesheet" type="text/css" href="./print.css" media="print">'; ?> </td>

			
			<td><?php echo $row['username']; ?> </td>
			<td><?php echo $row['password']; ?> </td>
			<td><?php echo $row['tag']; ?> </td>
			
		</tr>
	
		<?php } ?> 
		



	</tbody>
</table>
	





	

	</div>	
</form>



</body>

</html>








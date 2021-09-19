
<?php 
	include_once ("./web-page-parts/header.php");
	include_once ("./web-page-parts/sidebar.php");
	include_once ("./web-page-parts/topbar.php");
?>

<!--   LINE  (ENG 101)  -->
<?php 

include('gradeserverclass.php'); 

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
			<th>
			<?php
			$currentUser = $_SESSION['User'];
			$results2 = mysqli_query($db, "SELECT * FROM ieti_db.subjectname WHERE subject='subject1'");
			if ($row=mysqli_fetch_array($results2)) {
			echo $row['description'];
			//echo $currentUser;
			}
			?>
			</th>
			

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
		<?php while ($row = mysqli_fetch_array($results)) { ?>
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
				
			
			
			<!-- <td><?php echo 1 + 1?> </td> -->
			
			<!--<td><?php echo $row['username']; ?> </td>-->
			<!--<td><?php echo $row['password']; ?> </td>-->
			<!--<td><?php echo $row['tag']; ?> </td>-->

		</tr>


		<?php } ?> 
		
		
		



	</tbody>

</table>



<!--   LINE   IT 101 -->


<?php 

include('gradeserverit101.php'); 

?>


<table>
	
	<thead>
			<th>IT 101</th>
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
		<?php while ($row = mysqli_fetch_array($results)) { ?>
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
				
			
			
			<!-- <td><?php echo 1 + 1?> </td> -->
			
			<!--<td><?php echo $row['username']; ?> </td>-->
			<!--<td><?php echo $row['password']; ?> </td>-->
			<!--<td><?php echo $row['tag']; ?> </td>-->

		</tr>


		<?php } ?> 
		
		
		



	</tbody>

</table>


<!--   LINE    -->



<!--   LINE   IT 201 -->


<?php 

include('gradeserverit201.php'); 

?>


<table>
	
	<thead>
			<th>IT 201</th>
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
		<?php while ($row = mysqli_fetch_array($results)) { ?>
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
				
			
			
			<!-- <td><?php echo 1 + 1?> </td> -->
			
			<!--<td><?php echo $row['username']; ?> </td>-->
			<!--<td><?php echo $row['password']; ?> </td>-->
			<!--<td><?php echo $row['tag']; ?> </td>-->

		</tr>


		<?php } ?> 
		
		
		



	</tbody>

</table>


<!--   LINE    -->



	
			<!--<td><?php echo '<a href="print1.php" class="btn btn-primary" id="print-btn">Print preview</a>'; ?> </td> -->
			
			<!-- RETURN IF NEEDED<td> <?php 
			include('print2.php'); 
			?> </td>-->
			
			<td><?php 
			echo '<form method = "post" target="_blank" action = "print1.php"> <button name = "print" class="btn btn-primary" id="print-btn">Print preview</button> </form>'; ?> 
			</td>
			<td><?php echo '<link rel="stylesheet" type="text/css" href="assets/css/printz.css" media="print">'; ?> </td>

	

	</div>	




</body>

</html>











<?php
	include_once("./web-page-parts/footer.php");
?>
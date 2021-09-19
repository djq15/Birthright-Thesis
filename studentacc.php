
<?php 
	include_once ("./web-page-parts/header.php");
	include_once ("./web-page-parts/sidebar.php");
	include_once ("./web-page-parts/topbar.php");
?>

<!--   LINE  (ENG 101)  -->


<?php 

include('studentaccserver.php'); 

	$Sub1 = new Sub1();
	$Link = $Sub1->Subject1();	


	if (isset($_GET['edit'])) {
	$studentid = $_GET['edit'];
	$edit_state = true;
	
	$rec = mysqli_query($db, "SELECT * FROM accounts WHERE student_id=$studentid");	
	$record = mysqli_fetch_array($rec);
	$firstname = $record['first_name'];
	$lastname = $record['last_name'];
	
	$tuition = $record['total_tuition'];
	$downpayment = $record['downpayment'];
	$prelim = $record['prelim'];
	$midterm = $record['midterm'];
	$final = $record['final'];
	
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
			<th>
			<?php
			/*
			$currentUser = $_SESSION['User'];
			$results2 = mysqli_query($db, "SELECT * FROM birthright_db.subjectname WHERE subject='subject1'");
			if ($row=mysqli_fetch_array($results2)) {
			echo $row['description'];
			//echo $currentUser;
			}
			*/
			echo "Payments ";
			?>
			</th>
			
		<tr>

			<th>Student ID</th>
			<th>First name</th>
			<th>Last name</th>
			<th>Tuition</th>	
			<th>Downpayment</th>	
			<th>Prelim</th>	
			<th>Midterm</th>	
			<th>Final</th>	
			<th>Balance</th>	
			
		</tr>
	</thead>
	
	
	<tbody>
		<?php //while ($row = mysqli_fetch_array($results)) { ?> 
			<?php while($row = $Link->fetch_assoc()){ ?>
		<tr>
			<?php $net = ($row['total_tuition'] - $row['downpayment']);?>
			
			
			
			
			<td><?php echo $row['student_id']; ?> </td>
			<td><?php echo $row['first_name']; ?> </td>
			<td><?php echo $row['last_name']; ?> </td>
			<!--<td><?php echo $row['grade']; ?> </td>-->
			<td><?php echo $row['total_tuition']; ?> </td>
			<td><?php echo $row['downpayment']; ?> </td>
			<td><?php echo $row['prelim']; ?> </td>
			<td><?php echo $row['midterm']; ?> </td>
			<td><?php echo $row['final']; ?> </td>
			<td><?php echo $net ?> </td>
			
			
			<?php
			
				$test = new gradeCalculation();
				$test->Calculate();
				
			?>
			
			<!-- <td><?php echo 1 + 1?> </td> -->
			
			<!--<td><?php echo $row['username']; ?> </td>-->
			<!--<td><?php echo $row['password']; ?> </td>-->
			<!--<td><?php echo $row['tag']; ?> </td>-->

			<td>
				<a class = "edit_btn" href="studentacc.php?edit=<?php echo $row['student_id']; ?>">Edit</a>
			</td>

		</tr>

		<?php } ?> 
		
	</tbody>
	
	
	
</table>




<!--   LINE    -->
<form method = "post" action = "studentaccserver.php">
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
		<label>Tuition</label>
		<input type = "number" step = "0.1" name = "tuition" value = "<?php echo $tuition; ?>">
	</div>
	<div class = "input-group">
		<label>Downpayment</label>
		<input type = "number" step = "0.1" name = "downpayment" value = "<?php echo $downpayment; ?>">
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


	
			<!--<td><?php echo '<a href="print1.php" class="btn btn-primary" id="print-btn">Print preview</a>'; ?> </td> -->
			
			<!-- RETURN IF NEEDED<td> <?php 
			//include('print2.php'); 
			?> </td>-->
			
			<td><?php 
			echo '<form method = "post" target="_blank" action = "print1.php"> <button name = "print" class="btn btn-primary" id="print-btn">Print preview</button> </form>'; ?> 
			</td>
			<td><?php echo '<link rel="stylesheet" type="text/css" href="assets/css/printz.css" media="print">'; ?> </td>

	






</body>

</html>











<?php
	include_once("./web-page-parts/footer.php");
?>


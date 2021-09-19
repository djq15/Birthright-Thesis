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



	

			<td><?php echo '<button onclick="window.print();" class="btn btn-primary" id="print-btn">Print</button>'; ?> </td>
			<td><?php echo '<link rel="stylesheet" type="text/css" href="./print.css" media="print">'; ?> </td>



	

	</div>	
</form>



</body>

</html>








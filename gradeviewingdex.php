<?php
	session_start(); if ( $_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ) && $_SESSION['tag'] !="2") {
	session_start();session_destroy();die( header( 'location: LogIn.php?Empty= Action Denied. Log in again' ) );}
?>


<?php 
	include_once ("./web-page-parts/header.php");
	include_once ("./web-page-parts/sidebar.php");
	include_once ("./web-page-parts/topbar.php");
?>
<a href="dash.php"> Back to dashboard</a>

<!--   LINE  (ENG 101)  -->
<?php 

//include('gradeservereng101.php'); 


	//if (isset($_GET['edit'])) {
	
	$edit_state = true;
	$username = $_SESSION['User'];
	$recz = mysqli_query($db, "SELECT * FROM birthright_db.login WHERE username='$username'");	
	$recordz = mysqli_fetch_array($recz);
	
	$studentno = $recordz['user_id'];
	
	$rec = mysqli_query($db, "SELECT * FROM birthright_db.masterlist WHERE Student_No='$studentno'");	
	$record = mysqli_fetch_array($rec);
	
	$status = $record['Status'];
	$lastname = $record['Last_name'];
	$firstname = $record['First_name'];
	$middleinitial = $record['Middle_initial'];
	$nickname = $record['Nickname'];
	$province = $record['Province'];
	$grade = $record['grade'];	

	$gender = $record['Gender'];
	$contact_no = $record['Contact_No'];
	$dob = $record['Date_of_birth'];
	$street = $record['Street'];
	$fathers_name = $record['Fathers_name'];
	$mothers_name = $record['Mothers_name'];	
	
	//}	
	
	echo $_POST['test1'];
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

<?php 

$user_id = $_GET['edit'];
$rec = mysqli_query($db, "SELECT * FROM birthright_db.login WHERE user_id='$user_id'");	 //hit
$record = mysqli_fetch_array($rec);


?>


<form method = "post" action = "gradeservereng101.php"> 
<input type = "hidden" name = "studentno" value = "<?php echo $studentno; ?>">

	<img src="<?php echo $recordz['pic']; ?>"  width="220" style="white-space:nowrap;overflow-y:auto;display: block;margin-left: auto;margin-right: auto;;"/>

	<div class = "input-group">
		<label>Student No</label>
		<input type = "number" name = "studentno" value = "<?php echo $studentno; ?>" readonly>
	</div>

	<div class = "input-group">
		<label>Last name</label>
		<input type = "text" name = "lastname" value = "<?php echo $lastname; ?>" autocomplete="off" >
	</div>
	<div class = "input-group">
		<label>First name</label>
		<input type = "text" name = "firstname" value = "<?php echo $firstname; ?>" autocomplete="off" >
	</div>
	<div class = "input-group">
		<label>Middle Initial</label>
		<input type = "text" name = "middleinitial" value = "<?php echo $middleinitial; ?>" autocomplete="off" >
	</div>
	<div class = "input-group">
		<label>Nick Name</label>
		<input type = "text" name = "nickname" value = "<?php echo $nickname; ?>" autocomplete="off" >
	</div>
	
	<div class = "input-group">
		<label>Gender</label>
		<input type = "text" name = "genderz" value = "<?php echo $gender; ?>" readonly>
		<br>
				<select name="gender">
				<option value="<?php echo $gender; ?>">Choose</option>
				<option value="Male">Male</option>
				<option value="Female">Female</option>
				</select>
	</div>
	
	<div class = "input-group">
		<label>Contact Number</label>
		<td><input type="number" name="contact_no" value = "<?php echo $contact_no; ?>" autocomplete="off"/></td>
	</div>
	
	<div class = "input-group">
		<label>Date of Birth</label>
		<td><input type="date" name="dob" value = "<?php echo $dob; ?>" autocomplete="off"/></td>
	</div>
	
	<div class = "input-group">
		<label>Street</label>
		<td><input type="text" name="street" value = "<?php echo $street; ?>" autocomplete="off"/></td>
	</div>
	
	<div class = "input-group">
		<label>Province</label>
		<input type = "text" name = "province" value = "<?php echo $province; ?>" autocomplete="off"/>
	</div>

	<div class = "input-group">
		<label>Father's Name</label>
		<td><input type="text" name="fathers_name" value = "<?php echo $fathers_name; ?>" autocomplete="off"/></td>
	</div>
	
	<div class = "input-group">
		<label>Mother's Name</label>
		<td><input type="text" name="mothers_name" value = "<?php echo $mothers_name; ?>" autocomplete="off"/></td>
	</div>

	<div class = "input-group">

			<!--<button type = "submit" name = "update" class = "btn">Update</button>-->
			<button type = "submit" name = "update" class = "btn">Update</button>
			<!-- <a type = "submit" href="studentpicprofile.php?edit=<?php echo $_GET['edit'];?>" name = "update" class = "btn">Upload Picture</a> -->
			<a type = "submit" href="studentpicprofile.php" name = "update" class = "btn">Upload Picture</a>

	</div>	
</form>


	
			<!--<td><?php echo '<a href="print1.php" class="btn btn-primary" id="print-btn">Print preview</a>'; ?> </td> -->
			
			<!-- RETURN IF NEEDED<td> <?php 
			//include('print2.php'); 
			?> </td>-->
			


	







</body>

</html>





<?php
	include_once("./web-page-parts/footer.php");
?>
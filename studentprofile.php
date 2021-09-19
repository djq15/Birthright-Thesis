<?php
	session_start(); if ( $_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ) && $_SESSION['tag'] !="1" && $_SESSION['tag'] !="3") {
	session_start();session_destroy();die( header( 'location: LogIn.php?Empty= Action Denied. Log in again' ) );}
?>

<?php 
	include_once("./web-page-parts/header.php");
	include_once("./web-page-parts/sidebar.php");
	include_once("./web-page-parts/topbar.php");
	//include('filtercheck.php');
	
?>
<a href="subject11.php">Back</a>
<?php 
	if (isset($_GET['edit'])) {
	$studentno = $_GET['edit'];
	$edit_state = true;
	$rec = mysqli_query($db, "SELECT * FROM birthright_db.masterlist WHERE Student_No=$studentno");	 //hit
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
	
	}	
?>
<?php
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
	
	//require_once('injection/connectionTest.php');
	//$mysqli= NEW MySQLi('localhost','root','ieti19','birthright_db');
	//$mothers_name = $_POST['mothers_name'];
	//$mothers_name = $mysqli->real_escape_string($mothers_name);
	//note: real_escape_string needs a "connection" like the syntax "$mysqli= NEW MySQLi('localhost','root','ieti19','birthright_db');" from connectionTest.php
	
	

	//mysqli_query($db, "UPDATE birthright_db.masterlist SET Status='$status', Last_name='$lastname', First_name='$firstname', Middle_initial='$middleinitial', Nickname='$nickname', Province='$province' WHERE Student_No = $studentno"); //hit
	mysqli_query($db, "UPDATE birthright_db.masterlist SET Status='$status', Last_name='$lastname', First_name='$firstname', Middle_initial='$middleinitial', Nickname='$nickname', Province='$province', Gender='$gender', Contact_No='$contact_no', Date_of_birth='$dob', Street='$street', Fathers_name='$fathers_name', Mothers_name='$mothers_name' WHERE Student_No = $studentno"); //hit	
	$_SESSION['msg'] = "Details updated";	
	//header('location: studentprofile.php');	
	header('location: studentprofile.php?edit='.$studentno.'');	
	}
?>
<!DOCTYPE html>

<html>
<head>

		<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->
		<script src="351min.js"></script>
		
		<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> -->
		<script src="336bootstrap.js"></script>	
		
	<link rel="stylesheet" type = "text/css" href = "gradestyle.css">
	
	<script>
		$(document).ready(function() {
			//$("form").submit(function(event){	
			//$("#mail-name").change(function(event){ //experiment
			//$("form").submit(function(event){	
			//$("#mail-name").on('change', function(event){ //experiment
			$("form").change(function(event){ //experiment
				//this.form.submit(); //experiment
				//$("#mail-name").on('change', function(event){ //experiment
				//$(this).closest('form').submit(); //experiment
				event.preventDefault();
				var name = $("#mail-name").val();
				var email = $("#mail-email").val();
				var gender = $("#mail-gender").val();
				var message = $("#mail-message").val();
				var submit = $("#mail-submit").val();
				$(".form-message").load("keyupfilter.php", {
					filter: name, 
					email: email,
					gender: gender,
					message: message, 
					submit: submit
				});
			});
		});
	</script>
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



<!-- <table> this is troubling the filter -->  


<!-- <form method = "post"  = "fetch-class2"> -->
<!-- <form method = "post" action = ""> -->


<form method = "post" action = ""> 
<input type = "hidden" name = "studentno" value = "<?php echo $studentno; ?>">

<?php 

$user_id = $_GET['edit'];
$rec = mysqli_query($db, "SELECT * FROM birthright_db.login WHERE user_id='$user_id'");	 //hit
$record = mysqli_fetch_array($rec);


?>
	<img src="<?php echo $record['pic']; ?>"  width="220" style="white-space:nowrap;overflow-y:auto;display: block;margin-left: auto;margin-right: auto;;"/>

	<div class = "input-group">
		<label>Student No</label>
		<input type = "number" name = "studentno" value = "<?php echo $studentno; ?>" readonly disabled>
	</div>

	<div class = "input-group">
		<label>Status</label>
		<!-- <input type = "text" name = "gender" value = "<?php echo $status; ?>" readonly autocomplete="off"> -->
		<select style="width:430px;" name="status">
				<option value="<?php echo $status; ?>"><?php echo $status; ?></option>
				<?php 
				if ($status == "Enrolled"){?>
				<option value="Not Enrolled">Not Enrolled</option>
				<?php } 
				else if ($status == "Not Enrolled"){ ?>
				<option value="Enrolled">Enrolled</option>
				<?php } 
				else { ?>
				<option value="Enrolled">Enrolled</option>
				<option value="Not Enrolled">Enrolled</option>
				<?php } ?>
				<!--
				<option value="Male">Male</option>
				<option value="Female">Female</option>
				-->
		</select>
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
		<!-- <input type = "text" name = "gender" value = "<?php echo $gender; ?>" readonly autocomplete="off"> -->
		<select style="width:430px;" name="gender">
				<option value="<?php echo $gender; ?>"><?php echo $gender; ?></option>
				<?php 
				if ($gender == "Male"){?>
				<option value="Female">Female</option>
				<?php } 
				else if ($gender == "Female"){ ?>
				<option value="Male">Male</option>
				<?php } 
				else {?>
				<option value="Male">Male</option>
				<option value="Female">Female</option>
				<?php } ?>
				<!--
				<option value="Male">Male</option>
				<option value="Female">Female</option>
				-->
		</select>
	</div>
	
	<div class = "input-group">
		<label>Contact Number</label>
		<td><input type="number" name="contact_no" value = "<?php echo $contact_no; ?>" autocomplete="off" /></td>
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
		<input type = "text" name = "province" value = "<?php echo $province; ?>" autocomplete="off">
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
			<a type = "submit" href="studentpic.php?edit=<?php echo $_GET['edit'];?>" name = "update" class = "btn">Picture Management</a>
	

	</div>	
</form>


</body>

</html>
<?php // this is for keyup filter AJAX
	include('keyupfilter.php'); 
?>


<?php	
	include_once("./web-page-parts/footer.php");
?>


<?php
	session_start(); if ( $_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ) && $_SESSION['tag'] !="1") {
	session_start();session_destroy();die( header( 'location: ../LogIn.php?Empty= Action Denied. Log in again' ) );}
?>
<link rel="stylesheet" type = "text/css" href = "../gradestyle.css">
<link href="./assets/css/sb-admin-2.min.css" rel="stylesheet" type="text/css" />
<?php 
include("topbar.php");
?>
<a href="dash.php">Back</a>
<br>
<p align="center">Edit or delete existing login (all)</p>



<?php


	//include('gradeserveredit.php'); 

session_start();
$edit_state = false;

$db = mysqli_connect('localhost', 'root', 'ieti19', 'birthright_db');

	if (isset($_GET['edit'])) {
	$usernamez = $_GET['edit'];
	$edit_state = true;
	
	$rec = mysqli_query($db, "SELECT * FROM birthright_db.login WHERE username='$usernamez'");	 //hit
	$record = mysqli_fetch_array($rec);
	
	}

if (isset($_POST['save'])) {
	$studentid = $_POST['studentid'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$grade = $_POST['grade'];	

	$query = "INSERT INTO ieti_db.it101 (student_id, first_name, last_name, grade) VALUES ('$studentid', '$firstname', '$lastname', '$grade')"; //hit
	mysqli_query($db, $query);
	//mysqli_query($db, "INSERT INTO grades (student_id, first_name, last_name, grade) VALUES ('$studentid', '$firstname', '$lastname', '$grade')");
	$_SESSION['msg'] = "Details saved";
	header('location: gradesubmissionit101.php'); //hit
}

	if (isset($_POST['update'])) {

	$userid = $_POST['userid'];
	$username = $_POST['username'];
	$password = $_POST['password'];	
	$tag = $_POST['tag'];
	$approval = $_POST['approval'];
	$email = $_POST['email'];
	$folder = $_POST['folder'];	
	$verified = $_POST['verified'];
	
	$password = md5($password);

	//mysqli_query($db, "UPDATE birthright_db.login SET username='$username', password='$password', tag='$tag', clearance_approve='$approval', email='$email', existing_folder='$folder', verified='$verified' WHERE username = '$username'"); //hit
	//mysqli_query($db, "UPDATE birthright_db.login SET username='$username', password='$password', tag='$tag', clearance_approve='$approval', email='$email', existing_folder='$folder', verified='$verified' WHERE user_id = '$userid'"); //hit
	
	if ($password != "d41d8cd98f00b204e9800998ecf8427e"){
	mysqli_query($db, "UPDATE birthright_db.login SET user_id='$userid', username='$username', password='$password', tag='$tag', clearance_approve='$approval', email='$email', existing_folder='$folder', verified='$verified' WHERE user_id = '".$record['user_id']."'"); //hit
	//echo "change the password";
	}
	else if ($password == "d41d8cd98f00b204e9800998ecf8427e") {
	mysqli_query($db, "UPDATE birthright_db.login SET user_id='$userid', username='$username', tag='$tag', clearance_approve='$approval', email='$email', existing_folder='$folder', verified='$verified' WHERE user_id = '".$record['user_id']."'"); //hit
	//echo "don't change the password";
	}
	
	// experiment for changing to the official student no/id 
	if ($tag == "2") {
	mysqli_query($db, "UPDATE birthright_db.masterlist SET Student_No='$userid' WHERE Student_No = '".$record['user_id']."'");
	mysqli_query($db, "UPDATE birthright_db.accounts SET student_id='$userid' WHERE student_id = '".$record['user_id']."'");
	}
	// experiment for changing to the official student no/id 
	
	$_SESSION['msg'] = "Details updated";	
	header('location: edit.php');	//hit
	}	


	if (isset($_GET['del'])) {
	$studentid = $_GET['del'];
	
	mysqli_query($db, "DELETE FROM birthright_db.login WHERE username='$username'"); //hit
	$_SESSION['msg'] = "Details deleted";
	header('location: edit.php');	//hit
	}	
	
	/*
	if (isset($_POST['del'])) {
	$username = $_POST['username'];
	
	mysqli_query($db, "DELETE FROM birthright_db.login WHERE username='$username'"); //hit
	$_SESSION['msg'] = "Details deleted";
	header('location: edit.php');	//hit
	}	
	*/
	
	
	//$results = mysqli_query($db, "SELECT student_id, first_name, last_name, prelim, midterm, final FROM ieti_db.it101, ieti_db.login where username=first_name and tag='2'");
	$results = mysqli_query($db, "SELECT * from birthright_db.login ORDER by clearance_approve desc");

	// delete if troublesome
	$userid = NULL;
	$username = NULL;
	$password = NULL;
	$tag = NULL;
	$approval = NULL;
	$email = NULL;
	$folder = NULL;
	$verified = NULL;
	// delete if troublesome
	
	if (isset($_GET['edit'])) {
	$username = $_GET['edit'];
	$edit_state = true;
	
	$rec = mysqli_query($db, "SELECT * FROM birthright_db.login WHERE username='$username'");	 //hit
	$record = mysqli_fetch_array($rec);
	$userid = $record['user_id'];
	$password = $record['password'];
	$tag = $record['tag'];
	$approval = $record['clearance_approve'];		
	$email = $record['email'];
	$folder = $record['existing_folder'];	
	$verified = $record['verified'];	
	
	}	

?>
<!DOCTYPE html>

<html>
<head>
	<link rel="stylesheet" type = "text/css" href = "gradestyle.css">
	
	<script src="351min.js"></script>
	<script src="336bootstrap.js"></script>	
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
			<th>User&nbsp;ID</th>
			<th>Username</th>
			<th>Password</th>
			<th>Tag&nbsp;</th>
			<th>Registrar&nbsp;Approval</th>		
			<th>Email&nbsp;</th>	
			<th>ExistingFolder</th>	
			<th>Verified</th>	
			<th colspan="2">Action</th>
		</tr>
	</thead>

	<tbody>
		<?php //while ($row = mysqli_fetch_array($results)) { ?>
		<?php while ($row = $results->fetch_assoc()) { ?>
		<tr>
			<td><?php echo $row['user_id']; ?> </td>
			<td><?php echo $row['username']; ?> </td>
			<td><?php echo $row['password']; ?> </td>
			<td><?php echo $row['tag']; ?> </td>
			<td><?php echo $row['clearance_approve']; ?> </td>
			<td><?php echo $row['email']; ?> </td>
			<td><?php echo $row['existing_folder']; ?> </td>
			<td><?php echo $row['verified']; ?> </td>
			

			
			<td>
				<a class = "edit_btn" href="edit.php?edit=<?php echo $row['username']; ?>">Edit</a> <!-- hit -->
			</td>
			<td>
				<a class = "edit_btn" href="javascript:deleteme('<?php echo $row['username']; ?>')" name="delete">Delete</a> <!-- hit -->
			</td>



		</tr>
<script>
function deleteme(delid)
{
	if (confirm('Do you want to delete user "'+delid+'" ?')){
			window.location.href='delete.php?del_id=' +delid+'';
			return true;
	}
}
</script>

	
		<?php } ?> 
	</tbody>
</table>

	
<form method = "post" action = ""> 
<input type = "hidden" name = "studentid" value = "<?php echo $studentid; ?>">


	<div class = "input-group">
		<label>User ID</label>
		<input type = "text" name = "userid" value = "<?php echo $userid; ?>"> 
	</div>
	<div class = "input-group">
		<label>Username</label>
		<input type = "text" name = "username" value = "<?php echo $username; ?>"> (Don't change if possible)
	</div>


	<div class = "input-group">
		<label>New Password</label>
		<input type = "text" name = "password" value = "">
	</div>


	<div class = "input-group">
		<label>Tag&nbsp;&nbsp;</label>
		<input type = "text" name = "tag" value = "<?php echo $tag; ?>">
	</div>

	<div class = "input-group">
		<label>RegistrarApproval</label>
		<input type = "text" name = "approval" value = "<?php echo $approval; ?>">
	</div>	
		<div class = "input-group">
		<label>Email</label>
		<input type = "text" name = "email" value = "<?php echo $email; ?>">
	</div>	
	<div class = "input-group">
		<label>ExistingFolder</label>
		<input type = "text" name = "folder" value = "<?php echo $folder; ?>">
	</div>	
	<div class = "input-group">
		<label>Verified</label>
		<input type = "number" step = "0.1" name = "verified" value = "<?php echo $verified; ?>">
	</div>	
	
	<div class = "input-group">

			<!--<button type = "submit" name = "update" class = "btn">Update</button>-->
			<td>
			<button type = "submit" name = "update" class = "edit_btn" style="margin-right: 70px">Update</button>
			</td>
			<!--<button type = "submit" name = "del" class = "btn">Delete</button>-->

<?php
if (isset($_POST["del"])) {
?>
<form action="" method="POST">
Warning: This will the user and all data associated with it.
<br>
Are you sure?
<button name="yes"> Yes </button>
<button name="no"> No </button>
</form>

<?php
}
?>


</div>	


</form>




</body>

</html>

<?php
if (isset($_POST["yes"])) {

	$username = $_POST['username'];
	
	mysqli_query($db, "DELETE FROM birthright_db.login WHERE username='$username'"); //hit
	$_SESSION['msg'] = "Details deleted";
	header('location: edit.php');	//hit

}

?>

<?php	
	include_once("../web-page-parts/footer.php");
?>
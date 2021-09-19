<?php 
	include_once("./web-page-parts/header.php");
	include_once("./web-page-parts/sidebar.php");
	include_once("./web-page-parts/topbar.php");
?>
<a href="dash.php"> Back to dashboard</a>
<?php 


$currentUser = $_GET['edit'];
//$db = mysqli_connect('localhost', 'root', 'ieti19', 'birthright_db');

	//if (isset($_GET['edit'])) {
	//$studentno = $_GET['edit'];
	$studentno = $_SESSION['User'];
	$edit_state = true;
	
	//$rec = mysqli_query($db, "SELECT * FROM birthright_db.login WHERE username='$currentUser'");	
	$rec = mysqli_query($db, "SELECT * FROM birthright_db.login WHERE username='$studentno'");
	$record = mysqli_fetch_array($rec);
	$status = $record['email'];
	$lastname = $record['tag'];
	
	//}	


?>

<!DOCTYPE html>

<html>
<head>
	<link rel="stylesheet" type = "text/css" href = "gradestyle.css">
</head>

<body>

<form method="POST" action=""> 
<input type = "hidden" name = "studentno" value = "<?php echo $studentno; ?>">


	<div class = "input-group">
		<label>Username</label>
		<input type = "text" name = "studentno" value = "<?php ;echo $studentno; ?>" disabled readonly>
	</div>
	<div class = "input-group">
		<label>Email</label>
		<input type = "text" name = "status" value = "<?php echo $status; ?>" autocomplete="off">
	</div>
	<div class = "input-group">
		<label>User Type</label>
		<input type = "text" name = "lastname" value = 
		"<?php 
		if ($lastname == "1"){
		echo "Admin";
		}
		else if ($lastname == "2"){
		echo "Student";
		}
		else if ($lastname == "3"){
		echo "Registrar";
		}
		else if ($lastname == "4"){
		echo "Cashier/Finance Officer";
		}
		
		?>" disabled readonly>
	</div>
	


	<div class = "input-group">

			<!--<button type = "submit" name = "update" class = "btn">Update</button>-->
			<a type = "submit" name = "update" class = "btn" href="changepass.php">Change Password</a>
			<button type = "submit" name = "email" class = "btn" >Change Email address</button>

	</div>	
<?php

session_start();
$currentuser = $_SESSION['User'];
$db = mysqli_connect('localhost', 'root', 'ieti19', 'ieti_db');

    if(isset($_POST['email'])){
	
	$username = $_POST['username'];
	$email = $_POST['email'];
	$newemail = $_POST['status'];
	
	mysqli_query($db, "UPDATE birthright_db.login SET email='$newemail' WHERE username = '$currentuser'"); //hit
	$_SESSION['msg'] = "Details updated";	
	//header('location: profile.php?edit='.$currentuser.'');	//hit
	header('location: profile.php');

	//echo $currentuser;
	//echo $newemail;
	}

?>
</form>
</body>

</html>


<?php
	include_once("./web-page-parts/footer.php");
?>
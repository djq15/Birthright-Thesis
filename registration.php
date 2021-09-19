<?php 
	//include_once("./web-page-parts/header.php");
?>
<link rel="stylesheet" type = "text/css" href = "gradestyle.css">
<link href="./assets/css/sb-admin-2.min.css" rel="stylesheet" type="text/css" />
<?php
$error = NULL;

require_once('injection/connectionTest.php'); //test
session_start(); //test



?>
<a href="LogIn.php"> Back to Login</a>
<div style="text-align: center;"><a href='Enrollment Guidelines.pdf'>Enrollment Guidelines</a></div>


<?php

if (isset($_POST['submit'])) {
		
	//Get form data
	$u = $_POST['u'];
	$p = $_POST['p'];
	$p2 = $_POST['p2'];
	$e = $_POST['e'];	
	
	$f = $_POST['f'];	
	$l = $_POST['l'];	
	
	$mi = $_POST['mi'];
	$nn = $_POST['nn'];
	$g = $_POST['g'];
	$cn = $_POST['cn'];
	$dob = $_POST['dob'];
	$st = $_POST['st'];
	$pv = $_POST['pv'];
	$fn = $_POST['fn'];
	$mn = $_POST['mn'];
	
	$resultSetz = $mysqli->query("SELECT * FROM login WHERE username = '$u' LIMIT 1"); //test
	
	if(strlen($u) < 5 or strlen($p) < 5) {
		$error ="<p>Your username and password must be at least 5 characters in length</p>";
		header('location:registration.php?error=Your username and password must be at least 5 characters in length');
	}
	else if($p2 != $p){
		$error .="Your passwords do not match";
		header('location:registration.php?error=Your passwords do not match');
	}
	else{
		
		//Form is valid
		//Connect to the database
		//$mysqli= NEW MySQLi('localhost','root','ieti19','birthright_db'); // restore only if needed
		
		if($resultSetz->num_rows !=0){ //test
			$error .="Username already exists"; //test
			header('location:registration.php?error=Username already exists. Please provide a unique username.');
			
		} //test
		else { //test
		//Sanitize from data
		$u = $mysqli->real_escape_string($u);
		$p = $mysqli->real_escape_string($p);
		$p2 = $mysqli->real_escape_string($p2);
		$e = $mysqli->real_escape_string($e);
		
		$f = $mysqli->real_escape_string($f);
		$l = $mysqli->real_escape_string($l);
		
		$mi = $mysqli->real_escape_string($mi);
		$nn = $mysqli->real_escape_string($nn);
		$g = $mysqli->real_escape_string($g);
		$cn = $mysqli->real_escape_string($cn);
		$dob = $mysqli->real_escape_string($dob);
		$st = $mysqli->real_escape_string($st);
		$pv = $mysqli->real_escape_string($pv);
		$fn = $mysqli->real_escape_string($fn);
		$mn = $mysqli->real_escape_string($mn);
		
		//Generate Vkey
		$vkey = md5(time().$u);

		//Insert account into the database (login)
		$p = md5($p);
		$insert = $mysqli->query("INSERT INTO login(username,password,email,vkey, tag)
		VALUES('$u', '$p', '$e', '$vkey', 2)");
		//$insert = 1;
		if($insert){
			$to = $e;
			$subject = "Email verification";
			$message = "<a href='http://localhost/NEO 6-35/verify.php?vkey=$vkey'>Register account</a>";
			//$message = "<a href='http://localhost/registration/verify.php?vkey=$vkey'>Register account</a>";
			//$headers = "From: dikoy15@yahoo.com \r\n";
			$headers = "From: dexer.quimpo@gmail.com \r\n";
			$headers .= "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
			
			mail($to,$subject,$message,$headers);
			
			//$mysqli= NEW MySQLi('localhost','root','ieti19','birthright_db'); // restore only if needed
			//session_start(); // restore only if needed
			$resultSet = $mysqli->query("SELECT * FROM login WHERE username='$u'");
			$row = $resultSet->fetch_assoc();
			$username = $u;
			$uid = $row['user_id'];
			$edit_state = true;
			//$rec = mysqli_query($db, "SELECT * FROM login WHERE username=$username");	
			
			//$rec = mysqli_query($db, "SELECT * FROM login WHERE username='Slim'");	
			//$record = mysqli_fetch_array($rec);

		
		//Insert account into the database (masterlist)
		$insert = $mysqli->query("INSERT INTO masterlist(Student_no, First_name, Last_name, Middle_initial, Nickname, Gender, Contact_No, Date_of_birth, Street, Province, Fathers_name, Mothers_name, Status)
		VALUES('$uid', '$f', '$l', '$mi', '$nn', '$g', '$cn', '$dob', '$st', '$pv', '$fn', '$mn', 'Not Enrolled')");
		
		//Insert account into the database (accounts)
		$insert = $mysqli->query("INSERT INTO accounts(student_id, first_name, last_name)
		VALUES('$uid', '$f', '$l')");
		
			//echo $row['user_id'];
			//echo "<br>";
			//echo $u;
		header('location:thankyou.php');
		
		
		
		}
		
		else {
			echo $mysqli->error;
		}
		}	 //test
	}
}	
		$vkey = md5(time());
		//echo $vkey;

?>

<html>
<head>
	
<!-- <link href="./assets/css/sb-admin-2.min.css" rel="stylesheet" type="text/css" /> -->
</head>


<body>
<form   method="POST" action="">

	<?php
	if(@$_GET['error']==true){
	?>       
	<div class="alert-light text-danger text-center py-3"><?php echo $_GET['error'] ?></div>                                
    <?php
    }
	?>
	
	<div class = "input-group">
		<td align="right">Username:</td>
		<td><input type="TEXT" name="u" autocomplete="off" required/></td>
	</div>
	<div class = "input-group">
		<td align="right">Firstname:</td>
		<td><input type="TEXT" name="f" autocomplete="off" required/></td>
	</div>
	<div class = "input-group">
		<td align="right">Lastname:</td>
		<td><input type="TEXT" name="l" autocomplete="off" required/></td>
	</div>
	
	<div class = "input-group">
		<td align="right">Middle Initial:</td>
		<td><input type="TEXT" name="mi" autocomplete="off" required/></td>
	</div>
	
	<div class = "input-group">
		<td align="right">Nickname:</td>
		<td><input type="TEXT" name="nn" autocomplete="off" required/></td>
	</div>
	
	<!--
	<div class = "input-group">
		<td align="right">Gender:</td>
		<td><input type="TEXT" name="g" autocomplete="off" required/></td>
	</div>
	-->
	
	<div>
		<td align="right">Gender:</td>
		<br>
				<select name="g" required/>
				<option value="">Choose Gender</option>
				<option value="Male">Male</option>
				<option value="Female">Female</option>
				</select>
	</div>


	
	<div class = "input-group">
		<td align="right">Contact Number:</td>
		<td><input type="number" name="cn" autocomplete="off" required/></td>
	</div>
	
	<div class = "input-group">
		<td align="right">Date of Birth:</td>
		<td><input type="date" name="dob" autocomplete="off" required/></td>
	</div>
	
	<div class = "input-group">
		<td align="right">Address Street:</td>
		<td><input type="text" name="st" autocomplete="off" required/></td>
	</div>
	
	<div class = "input-group">
		<td align="right">Address City and Province:</td>
		<td><input type="text" name="pv" autocomplete="off" required/></td>
	</div>
	
	<div class = "input-group">
		<td align="right">Father's Name:</td>
		<td><input type="text" name="fn" autocomplete="off"/></td>
	</div>
	
	<div class = "input-group">
		<td align="right">Mother's Name:</td>
		<td><input type="text" name="mn" autocomplete="off"/></td>
	</div>
	
	<div class = "input-group">
		<td align="right">Password:</td>
		<td><input type="PASSWORD" name="p" required/></td>
	</div>
	<div class = "input-group">
		<td align="right">Repeat Password:</td>
		<td><input type="PASSWORD" name="p2" required/></td>
	</div>
	<div class = "input-group">
		<td align="right">Email Address:</td>
		<td><input type="EMAIL" name="e" autocomplete="off" required/></td>
	</div>
	<br>
	<div class = "input-group">
		<td colspan="2" align="center"><input type="SUBMIT" name="submit" value="Register" required/></td>
	</div>
	
</form>





<center>
<?php
	echo $error;
?>
</center>
</body>
</html>


<?php	
	include_once("./web-page-parts/footer.php");
?>
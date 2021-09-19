
<link rel="stylesheet" type = "text/css" href = "gradestyle.css">
<?php
	if(isset($_GET['vkey'])){
	//Process Verification
	$vkey = $_GET['vkey'];	
	
	$mysqli= NEW MySQLi('localhost','root','ieti19','birthright_db');
	$resultSet = $mysqli->query("SELECT verified, vkey FROM login WHERE verified = 0 AND vkey = '$vkey' LIMIT 1");
	
	if($resultSet->num_rows == 1){
	//Validate The email
	$update = $mysqli->query("UPDATE login SET verified = 1 WHERE vkey = '$vkey' LIMIT 1");
	
	if($update){
		//echo "Your account has been verified";
		?>
		<div style="text-align: center;">
		<h2>Your account has been verified</h2>
		<a href="LogIn.php"> Go back to login page <a>
		</div>
		<?php
	}
	else{
		echo $mysqli->error;		
	}
	
	}
	else {
		//echo "Account invalid or already verified";
		?>
		<div style="text-align: center;">
		<h2>Account invalid or already verified</h2>
		<a href="LogIn.php"> Go back to login page <a>
		</div>
		<?php
	}
	}
	else {
		//die("Something went wrong");
		//echo "Something went wrong";
		?>
		<div style="text-align: center;">
		<h2> Something went wrong </h2>
		<a href="LogIn.php"> Go back to login page <a>
		</div>
		<?php 
	}
?>
<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<center>

</center>
</body>
</html>
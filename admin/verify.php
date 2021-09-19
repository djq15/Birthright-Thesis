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
		echo "Your account has been verified";
	}
	else{
		echo $mysqli->error;		
	}
	
	}
	else {
		echo "Account invalid or already verified";
	}
	}
	else {
		die("Something went wrong");
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
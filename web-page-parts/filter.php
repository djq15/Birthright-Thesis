<?php
	session_start();

	
	if ($_SESSION['User'] == ''){
	header("location:./LogIn.php");
	}
	
?>	



		
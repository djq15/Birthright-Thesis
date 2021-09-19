<?php 
	//include_once("./web-page-parts/header.php");
?>
<link rel="stylesheet" type = "text/css" href = "gradestyle.css">
<link href="./assets/css/sb-admin-2.min.css" rel="stylesheet" type="text/css" />

<style>
	.td {
		text-align: center;
		margin-left: auto;
		margin-right: auto;
	}
	
	
	.form {

    border:none;
	box-shadow: none;

	}
	
	
	
	
</style>

<form  class="form" method="POST" action="LogIn.php">
<table>
	<p align="center">Registration Successful</p>
	<br>
	<div class = "input-group">
		<input class = "td" type="SUBMIT" value="Back to Login"></input>
	</div>
<table>
</form>

<?php	
	include_once("./web-page-parts/footer.php");
?>

<?php
	session_start(); if ( $_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ) && $_SESSION['tag'] !="1") {
	session_start();session_destroy();die( header( 'location: ../LogIn.php?Empty= Action Denied. Log in again' ) );}
?>


<link rel="stylesheet" type = "text/css" href = "../gradestyle.css">
<link href="./assets/css/sb-admin-2.min.css" rel="stylesheet" type="text/css" />
<?php
	//include_once("./web-page-parts/header.php");
	include("topbar.php");
?>	

<a href="../dash2.php">Back to Dashboard</a>


<style>
	.input-group {
		
		
	}
	
</style>

<form class="form">


<p align="center"> Manage Users </p>


<p align="center"><a align="center" class="collapse-item" href="registration.php">Create new account (admin/registrar/cashier or finace officer)</a></p>

<p align="center"><a class="collapse-item" href="edit.php">Edit or delete existing login (all)</a></p>


<p align="center"><a class="collapse-item" href="editaccounts.php">Delete User from accounts database (students only)</a></p>

<p align="center"><a class="collapse-item" href="editmasterlist.php">Delete User from masterlist database (students only)</a></p>


</form>

<?php	
	include_once("../web-page-parts/footer.php");
?>
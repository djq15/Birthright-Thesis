<?php 
	include_once("./web-page-parts/header.php");
	include_once("./web-page-parts/sidebar.php");
	include_once("./web-page-parts/topbar.php");

?>

<?php

session_start();
$currentuser = $_SESSION['User'];
$db = mysqli_connect('localhost', 'root', 'ieti19', 'ieti_db');

    if(isset($_POST['email'])){
	/*
	$username = $_POST['username'];
	$email = $_POST['email'];

	mysqli_query($db, "UPDATE birthright_db.login SET username='$username', password='$password', tag='$tag', clearance_approve='$approval', email='$email', existing_folder='$folder', verified='$verified' WHERE username = '$username'"); //hit
	$_SESSION['msg'] = "Details updated";	
	header('location: edit.php');	//hit
	*/

	echo "shit";
	}

?>


<?php
	include_once("./web-page-parts/footer.php");
?>
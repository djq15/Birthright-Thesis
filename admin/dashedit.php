<?php
	session_start(); if ( $_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ) && $_SESSION['tag'] !="1") {
	session_start();session_destroy();die( header( 'location: ../LogIn.php?Empty= Action Denied. Log in again' ) );}
?>

<link rel="stylesheet" type = "text/css" href = "../gradestyle.css">
<link href="./assets/css/sb-admin-2.min.css" rel="stylesheet" type="text/css" />
<?php
	include("topbar.php");
?>	

<a href="../dash2.php">Back to the dashboard</a>



<form class="form">
<p align="center"> Edit Dashboard</p>

<p align="center"><a class="collapse-item" href="../dashcheck.php">Check student's view of dashboard</a></p>

<p align="center"><a class="collapse-item" href="announcements.php">Announcements</a></p>

<p align="center"><a class="collapse-item" href="featuredvideo.php">Featured Video</a></p>

<p align="center"><a class="collapse-item" href="listsanddocumentations.php">Lists and documentations</a></p>

<p align="center"><a class="collapse-item" href="featuredpics.php">Featured Pics</a></p>
		
</form>
		
<?php	
	include_once("../web-page-parts/footer.php");
?>
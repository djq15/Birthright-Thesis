<?php
	session_start(); if ( $_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ) && $_SESSION['tag'] !="1") {
	session_start();session_destroy();die( header( 'location: ../LogIn.php?Empty= Action Denied. Log in again' ) );}
?>
<link rel="stylesheet" type = "text/css" href = "../gradestyle.css">
<link href="./assets/css/sb-admin-2.min.css" rel="stylesheet" type="text/css" />
<?php 
include("topbar.php");
?>

<a href="dashedit.php">Back</a>

<form class="form">
<p align="center"> Announcements</p>
<p align="center"><a class="collapse-item" href="announcementspic.php">Upload Announcements Picture</a></p>

<p align="center"><a class="collapse-item" href="announcements1.php">Announcement 1</a></p>

<p align="center"><a class="collapse-item" href="announcements2.php">Announcement 2</a></p>

<p align="center"><a class="collapse-item" href="announcements3.php">Announcement 3</a></p>

<p align="center"><a class="collapse-item" href="announcements4.php">Announcement 4</a></p>

<p align="center"><a class="collapse-item" href="announcements5.php">Announcement 5</a></p>

</form>

<?php	
	include_once("../web-page-parts/footer.php");
?>
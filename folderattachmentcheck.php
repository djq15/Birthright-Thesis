<?php
	session_start(); if ( $_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ) && $_SESSION['tag'] !="2") {
	session_start();session_destroy();die( header( 'location: LogIn.php?Empty= Action Denied. Log in again' ) );}
?>

<?php 
	include_once("web-page-parts/header.php");
	include_once("web-page-parts/sidebar.php");
	include_once("web-page-parts/topbar.php");
?>
<a href="dash.php"> Back to dashboard</a>
<br>
<br>
			<td>
				<a class = "edit_btn" href="folderattachment1.php">Attachment from Registrar</a>
			</td>
			<br>
			<td>
				<a class = "edit_btn" href="folderattachment2.php">Attachment from Finance</a>
			</td>


<?php
	include_once("web-page-parts/footer.php");
?>
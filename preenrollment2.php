<?php
	session_start(); if ( $_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ) && $_SESSION['tag'] !="1" && $_SESSION['tag'] !="4") {
	session_start();session_destroy();die( header( 'location: LogIn.php?Empty= Action Denied. Log in again' ) );}
?>

<?php 
	include_once("web-page-parts/header.php");
	include_once("web-page-parts/sidebar.php");
	include_once("web-page-parts/topbar.php");
?>
<a href="dash2.php"> Back to dashboard</a>
<br>
<br>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<?php
	if (isset($_GET['editz'])) {
	$username = $_GET['editz'];
	$edit_state = true;
	}	
?>



</body>
</html>

<?php

//$path = ".";
//$path = "Dexer/Admin/";
$path = "uploads/Tempo/";
$dir = opendir($path) or die ("Folder does not exist");



while($file = readdir($dir))
{
	
	if ($file == "." or $file == ".." or $file == "index.php" or $file == "del.png" or $file == "create.php" or $file == "delete.php") 
		
	continue;	
	//echo "<a href='Dexer/Admin/$file'>$file</a><a href='delete.php?dir=$file'><img src='delete.png'></a><br>";
	//echo "<a href='$username/Admin/$file'>$file</a><a href='delete.php?dir=$file'><img src='delete.png'></a><br>";
	//echo "<a href='uploads/Tempo/$file'>$file</a><a href='delete.php?dir=$file&username=$username'><img src='delete.png'></a><br>";
	echo "<a href='uploads/Tempo/$file'>$file</a><a href='tempodelete.php?dir=$file'><img src='delete.png'></a><br>";
}
closedir($dir);


?>


<?php
	include_once("web-page-parts/footer.php");
?>
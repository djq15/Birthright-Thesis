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

<p align="center">Lists and Documentations</p>

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

<form action = "listsanddocumentations2.php" method="POST" enctype="multipart/form-data"> 
<input type = "file" name = "file">
		<!-- <label>Username</label> -->
		<!-- <input type = "text" name = "username" value = "<?php echo $username; ?>" readonly> -->
		<button type="submit" name = "submit"> Upload Document </button>

</form>

</body>
</html>

<?php

//$path = ".";
//$path = "Dexer/Admin/";
$path = "../lists/";
$dir = opendir($path) or die ("Folder does not exist");



while($file = readdir($dir))
{
	
	if ($file == "." or $file == ".." or $file == "index.php" or $file == "del.png" or $file == "create.php" or $file == "delete.php") 
		
	continue;	
	//echo "<a href='Dexer/Admin/$file'>$file</a><a href='delete.php?dir=$file'><img src='delete.png'></a><br>";
	//echo "<a href='$username/Admin/$file'>$file</a><a href='delete.php?dir=$file'><img src='delete.png'></a><br>";
	echo "<div align='center'><a href='../lists/$file'>$file</a><a href='listsanddocumentationsdelete.php?dir=$file'><img src='delete.png'></a></div><br>";
}
closedir($dir);


?>

<?php	
	include_once("../web-page-parts/footer.php");
?>
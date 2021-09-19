<?php
	session_start(); if ( $_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ) && $_SESSION['tag'] !="2") {
	session_start();session_destroy();die( header( 'location: LogIn.php?Empty= Action Denied. Log in again' ) );}
?>
<?php
	if ($_GET['editz']){
	session_start(); if ($_GET['editz'] != $_SESSION['User']) {
	session_start();session_destroy();die( header( 'location: LogIn.php?Empty= Action Denied. Log in again' ) );}
	}
?>


<?php 
	include_once("./web-page-parts/header.php");
	include_once("./web-page-parts/sidebar.php");
	include_once("./web-page-parts/topbar.php");
	$username = $_SESSION['User'];
	session_start();
?>
<a href="studentuploadcheck.php">Back</a>
<br>
<br>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action = "studentupload2.php" method="POST" enctype="multipart/form-data">
<!-- <input type = "file" name = "file"> -->

<!-- <input type = "text" name = "folder" autocomplete="off"> -->

<!-- <button type="submit" name = "submit"> UPLOAD </button> -->
</form>

<?php
	if (isset($_GET['editz'])) {
	$username = $_GET['editz'];
	$edit_state = true;
	}	

?>

<form action = "studentupload22.php" method="POST" enctype="multipart/form-data"> 
<input type = "file" name = "file">
		<label>Username</label>
		<input type = "text" name = "username" value = "<?php echo $_SESSION['User']; ?>" readonly>
		<button type="submit" name = "submit"> UPLOAD </button>

</form>

</body>
</html>

<?php

//$path = ".";
//$path = "Dexer/Admin/";
$path = "uploads/dex/".$username."/Student/Finance/";
$dir = opendir($path) or die ("Folder does not exist");



while($file = readdir($dir))
{
	
	if ($file == "." or $file == ".." or $file == "index.php" or $file == "del.png" or $file == "create.php" or $file == "delete.php") 
		
	continue;	
	//echo "<a href='Dexer/Admin/$file'>$file</a><a href='delete.php?dir=$file'><img src='delete.png'></a><br>";
	//echo "<a href='$username/Admin/$file'>$file</a><a href='delete.php?dir=$file'><img src='delete.png'></a><br>";
	echo "<a href='uploads/dex/$username/Student/Finance/$file'>$file</a><a href='studentuploaddelete2.php?dir=$file&username=$username'><img src='delete.png'></a><br>";
}
closedir($dir);


?>


<?php
	include_once("./web-page-parts/footer.php");
?>
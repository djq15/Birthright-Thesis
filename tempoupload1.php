<?php 
	//include_once("web-page-parts/header.php");
	//include_once("web-page-parts/sidebar.php");
	//include_once("web-page-parts/topbar.php");
	session_start();
?>
<link rel="stylesheet" type = "text/css" href = "../gradestyle.css">
<link href="./assets/css/sb-admin-2.min.css" rel="stylesheet" type="text/css" />

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action = "dexupload2.php" method="POST" enctype="multipart/form-data">
<!-- <input type = "file" name = "file"> -->

<!-- <input type = "text" name = "folder" autocomplete="off"> -->

<!-- <button type="submit" name = "submit"> UPLOAD </button> -->
</form>

<?php
/*
$db = mysqli_connect('localhost', 'root', 'ieti19', 'ieti_db');


	$username = $_GET['edit'];
	$edit_state = true;
	
	$rec = mysqli_query($db, "SELECT * FROM birthright_db.login WHERE username='$username'");	 //hit
	$record = mysqli_fetch_array($rec);
	$userid = $record['user_id'];
*/
?>
<style>
	.form {
		text-align: center;
	}

	.back {
		text-align: left;
	}
</style>


<form class="form" action = "tempoupload2.php" method="POST" enctype="multipart/form-data"> 
<a class="back" href="tempologin.php">Back</a>
<br>
<br>
<input type = "file" name = "file">
		<?php 
			$username = $_SESSION["User"];
		?>
		<label>Username</label>
		<input type = "text" name = "username" value = "<?php echo $username; ?>" readonly>
		<button type="submit" name = "submit"> UPLOAD </button>
	<br>
	<?php
	if(isset($_GET['success'])) {
		echo "File has been uploaded";
	}
	?>

</form>

</body>
</html>

<?php

//$path = ".";
//$path = "Dexer/Admin/";
//$path = "uploads/dex/".$username."/Admin/Registrar/";
//$dir = opendir($path) or die ("Folder does not exist");
//$dir = opendir($path);

/*
while($file = readdir($dir))
{
	
	if ($file == "." or $file == ".." or $file == "index.php" or $file == "del.png" or $file == "create.php" or $file == "delete.php") 
		
	continue;	
	//echo "<a href='Dexer/Admin/$file'>$file</a><a href='delete.php?dir=$file'><img src='delete.png'></a><br>";
	//echo "<a href='$username/Admin/$file'>$file</a><a href='delete.php?dir=$file'><img src='delete.png'></a><br>";
	echo "<a href='uploads/dex/$username/Admin/Registrar/$file'>$file</a><a href='delete.php?dir=$file&username=$username'><img src='delete.png'></a><br>";
}
//closedir($dir);
*/

?>


<?php
	//include_once("web-page-parts/footer.php");
?>

<?php	
	include_once("../web-page-parts/footer.php");
?>
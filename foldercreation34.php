<?php
	session_start(); if ( $_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ) && $_SESSION['tag'] !="3" && $_SESSION['tag'] !="4") {
	session_start();session_destroy();die( header( 'location: LogIn.php?Empty= Action Denied. Log in again' ) );}
?>

<?php 
	//include_once("../../web-page-parts/header.php");
	//include_once("../../web-page-parts/sidebar.php");
	//include_once("../../web-page-parts/topbar.php");
	
	
	//session_start();
	$db = mysqli_connect('localhost', 'root', 'ieti19', 'birthright_db');
	


	include_once("web-page-parts/header.php");
	include_once("web-page-parts/sidebar.php");
	include_once("web-page-parts/topbar.php");
	
	
	$Dir = "uploads/dex/".$_POST["username"]."/Student/Registrar";
	$Dirx = "uploads/dex/".$_POST["username"]."/Student/Finance";
	
	
	$Dirz = "uploads/dex/".$_POST["username"]."/Admin/Registrar";
	$Dirzx = "uploads/dex/".$_POST["username"]."/Admin/Finance";
	$announcement = $_POST["username"];

?>

<?php if ($_SESSION['tag'] =="3"){
echo "<a href='clearanceactivation3.php'>Back</a>";
}
else if ($_SESSION['tag'] =="4"){
echo "<a href='clearanceactivation4.php'>Back</a>";

}

?>
<br>
<br>
<!DOCTYPE html>
<html>
<head></head>
<body>
<?php
	if (isset($_GET['editzz'])) {
	$username = $_GET['editzz'];
	$edit_state = true;
	$res = mysqli_query($db, "SELECT * FROM birthright_db.login WHERE username = '$username' and tag='2'");
	$results = mysqli_fetch_array($res);
	}	
	
?>
<form action="" method="POST">
<input type = "text" name = "username" value = "<?php echo $username; ?>" readonly>
<button name="button" > Create Folder </button>

</form>





<?php

//$Dir = "someDirectory";
//$Dir = $_POST["username"];
//echo $results['existing_folder'];


if (isset($_POST["button"])) {
//mkdir("someFolder");
//mkdir("someFolder/nestedFolder", 0777, true); -- use this if you need to have "subfolders" inside a folder
if (!file_exists($Dir) and !file_exists($Dirz)) {

//mkdir($_POST["username"]."/Student", 0777, true); 
//mkdir($Dir, 0777, true);
mkdir($Dir, 0777, true);
mkdir($Dirx, 0777, true);

//mkdir($Dirz, 0777, true);
mkdir($Dirz, 0777, true);
mkdir($Dirzx, 0777, true);

$res = mysqli_query($db, "Update birthright_db.login SET existing_folder = 'Y' WHERE username = '$username'");

echo "Folders created";
}
else {
	$res = mysqli_query($db, "Update birthright_db.login SET existing_folder = 'Y' WHERE username = '$username'");
	echo "The directories for $announcement already exist.";
}

}

if (isset($_POST["del"])) {
?>
<form action="" method="POST">
Warning: This will delete the user folder and all its contents.
<br>
Are you sure?
<button name="yes"> Yes </button>
<button name="no"> No </button>
</form>
<?php
}
if (isset($_POST["yes"])) {

//rmdir($Dir);
//rmdir($Dirz);
//rmdir($Del);
$Del = "uploads/dex/".$username;


function removeFolder($folder) {

	
         if (is_dir($folder) === true) {
			 
			 $folderContents = scandir($folder);
			 unset($folderContents[0], $folderContents[1]);
			 
			 foreach($folderContents as $content=>$contentName) {
				 $currentPath = $folder.'/'.$contentName;

				
				 $filetype = filetype($currentPath);
				 if ($filetype == 'dir') {
					 removeFolder($currentPath);
				 }
				 else {
					 unlink($currentPath);
				 }
				 unset($folderContents[$content]);
			 }
			 rmdir($folder);
			
		 }
		 

}

removeFolder($Del); //this is the actual path 

$res = mysqli_query($db, "Update birthright_db.login SET existing_folder = 'N' WHERE username = '$username'");
echo "User folder deleted";

}

//}



?>

</body>
</html>

<?php
	//include_once("../../web-page-parts/footer.php");
	include_once("web-page-parts/footer.php");
?>
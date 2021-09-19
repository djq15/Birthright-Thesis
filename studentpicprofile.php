<?php
	session_start(); if ( $_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ) && $_SESSION['tag'] !="2") {
	session_start();session_destroy();die( header( 'location: LogIn.php?Empty= Action Denied. Log in again' ) );}
?>

<link rel="stylesheet" type = "text/css" href = "./gradestyle.css">
<link href="./assets/css/sb-admin-2.min.css" rel="stylesheet" type="text/css" />


<?php 
	$username = $_SESSION['User'];
	//$user_id = $_GET['edit'];
	$db = mysqli_connect('localhost', 'root', 'ieti19', 'birthright_db');
	$rec = mysqli_query($db, "SELECT * FROM birthright_db.login WHERE username='$username'");	
	$record = mysqli_fetch_array($rec);
	
	$status = $record['pic'];
	//$username = $record['username'];
	
	//$lastname = $record['line2'];
	//$firstname = $record['line3'];
	//$middleinitial = $record['line4'];
	//$nickname = $record['line5'];
?>




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

<form action = "studentpicprofile2.php" method="POST" enctype="multipart/form-data"> 
<a href="gradeviewingdex.php">Back</a>
<br>
<br>
<input type = "file" name = "file">
		<!-- <label>Username</label> -->
		<input type = "text" name = "username" value = "<?php echo $_SESSION['User']; ?>" readonly>
		<br>
		<br>
		<button type="submit" name = "submit"> Upload Picture</button>
</form>
<form method = "post" action = ""> 
	<input type = "hidden" name = "studentno" value = "<?php echo $studentno; ?>">
	<button type = "submit" name = "update" class = "edit_btn">Remove Picture</button>
	<input type = "text" name = "status" value = "<?php echo $status; ?>" disabled>
</form>



</body>
</html>

<?php

//$path = ".";
//$path = "Dexer/Admin/";
//$path = "../announcmentpic/";
$path = "uploads/Dex/".$username."/Pic/";
$dir = opendir($path) or die ("Folder does not exist");



while($file = readdir($dir))
{
	
	if ($file == "." or $file == ".." or $file == "index.php" or $file == "del.png" or $file == "create.php" or $file == "delete.php") 
		
	continue;	

	//echo "<a href='../announcmentpic/$file'>$file</a><a href='announcementspicdelete.php?dir=$file'><img src='delete.png'></a><br>";
	echo "<div align='center'><a href='uploads/Dex/".$username."/Pic/$file'>$file</a><a href='studentpicprofiledelete.php?dir=$file&user_id=$user_id&username=$username'><img src='delete.png'></a></div><br>";
	//echo "<a href='../announcmentpic/$file'>$file</a><br>";
}
closedir($dir);


?>



<?php 
	$studentno = $_POST['studentno'];
	$status = $_POST['statusz'];
	$lastname = $_POST['lastnamez'];	
	$firstname = $_POST['firstnamez'];
	$middleinitial = $_POST['middleinitialz'];
	$nickname = $_POST['nicknamez'];
?>
<?php
	
	if (isset($_POST['update'])) {

	//mysqli_query($db, "UPDATE birthright_db.announcement SET line1='dashpics/".$status."', line2='dashpics/".$lastname."', line3='dashpics/".$firstname."', line4='dashpics/".$middleinitial."', line5='dashpics/".$nickname."' WHERE number = '$studentno'"); //hit
	//mysqli_query($db, "UPDATE birthright_db.announcement SET line1='', line2='', line3='', line4='', line5='' WHERE number = '$studentno'"); //hit
	//mysqli_query($db, "UPDATE birthright_db.login SET pic='' WHERE user_id = '$user_id '"); //hit
	mysqli_query($db, "UPDATE birthright_db.login SET pic='' WHERE username = '$username '"); //hit
	$_SESSION['msg'] = "Details updated";	
	//header("location: studentpicprofile.php?edit=$user_id");
	header("location: studentpicprofile.php	");	
	}
	
	
?>
<!DOCTYPE html>

<html>
<head>


</head>

<body>

<?php if (isset($_SESSION['msg'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		?>
	</div>

<?php endif ?>


</body>

</html>

<?php	
	include_once("./web-page-parts/footer.php");
?>
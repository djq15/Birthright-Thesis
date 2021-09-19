<?php
	session_start(); if ( $_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ) && $_SESSION['tag'] !="1") {
	session_start();session_destroy();die( header( 'location: ../LogIn.php?Empty= Action Denied. Log in again' ) );}
?>
<link rel="stylesheet" type = "text/css" href = "../gradestyle.css">
<link href="./assets/css/sb-admin-2.min.css" rel="stylesheet" type="text/css" />
<?php 
include("topbar.php");
?>

<a href="announcements.php">Back</a>

<p align="center">Announcements 4</p>

<?php 
	$db = mysqli_connect('localhost', 'root', 'ieti19', 'birthright_db');
	$studentno = '4';
	$rec = mysqli_query($db, "SELECT * FROM birthright_db.announcement WHERE number=$studentno");	 //hit
	$record = mysqli_fetch_array($rec);
	$tagname = $record['tagname'];
	$line1 = $record['line1'];
	$line2 = $record['line2'];
	$line3 = $record['line3'];
	$line4 = $record['line4'];
	$line5 = $record['line5'];
	$line6 = $record['line6'];
	$line7 = $record['line7'];
	$line8 = $record['line8'];
	$line9 = $record['line9'];
	$line10 = $record['line10'];
	$line11 = $record['line11'];
	$line12 = $record['line12'];
?>
<?php
	if (isset($_POST['update'])) {
		
	$studentno = $_POST['studentno'];
	$tagname = addslashes($_POST['tagname']);
	$line1 = addslashes($_POST['line1']);
	$line2 = addslashes($_POST['line2']);
	$line3 = addslashes($_POST['line3']);
	$line4 = addslashes($_POST['line4']);
	$line5 = addslashes($_POST['line5']);
	$line6 = addslashes($_POST['line6']);
	$line7 = addslashes($_POST['line7']);
	$line8 = addslashes($_POST['line8']);
	$line9 = addslashes($_POST['line9']);
	$line10 = addslashes($_POST['line10']);
	$line11 = addslashes($_POST['line11']);
	$line12 = addslashes($_POST['line12']);
	
	//$grade = $_POST['grade'];
	
	
	mysqli_query($db, "UPDATE birthright_db.announcement SET tagname='$tagname', line1='$line1', line2='$line2', line3='$line3', line4='$line4', line5='$line5', line6='$line6', line7='$line7', line8='$line8', line9='$line9', line10='$line10', line11='$line11', line12='$line12' WHERE number = '$studentno'"); //hit
	$_SESSION['msg'] = "Details updated";	
	//header('location: studentprofile.php');	
	header('location: announcements4.php');	
	}
?>




<form method = "post" action = ""> 
<input type = "hidden" name = "studentno" value = "<?php echo $studentno; ?>">



	<div class = "input-group">
		<label>Tagname</label>
		<input type = "text" name = "tagname" value = "<?php echo $tagname; ?>" autocomplete="off">
	</div>
	<div class = "input-group">
		<label>Line1</label><br>
		<!-- <input type = "text" name = "line1" value = "<?php echo $line1; ?>"> -->
		<textarea type = "text" name="line1" cols="100" rows="10"><?php echo $line1; ?></textarea>
	</div>
	<div class = "input-group">
		<label>Line2</label><br>
		<!-- <input type = "text" name = "lastname" value = "<?php echo $lastname; ?>"> -->
		<textarea type = "text" name="line2" cols="100" rows="10"><?php echo $line2; ?></textarea>
	</div>
	<div class = "input-group">
		<label>Line3</label><br>
		<textarea type = "text" name="line3" cols="100" rows="10"><?php echo $line3; ?></textarea>
	</div>
	<div class = "input-group">
		<label>Line4</label><br>
		<textarea type = "text" name="line4" cols="100" rows="10"><?php echo $line4; ?></textarea>
	</div>
	<div class = "input-group">
		<label>Line5</label><br>
		<textarea type = "text" name="line5" cols="100" rows="10"><?php echo $line5; ?></textarea>
	</div>
	<div class = "input-group">
		<label>Line6</label><br>
		<textarea type = "text" name="line6" cols="100" rows="10"><?php echo $line6; ?></textarea>
	</div>
	<div class = "input-group">
		<label>Line7</label><br>
		<textarea type = "text" name="line7" cols="100" rows="10"><?php echo $line7; ?></textarea>
	</div>
	<div class = "input-group">
		<label>Line8</label><br>
		<textarea type = "text" name="line8" cols="100" rows="10"><?php echo $line8; ?></textarea>
	</div>
	<div class = "input-group">
		<label>Line9</label><br>
		<textarea type = "text" name="line9" cols="100" rows="10"><?php echo $line9; ?></textarea>
	</div>
	<div class = "input-group">
		<label>Line10</label><br>
		<textarea type = "text" name="line10" cols="100" rows="10"><?php echo $line10; ?></textarea>
	</div>
	<div class = "input-group">
		<label>Line11</label><br>
		<textarea type = "text" name="line11" cols="100" rows="10"><?php echo $line11; ?></textarea>
	</div>
	<div class = "input-group">
		<label>Line12</label><br>
		<textarea type = "text" name="line12" cols="100" rows="10"><?php echo $line12; ?></textarea>
	</div>


	
	<div class = "input-group">

			<!--<button type = "submit" name = "update" class = "btn">Update</button>-->
			<br><button type = "submit" name = "update" class = "edit_btn">Update</button>
	

	</div>	
</form>

<?php	
	include_once("../web-page-parts/footer.php");
?>
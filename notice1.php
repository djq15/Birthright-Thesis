<?php 
	include_once("./web-page-parts/header.php");
	include_once("./web-page-parts/sidebar.php");
	include_once("./web-page-parts/topbar.php");
?>


<?php 
session_start();

$currentUser = $_SESSION['User'];
$db = mysqli_connect('localhost', 'root', 'ieti19', 'ieti_db');

$results = mysqli_query($db, "SELECT * FROM login where username='$currentUser'");

if ($row=mysqli_fetch_array($results)) {
	if ($row['tag'] == '2' and $row['evaluation_submit'] != 'Y' and $row['clearance_approve'] != 'Y'){
		
	echo "To view your grades please make sure:<br>"; 

	echo "1. You have completed the faculty evaluation<br>"; 

	echo "2. Your professor has approved your clearance";

	}

	else if ($row['tag'] == '2' and $row['evaluation_submit'] == 'Y' and $row['clearance_approve'] != 'Y'){
	echo "To view your grades please make sure your professor has approved your clearance"; 
	mysqli_query($db, "UPDATE login SET `clearance_approve`='$clearance_approve' WHERE `username` = '$username'");
		
	}
	else if ($row['tag'] == '2' and $row['evaluation_submit'] != 'Y' and $row['clearance_approve'] == 'Y'){
	echo "To view your grades please make sure you have completed your faculty evaluation"; 

		
	}

	else if ($row['tag'] == '2' and $row['clearance_approve'] != 'Y'){
	echo "To view your grades please make sure your professor has approved your clearance"; 
	}

	
	else 
	header('location: gradeviewing.php');
	
}


		if ($_SESSION['User'] == 'Dexer' or $_SESSION['User'] == 'dexer') {
		
		echo '<br>';
		//echo '<a href = "uploads/Dex/dexattach.php"> Attachment link </a>';
		//echo '<a href = "uploads/Dex/dexattach.php"> Attachment link </a>';
		include('uploads/Dex/dexattach.php');
		
		}
		
		
		else if ($_SESSION['User'] == 'Danil' or $_SESSION['User'] == 'danil') {
		
		echo '<br>';
		include('uploads/Danil/danilattach.php');
		
		}
		
		else if ($_SESSION['User'] == 'Manny' or $_SESSION['User'] == 'manny') {
		
		echo '<br>';
		include('uploads/Manny/mannyattach.php');
		
		}
		

		



?>

<!--testing-->




<!--testing-->

<?php
	include_once("./web-page-parts/footer.php");
?>
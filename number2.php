<?php 
	include_once("./web-page-parts/header.php");
	include_once("./web-page-parts/sidebar.php");
	include_once("./web-page-parts/topbar.php");
?>

<?php 

	$db = mysqli_connect('localhost', 'root', 'ieti19', 'birthright_db');
	
	$num1 = mysqli_query($db, "SELECT * FROM birthright_db.announcement WHERE number='2'");	 
	$number1 = mysqli_fetch_array($num1);
?>

<?php 
	if ($_SESSION['tag'] == '2') {
	//echo 'href="./dash.php">';  
	echo '<a href="dash.php"> Back to dashboard</a>';
	}
	else {
	echo '<a href="dash2.php"> Back to dashboard</a>'; 	
	}
?>
<br>
<br>
	
	
<?php
	
	echo $number1['line1'];
	echo '<br>';
	echo $number1['line2'];
	echo '<br>';
	echo $number1['line3'];
	echo '<br>';
	echo $number1['line4'];
	echo '<br>';
	echo $number1['line5'];
	echo '<br>';
	echo $number1['line6'];
	echo '<br>';
	echo $number1['line7'];
	echo '<br>';
	echo $number1['line8'];
	echo '<br>';
	echo $number1['line9'];
	echo '<br>';
	echo $number1['line10'];
	echo '<br>';
	echo $number1['line11'];
	echo '<br>';
	echo $number1['line12'];
	echo '<br>';
?>


<?php
	include_once("./web-page-parts/footer.php");
?>
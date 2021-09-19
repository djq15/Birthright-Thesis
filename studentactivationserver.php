<?php

session_start();
$studentid = 0;
$firstname = "";
$lastname = "";
$grade = 0;
$username = "";
$clearance_approve = "";
$edit_state = false;


$db = mysqli_connect('localhost', 'root', 'ieti19', 'birthright_db');

if (isset($_POST['save'])) {
	$studentid = $_POST['studentid'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$grade = $_POST['grade'];	

	$query = "INSERT INTO grades (student_id, first_name, last_name, grade) VALUES ('$studentid', '$firstname', '$lastname', '$grade')";
	mysqli_query($db, $query);
	//mysqli_query($db, "INSERT INTO grades (student_id, first_name, last_name, grade) VALUES ('$studentid', '$firstname', '$lastname', '$grade')");
	$_SESSION['msg'] = "Details saved";
	header('location: gradesubmission.php');
}

//testing
	if (isset($_POST['update']) and ($_POST['clearance_approve']) == "Y") {

	$username = $_POST['username'];
	$rec = mysqli_query($db, "SELECT * FROM login WHERE username='$username'");	
	$record = mysqli_fetch_array($rec);
	$user_id = $record['user_id'];
	
	$tuition = $_POST['tuition'];
	$downpayment = $_POST['downpayment'];
	$clearance_approve = $_POST['clearance_approve'];
	
	$net = ($_POST['tuition'] - $_POST['downpayment']); 
	$bal = $net / 9;
	

	mysqli_query($db, "UPDATE login SET `clearance_approve`='$clearance_approve' WHERE `username` = '$username'");
	mysqli_query($db, "UPDATE accounts SET downpayment='$downpayment', total_tuition='$tuition', balance='$net', monthly_payment='$bal' WHERE `student_id` = '$user_id'");
	
	//mysqli_query($db, "UPDATE login, accounts SET `clearance_approve`='$clearance_approve', downpayment='$downpayment', tuition='$tuition' WHERE `username` = '$username'");
	//mysqli_query($db, "UPDATE login, accounts SET `clearance_approve`='$clearance_approve', downpayment='$downpayment', tuition='$tuition', balance='$net', monthly_payment='$bal' WHERE `username` = '$username'");

	
	//$edit_state = true; //might use again
	//$rec = mysqli_query($db, "SELECT * FROM birthright_db.login WHERE username='$username'");	//might use again
	//$rec = mysqli_query($db, "SELECT * FROM birthright_db.login, birthright_db.accounts, birthright_db.masterlist WHERE username='$username' and username='first_name'");	//might use again
	//$record = mysqli_fetch_array($rec); //might use again
	//$user_id = $record['user_id'];
		
	
	//Mass testing !!!
	?>
	
<?php 

	
	
	//session_start();
	$db = mysqli_connect('localhost', 'root', 'ieti19', 'birthright_db');
	


	include_once("web-page-parts/header.php");
	include_once("web-page-parts/sidebar.php");
	include_once("web-page-parts/topbar.php");
	
	$Pic = "uploads/dex/".$_POST["username"]."/Pic";
	
	$Dir = "uploads/dex/".$_POST["username"]."/Student/Registrar";
	$Dirx = "uploads/dex/".$_POST["username"]."/Student/Finance";
	
	
	$Dirz = "uploads/dex/".$_POST["username"]."/Admin/Registrar";
	$Dirzx = "uploads/dex/".$_POST["username"]."/Admin/Finance";
	$announcement = $_POST["username"];

?>

<!DOCTYPE html>
<html>
<head></head>
<body>


<?php

//$Dir = "someDirectory";
//$Dir = $_POST["username"];
//echo $results['existing_folder'];



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

mkdir($Pic, 0777, true);

$res = mysqli_query($db, "Update birthright_db.login SET existing_folder = 'Y' WHERE username = '$username'");

echo "Folders created";
}
else {
	$res = mysqli_query($db, "Update birthright_db.login SET existing_folder = 'Y' WHERE username = '$username'");
	echo "The directories for $announcement already exist.";
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

	//Mass testing !!!
		
		
	
	$_SESSION['msg'] = "Details updated";	
	//mysqli_query($db, "UPDATE login SET `clearance_approve`='$clearance_approve' WHERE `username` = '$username'");
	
	//$_SESSION['msg'] = $user_id;
	header('location: studentclearanceactivation.php');


	}	
//testing





	else if (isset($_POST['update']) and ($_POST['clearance_approve']) == "N") {

	$username = $_POST['username'];
	$clearance_approve = $_POST['clearance_approve'];

	mysqli_query($db, "UPDATE login SET `clearance_approve`='$clearance_approve' WHERE `username` = '$username'");
	//$results = mysqli_query($db, "SELECT * FROM login where username='$currentUser'");
	//if ($row=mysqli_fetch_array($results)) {
	//if ($row['tag'] == '1'){

	//mysqli_query($db, "UPDATE grades, login SET `grade`='4' WHERE `username` = '$username' and `username` = `first_name`");
	mysqli_query($db, "UPDATE grades, login SET `prelim`='4', `midterm`='4', `final`='4' WHERE `username` = '$username' and `username` = `first_name`");
	//}
	//}
	$_SESSION['msg'] = "Details updated";	
	header('location: studentclearanceactivation.php');	
	//mysqli_query($db, "UPDATE grades, login SET `grade`='4.0' WHERE `username` = '$username' and `username` = `first_name`");
	//echo "bitch";

	}	
	
	else if (isset($_POST['update']) and ($_POST['clearance_approve']) == "default") {
	header('location: studentclearanceactivation.php');		
	}	
		

	if (isset($_GET['del'])) {
	$studentid = $_GET['del'];
	
	mysqli_query($db, "DELETE FROM grades WHERE student_id = $studentid");
	$_SESSION['msg'] = "Details deleted";
	header('location: gradesubmission.php');	
	}	


	
	$results = mysqli_query($db, "SELECT * FROM login WHERE tag='2' AND existing_folder='N' OR verified='0'");
	//$results = mysqli_query($db, "SELECT * FROM login, accounts, masterlist WHERE username=first_name AND first_name=First_name");
	


?>
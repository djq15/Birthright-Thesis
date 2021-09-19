<?php
//session_start();

$servername='localhost';
$user='root';
$password='ieti19';
$db='birthright_db';

$conn = new mysqli($servername, $user, $password, $db);
if(!$conn){
	die ("Error on the connection" .$conn->connect_error);
}

$user_id = $_GET['del_id'];
$student_no = $_GET['del_idx'];
$student_id = $_GET['del_idz'];

$select = "DELETE from birthright_db.login where user_id='".$_GET['del_id']."'";
$selectx = "DELETE from birthright_db.masterlist where Student_No='".$_GET['del_id']."'";
$selectz = "DELETE from birthright_db.accounts where student_id='".$_GET['del_id']."'";

//$select = "DELETE from birthright_db.login where user_id='$user_id'";
//$selectx = "DELETE from birthright_db.masterlist where Student_No='$student_no '";
//$selectz = "DELETE from birthright_db.accounts where student_id='$student_id'";


$query = mysqli_query($conn, $select) or die($select);
$query = mysqli_query($conn, $selectx) or die($selectx);
$query = mysqli_query($conn, $selectz) or die($selectz);
header("location:studentclearanceactivation.php");

?>	



		
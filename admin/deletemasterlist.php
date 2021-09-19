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

$select = "DELETE from birthright_db.masterlist where Student_No='".$_GET['del_id']."'";
$query = mysqli_query($conn, $select) or die($select);
header("location:editmasterlist.php");

?>	



		
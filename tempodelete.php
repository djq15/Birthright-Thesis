<?php


//$dir = $_GET['dir'];
//$dir = $username."/Admin/".$_GET['dir'];
//$name = "Dexer";
$username = $_GET['username'];
//$dir = "uploads/dex/".$username."/Admin/Registrar/".$_GET['dir'];
$dir = "uploads/Tempo/".$_GET['dir'];


unlink($dir);
rmdir($dir);

//header("location: dexupload1.php?editz=echo $row['username'];");
header("location: preenrollment2.php");
//echo $_GET['dir'];
//echo $_GET['username'];



?>
<?php


//$dir = $_GET['dir'];
//$dir = $username."/Admin/".$_GET['dir'];
//$name = "Dexer";
$username = $_GET['username'];
//$dir = $username."/Admin/".$_GET['dir'];
$dir = "uploads/dex/".$username."/Student/Finance/".$_GET['dir'];

unlink($dir);
rmdir($dir);

//header("location: dexupload1.php?editz=echo $row['username'];");
header("location: studentupload11.php?editz=$username");
//echo $_GET['dir'];
//echo $_GET['username'];

?>
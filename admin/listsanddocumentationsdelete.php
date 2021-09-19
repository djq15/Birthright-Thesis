<?php


//$dir = $_GET['dir'];
//$dir = $username."/Admin/".$_GET['dir'];
//$name = "Dexer";
$username = $_GET['username'];
$dir = "../lists/".$_GET['dir'];


unlink($dir);
rmdir($dir);

//header("location: dexupload1.php?editz=echo $row['username'];");
header("location: listsanddocumentations.php");
//echo $_GET['dir'];
//echo $_GET['username'];



?>



		
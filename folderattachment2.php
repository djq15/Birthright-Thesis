<?php
	session_start(); if ( $_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ) && $_SESSION['tag'] !="2") {
	session_start();session_destroy();die( header( 'location: LogIn.php?Empty= Action Denied. Log in again' ) );}
?>

<?php 
	include_once("./web-page-parts/header.php");
	include_once("./web-page-parts/sidebar.php");
	include_once("./web-page-parts/topbar.php");
?>
<a href="folderattachmentcheck.php">Back</a>

<?php



session_start();

$msg = "";

//if($handle = opendir('uploads/dex/Dexer.')){
//if($handle = opendir('uploads/dex/'.$_SESSION["User"])){
if($handle = opendir('uploads/dex/'.$_SESSION["User"].'/Admin/Finance')){	
 while (false !== ($file = readdir($handle)))
 {
 if (($file != ".")
 && ($file != ".."))
 {
//$msg .= '<li><a href="'.$file.'">'.$file.'</a></li>';
//$msg .= '<li><a href="uploads/dex/Dexer/'.$file.'">'.$file.'</a></li>';
//$msg .= '<li><a href="uploads/dex/'.$_SESSION["User"].'/'.$file.'">'.$file.'</a></li>';
$msg .= '<li><a href="uploads/dex/'.$_SESSION["User"].'/Admin/Finance/'.$file.'">'.$file.'</a></li>';
 }
 }
 closedir($handle);
}


?>



<!doctype html>
    <html>
 
    <head>
        <title>SoftAOX | List files and directories inside the specified path in PHP</title>
    </head>
 
    <body>
        <h2></h2>
        <p>Attachment/s:</p>
        <ul>
            <p>
                <?php echo $msg; 
				//echo $_SESSION['User'];?>
            </p>
        </ul>
    </body>
 
    </html>
	
<?php
	include_once("./web-page-parts/footer.php");
?>





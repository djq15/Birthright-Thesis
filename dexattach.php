<?php 
	include_once("./web-page-parts/header.php");
	include_once("./web-page-parts/sidebar.php");
	include_once("./web-page-parts/topbar.php");
?>


<?php



session_start();

$msg = "";
if($handle = opendir('uploads/dex/files.')){
 while (false !== ($file = readdir($handle)))
 {
 if (($file != ".")
 && ($file != ".."))
 {
//$msg .= '<li><a href="'.$file.'">'.$file.'</a></li>';
$msg .= '<li><a href="uploads/dex/files/'.$file.'">'.$file.'</a></li>';
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
                <?php echo $msg ?>
            </p>
        </ul>
    </body>
 
    </html>
	
<?php
	include_once("./web-page-parts/footer.php");
?>





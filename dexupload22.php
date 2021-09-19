<?php
 
session_start();
$username = $_POST['username'];


if (isset($_POST['submit'])) {
	$file = $_FILES['file'];
	
	$fileName = $_FILES['file']['name'];
	$fileTmpName = $_FILES['file']['tmp_name'];
	$fileSize = $_FILES['file']['size'];
	$fileError = $_FILES['file']['error'];
	$fileType = $_FILES['file']['type'];
	
	$fileExt = explode('.', $fileName);
	$fileActualExt = strtolower(end($fileExt));
	//$file_attach = "Dexer/";
	//$file_attach = "/";
	$file_attach = "/Admin/Finance/";
	
	//$allowed = array('jpg', 'jpeg', 'png', 'pdf', 'docx', 'txt', 'mp4', 'mp3', 'gif');
	//if (in_array($fileActualExt, $allowed )) {
		if ($fileError === 0) {
			//if ($fileSize < 100000000) {
				//ini_set('upload_max_filesize', '100M');
				$fileNameNew = uniqid('', true).".".$fileActualExt;
				//$fileDestination = 'files/'.$fileNameNew;
				//$fileDestination = $file_attach.$fileName;	
				//$fileDestination = $_POST["folder"].$file_attach.$fileName;
				$fileDestination = "uploads/dex/".$_POST["username"].$file_attach.$fileName;
				
				move_uploaded_file($fileTmpName, $fileDestination);
				//header("location: ../../clearanceactivation.php?uploadsuccess");
				header("location: dexupload11.php?editz=$username");
				//echo $_POST["folder"];
				

			//}
			//else {
				//echo "file must be less than 100 MB";
			//}	
		}	
		else {
			echo "error uploading file";
			}	
	//}	
	
	//else {
		//echo "invalid file type";
		//}
	
	//$fileName = $file['file']
}
?>
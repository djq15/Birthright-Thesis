<?php
 
session_start();
$username = $_POST['username'];

	$db = mysqli_connect('localhost', 'root', 'ieti19', 'birthright_db');
	$rec = mysqli_query($db, "SELECT * FROM birthright_db.login WHERE username='$username'");	 //hit
	$record = mysqli_fetch_array($rec);
	$user_id = $record['user_id'];
	$status = $record['pic'];
	//$lastname = $record['line2'];
	//$firstname = $record['line3'];
	//$middleinitial = $record['line4'];
	//$nickname = $record['line5'];

	//$dir = "../".$status;
	//unlink($dir);
	//rmdir($dir);
	//echo $dir;
	
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
	$file_attach = "uploads/dex/".$username."/Pic/";
	
	//$allowed = array('jpg', 'jpeg', 'png', 'pdf', 'docx', 'txt', 'mp4', 'mp3', 'gif');
	//if (in_array($fileActualExt, $allowed )) {
		if ($fileError === 0) {
			
			//$dir = "../".$status;
			$dir = $status;
			unlink($dir);
			rmdir($dir);
			//if ($fileSize < 100000000) {
				//ini_set('upload_max_filesize', '100M');
				$fileNameNew = uniqid('', true).".".$fileActualExt;
				//$fileDestination = '../dashpics/'.$fileNameNew;
				//$fileDestination = $file_attach.$fileName;	
				//$fileDestination = $_POST["folder"].$file_attach.$fileName;
				//$fileDestination = $file_attach.$fileName;
				//$fileDestination = $file_attach.'PIC1';
				$fileDestination = $file_attach.$fileNameNew;
				//$tag = "PIC1";
				$tag = $fileDestination;
				move_uploaded_file($fileTmpName, $fileDestination);
				//header("location: ../../clearanceactivation.php?uploadsuccess");
				//header("location: studentpicprofile.php?edit=$user_id");
				echo '<form action="studentpicprofile.php" method="POST" id="myForm">';
				echo '</form>';
				?> 
				<script>
				window.onload=function() { 
				document.getElementById("myForm").submit(); 
				}
				</script>
				<?php
				//echo $_POST["folder"];
				//echo $fileName;
			$studentno = "6";
			$db = mysqli_connect('localhost', 'root', 'ieti19', 'birthright_db');
			mysqli_query($db, "UPDATE birthright_db.login SET pic='uploads/dex/".$username."/Pic/".$fileNameNew."' WHERE user_id = '$user_id'"); //hit

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
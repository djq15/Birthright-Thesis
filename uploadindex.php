<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action = "upload2.php" method="POST" enctype="multipart/form-data">
<input type = "file" name = "file">
<button type="submit" name = "submit"> UPLOAD </button>
</form>
</body>
</html>


<?php

session_start();

$db = mysqli_connect('localhost', 'root', 'ieti19', 'ieti_db');

		$results = mysqli_query($db, "SELECT * FROM login WHERE tag='2'");

?>
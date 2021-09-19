<?php 
	include_once("./web-page-parts/header.php");
	include_once("./web-page-parts/sidebar.php");
	include_once("./web-page-parts/topbar.php");
?>


<!DOCTYPE html>

<html>
<head>
	<link rel="stylesheet" type = "text/css" href = "gradestyle.css">
</head>

<body>

<?php if (isset($_SESSION['msg'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		?>
	</div>

<?php endif ?>








	
<form method = "post" action = "evalserver.php">

	<div class = "input-group">
		<label>Evaluation</label>
		<input type = "number" name = "evaluation_grade" value = "<?php echo $evaluation_grade; ?>">
	</div>

		<button type = "submit" name = "evaluation_submit" class = "btn">Submit</button>
</form>

</body>

</html>







<?php
	include_once("./web-page-parts/footer.php");
?>
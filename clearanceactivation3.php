<?php
	session_start(); if ( $_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ) && $_SESSION['tag'] !="3") {
	session_start();session_destroy();die( header( 'location: LogIn.php?Empty= Action Denied. Log in again' ) );}
?>

<?php 
	include_once("web-page-parts/header.php");
	include_once("web-page-parts/sidebar.php");
	include_once("web-page-parts/topbar.php");
?>
<a href="dash2.php"> Back to dashboard</a>
<?php 


	include('activationserver.php'); 


	if (isset($_GET['edit'])) {
	$username = $_GET['edit'];
	$edit_state = true;
	
	//$rec = mysqli_query($db, "SELECT * FROM login WHERE username=$username");	
	//$record = mysqli_fetch_array($rec);
	//$clearance_approve = $record['clearance_approve'];
	//$lastname = $record['last_name'];
	//$grade = $record['grade'];		
	}	

?>
<!DOCTYPE html>

<html>
<head>
	<link rel="stylesheet" type = "text/css" href = "./assets/css/gradestyle.css">
	<!--<link rel="stylesheet" type = "text/css" href = "gradestyle.css">-->
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


<table>

	<thead>
		<tr>
			<th>Username&nbsp;&nbsp;&nbsp;</th>
			<th>First&nbsp;pname&nbsp;&nbsp;&nbsp;</th>
			<th>Last&nbsp;name&nbsp;&nbsp;&nbsp;</th>
			<th>Existing&nbsp;Folder&nbsp;&nbsp;&nbsp;</th>
			<th colspan="2">Action</th>
		</tr>
	</thead>
	<tbody>
		<?php while ($row = mysqli_fetch_array($results)) { ?>
		<tr>
		
			<td><?php echo $row['username']; ?> </td>
			<td><?php echo $row['First_name']; ?> </td>
			<td><?php echo $row['Last_name']; ?> </td>
			<td><?php echo $row['existing_folder']; ?> </td>

			<td>
				<a class = "edit_btn" href="dexupload1.php?editz=<?php echo $row['username']; ?>">Upload</a> 

			</td>
			<td>
				<!-- <a class = "edit_btn" href="studentfolder.php?editz=<?php echo $row['username']; ?>">Student File</a> -->
				<a class = "edit_btn" href="studentfolder.php?editz=<?php echo $row['username']; ?>">Student&nbsp;File</a>
			</td>
			<td>
				<a class = "edit_btn"  href="foldercreation34.php?editzz=<?php echo $row['username']; ?>"><img src='settings.jpg'></a>
			</td>
			
			<!--<td>

				<a class = "edit_btn" href="uploadindex.php?edit=<?php echo $row['username']; ?>">Upload</a>

			</td>-->
			
			<!--<td>

				<a href="uploads">folder</a>

			</td>-->

		</tr>
	
		<?php } ?> 
	</tbody>
</table>
	
<!-- <form method = "post" action = "activationserver.php"> -->




</body>

</html>







<?php
	include_once("web-page-parts/footer.php");
?>
<?php
	session_start(); if ( $_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ) && $_SESSION['tag'] !="1" && $_SESSION['tag'] !="3") {
	session_start();session_destroy();die( header( 'location: LogIn.php?Empty= Action Denied. Log in again' ) );}
?>


<?php 
	include_once("./web-page-parts/header.php");
	include_once("./web-page-parts/sidebar.php");
	include_once("./web-page-parts/topbar.php");
?>
<a href="dash2.php"> Back to dashboard</a>
<?php 


	include('studentactivationserver.php'); 


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
		<tr class="what">
			<th>User ID</th>
			<th>Username</th>
			<th>Existing Folder</th>
			<th>Email Verification</th>
			<th colspan="2">Action</th>
		</tr>
		<style>
			.what {
			font-size: 16px;	
			}
		</style>
	</thead>
	<tbody>
		<?php while ($row = mysqli_fetch_array($results)) { ?>
		<tr>

			<td><?php echo $row['user_id']; ?> </td>
			<td><?php echo $row['username']; ?> </td>
			<td><?php echo $row['existing_folder']; ?> </td>
			<td><?php echo $row['verified']; ?> </td>
			
			
			<td>
				<!-- <a class = "edit_btn" href="studentclearanceactivation.php?edit=<?php echo $row['username']; ?>">Edit</a> -->
			</td>
			<td>
				<a class = "edit_btn" href="javascript:deleteme('<?php echo $row['user_id']; ?>')" name="delete">Delete</a> <!-- hit -->
			</td>
	<script>
		function deleteme(delid)
		{
		if (confirm('Warning, this will delete all records in databases login, masterlist and accounts. Do you want to delete user id, student no. and student id "'+delid+'" ?')){
			window.location.href='deleterecords.php?del_id=' +delid+'';
			//window.location.href='deleterecords.php?del_id=' +delid+'&del_idx=' +delid+'&del_idz=' +delid+'';
			return true;
		}
		}
	</script>
			
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
<!--
<form method = "post" action = "studentactivationserver.php">
<input type = "hidden" name = "username" value = "<?php echo $username; ?>">

	<div class = "input-group">
		<label>Username</label>
		
				<select name="clearance_approve" value = "<?php echo $clearance_approve; ?>">
				<option value="default">Choose</option>
				<option value="Y">Approve</option>
				<option value="N">Decline</option>

	</div>

	<div class = "input-group">
		<label>Username ID</label>
		<input type = "text" name = "username" value = "<?php echo $username; ?>" readonly>
	</div>
	
	<div class = "input-group">
		<label>Tuition</label>
		<input type = "number" name = "tuition" autocomplete="off" required/>
	</div>
	
	<div class = "input-group">
		<label>Downpayment</label>
		<input type = "number" name = "downpayment" autocomplete="off" required/>
	</div>
	
	
	<div class = "input-group">

		<button type = "submit" name = "update" class = "btn">Update</button>
		

	</div>	
</form>
-->


</body>

</html>







<?php
	include_once("./web-page-parts/footer.php");
?>
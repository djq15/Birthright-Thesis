<style>

.table{
	font-family: sans-serif;
	border-collapse: collapse;
	font-size: 16px;
	background-color:white;
	
	display: block;
    overflow-x: auto;
    white-space: nowrap;
}

.table th,
.table td {
	padding: 10px;
	border: 1px solid #cccccc;	
	background-color:white;
}

.table th {
	background: #888888;
	color: #ffffff;
}

.table.sticky th {
	position: sticky;
	top: 0;
}

</style>

<?php
	session_start(); if ( $_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ) && $_SESSION['tag'] !="2") {
	session_start();session_destroy();die( header( 'location: LogIn.php?Empty= Action Denied. Log in again' ) );}
?>


<?php 
	include_once ("./web-page-parts/header.php");
	include_once ("./web-page-parts/sidebar.php");
	include_once ("./web-page-parts/topbar.php");
?>
<a href="dash.php"> Back to dashboard</a>


<!--   LINE  (ENG 101)  -->


<?php 

include('gradeserverclass2.php'); 
	$Sub1 = new Sub1();
	$Link1 = $Sub1->Subject1();		
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

<table class="table sticky">
	<thead>

		<tr>

			<th>Student&nbsp;ID</th>
			<th>First&nbsp;name</th>
			<th>Last&nbsp;name</th>
			<th>Tuition</th>	
			<th>Downpayment</th>	
			<th>Month1</th>
			<th>Month2</th>
			<th>Month3</th>
			<th>Month4</th>
			<th>Month5</th>
			<th>Month6</th>
			<th>Month7</th>
			<th>Month8</th>
			<th>Month9</th>
			<th>Balance</th>
			<th>Monthly&nbsp;Payment</th>
		</tr>
	</thead>
	<tbody>
		<?php //while ($row = mysqli_fetch_array($results)) { ?> 
			<?php while($row = $Link1->fetch_assoc()){ ?>
		<tr>

			<td><?php echo $row['student_id']; ?> </td>
			<td><?php echo $row['first_name']; ?> </td>
			<td><?php echo $row['last_name']; ?> </td>
			<td><?php echo $row['total_tuition']; ?> </td>
			<td><?php echo $row['downpayment']; ?> </td>
			<td><?php echo $row['month1']; ?> </td>
			<td><?php echo $row['month2']; ?> </td>
			<td><?php echo $row['month3']; ?> </td>
			<td><?php echo $row['month4']; ?> </td>
			<td><?php echo $row['month5']; ?> </td>
			<td><?php echo $row['month6']; ?> </td>
			<td><?php echo $row['month7']; ?> </td>
			<td><?php echo $row['month8']; ?> </td>
			<td><?php echo $row['month9']; ?> </td>
			<td><?php echo $row['balance']; ?> </td>
			<td><?php echo $row['monthly_payment']; ?> </td>
			
			
			

			
			<!-- <td><?php echo 1 + 1?> </td> -->
			
			<!--<td><?php echo $row['username']; ?> </td>-->
			<!--<td><?php echo $row['password']; ?> </td>-->
			<!--<td><?php echo $row['tag']; ?> </td>-->

		</tr>

		<?php } ?> 
		
	</tbody>
</table>






<!--   LINE   IT 101 -->





<!--   LINE    -->



<!--   LINE   IT 201 -->



		
		
		



	</tbody>

</table>


<!--   LINE    -->

			



</body>

</html>







<?php
	include_once("./web-page-parts/footer.php");
?>
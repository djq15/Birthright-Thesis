<?php 
	include("filter.php");

	$db = mysqli_connect('localhost', 'root', 'ieti19', 'birthright_db');
?>
<?php

	$studentid = $_GET['edit'];
	$edit_state = true;
	$rec = mysqli_query($db, "SELECT * FROM birthright_db.accounts WHERE student_id=$studentid");	 //hit
	$record = mysqli_fetch_array($rec);
	//echo $record['student_id'];
	//echo $record['first_name'];

?>

<!DOCTYPE html>

<html>
<head>
	<link rel="stylesheet" type = "text/css" href = "gradestyle.css">
	<link rel="stylesheet" type = "text/css" href = "soa.css">
</head>

<body>

<div>
			<td><button onclick="window.print();" class="btn btn-primary" id="print-btn">Print</button></td>
			<table><link rel="stylesheet" type="text/css" href="print.css" media="print"></table>
			<td><link rel="stylesheet" type="text/css" href="print.css" media="print"></td>
</div>


	
<!-- image test -->

<tr>
<img class="pic" src="./birthright SOA banner logo.png" /> 
</tr> 
<br>



			
</body>

	<div class="SOA-banner">STATEMENT OF ACCOUNT</div>
	<br>
	
	<div class="SOA-banner">Student ID: <?php echo $record['student_id']; ?></div>
	<div class="SOA-banner">Student Name: <?php echo $record['first_name']; echo " "; echo $record['last_name']?></div>
	<br>
	<p>Dear Parents,</p>
	<p>Good day!  Thank you very much for entrusting your child to us this school year.  We are looking forward to a fruitful year in educating your child.
	Below is the statement of account and proposed schedule of payments for the school year.</p>

	
	<p class="payment">Payment History:</p>

	
	<table>
		<thead>
		<tr class="body-text">
		
			<th>Tuition</th>	
			<th>Downpayment</th>	
			<th>month1</th>	
			<th>month2</th>	
			<th>month3</th>	
			<th>month4</th>	
			<th>month5</th>	
			<th>month6</th>	
			<th>month7</th>	
			<th>month8</th>	
			<th>month9</th>	
			<th>Balance</th>
			<th>Totaly Payment</th>
			
		</tr>
		<thead>
		
		<tbody>
		<tr class="body-text">
			<td><?php echo $record["total_tuition"]; ?></td>
			<td><?php echo $record["downpayment"]; ?></td>
			<td><?php echo $record["month1"]; ?></td>
			<td><?php echo $record["month2"]; ?></td>
			<td><?php echo $record["month3"]; ?></td>
			<td><?php echo $record["month4"]; ?></td>
			<td><?php echo $record["month5"]; ?></td>
			<td><?php echo $record["month6"]; ?></td>
			<td><?php echo $record["month7"]; ?></td>
			<td><?php echo $record["month8"]; ?></td>
			<td><?php echo $record["month9"]; ?></td>
			<td><?php echo $record["balance"]; ?></td>
			<td><?php echo $record["total_payment"]; ?></td>
		</tr>
		</tbody>
	</table>
	
	<div class="SOA-banner">Amount to pay this month: <?php  echo $record["monthly_payment"]; ?></div>
	<br>
	
	<p>Please keep this letter as your reference for any inquiry regarding this account.If you have questions or clarifications, please feel free to call or drop by the office and look for Teacher Val.</p>
	<p>Thank you.</p>
	<br>
	<p class="FO-title">Ms. Eva Jocelyn S. Cervantes</p>
	
	<p>Assistant Directress / Finance Officer</p>
	<br>
<tr>
	<img class="pic2" src="./Finance officer signature logo.png" /> 
</tr> 

	
</html>

<script type="text/javascript">
<?php if(isset($_GET['print'])) { ?>
window.print();
<?php } ?>
</script>







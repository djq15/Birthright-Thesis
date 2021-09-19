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

	
	<p class="payment"><?php if ($record["late_payment1"] =='0' and $record["late_payment2"] =='0' and $record["late_payment3"] =='0' and $record["late_payment4"] =='0' and $record["late_payment5"] =='0'){echo '';} else {echo 'Payment History:';} ?></p>

	
	<table>
		<thead>
		<tr class="body-text">
		
			
			<th><?php if ($record["late_payment1"] !='0'){echo 'Payment1';} ?></th>	
			<th><?php if ($record["late_payment2"] !='0'){echo 'Payment2';} ?></th>	
			<th><?php if ($record["late_payment3"] !='0'){echo 'Payment3';} ?></th>		
			<th><?php if ($record["late_payment4"] !='0'){echo 'Payment4';} ?></th>	
			<th><?php if ($record["late_payment5"] !='0'){echo 'Payment5';} ?></th>		

			
		</tr>
		<thead>
		
		<tbody>
		<tr class="body-text">
			
			<td><?php if ($record["late_payment1"] !='0'){echo $record["late_payment1"];} ?></td>
			<td><?php if ($record["late_payment2"] !='0'){echo $record["late_payment2"];} ?></td>
			<td><?php if ($record["late_payment3"] !='0'){echo $record["late_payment3"];} ?></td>
			<td><?php if ($record["late_payment4"] !='0'){echo $record["late_payment4"];} ?></td>
			<td><?php if ($record["late_payment5"] !='0'){echo $record["late_payment5"];} ?></td>
			
		</tr>
		</tbody>
	</table>
	
	<div class="SOA-banner">Tuition: <?php  echo $record["total_tuition"]; ?></div> 
	<div class="SOA-banner">Totaly Payment: <?php  echo $record["total_payment"]; ?></div>
	<div class="SOA-banner">Balance: <?php  echo $record["balance"]; ?></div>
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







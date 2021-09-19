<style>

.table{
	font-family: sans-serif;
	border-collapse: collapse;
	font-size: 16px;
	background-color:white;
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
function fetch_data(){
$output = '';
$connect = mysqli_connect("localhost", "root", "ieti19", "birthright_db");

//$results = "SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, balance, monthly_payment, late_payer, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and verified='1' and tag = '2'";
$results = "SELECT * FROM birthright_db.masterlist, birthright_db.login, birthright_db.accounts where verified='1' and tag = '2' and Status='Enrolled' and user_id=student_id and user_id=Student_No and student_id=Student_No";


$result = mysqli_query($connect, $results);
	while($row = mysqli_fetch_array($result))
	{

	$net = ($row['total_tuition'] - $row['downpayment'] - $row['month1'] - $row['month2'] - $row['month3'] - $row['month4'] - $row['month5'] - $row['month6'] - $row['month7'] - $row['month8'] - $row['month9']);  
		
		$button = '<div>
					<a class = "edit_btn" href="studentbalprofile.php?edit='.$row['student_id'].'">Edit</a> 
				  </div>';
			

			if ($row['month1'] == 0 and $row['month2'] == 0 and $row['month3'] == 0 and $row['month4'] == 0 and $row['month5'] == 0 and $row['month6'] == 0 and $row['month7'] == 0 and $row['month8'] == 0 and $row['month9'] == 0){
			$bal = $net / 9;
			}
			else if ($row['month2'] == 0 and $row['month3'] == 0 and $row['month4'] == 0 and $row['month5'] == 0 and $row['month6'] == 0 and $row['month7'] == 0 and $row['month8'] == 0 and $row['month9'] == 0){
			$bal = $net / 8;
			}
			
			else if ($row['month3'] == 0 and $row['month4'] == 0 and $row['month5'] == 0 and $row['month6'] == 0 and $row['month7'] == 0 and $row['month8'] == 0 and $row['month9'] == 0){		
			$bal = $net / 7;
			}
			
			else if ($row['month4'] == 0 and $row['month5'] == 0 and $row['month6'] == 0 and $row['month7'] == 0 and $row['month8'] == 0 and $row['month9'] == 0){		
			$bal = $net / 6;
			}
			
			else if ($row['month5'] == 0 and $row['month6'] == 0 and $row['month7'] == 0 and $row['month8'] == 0 and $row['month9'] == 0){		
			$bal = $net / 5;
			}			
			
			else if ($row['month6'] == 0 and $row['month7'] == 0 and $row['month8'] == 0 and $row['month9'] == 0){		
			$bal = $net / 4;
			}			

			else if ($row['month7'] == 0 and $row['month8'] == 0 and $row['month9'] == 0){		
			$bal = $net / 3;
			}				
			
			else if ($row['month8'] == 0 and $row['month9'] == 0){		
			$bal = $net / 2;
			}
			
			else {
			$bal = $net;	
			}


	$output .= '	
			<tr>
				<td>'.$row["student_id"].'</td>
				<td>'.$row["first_name"].'</td>
				<td>'.$row["last_name"].'</td>
				<td>'.$row["total_tuition"].'</td>
				<td>'.$row["downpayment"].'</td>
				<td>'.$row["month1"].'</td>
				<td>'.$row["month2"].'</td>
				<td>'.$row["month3"].'</td>
				<td>'.$row["month4"].'</td>
				<td>'.$row["month5"].'</td>
				<td>'.$row["month6"].'</td>
				<td>'.$row["month7"].'</td>
				<td>'.$row["month8"].'</td>
				<td>'.$row["month9"].'</td>
				
				<td>'.$row["balance"].'</td>
				<td>'.$row["monthly_payment"].'</td>
				<td>'.$row["fully_paid"].'</td>
				<td>'.$row["late_payer"].'</td>
			</tr>

	';
}
	
return $output;

}
	
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type = "text/css" href = "gradestyle.css">
</head>
<body>
	<table class="table sticky">
		<tr>
			<th>Student&nbspID</th>
			<th>First&nbspname</th>
			<th>Last&nbspname</th>
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
		</tr>
		<?php
		echo fetch_data();
		?>
	</table>
	
<form method="post">
<input type="submit" name="create_pdf" class="btn btn-danger" value="Create PDF"/>
</form>


</body>
</html>

<?php

//if(isset($_POST["create_pdf"])){
if(isset($_GET['generate'])){
	//ob_start();
	require_once("tcpdf_min/tcpdf.php");
	//$pdf->AddPage();
	//error_Reporting(E_ALL);
	
	$obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
	$obj_pdf->AddPage();
	$obj_pdf->SetCreator(PDF_CREATOR);
	$obj_pdf->SetTitle("Full Report");
	$obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);
	$obj_pdf->SetHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
	$obj_pdf->SetHeaderFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
	$obj_pdf->SetDefaultMonospacedFont('helvetica');
	$obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
	$obj_pdf->SetMargins(PDF_MARGIN_LEFT, '5', PDF_MARGIN_RIGHT);
	$obj_pdf->SetPrintHeader(false);
	$obj_pdf->SetPrintFooter(false);
	$obj_pdf->SetAutoPageBreak(True, 10);
	$obj_pdf->SetFont('helvetica', '', 12);

	$content .='';
	
	$content .='
	
<style>

.table{
	font-family: sans-serif;
	border-collapse: collapse;
	font-size: 6px;
	background-color:white;
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
	<table class="table sticky">
		<tr style="white-space:nowrap;">
			<th style="background-color: #888888;color:white;">Student ID</th>
			<th style="background-color: #888888;color:white;">First name</th>
			<th style="background-color: #888888;color:white;width: 8%;">Last name</th>
			<th style="background-color: #888888;color:white;">Tuition</th>	
			<th style="background-color: #888888;color:white;width: 9.7%;">Downpayment</th>	
			<th style="background-color: #888888;color:white;">month1</th>	
			<th style="background-color: #888888;color:white;">month2</th>	
			<th style="background-color: #888888;color:white;">month3</th>	
			<th style="background-color: #888888;color:white;">month4</th>	
			<th style="background-color: #888888;color:white;">month5</th>	
			<th style="background-color: #888888;color:white;">month6</th>	
			<th style="background-color: #888888;color:white;">month7</th>	
			<th style="background-color: #888888;color:white;">month8</th>	
			<th style="background-color: #888888;color:white;">month9</th>	
			
			<th style="background-color: #888888;color:white;">Balance</th>	
			<th style="background-color: #888888;color:white;">Monthly payment</th>	
			<th style="background-color: #888888;color:white;width:7%;">Fullypaid</th>	
			<th style="background-color: #888888;color:white;">Late payer</th>
		</tr>
	';
	$content .= fetch_data();
	$content .= '</table>';
	$obj_pdf->writeHTML($content);
	//ob_end_clean();
	ob_end_clean();
	$obj_pdf->Output("Full Report.pdf", "I");
	
}

?>
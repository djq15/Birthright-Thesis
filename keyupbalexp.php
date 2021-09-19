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
//include('filterclass.php');
//include('filtercheck.php')



$connect = mysqli_connect("localhost", "root", "ieti19", "birthright_db");
	
	

$output = '';
	//if (isset($_POST['filter_selection']) == "first_name") {

	//$results = "SELECT Student_No, Status, Last_name, First_name, Middle_initial, Nickname, Province FROM birthright_db.masterlist, birthright_db.login where username=first_name and tag='2'";
	//$results = "SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, balance, monthly_payment, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and tag = '2'";
	$results = "SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, balance, total_payment, monthly_payment, late_payment1, late_payment2, late_payment3, late_payment4, late_payment5, fully_paid, tag, user_id FROM birthright_db.accounts, birthright_db.login where late_payer='Y' and user_id = student_id and clearance_approve='Y' and verified='1' and tag = '2'";
	//$filter_selection = $_POST['filter_selection'];

	//include('fetch-bal3.php');
	include('fetch-bal3exp.php');

$result = mysqli_query($connect, $results);

if(mysqli_num_rows($result) > 0)

{

	$output .= '<table class="table sticky">';	
	$output .= '	

		<thead>
		<tr>
			<th>Student&nbspID</th>
			<th>First&nbspname</th>
			<th>Last&nbspname</th>
		
			<th>Balance&nbsp;&nbsp;&nbsp;</th>	
			<th>Total&nbspPayment&nbsp;&nbsp;</th>
			<th>Late&nbspPayment&nbsp;1&nbsp;</th>	
			<th>Late&nbspPayment&nbsp;2&nbsp;</th>	
			<th>Late&nbspPayment&nbsp;3&nbsp;</th>	
			<th>Late&nbspPayment&nbsp;4&nbsp;</th>	
			<th>Late&nbspPayment&nbsp;5&nbsp;</th>	
			<th>Fully&nbsp;paid&nbsp;</th>	
			
			<th colspan="2">Action</th>
		</tr>
		<thead>
	
	';
	while($row = mysqli_fetch_array($result))
	{
		$net = ($row['total_tuition'] - $row['downpayment'] - $row['month1'] - $row['month2'] - $row['month3'] - $row['month4'] - $row['month5'] - $row['month6'] - $row['month7'] - $row['month8'] - $row['month9']);  
		
		$button = '<div>
					<a class = "edit_btn" href="studentbalprofileexp.php?edit='.$row['student_id'].'">Edit</a> 
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

			<tbody>
			<tr>
				<td>'.$row["student_id"].'</td>
				<td>'.$row["first_name"].'</td>
				<td>'.$row["last_name"].'</td>

				<td>'.$row["balance"].'</td>
				<td>'.$row["total_payment"].'</td>
				
				<td>'.$row["late_payment1"].'</td>
				<td>'.$row["late_payment2"].'</td>
				<td>'.$row["late_payment3"].'</td>
				<td>'.$row["late_payment4"].'</td>
				<td>'.$row["late_payment5"].'</td>
				<td>'.$row["fully_paid"].'</td>
				
				<!-- <td>'.$net.'</td> -->
				<!-- <td>'.$bal.'</td> -->
				<td>'.$button.'</td>
			</tr>
			</tbody>


		'
		;
		

	}
	

	$output .= '</table>';	
	echo $output;


}

else
{
	echo 'Data Not Found';
}

?>



<?php

	$output .= '<table class="table sticky">';	
	
	
	//tuition
	if ($_POST["DoesNotMatter2"] == "tuition"){
	
	$output .= '	
	
		<thead>
		<tr>
			<th>Student&nbspID</th>
			<th>First&nbspname</th>
			<th>Last&nbspname</th>
			<th>Tuition</th>	
			<th>Fully&nbsppaid</th>	
			<th>Late&nbsppayer</th>
			<th colspan="2">Action</th>
		</tr>
		<thead>
	
	';
	while($row = mysqli_fetch_array($result))
	{
	include('calculation.php');
	$button = '<div>
			<a class = "edit_btn" href="studentbalprofile.php?edit='.$row['student_id'].'">Edit</a> 
			 </div>';

		$output .= '

			<tbody>
			<tr>
				<td>'.$row["student_id"].'</td>
				<td>'.$row["first_name"].'</td>
				<td>'.$row["last_name"].'</td>
				<td>'.$row["total_tuition"].'</td>
				<td>'.$row["fully_paid"].'</td>
				<td>'.$row["late_payer"].'</td>
				<!-- <td>'.$net.'</td> -->
				<!-- <td>'.$bal.'</td> -->
				<td>'.$button.'</td>
			</tr>
			</tbody>


		'
		;
		

	}
	
	}
	
	//downpayment
	else if ($_POST["DoesNotMatter2"] == "downpayment"){
	
	$output .= '	
	
		<thead>
		<tr>
			<th>Student&nbspID</th>
			<th>First&nbspname</th>
			<th>Last&nbspname</th>
			<th>Downpayment</th>	
			<th>Fully&nbsppaid</th>	
			<th>Late&nbsppayer</th>
			<th colspan="2">Action</th>
		</tr>
		<thead>
	
	';
	while($row = mysqli_fetch_array($result))
	{
	include('calculation.php');
	$button = '<div>
			<a class = "edit_btn" href="studentbalprofile.php?edit='.$row['student_id'].'">Edit</a> 
			 </div>';
			 
		$output .= '

			<tbody>
			<tr>
				<td>'.$row["student_id"].'</td>
				<td>'.$row["first_name"].'</td>
				<td>'.$row["last_name"].'</td>
				<td>'.$row["downpayment"].'</td>
				<td>'.$row["fully_paid"].'</td>
				<td>'.$row["late_payer"].'</td>
				<!-- <td>'.$net.'</td> -->
				<!-- <td>'.$bal.'</td> -->
				<td>'.$button.'</td>
			</tr>
			</tbody>


		'
		;
		

	}
	
	}
	
	//month1
	else if ($_POST["DoesNotMatter2"] == "month1"){
	
	$output .= '	
	
		<thead>
		<tr>
			<th>Student&nbspID</th>
			<th>First&nbspname</th>
			<th>Last&nbspname</th>
			<th>month1</th>	
			<th>Fully&nbsppaid</th>	
			<th>Late&nbsppayer</th>
			<th colspan="2">Action</th>
		</tr>
		<thead>
	
	';
	while($row = mysqli_fetch_array($result))
	{
	include('calculation.php');
	$button = '<div>
			<a class = "edit_btn" href="studentbalprofile.php?edit='.$row['student_id'].'">Edit</a> 
			 </div>';

		$output .= '

			<tbody>
			<tr>
				<td>'.$row["student_id"].'</td>
				<td>'.$row["first_name"].'</td>
				<td>'.$row["last_name"].'</td>
				<td>'.$row["month1"].'</td>
				<td>'.$row["fully_paid"].'</td>
				<td>'.$row["late_payer"].'</td>
				<!-- <td>'.$net.'</td> -->
				<!-- <td>'.$bal.'</td> -->
				<td>'.$button.'</td>
			</tr>
			</tbody>


		'
		;
		

	}
	
	}
	
	//month2
	else if ($_POST["DoesNotMatter2"] == "month2"){
	
	$output .= '	
	
		<thead>
		<tr>
			<th>Student&nbspID</th>
			<th>First&nbspname</th>
			<th>Last&nbspname</th>
			<th>month2</th>	
			<th>Fully&nbsppaid</th>	
			<th>Late&nbsppayer</th>
			<th colspan="2">Action</th>
		</tr>
		<thead>
	
	';
	while($row = mysqli_fetch_array($result))
	{
	include('calculation.php');
	$button = '<div>
			<a class = "edit_btn" href="studentbalprofile.php?edit='.$row['student_id'].'">Edit</a> 
			 </div>';
			 
		$output .= '

			<tbody>
			<tr>
				<td>'.$row["student_id"].'</td>
				<td>'.$row["first_name"].'</td>
				<td>'.$row["last_name"].'</td>
				<td>'.$row["month2"].'</td>
				<td>'.$row["fully_paid"].'</td>
				<td>'.$row["late_payer"].'</td>
				<!-- <td>'.$net.'</td> -->
				<!-- <td>'.$bal.'</td> -->
				<td>'.$button.'</td>
			</tr>
			</tbody>


		'
		;
		

	}
	
	}
	
	//month3
	else if ($_POST["DoesNotMatter2"] == "month3"){
	
	$output .= '	
	
		<thead>
		<tr>
			<th>Student&nbspID</th>
			<th>First&nbspname</th>
			<th>Last&nbspname</th>
			<th>month3</th>	
			<th>Fully&nbsppaid</th>	
			<th>Late&nbsppayer</th>
			<th colspan="2">Action</th>
		</tr>
		<thead>
	
	';
	while($row = mysqli_fetch_array($result))
	{
	include('calculation.php');
	$button = '<div>
			<a class = "edit_btn" href="studentbalprofile.php?edit='.$row['student_id'].'">Edit</a> 
			 </div>';
			 
		$output .= '

			<tbody>
			<tr>
				<td>'.$row["student_id"].'</td>
				<td>'.$row["first_name"].'</td>
				<td>'.$row["last_name"].'</td>
				<td>'.$row["month3"].'</td>
				<td>'.$row["fully_paid"].'</td>
				<td>'.$row["late_payer"].'</td>
				<!-- <td>'.$net.'</td> -->
				<!-- <td>'.$bal.'</td> -->
				<td>'.$button.'</td>
			</tr>
			</tbody>


		'
		;
		

	}
	
	}
	
	//month4
	else if ($_POST["DoesNotMatter2"] == "month4"){
	
	$output .= '	
	
		<thead>
		<tr>
			<th>Student&nbspID</th>
			<th>First&nbspname</th>
			<th>Last&nbspname</th>
			<th>month4</th>	
			<th>Fully&nbsppaid</th>	
			<th>Late&nbsppayer</th>
			<th colspan="2">Action</th>
		</tr>
		<thead>
	
	';
	while($row = mysqli_fetch_array($result))
	{
	include('calculation.php');
	$button = '<div>
			<a class = "edit_btn" href="studentbalprofile.php?edit='.$row['student_id'].'">Edit</a> 
			 </div>';
			 
		$output .= '

			<tbody>
			<tr>
				<td>'.$row["student_id"].'</td>
				<td>'.$row["first_name"].'</td>
				<td>'.$row["last_name"].'</td>
				<td>'.$row["month4"].'</td>
				<td>'.$row["fully_paid"].'</td>
				<td>'.$row["late_payer"].'</td>
				<!-- <td>'.$net.'</td> -->
				<!-- <td>'.$bal.'</td> -->
				<td>'.$button.'</td>
			</tr>
			</tbody>


		'
		;
		

	}
	
	}
	
	//month5
	else if ($_POST["DoesNotMatter2"] == "month5"){
	
	$output .= '	
	
		<thead>
		<tr>
			<th>Student&nbspID</th>
			<th>First&nbspname</th>
			<th>Last&nbspname</th>
			<th>month5</th>	
			<th>Fully&nbsppaid</th>	
			<th>Late&nbsppayer</th>
			<th colspan="2">Action</th>
		</tr>
		<thead>
	
	';
	while($row = mysqli_fetch_array($result))
	{
	include('calculation.php');
	$button = '<div>
			<a class = "edit_btn" href="studentbalprofile.php?edit='.$row['student_id'].'">Edit</a> 
			 </div>';
			 
		$output .= '

			<tbody>
			<tr>
				<td>'.$row["student_id"].'</td>
				<td>'.$row["first_name"].'</td>
				<td>'.$row["last_name"].'</td>
				<td>'.$row["month5"].'</td>
				<td>'.$row["fully_paid"].'</td>
				<td>'.$row["late_payer"].'</td>
				<!-- <td>'.$net.'</td> -->
				<!-- <td>'.$bal.'</td> -->
				<td>'.$button.'</td>
			</tr>
			</tbody>


		'
		;
		

	}
	
	}
	
	//month6
	else if ($_POST["DoesNotMatter2"] == "month6"){
	
	$output .= '	
	
		<thead>
		<tr>
			<th>Student&nbspID</th>
			<th>First&nbspname</th>
			<th>Last&nbspname</th>
			<th>month6</th>	
			<th>Fully&nbsppaid</th>	
			<th>Late&nbsppayer</th>
			<th colspan="2">Action</th>
		</tr>
		<thead>
	
	';
	while($row = mysqli_fetch_array($result))
	{
	include('calculation.php');
	$button = '<div>
			<a class = "edit_btn" href="studentbalprofile.php?edit='.$row['student_id'].'">Edit</a> 
			 </div>';
			 
		$output .= '

			<tbody>
			<tr>
				<td>'.$row["student_id"].'</td>
				<td>'.$row["first_name"].'</td>
				<td>'.$row["last_name"].'</td>
				<td>'.$row["month6"].'</td>
				<td>'.$row["fully_paid"].'</td>
				<td>'.$row["late_payer"].'</td>
				<!-- <td>'.$net.'</td> -->
				<!-- <td>'.$bal.'</td> -->
				<td>'.$button.'</td>
			</tr>
			</tbody>


		'
		;
		

	}
	
	}
	
	//month7
	else if ($_POST["DoesNotMatter2"] == "month7"){
	
	$output .= '	
	
		<thead>
		<tr>
			<th>Student&nbspID</th>
			<th>First&nbspname</th>
			<th>Last&nbspname</th>
			<th>month7</th>	
			<th>Fully&nbsppaid</th>	
			<th>Late&nbsppayer</th>
			<th colspan="2">Action</th>
		</tr>
		<thead>
	
	';
	while($row = mysqli_fetch_array($result))
	{
	include('calculation.php');
	$button = '<div>
			<a class = "edit_btn" href="studentbalprofile.php?edit='.$row['student_id'].'">Edit</a> 
			 </div>';
			 
		$output .= '

			<tbody>
			<tr>
				<td>'.$row["student_id"].'</td>
				<td>'.$row["first_name"].'</td>
				<td>'.$row["last_name"].'</td>
				<td>'.$row["month7"].'</td>
				<td>'.$row["fully_paid"].'</td>
				<td>'.$row["late_payer"].'</td>
				<!-- <td>'.$net.'</td> -->
				<!-- <td>'.$bal.'</td> -->
				<td>'.$button.'</td>
			</tr>
			</tbody>


		'
		;
		

	}
	
	}
	
	//month8
	else if ($_POST["DoesNotMatter2"] == "month8"){
	
	$output .= '	
	
		<thead>
		<tr>
			<th>Student&nbspID</th>
			<th>First&nbspname</th>
			<th>Last&nbspname</th>
			<th>month8</th>	
			<th>Fully&nbsppaid</th>	
			<th>Late&nbsppayer</th>
			<th colspan="2">Action</th>
		</tr>
		<thead>
	
	';
	while($row = mysqli_fetch_array($result))
	{
	include('calculation.php');
	$button = '<div>
			<a class = "edit_btn" href="studentbalprofile.php?edit='.$row['student_id'].'">Edit</a> 
			 </div>';
			 
		$output .= '

			<tbody>
			<tr>
				<td>'.$row["student_id"].'</td>
				<td>'.$row["first_name"].'</td>
				<td>'.$row["last_name"].'</td>
				<td>'.$row["month8"].'</td>
				<td>'.$row["fully_paid"].'</td>
				<td>'.$row["late_payer"].'</td>
				<!-- <td>'.$net.'</td> -->
				<!-- <td>'.$bal.'</td> -->
				<td>'.$button.'</td>
			</tr>
			</tbody>


		'
		;
		

	}
	
	}
	
	//month9
	else if ($_POST["DoesNotMatter2"] == "month9"){
	
	$output .= '	
	
		<thead>
		<tr>
			<th>Student&nbspID</th>
			<th>First&nbspname</th>
			<th>Last&nbspname</th>
			<th>month9</th>	
			<th>Fully&nbsppaid</th>	
			<th>Late&nbsppayer</th>
			<th colspan="2">Action</th>
		</tr>
		<thead>
	
	';
	while($row = mysqli_fetch_array($result))
	{
	include('calculation.php');
	$button = '<div>
			<a class = "edit_btn" href="studentbalprofile.php?edit='.$row['student_id'].'">Edit</a> 
			 </div>';
			 
		$output .= '

			<tbody>
			<tr>
				<td>'.$row["student_id"].'</td>
				<td>'.$row["first_name"].'</td>
				<td>'.$row["last_name"].'</td>
				<td>'.$row["month9"].'</td>
				<td>'.$row["fully_paid"].'</td>
				<td>'.$row["late_payer"].'</td>
				<!-- <td>'.$net.'</td> -->
				<!-- <td>'.$bal.'</td> -->
				<td>'.$button.'</td>
			</tr>
			</tbody>


		'
		;
		

	}
	
	}
	
	//balance
	else if ($_POST["DoesNotMatter2"] == "balance"){
	
	$output .= '	
	
		<thead>
		<tr>
			<th>Student&nbspID</th>
			<th>First&nbspname</th>
			<th>Last&nbspname</th>
			<th>Balance</th>	
			<th>Fully&nbsppaid</th>	
			<th>Late&nbsppayer</th>
			<th colspan="2">Action</th>
		</tr>
		<thead>
	
	';
	while($row = mysqli_fetch_array($result))
	{
	include('calculation.php');
	$button = '<div>
			<a class = "edit_btn" href="studentbalprofile.php?edit='.$row['student_id'].'">Edit</a> 
			 </div>';
			 
		$output .= '

			<tbody>
			<tr>
				<td>'.$row["student_id"].'</td>
				<td>'.$row["first_name"].'</td>
				<td>'.$row["last_name"].'</td>
				<td>'.$row["balance"].'</td>
				<td>'.$row["fully_paid"].'</td>
				<td>'.$row["late_payer"].'</td>
				<!-- <td>'.$net.'</td> -->
				<!-- <td>'.$bal.'</td> -->
				<td>'.$button.'</td>
			</tr>
			</tbody>


		'
		;
		

	}
	
	}
	
	//monthlypayment
	else if ($_POST["DoesNotMatter2"] == "monthlypayment"){
	
	$output .= '	
	
		<thead>
		<tr>
			<th>Student&nbspID</th>
			<th>First&nbspname</th>
			<th>Last&nbspname</th>
			<th>Monthly&nbsp;payment</th>	
			<th>Fully&nbsppaid</th>	
			<th>Late&nbsppayer</th>
			<th colspan="2">Action</th>
		</tr>
		<thead>
	
	';
	while($row = mysqli_fetch_array($result))
	{
	include('calculation.php');
	$button = '<div>
			<a class = "edit_btn" href="studentbalprofile.php?edit='.$row['student_id'].'">Edit</a> 
			 </div>';
			 
		$output .= '

			<tbody>
			<tr>
				<td>'.$row["student_id"].'</td>
				<td>'.$row["first_name"].'</td>
				<td>'.$row["last_name"].'</td>
				<td>'.$row["monthly_payment"].'</td>
				<td>'.$row["fully_paid"].'</td>
				<td>'.$row["late_payer"].'</td>
				<!-- <td>'.$net.'</td> -->
				<!-- <td>'.$bal.'</td> -->
				<td>'.$button.'</td>
			</tr>
			</tbody>


		'
		;
		

	}
	
	}
	
	// else statement
	else {
	$output .= '	
	
		<thead>
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
			<th>Balance</th>	
			<th>Monthly&nbsppayment</th>	
			<th>Fully&nbsppaid</th>	
			<th>Late&nbsppayer</th>
			<th colspan="2">Action</th>
		</tr>
		<thead>
	
	';
	while($row = mysqli_fetch_array($result))
	{
	include('calculation.php');
		/*
		$net = ($row['total_tuition'] - $row['downpayment'] - $row['month1'] - $row['month2'] - $row['month3'] - $row['month4'] - $row['month5'] - $row['month6'] - $row['month7'] - $row['month8'] - $row['month9']);  
		*/
		$button = '<div>
					<a class = "edit_btn" href="studentbalprofile.php?edit='.$row['student_id'].'">Edit</a> 
				  </div>';
		/*	

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
			*/
		
		$output .= '

			<tbody>
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
				<!-- <td>'.$net.'</td> -->
				<!-- <td>'.$bal.'</td> -->
				<td>'.$button.'</td>
			</tr>
			</tbody>


		'
		;
		

	}
	
	
	}//the else tail

	$output .= '</table>';	
	
	
	echo $output;
	
?>
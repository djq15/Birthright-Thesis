<?php
//include('filterclass.php');
//include('filtercheck.php')

$connect = mysqli_connect("localhost", "root", "ieti19", "birthright_db");
	
	

$output = '';
	//if (isset($_POST['filter_selection']) == "first_name") {

	$results = "SELECT Student_No, Status, Last_name, First_name, Middle_initial, Nickname, Province FROM birthright_db.masterlist, birthright_db.login where username=first_name and tag='2'";
	//$filter_selection = $_POST['filter_selection'];
	if(isset($_POST["query"]))
	{
	$searchz = mysqli_real_escape_string($connect, $_POST["query"]);
	$results = "
	SELECT Student_No, Status, Last_name, First_name, Middle_initial, Nickname, Province FROM birthright_db.masterlist, birthright_db.login where username=first_name and tag='2' 
	and First_name LIKE '".$searchz."%'
	";
	
	}
	
	
	
	//below syntax should be default
	
	
else
{
	//$results = "SELECT student_id, first_name, last_name, prelim, midterm, final FROM ieti_db.subject1, ieti_db.login where username=first_name and tag='2'";
}

$result = mysqli_query($connect, $results);

if(mysqli_num_rows($result) > 0)
{
	$output .= '	<thead>
		<tr>
			<th>Student No</th>
			<th>Status</th>
			<th>Last Name</th>
			<th>First Name</th>		
			<th>Middle Initial</th>	
			<th>Nickname</th>	
			<th>Province</th>		
			<th colspan="2">Action</th>
		</tr>
	</thead>';
	while($row = mysqli_fetch_array($result))
	{
		$final_grade = ($row["prelim"] +  $row["midterm"] + $row["final"]) / 3;  
		$button = '<td>
					<a class = "edit_btn" href="studentprofile.php?edit='.$row['Student_No'].'">Edit</a> 
				  </td>';
		
		if ($final_grade == 4) {
			$final_grade = 'INC';
			}
			
			else if ($final_grade >= 99) { 
			$final_grade = '1.0';
			}
			else if ($final_grade >= 96) {
			$final_grade = '1.25';
			}	
			else if ($final_grade >= 93) {
			$final_grade = '1.5';
			}	
			else if ($final_grade >= 90) {
			$final_grade = '1.75';
			}				
			else if ($final_grade >= 87) {
			$final_grade = '2.0';
			}	
			else if ($final_grade >= 84) {
			$final_grade = '2.25';
			}	
			else if ($final_grade >= 81) {
			$final_grade = '2.5';
			}	
			else if ($final_grade >= 78) {
			$final_grade = '2.75';
			}	
			else if ($final_grade >= 75) {
			$final_grade = '3.0';
			}	
			
			else
			$final_grade = '5.0';

		
		$output .= '
			<tr>
				<td>'.$row["Student_No"].'</td>
				<td>'.$row["Status"].'</td>
				<td>'.$row["Last_name"].'</td>
				<td>'.$row["First_name"].'</td>
				<td>'.$row["Middle_initial"].'</td>
				<td>'.$row["Nickname"].'</td>
				<td>'.$row["Province"].'</td>
				<td>'.$button.'</td>
			</tr>
		
		'
		;
		

	}

	echo $output;
}
else
{
	echo 'Data Not Found';
}


?>
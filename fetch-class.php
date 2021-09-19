<html>
<head>


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
</head>

<body>
<?php

session_start();

$connect = mysqli_connect("localhost", "root", "ieti19", "birthright_db");


$currentUser = $_SESSION['User'];

$output = '';
	
	//$results = "SELECT Student_No, Status, Last_name, First_name, Middle_initial, Nickname, tag, Province FROM birthright_db.masterlist, birthright_db.login where username=first_name and tag='2'";
	//$results = "SELECT Student_No, Status, Last_name, First_name, Middle_initial, Nickname, tag, user_id, Province FROM birthright_db.masterlist, birthright_db.login where user_id=Student_No and tag='2'";
	$results = "SELECT Student_No, Status, Last_name, First_name, Middle_initial, Nickname, tag, user_id, Gender, Street, Province, Contact_No, Date_of_birth, Fathers_name, Mothers_name FROM birthright_db.masterlist, birthright_db.login where user_id=Student_No and verified='1' and tag='2'";
	
	
	if(isset($_POST["query"]))
	{
	unset($search);
	unset($results);
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	/*
	$results = "
	SELECT * FROM login, masterlist WHERE tag='2' 
	and First_name LIKE '%".$search."%' and user_id=Student_No or Last_name LIKE '%".$search."%' and user_id=Student_No or Student_No LIKE '%".$search."%' and user_id=Student_No
	";
	}
	*/
	
	$results .= "
	SELECT Student_No, Status, Last_name, First_name, Middle_initial, Nickname, tag, user_id, Gender, Street, Province, Contact_No, Date_of_birth, Fathers_name, Mothers_name FROM birthright_db.masterlist, birthright_db.login where user_id=Student_No and verified='1' and tag='2' and
	(Student_No LIKE '%".$search."%' or Status LIKE '%".$search."%' or Last_name LIKE '%".$search."%' or First_name LIKE '%".$search."%' or Middle_initial LIKE '%".$search."%' or Nickname LIKE '%".$search."%' or Gender LIKE '".$search."%' or Date_of_birth LIKE '%".$search."%' or Street LIKE '%".$search."%' or Province LIKE '%".$search."%' or Contact_No LIKE '%".$search."%')
	";
	}	
		
		
	$result = mysqli_query($connect, $results);


if(mysqli_num_rows($result) > 0)
{
	$output .= '<table class="table sticky">';
	$output .= '<thead>
		<tr>
			<th>Student&nbspNo</th>
			<th>Status</th>
			<th>Last&nbspName</th>
			<th>First&nbspName</th>			
			<th>Middle&nbspInitial</th>	
			<th>Nickname</th>	
			<th>Gender</th>	
			<th>Contact&nbsp;No</th>	
			<th>Date&nbsp;of&nbsp;Birth</th>
			<th>Street</th>
			<th>Province</th>	
			<th>Father\'s&nbsp;name</th>
			<th>Mother\'s&nbsp;name</th>
			<th colspan="2">Action</th>
		</tr>
	</thead>';
	while($row = mysqli_fetch_array($result))
	{
		$final_grade = ($row["prelim"] +  $row["midterm"] + $row["final"]) / 3;  
		
		//if ($currentUser == 'ProfessorX') {
		
		if ($_SESSION['tag'] == '1'){
		$button = '<div>
					<a class = "edit_btn" href="studentprofile.php?edit='.$row['Student_No'].'">Edit</a> 
				  </div>';
		}
		

		
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
			<tr style="white-space:nowrap;">
				<div style="white-space:nowrap;">
				<td>'.$row["Student_No"].'</td>
				<td>'.$row["Status"].'</td>
				<td>'.$row["Last_name"].'</td>
				<td>'.$row["First_name"].'</td>
				<td>'.$row["Middle_initial"].'</td>
				<td>'.$row["Nickname"].'</td>
				<td>'.$row["Gender"].'</td>
				<td>'.$row["Contact_No"].'</td>
				<td>'.$row["Date_of_birth"].'</td>
				<td>'.$row["Street"].'</td>
				<td>'.$row["Province"].'</td>
				<td>'.$row["Fathers_name"].'</td>
				<td>'.$row["Mothers_name"].'</td>
				<!-- <td>'.$final_grade.'</td> -->

				
				<td>'.$button.'</td>
				</div>
			</tr>
		
		'
		;
		

	}
	$output .= '<table>';
	echo $output;
}
else
{
	echo 'Data Not Found';
}

?>


</body>


</html>
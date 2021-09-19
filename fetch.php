<?php

$connect = mysqli_connect("localhost", "root", "ieti19", "ieti_db");

$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$results = "
	SELECT student_id, first_name, last_name, prelim, midterm, final FROM ieti_db.subject1, ieti_db.login
	WHERE username=first_name and tag='2' and first_name LIKE '%".$search."%'
	";
	
}
else
{
	//$query = "SELECT * FROM subject1 ORDER BY student_id";
	$results = "SELECT student_id, first_name, last_name, prelim, midterm, final FROM ieti_db.subject1, ieti_db.login where username=first_name and tag='2'";
	//$results = mysqli_query($db, "SELECT student_id, first_name, last_name, prelim, midterm, final FROM ieti_db.subject1, ieti_db.login where username=first_name and tag='2'");

}

$result = mysqli_query($connect, $results);

if(mysqli_num_rows($result) > 0)
{
	$output .= '	<thead>
		<tr>
			<th>Student ID</th>
			<th>First name</th>
			<th>Last name</th>
			<th>Prelim</th>		
			<th>Midterm</th>	
			<th>Final</th>	
			<th>Grade</th>	
			<th colspan="2">Action</th>
		</tr>
	</thead>';
	while($row = mysqli_fetch_array($result))
	{
		$final_grade = ($row["prelim"] +  $row["midterm"] + $row["final"]) / 3;  
		$button = '<td>
					<a class = "edit_btn" href="subject11.php?edit='.$row['student_id'].'">Edit</a> 
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
				<td>'.$row["student_id"].'</td>
				<td>'.$row["first_name"].'</td>
				<td>'.$row["last_name"].'</td>
				<td>'.$row["prelim"].'</td>
				<td>'.$row["midterm"].'</td>
				<td>'.$row["final"].'</td>
				<td>'.$final_grade.'</td>
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
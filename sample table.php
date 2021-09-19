<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
}
</style>
</head>
<body>

<h1>The th element</h1>

<p>The th element defines a header cell in a table:</p>

<table>
  <tr>
    <th>Month</th>
    <th>Savings</th>
  </tr>
  <tr>
    <td>January</td>
    <td>$100</td>
  </tr>
  <tr>
    <td>February</td>
    <td>$80</td>
  </tr>
</table>

</body>
</html>




<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
}

table {
	display: block;
    overflow-x: auto;
    white-space: nowrap;
	/* overflow: scroll; -- optional */
	/* overflow: auto; -- optional */
}
</style>
</head>
<body>

<h1>The thead, tbody, and tfoot elements</h1>

<table>
  <thead>
    <tr>
      <th>Month</th>
      <th>Savings</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>January</td>
      <td>$100</td>
    </tr>
    <tr>
      <td>February</td>
      <td>$80</td>
    </tr>
  </tbody>
  <tfoot>
    <tr>
      <td>Sum</td>
      <td>$180</td>
    </tr>
  </tfoot>
</table>

</body>
</html>



<table>
		<thead>
		<tr>
			<th>Student ID</th>
			<th>First name</th>
			<th>Last name</th>
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
			<th>Monthly payment</th>	
			<th colspan="2">Action</th>
		</tr>
		</thead>
		
		
		<tbody>
			<tr>
				<td>'.$row["student_id"].'</td>
				<td>'.$row["first_name"].'</td>
				<td>'.$row["last_name"].'</td>
				<td>'.$row["total_tuition"].'</td>
				<td>'.$row["downpayment"].'</td>
				<td>'.$row["month1"].'</td>
				<td>'.$row["month2"].'</td>
				<td>'.$row["month4"].'</td>
				<td>'.$row["month5"].'</td>
				<td>'.$row["month6"].'</td>
				<td>'.$row["month7"].'</td>
				<td>'.$row["month8"].'</td>
				<td>'.$row["month9"].'</td>
				<td>'.$net.'</td> 
				<td>'.$bal.'</td> 
				<td>'.$button.'</td>
			</tr>
		</tbody>
</table>
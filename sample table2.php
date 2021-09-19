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


<?php>
	$output .= '	
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
			<th>month10</th>	
			<th>month11</th>	
			<th>month12</th>	
			<th>month13</th>	
			<th>month14</th>	
			<th>month15</th>	
		</tr>

		<thead>
	
	';


		
		$output .= '

			<tbody>
			<tr>
				<td>'."Student ID1".'</td>
				<td>'."Student ID2".'</td>
				<td>'."Student ID3".'</td>
				<td>'."Student ID4".'</td>
				<td>'."Student ID5".'</td>
				<td>'."Student ID6".'</td>
				<td>'."Student ID7".'</td>
				<td>'."Student ID8".'</td>
				<td>'."Student ID9".'</td>
				<td>'."Student ID10".'</td>
				<td>'."Student ID11".'</td>
				<td>'."Student ID12".'</td>
				<td>'."Student ID13".'</td>
				<td>'."Student ID14".'</td>
				<td>'."Student ID15".'</td>
				<td>'."Student ID16".'</td>
				<td>'."Student ID17".'</td>
				<td>'."Student ID18".'</td>
				<td>'."Student ID19".'</td>
				<td>'."Student ID20".'</td>

			</tr>
			</tbody>

</table>
		'
		;
		echo $output;
?>
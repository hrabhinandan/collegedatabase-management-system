<html>
<head>
	<style type="text/css"><head>
	table {
		border-collapse: collapse;
		width:100;
		color: #eb9034;
		font-family: monospace;
		font-size: 25px;
		text-align: left;
		}
		th {

			background-color: #0000ff  ;
			color: white;
		}
		tr:nth-child(even) {background-color: #ededed}
	</style>
	<style>
body{
  background-image: url('1.webp');
}
</style>
</head>
<body>
<table>
<tr>
<th>USN</th><th></th>
<th>Student name</th>
<th> Address </th>
<th> Phone number</th><th></th>
<th> Gender</th><th> <th></th></th>
<th> OPERATIONS</th>
</tr>
<?php
$conn = mysqli_connect("localhost","root","", "collegedatabase");
$sql = "SELECT * FROM student";
$result = $conn->query($sql);

if ($result->num_rows > 0){
	while ($row = $result->fetch_assoc()) {
	echo "
	      <td>" .$row["usn"] ."</td><td></td>
	      <td>" .$row["student_name"] ."</td>
	      <td>" .$row["address"] ."</td>
	      <td>" .$row["phone_number"] ."</td><td></td>
	      <td>" .$row["gender"] ."</td>
	      </tr>
	      ";
	}
} else {
	echo "No results";
}
$conn->close();
?>  
</table>
</body>
</html>
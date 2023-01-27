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
<th>USN</th>
<th>Subcode</th>
<th> SSID</th>
<th> TEST1</th>
<th> TEST2</th>
<th> TEST3</th>
<th> FINAL IA </th>
</tr>
<?php
$conn = mysqli_connect("localhost","root","", "collegedatabase");
$sql = "SELECT * FROM iamarks";
$result = $conn->query($sql);

if ($result->num_rows > 0){
	while ($row = $result->fetch_assoc()) {
	echo "<tr><td>" .$row["usn"] ."</td><td>" .$row["subcode"] ."</td><td>" .$row["ssid"] ."</td><td>" .$row["test1"] ."</td><td>" .$row["test2"] ."</td><td>".$row["test3"] ."</td><td>".$row["finalIA"] ."</tr><tr>" ;
	}
} else {
	echo "No results";
}
$conn->close();
?>
</table>
</body>
</html>
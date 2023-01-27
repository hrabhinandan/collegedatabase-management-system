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
<th>SSID</th><th></th>
<th>SEM name</th>
<th> SEC </th>
</tr>
<?php
$conn = mysqli_connect("localhost","root","", "collegedatabase");
$sql = "SELECT * FROM semsec";
$result = $conn->query($sql);

if ($result->num_rows > 0){
	while ($row = $result->fetch_assoc()) {
	echo "<tr><td>" .$row["ssid"] ."</td><td>" ."</td><td>" .$row["sem"] ."</td><td>" .$row["sec"] ."</td><td> ";
	}
} else {
	echo "No results";
}
$conn->close();
?>
</table>
</body>
</html>
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
<th>subcode</th><th></th>
<th>title</th>
<th>sem</th>
<th>credits</th><th></th>
</tr>
<?php
$conn = mysqli_connect("localhost","root","", "collegedatabase");
$sql = "SELECT * FROM subject";
$result = $conn->query($sql);

if ($result->num_rows > 0){
	while ($row = $result->fetch_assoc()) {
	echo "<tr><td>" .$row["subcode"] ."</td><td>" ."</td><td>" .$row["title"] ."</td><td>" .$row["sem"] ."</td><td>" .$row["credits"] ."</td><td></td><td>";
	}
} else {
	echo "No results";
}
$conn->close();
?>
</table>
</body>
</html>
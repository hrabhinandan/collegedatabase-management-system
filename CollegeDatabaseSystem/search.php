<html>
<head>
       <title> Search Data by its USN </title>
      <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
</head>
<style>
	body{
		background-color: grey;
	}
	table,th,td{
		border: px solid black;
		width: 1200px;
		background-color: #1e90ff ;
	}
	.btn{
		width: 15%;
		height: 5%;
		font-size: 22px;
		padding: 0px;
	}
</style>

 <body background=
"3.jpg">
  <body>
    <style>
p {
  background-image: url('2.jpg');
}

</style>
</body>
<center>
  <h3> <div class="container">
      <div class="row col-md-7 col-md-offset-3">
        <div class="panel panel-primary">
          <div class="panel-heading text-center"><a href="admin.html" >HOME </a>| 
           |<a href="logout.php" >Logout </a></h3>
	<div class="container">
      <div class="row col-md-7 col-md-offset-3">
        <div class="panel panel-primary">
          <div class="panel-heading text-center">
            <h1>Search for a single Student Data</h1>
          </div>
              </div>
          </div>
        </div>
<div class="container">
<from action="" method="POST">
  <table>
    <tr>
      <th> USN </th>
      <th> Student Name </th>
      <th> Address </th>
      <th> Phone Number </th>
      <th> Gender </th>
    </tr> 
<input type="submit"  name="search"  value="SEARCH DATA"><br> </br>
</from>
<?php
$connection = mysqli_connect("localhost","root","");


if(isset($_POST['search']))
{
  $query= "SELECT * FROM 'student' ";
  $query_run = mysqli_query($connection,$query);

  while($row = mysqli_fetch_array($query_run))
  {
     echo $row['usn'];
  }
}
 ?>

</div>
</center>
</body>
</html>


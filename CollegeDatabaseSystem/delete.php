<?php
//including the database connection file
include("config.php");

//getting id of the data from url
$usn = $_GET['usn'];

//deleting the row from table
$result = mysqli_query($mysqli, "DELETE FROM student WHERE usn=$usn");

//redirecting to the display page (index.php in our case)
header("Location:index1.php");
?>
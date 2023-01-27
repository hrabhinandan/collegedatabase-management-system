<?php
  $subcode = $_POST['subcode'];
  $title = $_POST['subject'];
  $sem = $_POST['sem'];
  $credits = $_POST['usn'];
  //database connection
  $conn = new mysqli('localhost','root','','collegedatabase');
  if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
  }else{
    $stmt = $conn->prepare("insert into subject(subcode,title,sem,credits)values(?,?,?,?)");
    $stmt->bind_param("ssii",$subcode,$title,$sem,$credits);
    $stmt->execute();
   echo  header('location: IAMarks.php.html');
    $stmt->close();
    $conn->close();
  }
?>

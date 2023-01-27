<?php
  $usn = $_POST['usn'];
  $ssid = $_POST['ssid'];
  //database connection
  $conn = new mysqli('localhost','root','','collegedatabase');
  if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
  }else{
    $stmt = $conn->prepare("insert into class(usn,ssid)values(?,?)");
    $stmt->bind_param("ss",$usn,$ssid);
    $stmt->execute();
    echo  header('location: subject.php.html');
    $stmt->close();
    $conn->close();
  }
?>

<?php
  $usn = $_POST['ssid'];
  $subcode = $_POST['subject'];
  $ssid = $_POST['student_Name'];
  $test1 = $_POST['number0'];
  $test2 = $_POST['number1'];
  $test3 = $_POST['number2'];
  $finalIA = $_POST['number3'];
  //database connection
  $conn = new mysqli('localhost','root','','collegedatabase');
  if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
  }else{
    $stmt = $conn->prepare("insert into iamarks(usn,subcode,ssid,test1,test2,test3,finalIA)values(?,?,?,?,?,?,?)");
    $stmt->bind_param("sssiiii",$usn,$subcode,$ssid,$test1,$test2,$test3,$finalIA);
    $stmt->execute();
    echo "New registration sucessfully......";
    $stmt->close();
    $conn->close();
  }
?>

<?php
  $usn = $_POST['usn'];
  $student_name = $_POST['student_name'];
  $address = $_POST['Address'];
  $gender =  $_POST['gender'];
  $phone_number = $_POST['number'];

  //database connection
  $conn = new mysqli('localhost','root','','collegedatabase');
  if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
  }else{
    $stmt = $conn->prepare("insert into student(usn,student_name,address,gender,phone_number)values(?,?,?,?,?)");
    $stmt->bind_param("ssssi",$usn,$student_name,$address,$gender,$phone_number);
    $stmt->execute();
    echo  header('location: semsec.php.html');
    $stmt->close();
    $conn->close();
  }
?>
